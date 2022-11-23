<?php
/*************************************************************************************************
 * Copyright 2016 JPL TSolucio, S.L. -- This file is a part of TSOLUCIO coreBOS Customizations.
 * Licensed under the vtiger CRM Public License Version 1.1 (the "License"); you may not use this
 * file except in compliance with the License. You can redistribute it and/or modify it
 * under the terms of the License. JPL TSolucio, S.L. reserves all rights not expressly
 * granted by the License. coreBOS distributed by JPL TSolucio S.L. is distributed in
 * the hope that it will be useful, but WITHOUT ANY WARRANTY; without even the implied
 * warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. Unless required by
 * applicable law or agreed to in writing, software distributed under the License is
 * distributed on an "AS IS" BASIS, WITHOUT ANY WARRANTIES OR CONDITIONS OF ANY KIND,
 * either express or implied. See the License for the specific language governing
 * permissions and limitations under the License. You may obtain a copy of the License
 * at <http://corebos.org/documentation/doku.php?id=en:devel:vpl11>
 *************************************************************************************************/
require_once 'vendor/stefangabos/zebra_session/Zebra_Session.php';

/**
 * Session class
 */
class coreBOS_Session {

	private static $session_name = '';
	private static $session = null;
	private static $dbinitialized = false;

	/**
	 * @const STARTED - The session was started with the current request
	 */
	private const STARTED = 1;

	/**
	 * @const CONTINUE - No new session was started with the current request
	 */
	private const CONTINUED = 2;

	/**
	 * Constructor
	 * Avoid creation of instances.
	 */
	public function __construct() {
	}

	public static function kill() {
		if (self::isSessionStarted()) {
			self::$session->stop();
		}
	}

	public static function save() {
		$sdata = '';
		foreach ($_SESSION as $key => $value) {
			$sdata .= $key.'|'.serialize($value);
		}
		self::$session->write(session_id(), $sdata);
	}

	public static function isSessionStarted() {
		return (!is_null(self::$session) && PHP_SESSION_ACTIVE == self::$session->session_status());
	}

	public static function regenerate() {
		global $adb;
		$sid = session_create_id();
		$adb->pquery('update session_data set session_id=? where session_id=?', [$sid, session_id()]);
		session_id($sid);
		$params = session_get_cookie_params();
		setcookie(
			self::getSessionName(),
			$sid,
			time() + 30000,
			$params['path'],
			$params['domain'],
			$params['secure'],
			$params['httponly']
		);
		$_COOKIE[self::getSessionName()] = $sid;
	}

	/**
	 * Initialize session
	 */
	public static function init($setKCFinder = false, $saveTabValues = false, $sid = '', $section = '') {
		if (self::$session==null) {
			global $adb;
			self::checkDBInitialized();
			// instruct the session module to only accepts valid session IDs generated by the session module and rejects
			// any session ID supplied by users
			ini_set('session.use_strict_mode', 1);
			ini_set('session.cookie_samesite', 'Strict');
			session_name(self::getSessionName('', false, $section));
			if (!empty($sid)) {
				session_id($sid);
			}
			$link = $adb->database->_connectionID;
			switch ($section) {
				case 'cbws':
					$lock_user_agentGV = 'Webservice_Session_LockUserAgent';
					$lock_to_ipGV = 'Webservice_Session_LockIP';
					$sessionLifeSpan = 'WebService_Session_Life_Span';
					break;
				case 'cbmb':
					$lock_user_agentGV = 'Mobile_Session_LockUserAgent';
					$lock_to_ipGV = 'Mobile_Session_LockIP';
					$sessionLifeSpan = 'Mobile_Session_Life_Span';
					break;
				default:
					$lock_user_agentGV = 'Application_Session_LockUserAgent';
					$lock_to_ipGV = 'Application_Session_LockIP';
					$sessionLifeSpan = 'Application_Session_Life_Span';
					break;
			}
			self::$session = new Zebra_Session(
				$link,
				self::csrfGetSecret(),
				GlobalVariable::getVariable($sessionLifeSpan, 7200, 'Users', Users::getActiveAdminId()),
				GlobalVariable::getVariable($lock_user_agentGV, 1, 'Users', Users::getActiveAdminId()),
				GlobalVariable::getVariable($lock_to_ipGV, 0, 'Users', Users::getActiveAdminId()),
				0
			);
		}
		if ($setKCFinder) {
			self::setKCFinderVariables();
		}
		if ($saveTabValues) {
			self::copyTabVariables();
		}
		if (!isset($_SESSION['__CBOSSession_Info'])) {
			$_SESSION['__CBOSSession_Info'] = self::STARTED;
		} else {
			$_SESSION['__CBOSSession_Info'] = self::CONTINUED;
		}
		return session_id();
	}

	/**
	 * Sets the maximum expire time
	 *
	 * @param integer $time Time in seconds
	 * @param bool    $add  Add time to current expire time or not
	 *
	 * @return void
	 */
	public static function setExpire($time, $add = false) {
		if ($add && isset($_SESSION['__CBOSSession_Expire'])) {
			$_SESSION['__CBOSSession_Expire'] += $time;
		} else {
			$_SESSION['__CBOSSession_Expire'] = $time;
		}
		if (!isset($_SESSION['__CBOSSession_Expire_TS'])) {
			$_SESSION['__CBOSSession_Expire_TS'] = time();
		}
	}

	/**
	 * Sets the maximum idle time
	 *
	 * Sets the time-out period allowed between requests before the session-state
	 * provider terminates the session.
	 *
	 * @param integer $time Time in seconds
	 * @param bool    $add  Add time to current maximum idle time or not
	 *
	 * @return void
	 */
	public static function setIdle($time, $add = false) {
		if ($add && isset($_SESSION['__CBOSSession_Idle'])) {
			$_SESSION['__CBOSSession_Idle'] += $time;
		} else {
			$_SESSION['__CBOSSession_Idle'] = $time;
		}
		if (!isset($_SESSION['__CBOSSession_Idle_TS'])) {
			$_SESSION['__CBOSSession_Idle_TS'] = time();
		}
	}

	/**
	 * Check if session is expired
	 *
	 * @return boolean
	 */
	public static function isExpired() {
		return (isset($_SESSION['__CBOSSession_Expire']) && $_SESSION['__CBOSSession_Expire'] > 0 && isset($_SESSION['__CBOSSession_Expire_TS'])
			&& ($_SESSION['__CBOSSession_Expire_TS'] + $_SESSION['__CBOSSession_Expire']) <= time());
	}

	/**
	 * Check if session is idle
	 *
	 * @return boolean
	 */
	public static function isIdle() {
		return (isset($_SESSION['__CBOSSession_Idle']) && $_SESSION['__CBOSSession_Idle'] > 0 && isset($_SESSION['__CBOSSession_Idle_TS'])
			&& ($_SESSION['__CBOSSession_Idle_TS'] + $_SESSION['__CBOSSession_Idle']) <= time());
	}

	/**
	 * Gets a value indicating whether the session was created with the current request
	 *
	 * You MUST call this method only after you have started the session with the self::start() method.
	 *
	 * @return boolean true when the session was created with the current request
	 *                 false otherwise
	 *
	 * @see  self::start()
	 * @uses self::STARTED
	 */
	public static function isNew() {
		// The best way to check if a session is new is to check for existence of a session data storage
		// with the current session id, but this is impossible with the default PHP module wich is 'files'.
		// So we need to emulate it.
		return !isset($_SESSION['__CBOSSession_Info']) || $_SESSION['__CBOSSession_Info'] == self::STARTED;
	}

	/**
	 * Sets new ID of a session
	 *
	 * @param string $id New ID of a sesion
	 *
	 * @return string Previous ID of a session
	 * @see    session_id()
	 */
	public static function id($id = null) {
		if (!is_null($id)) {
			return session_id($id);
		}
		return session_id();
	}

	/**
	 * Copy Browser Tab variables to session
	 */
	public static function copyTabVariables() {
		if (!empty($_COOKIE['corebos_browsertabID'])) {
			$corebos_browsertabID = vtlib_purify($_COOKIE['corebos_browsertabID']);
			$newvars = array();
			foreach ($_SESSION as $key => $value) {
				if (strpos($key, $corebos_browsertabID) !== false && strpos($key, $corebos_browsertabID.'__prev') === false) {
					$newvars[$key.'__prev'] = $value;
				}
			}
			foreach ($newvars as $key => $value) {
				$_SESSION[$key] = $value;
			}
		}
	}

	/**
	 * create session name from given URL or $site_URL
	 */
	public static function getSessionName($URL = '', $force = false, $section = '') {
		global $site_URL;
		if (self::$session_name!='' && !$force) {
			return self::$session_name;
		}
		if (empty($site_URL)) {
			if (file_exists('config.inc.php')) {
				include 'config.inc.php';
			}
			if (file_exists('../config.inc.php')) {
				include '../config.inc.php';
				@include '../config-dev.inc.php';
			}
		}
		if (empty($URL)) {
			$URL = (empty($_SERVER['REQUEST_SCHEME']) ? 'http' : $_SERVER['REQUEST_SCHEME']).'://'
				.(empty($_SERVER['HTTP_HOST']) ? 'localhost' : $_SERVER['HTTP_HOST'])
				.(empty($_SERVER['SCRIPT_NAME']) ? 'index.php' : $_SERVER['SCRIPT_NAME']);
		}
		if (empty($URL)) {
			$URL = $site_URL;
		}
		$purl = parse_url($URL);
		$sn = preg_replace('/[^A-Za-z0-9]/', '', (isset($purl['host'])?$purl['host']:'').(isset($purl['path'])?dirname($purl['path']):'').(isset($purl['port'])?$purl['port']:''));
		$sn = 'cb'.md5($sn.$section);
		self::$session_name = $sn;
		return $sn;
	}

	/**
	* set session name
	*/
	public static function setSessionName($session_name) {
		self::$session_name = $session_name;
	}
	/**
	 * set KCFinder session variables
	 */
	public static function setKCFinderVariables() {
		global $upload_badext, $site_URL, $root_directory;
		if (empty($site_URL)) {
			return false;
		}
		self::init();
		$_SESSION['KCFINDER'] = array();
		$_SESSION['KCFINDER']['disabled'] = false;
		$_SESSION['KCFINDER']['uploadURL'] = $site_URL.'/storage/kcimages';
		$_SESSION['KCFINDER']['uploadDir'] = $root_directory.'storage/kcimages';
		$deniedExts = implode(' ', $upload_badext);
		$_SESSION['KCFINDER']['deniedExts'] = $deniedExts;

		list($http,$urldomain) = explode('://', $site_URL);
		if (strpos($urldomain, ':') !== false) {
			list($domain,$port) = explode(':', $urldomain);
			$_SESSION['KCFINDER']['cookieDomain'] = $domain;
		}
		session_write_close();
	}

	/**
	 * set global User session variables
	 */
	public static function setUserGlobalSessionVariables() {
		if (empty($_SESSION['__UnifiedSearch_SelectedModules__'])) {
			$appSearchModules = GlobalVariable::getVariable('Application_Global_Search_SelectedModules', '');
			if (!empty($appSearchModules)) {
				$selected_modules = explode(',', $appSearchModules);
				self::init();
				$_SESSION['__UnifiedSearch_SelectedModules__'] = $selected_modules;
				session_write_close();
			}
		}
	}

	/**
	 * Is key defined in session?
	 * Array elements can be specified by separating them with a caret ^
	 */
	public static function has($key, $sespos = null) {
		$keyparts = explode('^', $key);
		if (count($keyparts)==1) {
			if (is_null($sespos)) {
				return isset($_SESSION[$key]);
			} else {
				return isset($sespos[$keyparts[0]]);
			}
		} else {
			if (is_null($sespos)) {
				if (!isset($_SESSION[$keyparts[0]]) || !is_array($_SESSION[$keyparts[0]])) {
					return false;
				}
				$sespos = $_SESSION[$keyparts[0]];
			} else {
				if (!isset($sespos[$keyparts[0]]) || !is_array($sespos[$keyparts[0]])) {
					return false;
				}
				$sespos = $sespos[$keyparts[0]];
			}
			$key = substr($key, strpos($key, '^')+1);
			return self::has($key, $sespos);
		}
	}

	/**
	 * Get value for the key.
	 * Array elements can be specified by separating them with a caret ^
	 */
	public static function get($key, $defvalue = '') {
		$keyparts = explode('^', $key);
		if (count($keyparts)==1) {
			return (isset($_SESSION[$key]) ? $_SESSION[$key] : $defvalue);
		}
		if (!isset($_SESSION[$keyparts[0]])) {
			return $defvalue;
		}
		$sespos = $_SESSION[$keyparts[0]];
		for ($p=1, $pMax = count($keyparts); $p< $pMax; $p++) {
			if (!isset($sespos[$keyparts[$p]])) {
				return $defvalue;
			}
			$sespos = $sespos[$keyparts[$p]];
		}
		return $sespos;
	}

	/**
	 * Set value for the key.
	 * Array elements can be specified by separating them with a caret ^
	 */
	public static function set($key, $value, &$sespos = null) {
		$keyparts = explode('^', $key);
		self::init();
		if (count($keyparts)==1) {
			if (is_null($sespos)) {
				$_SESSION[$key] = $value;
			} else {
				if (!is_array($sespos)) {
					$sespos = array();
				}
				$sespos[$key] = $value;
			}
		} else {
			$key = substr($key, strpos($key, '^')+1);
			if (is_null($sespos)) {
				if (!isset($_SESSION[$keyparts[0]]) || !is_array($_SESSION[$keyparts[0]])) {
					$_SESSION[$keyparts[0]] = array();
				}
				self::set($key, $value, $_SESSION[$keyparts[0]]);
			} else {
				if (!isset($sespos[$keyparts[0]]) || !is_array($sespos[$keyparts[0]])) {
					$sespos[$keyparts[0]] = array();
				}
				self::set($key, $value, $sespos[$keyparts[0]]);
			}
		}
		self::save();
	}

	/**
	 * Merge the values of an array on to the SESSION array
	 * @param array of key=>value to add to the SESSION
	 * @param boolean, if true array values have precedence, else the existing SESSION values have precedence
	 */
	public static function merge($values, $overwrite_session = false) {
		self::init();
		if ($overwrite_session) {
			$_SESSION = array_merge($_SESSION, $values);
		} else {
			$_SESSION = array_merge($values, $_SESSION);
		}
		self::save();
	}

	/**
	 * Delete value for the key.
	 * Array elements can be specified by separating them with a caret ^
	 */
	public static function delete($key, &$sespos = null) {
		$keyparts = explode('^', $key);
		self::init();
		if (count($keyparts)==1) {
			if (is_null($sespos)) {
				if (isset($_SESSION[$key])) {
					unset($_SESSION[$key]);
				}
			} else {
				if (isset($sespos[$key])) {
					unset($sespos[$key]);
				}
			}
		} else {
			$key = substr($key, strpos($key, '^')+1);
			if (is_null($sespos)) {
				if (!isset($_SESSION[$keyparts[0]]) || !is_array($_SESSION[$keyparts[0]])) {
					return false; // this should be an exception
				}
				self::delete($key, $_SESSION[$keyparts[0]]);
			} else {
				self::delete($key, $sespos[$keyparts[0]]);
			}
		}
		self::save();
	}

	/**
	 * Delete all top level values whose key starts with the given string
	 */
	public static function deleteStartsWith($startswith) {
		self::init();
		if (version_compare(phpversion(), '5.6.0') >= 0) {
			$_SESSION = array_filter($_SESSION, function ($key) use ($startswith) {
				return strpos($key, $startswith)!==0;
			}, ARRAY_FILTER_USE_KEY);
		} else {
			$matchedKeys = array_filter(array_keys($_SESSION), function ($key) use ($startswith) {
				return strpos($key, $startswith)!==0;
			});
			$_SESSION = array_intersect_key($_SESSION, array_flip($matchedKeys));
		}
		self::save();
	}

	private static function checkDBInitialized() {
		global $adb;
		if (!self::$dbinitialized) {
			$adb->query("CREATE TABLE IF NOT EXISTS `session_data` (
				`session_id` varchar(34) NOT NULL default '',
				`hash` varchar(32) NOT NULL default '',
				`session_data` mediumblob NOT NULL,
				`session_expire` int(11) NOT NULL default '0',
				`section` varchar(10) NOT NULL default '',
				`userid` int(11) NOT NULL default '0',
				INDEX `cbuser` (`userid`),
				INDEX `cbsection` (`section`),
				PRIMARY KEY (`session_id`)
			) ENGINE=InnoDB DEFAULT CHARSET=utf8;");
			$cnses = $adb->getColumnNames('session_data');
			if (!in_array('userid', $cnses)) {
				$adb->query('ALTER TABLE `session_data` ADD `userid` int(11) NOT NULL default "0";');
				$adb->query('ALTER TABLE `session_data` ADD INDEX `cbuser` (`userid`)');
			}
			if (!in_array('section', $cnses)) {
				$adb->query('ALTER TABLE `session_data` ADD `section` varchar(11) NOT NULL default "";');
				$adb->query('ALTER TABLE `session_data` ADD INDEX `cbsection` (`section`)');
			}
		}
		self::$dbinitialized = true;
	}

	public static function saveUserID($userid, $sessionid, $section = '') {
		global $adb;
		$adb->pquery(
			'UPDATE session_data SET userid=?,section=? WHERE session_id=?',
			[$userid, $section, $sessionid]
		);
	}

	public static function deleteUserID($userid, $sessionid, $section = '') {
		global $adb;
		$adb->pquery(
			'DELETE FROM session_data WHERE (userid=? OR userid=0) AND section=? AND session_id!=?',
			[$userid, $section, $sessionid]
		);
	}

	public static function sessionExists($sessionid, $section = '', $userid = '') {
		global $adb;
		$params = explode(',', $section);
		if (count($params)==1) {
			$query = 'SELECT 1 FROM session_data WHERE section=? AND session_id=?';
		} else {
			$query = 'SELECT 1 FROM session_data WHERE section in ('.generateQuestionMarks($params).') AND session_id=?';
		}
		$params[] = $sessionid;
		if ($userid!='') {
			$query .= ' AND userid=?';
			$params[] = $userid;
		}
		$rs = $adb->pquery($query, $params);
		return ($rs && $adb->num_rows($rs));
	}

	/**
	 * Retrieves the secret, and generates one if necessary.
	 */
	private static function csrfGetSecret() {
		$file = 'include/csrfmagic/csrf-secret.php';
		$secret = '';
		if (file_exists($file)) {
			include $file;
		}
		return $secret;
	}
}

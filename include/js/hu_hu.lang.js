/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
   *********************************************************************************
*  Module       : JavaScript General
*  Language     : HU Magyar
*  Version      : 5.3.x
*  Created Date : 9:39 2011.11.11.
*  Translator      : Holbok István, holbok@gmail.com , http://holbok.hu

If you have a questions or suggestions about this translation module, please contact me.
Ha bármilyen kérdése vagy javaslata van ehhez a fordításhoz kapcsolódóan, akkor lépjen kapcsolatba velem.

e-mail: holbok@gmail.com
mobil: +3670-3420900
Skype: holboki
 ********************************************************************************/

var alert_arr = {
	'DELETE' : 'Biztos vagy abban, hogy törölni kívánod a kiválasztott ',
	'RECORDS' : ' rekordo(ka)t?',
	'SELECT' : 'Válassz ki legalább egy tételt!',
	'SELECTTEMPLATE':'Please select at least one document Template',
	'SELECTMERGE':'Please select an entity to merge!',
	'GENDOCSAVED':'Document saved. Please verify that it has been created correctly.',
	'DELETE_ACCOUNT' : 'A Cég(ek) törlése el fogja távolítani a kapcsolódó Lehetőségeket és Árajánlatokat is. Biztos vagy abban, hogy törölni kívánod a kiválasztott ',
	'DELETE_VENDOR' : 'A Szállító(k) törlése el fogja távolítani a kapcsolódó Beszerzés rendeléseket is. Biztos vagy abban, hogy törölni kívánod a kiválasztott ',
	'SELECT_MAILID' : 'Kérjük, hogy válassz ki egy email azonosítót',
	'OVERWRITE_EXISTING_ACCOUNT' : 'Felülírjuk ezt a meglévő céget?',
	'OVERWRITE_EXISTING_CONTACT' : 'Felülírjuk ezt a meglévő kapcsolatot?',
	'MISSING_FIELDS' : 'Hiányzó mezők:',
	'NOT_ALLOWED_TO_EDIT' : 'nincs jogosultságod szerkeszteni ezt a mezőt',
	'NOT_ALLOWED_TO_EDIT_FIELDS' : 'nincs jogosultságod szerkeszteni a mező(ke)t',
	'COLUMNS_CANNOT_BE_EMPTY' : 'A kiválasztott oszlopok nem lehetnek üresek',
	'CANNOT_BE_EMPTY' : 'nem lehet üres',
	'CANNOT_BE_NONE' : 'nem lehet semmi',
	'ENTER_VALID' : 'Kérjük, hogy adj meg egy érvényes ',
	'SHOULDBE_LESS' : ' kisebbnek kell lennie mint ',
	'SHOULDBE_LESS_EQUAL' : ' kisebbnek vagy egyenlőnek kell lennie mint ',
	'SHOULDBE_EQUAL' : ' egyenlőnek kell lennie ',
	'SHOULDBE_GREATER' : ' nagyobbnak kell lennie mint ',
	'SHOULDBE_GREATER_EQUAL' : ' nagyobbnak vagy egyenlőnek kell lennie mint ',
	'INVALID' : 'Érvénytelen ',
	'EXCEEDS_MAX' : ' elérte a maximális limitet ',
	'OUT_OF_RANGE' : ' kiment a tartományból',
	'SHOULDNOTBE_EQUAL' : ' nem lehet egyenlő ',
	'PORTAL_PROVIDE_EMAILID' : 'Kérjük, hogy adj meg egy érvényes e-mail címet belépési azonosítónak a portálra',
	'ADD_CONFIRMATION' : 'Biztos, hogy hozzá kívánod adni a kiválasztott ',
	'ACCOUNTNAME_CANNOT_EMPTY' : 'A Cégnév nem lehet üres',
	'CANT_SELECT_CONTACTS' : 'Nem választhatod ki a kapcsolódó Kapcsolatot a Jelöltek közül',
	'LBL_THIS' : 'Ez ',
	'DOESNOT_HAVE_MAILIDS' : 'nem rendelkezik semmilyen email címmel',
	'ARE_YOU_SURE' : 'Biztosan ezt akarod?',
	'DOESNOT_HAVE_AN_MAILID' : 'nem rendelkezik e-mail címmel',
	'MISSING_REQUIRED_FIELDS' : 'Hiányzó kötelező mezők: ',
	'READONLY' : 'csak olvasható',
	'SELECT_ATLEAST_ONE_USER' : 'Válassz ki legalább egy felhasználót',
	'DISABLE_SHARING_CONFIRMATION' : 'Biztos, hogy tiltani akarod a megosztást a kiválasztottak ',
	'USERS' : ' felhasználó(k) ?',
	'ENDTIME_GREATER_THAN_STARTTIME' : 'A befejezés ideje nagyobb kell, hogy legyen, mint a kezdés ideje ',
	'MISSING_EVENT_NAME' : 'Hiányzó Esemény név',
	'EVENT_TYPE_NOT_SELECTED' : 'Az Esemény típusa nincs kiválasztva',
	'CLOSEDATE_CANNOT_BE_EMPTY' : 'A Lezárás dátuma mező nem lehet üres',
	'SITEURL_CANNOT_BE_EMPTY' : 'A weboldal URL címe nem lehet üres',
	'SITENAME_CANNOT_BE_EMPTY' : 'A weboldal neve mező nem lehet üres',
	'LISTPRICE_CANNOT_BE_EMPTY' : 'A Listaár nem lehet üres',
	'INVALID_LIST_PRICE' : 'Érvénytelen Listaár',
	'PROBLEM_ACCESSSING_URL' : 'Probléma van az eléréssel URL: ',
	'CODE' : 'Kód: ',
	'WISH_TO_QUALIFY_MAIL_AS_CONTACT' : 'Biztos vagy benne hogy ezt az emailt iktatni akarod a Kapcsolatok közé?',
	'SELECT_ATLEAST_ONEMSG_TO_DEL' : 'Kérjük, hogy legalább egy üzenetet válassz ki törlésre',
	'ERROR' : 'Hiba',
	'FIELD_TYPE_NOT_SELECTED' : 'A mező típusa nincs kiválasztva',
	'SPECIAL_CHARACTERS_NOT_ALLOWED' : 'Különleges karakterek nem engedélyezettek a Címke mezőkben',
	'SPECIAL_CHARACTERS' : 'Különleges karakterek',
	'NOT_ALLOWED' : 'nincs megengedve. Kérjük, hogy próbálj meg egy másik értéket',
	'PICKLIST_CANNOT_BE_EMPTY' : 'A kiválasztó lista értékei nem lehetnek üresek',
	'DUPLICATE_VALUES_FOUND' : 'Duplikált értéket találtunk',
	'DUPLICATE_MAPPING_ACCOUNTS' : 'Duplikált leképezés a Cégeknek!!',
	'DUPLICATE_MAPPING_CONTACTS' : 'Duplikált leképezés a Kapcsolatoknak!!',
	'DUPLICATE_MAPPING_POTENTIAL' : 'Duplikált leképezés a Lehetőségeknek!!',
	'ERROR_WHILE_EDITING' : 'Hiba a Szerkesztés közben',
	'CURRENCY_CHANGE_INFO' : 'A pénznemet sikeresen módosítottuk.',
	'CURRENCY_CONVERSION_INFO' : 'Dollárt $ használsz mint pénznemet?  Kattints az OK-ra, ha maradsz a $ mellett, Visszavonás, ha változtatni akarod a pénznem váltási arányát.',
	'THE_EMAILID' : 'Az email cím ',
	'EMAIL_FIELD_INVALID' : ' az email mezőben érvénytelen',
	'MISSING_REPORT_NAME' : 'Hiányzó Jelentés név',
	'REPORT_NAME_EXISTS' : 'A Jelentés név már létezik, próbáld újra...',
	'WANT_TO_CHANGE_CONTACT_ADDR' : 'Módosítani akarod a címét azoknak a Kapcsolatoknak, akik ehhez a Cég(név)hez tartoznak?',
	'SURE_TO_DELETE' : 'Biztos vagy abban, hogy törölni akarod?',
	'NO_PRODUCT_SELECTED' : 'Nincs termék kiválasztva. Legalább egy Terméket válassz ki.',
	'VALID_FINAL_PERCENT' : 'Adj meg egy érvényes Végső kedvezmény százalékot!',
	'VALID_FINAL_AMOUNT' : 'Adj meg egy érvényes Végső kedvezmény értéket!',
	'VALID_SHIPPING_CHARGE' : 'Adj meg egy érvényes szállítási és kezelési költséget',
	'VALID_ADJUSTMENT' : 'Adj meg egy valós módosító összeget',
	'WANT_TO_CONTINUE' : 'Szeretnéd folytatni?',
	'ENTER_VALID_TAX' : 'Adj meg egy érvényes adó értéket',
	'VALID_TAX_NAME' : 'Adj meg egy érvényes adó nevet',
	'CORRECT_TAX_VALUE' : 'Adj meg egy javított adó értéket',
	'ENTER_POSITIVE_VALUE' : 'Adj meg egy pozítv számot',
	'LABEL_SHOULDNOT_EMPTY' : 'Az adó címke nem lehet üres',
	'NOT_VALID_ENTRY' : 'ez nem egy érvényes bevitel. Add meg a helyes értéket.',
	'VALID_DISCOUNT_PERCENT' : 'Adj meg egy érvényes Kedvezmény százalékot',
	'VALID_DISCOUNT_AMOUNT' : 'Adj meg egy érvényes Kedvezmény értéket',
	'SELECT_TEMPLATE_TO_MERGE' : 'Válassz ki egy sablont az összefűzéshez',
	'SELECTED_MORE_THAN_ONCE' : 'A következő tétel(ek)et több, mint egyszer választottad ki.',
	'YES' : 'igen',
	'NO' : 'nem',
	'MAIL' : 'levél',
	'EQUALS' : 'egyenlő',
	'NOT_EQUALS_TO' : 'nem egyenlő',
	'STARTS_WITH' : 'ezzel kezdődik',
	'CONTAINS' : 'tartalmazza',
	'DOES_NOT_CONTAINS' : 'nem tartalmazza',
	'LESS_THAN' : 'kevesebb, mint',
	'GREATER_THAN' : 'nagyobb, mint',
	'LESS_OR_EQUALS' : 'kisebb vagy egyenlő',
	'GREATER_OR_EQUALS' : 'nagyobb vagy egyenlő',
	'NO_SPECIAL_CHARS' : 'Különleges karakterek nem engedélyezettek a Díjbekérő sorszám karaktersorozatban',
	'PLS_SELECT_VALID_FILE' : 'Kérjük, hogy válassz egy fájlt a következő kiterjesztésekkel:\n',
	'NO_SPECIAL' : 'Különleges karakterek használata nem engedélyezett',
	'NO_QUOTES' : 'Idézetek (\' ") és a + jel nem engedélyezettek ',
	'IN_PROFILENAME' : ' a Profil névében',
	'IN_GROUPNAME' : ' a Csoport névében',
	'IN_ROLENAME' : ' a Munkakör névében',
	'VALID_TAX_PERCENT' : 'Adj meg egy létező adó százalékot',
	'VALID_SH_TAX' : 'Add meg a Szállítási és Kezelési Költség valós adómértékét ',
	'ROLE_DRAG_ERR_MSG' : 'A Szülő csomópontot nem mozgathatod a Gyermek csomópont alá',
	'LBL_DEL' : 'töröl',
	'VALID_DATA' : ' Adj meg érvényes adatot, Kérjük próbáld újra... ',
	'STDFILTER' : 'Standard szűrők',
	'STARTDATE' : 'Kezdő dátum',
	'ENDDATE' : 'Befejező dátum',
	'START_DATE_TIME' : 'Kezdő dátum és idő',
	'START_TIME' : 'Kezdő idő',
	'LBL_AND' : 'És',
	'LBL_OR': 'Vagy',
	'LBL_ENTER_VALID_PORT' : 'Kérjük, hogy adj meg egy érvényes port számot',
	'IN_USERNAME' : ' a Felhasználó névben ',
	'LBL_ENTER_VALID_NO' : 'Kérjük, hogy adj meg egy érvényes számot',
	'LBL_PROVIDE_YES_NO' : 'Érvénytelen érték. Kérjük, hogy Igen-t, vagy Nem-et adj meg.',
	'LBL_SELECT_CRITERIA' : ' Érvénytelen szempont. Kérjük válasz egy szempontot',
	'OPPORTUNITYNAME_CANNOT_BE_EMPTY' : 'A Lehetőség neve nem lehet üres',
	'NAME_DESC' : ' a Mappa nevének és a Leírásnak',
	'ENDS_WITH' : 'ezzel végződik',
	'SHARED_EVENT_DEL_MSG' : 'A felhasználónak nincs jogosultsága a megosztott esemény szerkesztéséhez/törléséhez.',
	'LBL_WRONG_IMAGE_TYPE' : 'A Kapcsolatok számára megengedett fájl típusok - jpeg, png, jpg, pjpeg, x-png vagy gif',
	'SELECT_MAIL_MOVE' : 'Kérjük, hogy válassz ki egy emailt és mozgasd...',
	'LBL_NOTSEARCH_WITHSEARCH_ALL' : 'Nem használtad a keresést. Minden rekordot exportálni fogunk innen ',
	'LBL_NOTSEARCH_WITHSEARCH_CURRENTPAGE' : 'Nem kerestél meg semmit sem. De kiválasztottad a kereséssel és az aktuális oldallal opciókat. Így az aktuális oldalon található rekordokat exportálni fogjuk innen ',
	'LBL_NO_DATA_SELECTED' : 'Egyetlen rekordot sem választottál ki. Legalább egy rekordot ke kell választani az exportáláshoz',
	'LBL_SEARCH_WITHOUTSEARCH_ALL' : 'Használtad a keresési opciókat, de nem választottad a kereséssel és összes opciókkal lehetőséget.Kattinthatsz az [OK]-ra, hogy exportáld az összes adatot vagy kattinthatsz a [Mégse]-re és próbálkozhatsz újból más export szempontokkal.',
	'STOCK_IS_NOT_ENOUGH' : 'A készlet nem elegendő',
	'LBL_QTY_IN_STOCK' : 'Készlet',
	'INVALID_QTY' : 'Érvénytelen mennyiség',
	'LBL_SEARCH_WITHOUTSEARCH_CURRENTPAGE' : 'Használtad a keresési opciókat, de nem választottad a kereséssel és összes opciókkal lehetőséget.Kattinthatsz az [OK]-ra, hogy exportáld az aktuális oldal adatait vagy kattinthatsz a [Mégse]-re és próbálkozhatsz újból más export szempontokkal.',
	'LBL_SELECT_COLUMN' : ' Érvénytelen oszlop. Kérjük, hogy válassz egy oszlopot',
	'LBL_NOT_ACCESSIBLE' : 'Nem hozzáférhető',
	'LBL_FILENAME_LENGTH_EXCEED_ERR' : 'Fájlnév nem haladhatja meg a 255 karaktert',
	'LBL_DONT_HAVE_EMAIL_PERMISSION' : 'Nincs jogosultságod az email mezőhöz, tehát nem választhatod ki az email címet',
	'LBL_NO_FEEDS_SELECTED' : 'Nincs kiválasztott adatfolyam',
	'LBL_SELECT_PICKLIST' : 'Legalább egy adatot válassz ki a törléshez',
	'LBL_CANT_REMOVE' : 'Nem törölheted az összes értéket',
	'LBL_GIVE_PICKLIST_VALUE' : 'Kérjük, hogy adj meg egy adatot a kiválasztott listaelemhez cserére',
	'LBL_SELECT_ROLE' : 'Kérjük, hogy legalább egy munkakört válassz ki, amelyhez az új értékeket hozzáadod',
	'LBL_ADD_PICKLIST_VALUE' : 'Kérjük, hogy legalább egy új értéket adj meg a hozzáadáshoz',
	'LBL_NO_VALUES_TO_DELETE' : 'nincs törölhető érték',
	'SAME_GROUPS' : 'Ugyanabból a csoportból kell választanod a rekordot az egyesítéshez',
	'ATLEAST_TWO' : 'Legalább 2 rekordot kell választanod az egyesítéshez',
	'MAX_THREE' : 'A számodra engedélyezett maximum: 3 rekord kiválasztása',
	'MAX_RECORDS_EXCEEDED': 'You have exceeded the maximum amount of selectable records',
	'MAX_RECORDS' : 'A számodra engedélyezett maximum: 4 rekord kiválasztása',
	'CON_MANDATORY' : 'Válaszd a kötelező mezőt Vezetéknév',
	'LE_MANDATORY' : 'Válaszd a kötelező mezőket Vezetéknév és Cég',
	'ACC_MANDATORY' : 'Válaszd a kötelező mezőt Cégnév',
	'PRO_MANDATORY' : 'Válaszd a kötelező mezőt Termék neve',
	'TIC_MANDATORY' : 'Válaszd a kötelező mezőt Hibajegy címe',
	'POTEN_MANDATORY' : 'Válaszd a kötelező mezőt Lehetőség neve',
	'VEN_MANDATORY' : 'Válaszd a kötelező mezőt Szállító neve',
	'DEL_MANDATORY' : 'A kötelező mezőket nem törölheted',
	'MSG_CHANGE_CURRENCY_REVISE_UNIT_PRICE' : 'Az egységárat minden pénznemben felül fogjuk vizsgálni a kiválasztott pénznem alapján. Biztosan ezt akarod?',
	'Select_one_record_as_parent_record' : 'Válassz ki egy rekordot, mint szülő rekord',
	'RECURRING_FREQUENCY_NOT_PROVIDED' : 'Az ismétlődés gyakorisága nincs megadva',
	'RECURRING_FREQNECY_NOT_ENABLED' : 'Az ismétlődés gyakoriságát megadtad, de nem engedélyezett az ismétlődés',
	'NO_SPECIAL_CHARS_DOCS' : 'Különleges karakterek mint idézőjelek, vissza per jel, + jel, % százalék és ? nem engedélyezettek',
	'FOLDER_NAME_TOO_LONG' : 'Túl hosszú mappa név. Próbáld újra!',
	'FOLDERNAME_EMPTY' : 'A mappa név nem lehet üres',
	'DUPLICATE_FOLDER_NAME' : 'Egy látező mappanevet próbáltál duplikálni. Próbáld újra!',
	'FOLDER_DESCRIPTION_TOO_LONG' : 'Túl hosszú mappa leírás. Próbáld újra!',
	'NOT_PERMITTED' : 'Nem vagy jogosult a művelet végrehajtására.',
	'ALL_FILTER_CREATION_DENIED' : 'Nem hozható létre egyedi Nézet "All" névvel, próbálj más Nézet nevet használni',
	'OPERATION_DENIED' : 'A rendszer visszautasította a művelet végrehajtását',
	'EMAIL_CHECK_MSG' : 'A portál hozzáférés nem elérhető, ha az email mező üresen kerül mentésre',
	'IS_PARENT' : 'Ennek a Terméknek vannak al-termékei, nem engedélyezett ehhez a termékhez szülő választása',
	'LBL_NO_ROLES_SELECTED' : 'Nincs munkakör kiválasztva, szeretnéd folytatni?',
	'LBL_DUPLICATE_FOUND' : 'Duplikált bevitelt találtunk az értékhez ',
	'LBL_CANNOT_HAVE_EMPTY_VALUE' : 'Nem cserélhető le üres értékre. Ha el akarod távolítani az értéket, akkor használd a Törlés funkciót.',
	'LBL_DUPLICATE_VALUE_EXISTS' : 'Duplikált értékek léteznek',
	'LBL_WANT_TO_DELETE' : 'Ez törölni fogja a megjelölt kiválasztó lista értéke(ke)t minden munkakörhöz. Biztos, hogy folytatni akarod?',
	'LBL_DELETE_ALL_WARNING' : 'Legalább egy érték kell a kiválasztó listához',
	'LBL_PLEASE_CHANGE_REPLACEMENT' : 'Kérjük, hogy cseréld a helyettesítő értéket; ez szintén ki van választva törlésre',
	'BLOCK_NAME_CANNOT_BE_BLANK' : 'A blokk neve nem lehet üres',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE' : 'Biztos vagy abban, hogy Törölni akarod?',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE_EXACT_DUPLICATE': 'Are you sure you want to Delete All Exact record duplicates?',
	'PLEASE_MOVE_THE_FIELDS_TO_ANOTHER_BLOCK' : 'Mozgasd a mezőt egy másik blokkba',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE_BLOCK' : 'Biztos vagy abban, hogy Törölni akarod a blokkot?',
	'LABEL_CANNOT_NOT_EMPTY' : 'Címke nem lehet üres',
	'LBL_TYPEALERT_' : 'Figyelmeztetés',
	'LBL_WITH' : 'azzal a(z)',
	'LBL_LENGTHALERT' : 'Sajnos, nem tudod leképezni a mezőket különböző karakter hosszal. Kérjük, hogy ugyan azzal vagy nagyobb karakterhosszal képezz le mezőket.',
	'LBL_DECIMALALERT' : 'Sajnos, nem tudod leképezni a mezőket különböző tizedes helyekkel. Kérjük, hogy ugyan azzal vagy több tizedes hellyel képezz le mezőket.',
	'PICKLIST2PICKLISTALERT': 'Please make sure both picklists share the same values',
	'PICKLIST2TEXTALERT': 'Please make sure the destination text field can hold the longest picklist value',
	'FIELD_IS_MANDATORY' : 'Kötelező mező',
	'FIELD_IS_ACTIVE' : 'A mező használatra kész',
	'FIELD_IN_QCREATE' : 'A gyors létrehozásban elérhető a mező',
	'FIELD_IS_MASSEDITABLE' : 'Tömeges módosításra elérhető',
	'IS_MANDATORY_FIELD' : 'kötelező mező.',
	'AMOUNT_CANNOT_BE_EMPTY' : 'Az összeg nem lehet üres',
	'LABEL_ALREADY_EXISTS' : 'A Címke már létezik. Kérjük, hogy adj meg egy másik címkét',
	'LENGTH_OUT_OF_RANGE' : 'A Blokk hossza kevesebb, mint 50 karakter kell, hogy legyen',
	'LBL_SELECT_ONE_FILE' : 'Legalább egy fájlt ki kell választanod',
	'LBL_UNABLE_TO_ADD_FOLDER' : 'Nem lehet mappát hozzáadni. Kérjük, hogy próbáld újra.',
	'LBL_ARE_YOU_SURE_YOU_WANT_TO_DELETE_FOLDER' : 'Biztos vagy abban, hogy törölni akarod ezt a mappát?',
	'LBL_ERROR_WHILE_DELETING_FOLDER' : 'Hiba a mappa törlése közben. Kérjük, hogy próbáld újra.',
	'LBL_FILE_CAN_BE_DOWNLOAD' : 'A fájl letölthető',
	'LBL_DOCUMENT_LOST_INTEGRITY' : 'Ez a dokumentum nem elérhető. Inaktívként meg lesz jelölve.',
	'LBL_DOCUMENT_NOT_AVAILABLE' : 'Ez a dokumentum nem elérhető letöltésre',
	'LBL_FOLDER_SHOULD_BE_EMPTY' : 'A mappának üresnek kell lennie ahhoz, hogy törölhessük!',
	'LBL_PLEASE_SELECT_FILE_TO_UPLOAD' : 'Válaszd ki a fájlt a feltöltéshez.',
	'LBL_ARE_YOU_SURE_TO_MOVE_TO' : 'Biztos vagy abban, hogy a fájl(oka)t mozgatni akarod a ',
	'LBL_FOLDER' : ' mappába',
	'LBL_UNABLE_TO_UPDATE' : 'Nem lehet módosítani! Kérjük, hogy próbáld újra.',
	'LBL_BLANK_REPLACEMENT' : 'Üres érték nem választható cserére',
	'LBL_IMAGE_DELETED' : 'A kép törölve',
	'ERR_FIELD_SELECTION' : 'Valamilyen hiba van a mező kiválasztásban',
	'NO_LINE_ITEM_SELECTED' : 'Nincs egy sor sem kiválasztva. Kérjük, hogy legalább egy sort válassz ki.',
	'LINE_ITEM' : 'Sor',
	'LIST_PRICE' : 'Listaár',
	'LBL_PRINT_EMAIL' : 'Nyomtat',
	'LBL_DELETE_EMAIL' : 'Töröl',
	'LBL_DOWNLOAD_ATTACHMENTS' : 'Mellékletek letöltése',
	'LBL_QUALIFY_EMAIL' : 'Iktat',
	'LBL_FORWARD_EMAIL' : 'Továbbít',
	'LBL_REPLY_TO_SENDER' : 'Válasz a Feladónak',
	'LBL_REPLY_TO_ALL' : 'Válasz Mindenkinek',
	'LBL_WIDGET_HIDDEN' : 'Rejtett eszköz',
	'LBL_RESTORE_FROM_PREFERENCES' : 'A Kezdőlap Létrehozás gombjával vagy a beállításaidból vissza tudod állítani',
	'ERR_HIDING' : 'Hiba az elrejtés közben',
	'MSG_TRY_AGAIN' : 'Kérjük, hogy próbáld újra',
	'MSG_ENABLE_SINGLEPANE_VIEW' : 'Egyszerű mező nézet engedélyezve',
	'MSG_DISABLE_SINGLEPANE_VIEW' : 'Egyszerű mező nézet tiltva',
	'MSG_FTP_BACKUP_DISABLED' : 'FTP mentés (Backup) tiltva',
	'MSG_LOCAL_BACKUP_DISABLED' : 'Helyi mentés (Backup) tiltva',
	'MSG_FTP_BACKUP_ENABLED' : 'FTP mentés (Backup) engedélyezve',
	'MSG_LOCAL_BACKUP_ENABLED' : 'Helyi mentés (Backup) engedélyezve',
	'MSG_CONFIRM_PATH' : 'erősítsd meg az útvonal adatokkal',
	'MSG_CONFIRM_FTP_DETAILS' : 'erősítsd meg az FTP adatokkal',
	'START_PERIOD_END_PERIOD_CANNOT_BE_EMPTY' : 'A kezdő és záró időszak nem lehet üres',
	'LBL_ADD' : 'Hozzáad ',
	'Module' : 'Modul',
	'DashBoard' : 'Műszerfal',
	'RSS' : 'RSS',
	'Default' : 'Alapértelmezett',
	'Notebook' : 'Jegyzetfüzet',
	'ReportCharts': 'Jelentés Grafikonok',
	'CustomWidget': 'Aggregate Filter',
	'SPECIAL_CHARS' : '\\ / < > + \' " ',
	'BETWEEN' : 'közte',
	'BEFORE' : 'előtt',
	'AFTER' : 'utána',
	'ERROR_DELETING_TRY_AGAIN' : 'Hiba a Törlés közben. Kérjük, hogy próbáld meg újra.',
	'LBL_ENTER_WINDOW_TITLE' : 'Kérjük, hogy add meg az ablak címét',
	'LBL_SELECT_ONLY_FIELDS' : 'Kérjük, hogy csak két mezőt válassz.',
	'LBL_ENTER_RSS_URL' : 'Kérjük, hogy add meg az RSS URL-t',
	'LBL_ADD_HOME_WIDGET' : 'Nem lehet hozzáadni a kezdőlapi dobozt. Próbáld meg újra.',
	'LBL_DEFAULT_VALUE_FOR_THIS_FIELD' : 'Alapértelmezett érték ebben a mezőben',
	'RECIPIENTS_CANNOT_BE_EMPTY' : 'A kiválasztott címzettek nem lehet üres mező',
	'VALID_SCANNER_NAME' : 'Kérjük, hogy adj meg egy érvényes Szkenner nevet (ebben csak betűk és számok lehetnek)',
	'ERR_SAME_SOURCE_AND_TARGET' : 'A forrás és a cél mező nem lehet ugyanaz',
	'ERR_ATLEAST_ONE_VALUE_FOR' : 'Neked legalább egy értéket ki kell választanod ehhez: ',
	'ERR_SELECT_MODULE_FOR_DEPENDENCY' : 'Kérjük, hogy válassz egy modult, hogy megadd a Függőséget',
	'OVERWRITE_EXISTING_ACCOUNT1' : 'Felül akarod írni a létező cím adatokat a kiválasztott Cég (',
	'OVERWRITE_EXISTING_ACCOUNT2' : ') címadataival?',
	'OVERWRITE_EXISTING_CONTACT1' : 'Felül akarod írni a létező cím adatokat a kiválasztott Kapcsolat (',
	'OVERWRITE_EXISTING_CONTACT2' : ') címadataival?',
	'LBL_TYPEALERT_1' : 'Sajnos, ezt nem tudod leképezni ',
	'LBL_TYPEALERT_2' : 'adat típussal. Kérjük, hogy ugyan azzal az adattípussal képezd le.',
	'LBL_SIZE_SHOULDNOTBE_GREATER' : 'A fájl mérete nem lehet nagyobb, mint ',
	'LBL_MAX_SIZE' : 'Maximális feltöltési méret',
	'LBL_FILESIZEIN_MB' : 'MB',
	'LBL_FILESIZEIN_KB' : 'KB',
	'LBL_FILESIZEIN_B' : 'B',
	'LBL_HELP_TITLE' : 'Segítség',
	'LBL_WIKI_TITLE' : 'Kézikönyvek',
	'LBL_FAQ_TITLE' : 'TudásTár',
	'LBL_VIDEO_TITLE' : 'Videó',
	'LBL_CLOSE_TITLE' : 'Bezárás',
	'LBL_SELECT' : 'Válaszd ki az alapértelmezett dobozokat a megjelenítéshez.',
	'ERR_SELECT_ATLEAST_ONE_MERGE_CRITERIA_FIELD' : 'Válassz ki legalább egy mezőt az összefűzés feltételnek',
	'LBL_MERGE_SHOULDHAVE_INFO' : 'Válassz ki legalább egy mezőt az Egyesítési feltételekhez',
	'MAP_NAME_EXISTS' : 'A térkép név már létezik.  Felül akarod írni ezt?',
	'MAP_DELETED_INFO' : 'Ezt a térképet töröltük. Ezt a térképet nem tudod újból használni.',
	'ERR_PLEASE_MAP_MANDATORY_FIELDS' : 'Kérjük, hogy a következő kötelező mezőket használd a leképezésekben',
	'ERR_MAP_NAME_ALREADY_EXISTS' : 'Ez a leképezés név már használt. Kérjük, hogy adj meg egy másik nevet.',
	'ERR_MAP_NAME_CANNOT_BE_EMPTY' : 'A Leképezés neve mező nem lehet üres',
	'ERR_FIELDS_MAPPED_MORE_THAN_ONCE' : 'Következő mező több, mint egyszer van leképezve. Kérjük, hogy ellenőrizd a mező hozzárendeléseket.',
	'ERR_SELECT_EITHER' : 'Válassz ki egy Céget vagy Kapcsolatot a Vevő Jelölt konvertálásához',
	'ERR_SELECT_ACCOUNT' : 'Válassz ki egy Céget a folytatáshoz',
	'ERR_SELECT_CONTACT' : 'Válassz ki egy Kapcsolatot a folytatáshoz',
	'ERR_MANDATORY_FIELD_VALUE' : 'Kötelező mezők értékei hiányoznak',
	'ERR_POTENTIAL_AMOUNT' : 'A Lehetőség értékének számnak kell lennie',
	'ERR_EMAILID' : 'Adj meg érvényes e-mail címet',
	'ERR_TRANSFER_TO_ACC' : 'A Céget ki kell választani a kapcsolódó rekordok átalakításához',
	'ERR_TRANSFER_TO_CON' : 'A Kapcsolatot ki kell választani a kapcsolódó rekordok átalakításához',
	'SURE_TO_DELETE_CUSTOM_MAP' : 'Biztos vagy abban, hogy törölni akarod a mező-leképezést?',
	'LBL_CLOSE_DATE' : 'Bezárás dátuma',
	'LBL_EMAIL' : 'E-mail',
	'MORE_THAN_500' : 'Több mint 500 rekordot választottál ki. Ennek a feldolgozása hosszabb ideig is eltarthat. Biztos vagy benne, hogy folytatni szeretnéd?',
	'LBL_MAPPEDALERT' : 'Ezt a mezőt már leképeztük egyszer',
	'RECURRING_FREQENCY_NOT_ENABLED' : 'Az ismétlődés gyakoriságát megadtad, de nem engedélyezett az ismétlődés',
	'LBL_REPORT_NAME': 'Please enter a name for the new report.',
	'LBL_REPORT_NAME_ERROR': 'You must give a new name to the report.',
	'LBL_IS' : 'is',
	'LBL_CONTAINS': 'contains',
	'LBL_DOES_NOT_CONTAIN' : 'does not contain',
	'LBL_STARTS_WITH' : 'starts with',
	'LBL_ENDS_WITH' : 'ends with',
	'LBL_HAS_CHANGED' : 'has changed',
	'LBL_HAS_CHANGED_TO' : 'has changed to',
	'LBL_WAS' : 'was',
	'LBL_MONTHDAY' : 'month-day',
	'LBL_IS_EMPTY': 'is empty',
	'LBL_IS_NOT_EMPTY' : 'is not empty',
	'LBL_EQUAL_TO' : 'equal to',
	'LBL_LESS_THAN' : 'less than',
	'LBL_GREATER_THAN' : 'greater than',
	'LBL_DOEST_NOT_EQUAL' : 'does not equal',
	'LBL_LESS_THAN_OR_EQUAL_TO' : 'less than or equal to',
	'LBL_GREATER_THAN_OR_EQUAL_TO' : 'greater than or equal to',
	'LBL_IS_NOT' : 'is not',
	'LBL_BETWEEN' : 'between',
	'LBL_BEFORE' : 'before',
	'LBL_AFTER' : 'after',
	'LBL_DOES_NOT_START_WITH' : 'does not start with',
	'LBL_DOES_NOT_END_WITH' : 'does not end with',
	'DOES_NOT_START_WITH':'does not start with',
	'DOES_NOT_END_WITH':'does not end with',
	'SOUNDEX':'soundex',
	'REGEXP':'regexp',
	'Widget_Deleted_Sucessfully':'Widget deleted sucessfully',
	'LBL_IS_TODAY' : 'is today',
	'LBL_LESS_THAN_DAYS_AGO' : 'less than days ago',
	'LBL_MORE_THAN_DAYS_AGO' : 'more than days ago',
	'LBL_IN_LESS_THAN' : 'in less than',
	'LBL_IN_MORE_THAN' : 'in more than',
	'LBL_DAYS_AGO' : 'days ago',
	'LBL_DAYS_LATER' : 'days later',
	'LBL_LESS_THAN_HOURS_BEFORE' : 'less than hours before',
	'LBL_LESS_THAN_HOURS_LATER' : 'less than hours later',
	'LBL_MORE_THAN_HOURS_BEFORE' : 'more than hours before',
	'LBL_MORE_THAN_HOURS_LATER' : 'more than hours later',
	'LBL_EXISTS' : 'exists',
	'MAXIMUM_OF_MODULES_PERMITTED' : 'You have reached the maximum of modules that are permitted.',
	'ONLY_ONE_MODULE_PERMITTED_FOR_REPORT' : 'You can select only one related module for this type of report',
	'MUST_SELECT_ONE_MODULE_FOR_REPORT' : 'You must select one related module for this type of report',
	'LBL_NEW_CONDITION' : 'Új feltétel',
	'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL' : 'Új Feltétel csoport',
	'WF_UPDATE_MAP_ERROR' : '**ERROR**: This task uses a field that does not exist: ',
	'WF_UPDATE_MAP_ERROR_INFO' : 'The task will load with INCORRECT settings to permit you to fix it. The values shown are NOT CORRECT!!',
	'MoveUp' : 'Move Up',
	'MoveDown' : 'Move Down',
	'Products' : 'Products',
	'Services' : 'Services',
	'LBL_Hide' : 'Részletek elrejtése',
	'LBL_Show' : 'Részletek mutatása',
	'ERR_INVALID_DATE_FORMAT' : 'A dátum formátuma legyen: éééé-hh-nn',
	'ERR_INVALID_MONTH' : 'Adj meg létező hónapot.',
	'ERR_INVALID_DAY' : 'Adj meg létező napot.',
	'ERR_INVALID_YEAR' : 'Adj meg létező évet 4 számjeggyel.',
	'ERR_INVALID_DATE' : 'Adj meg létező dátumot.',
	'ERR_INVALID_HOUR' : 'Adj meg létező órát.',
	'ERR_INVALID_TIME' : 'Adj meg létező időt.',
	'ERR_EMAIL_WITH_NO_SUBJECT' : 'You did not specify a subject for this email. If you would like to provide one, please type it now',
	'EMAIL_WITH_NO_SUBJECT' : '(no-Subject)',
	'INTEGERVALS':'Only Integer values are allowed',
	'JSLBL_Delete': 'Delete',
	'JSLBL_Edit': 'Edit',
	'JSLBL_Loading': 'Loading',
	'JSLBL_ATTACHMENT_NOT_DELETED': 'Attachment could not be deleted',
	'JSLBL_FILEUPLOAD_LIMIT_EXCEEDED': 'File Upload Limit exceeded!!',
	'JSLBL_CANCEL': 'Cancel',
	'JSLBL_SAVEAS': 'Save as',
	'JSLBL_SAVE': 'Save',
	'JSLBL_PREVIOUS': 'Previous',
	'JSLBL_NEXT': 'Next',
	'JSLBL_CURRENT': 'current step:',
	'JSLBL_PAGINATION': 'Pagination',
	'JSLBL_FINISH': 'Finish',
	'SHOWING' : 'Showing',
	'OF' : 'of',
	'ERR_Massedit' : 'Error on Mass Edit',
	'ProcessFINISHED' : 'Process Finished',
	'duplicatednotallowed' : 'Duplicated Modules Not Allowed',
	'HAS_THIS_AS_NTH_CHILD' : 'Ez még egy másik gyermek',
	'Okay': 'Okay',
	'Failed': 'Failed',
	'Warning': 'Warning',
	'Copied': 'Copied',
	'ERR_PASSWORD_NOT_CHANGED': 'Old and New Passwords are the same. Please use a different password.',
	'ERR_ENTER_OLD_PASSWORD': 'Kérjük, hogy add meg a régi jelszavadat.',
	'ERR_ENTER_NEW_PASSWORD': 'Kérjük, hogy add meg az új jelszavadat.',
	'PASSWORD REQUIREMENTS NOT MET': 'PASSWORD REQUIREMENTS NOT MET',
	'Old password is incorrect': 'Old password is incorrect!',
	'LBL_OLD_PASSWORD': 'Régi Jelszó',
	'LBL_NEW_PASSWORD': 'Új Jelszó',
	'PASSWORD REQUIREMENTS': 'PASSWORD REQUIREMENTS',
	'REQUIRED': 'REQUIRED',
	'Min. 8 characters': 'Minimum 8 characters',
	'Contains3of4': 'PASSWORD CONTAINS AT LEAST THREE OF THE FOLLOWING FOUR CHARACTER GROUPS',
	'Min. 1 uppercase': 'Minimum one uppercase character',
	'Min. 1 lowercase': 'Minimum one lowercase character',
	'Min. 1 number': 'Minimum one number',
	'Min. 1 special character': 'Minimum one special character ! ? , ; - @ #',
	'LBL_CHANGE_PASSWORD': 'Jelszó megváltoztatása',
	'LBL_SHOWING': 'Mutat Rekordok ',
	'LBL_RECORDS': ' of ',
	'LNK_DELETE': 'del',
	'LNK_EDIT': 'edit',
	'LNK_EDIT_ACTION': 'Edit',
	'LNK_DELETE_ACTION': 'Delete',
	'LBL_MODIFIED': 'Modified',
	'LBL_CREATE': 'Create a',
	'LBL_IMPORT': 'Import',
	'LBL_NO_DATA': 'No Data Found',
	'filterApplied': 'Filter applied',
	'QuickView': 'Quick view',
	'Restore': 'Restore',
	'LBL_SUCCESS': 'Success',
	'LBL_CREATED_SUCCESS': 'Created successfully',
	'LBL_SELECT_COLUMNS': 'Select columns to show in grid',
};

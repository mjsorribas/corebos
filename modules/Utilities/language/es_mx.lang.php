<?php
/*********************************************************************************
  ** The contents of this file are subject to the vtiger CRM Public License Version 1.0
   * ("License"); You may not use this file except in compliance with the License
   * The Original Code is:  vtiger CRM Open Source
   * The Initial Developer of the Original Code is vtiger.
   * Portions created by vtiger are Copyright (C) vtiger.
   * All Rights Reserved.
 ********************************************************************************
*  Module       : Utilities
*  Language     : Español
*  Version      : 504
*  Created Date : 2007-03-30 Last change : 2007-10-10
*  Author       : Francisco Hernandez Odin Consultores www.odin.mx
 ********************************************************************************/

$mod_strings = array(
	'Utilities' => 'Utilidades',
	'SINGLE_Utilities' => 'Utilidad',
	// Translations for JS (please use the prefix JSLBL in key)
	'JSLBL_Saving_And_Verifying' => 'Guardando y Verificando',
	'JSLBL_PASSWORD_CANNOT_BE_EMPTY'=>'La contraseña no puede estar vacía',
	'JSLBL_SERVERNAME_CANNOT_BE_EMPTY'=>'El nombre del servidor no puede estar vacío',
	'JSLBL_USERNAME_CANNOT_BE_EMPTY'=>'El nombre de usuario no puede estar vacío',
	'JSLBL_ERROR' => 'Error',

	// General translations
	'SUCCESSFUL_REGISTRATION_TITLE' => 'Authentification correct',
	'SUCCESSFUL_REGISTRATION_MESSAGE' => 'You have correctly established authentification credentials with %s. You can now start using the functionality.',
	'UNSUCCESSFUL_REGISTRATION_TITLE' => 'Authentification Incorrect',
	'UNSUCCESSFUL_REGISTRATION_MESSAGE' => 'You have NOT established authentification credentials with %s. You will have to repeat the process if you want to start using the functionality.',
	'IntegrationAuthorizationClick' => 'Pulsa sobre este enlace para establecer la autoización con %s',
	'HubSpot Activation' => 'Activación HubSpot',
	'hubspot_active' => 'Integración Activa',
	'hubspot_mssync' => 'Sincronización Maestro/Esclavo Activa',
	'hubspot_clientId' => 'ID Cliente HubSpot',
	'hubspot_oauthclientId' => 'ID Cliente oAuth',
	'hubspot_clientSecret' => 'Clave Acceso API o Secreto oAuth',
	'hubspot_apiurl' => 'URL API',
	'hubspot_pollFrequency' => 'Frecuencia de Sondeo a HubSpot',
	'hubspot_relateDealWith' => 'Relacionar Oportunidades con',
	'GContacts Activation' => 'Activación Contactos de Google',
	'_active' => 'Integración Activa',
	'_apiurl' => 'URL API',
	'_clientId' => 'ID Cliente',
	'_clientSecret' => 'Clave Acceso API',
	'2FA Activation' => 'Activación Verificación en Dos Pasos',
	'GoTo2FAActivation' => 'Verificación en Dos Pasos',
	'2FA Secret Code' => 'Código Secreto Dos Pasos',
	'Available Integrations' => 'Integraciones Disponibles',
	'Zendesk Activation' => 'Activación Zendesk',
	'zendesk_active' => 'Integración Activa',
	'zendesk_apiurl' => 'Dominio API',
	'zendesk_accessCode' => 'Token Acceso Zendesk',
	'zendesk_username' => 'Nombre Usuario Zendesk',
	'Whatsapp Activation' => 'Activación Whatsapp',
	'whatsapp_sid' => 'Whatsapp SID',
	'whatsapp_token' => 'Token Acceso Whatsapp',
	'whatsapp_senderphone'=> 'Whatsapp Teléfono Envíos',
	'SendGrid Activation' => 'Activación SendGrid',
	'TransEmail_title' => 'Configuración para Email Transaccional',
	'TransEmail_subtitle' => 'Sustituye el servidor de correo saliente',
	'MktEmail_title' => 'Configuración para Email Marketing',
	'MktEmail_subtitle' => 'Solo para mensajes, emails programados y procesos creados especificamente',
	'LBL_CONFIG_INCOMING_MAIL_SERVER' => 'Configurar Correo Entrante',
	'LBL_SELECT_SERVER_TYPE' => 'Selecciona Tipo Servidor',
	'LBL_CONFIG_OUTGOING_MAIL_SERVER' => 'Configurar Correo Saliente',
	'LBL_USER_SMTP_CONFIG' => 'Configuración IMAP/SMTP por Usuario',
	'LBL_IC_SUCCESS_CONFIG_VALIDATION' => 'Configuración del servidor de correo entrante guardada y validada',
	'LBL_IC_WARNING_CONFIG_VALIDATION' => 'Configuración del servidor de correo entrante no validada',
	'LBL_IC_CONFIG_VALIDATION_FAIL' => 'Falló la validación de la configuración del servidor de correo entrante',
	'LBL_OG_SUCCESS_CONFIG_VALIDATION' => 'Configuración del servidor de correo saliente guardada y validada',
	'LBL_OG_WARNING_CONFIG_VALIDATION' => 'Configuración del servidor de correo saliente no validada',
	'LBL_OG_CONFIG_VALIDATION_FAIL' => 'Falló la validación de la configuración del servidor de correo saliente',
	'LBL_ERROR' => 'Error',
	'GMP Activation' => 'Activación Protocolo Mesura de Google',
	'gmp_gid' => 'ID Analíticas Universales de Google',
	'gmp_gversion' => 'Versión de Measurement Protocol',
	'gmp_deacterror' => '¡Existen flujos de trabajo que usan esta tarea! Elimínelos antes de desactivar la funcionalidad.',
	'Record Versioning' => 'Versionado de Registros',
	'Record Versioning_Desc' => 'Añade versiones a tus registros',
	'GoTo2FAActivation_Desc' => 'Añade autenticación de dos pasos para tus usuarios',
	'GVEditable' => 'El módulo de Variable Global debe ser editable para activar esta característica.',
	'HubSpot Activation_Desc' => 'Sincroniza tu información con HubSpot',
	'SMTP Configuration_Desc' => 'Configura cuentas de correo electrónico entrantes y salientes para tus usuarios',
	'Zendesk Activation_Desc' => 'Sincroniza tu información con ZenDesk',
	'Whatsapp Activation_Desc' => 'Envía notificaciones a tus contactos usando Whatsapp',
	'SendGrid Activation_Desc' => 'Enviar correos electrónicos usando SendGrid',
	'GMP Activation_Desc' => 'Envía tus ventas a Google Analytics',
	'Elasticsearch_Desc' => 'Crea Indices en ElasticSearch para cada módulo',
	'ElasticSearch Activation' => 'Activación ElasticSearch',
	'LogAll Activation' => 'Registrar todo',
	'LogAll_Desc' => 'Registra todos los eventos y cambios de datos que ocurren en la aplicación a la cola de mensajes.',
	'LogAll_Active' => 'Actualmente registrando todo.',
	'LogAll_Inactive' => 'Actualmente no se está registrando nada.',
	'Login Sync Activation' => 'Sincronización de Acceso al Sistema',
	'Login_Synic Desc' => 'Acceder automaticamente al API web service de otros coreBOS usando Road Runner al acceder a esta instalación.',
	'cbInstalls' => 'Instalaciones coreBOS',
	'PrivateKeyNotSet' => 'No hay Clave Privada',
	'PrivateKeyIsSet' => 'Hay Clave Privada',
	'setPrivateKey' => 'Establecer Clave Privada',
	'noServerSelected' => 'No has seleccionado ningún servidor para la actualización',
	'noServerValue' => 'El servidor seleccionado está vacío',
	'Map_Query' => 'Seleccionar el Mapa de Consulta',
	'choosemap' => 'Elige Mapa',
	'sel_fields_es' => 'Selecciona los Campos para el Mapeado de Elasticsearch',
	'Analyzed' => 'Analizado',
	'Missing_GlobalVar' => 'Falta la variable global de IP ElasticSearch',
	'Denormalization Activation' => 'Unificar Módulo',
	'Denormalize_Desc' => 'Unificar Módulo con muchos registros',
	'SelectDenormalize' => 'Selecciona Módulo a unificar',
	'denormalize response' => 'Resultado de la Unificación',
	'Woocommerce Activation' => 'Activación Woocommerce',
	'Woocommerce Desc' => 'Sincroniza información entre coreBOS y Woocommerce',
	'wccs' => 'Secreto API',
	'wcck' => 'Clave API',
	'wcurl'=> 'URL WordPress',
	'wcsct'=> 'Secreto Notificaciones',
	'OneSignal Activation' => 'Activación OneSignal',
	'OneSignal Desc' => 'Enviar notificaciones utilizando OneSignal',
	'onesignal_appid' => 'App ID',
	'onesignal_apikey' => 'API Key',
	'SAML Activation' => 'Activación SAML',
	'SAML Activation_Desc' => 'Inicia sesión a todos los usuarios desde un proveedor de identidad central',
	'SAML SP' => 'Proveedor de Servicio',
	'SAML IP' => 'Proveedor de Identidad',
	'SAML EID' => 'ID Entidad',
	'SAML NID' => 'Formato ID Nombre',
	'SAML ACS' => 'Assertion Consumer Service',
	'SAML SSO' => 'Servicio de Acceso Unico',
	'SAML SLO' => 'Servicio de Desconexión Unico',
	'SAML x509' => 'Certificado x509',
	'SAML WS' => 'API Web Service',
	'SAML RWURL' => 'URL de respuesta 1',
	'SAML RWURL2' => 'URL de respuesta 2',
	'SAML RWURL3' => 'URL de respuesta 3',
	'LBL_API_URL' => 'URL del API de SendGrid',
	'cache_select_adapter_type' => 'Selecciona tipo de adaptador',
	'cache_adapter_memory' => 'Memoria',
	'cache_adapter_redis' => 'Redis',
	'cache_adapter_memcached' => 'Memcached',
	'cache_ip' => 'IP Servidor',
	'cache_port' => 'Puerto Servidor',
	'cache_ip_required' => 'IP servidor es obligatorio',
	'cache_port_required' => 'Puerto servidor es obligatorio',
	'Cache Activation' => 'Activación Cache externo',
	'Cache Activation_Desc' => 'Hacer uso de una capa de caché implementada por tres adaptadores: Memoria, Redis, Memcached',
	'DENORMALIZED_LIST' => 'Lista Desnormalizada',
	'Select' => 'Selecciona',
	'SAVE_TO_UNDO' => 'Normalizar',
	'UNDO_DENORMALIZE' => 'Normalizar',
	'DENORMALIZE' => 'Desnormalizar',
	'DENORMALIZED' => 'Desnormalizado',
	'SELECT_OPERATION' => 'Selecciona Operación',
	'Stripe Payment Activation' => 'Stripe Payment Activation',
	'StripePayment_Desc' => 'Configure Stripe Payment Entry',
	'stripe_Key' => 'Stripe API Key',
);
?>

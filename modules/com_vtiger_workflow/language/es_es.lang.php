<?php
/**
  JPL TSolucio, S.L. 2009 MPL
  Joe Bordes
 **/

$mod_strings = array(
'com_vtiger_workflow' => 'Flujos de Trabajo',
'SINGLE_com_vtiger_workflow' => 'Flujo de Trabajo',
'VTEmailTask' => 'Enviar Correo',
'VTEntityMethodTask' => 'Ejecutar Función',
'VTCreateTodoTask' => 'Crear Tarea',
'VTCreateEventTask' => 'Crear Evento',
'VTSMSTask' => 'Enviar SMS',
'LBL_EDIT_TASK'=>'Editar Tarea',
'LBL_EDIT_TASK_TITLE'=>'Editar una tarea existente o crear una nueva',
'LBL_EDIT_WORKFLOW'=>'Editar Flujo Trabajo',
'LBL_EDIT_WORKFLOW_TITLE'=>'Editar un flujo de trabajo existente o crear uno nuevo',
'LBL_FROM_TEMPLATE'=>'Basado en plantilla',
'LBL_NEW_WORKFLOW'=>'Nuevo Flujo de Trabajo',
'LBL_WF_MANUAL_WARNING'=>'Estás cambiando el título de un flujo de trabajo manual. Si se utiliza en una llamada de servicio web, puedes romperlo.',
'LBL_NEW_TEMPLATE'=>'Guardar como Plantilla',
'LBL_CREATE_WORKFLOW_FOR'=>'Crear un flujo de trabajo para',
'LBL_FOR_MODULE'=>'Para Módulo',
'LBL_CHOOSE_A_TEMPLATE'=>'Elige plantilla',
'LBL_VALIDATION_MISSING_MANDATORY_FIELDS'=>'Hay campos obligatorios vacíos.',
'LBL_VALIDATION_INVALID_DATE_RANGE'=>'Fecha/Hora de inicio es superior a Fecha/Hora fin',
'LBL_ERROR_NO_WORKFLOW'=>'El flujo de trabajo al que intentas acceder no existe',
'LBL_ERROR_NO_TASK'=>'La tarea a la que intentas acceder no existe',
'LBL_ERROR_NOT_ADMIN'=>'Solo el usuario administrador tiene acceso a este módulo',
'LBL_CREATE_WORKFLOW'=>'Crear flujo trabajo',
'LBL_WORKFLOW_LIST'=>'Flujos de Trabajo',
'LBL_AVAILABLE_WORKLIST_LIST'=>'Flujos de Trabajo Disponibles',
'LBL_LOADING'=>'Cargando...',
'LBL_REEVALCONDITIONS' => 'Evaluar condiciones en el momento de la ejecución diferida',
'evaluate' => 'Evaluar',
'LBL_VALIDATION_ERROR'=>'Error de Validación',
'LBL_SELECT_OPTION_DOTDOTDOT'=>'Selecciona Opción...',
'LBL_WORKFLOW_NOTE_CRON_CONFIG'=>'NOTA: Debes configurar la tarea programada de Flujo de Trabajo.',
'LBL_NO_TEMPLATES'=>'Sin Plantillas',
'LBL_SELECT'=>'Selecciona',
'LBL_MESSAGE'=>'Mensaje',
'LBL_SET_FIELD_VALUES'=>'Establecer valor de campo',
'LBL_ADD_FIELD'=>'Añadir campo',
'LBL_DELETE_FIELD' => 'Eliminar Campo',

'LBL_USE_FIELD_VALUE_DASHDASH'=>'-- Utilizar Valor --',
'LBL_USE_FUNCTION_DASHDASH'=>'-- Utilizar Función --',
'LBL_FUNCTIONS'=>'Funciones de Expresión',
'Math' => 'Matemática',
'Date and Time' => 'Fecha y Hora',
'Text' => 'Texto',
'Information' => 'Información',
'Logical' => 'Lógica',
'Finance' => 'Financiera',
'Application' => 'Aplicación',
'Statistics' => 'Estadística',

'LBL_RAW_TEXT'=>'Texto',
'LBL_FIELD'=>'Campo',
'LBL_EXPRESSION'=>'Expresión',
'LBL_SET_EXPRESSION'=>'Expresión Asignación',

'LBL_MANUAL'=>'Sistema. Acciones Masivas',
'LBL_RECORD_ACCESS_CONTROL' => 'Control de Acceso a Registro',
'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL'=>'Añadir Condición de Grupo',

'VTUpdateFieldsTask' => 'Actualizar Campos',
'LBL_ON_DELETE'=>'Al Eliminar',

'LBL_VALIDATION_DUPLICATE_FIELDNAMES' => 'El mismo campo ha sido seleccionado más de una vez.',
'LBL_VALIDATION_INVALID_FIELD_VALUES' => 'Valores de Campos Inválidos',
'LBL_CREATE_ENTITY_NOTE_ORDER_MATTERS' => 'Nota: Las expresiones se evalúan en el orden de los campos.
											Así que asegurate de asignar un valor al campo antes de utilizarlo.',
'LBL_CREATE_ENTITY_NOTE_BUSINESSMAPS' => 'Nota: Puedes usar un Mapa de Negocio para mapear los campos de una entidad a otra, en ese caso los campos de mapeo indicados en el mapa, prevalecerán sobre los que se definan aquí.',
'LBL_SET_VALUE' => 'Establecer Valor',

'LBL_EMAIL_RECIPIENT' => 'Destinatario',
'LBL_EMAIL_CC' => 'CC',
'LBL_EMAIL_BCC' => 'BCC',
'LBL_EMAIL_SUBJECT' => 'Asunto',
'LBL_EMAIL_FROMNAME' => 'Nombre De',
'LBL_EMAIL_FROMEMAIL' => 'Email De',
'LBL_EMAIL_REPLYTO' => 'Responder a',
'LBL_AttachmentInField' => 'Adjunto en campo',
'LBL_WORKFLOW_NOTE_EVENT_TASK_TIMEZONE' => 'Nota: Todas las fechas, horas e información recurrente configurada para el evento,
											serán respecto a la zona horaria por defecto, configurada en config.inc.php',
'Select Meta Variables' => 'Selecciona Meta Variables',
'Current Date' => 'Fecha Actual',
'Current Time' => 'Hora Actual',
'System Timezone' => 'Zona Horaria del Sistema',
'User Timezone' => 'Zona Horaria del Usuario',
'CRM Detail View URL' => 'URL Vista Detalle del CRM',
'Portal Detail View URL' => 'URL Vista Detalle del Portal',
'Site Url' => 'Url CRM',
'Portal Url' => 'Url Portal',
'groupEmailList' => 'Emails de Grupo',
'groupUsersWsIdList' => 'IDs de Usuarios en Grupo',
'Recommended frequency for Workflow is 15 mins' => 'La frecuencia recomendada para los Flujos de Trabajo es de 15 minutos',
'Workflow'=>'Flujo de Trabajo',
'WORKFLOW_DELETE_CONFIRMATION' => '¿Seguro que quieres eliminar este flujo de trabajo?',
'LBL_DELETE_WORKFLOW' => 'Eliminar Flujo de Trabajo',
'WORKFLOW_ACTIVATE_CONFIRMATION' => '¿Seguro que quieres activar este flujo de trabajo?',
'LBL_ACTIVATE_WORKFLOW' => 'Activar Flujo de Trabajo',
'WORKFLOW_DEACTIVATE_CONFIRMATION' => '¿Seguro que quieres desactivar este flujo de trabajo?',
'LBL_DEACTIVATE_WORKFLOW' => 'Desactivar Flujo de Trabajo',

'VTCreateEntityTask' => 'Crear Entidad',
'LBL_ENTITY_TYPE' => 'Tipo Entidad',
'LBL_SELECT_ENTITY_TYPE' => '-- Selecciona Tipo Entidad --',
'Assigned User' => 'Usuario Asignado',
'LBL_NO_ENTITIES_FOUND' => 'No se han encontrado entidades para crear',
'LBL_PARENT_OWNER' => 'Dueño del Registro Superior',
'LBL_SPECIAL_OPTIONS' => 'Opciones Especiales',
'CBTagTask' => 'Añadir/Eliminar Etiqueta',
'CBMassiveUpdateRelatedTask' => 'Actualizar Registros Relacionados',
'DuplicateRecords' => 'Duplicar Registros',
'Add Tag' => 'Añadir Etiqueta',
'Delete Tag' => 'Eliminar Etiqueta',
'Tags' => 'Etiquetas',
'ForAllUsers' => 'Para todos los Usuarios',
'ForCurrentUser' => 'Solo para el usuario Actual',
'CBRelateSales' => 'Relacionar Producto/Servicio',
'Relate Product' => 'Relacionar Producto',
'Relate Service' => 'Relacionar Servicio',
'Relate with AccountVendor' => 'Relacionar con Cuenta/Proveedor',
'Relate with Contact' => 'Relacionar con Contacto',
'CBDeleteRelatedTask' => 'Eliminar Registros Relacionados',
'CBAssignRelatedTask' => 'Asignar Registros Relacionados',
'CBSelectcbMap' => 'Selecciona Regla de Negocio',
'ConvertInventoryModule' => 'Convertir Módulos Inventario',
'ConvertInventoryModuleMessage' => 'La correspondencia de campos es la que trae la aplicación por defecto y puede ajustarse utilizando las Reglas de Negocio de tipo Mapeo de Campo.',
'CBSendMMMSGTask' => 'Enviar Mensaje a Mattermost',
'Send Message To MM' => 'Enviar Mensaje a Mattermost',
'VTSendMessage2MMTask' => 'Enviar Mensaje a Mattermost',
'whatsappworkflowtask' => 'Enviar Mensaje WhatsApp',
'Whatsapp Workflow Task' => 'Enviar Mensaje WhatsApp',
'WhatsappWorkflowTask' => 'Enviar Mensaje WhatsApp',
'Many to Many Relation Task' => 'Relación Muchos a Muchos',
'Set Many to Many Relation' => 'Establecer Relación Muchos a Muchos',
'NotifyOnPortalTicketCreation' => 'Notificar al crear tickets en el portal',
'NotifyOnPortalTicketComment' => 'Notificar al comentar el ticket del portal',
'NotifyOwnerOnTicketChange' => 'Notificar el usuario asignado sobre un cambio en un ticket',
'NotifyParentOnTicketChange' => 'Notificar a la cuenta/contacto relacionado sobre un cambio en un ticket',

'LBL_EVENTNAME' => 'Nombre de Evento',
'LBL_DESCRIPTION' => 'Descripción',
'LBL_STATUS' => 'Estado',
'LBL_TYPE' => 'Tipo',
'LBL_START_TIME' => 'Hora de inicio',
'LBL_START_DATE' => 'Fecha de inicio',
'LBL_END_TIME' => 'Hora de finalización',
'LBL_END_DATE' => 'Fecha de finalización',
'LBL_SET_DATE'=>'Set Date',
'LBL_AFTER' => 'Después',
'LBL_BEFORE' => 'Antes',
'LBL_DAYS' => 'días',
'LBL_HOURS' => 'Horas',
'LBL_HELPDESK_SUPPORT_EMAILID'=>'Email de Asistencia y Soporte',
'LBL_HELPDESK_SUPPORT_NAME'=>'Nombre de Asistencia y Soporte',
'LBL_ORGANIZATION_LOGO' => 'Logo Empresa',
'LBL_RUN_WORKFLOW' => 'Ejecutar Flujo de Trabajo',
'LBL_AT_TIME' => 'En esta hora',
'LBL_HOURLY' => 'Cada hora',
'LBL_DAILY' => 'Cada día',
'LBL_WEEKLY' => 'Cada semana',
'LBL_ON_THESE_DAYS' => 'En estos días',
'LBL_MONTHLY_BY_DATE' => 'Mensual por Fecha',
'LBL_MONTHLY_BY_WEEKDAY' => 'Mensual por Día de Semana',
'LBL_YEARLY' => 'Cada año',
'LBL_MINUTES_INTERVAL'=>'Intervalo de Minutos',
'LBL_EVERY_MINUTEINTERVAL'=>'Cada',
'LBL_MINUTES'=>'minutos',
'LBL_SPECIFIC_DATE' => 'En esta fecha',
'LBL_CHOOSE_DATE' => 'Elige Fecha',
'LBL_SELECT_MONTH_AND_DAY' => 'Selecciona Mes y Día',
'LBL_SELECTED_DATES' => 'Fechas seleccionadas',
'LBL_EXCEEDING_MAXIMUM_LIMIT' => 'Se ha excedido el límite máximo permtido',
'LBL_NEXT_TRIGGER_TIME' => 'Próxima ejecución',
'UpdateInventoryProducts On Every Save' => 'Actualizar inventario de productos',
'Send Email to user when Notifyowner is True' => 'Envíar Email al usuario cuando Notificación Propietario está activado',
'Send Email to user when Portal User is True' => 'Envíar Email al usuario cuando Portal de Usuario está activado',
'Send Email to users on Potential creation' => 'Envíar Email al usuario al crear una Oportunidad',
'Workflow for Contact Creation or Modification' => 'Enviar Email al Contacto con información de acceso al Portal',
'Workflow for Ticket Created from Portal' => 'Flujo de Trabajo para la Creación de Ticket desde el Portal',
'Workflow for Ticket Updated from Portal' => 'Flujo de Trabajo para la Actualización de Ticket desde el Portal',
'Workflow for Ticket Change, not from the Portal' => 'Flujo de Trabajo para la Actualización de Ticket, no desde el Portal',
'Workflow for Events when Send Notification is True' => 'Flujo de Trabajo para Eventos cuando el Envío de Notificación está activado',
'Workflow for Calendar Todos when Send Notification is True' => 'Flujo de Trabajo para Tareas de Calendario cuando el Envío de Notificación está activado',
'Calculate or Update forecast amount' => 'Calcular cantidad objetiva en oportunidad',
'LBL_METHOD_NAME' => 'Nombre del Método',
'NO_METHOD_AVAILABLE' => 'No hay ningún método disponible para este Módulo.',
'LBL_URLQUERY' => 'Query GMP',
'gmp_url_explanation' => 'El módulo aplicará la configuración por defecto (GA ID, version y ClientId), en la query sólo hay que introducir los elementos específicos, como el tipo de hit (t). Los parámetros de Google Measurement protocol, se puende consultar en: <a href="https://developers.google.com/analytics/devguides/collection/protocol/v1/parameters">Measurement Protocol Parameter Reference</a>',
'url_query' => 'Query GMP',
'CBGMPTask' => 'Google Measurement Protocol',
'GenerateDocument'=>'Generar Documentos',
'Templates'=>'Plantillas',
'launchrelwf' => 'Ejecutar flujos en actualizaciones de módulos relacionados',
'launchwf' => 'Ejecutar flujos en actualizaciones',
'LBL_WFPURPOSE' => 'Propósito',
'Run Webservice Workflow Task' => 'Llamada Web Service',
'RunWebserviceWorkflowTask' => 'Llamada Web Service',
'runwebserviceworkflowtask' => 'Llamada Web Service',
'Select IO Map' => 'Selecciona Mapa Parámetros',
'Select Config Map' => 'Selecciona Mapa Configuración',
'CBPushNotificationTask' => 'Notificación Push',
'pushnoturl' => 'URL de notificación push',
'CBQuestionMViewFunction' => 'Actualizar Vista Materializada',
'LBL_WHERE_TO_SAVE' => 'Donde guardar:',
'LBL_WHAT_TO_ENCODE' => 'Qué codificar',
'Select Field to Save Encoded Value' => 'Selecciona el campo donde guardar la imagen',
'Select Field to Encode' => 'Selecciona el campo a codificar',
'Encoding Type' => 'Tipo Codificación',
'Select Encoding Type' => 'Selecciona el tipo de codificación',
'Generate Image Code' => 'Generar Imagen Codificada',
'Generate Image Code Workflow Task' => 'Generar Imagen Codificada',
'GenerateImageCodeWorkflowTask' => 'Generar Imagen Codificada',
'HELP_GenerateImageCodeWorkflowTask' => 'Esta tarea leerá el valor de un campo en el módulo, normalmente un número de serie, y generará un código de imagen EAN, QR o similar y lo guardará en un campo de imagen del módulo.',
'HELP_GenerateImageCode_ValueToEncode' => 'Nombre del campo desde donde se leerá el valor a codificar',
'HELP_GenerateImageCode_EncodingType' => 'Tipo de codificación que se utilizará para la imagen',
'HELP_GenerateImageCode_SaveTo' => 'Campo de imagen donde se guardará la imagen',
'Watermark' => 'Marca de agua',
'CBWatermark' => 'Marca de agua',
'HELP_CBWatermark' => 'Esta tarea de flujo de trabajo aplicará una marca de agua a la imagen contenida en el campo dado',
'HELP_WaterMark_Image_Value' => 'URL de la imagen de marca de agua',
'HELP_WaterMark_Image_Field' => 'El campo de la imagen que tiene marca de agua',
'HELP_WaterMark_Size' => 'El tamaño de la imagen de la marca de agua en porcentaje',
'HELP_WaterMark_Position' => 'La posición de la marca de agua en la imagen',
'CONTEXT_VARIABLES' => 'Variables de Contexto',
'LBL_ON_RELATE' => 'Al Relacionar con',
'LBL_ON_UNRELATE' => 'Al Quitar Relación con',
'LBL_ROW' => 'Fila',
'ERR_IncorrectFile' => 'Fichero o Contenido Incorrecto',
'ERR_CannotProcess' => 'No se ha podido procesar el flujo de trabajo',
'ERR_ExpTypeUndefined' => 'Tipo Expresión sin definir',
'ERR_NoCRMIDforEvaluate' => 'No se ha seleccionado un registro de contexto para la evaluación',
'EmptyForAllDateRanges' => 'Dejar vacío para cualquier fecha.',
'LBL_SAVEBASED' => 'Basado en Guardar',
'LBL_TIMEBASED' => 'Basado en Tiempo o Manual',
'Record Set' => 'Registros para Acciones Masivas',
'Select where to get the records from' => 'Selecciona de donde obtener los registros',
'Launch Now' => 'Ejecutar Ahora',
'Execute Expression' => 'Ejecutar Expresión',
'wfExecExpression' => 'Ejecutar Expresión',
'wdexeexpVariableHelp' => 'El valor se guardará en el contexto con este nombre si se proporciona. Si no, solo se ejecutará la expresión.',
'LBL_EXPRESSIONS' => 'Expresiones',
'EXP_RULES' => 'Reglas a seguir al usar expresiones',
'EXP_RULE1' => "Definir valores de campo de texto entre comillas simples (' ').",
'EXP_RULE2' => 'Utiliza operadores aritméticos para realizar Suma (+), Resta (-), Multiplicación (*) y División (/). Puedes realizar estas operaciones entre dos o más campos, valores o una combinación de campos y valores.',
'EXP_RULE3' => 'Utiliza operadores relacionales en las expresiones',
'equal to' => 'igual a',
'not equal to' => 'no es igual a',
'EXP_RULE4' => 'Utiliza valores binarios para los campos de casilla de verificación: 0 para falso/no, 1 para verdadero/sí.',
'Select source module' => 'Selecciona módulo origen',
'Business Question' => 'Pregunta Negocio',
'Select File Type' => 'Selecciona tipo fichero',
'Launch Workflow' => 'Ejecutar Flujo de Trabajo',
'CBLaunchWorkFlowTask' => 'Ejecutar Flujo de Trabajo',
'LBL_EXECUTE_THIS_WORKFLOW' => 'Ejecutar este Flujo de Trabajo',
'LBL_WITH_THIS_CONDITION' => 'relacionados y este filtro',
'LBL_WITH_THIS_RECORDSET' => 'Con este Conjunto de Registros',
'On the Related' => 'Con los',
'LBL_CURRENT_RECORD' => 'Con el registro actual',
'LBL_IDS' => 'Con estos CRMIDs',
'LBL_SELECT_CREDENTIAL' => 'Selecciona Credenciales',
'LBL_SEND_FILE' => 'Enviar fichero a',
'FILENAME' => 'Nombre en destino',
'LINK_EMAIL_TEMPLATE' => 'Enlazar con plantilla de email',
'LBL_LINKED' => 'enlazado',
'LBL_UNLINKED' => 'no enlazado',
'LBL_SELECT_EMAIL_TEMPLATE' => 'Selecciona Plantilla de Email',
'LBL_SELECT_SENDGRID_EMAIL_TEMPLATE' => 'Selecciona Plantilla de SendGrid',
'LBL_LOAD_SENDGRID_TEMPLATES' => 'Cargar Plantillas de SendGrid',
'LBL_PREVIEW_BUTTON' => 'Previsualizar',
'Records execution success' => 'Proceso de ejecución correcta',
'Records put in queue' => 'Registros insertados en la cola de trabajo',
'Records' => 'Registros:',
'LBL_ONESIGNAL_NOTIFICATION_HEADING' => 'Cabecera Notificación',
'LBL_ONESIGNAL_NOTIFICATION_SUBTITLE' => 'Subtítulo Notificación',
'LBL_NOTIFICATION_CONTENT' => 'Contenido Notificación',
'LBL_ONESIGNAL_NOTIFICATION_INCLUDE_SEGMENT' => 'Incluir Segmentos',
'LBL_ONESIGNAL_NOTIFICATION_EXCLUDED_SEGMENT' => 'Excluir Segmentos',
'CBSendOneSignalNotificationWorkFlowTask' => 'Enviar Notificación OneSignal',
'Send OneSignal Notification' => 'Enviar Notificación OneSignal',
'CBUpsertTask' => 'Upsert',
'Generate Report Task' => 'Generar Informe',
'Generate Report Workflow Task' => 'Generar Informe',
'Send File' => 'Enviar Fichero',
'AutoNumIncDesc' => 'Asigna el siguiente valor de contador a cualquier campo según las reglas del registro',
'Number/String' => 'Número/Cadena',
'AutoNumIncParam' => 'ID o valor del campo Autonumérico del registro con detalles para obtener el siguiente valor de incremento. Opcionalmente, puede ser el nombre de un módulo activo, en cuyo caso encontrará el registro de autonumeración predeterminado actualmente activo para el módulo dado.',
'CBSignPDFDocument' => 'Firmar Documento PDF',
'Image Field' => 'Campo Imagen',
'Which field from Users should be used as a signature?' => '¿Qué campo de usuario contiene la imagen con la firma?',
'Coordinates' => 'Coordenadas',
'Coordinate X' => 'Coordenada X',
'Coordinate Y' => 'Coordenada Y',
'CBAddNotification' => 'Añadir Notificación',
'HELP_CBAddNotification' => 'Añade eventos de notificación con acciones como recordatorios y tareas pendientes para los usuarios. Estas notificaciones aparecerán en el panel de notificaciones y en el widget de Acciones pendientes.',
'HELP_CBAddNotification_Module' => 'Módulo relacionado con la notificación. De forma predeterminada, será el módulo que activa el flujo de trabajo.',
'HELP_CBAddNotification_Record' => 'Registro relacionado con la notificación. La información del registro se utilizará para mostrar el evento. Por defecto será el registro que activa el flujo de trabajo',
'HELP_CBAddNotification_Date' => 'Fecha de la notificación en formato ISO. Por defecto será la fecha y hora de la ejecución del flujo de trabajo',
'HELP_CBAddNotification_Time' => 'Hora de la notificación. Por defecto será la fecha y hora de la ejecución del flujo de trabajo',
'HELP_CBAddNotification_MoreAction' => 'JSON con una acción más. Este enlace es una acción adicional para mostrar en la notificación.<br>{"label":"some label", "link":"some link", "type":"link or click"}',
'HELP_CBAddNotification_MoreInfo' => 'JSON con más información. Para eventos no relacionados con registros, podemos usar este JSON para establecer los valores a mostrar:<br>{"id":"unique ID", "icon":["standard","account"], "subject":"subject", "subtitle":"sub title"} Ten en cuenta que el ID debe ser una cadena para que funcione la función de cambio de estado.',
'HELP_CBAddNotification_Owner' => 'Usuario propietario de la notificación. De forma predeterminada, será el usuario actual cuando se active el flujo de trabajo',
'HELP_CBAddNotification_Related' => 'La notificación se relacionará también con este registro. Si está vacío y se establece "Registro", se utilizará la cuenta/contacto relacionado con el Registro.',
'HELP_CBAddNotification_NotificationID' => 'Contiene el ID único de la notificación. Si no se establece en más información, se generará automáticamente y se agregará también al objeto de más información. Cuando el ID se calcula automáticamente, también se aplicará en el enlace de más acciones reemplazando la cadena $ID$. Esta variable se establece en el contexto para que pueda usarse en tareas posteriores.',
'generateReportWfTask' => 'Generar Informe',
'HELP_generateReportWfTask' => 'Esta tarea te permite <a href="https://blog.corebos.org/blog/generatereport" target="_blank">generar cualquier informe o pregunta de negocio</a> usando el sistema de flujo de trabajo. Puedes aplicar cualquier condición que necesites y enviarla por correo o a otras plataformas.',
'HELP_wfgenerated_returncontent' => '0, el valor predeterminado, generará el contenido en un archivo y devolverá el nombre del archivo.<br>1 generará el resultado en un elemento `content` de la matriz de salida (wfgenerated_file) excepto para PDF y Excel que nunca se colocan en el contenido.<br>si la tarea se establece en CSV y wfgenerated_returncontent se establece en 1, no se generará ningún archivo CSV y la salida se devolverá en el elemento de matriz `content`.<br >si la tarea está configurada como Pregunta de negocio y el tipo es File, se aplica la lógica anterior, si es de cualquier otro tipo, el resultado de la pregunta se devolverá en `content`',
'HELP_GenerateReportName' => 'El valor de esta variable establecerá o anulará el nombre del informe seleccionado en la tarea',
'HELP_GenerateQuestionName' => 'El valor de esta variable establecerá o anulará el nombre de la pregunta seleccionada en la tarea',
'HELP_wfgenerated_file' => 'Esta es una variable de contexto de salida con el resultado del trabajo realizado. Es una matriz de matrices que contiene:<br>[<br>"path" => ruta del archivo generado,<br>"name" => nombre del archivo,<br>"hascontent" => true/false,<br>"content" => el contenido generado si `wfgenerated_returncontent` se establece en true<br>]<br>Ten en cuenta que aunque esta tarea puede generar solo un archivo, esta variable de contexto puede contener muchos archivos. Si tienes más de una tarea Generar informe en el mismo flujo de trabajo, el resultado de cada tarea se acumula en esta variable de contexto, por lo que puedes enviar efectivamente más de un informe en un correo electrónico (por ejemplo). Eso significa que para obtener el elemento de contenido, debes usar el desplazamiento del orden de la tarea, como este <pre>getFromContext(\'wfgenerated_file.0.content\')</pre>',
'usecontextcoordinates' => 'Utilizar coordenadas de la aplicación',
);
?>

/*********************************************************************************
** The contents of this file are subject to the vtiger CRM Public License Version 1.0
 * ("License"); You may not use this file except in compliance with the License
 * The Original Code is:  vtiger CRM Open Source
 * The Initial Developer of the Original Code is vtiger.
 * Portions created by vtiger are Copyright (C) vtiger.
 * All Rights Reserved.
 ********************************************************************************/

var alert_arr = {
	'DELETE':'U gaat verwijderen, bent u zeker over de geselecteerde ',
	'RECORDS':' records?',
	'SELECT':'Kies alstublieft minimaal één record',
	'SELECTCONDITION':'Please select at least one condition',
	'SELECTTEMPLATE':'Kies alstublieft minimaal één Document template',
	'SELECTMERGE':'Kies alstublieft één record om mee samen te voegen',
	'GENDOCSAVED':'Document opgeslagen, kijk a.u.b. na of het correct is opgeslagen',
	'DELETE_ACCOUNT':'Als u dit account verwijderd worden ook alle gerelateerde kansen en offertes verwijderd, weet u zeker dat u wilt doorgaan met het verwijderen van de geselecteerde ',
	'DELETE_VENDOR':'Als u deze leverancier verwijderd worden ook alle gerelateerde inkooporders verwijderd, weet u zeker dat u wilt doorgaan met het verwijderen van de geselecteerde ',
	'SELECT_MAILID':'Kies a.u.b. een mail ID',
	'OVERWRITE_EXISTING_ACCOUNT1':'Wilt u het geselecteerde adres overschrijven met de geselecteerde account(',
	'OVERWRITE_EXISTING_ACCOUNT2':') adresdetails?',
	'OVERWRITE_EXISTING_CONTACT1':'Wilt u het geselecteerde adres overschrijven met de geselecteerde contact(',
	'OVERWRITE_EXISTING_CONTACT2':') adresdetails?',
	'MISSING_FIELDS':'We missen verplchte velden:',
	'NOT_ALLOWED_TO_EDIT':'U mag dit veld niet wijzigen',
	'NOT_ALLOWED_TO_EDIT_FIELDS':'U mag deze velden niet wijzingen',
	'COLUMNS_CANNOT_BE_EMPTY':'Geselecteerde kolommen mogen niet leeg zijn',
	'CANNOT_BE_EMPTY':' kunnen niet leeg zijn',
	'CANNOT_BE_NONE':' kan niet \'geen\' zijn',
	'ENTER_VALID':'Voer alstublieft een geldige ',
	'SHOULDBE_LESS':' moet minder zijn dan ',
	'SHOULDBE_LESS_EQUAL':' moet minder zijn dan of gelijk zijn aan ',
	'SHOULDBE_EQUAL':' moet gelijk zijn aan ',
	'SHOULDBE_GREATER':' moet groter zijn dan ',
	'SHOULDBE_GREATER_EQUAL':' moet groter zijn dan of gelijk zijn aan ',
	'INVALID':'Niet geldig ',
	'EXCEEDS_MAX':' overschrijdt de maximum limiet ',
	'OUT_OF_RANGE':' ligt buiten het bereik',
	'SHOULDNOTBE_EQUAL':' mag niet gelijk zijn aan ',
	'PORTAL_PROVIDE_EMAILID':'Geef alstublieft een geldig Email ID op om de portal gebruiker in werking te stellen',
	'ADD_CONFIRMATION':'Weet u zeker dat u wilt toevoegen met de geselecteerde ',
	'ACCOUNTNAME_CANNOT_EMPTY':'Accountnaam mag niet leeg zijn',
	'CANT_SELECT_CONTACTS':'U kunt geen gerelateerde contacten vanuit de lead selecteren',
	'LBL_THIS':'Dit ',
	'DOESNOT_HAVE_MAILIDS':' heeft geen mail ID\'s',
	'DOESNOT_HAVE_AN_MAILID':'" heeft geen mail ID',
	'MISSING_REQUIRED_FIELDS':'We missen verplichte velden: ',
	'READONLY':'het mag alleen gelezen worden',
	'SELECT_ATLEAST_ONE_USER':'Kies alstublieft minimaal één gebruiker',
	'DISABLE_SHARING_CONFIRMATION':'Weet u zeker dat u delen wilt uitschakelen voor de geselecteerde ',
	'USERS':' gebruiker(s) ?',
	'ENDTIME_GREATER_THAN_STARTTIME':'Eindtijd moet groter zijn dan starttijd ',
	'MISSING_EVENT_NAME':'We missen de evenement naam',
	'EVENT_TYPE_NOT_SELECTED':'Evenement type is niet gekozen',
	'SITEURL_CANNOT_BE_EMPTY':'Site URL kan niet leeg zijn',
	'SITENAME_CANNOT_BE_EMPTY':'Site naam mag niet leeg zijn',
	'LISTPRICE_CANNOT_BE_EMPTY':'Prijs mag niet leeg zijn',
	'INVALID_LIST_PRICE':'Geen geldige prijs',
	'PROBLEM_ACCESSSING_URL':'Probleem met het vinden van URL: ',
	'CODE':' Code: ',
	'WISH_TO_QUALIFY_MAIL_AS_CONTACT':'Weet u zeker dat u deze mail als contact wilt aanmerken?',
	'SELECT_ATLEAST_ONEMSG_TO_DEL':'Kies minstens één boodschap om te verwijderen',
	'ERROR':'Fout',
	'FIELD_TYPE_NOT_SELECTED':'Veld type is niet gekozen',
	'SPECIAL_CHARACTERS_NOT_ALLOWED':'Speciale tekens zijn niet toegestaan in veldnaam',
	'SPECIAL_CHARACTERS':'Speciale tekens',
	'NOT_ALLOWED':'zijn niet toegestaan, probeer het met andere waarden',
	'DUPLICATE_MAPPING_ACCOUNTS':'Dubbele relatie voor accounts!!',
	'DUPLICATE_MAPPING_CONTACTS':'Dubbele relatie voor contacten!!',
	'DUPLICATE_MAPPING_POTENTIAL':'Dubbele relatie voor kansen!!',
	'ERROR_WHILE_EDITING':'Fout tijdens bewerken',
	'CURRENCY_CHANGE_INFO':'Valuta wijzingen zijn succesvol opgeslagen',
	'CURRENCY_CONVERSION_INFO':'Gebruikt u het dollarteken als valuta? \n Klik OK om het dollarteken intact te laten, annuleer om de wisselkoers bij te werken',
	'THE_EMAILID': 'Het email id \'',
	'EMAIL_FIELD_INVALID':'\' in het email veld is ongeldig',
	'MISSING_REPORT_NAME':'We missen de naam van het rapport',
	'REPORT_NAME_EXISTS':'Rapportnaam bestaat al, probeer iets anders...',
	'WANT_TO_CHANGE_CONTACT_ADDR':'Wilt u het adres van de contacten voor dit account ook wijzigen?',
	'SURE_TO_DELETE':'Weet u zeker dat u wilt verwijderen ?',
	'NO_PRODUCT_SELECTED':'Geen product geselecteerd, kies er minimaal één',
	'VALID_FINAL_PERCENT':'Voer een geldig eind kortingspercentage in',
	'VALID_FINAL_AMOUNT':'Voer een geldige eind kortingshoeveelheid in',
	'VALID_SHIPPING_CHARGE':'Voer een geldige toeslag in bij Handling & verzendkosten',
	'VALID_ADJUSTMENT':'Voer een geldige bijstelling in',
	'WANT_TO_CONTINUE':'Wilt u doorgaan?',
	'ENTER_VALID_TAX':'Voer een geldige belasting in',
	'VALID_TAX_NAME':'Voer een geldige belasting naam in',
	'CORRECT_TAX_VALUE':'Voer de juiste belastingwaarde in',
	'ENTER_POSITIVE_VALUE':'Voer een positieve waarde in',
	'LABEL_SHOULDNOT_EMPTY':'De naam van de belasting mag niet leeg zijn',
	'NOT_VALID_ENTRY':'is geen geldige invoer, voer alstublieft een geldige waarde in',
	'VALID_DISCOUNT_PERCENT':'Voer een geldig kortingspercentage in',
	'VALID_DISCOUNT_AMOUNT':'Voer een geldige kortingshoeveelheid in',
	'SELECT_TEMPLATE_TO_MERGE':'Kies een sjabloon om mee samen te voegen',
	'SELECTED_MORE_THAN_ONCE':'U heeft de volgende producten of diensten meer dan eens geselecteerd',
	'YES':'ja',
	'NO':'nee',
	'MAIL':'mail',
	'EQUALS':'is gelijk aan',
	'NOT_EQUALS_TO':'is niet gelijk aan',
	'STARTS_WITH':'begint met',
	'CONTAINS':'bevat',
	'DOES_NOT_CONTAINS':'bevat niet',
	'LESS_THAN':'minder dan',
	'LESS_OR_EQUALS':'less or equal',
	'GREATER_THAN':'meer dan',
	'GREATER_OR_EQUALS':'meer dan of gelijk aan',
	'DOES_NOT_START_WITH':'begint niet met',
	'DOES_NOT_END_WITH':'eindigt niet met',
	'SOUNDEX':'soundex',
	'REGEXP':'regexp',
	'Widget_Deleted_Sucessfully':'Widget deleted sucessfully',

	'NO_SPECIAL_CHARS':'Speciale tekens zijn niet toegestaan in factuur',
	'PLS_SELECT_VALID_FILE':'Kies alstublieft een bestanden met de volgende extensies:\n',
	'NO_SPECIAL':'Speciale tekens zijn niet toegestaan',
	'NO_QUOTES':'Aanhalingstekens (\' ") en het + symbool zijn niet toegestaan ',
	'IN_PROFILENAME':' in profielnaam',
	'IN_GROUPNAME':' in groepnaam',
	'IN_ROLENAME':' in rolnaam',
	'VALID_TAX_PERCENT':'Voer een gelding belastingpercentage in',
	'VALID_SH_TAX':'Voeg geldige belastingen in bij handling & verzendkosten ',
	'ROLE_DRAG_ERR_MSG':'U kind geen ouder-element onder een kind-element plaatsen',
	'LBL_DEL':'verwijder',
	'VALID_DATA':' Voer een geldige datum in... ',
	'STDFILTER': 'Standaard filters',
	'STARTDATE': 'Startdatum',
	'ENDDATE': 'Einddatum',
	'START_DATE_TIME': 'Start datum & tijd',
	'START_TIME': 'Starttijd',
	'LBL_AND': 'En',
	'LBL_OR': 'Of',
	'LBL_ENTER_VALID_PORT': 'Voer een geldig poortnummer in',
	'IN_USERNAME':' in gebruikersnaam ',
	'LBL_ENTER_VALID_NO': 'Voer een geldig nummer in',
	'LBL_PROVIDE_YES_NO': ' Ongeldige waarde\n Voer Ja of Nee in',
	'LBL_SELECT_CRITERIA': ' Ongeldige criteria\n Kies alstublieft de juiste criteria',
	'OPPORTUNITYNAME_CANNOT_BE_EMPTY':'Kans naam mag niet leeg zijn',
	'NAME_DESC':' voor map naam en beschrijving',
	'ENDS_WITH':'eindigt met',
	'SHARED_EVENT_DEL_MSG':'De gebruiker heeft geen permissie om het gedeelde evenement te verwijderen of te bewerken.',

	'LBL_WRONG_IMAGE_TYPE': 'Toegestane bestandstypen voor contacten: jpeg, png, jpg, pjpeg, x-png of gif',
	'SELECT_MAIL_MOVE': 'Kies alstublieft een mail en verplaats..',

	'LBL_NOTSEARCH_WITHSEARCH_ALL':'U hebt de zoekfunctie niet gebruikt, alle records zullen geëxporteerd worden uit ',
	'LBL_NOTSEARCH_WITHSEARCH_CURRENTPAGE':'U heeft niet gezocht, maar u koos wel voor gezochte en huidige-pagina records. Dus alleen de records in de huidige pagina worden geëxporteerd vanuit ',
	'LBL_NO_DATA_SELECTED':'Er is geen record geselecteerd om te exporteren, kies er alstublieft één',
	'LBL_SEARCH_WITHOUTSEARCH_ALL':'U heeft de zoek-optie gekozen maar u heeft niet gekozen zonder zoek & alle opties.\nU kunt op OK klikken op alle records te exporteren of annuleren en het nog eens proberen met andere voorwaarden.',
	'STOCK_IS_NOT_ENOUGH': 'Voorraad is niet voldoende',
	'LBL_QTY_IN_STOCK' : 'Aantal in voorraad',
	'INVALID_QTY': 'Ongeldige hoeveelheid',
	'LBL_SEARCH_WITHOUTSEARCH_CURRENTPAGE':'U heeft de zoekoptie gebruikt maar heeft niet gekozen voor \'zonder zoekresultaten en huidige pagina\'\n Kies OK om de huidige pagina te exporteren of of Annuleer om het nog eens te proberen met andere voorwaarden.',
	'LBL_SELECT_COLUMN': ' Ongeldige kolom\nKies alstublieft een kolom',
	'LBL_NOT_ACCESSIBLE': 'Niet toegankelijk',
	'LBL_FILENAME_LENGTH_EXCEED_ERR': 'Bestandsnaam mag niet meer dan 255 karakters bevatten',
	'LBL_DONT_HAVE_EMAIL_PERMISSION': 'U heeft geen toegang tot het email veld dus u kunt het email ID niet kiezen',
	'LBL_NO_FEEDS_SELECTED': 'Geen feeds geselecteerd',
	'LBL_SELECT_PICKLIST':'Kies alstublieft één waarde om te verwijderen',
	'LBL_CANT_REMOVE':'U kunt niet alle waarden verwijderen',

	/*For global add/delete in picklist*/
	'LBL_GIVE_PICKLIST_VALUE':'Voer alstublieft nieuwe waarden in om in de gekozen selectielijst te vervangen',
	'LBL_SELECT_ROLE':'Kies alstublieft minimaal één rol voor de nieuwe waarden',
	'LBL_ADD_PICKLIST_VALUE':'Voer alstublieft minimaal één nieuwe waarde in om toe te voegen',
	'LBL_NO_VALUES_TO_DELETE': 'geen waarden om te verwijderen',

	/* For Duplicate merging feature */
	'SAME_GROUPS': 'U moet records in dezelfde groep kiezen om samen te voegen',
	'ATLEAST_TWO': 'Kies minimaal twee records om samen te voegen',
	'MAX_THREE': 'U mag maximaal drie records kiezen',
	'MAX_RECORDS_EXCEEDED': 'You have exceeded the maximum amount of selectable records',
	'MAX_RECORDS': 'U mag maximaal vier records kiezen',
	'CON_MANDATORY': 'Kies het verplchte veld achternaam',
	'LE_MANDATORY': 'Kies de verplichte velden achternaam en accountnaam',
	'ACC_MANDATORY': 'Kies de verplichte accountnaam',
	'PRO_MANDATORY': 'Kies de verplichte productnaam',
	'TIC_MANDATORY': 'Kies de verplichte ticket titel',
	'POTEN_MANDATORY': 'Kies de verplichte kansnaam',
	'VEN_MANDATORY': 'Kies de verplichte leveranciersnaam',
	'DEL_MANDATORY': 'U mag het verplichte veld niet verwijderen',

	/* For Multi-Currency Support */
	'MSG_CHANGE_CURRENCY_REVISE_UNIT_PRICE': 'Prijzen van al deze valuta worden opnieuw berekend op basis van de gekozen valuta. Weet u het zeker?',

	'Select_one_record_as_parent_record': 'Kies minimaal éém record als bovenliggend',
	'RECURRING_FREQUENCY_NOT_PROVIDED': 'Terugkerende frequentie is niet ingevoerd',
	'RECURRING_FREQNECY_NOT_ENABLED': 'Terugkerende frequentie is ingevoerd maar terugkerend is niet ingeschakeld',
	/* Added for Documents module */
	'NO_SPECIAL_CHARS_DOCS':'Speciale tekens als aanhalingstekens, backslash, + teken, % en ? zijn niet toegestaan',
	'FOLDER_NAME_TOO_LONG':'Mapnaam is te lang, probeer nog eens!',
	'FOLDERNAME_EMPTY':'Mapnaam mag niet leeg zijn',
	'DUPLICATE_FOLDER_NAME':'U probeert een bestaande mapnaam te kopiëren, probeer het nog eens !',
	'FOLDER_DESCRIPTION_TOO_LONG':'Map beschrijving is te lang!',
	'NOT_PERMITTED':'U mag deze actie niet uitvoeren.',

	'ALL_FILTER_CREATION_DENIED':'U kunt geen filter aanmaken met de naam "All", kies een andere',
	'OPERATION_DENIED':'Deze actie is voor u niet toegestaan',
	'EMAIL_CHECK_MSG': 'Zet de portaal toegang uit om het email veld leeg te mogen laten',
	'IS_PARENT ': 'Dit product heeft onderliggende producten, u kunt er geen bovenliggend product voor kiezen',

	'PICKLIST_CANNOT_BE_EMPTY': 'Selectielijst waarde kan niet leeg zijn',
	'DUPLICATE_VALUES_FOUND': 'Dubbele waarden gevonden',
	'LBL_NO_ROLES_SELECTED': 'Geen rollen gekozen, doorgaan?',
	'LBL_DUPLICATE_FOUND': 'Dubbele inzendingen gevonden voor de waarde ',
	'LBL_CANNOT_HAVE_EMPTY_VALUE': 'Kan geen lege waarde invoegen, kies verwijderen om een waarde te verwijderen.',
	'LBL_DUPLICATE_VALUE_EXISTS': 'Dubbele waarde gevonden',
	'LBL_WANT_TO_DELETE': 'Dit verwijdert de selectielijst waarde(n) voor alle rollen, doorgaan? ',
	'LBL_DELETE_ALL_WARNING': 'Er moet minimaal één waarde voor de selectielijst zijn',
	'LBL_PLEASE_CHANGE_REPLACEMENT': 'Verander alstublieft de vervangende waarde, hij is ook geselecteerd om te verwijderen',

	/*layout Editor changes*/
	'BLOCK_NAME_CANNOT_BE_BLANK': 'Bloknaam mag niet leeg zijn',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE': 'Weet u zeker dat u wilt verwijderen ?',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE_EXACT_DUPLICATE': 'Are you sure you want to Delete All Exact record duplicates?',
	'PLEASE_MOVE_THE_FIELDS_TO_ANOTHER_BLOCK': 'Verplaats de velden alstublieft naar een ander blok',
	'ARE_YOU_SURE_YOU_WANT_TO_DELETE_BLOCK': 'weet u zeker dat u het blok wilt verwijderen?',
	'LABEL_CANNOT_NOT_EMPTY': 'Naam mag niet leeg zijn',
	'LBL_TYPEALERT_1': 'Sorry u mag de koppeling niet maken',
	'LBL_WITH': 'met',
	'LBL_TYPEALERT_2': 'datatype. Kies alstublieft een overeenkomstig datatype.',
	'LBL_LENGTHALERT': 'U mag geen velden koppelen met verschillende karakter invoer limieten. Kies een veld met dezelfde limiet of hoger',
	'LBL_DECIMALALERT': 'U mag geen velden koppelen met verschillende aantallen decimalen. Kies een veld met hetzelfde aantal decimalen of hoger',
	'PICKLIST2PICKLISTALERT': 'Zorg er voor dat beide selectielijsten dezelfde waarden delen',
	'PICKLIST2TEXTALERT': 'Zorg ervoor dat het bestemmingsveld minimaal de lengte van de langste selectielijst waarde heeft',
	'FIELD_IS_MANDATORY': 'Verplicht veld',
	'FIELD_IS_ACTIVE': 'Veld is beschikbaar voor gebruik',
	'FIELD_IN_QCREATE': 'Aanwezig in snel maken',
	'FIELD_IS_MASSEDITABLE': 'Aanwezig voor massa wijzig',

	'IS_MANDATORY_FIELD': 'is Verplicht',
	'CLOSEDATE_CANNOT_BE_EMPTY': 'Sluitdatum kan niet leeg zijn',
	'AMOUNT_CANNOT_BE_EMPTY': 'Aantal kan niet leeg zijn',
	'ARE_YOU_SURE': 'Weet u zeker dat u wilt verwijderen?',
	'LABEL_ALREADY_EXISTS': 'Naam bestaat al, kies alstublieft een andere',
	'LENGTH_OUT_OF_RANGE': 'Lengte van de bloknaam moet minder dan 50 tekens zijn',
	'LBL_SELECT_ONE_FILE': 'Kies alstublieft minstens één bestand',
	'LBL_UNABLE_TO_ADD_FOLDER': 'Kon de map niet toevoegen, probeer het nog eens.',
	'LBL_ARE_YOU_SURE_YOU_WANT_TO_DELETE_FOLDER': 'Weet u zeker dat u de map wilt verwijderen?',
	'LBL_ERROR_WHILE_DELETING_FOLDER': 'Fout tijdens het verwijderen van de map, probeer het later nog eens.',
	'LBL_FILE_CAN_BE_DOWNLOAD': 'Bestand kan gedownload worden',
	'LBL_DOCUMENT_LOST_INTEGRITY':'Dit document is niet beschikbaar, het wordt als inactief gemarkeerd',
	'LBL_DOCUMENT_NOT_AVAILABLE': 'Dit document kan niet gedownload worden',
	'LBL_FOLDER_SHOULD_BE_EMPTY': 'De map moet leeg zijn voor hij verwijderd kan worden!',

	'LBL_PLEASE_SELECT_FILE_TO_UPLOAD': 'Kies een bestand om te uploaden.',
	'LBL_ARE_YOU_SURE_TO_MOVE_TO': 'Weet u zeker dat u de bestand(en) wilt verplaatsen naar ',
	'LBL_FOLDER': ' map',
	'LBL_UNABLE_TO_UPDATE': 'Kon niet updaten, probeer het later nog eens.',
	'LBL_BLANK_REPLACEMENT': 'Kan geen lege waarde kiezen om te vervangen',

	'LBL_IMAGE_DELETED': 'Afbeelding verwijderd',

	/* Tooltip management */
	'ERR_FIELD_SELECTION ': 'Een fout tijdens kiezen van het veld',

	/* Inventory validation strings */
	'NO_LINE_ITEM_SELECTED': 'Geen regel gekozen, kies minimaal één regel.',
	'LINE_ITEM': 'Regel product of dienst',
	'LIST_PRICE': 'Lijst prijs',

	/* Webmails */
	'LBL_PRINT_EMAIL': 'Print',
	'LBL_DELETE_EMAIL': 'Verwijder',
	'LBL_DOWNLOAD_ATTACHMENTS': 'Download bijlagen',
	'LBL_QUALIFY_EMAIL': 'Keur goed',
	'LBL_FORWARD_EMAIL': 'Stuur door',
	'LBL_REPLY_TO_SENDER': 'Beantwoord afzender',
	'LBL_REPLY_TO_ALL': 'Beantwoord allen',

	'LBL_WIDGET_HIDDEN': 'Widget verborgen',
	'LBL_RESTORE_FROM_PREFERENCES': 'U kunt het terugbrengen door de toevoeg knop in de home pagina of binnen uw voorkeuren',
	'ERR_HIDING': 'Fout tijdens verbergen',
	'MSG_TRY_AGAIN': 'Probeer het nog eens',

	'MSG_ENABLE_SINGLEPANE_VIEW': 'Weergave in enkel scherm aangezet',
	'MSG_DISABLE_SINGLEPANE_VIEW': 'Weergave in enkel scherm uitgezet',

	'MSG_FTP_BACKUP_DISABLED': 'FTP Backup uitgezet',
	'MSG_LOCAL_BACKUP_DISABLED': 'Lokale backup uitgezet',
	'MSG_FTP_BACKUP_ENABLED': 'FTP Backup aangezet',
	'MSG_LOCAL_BACKUP_ENABLED': 'Lokale backup aangezet',
	'MSG_CONFIRM_PATH': 'controleer de details van het pad',
	'MSG_CONFIRM_FTP_DETAILS': 'controleer de instellingen van FTP',

	'START_PERIOD_END_PERIOD_CANNOT_BE_EMPTY': 'Start of eind periode kunnen niet leeg zijn',

	/* added to fix i18n issues with home page*/
	'LBL_ADD': 'Voeg toe ',
	'Module': 'Module',
	'DashBoard': 'DashBoard',
	'RSS': 'RSS',
	'Default': 'Standaard',
	'Notebook': 'Notitieblok',
	'ReportCharts': 'Rapport grafieken',
	'CustomWidget': 'Aggregate Filter',
	'SPECIAL_CHARS':'\\ / < > + \' " ',

	'BETWEEN': 'tussen',
	'BEFORE': 'voor',
	'AFTER': 'na',
	'ERROR_DELETING_TRY_AGAIN': 'Fout tijdens verwijderen, probeer nog eens.',
	'LBL_ENTER_WINDOW_TITLE': 'Kies alstublieft een venster titel.',
	'LBL_SELECT_ONLY_FIELDS': 'Kies minder velden.',
	'LBL_ENTER_RSS_URL':'Voer de RSS URL in',
	'LBL_ADD_HOME_WIDGET': 'Kon de home pagina componenten niet vinden.',

	'LBL_DEFAULT_VALUE_FOR_THIS_FIELD' : 'Standaard waarde voor dit veld',

	'RECIPIENTS_CANNOT_BE_EMPTY' : 'Ontvangers kunnen niet leeg zijn',
	'VALID_SCANNER_NAME' : 'Please enter a valid Scanner name (It should be only Characters and Numbers)',
	'ERR_SAME_SOURCE_AND_TARGET' : 'Bron en doel veld kunnen niet hetzelfde zijn',
	'ERR_ATLEAST_ONE_VALUE_FOR' : 'U moet minimaal één waarde kiezen voor',
	'ERR_SELECT_MODULE_FOR_DEPENDENCY' : 'Kies alstublieft één module voor afhankelijkheid',

	'LBL_SIZE_SHOULDNOTBE_GREATER':'Bestandsgrootte mag niet groter zijn dan  ', //added for upload error message
	'LBL_MAX_SIZE':'Uploadlimiet is', //added for display file size limit
	'LBL_FILESIZEIN_MB':'MB', // added to show filesize limit in MB
	'LBL_FILESIZEIN_KB':'KB', // added to show filesize limit in KB
	'LBL_FILESIZEIN_B':'B', // added to show filesize limit in B
	//Contexual help page
	'LBL_HELP_TITLE' : 'Help',
	'LBL_WIKI_TITLE' : 'Handleidingen',
	'LBL_FAQ_TITLE'   : 'FAQ',
	'LBL_VIDEO_TITLE' : 'Video',
	'LBL_CLOSE_TITLE' : 'Sluit',
	'LBL_SELECT':'Kies standaard widgets om te tonen',

	'ERR_SELECT_ATLEAST_ONE_MERGE_CRITERIA_FIELD' : 'Kies minimaal één veld om samen te voegen',
	'ERR_PLEASE_MAP_MANDATORY_FIELDS' : 'Koppel alstublieft de volgende verplichte velden',
	'ERR_MAP_NAME_ALREADY_EXISTS' : 'Relatie naam bestaat al',
	'ERR_MAP_NAME_CANNOT_BE_EMPTY' : 'Relatie naam mag niet leeg zijn',
	'ERR_FIELDS_MAPPED_MORE_THAN_ONCE' : 'Het volgende veld is meer dan eens gekoppeld.',
	'LBL_MERGE_SHOULDHAVE_INFO' : 'Kies minimaal één veld om samen te voegen',
	'MAP_NAME_EXISTS' : 'Deze relatienaam bestaan al\nOverschrijven?',
	'MAP_DELETED_INFO' : 'Deze relatie is verwijderd, u kunt hem niet nog eens gebruiken',

	//error messages for lead conversion
	'ERR_SELECT_EITHER':'Kies ene account of contact om de lead te converteren',
	'ERR_SELECT_ACCOUNT':'Kies een account om door te gaan',
	'ERR_SELECT_CONTACT':'Kies een contact om door te gaan',
	'ERR_MANDATORY_FIELD_VALUE':'Waarden voor verplichte velden ontbreken',
	'ERR_POTENTIAL_AMOUNT':'Kans hoeveelheid moet een nummer zijn',
	'ERR_EMAILID':'Kies een geldig email ID',
	'ERR_TRANSFER_TO_ACC':'Account moet gekozen zijn om gerelateerde records over te dragen',
	'ERR_TRANSFER_TO_CON':'Contact moet gekozen zijn om gerelateerde records over te dragen ',
	'SURE_TO_DELETE_CUSTOM_MAP':'Weet u zeker dat u de veldrelatie wilt verwijderen?',
	'LBL_CLOSE_DATE':'Sluitingsdatum',
	'LBL_EMAIL':'Email',
	'MORE_THAN_500' : 'U heeft meer dan 500 records geselecteerd, dit kan lang duren. Doorgaan?',
	'LBL_MAPPEDALERT':'Dit veld heeft al een relatie',
	'LBL_REPORT_NAME': 'Voer alstublieft een naam in voor het nieuwe rapport.',
	'LBL_REPORT_NAME_ERROR': 'U moet het rapport een nieuwe naam geven.',
	'LBL_IS' : 'is',
	'LBL_CONTAINS': 'bevat',
	'LBL_DOES_NOT_CONTAIN' : 'bevat niet',
	'LBL_STARTS_WITH' : 'begint met',
	'LBL_ENDS_WITH' : 'eindigt met',
	'LBL_HAS_CHANGED' : 'is gewijzigd',
	'LBL_HAS_CHANGED_TO' : 'in gewijzigd naar',
	'LBL_WAS' : 'was',
	'LBL_MONTHDAY' : 'month-day',
	'LBL_IS_EMPTY': 'is leeg',
	'LBL_IS_NOT_EMPTY' : 'is niet leeg',
	'LBL_DOES_NOT_START_WITH' : 'begint niet met',
	'LBL_DOES_NOT_END_WITH' : 'eindigt niet met',
	'LBL_EQUAL_TO' : 'gelijk aan',
	'LBL_LESS_THAN' : 'minder dan',
	'LBL_GREATER_THAN' : 'groter dan',
	'LBL_DOEST_NOT_EQUAL' : 'is niet gelijk aan',
	'LBL_LESS_THAN_OR_EQUAL_TO' : 'kleiner dan of gelijk aan',
	'LBL_GREATER_THAN_OR_EQUAL_TO' : 'groter dan of gelijk aan',
	'LBL_IS_NOT' : 'is niet',
	'LBL_BETWEEN' : 'tussen',
	'LBL_BEFORE' : 'voor',
	'LBL_AFTER' : 'na',
	'LBL_IS_TODAY' : 'is vandaag',
	'LBL_LESS_THAN_DAYS_AGO' : 'minder dan dagen geleden',
	'LBL_MORE_THAN_DAYS_AGO' : 'meer dan dagen geleden',
	'LBL_IN_LESS_THAN' : 'in minder dan',
	'LBL_IN_MORE_THAN' : 'in meer dan',
	'LBL_DAYS_AGO' : 'dagen geleden',
	'LBL_DAYS_LATER' : 'dagen later',
	'LBL_LESS_THAN_HOURS_BEFORE' : 'minder dan uren voor',
	'LBL_LESS_THAN_HOURS_LATER' : 'minder dan uren later',
	'LBL_MORE_THAN_HOURS_BEFORE' : 'meer dan uren voor',
	'LBL_MORE_THAN_HOURS_LATER' : 'meer dan uren later',
	'LBL_EXISTS' : 'bestaat',
	'MAXIMUM_OF_MODULES_PERMITTED' : 'U heeft het meximaal aantal toegestane modules bereikt.',
	'ONLY_ONE_MODULE_PERMITTED_FOR_REPORT' : 'U kunt maar één module koppelen voor dit type rapport',
	'MUST_SELECT_ONE_MODULE_FOR_REPORT' : 'U moet één module koppelen voor dit rapport',
	'LBL_NEW_CONDITION' : 'Nieuwe voorwaarde',
	'LBL_NEW_CONDITION_GROUP_BUTTON_LABEL' : 'Nieuwe Conditiegroep',
	'WF_UPDATE_MAP_ERROR' : '**ERROR**: Deze taak gebruikt een veld dat niet bestaat: ',
	'WF_UPDATE_MAP_ERROR_INFO' : 'De taak zal laden met INCORRECTE instellingen om u toe te staan dat te repareren. De waarden die u zien KLOPPEN NIET!!',
	'MoveUp' : 'Verplaats omhoog',
	'MoveDown' : 'Verplaats omlaag',
	'Products' : 'Producten',
	'Services' : 'Diensten',
	'LBL_Hide' : 'Verberg',
	'LBL_Show' : 'Laat zien',
	'ERR_INVALID_DATE_FORMAT'  :  'Het datumformaat moet zijn: yyyy-mm-dd',
	'ERR_INVALID_MONTH'  :  'Voer alstublieft een geldige maand in.',
	'ERR_INVALID_DAY'  :  'Voer alstublieft een geldige dag in.',
	'ERR_INVALID_YEAR'  :  'Voer alstublieft een geldig jaar in met 4 cijfers.',
	'ERR_INVALID_DATE'  :  'Voer een geldige datum in.',
	'ERR_INVALID_HOUR'  :  'Voer een geldig uur in.',
	'ERR_INVALID_TIME'  :  'Voer een geldige tijd in.',
	'ERR_EMAIL_WITH_NO_SUBJECT' : 'U heeft geen onderwerp opgegeven voor deze email, u kunt dat nu alsnog doen',
	'EMAIL_WITH_NO_SUBJECT' : '(geen onderwerp)',
	'INTEGERVALS':'Alleen hele getallen zijn toegestaan',
	'JSLBL_Delete': 'Verwijder',
	'JSLBL_Edit': 'Edit',
	'JSLBL_Create': 'Create',
	'JSLBL_Loading': 'Laden',
	'JSLBL_ATTACHMENT_NOT_DELETED': 'Bijlage kon niet verwijderd worden',
	'JSLBL_FILEUPLOAD_LIMIT_EXCEEDED': 'Uploadlimiet bereikt!!',
	'JSLBL_CANCEL': 'Annuleer',
	'JSLBL_SAVEAS': 'Bewaar als',
	'JSLBL_SAVE': 'Bewaar',
	'JSLBL_PREVIOUS': 'Vorige',
	'JSLBL_NEXT': 'Volgende',
	'JSLBL_CURRENT': 'Volgende stap:',
	'JSLBL_PAGINATION': 'Pagina acties',
	'JSLBL_FINISH': 'Maak af',
	'SHOWING' : 'Toont nu',
	'OF' : 'van',
	'ERR_Massedit' : 'Fout tijdens massa wijzig',
	'ProcessFINISHED' : 'Proces beëindigd',
	'duplicatednotallowed' : 'Duplicated Modules Not Allowed',
	'HAS_THIS_AS_NTH_CHILD' : 'Heeft dit record als Xste kind',
	'Okay': 'Oké',
	'Failed': 'Failed',
	'Warning': 'Warning',
	'Copied': 'Copied',
	'ERR_PASSWORD_NOT_CHANGED': 'Old and New Passwords are the same. Please use a different password.',
	'ERR_ENTER_OLD_PASSWORD': 'Voer uw oude wachtwoord in a.u.b.',
	'ERR_ENTER_NEW_PASSWORD': 'Voer uw nieuwe wachtwoord in a.u.b.',
	'PASSWORD REQUIREMENTS NOT MET': 'PASSWORD REQUIREMENTS NOT MET',
	'Old password is incorrect': 'Het oude wachtwoord is onjuist!',
	'LBL_OLD_PASSWORD': 'Oud wachtwoord',
	'LBL_NEW_PASSWORD': 'Nieuw wachtwoord',
	'PASSWORD REQUIREMENTS': 'Wachtwoord vereisten',
	'REQUIRED': 'Vereist',
	'Min. 8 characters': 'Minimaal 8 karakters',
	'Contains3of4': 'WACHTWOORD MOET MINIMAAL 3 VAN DE VOLGENDE 4 KARAKTERS BEVATTEN',
	'Min. 1 uppercase': 'Minimaal één hoofdletter',
	'Min. 1 lowercase': 'Minimaal één kleine letter',
	'Min. 1 number': 'Minimaal één cijfer',
	'Min. 1 special character': 'Minimaal één speciaal karakter , ! ? , ; - @ #',
	'LBL_CHANGE_PASSWORD': 'Wijzig wachtwoord',
	'ACT_UNIT_PRICE_MISMATCH': 'De actuele prijs van de valuta zou overeen moeten komen met de verkoopprijs, maar dit is niet het geval voor dit product of deze dienst',
	'LBL_SHOWING': 'Selectie Records ',
	'LBL_RECORDS': ' van ',
	'LNK_DELETE': 'Verwijder',
	'LNK_EDIT': 'Bewerk',
	'LNK_EDIT_ACTION': 'Bewerk',
	'LNK_DELETE_ACTION': 'Verwijder',
	'LBL_SHOW_MORE':'Show More',
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
	'LBL_MATCH_COLUMNS': 'Select columns to match in grid',
	'LBL_MATCH_ERROR': 'You can only match the fields you select to show',
	'ERROR_CREATING_TRY_AGAIN': 'Error while creating. Fields cannot be empty or have a wrong value.',
	'LBL_REQUIRED_FIELDS': 'Please fill all required fields',
	'LBL_ERROR_CREATING': 'Error while creating. Please try again.',
	'LBL_ERROR_DROPZONE': 'Error uploading link. Check the link and try again.',
	'LBL_DUPLICATE_PRODUCT': 'Please duplicate the product',
	'LBL_SELECT_MORE_ROWS': 'Please select at least one row',
	'LBL_SELECT_ROW': 'Please select one row',
	'LBL_DELETE_SUCCESS': 'Deleted successfully',
	'LBL_WRONG': 'Something went wrong. Try again!',
	'LBL_UNABLE_TO_FILTER': 'Unable to filter data. Try again!',
	'LNK_DUPLICATE': 'Duplicate',
	'LBL_COLLAPSE': 'uit klappen',
	'LBL_EXPAND': 'in',
	'currentuser': 'Current User',
	'wfmodule': 'Workflow Module',
	'RelatedList': 'Related List',
	'SelectField': 'Select field',
	'MoveFile': 'Move file',
	'GENDOC_SAVE_PDF': 'Are you sure you want to override template?',
};

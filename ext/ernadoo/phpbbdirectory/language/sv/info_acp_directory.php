<?php
/**
*
* phpBB Directory extension for the phpBB Forum Software package.
*
* @copyright (c) 2014 ErnadoO <http://www.phpbb-services.com>
* @license GNU General Public License, version 2 (GPL-2.0)
*
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine

$lang = array_merge($lang, array(
	'ACP_DIRECTORY'							=> 'phpBB Länklista',
	'ACP_DIRECTORY_CATS'					=> 'Kategoriinställningar',
	'ACP_DIRECTORY_INDEX_TITLE'				=> 'phpBB Länklista',
	'ACP_DIRECTORY_MAIN'					=> 'Information och verktyg',
	'ACP_DIRECTORY_SETTINGS'				=> 'Generella inställningar',
	'ACP_DIRECTORY_SETTINGS_EXPLAIN'		=> 'Inställningar för länklistan',
	'ACP_DIRECTORY_VAL'						=> 'Hemsidor som väntar på bekräftelse',
	'DIR_ACTIVE_CHECK'						=> 'Aktivera kontroll av hemsida',
	'DIR_ACTIVE_CHECK_EXPLAIN'				=> 'Genom att markera <i>ja</i>, så kommer länkarna att bli kontrollerade när de läggs till. Om hemsidorna inte svarar inom en sekund så kommer de att betraktas som onåbara.',
	'DIR_ACTIVE_THUMB'						=> 'Aktivera miniatyrbilder för hemsidorna',
	'DIR_ACTIVE_THUMB_REMOTE'				=> 'Aktivera AscreeN kompatibilitet',
	'DIR_ACTIVE_THUMB_REMOTE_EXPLAIN'		=> 'Genom att markera <i>ja</i>, så kommer tillägget att kontrollera om en AscreeN miniatyrbild finns tillgänglig när en hemsida läggs till.<br />En AscreeN miniatyrbild hanteras av webbmastern och återspeglar normalt hemsidans utseende mer korrekt.',
	'DIR_ACTIV_BANNER'						=> 'Aktivera bannerlänk',
	'DIR_ACTIV_FLAG'						=> 'Aktivera språkval',
	'DIR_ACTIV_RSS'							=> 'Aktivera specifikation av RSS-flödet',
	'DIR_ACTIV_RSS_EXPLAIN'					=> 'Genom att aktivera detta val så tillåts specificering av webbadressen för det tillhörande RSS-flödet när en hemsida läggs till <br />En ikon kommer att visas när kategorin är aktiv.',
	'DIR_ADD_GUEST'							=> 'Inställningar för gäster',
	'DIR_ALLOW_BBCODE'						=> 'Tillåt bbcodes i kommentarerna',
	'DIR_ALLOW_COMMENTS'					=> 'Tillåt kommentarer',
	'DIR_ALLOW_FLASH'						=> 'Tillåt användning av <code>[FLASH]</code> BBCode taggar i kommentarerna',
	'DIR_ALLOW_LINKS'						=> 'Tillåt länkar i kommentarerna',
	'DIR_ALLOW_SMILIES'						=> 'Tillåt smileys i kommentarerna',
	'DIR_ALLOW_VOTES'						=> 'Tillåt röstning',
	'DIR_BANNERS_DIR_SIZE'					=> 'Storlek på bannerlänklistan',
	'DIR_BANN_PARAM'						=> 'Inställningar för banner',
	'DIR_CAT_ADMIN'							=> 'Inställningar för länklistans kategorier',
	'DIR_CAT_ADMIN_EXPLAIN'					=> 'Här kan du lägga till, ändra eller ta bort kategorier individuellt. Om statistiken för länkarna (kommentarer, antal röster) eller en av kategorierna verkar vara felaktiga, så kan du också omsynkronisera en kategori.',
	'DIR_CAT_CREATED'						=> 'Kategorin har skapats.',
	'DIR_CAT_DATA_NEGATIVE'					=> 'Inställningen för de automatiska kontrollerna samt antalet kontroller innan borttagning kan inte vara ett negativt värde eller lämnas tomt.',
	'DIR_CAT_DELETE'						=> 'Ta bort kategorin',
	'DIR_CAT_DELETED'						=> 'Kategorin togs bort',
	'DIR_CAT_DELETE_EXPLAIN'				=> 'Följande formulär tillåter dig att ta bort en kategori samt välja vart du vill flytta alla hemsidor (eller kategorier) som kategorin innehåller.',
	'DIR_CAT_DESC'							=> 'Beskrivning',
	'DIR_CAT_DESC_EXPLAIN'					=> 'Det är valfritt att lägga till en beskrivning av en kategori. Om du skriver en så kommer texten att placeras ovanför hemsidorna i kategorin.<br />Eventuell HTML-kod kommer att publiceras såsom den är.',
	'DIR_CAT_GENERAL_SETTINGS'				=> 'Generella inställningar för kategorin',
	'DIR_CAT_ICON'							=> 'Kategoribild',
	'DIR_CAT_NAME'							=> 'Kategorinamn',
	'DIR_CAT_NAME_EMPTY'					=> 'Du måste skriva ett namn för kategorin',
	'DIR_CAT_PARENT'						=> 'Överliggande kategori',
	'DIR_CAT_RESYNCED'						=> 'Kategorin “%s” har omsynkroniserats',
	'DIR_CAT_ROUTE'							=> 'Kategorin URL',
	'DIR_CAT_ROUTE_EMPTY'					=> 'Du måste skriva ett URL för kategorin',
	'DIR_CAT_ROUTE_ILLEGAL_CHARACTERS'		=> 'Kategorin URL innehöll otillåtna tecken',
	'DIR_CAT_ROUTE_NOT_UNIQUE'				=> 'Kategorin URL var ej unik',
	'DIR_CAT_SETTINGS'						=> 'Kategoriinställningar',
	'DIR_CAT_TOO_LONG'						=> 'Kategoribeskrivningen är för lång. Den kan inte innehålla mer än 4000 tecken.',
	'DIR_CAT_UPDATED'						=> 'Kategoriinformationen har uppdaterats.',
	'DIR_COMM_PARAM'						=> 'Inställningar för kommentarer',
	'DIR_COMM_PER_PAGE'						=> 'Antal kommentarer per sida',
	'DIR_CONFIG_SETTINGS'					=> 'Uppdatering av länklistans konfiguration',
	'DIR_COUNT_ALL'							=> 'Räkna hemsidorna i underkategorierna',
	'DIR_COUNT_ALL_EXPLAIN'					=> 'Om du aktiverar detta val, så kommer räknaren som visas bredvid varje kategori att räkna hemsidorna i underkategorierna',
	'DIR_ADD_CAT'							=> 'Skapa en ny kategori',
	'DIR_CRON_ENABLE'						=> 'Aktivera periodvis kontroll av tillbakalänkar ',
	'DIR_CRON_ENABLE_EXPLAIN'				=> 'Om aktiverad, så kommer detta val att periodvis kontrollera de tillagda tillbakalänkarnas giltighet.',
	'DIR_CRON_EVERY'						=> 'Kontrollera varje',
	'DIR_CRON_SETTINGS'						=> 'Inställningar för tillbakalänk',
	'DIR_DEFAULT_ORDER'						=> 'Standardsortering av ranking ',
	'DIR_DELETE_ALL_LINKS'					=> 'Ta bort alla hemsidor',
	'DIR_DELETE_ORPHANS'					=> 'Ta bort banners utan koppling',
	'DIR_DELETE_ORPHANS_CONFIRM'			=> 'Är du säker på att du vill ta bort de bannerna som inte har någon koppling ?',
	'DIR_DELETE_ORPHANS_EXPLAIN'			=> 'Banners utan koppling är bannerna som kopierades på servern men, som av okänd anledning, inte längre associeras med en hemsida i länklistan',
	'DIR_DELETE_ORPHANS_SUCCESS'			=> 'Bannerna utan koppling är nu borttagna',
	'DIR_DELETE_SUBCATS'					=> 'Ta bort underkategorier och hemsidor',
	'DIR_EDIT_CAT'							=> 'Redigera kategori',
	'DIR_EDIT_EXPLAIN'						=> 'Följande formulär tillåter dig att göra denna kategori mer personlig.',
	'DIR_ERROR_AUTH_COMM'					=> 'Du har inte tillåtelse att skriva en kommentar',
	'DIR_ERROR_CAT'							=> 'Det är inte möjligt att återställa datan i kategorin',
	'DIR_ERROR_COMM_LOGGED'					=> 'Du måste vara inloggad för att skriva en kommentar',
	'DIR_ERROR_KEYWORD'						=> 'Du måste skriva något för att kunna göra en sökning',
	'DIR_ERROR_NOT_AUTH'					=> 'Du har inte tillåtelse att genomföra denna ändring',
	'DIR_ERROR_NO_LINK'						=> 'Hemsidan du letar efter finns inte',
	'DIR_ERROR_NO_LINKS'					=> 'Denna hemsida finns inte',
	'DIR_ERROR_SUBMIT_TYPE'					=> 'Felaktig datatyp i funktionen dir_submit_type',
	'DIR_ERROR_URL'							=> 'Du måste skriva in en giltig webbadress',
	'DIR_ERROR_VOTE'						=> 'Du har redan röstat på denna hemsida',
	'DIR_ERROR_VOTE_LOGGED'					=> 'Du måste vara inloggad för att rösta',
	'DIR_INDEX'								=> 'Länklistans index',
	'DIR_LENGTH_COMMENTS'					=> 'Maximalt antal tecken för en länkkommentar',
	'DIR_LINKS'								=> 'Länkar',
	'DIR_LINK_ACTIVATE'						=> 'Bekräfta',
	'DIR_LINK_DELETE'						=> 'Ta bort',
	'DIR_LIST_INDEX'						=> 'Visa kategorin i ordningen av dess överliggande kategori',
	'DIR_MAIL_NOTIFICATION'					=> 'En ny hemsida i länklistan',
	'DIR_MAIL_VALIDATION'					=> 'Få ett mejl om en hemsida väntar på godkännande',
	'DIR_MAX_ADD_ATTEMPTS'					=> 'Antal försök att lägga till hemsida',
	'DIR_MAX_ADD_ATTEMPTS_EXPLAIN'			=> 'Antal försök att skriva in korrekt bekräftelsekod innan deras session tar slut.',
	'DIR_MAX_BANN'							=> 'Maximal bannerstorlek',
	'DIR_MAX_BANN_EXPLAIN'					=> 'Maximal bannerstorlek. Ställ in de två värdena på 0px gånger 0px för att inaktivera detta val.',
	'DIR_MAX_DESC'							=> 'Maximalt antal tecken för hemsidans beskrivning.',
	'DIR_MAX_SIZE'							=> 'Maximal bannerstorlek',
	'DIR_MAX_SIZE_EXPLAIN'					=> 'För de tillagda bannerna',
	'DIR_MOVE_LINKS_TO'						=> 'Flytta alla hemsidor till',
	'DIR_MOVE_SUBCATS_TO'					=> 'Flytta underkategorierna',
	'DIR_MUST_BACK'							=> 'Begär en länk tillbaka',
	'DIR_MUST_BACK_EXPLAIN'					=> 'Om aktiverat, så kommer detta val att fråga om en länk tillbaka när hemsidan läggs till.',
	'DIR_MUST_DESCRIBE'						=> 'Aktivera obligatorisk beskrivning när en hemsida läggs till',
	'DIR_NB_CHECK'							=> 'Antal kontroller innan borttagning',
	'DIR_NB_CHECK_EXPLAIN'					=> 'Skriv in antalet kontroller som ska göras innan en hemsida tas bort på grund av att tillbakalänken inte längre är giltig; Ett e-postmeddelande kommer att skickas vid varje misslyckad kontroll för att varna användaren om att tillbakalänken saknas. Skriv in 0 om du vill att hemsidan tas bort efter den första misslyckade kontrollen.',
	'DIR_NESTEDSET_LOCK_FAILED_ACQUIRE'		=> 'Kunde in låsa kategoritabellen för att genomföra detta',
	'DIR_NESTEDSET_INVALID_ITEM'			=> 'Kunde inte hämta information om kategorin',
	'DIR_NESTEDSET_INVALID_PARENT'			=> 'Ogiltig överliggande kategori',
	'DIR_NEW_TIME'							=> 'Antal dagar som nya hemsidor.',
	'DIR_NEW_TIME_EXPLAIN'					=> 'Antal dagar som en hemsida ska räknas som ny. Om detta aktiveras så visas ikonen "ny". Skriv in 0 för att inaktivera detta val.',
	'DIR_NEXT_CRON_ACTION'					=> 'Datum för nästa kontroll',
	'DIR_NO_CAT'							=> 'Ingen kategori vald',
	'DIR_NO_DESTINATION_CAT'				=> 'En målkategori är inte specificerad',
	'DIR_NO_LINK'							=> 'Det finns inga hemsidor som väntar på godkännande',
	'DIR_NO_PARENT'							=> 'Ingen överliggande',
	'DIR_NUMBER_CATS'						=> 'Antal kategorier',
	'DIR_NUMBER_CLICKS'						=> 'Antal klick',
	'DIR_NUMBER_COMMENTS'					=> 'Antal kommentarer',
	'DIR_NUMBER_LINKS'						=> 'Antal aktiva länkar',
	'DIR_NUMBER_ORPHANS'					=> 'Antal banners utan koppling',
	'DIR_NUMBER_VOTES'						=> 'Antalet röster',
	'DIR_ORDER_A_A'							=> '[Stigande] Författare',
	'DIR_ORDER_A_D'							=> '[Fallande] Författare',
	'DIR_ORDER_R_A'							=> '[Stigande] Kommentarer',
	'DIR_ORDER_R_D'							=> '[Fallande] Kommentarer',
	'DIR_ORDER_S_A'							=> '[Stigande] Namn',
	'DIR_ORDER_S_D'							=> '[Fallande] Namn',
	'DIR_ORDER_T_A'							=> '[Stigande] Datum',
	'DIR_ORDER_T_D'							=> '[Fallande] Datum',
	'DIR_ORDER_V_A'							=> '[Stigande] Klick',
	'DIR_ORDER_V_D'							=> '[Fallande] Klick',
	'DIR_PARAM'								=> 'Generella inställningar',
	'DIR_RECENT_COLUMNS'					=> 'Antal kolumner i rutan',
	'DIR_RECENT_ENABLE'						=> 'Aktivera "Senast tillagda länkar"-ruta',
	'DIR_RECENT_ENABLE_EXPLAIN'				=> 'Detta val visar en ruta längst ner på länksidans startsida med de senast tillagda hemsidorna i länklistan. <br />Antalet hemsidor som visas kan ställas in med följande inställningar.',
	'DIR_RECENT_EXCLUDE'					=> 'ID för de kategorier som ska exkluderas',
	'DIR_RECENT_EXCLUDE_EXPLAIN'			=> 'Skriv in ID för de kategorier som inte ska finnas med, separera med kommatecken.<br />Ex: 1,4,12',
	'DIR_RECENT_GUEST'						=> 'Inställningar för "Senast tillagda länkar"-rutan',
	'DIR_RECENT_ROWS'						=> 'Antal rader i rutan',
	'DIR_RESET_CLICKS'						=> 'Återställ klickräknaren',
	'DIR_RESET_CLICKS_CONFIRM'				=> 'Är du säker på att du vill återställa klickräknaren ?',
	'DIR_RESET_CLICKS_SUCCESS'				=> 'Klick återställda',
	'DIR_RESET_COMMENTS'					=> 'Återställ kommentarer',
	'DIR_RESET_COMMENTS_CONFIRM'			=> 'Är du säker på att du vill återställa kommentarerna ?',
	'DIR_RESET_COMMENTS_EXPLAIN'			=> 'Ta bort alla kommentarer från länkarna i länklistan',
	'DIR_RESET_COMMENTS_SUCCESS'			=> 'kommentarerna togs bort',
	'DIR_RESET_VOTES'						=> 'Återställ röster',
	'DIR_RESET_VOTES_CONFIRM'				=> 'Är du säker på att du vill återställa rösterna ?',
	'DIR_RESET_VOTES_EXPLAIN'				=> 'Ta bort alla röster från länklistans länkar',
	'DIR_RESET_VOTES_SUCCESS'				=> 'Röster återställda',
	'DIR_SELECT_CAT'						=> 'Välj en kategori',
	'DIR_SHOW'								=> 'Antal hemsidor per sida',
	'DIR_STATS'								=> 'Statistik för länklistan',
	'DIR_STORAGE_BANNER'					=> 'Kopiera bannerna på servern',
	'DIR_STORAGE_BANNER_EXPLAIN'			=> 'Om du aktiverar detta val, så kommer bannerna som är länkade till hemsidan att kopieras till servern.<br />Aktivering av detta val gör så att denna hemsida laddar fortare.',
	'DIR_SUBCAT'							=> 'Underkategori',
	'DIR_THUMB_PARAM'						=> 'Inställningar för miniatyrbilder',
	'DIR_THUMB_SERVICE'						=> 'Tjänst att använda för att skapa miniatyrbilder',
	'DIR_THUMB_SERVICE_EXPLAIN'				=> 'Tjänst att använda för att skapa miniatyrbilder när AscreeN miniatyrbilder inte finns. Såvida du inte aktiverar valet nedanför så kommer denna inställning endast att påverka framtida tillagda hemsidor',
	'DIR_THUMB_SERVICE_REVERSE'				=> 'Aktivera retroaktiv ändring av tjänsten',
	'DIR_THUMB_SERVICE_REVERSE_EXPLAIN'		=> 'Genom att markera <i>ja</i>, så kommer befintliga länkar före ändringen av tjänsten att använda den nya valda tjänsten. Detta kräver att en databasfråga körs för varje hemsida när de ska visas efter att tjänsten ändrats, för att uppdatera tabellen.',
	'DIR_USER_PROP'							=> 'Tillagd av %s i <i>%s</i> den %s',
	'DIR_VALIDATE'							=> 'Aktivera administratörsbekräftelse',
	'DIR_VALIDATE_EXPLAIN'					=> 'Genom att markera <i>ja</i>, så kommer de tillagda länkarna att behöva godkännas innan de publiceras i länklistan. Annars, om du markerar <i>nej</i> så kommer länkarna att publiceras omgående.',
	'DIR_VALIDATION'						=> 'Bekräftelse av länklistans hemsidor',
	'DIR_VALIDATION_EXPLAIN'				=> 'Detta val kommer endast att fungera om du i inställningspanelen ställer in så att hemsidorna som läggs till i länklistan måste godkännas. Om så är fallet, så kommer ett e-postmeddelande att skickas till personen som la till hemsidan och, så fort du bekräftar hemsidan i administratörspanelen, så kommer den att publiceras i länklistan.',
	'DIR_VISUAL_CONFIRM'					=> 'Aktivera en visuell bekräftelse för gäster',
	'DIR_VISUAL_CONFIRM_EXPLAIN'			=> 'Genom att markera <i>ja</i>, så kommer gästerna att behöva skriva in en slumpmässig kod som matchar en bild för att förhindra dem att lägga till alltför många hemsidor.',
	'DIR_WAITING_LINKS'						=> 'Antal väntande länkar',

	'LOG_DIR_AUTO_PRUNE'					=> '<strong>Automatisk borttagning av en kategori i länklistan</strong><br />» %s',
	'LOG_DIR_CAT_ADD'						=> '<strong>Skapande av en ny kategori i länklistan</strong><br />» %s',
	'LOG_DIR_CAT_DEL_CAT'					=> '<strong>Borttagning av en kategori</strong><br />» %s',
	'LOG_DIR_CAT_DEL_CATS'					=> '<strong>Borttagning av en kategori och dess underkategorier</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS'					=> '<strong>Borttagning av en kategori och dess meddelanden.</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS_CATS'			=> '<strong>Borttagning av en kategori, dess meddelanden och dess underkategorier</strong><br />» %s',
	'LOG_DIR_CAT_DEL_LINKS_MOVE_CATS'		=> '<strong>Borttagning av en kategori och dess meddelanden, underkategorier flyttade</strong> till %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_CATS'				=> '<strong>Borttagning av en kategori och underkategorier flyttade</strong> till %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS'			=> '<strong>Borttagning av en kategori och meddelanden flyttade</strong> till %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS_CATS'		=> '<strong>Borttagning av en kategori och dess underkategorier, och meddelanden flyttade</strong> till %1$s<br />» %2$s',
	'LOG_DIR_CAT_DEL_MOVE_LINKS_MOVE_CATS'	=> '<strong>Borttagning av en kategori, meddelande flyttade </strong> till %1$s <strong>och underkategorier flyttade</strong> till %2$s<br />» %3$s',
	'LOG_DIR_CAT_EDIT'						=> '<strong>Modifiera en kategori i länklistan</strong><br />» %s',
	'LOG_DIR_CAT_MOVE_DOWN'					=> '<strong>Flytta en kategori i länklistan</strong> %1$s <strong>över</strong> %2$s',
	'LOG_DIR_CAT_MOVE_UP'					=> '<strong>Flytta en kategori i länklistan</strong> %1$s <strong>under</strong> %2$s',
	'LOG_DIR_CAT_SYNC'						=> '<strong>Omsynkronisering av en kategori i länklistan</strong><br />» %s',
	'LOG_LINK_APPROVED'						=> '<strong>Aktivering av hemsidor som väntar på godkännande</strong><br />» %s',
	'LOG_LINK_DISAPPROVED'					=> '<strong>Borttagning av hemsidor som väntar på godkännande</strong><br />» %s',

	'SYNC_IN_PROGRESS'						=> 'Synkronisering av kategorin',
	'SYNC_IN_PROGRESS_EXPLAIN'				=> 'Omsynkronisering av länkarna %1$d/%2$d pågår.',

	'TOO_LONG_DESCRIPTION'					=> 'Din beskrivning är för lång',
	'TOO_SHORT_DESCRIPTION'					=> 'Du måste skriva en beskrivning',
	'TOO_SHORT_REPLY'						=> 'Din kommentarer är för kort',
	'TOO_SHORT_SITE_NAME'					=> 'Du måste skriva ett namn för hemsidan',
	'TOO_SHORT_URL'							=> 'Du måste skriva in en webbadress',
	'TOO_SMALL_CAT'							=> 'Du måste välja en kategori',
));

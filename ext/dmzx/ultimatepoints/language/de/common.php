<?php
/**
*
* @version $Id: common.php 53 2017-01-22 14:45:23Z Scanialady $
* @package phpBB Extension - Ultimate Points (DEUTSCH)
* @copyright (c) 2016 dmzx & posey - http://www.dmzx-web.net
* @license http://opensource.org/licenses/gpl-2.0.php GNU General Public License v2
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
//
// Some characters you may want to copy&paste:
// ‚ ‘ ’ « » „ “ ” …
//

$lang = array_merge($lang, array(
	'ACP_POINTS'						=> 'Ultimate Points',
	'ACP_POINTS_BANK_TITLE'				=> 'Bank Einstellungen',
	'ACP_POINTS_FORUM_TITLE'			=> 'Forenpunkte Einstellungen',
	'ACP_POINTS_INDEX_TITLE'			=> 'Punkte Einstellungen',
	'ACP_POINTS_LOTTERY_TITLE'			=> 'Lotterie Einstellungen',
	'ACP_POINTS_ROBBERY_TITLE'			=> 'Diebstahl Einstellungen',
	'ACP_POINTS_USERGUIDE_TITLE'		=> 'Benutzerhilfe',

	'BANK_ACCOUNT_OPENING'				=> 'Eröffne ein Konto',
	'BANK_ACCOUNT_OPENED'				=> 'Bankkonto eröffnet auf',
	'BANK_ACTIONS'						=> 'Aktionen',
	'BANK_BACK_TO_BANK'					=> '%sKlicke hier, um zur Bank zurückzukehren%s',
	'BANK_BACK_TO_INDEX'				=> '%sKlicke hier um zur Hauptseite zurückzukehren%s',
	'BANK_BALANCE'						=> 'Kontostand',
	'BANK_BUTTON_DEPOSIT'				=> 'Einzahlen',
	'BANK_BUTTON_WITHDRAW'				=> 'Abheben',
	'BANK_COST'							=> 'Kontoführungsgebühren pro Periode',
	'BANK_DEPOSIT_SMALL_AMOUNT'			=> 'er kleinste Betrag zum Einzahlen lautet	%s %s.',
	'BANK_DEPOSIT_WITHDRAW'				=> 'Einzahlung & Abhebung',
	'BANK_DESCRIPTION'					=> 'Du befindest dich hier in unserer Hausbank. Bei uns gibt es nur geringe Kontoführungsgebühren, dafür erhältst du aber hier auch ein paar Zinsen für deine schwer verdienten Punkte. Eine Geldanlage auf der Bank könnte sich - neben den Guthabenzinsen - durchaus für dich lohnen, denn auf der Bank ist dein Geld sicher und es kann dir nicht gestohlen werden.<br /><br />',
	'BANK_DISABLED'						=> 'Die Bank ist deaktiviert',
	'BANK_ERROR_DEPOSIT'				=> 'Du hast einen ungültigen oder falschen Betrag zum Einzahlen eingegeben',
	'BANK_ERROR_NOT_ENOUGH_DEPOSIT'		=> 'Du besitzt nicht genügend %1$s um so viel einzuzahlen',
	'BANK_ERROR_NOT_ENOUGH_WITHDRAW'	=> 'Du hast weniger %1$s auf der Bank, als du versuchst abzuheben',
	'BANK_ERROR_PAYOUTTIME_SHORT'		=> 'Du mußt in der Bank Konfiguration einen Wert größer als <em>Null</em> eintragen',
	'BANK_ERROR_WITHDRAW'				=> 'Du hast einen ungültigen oder falschen Betrag zum Abheben eingegeben',
	'BANK_FROM_ACCOUNT'					=> 'deinem Konto',
	'BANK_HAVE_DEPOSIT'					=> 'gutgeschrieben',
	'BANK_HAVE_WITHDRAW'				=> 'abgezogen',
	'BANK_HOLDING'						=> 'Gesamte Einlagen',
	'BANK_INFO'							=> 'Bank-Information',
	'BANK_INTEREST_PERIOD'				=> 'Zinszahlungsperiode',
	'BANK_INTEREST_RATE'				=> 'Zinssatz',
	'BANK_LEAVE_WITH'					=> 'Damit bleiben dir',
	'BANK_MAX_HOLD'						=> 'Max. Betrag für Guthabenzinsen',
	'BANK_MIN_DEPO'						=> 'Mindestbetrag zum Einzahlen',
	'BANK_MIN_WITH'						=> 'Mindestbetrag zum Abheben',
	'BANK_NEW_BALANCE'					=> 'Dein neuer Kontostand lautet',
	'BANK_NOW_HAVE'						=> 'Du hast nun',
	'BANK_NO_ACCOUNT'					=> 'Benutzer hat kein Konto bei der %1$s',
	'BANK_NOBODY_IN_BANK'				=> 'Derzeit hat niemand %1$s eingezahlt in %2$s',
	'BANK_ON_HAND'						=> 'in Bar',
	'BANK_OPEN_ACCOUNT'					=> '%sKlicke hier, um ein Konto zu eröffnen%s',
	'BANK_RICHEST_USER'					=> 'Die reichsten Banker',
	'BANK_START_BALANCE'				=> 'Dein Startkontostand beträgt 0.',
	'BANK_TITLE_MAIN'					=> 'Bank',
	'BANK_TOTAL_ACCOUNTS'				=> 'Gesamte Anzahl Konten',
	'BANK_TO_ACCOUNT'					=> 'auf dein Konto eingezahlt',
	'BANK_USER_NO_ACCOUNT'				=> 'Du hast noch kein Konto bei %1$s.',
	'BANK_WELCOME_BANK'					=> 'Willkommen bei der',
	'BANK_WITHDRAW_RATE'				=> 'Gebühren für Abhebungen',
	'BANK_WITHDRAW_SMALL_AMOUNT'		=> 'Der kleinste Betrag, den du abheben kannst, ist %s %s.',
	'BANK_YOUR_ACCOUNT'					=> 'Du kannst nun von deinem Konto abheben oder auf dein Konto einzahlen',

	'EDIT_BANK_MODIFY'					=> 'Bank Administration',
	'EDIT_NO_ID_SPECIFIED'				=> 'Du hast keinen Benutzernamen eingegeben',
	'EDIT_POINTS_ADMIN'					=> 'Punkte-Admin',
	'EDIT_POINTS_MODIFY'				=> '%s Administration',
	'EDIT_POINTS_SET'					=> 'Die %1$s des Benutzers wurden aktualisiert.<br /><br />',
	'EDIT_P_BANK_TITLE'					=> 'Hier kannst du die Bank %s eines Benutzers bearbeiten.',
	'EDIT_P_POINTS_TITLE'				=> 'Hier kannst du die %s eines Benutzers bearbeiten.',
	'EDIT_P_RETURN_INDEX'				=> '%1$sKlicke hier, um zur Hauptseite zurückzukehren.%2$s',
	'EDIT_P_RETURN_POST'				=> '%1$sKlicke hier, um zum letzten Beitrag zurückzukehren.%2$s',
	'EDIT_SET_AMOUNT'					=> 'Neuer Betrag',
	'EDIT_ADD_AMOUNT'					=> 'Betrag hinzufügen',
	'EDIT_SUB_AMOUNT'					=> 'Betrag abziehen',
	'EDIT_USER_NOT_EXIST'				=> 'Dieser Benutzer existiert nicht.',

	'INFO_GENERAL_INFORMATIONS'			=> 'Allgemeine Information',
	'INFO_ATTACH'						=> 'Punkte für jeden Dateianhang in neuen Beiträgen',
	'INFO_ADD_ATTACH'					=> 'Zusätzliche Punkte für jede neu angehängte Datei',
	'INFO_BONUS_CHANCE'					=> 'Punkte-Bonus',
	'INFO_BONUS_CHANCE_EXPLAIN'			=> 'Derzeit beträgt die Chance %1$s &#37; einen Bonus zu erhalten und eine Steigerung von %2$s auf %3$s %4$s',
	'INFO_NO_COST'						=> 'Derzeit musst du keine %1$s dafür ausgeben',
	'INFO_NO_POINTS'					=> 'Derzeit bekommst du keine %1$s dafür',
	'INFO_POLL'							=> 'Punkte für neue Umfragen',
	'INFO_POLL_OPTION'					=> 'Punkte für jede Auswahl in neuen Umfragen',
	'INFO_TOPIC_WORD'					=> 'Punkte pro Wort in neuen Themen',
	'INFO_TOPIC_CHARACTER'				=> 'Punkte pro Zeichen in neuen Themen',
	'INFO_POST_WORD'					=> 'Punkte pro Wort in neuen Beiträgen',
	'INFO_POST_CHARACTER'				=> 'Punkte pro Zeichen in neuen Beiträgen',
	'INFO_COST_DL_ATTACH'				=> 'Kosten pro Download eines Dateianhanges',
	'INFO_COST_WARNING'					=> 'Kosten pro Verwarnung',
	'INFO_REG_BONUS'					=> 'Punkte-Bonus beim Registrieren',

	'LOGS_COMMENT'						=> 'Kommentar',
	'LOGS_DATE'							=> 'Datum',
	'LOGS_DESCRIPTION'					=> 'Hier ist dein Kontoauszug.<br /><br />Es werden alle Überweisungen bzw. Schenkungen angezeigt, die du erhalten oder selbst getätigt hast.<br /><br />Du bist auf der Suche nach einem bestimmten Zahlungsvorgang? <br />Dann sortiere einfach deinen Kontoauszug nach dem gewünschten Kriterium.<br /><br />',
	'LOGS_REASON_NOLOGS'				=> 'Es sind keine Logeinträge verfügbar.',
	'LOGS_RECV'							=> 'Erhalten',
	'LOGS_ROBBERY_LOST'					=> 'Fehlgeschlagener Diebstahl',
	'LOGS_ROBBERY_WON'					=> 'Erfolgreicher Diebstahl',
	'LOGS_SENT'							=> 'Gesendet',
	'LOGS_SORT_COMMENT'					=> 'Kommentar',
	'LOGS_SORT_DATE'					=> 'Datum',
	'LOGS_SORT_FROMNAME'				=> 'Von wem',
	'LOGS_SORT_TONAME'					=> 'An wen',
	'LOGS_SORT_TYPE'					=> 'Typ',
	'LOGS_TITLE'						=> '%1$s Logs',
	'LOGS_TO'							=> 'An wen',
	'LOGS_TYPE'							=> 'Typ',
	'LOGS_WHO'							=> 'Wer',
	'LOTTERY_ACTIONS'					=> 'Aktionen',
	'LOTTERY_BACK'						=> 'Zurück zur Lotterieseite',
	'LOTTERY_DATE'						=> 'Datum',
	'LOTTERY_DESCRIPTION'				=> 'Der Wert deiner gekauften Lose geht in den Jackpot, der bereits einen Grundwert von <strong>%1$s %2$s</strong> hat.<br /><br />Je mehr Mitspieler du hast, umso höher wird natürlich der Jackpot. Nach einem Zufallsprinzip wird ein Gewinner gezogen. Aber es gibt immer nur einen Gewinner oder wie im richtigen Leben auch gar keinen. Wenn niemand gewinnt, bleibt der Jackpot bestehen und erhöht sich dann entsprechend bis zur nächsten Ziehung.<br /><br />Viel Glück!<br /><br /><br /><br />',
	'LOTTERY_DISABLED'					=> 'Die Lotterie ist deaktiviert.',
	'LOTTERY_HISTORY'					=> 'HISTORIE',
	'LOTTERY_INFO'						=> 'Lotterie Informationen',
	'LOTTERY_INVALID_INPUT'				=> 'Du musst eine gültige Anzahl eingeben, um Lose kaufen zu können.',
	'LOTTERY_JACKPOT'					=> 'Jackpot',
	'LOTTERY_LACK_FUNDS'				=> 'Du hast nicht genügend Barvermögen, um diesen Kauf zu tätigen!',
	'LOTTERY_LAST_WINNER'				=> 'Der letzte Gewinner war',
	'LOTTERY_MAX_TICKETS'				=> 'Max. Anzahl Lose pro Runde und Spieler',
	'LOTTERY_MAX_TICKETS_LEFT'			=> 'Du hast nur noch <strong>%1$s</strong> Lose übrig, die du in dieser Runde kaufen kannst!',
	'LOTTERY_MAX_TICKETS_REACH'			=> 'Du darfst nur <strong>max. %1$s</strong> Lose pro Runde kaufen!',
	'LOTTERY_NEGATIVE_TICKETS'			=> 'Du kannst keine negativen oder 0 Lose kaufen!<br />Du mußt also mindestens 1 Los kaufen!',
	'LOTTERY_NEVER_WON'					=> 'Du hast bis jetzt nicht in der Lotterie gewonnen!',
	'LOTTERY_NEXT_DRAWING'				=> 'Die nächste Auslosung findet statt am',
	'LOTTERY_NO_WINNER'					=> 'Bei der letzten Ziehung gab es keinen Gewinner',
	'LOTTERY_NO_WINNERS'				=> 'Bis jetzt hat niemand in der Lottery gewonnen.',
	'LOTTERY_PLAYERS'					=> 'Mitspieler bisher',
	'LOTTERY_PM_BODY'					=> 'Herzlichen Glückwunsch! Du hast %1$s in unserer Lotterie gewonnen! %2$s',
	'LOTTERY_PM_CASH_ENABLED'			=> 'Der Gewinn wurde auf dein Konto überwiesen. Viel Spaß damit.<i>Die Lotterie Verwaltung</i>',
	'LOTTERY_PM_COMMISION'				=> 'Die Lotterieverwaltung',
	'LOTTERY_PM_SUBJECT'				=> 'Du hast in der Lotterie gewonnen!',
	'LOTTERY_PURCHASE_TICKET'			=> 'Los kaufen',
	'LOTTERY_PURCHASE_TICKETS'			=> 'Lose kaufen',
	'LOTTERY_TICKETS'					=> 'Bisher verkaufte Lose',
	'LOTTERY_TICKET_COST'				=> 'Kosten für ein Los',
	'LOTTERY_TICKET_PURCHASED'			=> 'Dein Losekauf ist abgeschlossen!',
	'LOTTERY_TITLE_DESCRIPTION'			=> 'Wie wird gespielt?',
	'LOTTERY_TITLE_MAIN'				=> 'Lotterie',
	'LOTTERY_TOTAL_WINNERS'				=> 'Gewinner',
	'LOTTERY_VIEWER_TICKETS'			=> 'Deine Lose',
	'LOTTERY_VIEW_HISTORY'				=> 'Zeige bisherige Gewinner',
	'LOTTERY_VIEW_SELF_HISTORY'			=> 'Zeige deine Gewinnhistorie',
	'LOTTERY_WINNINGS'					=> 'Gesamt gewonnen',
	'LOTTERY_WON'						=> 'Gewonnen von',
	'LOTTERY_WINNER_INDEX'				=> 'Der letzte Lotterie-Gewinner: %1$s',

	'MAIN_BANK_HAVE'					=> 'Auf der Bank hortest du nochmal %1$s %2$s.',
	'MAIN_HELLO_USERNAME'				=> 'Hallo %1$s !',
	'MAIN_LOTTERIES_NONE'				=> 'Bisher keine Gewinner...',
	'MAIN_LOTTERY_TICKETS'				=> 'Du besitzt aktuell %1$s Los(e).',
	'MAIN_LOTTERIES_WON'				=> 'Meiste Lotteriegewinne',
	'MAIN_MOST_DONATED'					=> 'Meiste Spenden',
	'MAIN_MOST_DONATED_NONE'			=> 'Bisher wurden keine Spenden gemacht...',
	'MAIN_ON_HAND'						=> 'Derzeit besitzt du %1$s %2$s in Bar.',
	'MAIN_RICH_BANK'					=> 'Reichste Kontoinhaber',
	'MAIN_RICH_BANK_NONE'				=> 'Niemand hat ein Bankkonto...',
	'MAIN_USERNAME_LOCKED'				=> 'Dieser Benutzer ist gesperrt und kann das Banksystem nicht benutzen.',

	'NOTIFICATION_BANK_PAYOUT'			=> 'Dein Bankguthaben wurde ausgezahlt und deinem Guthaben hinzugefügt',
	'NOTIFICATION_RANDOM_BONUS'			=> 'Du hast %1$s %2$s als zufälligen Bonus erhalten!',
	'NOTIFICATION_ROBBERY_FAILED'		=> 'versuchte, dich auszurauben - hats aber nicht hinbekommen!',
	'NOTIFICATION_ROBBERY_SUCCES'		=> 'hat dir frechweg %1$s %2$s gestohlen!',
	'NOTIFICATION_POINTS_UCP'			=> 'Empfange Benachrichtigungen über Punkte <em>(erfolgreiche/fehlgeschlagene Diebstähle, Bonuspunkte, etc..)</em>',

	'POINTS'							=> 'Punkte',
	'POINTS_ATTACHMENT_MINI_POSTS'		=> 'Du brauchst mehr %1$s um diesen Anhang downloaden zu können!',
	'POINTS_BANK'						=> 'Bank',
	'POINTS_BPOINTS_TOTAL'				=> 'Gesamteinlagen in der Bank: %1$s %2$s',
	'POINTS_BOT_GUEST'					=> '<strong>Wenn du bei uns registriert bist, kannst du diese Funktion auch benutzen!</strong>',
	'POINTS_BUPOINTS_TOTAL'				=> 'Bankkonten : %1$s',
	'POINTS_CASH_ON_HAND'				=> 'Barvermögen',
	'POINTS_COPYRIGHT'					=> 'Ultimate Points von <a href="http://die-muellers.org" onclick="window.open(this.href); return false">femu</a> &amp; <a href="http://www.spieleresidenz.de" onclick="window.open(this.href); return false">Wuerzi</a> v',
	'POINTS_COPYRIGHTS'					=> '&copy; 2016 <a href="http://www.dmzx-web.net" onclick="window.open(this.href); return false">dmzx &amp; posey</a>',
	'POINTS_DESCRIPTION'				=> 'Beschreibung',
	'POINTS_DISABLED'					=> 'Ultimate Points ist derzeit deaktiviert.',
	'POINTS_DONATE'						=> '[Spenden]',
	'POINTS_DOWNLOAD_COST'				=> 'Downloadkosten',
	'POINTS_EXPLAIN'					=> 'Ultimate Points',
	'POINTS_INFO'						=> 'Information',
	'POINTS_INFO_DESCRIPTION'			=> 'Hier findest du zusätzliche Informationen zur Vergabepolitik der %1$s. <br /><br />Unabhängig von diesen Angaben werden dir evtl. noch weitere %1$s in den Themenbereichen ausgezahlt.<br /><br />Bitte beachte aber auch, dass der Boardbetreiber die Möglichkeit hat, komplette Themenbereiche von der Vergabe von %1$s auszuschliessen.',
	'POINTS_INSUFFICIENT_POST'			=> 'Du hast nicht genug %2$s um einen Beitrag in diesem Forum zu verfassen. Die Kosten für einen Beitrag in diesem Forum betragen <strong>%1$s %2$s</strong>.',
	'POINTS_INSUFFICIENT_TOPIC'			=> 'Du hast nicht genug %2$s um ein neues Thema in diesem Forum zu erstellen. Die Kosten, um eine Thema in diesem Forum zu erstellen, betragen <strong>%1$s %2$s</strong>.',
	'POINTS_LOCKED'						=> 'Gesperrt',
	'POINTS_LOGS'						=> 'Logs',
	'POINTS_LOG_COUNT'	=> array(
		1 => '%d Eintrag',
		2 => '%d Einträge',
	),
	'POINTS_LIST'						=> 'UP Liste',
	'POINTS_LIST_DISABLE'				=> 'Ultimate Points Liste deaktiviert',
	'POINTS_LIST_NO_USER'				=> 'Keine Benutzer mit Punkten',
	'POINTS_LIST_TOTAL'					=> 'Ultimate Points Liste',
	'POINTS_LIST_USER'					=> '1 Benutzer',
	'POINTS_LIST_USERS'					=> '%s Benutzer',
	'POINTS_LOG_TOTAL'					=> 'Gesamt',
	'POINTS_LOTTERY'					=> 'Lotterie',
	'POINTS_LOTTERY_TIME'				=> 'Nächste Lotterieziehung: %1$s',
	'POINTS_MODIFY'						=> '[Ändern]',
	'POINTS_MOST_RICH_CASH_USERS'		=> 'Benutzer mit dem höchsten Barvermögen',
	'POINTS_MOST_RICH_USERS'			=> 'Reichste Benutzer',
	'POINTS_MOST_RICH_USERS_DISABLED'	=> 'Diese Anzeige wurde vom Administrator deaktiviert',
	'POINTS_NO_USER'					=> 'Dieser Benutzername ist ungültig',
	'POINTS_NUMBER_FORMAT_EXPLAIN'		=> 'Hinweis: Beträge immer ohne Tausender Trennzeichen eingeben und Nachkommastellen mit einem Punkt, z.B. 1000.50',
	'POINTS_OPTIONS'					=> 'Optionen',
	'POINTS_OVERVIEW'					=> 'Übersicht',
	'POINTS_RECEIVED_EDIT_MESSAGE'		=> 'u hast für das Bearbeiten der Nachricht <strong>%1$s %2$s</strong> erhalten',
	'POINTS_RECEIVED_POST_MESSAGE'		=> 'Du hast für dein neues Thema <strong>%1$s %2$s</strong> erhalten',
	'POINTS_RECEIVED_REPLY_MESSAGE'		=> 'Du hast für deinen Beitrag <strong>%1$s %2$s</strong> erhalten',
	'POINTS_RETURN_INDEX'				=> 'Klicke hier, um zur Hauptseite zurückzukehren',
	'POINTS_ROBBERY'					=> 'Diebstahl',
	'POINTS_SEPARATOR_DECIMAL'			=> '.',
	'POINTS_SEPARATOR_THOUSANDS'		=> ',',
	'POINTS_STATISTICS'					=> 'Punktestatistik',
	'POINTS_TITLE_MAIN'					=> '%1$s Kontrollkonsole',
	'POINTS_TOTAL'						=> 'Gesamtes Barvermögen: %1$s %2$s',
	'POINTS_TRANSFER'					=> 'Schenken',
	'POINTS_VIEWING'					=> 'Ist in der Punktekonsole',
	'POINTS_TRANSFER_RECIEVED'			=> 'Geschenk erhalten',

	'ROBBERY_AMOUNT'					=> 'Betrag',
	'ROBBERY_AMOUNTLOSE'				=> 'Falls du erwischt wirst, werden dir als Strafe übrigens noch<strong> %s Prozent</strong> des Betrages, den du rauben wolltest, von deinem eigenen Konto abgezogen!<br /><br />',
	'ROBBERY_BAD'						=> 'Dumm gelaufen ... dein Diebstahlversuch ist fehlgeschlagen!',
	'ROBBERY_DATE'						=> 'Überfall am',
	'ROBBERY_CHANCE'					=> 'Hier kannst du versuchen, einem anderen Benutzer etwas zu klauen. Allerdings max. <strong>%1$s Prozent</strong> von seinem aktuellen Barvermögen.<br /><br />Wie im richtigen Leben zahlt sich auch hier ein Verbrechen nicht aus. Die Wahrscheinlichkeit, daß dein Diebstahl erfolgreich ist, liegt bei <strong> %2$s Prozent</strong>.',
	'ROBBERY_DISABLED'					=> 'Das Diebstahlsystem ist deaktiviert.',
	'ROBBERY_MAX_ROB'					=> 'Du kannst nicht mehr als <strong>%1$s Prozent</strong> vom Barvermögen deines Opfers auf einmal rauben!',
	'ROBBERY_NO_ID_SPECIFIED'			=> 'Du hast keinen Benutzernamen angegeben!',
	'ROBBERY_SELF'						=> 'Du kannst dich doch nicht selber beklauen!.',
	'ROBBERY_SET_AMOUNTR'				=> 'Der Betrag, den du rauben möchtest',
	'ROBBERY_SET_USERNAMES'				=> 'Namen der Mitglieder, die dich beraubt haben',
	'ROBBERY_SET_USERNAMER'				=> 'Name des Mitglieds, das du berauben möchtest',
	'ROBBERY_START'						=> 'Starte Diebstahl',
	'ROBBERY_SUCCESFUL'					=> 'Du hast erfolgreich einen großartigen Raubzug durchgeführt!',
	'ROBBERY_TOO_SMALL_AMOUNT'			=> 'Du musst ein bißchen mehr rauben!<br /> Der eingetragene Wert ist zu klein...',
	'ROBBERY_TO_MUCH'					=> 'Du versuchst zu viel zu klauen. Wenn der Diebstahl fehlschlägt, kannst du den entstandenen Schaden nicht bezahlen...',
	'ROBBERY_TO_MUCH_FROM_USER'			=> 'Du versuchst mehr zu klauen, als der Benutzer überhaupt hat.',
	'ROBBERY_USER'						=> '[Starte Raubzug]',
	'ROBBERY_TO_NAME'					=> 'Du möchtest einige <strong>%2$s</strong> von <strong>%1$s</strong> stehlen',

	'TRANSFER_AMOUNTS'					=> 'Betrag',
	'TRANSFER_SET_USERNAMES'			=> 'Name des Mitglieds, welches dir gespendet hat!',
	'TRANSFER_DATE'						=> 'Überweisung erhalten',
	'TRANSFER_RECEIVED_DISABLED'		=> 'Das Überweisungssystem ist deaktiviert',
	'TRANSFER_RECEIVED'					=> '%1$s received',

	'TIME_DAY'							=> 'Tag',
	'TIME_DAYS'							=> 'Tage',
	'TIME_HOUR'							=> 'Stunde',
	'TIME_HOURS'						=> 'Stunden',
	'TIME_MINUTE'						=> 'Minute',
	'TIME_MINUTES'						=> 'Minuten',
	'TIME_MONTH'						=> 'Monat',
	'TIME_MONTHS'						=> 'Monate',
	'TIME_SECOND'						=> 'Sekunde',
	'TIME_SECONDS'						=> 'Sekunden',
	'TIME_WEEK'							=> 'Woche',
	'TIME_WEEKS'						=> 'Wochen',
	'TIME_YEAR'							=> 'Jahr',
	'TIME_YEARS'						=> 'Jahre',
	'TRANSFER_AMOUNT'					=> 'Betrag den du überweisen willst',
	'TRANSFER_COMMENT'					=> 'Kommentar',
	'TRANSFER_DESCRIPTION'				=> 'Hier kannst du einem anderen Benutzer ein paar %1$s überweisen.<br /><br />Einfach den Betrag eingeben und absenden.<br /><br />Dieser Vorgang wird dann auch in deine Logs eingetragen.<br /><br />',
	'TRANSFER_FEE'						=> 'Überweisungsgebühren',
	'TRANSFER_FEE_EXPLAIN'				=> 'Prozentualer Betrag, der von deiner Überweisung einbehalten wird',
	'TRANSFER_NO_USER_RETURN'			=> '<strong>Der gewählte Benutzername ist fehlerhaft!</strong>',
	'TRANSFER_PM_BODY'					=> 'Du hast eine Spende in Höhe von %1$s %2$s erhalten, mit dem folgenden Kommentar: <i>%3$s</i>',
	'TRANSFER_PM_BODY_USER'				=> 'Du hast eine Spende in Höhe von %1$s %2$s erhalten.',
	'TRANSFER_PM_SUBJECT'				=> 'Du hast eine Spende erhalten!',
	'TRANSFER_REASON_MINPOINTS'			=> 'Du hast nicht genug %1$s für diese Überweisung.',
	'TRANSFER_REASON_TRANSFER'			=> 'Der Administrator hat Überweisungen deaktivert',
	'TRANSFER_REASON_TRANSUCC'			=> 'Du hast erfolgreich <strong>%1$s %2$s</strong> an <strong>%3$s</strong> überwiesen!',
	'TRANSFER_REASON_UNDERZERO'			=> 'Überweisungen unter 0.00 %1$s kannst du nicht durchführen.',
	'TRANSFER_REASON_YOURSELF'			=> 'Du kannst keine %1$s an dich selbst überweisen!',
	'TRANSFER_SET_USERNAME'				=> '<b>Name des Mitglieds, dem du eine Spende senden möchtest:</b>',
	'TRANSFER_TITLE'					=> '%1$s Überweisung',
	'TRANSFER_TO_NAME'					=> 'Du möchtest einige <strong>%2$s</strong> an <strong>%1$s</strong> überweisen',

	'UP_INSERT_FIRST_FILL'				=> 'Die Tabellen wurden erfolgreich mit einigen Basisdaten gefüllt.',
	'UP_REMOVE_CONFIG_ENTRIES'			=> 'Die Einträge in der Konfigurationstabelle wurden erfolgreich entfernt.',
	'UP_REMOVE_FORUM_ENTRIES'			=> 'Die Einträge in der Forentabelle wurden erfolgreich entfernt.',
	'UP_ULTIMATE_POINTS_NAME'			=> 'Ultimate Points',
	'UP_ULTIMATE_POINTS_NAME_EXPLAIN'	=> 'Mit dieser Extension gibst du deinen Mitgliedern die Möglichkeit, Punkte zu sammeln und auszugeben. Klicke auf die untenstehenden Aktionen, um das Gewünschte durchzuführen. Es wird empfohlen, <strong>Zeige alle Ergebnisse</strong> zu aktivieren.<br /><br />Viel Spaß!',
	'UP_UPDATE_SUCCESFUL'				=> 'Die Tabellen wurden erfolgreich aktualisiert',

	'ULTIMATEPOINTS_VERSION'			=> 'Version',

	'WARN_USER_POINTS'					=> 'Zusätzlich haben wir von deinem Konto %1$s %2$s abgezogen!',
	'WARN_MOD_POINTS'					=> 'Zusätzlich wurden %1$s %2$s von %3$s’s Konto abgezogen!',
));
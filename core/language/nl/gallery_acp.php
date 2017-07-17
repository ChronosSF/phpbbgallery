<?php
/**
*
* gallery_acp [Dutch]
*
* @package phpBB Gallery
* @version $Id$
* @copyright (c) 2007 nickvergessen nickvergessen@gmx.de http://www.flying-bits.org
* @license http://opensource.org/licenses/gpl-license.php GNU Public License
* [Dutch] translated by Dutch Translators (https://github.com/dutch-translators)
*
**/

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

$lang = array_merge($lang, array(
	'ACP_GALLERY_OVERVIEW'			=> 'phpBB Galerij',
	'ACP_GALLERY_OVERVIEW_EXPLAIN'	=> 'Hier zijn een aantal statistieken van je gelerij.',

	'ADD_ALBUM_ON_TOP'				=> 'Album bovenaan toevoegen',
	'ADD_PERMISSIONS'				=> 'Voeg permissies toe',
	'ALBUM_ADMIN'					=> 'Album Beheer',
	'ALBUM_ADMIN_EXPLAIN'			=> 'In de phpBB Galerij zijn er geen categoriën, alles is gebaseerd op albums. Elk album kan een ongelimiteerde hoeveelheid subalbums hebben en je kan bepalen of er afbeeldingen in geplaatst mogen worden of niet (i.e. whether it acts like an old category). Hier kan je induviduele albums toevoegen, wijzigen, verwijderen, sluiten, heropenen en extra regels instellen. Als je afbeeldingen niet meer synchroon kan je het album synchroniseren. <strong>Je moet de benodigte permissies gekopieerd hebben om het nieuwe album weer te geven</strong>',
	'ALBUM_AUTH_TITLE'				=> 'Album Permissies',
	'ALBUM_CREATED'					=> 'Album succesvol aangemaakt.',
	'ALBUM_DELETE'					=> 'Verwijder album',
	'ALBUM_DELETE_EXPLAIN'			=> 'Je kan onderstaand formulier gebruiken om een album te verwijderen en te bepalen wat er met de afbeeldingen die er in staan moet gebeuren',
	'ALBUM_DELETED'					=> 'Dit album is succesvol verwijderd.',
	'ALBUM_DESC'					=> 'Beschrijving',
	'ALBUM_DESC_EXPLAIN'			=> 'Elke HTML opmaak die hier wordt ingevoerd wordt weergegeven zoals het is.',
	'ALBUM_DESC_TOO_LONG'			=> 'De album beschrijving is te lang, deze moet minder zijn dan 4000 karakters.',
	'ALBUM_EDIT_EXPLAIN'			=> 'Met onderstaand formier kan je dit album aanpassen. Let erop dat je moderatie instellingen via de albumpermissies voor elke gebruiker of gebruikersgroep gezet worden.',
	'ALBUM_ID'						=> 'Album-ID',
	'ALBUM_IMAGE'					=> 'Album afbeelding',
	'ALBUM_IMAGE_EXPLAIN'			=> 'Locatie, relatief aan de phpBB root map, van een afbeelding om aan dit album te koppelen.',
	'ALBUM_NAME_EMPTY'				=> 'Je moet een naam voor dit album opgeven.',
	'ALBUM_NO_TYPE_CHANGE_TO_CONTEST'	=> 'Een Niet-Wedstrijd-Album kan niet veranderd worden naar Wedstrijd-Album.',
	'ALBUM_PARENT'					=> 'Hoofd album',
	'ALBUM_PARENT_INVALID'			=> 'Het hoofd album dat je geselecteerd hebt is ongeldig. Het kan een subalbum zijn van het album dat je aan het wijzigen bent, of het album bestaat niet.',
	'ALBUM_PASSWORD'				=> 'Album wachtwoord',
	'ALBUM_PASSWORD_EXPLAIN'		=> 'Definieert een wachtwoord voor dit album, gebruik bij voorkeur het permissiesysteem..',
	'ALBUM_PASSWORD_CONFIRM'		=> 'Album wachtwoord bevestigen',
	'ALBUM_PASSWORD_CONFIRM_EXPLAIN'	=> 'Hoeft alleen ingevuld te worden als een albumwachtwoord is ingevoerd.',
	'ALBUM_RESYNCED'				=> 'Album “%s” succesvol ge-synchroniseren',
	'ALBUM_SETTINGS'				=> 'Album instellingen',
	'ALBUM_STATUS'					=> 'Album status',
	'ALBUM_TYPE'					=> 'Album type',
	'ALBUM_TYPE_CAT'				=> 'Categorie',
	'ALBUM_TYPE_CONTEST'			=> 'Wedstrijd',
	'ALBUM_TYPE_UPLOAD'				=> 'Album',
	'ALBUM_UPDATED'					=> 'Album succesvol bijgewerkt.',
	'ALBUM_WATERMARK'				=> 'Watermerk weergeven',
	'ALBUM_WATERMARK_EXPLAIN'		=> 'Als bij deze optie <samp>Nee</samp> is ingesteld, dan wordt het watermerk nooit weergegeven, ongeacht de permissies!',
	'ALBUM_WITH_CONTEST_NO_TYPE_CHANGE'	=> 'Wedstrijd-Albums kunnen niet veranderd worden naar Niet-Wedstrijd-Album.',
	'ALBUMS'						=> 'Albums',

	'CACHE_DIR_SIZE'				=> 'cache/-map grootte',
	'CHANGE_AUTHOR_TO_GUEST'		=> 'Verander auteur naar gast',
	'CHECK'							=> 'Controleer',
	'CHECK_AUTHOR_EXPLAIN'			=> 'Geen afbeeldingen zonder geldige auteur gevonden.',
	'CHECK_COMMENT_EXPLAIN'			=> 'Geen reacties zonder geldige auteur gevonden.',
	'CHECK_ENTRY_EXPLAIN'			=> 'Je moet een controle uitvoeren, om te zoeken naar bestanden zonder database-entry.',
	'CHECK_PERSONALS_EXPLAIN'		=> 'Geen persoonlijke albums zonder geldige eigenaar gevonden.',
	'CHECK_PERSONALS_BAD_EXPLAIN'	=> 'Geen persoonlijke albums gevonden.',
	'CHECK_SOURCE_EXPLAIN'			=> 'No entry found. Je moet een controle uitvoeren om het zeker te weten.',
	'COLS_PER_PAGE'					=> 'Het aantal kolommen op de miniatuur-pagina',
	'COMMENT'						=> 'Reactie',
	'COMMENT_ID'					=> 'Reactie-ID',
	'COMMENT_MAX_LENGTH'			=> 'Maximale lengte voor reacties',
	'COMMENT_SYSTEM'				=> 'Reactiesysteem inschakelen',
	'COMMENT_USER_CONTROL'			=> 'Gebruikers kunnen reacties regelen',
	'COMMENT_USER_CONTROL_EXP'		=> 'Sta gebruikers toe om te bepalen of andere gebruikers kunnen reageren op hun afbeeldingen.',
	'CONTEST_DATE_EXPLAIN'			=> 'Voer een datum in in: YYYY-MM-DD HH:MM formaat.',
	'CONTEST_END'					=> 'Einde wedstrijd',
	'CONTEST_END_BEFORE_RATING'		=> 'Het einde van de wedstrijd kan niet voor het begin van de wedstrijd beoordelingsperiode liggen.',
	'CONTEST_END_BEFORE_START'		=> 'Het einde van de wedstrijd kan niet voor het begin van de wedstrijd liggen.',
	'CONTEST_END_EXPLAIN'			=> 'Na het einde van de wedstrijd, kunnen gebruikers de afbeeldingen niet meer beoordelen.',
	'CONTEST_END_INVALID'			=> 'Ongeldig wedstijd-einde (%s). Voer een datum in in: YYYY-MM-DD HH:MM formaat..',
	'CONTEST_RATING'				=> 'Start beoordelingsperiode',
	'CONTEST_RATING_BEFORE_START'	=> 'Het begin van de beoordelingspriode van een wedstrijd, kan niet voor het begin van de wedstrijd liggen.',
	'CONTEST_RATING_EXPLAIN'		=> 'Nadat de beoordelingsperiode is gestart, kunnen gebruikers geen nieuwe afbeeldingen uploaden.',
	'CONTEST_RATING_INVALID'		=> 'Ongeldig wedstrijd-beoordelings-start (%s). Voer een datum in in: YYYY-MM-DD HH:MM formaat.',
	'CONTEST_SETTINGS'				=> 'Wedstrijd insellingen',
	'CONTEST_START'					=> 'Begin wedstrijd',
	'CONTEST_START_EXPLAIN'			=> 'Aan het begin van de wedstrijd, is het toegestaan dat gebruikers afbeeldingen uploaden.',
	'CONTEST_START_INVALID'			=> 'Ongeldig wedstrijd-begin (%s). Voer een datum in in: YYYY-MM-DD HH:MM formaat.',
	'COPY_PERMISSIONS'				=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_ADD_EXPLAIN'	=> 'Als je kopieer permissies selecteert, zal dit album dezelfde permissies hebben als het album dat je hebt geselecteerd. Als er geen album is geselecteerd moet je de permissies achteraf instellen.',
	'COPY_PERMISSIONS_ALBUM_FROM_EXPLAIN'	=> 'Het album waar je de permissies van wil kopiëren .',
	'COPY_PERMISSIONS_ALBUM_TO_EXPLAIN'		=> 'Het doel-album waar je de gekopieerde permissies op toe wilt passen.',
	'COPY_PERMISSIONS_CONFIRM'		=> 'LET OP: Dit overschrijft ieder bestaande prmissies in de geselecteerde albums.',
	'COPY_PERMISSIONS_EDIT_EXPLAIN'	=> 'Als je kopieer permissies selecteert, zal dit album dezelfde permissies hebben als het album dat je hebt geselecteerd. Dit zal alle permissies die je eerder hebt ingesteld overschrijven met de permissies van het album dat je selecteert. Als er geen album is geselecteerd blijven de huidige permsisies gelden.',
	'COPY_PERMISSIONS_FROM'			=> 'Kopieer permissies van',
	'COPY_PERMISSIONS_SUCCESSFUL'	=> 'Permissies succesvol gekopieerd naar het geselecteerde album.',
	'COPY_PERMISSIONS_TO'			=> 'Pas permissies toe op',
	'CREATE'						=> 'Creër',
	'CREATE_ALBUM'					=> 'Creër nieuw album',
	'CREATE_USERS_PEGA'				=> 'Creër nieuew persoonlijk album voor gebruiker',

	'DECIDE_MOVE_DELETE_CONTENT'	=> 'Verwijder de inhoud of verplaats het naar het album',
	'DECIDE_MOVE_DELETE_SUBALBUMS'	=> 'Verwijder subalbums of verplaats het naar het album',
	'DEFAULT_SORT_EXPLAIN'			=> 'Als je hier <samp>Standaard</samp> selecteerd, wordt de standaardinstelling uit de configuratie gebruikt.',
	'DEFAULT_SORT_METHOD'			=> 'Standaard sorteer-methode',
	'DEFAULT_SORT_ORDER'			=> 'Standaard sorteer-volgorde',
	'DELETE_ALBUM_SUBS'				=> 'Verwijder eerst de subalbums',
	'DELETE_ALL_IMAGES'				=> 'Verwijder alle afbeeldingen',
	'DELETE_IMAGES'					=> 'Verwijder afbeeldingen',
	'DELETE_PERMISSIONS'			=> 'Verwijder permissies',
	'DELETE_SUBALBUMS'				=> 'Verwijder subalbums en hun afbeeldingen',
	'DISP_BIRTHDAYS'				=> 'Laat verjaardagen zien',
	'DISP_FAKE_THUMB'				=> 'Bekijk miniatuur in albumlijst',
	'DISP_LOGIN'					=> 'Aanmeld-veld weergeven',
	'DISP_LOGIN_EXP'				=> 'Alleen gasten',
	'DISP_NEXTPREV_THUMB'			=> 'Miniatuur van de volgende/vorige afbeelding weergeven',
	'DISP_NEXTPREV_THUMB_EXPLAIN'	=> 'Indien nee is ingesteld, wordt alleen de naam van afbeelding als link weergegeven.',
	'DISP_PERSONAL_ALBUM_PROFILE'	=> 'Link naar persoonlijke albums wergeven in het gebruikersprofiel',
	'DISP_STATISTIC'				=> 'Galerij-statestieken weergeven',
	'DISP_TOTAL_IMAGES'				=> '“Totaal afbeldingen“ weergeven op index.php',
	'DISP_USER_IMAGES_PROFILE'		=> 'Statistieken met geüploade afbeeldingen weergeven in het gebruikersprofiel',
	'DISP_VIEWTOPIC_ICON'			=> 'Knop naar persoonlijke albums wergeven in viewtopic.php',
	'DISP_VIEWTOPIC_IMAGES'			=> 'Afbeeldingsteller weergeven in viewtopic.php',
	'DISP_VIEWTOPIC_LINK'			=> 'Koppel de afbeeldingenteller aan de afbeeldingen van de gebruiker',
	'DISP_WHOISONLINE'				=> '“Wie is online“ weergeven',
	'DISPLAY_IN_RRC'				=> 'Laat afbeeldingen uit dit album zien in de “Recente-Willikeurige“-afbeeldingen',
	'DONT_COPY_PERMISSIONS'			=> 'Permissies niet kopiëren',

	'EDIT_ALBUM'					=> 'Wijzig album',

	'FAKE_THUMB_SIZE'				=> 'Miniatuurgrootte',
	'FAKE_THUMB_SIZE_EXP'			=> 'Als je de orginele grootte wilt behouden, hou dan rekening met de 16-beeldpunten voor de zwarte informatie-regel',

	'GALLERY_ALBUMS_TITLE'			=> 'Galerij Albums Beheer',
	'GALLERY_CONFIG'				=> 'Galerij-instellingen',
	'GALLERY_CONFIG_EXPLAIN'		=> 'Je kunt hier de algemene instellingen van de phpBB Galerij hier wijzigen',
	'GALLERY_CONFIG_UPDATED'		=> 'Galerij-instellingen zijn succesvol bijgewerkt',
	'GALLERY_INDEX'					=> 'Galerij-index',
	'GALLERY_PURGE_CACHE_EXPLAIN'	=> 'Als je gebruikt maakt van de Miniatuur Buffer mogelijkheid moet je de Miniatuur Buffer legen na het wijzigen van de miniatuur-instellingen in “Album Instellingen“ om ze opnieuw aan te laten maken.',
	'GALLERY_STATS'					=> 'Galerijstatistieken',
	'GALLERY_VERSION'				=> 'Galerijversie',
	'GD_VERSION'					=> 'Optimaliseer voor GD versie',
	'GENERAL_ALBUM_SETTINGS'		=> 'Algemene albuminstellingen',
	'GIF_ALLOWED'					=> 'Toegestaan om GIF-bestanden te uploaden',
	'GUPLOAD_DIR_SIZE'				=> 'upload/-map grootte',

	'HACKING_ATTEMPT'				=> 'Hack-poging!',
	'HANDLE_IMAGES'					=> 'Wat te doen met de afbeeldingen',
	'HANDLE_SUBS'					=> 'Wat te doen met de subalbums',
	'HOTLINK_ALLOWED'				=> 'Link whitelist',
	'HOTLINK_ALLOWED_EXP'			=> 'Verwijzingen naar afbeeldingen vanaf deze domeinen zijn altijd toegestaan. De domeinnamen moeten met een komma (zonder spatie) gescheiden worden. Bijv: “flying-bits.org,phpbb.com“',
	'HOTLINK_PREVENT'				=> 'Sta verwijzingen vanaf alle sites toe',

	'IMAGE_DESC_MAX_LENGTH'			=> 'Maximale lengte voor omschrijvingen',
	'IMAGE_ID'						=> 'Afbeelding-ID',
	'IMAGE_SETTINGS'				=> 'Afbeelding instellingen',
	'IMAGES_PER_DAY'				=> 'Afbeeldingen per dag',
	'INDEX_SETTINGS'				=> 'Instellingen voor de galerij/index.php',
	'INFO_LINE'						=> 'Bestandgrootte op miniatuur weergeven',
	'INHERIT_PERMISSIONS_ALBUM'		=> 'Leent permissies van een ander album',
	'INHERIT_PERMISSIONS_VICTIM'	=> 'Leent permissies van een andere instelling',

	'JPG_ALLOWED'					=> 'Toegestaan om JPG-bestanden te uploaden',
	'JPG_QUALITY'					=> 'JPG-Kwaliteit',
	'JPG_QUALITY_EXP'				=> 'Wanneer afbeeldingen gedraaid of herschaald worden, kan de bestandsgrootte groter worden dan voorheen. Met deze optie kan je de kwaliteit van de afbeelding verminderen, om schrijruimte te besparen..',

	'LIST_INDEX'					=> 'Toon subalbum in hoofdalbum’s legenda',
	'LIST_INDEX_EXPLAIN'			=> 'Geeft dit album weer op de indexpagina en op andere plekken als een link in de legenda, als de optie “Toon subalbums in legenda” ingeschakeld is, van hoofdalbums.',
	'LIST_SUBALBUMS'				=> 'Toon subalbums in legenda',
	'LIST_SUBALBUMS_EXPLAIN'		=> 'Geeft de subalbum’s van dit forum weer op de indexpagina en op andere plekken als een link in de legenda als hun optie “Toon subalbums in hoofdalbum legenda” is ingeschakeld.',
	'LOCKED'						=> 'Gesloten',
	'LOOK_UP_ALBUM'					=> 'Selecteer een album',
	'LOOK_UP_ALBUMS_EXPLAIN'		=> 'Je kan meer dan één album selecteren.',

	'MANAGE_CRASHED_ENTRIES'		=> 'Beheer gecrashte entries',
	'MANAGE_CRASHED_IMAGES'			=> 'Beheer gecrashte afbeeldingen',
	'MANAGE_PERSONALS'				=> 'Beheer persoonlijk album',
	'MAX_IMAGES_PER_ALBUM'			=> 'Maximum aantal afbeeldingen per album',
	'MAX_IMAGES_PER_ALBUM_EXP'		=> 'Ongelimiteerd is -1',
	'MEDIUM_CACHE'					=> 'Buffer aangepaste afbeeldingen voor afbeeldings-pagina',
	'MEDIUM_DIR_SIZE'				=> 'medium/-directory size',
	'MISSING_ALBUM_NAME'			=> 'Je moet een naam voor het album opgeven.',
	'MISSING_AUTHOR'				=> 'Afbeeldingen zonder geldige auteur',
	'MISSING_AUTHOR_C'				=> 'Reacties zonder geldige auteur',
	'MISSING_ENTRY'					=> 'Bestanden zonder database-entry',
	'MISSING_OWNER'					=> 'Persoonlijke albums zonder geldige eigenaar',
	'MISSING_OWNER_EXP'				=> 'Subalbums, afbeedldingen en reacties worden ook verwijderd.',
	'MISSING_SOURCE'				=> 'Afbeeldingen zonder bestand',
	'MOVE_IMAGES_TO'				=> 'Verplaatst afbeeldingen naar',
	'MOVE_SUBALBUMS_TO'				=> 'Verplaatst subalbums naar',

	'NEW_ALBUM_CREATED'				=> 'Het nieuwe album is succesvol aangemaakt',
	'NO_ALBUM_SELECTED'				=> 'Je moet tenminste één album selecteren.',
	'NO_DESTINATION_ALBUM'			=> 'Je hebt geen album geselecteerd om de inhoud naar te verplaatsen.',
	'NO_PERMISSIONS_SELECTED'		=> 'Je moet tenminste één album of een speciaal permissie-systeem.',
	'NO_VICTIM_SELECTED'			=> 'Je moet tenminste één gebruiker of groep selecteren.',
	'NO_INHERIT'					=> 'Permissies niet kopiëren',
	'NO_PARENT_ALBUM'				=> 'Geen hoofdalbum',
	'NO_SUBALBUMS'					=> 'Geen Albums toegevoegd',
	'NUMBER_ALBUMS'					=> 'Aantal albums',
	'NUMBER_IMAGES'					=> 'Aantal afbeeldingen',
	'NUMBER_PERSONALS'				=> 'Aantal persoonlijke albums',

	'OWN_PERSONAL_ALBUMS'			=> 'Je eigen persoonlijke albums',
	'OWN_PERSONAL_ALBUMS_EXPLAIN'	=> 'Deze permissies worden gebruikt,als een gebruiker één van zijn eigen persoonlijke albums bezoekt. <strong>Als je gebruikers geen persoonlijk album kunnen creëren, dan moet je deze permissies aanpassen.</strong>',
	'PERSONAL_ALBUMS_EXPLAIN'		=> 'Deze permissies worden gebruikt, als een gebruiker een persoonlijk album van een ander bezoekt. <strong>Als je moderators geen afbeeldingen in persoonlijke albums kunnen modereren, dan moet je deze permissies aanpassen.</strong>',

	'PERMISSION'					=> 'Permissie',
	'PERMISSION_NEVER'				=> 'Nooit',
	'PERMISSION_NO'					=> 'Nee',
	'PERMISSION_SETTING'			=> 'Instelling',
	'PERMISSION_YES'				=> 'Ja',

	'PERMISSION_A_COUNT'			=> 'Aantal persoonlijke albims',
	'PERMISSION_A_LIST'				=> 'Kan album zien',
	'PERMISSION_A_RESTRICT'			=> 'Kan de toegang beperken',
	'PERMISSION_A_UNLIMITED'		=> 'Ongelimiteerd aantal persoonlijke albums',
	'PERMISSION_C'					=> 'Reacties',
	'PERMISSION_C_DELETE'			=> 'Kan eigen reacties verwijderen',
	'PERMISSION_C_EDIT'				=> 'Kan eigen reacties wijzigen',
	'PERMISSION_C_POST'				=> 'Kan op afbeelding reageren',
	'PERMISSION_C_READ'				=> 'Kan reacties lezen',
	'PERMISSION_I'					=> 'Afbeeldingen',
	'PERMISSION_I_APPROVE'			=> 'Kan uploaden zonder goedkeuring',
	'PERMISSION_I_COUNT'			=> 'Aantal te uploaden afbeeldingen',
	'PERMISSION_I_DELETE'			=> 'Kan eigen afbeeldingen verwijderen',
	'PERMISSION_I_EDIT'				=> 'Kan eigen afbeldingen wijzigen',
	'PERMISSION_I_LOCK'				=> 'kan afbeldingen sluiten',
	'PERMISSION_I_RATE'				=> 'Kan afbeeldingen beoordelen',
	'PERMISSION_I_RATE_EXPLAIN'		=> 'Gasten en afbeeldingsuploaders kunnen <samp>NOOIT</samp> afbeeldingen beoordelen.',
	'PERMISSION_I_REPORT'			=> 'kan afbeldingen melden',
	'PERMISSION_I_UNLIMITED'		=> 'Kan ongelimiteerd aantal afbeeldingen uploaden',
	'PERMISSION_I_UPLOAD'			=> 'Kan afbeeldingen uploaden',
	'PERMISSION_I_UPLOAD_EXPLAIN'	=> 'Deze permissie wordt ook gebruikt, om vast te stellen of een gebruiker afbeeldingen kan verplaatsen naar het album, wanneer deze moderator permissies heeft in andere forums.',
	'PERMISSION_I_VIEW'				=> 'Kan afbeeldingen bekijken',
	'PERMISSION_I_WATERMARK'		=> 'Kan afbeelding zonder watermerk bekijken',
	'PERMISSION_M'					=> 'Moderatie',
	'PERMISSION_MISC'				=> 'Misc', //Miscellaneous
	'PERMISSION_M_COMMENTS'			=> 'Kan reacties modereren',
	'PERMISSION_M_DELETE'			=> 'Kan afbeeldingen verwijderen',
	'PERMISSION_M_EDIT'				=> 'Kan afbeeldingen wijzigen',
	'PERMISSION_M_MOVE'				=> 'Kan afbeeldingen verplaatsen',
	'PERMISSION_M_REPORT'			=> 'Kan meldingen beheren',
	'PERMISSION_M_STATUS'			=> 'Kan afbeeldingen goedkeuren en sluiten',

	'PERMISSION_EMPTY'				=> 'Je hebt niet alle permissies ingesteld.',
	'PERMISSIONS'					=> 'Permissies',
	'PERMISSIONS_COPY'				=> 'Kopieer album permissies',
	'PERMISSIONS_COPY_EXPLAIN'		=> 'Hier kan je albumpermissies kopiëren van één album naar één of meerdere andere albums.',
	'PERMISSIONS_EXPLAIN'			=> 'Hier kan je veranderen welke groepen en gebruikers er toegang hebben tot welke albums.',
	'PERMISSIONS_STORED'			=> 'Permissies zijn succesvol opgeslagen.',
	'PERSONAL_ALBUM_INDEX'			=> 'Bekijk persoonlijke albums als album op de index',
	'PERSONAL_ALBUM_INDEX_EXP'		=> 'Indien “Nee“ is gekozen, komt er een verwijzing, rechtsonderaan.',
	'PEGA_CREATED'					=> 'Persoonlijke galerij aangemaakt voor %s.',
	'PEGA_ALREADY_EXISTS'			=> '%s heeft al een persoonlijke galerij.',
	'PGALLERIES_PER_PAGE'			=> 'Het aantal persoonlijke galerijen per pagina',
	'ITEMS_PER_PAGE'				=> 'Items per pagina',
	'ITEMS_PER_PAGE_EXP'			=> 'Hoeveel afbeeldingen/albums per pagina',
	'RANDOM_ON_INDEX'				=> 'Laat willekeuringen afbeeldingen zien op index',
	'RANDOM_ON_INDEX_EXP'			=> 'Wil je willekeurige afbeeldingen op de galerij index weergeven.',
	'RANDOM_ON_INDEX_COUNT'			=> 'Willikeurige afbeeldingsteller',
	'RECENT_ON_INDEX'				=> 'Laat recente afbeeldingen zien',
	'RECENT_ON_INDEX_EXP'			=> 'Wil je recente afbeeldingen op de galerij index weergeven',
	'RECENT_ON_INDEX_COUNT'			=> 'Recente afbeeldingsteller',
	'PHPBB_INTEGRATION'				=> 'phpBB integratie',
	'PNG_ALLOWED'					=> 'Bevoegt om PNG bestanden te uploaden',
	'PURGED_CACHE'					=> 'Cache legen',

	'RATE_SCALE'					=> 'Beoordelingsschaal',
	'RATE_SYSTEM'					=> 'Beoordelingssysteem inschakelen',
	'REDIRECT_ACL'					=> 'Je kan nu %spermissies instellen%s voor dit album.',
	'REMOVE_IMAGES_FOR_CAT'			=> 'Je moet de afbeeldingen uit het album eerst verwijderen, voordat je het album-type naar categorie kan veranderen.',
	'RESET_RATING'					=> 'Reset beoordeling voor het album',
	'RESET_RATING_COMPLETED'		=> 'Beoordeldingen succesvol verwijderd.',
	'RESET_RATING_CONFIRM'			=> 'Weet je zeker dat je de beoordelingen van de afbeeldingen in het album “%s“ wilt verwijderen?',
	'RESET_RATING_EXPLAIN'			=> 'Verwijderd alle beoordelingen van afbeeldingen in het gespecificeerde album.',
	'RESIZE_IMAGES'					=> 'Grotere afbeldingen schalen',
	'RESYNC_IMAGECOUNTS'			=> 'Afbeeldingsteller synchroniseren',
	'RESYNC_IMAGECOUNTS_CONFIRM'	=> 'Weet je zeker dat je de afbeeldingsteller wilt synchroniseren?',
	'RESYNC_IMAGECOUNTS_EXPLAIN'	=> 'Alleen bestaande afbeeldingen komen hiervoor in aanmerking.',
	'RESYNC_LAST_IMAGES'			=> '“Laatste afbeelding“ verversen',
	'RESYNC_PERSONALS'				=> 'Persoonlijke albums synchroniseren',
	'RESYNC_PERSONALS_CONFIRM'		=> 'Weet je zeker dat je de afbeeldingsteller wilt synchroniseren?',
	'RESYNCED_IMAGECOUNTS'			=> 'Afbeeldingsteller gesynchroniseerd',
	'RESYNCED_LAST_IMAGES'			=> '“Laatste afbeelding“ ververst',
	'RESYNCED_PERSONALS'			=> 'Persoonlijke albums gesynchroniseerd',
	'ROTATE_IMAGES'					=> 'Sta het draaien van afbeldingen toe',
	'ROTATE_IMAGES_EXP'				=> 'Deze functie kan op dit moment niet gebruikt worden, de functie “imagerotate“ is niet aanwezig/geactiveerd in jou GD Versie.',
	'ROWS_PER_PAGE'					=> 'Het aantal rijen op de miniatuur-pagina',

	'RRC_DISPLAY_ALBUMNAME'			=> 'Album naam',
	'RRC_DISPLAY_COMMENTS'			=> 'Reacties',
	'RRC_DISPLAY_IMAGENAME'			=> 'Afbeeldingsnaam',
	'RRC_DISPLAY_IMAGETIME'			=> 'Afbeeldingstijd',
	'RRC_DISPLAY_IMAGEVIEWS'		=> 'Afbeeldingsweergave',
	'RRC_DISPLAY_IP'				=> 'Gebruikers-IP',
	'RRC_DISPLAY_NONE'				=> 'Geen',
	'RRC_DISPLAY_OPTIONS'			=> 'Welke waardes moeten er onder de miniaturen worden weergegeven',
	'RRC_DISPLAY_USERNAME'			=> 'Gebruikersnaam',
	'RRC_DISPLAY_RATINGS'			=> 'Beoordelingen',
	'RRC_GINDEX'					=> 'Recent- &amp; Random-Images &amp; Comment - Feature',
	'RRC_GINDEX_COLUMNS'			=> 'Kolommen',
	'RRC_GINDEX_COMMENTS'			=> 'Reacties uitklappen',
	'RRC_GINDEX_CONTESTS'			=> 'Aantal wedstrijden',
	'RRC_GINDEX_CROWS'				=> 'Aantal reacties',
	'RRC_GINDEX_MODE'				=> 'Mode',
	'RRC_GINDEX_MODE_EXP'			=> 'Het laden van de “Willekeurige afbeeldingen“ kan enkele minuten duren bij grote databases!',
	'RRC_GINDEX_PGALLERIES'			=> 'Laat afbeeldingen van persoonlijke albums zien',
	'RRC_GINDEX_ROWS'				=> 'Rijen',
	'RRC_MODE_COMMENTS'				=> 'Reacties',
	'RRC_MODE_NONE'					=> 'Geen',
	'RRC_MODE_RANDOM'				=> 'Willekeurige afbeeldingen',
	'RRC_MODE_RECENT'				=> 'Recente afbeeldingen',
	'RRC_PROFILE_COLUMNS'			=> 'Kolommen',
	'RRC_PROFILE_MODE'				=> 'Modus van “Recente &amp; willekeurige afbeeldingen“-opties in het profiel',
	'RRC_PROFILE_MODE_EXP'			=> 'Het laden van de “Willekeurige afbeeldingen“ kan enkele minuten duren bij grote databases!',
	'RRC_PROFILE_ROWS'				=> 'Rijen',
	'RRC_PROFILE_ITEMS'				=> 'Items in gebruikersprofiel',

	'RSZ_HEIGHT'					=> 'Maximum-hoogte bij het bekijken van de afbeelding',
	'RSZ_WIDTH'						=> 'Maximum-breedte bij het bekijken van de afbeelding',

	'SEARCH_SETTINGS'				=> 'Zoek instellingen',
	'SELECT_ALBUM'					=> 'Selecteer album',
	'SELECT_ALBUMS'					=> 'Selecteer albums',
	'SELECT_GROUPS'					=> 'Selecteer groepen',
	'SELECT_PERM_SYS'				=> 'Selecteer permissie-systeem',
	'SELECT_PERMISSIONS'			=> 'Selecteer permissies',
	'SELECTED_ALBUM_NOT_EXIST'		=> 'De geselecteerde album(s) bestaan niet.',
	'SELECTED_ALBUMS'				=> 'Geselecteerde albums',
	'SELECTED_GROUPS'				=> 'Geselecteerde groepen',
	'SELECTED_PERM_SYS'				=> 'Geselecteerd permissie-systeem',
	'SET_PERMISSIONS'				=> '<br />Stel <a href="%s">permissies</a> nu in.',
	'SORRY_NO_STATISTIC'			=> 'Sorry, deze statistiek is nog niet beschikbaar .',
	'SYNC_IN_PROGRESS'				=> 'Album synchronisatie ...',
	'SYNC_IN_PROGRESS_EXPLAIN'		=> 'Synchronisatie afbeeldingen nummers %1$d/%2$d.',

	'THUMBNAIL_CACHE'				=> 'Miniatuur buffer',
	'THUMBNAIL_HEIGHT'				=> 'Miniatuur hoogte',
	'THUMBNAIL_QUALITY'				=> 'Miniatuur kwalitiet',
	'THUMBNAIL_QUALITY_EXP'			=> 'Waarde moet tussen de 1 en de 100 zijn.',
	'THUMBNAIL_SETTINGS'			=> 'Miniatuur instellingen',
	'THUMBNAIL_WIDTH'				=> 'Miniatuur breedte',

	'UC_IMAGE_NAME'					=> 'Afbeeldingsnaam',
	'UC_IMAGE_ICON'					=> 'Icoon laatste afbeelding',
	'UC_IMAGEPAGE'					=> 'Afbeelding op afbeeldingspagina',
	'UC_IMAGEPAGE_EXP'				=> 'Dat is de pagina met afbeeldings-details en reacties.',
	'UC_LINK_CONFIG'				=> 'Link instellingen',
	'UC_LINK_HIGHSLIDE'				=> 'Open Highslide-Plugin',
	'UC_LINK_IMAGE'					=> 'Open afbeelding',
	'UC_LINK_IMAGE_PAGE'			=> 'Open afbeeldingspagina (met details en reacties)',
	'UC_LINK_LYTEBOX'				=> 'Open Lytebox-Plugin',
	'UC_LINK_NEXT'					=> 'Volgende afbelding',
	'UC_LINK_NEWTAB'				=> 'Open Nieuw tabblad',
	'UC_LINK_NONE'					=> 'Geen verwijzigng',
	'UC_LINK_SHADOWBOX'				=> 'Open Shadowbox-Plugin',
	'UC_THUMBNAIL'					=> 'Miniatuur',
	'UC_THUMBNAIL_EXP'				=> 'Ook gebruikt voor de BBcode.',
	'UNLOCKED'						=> 'Geopend',
	'UPDATE_BBCODE'					=> 'BBCode bijwerken',
	'UPLOAD_IMAGES'					=> 'Upload meerdere afbeeldingen',

	'VIEW_IMAGE_URL'				=> 'Laat afbeeldingslink zien op afbeeldingspagina',

	'WATERMARK'						=> 'Watermerk',
	'WATERMARK_HEIGHT'				=> 'Minimum hoogte voor watermerk',
	'WATERMARK_HEIGHT_EXP'			=> 'Om te voorkomen dat kleine afbeeldingen worden afgedekt door het watermerk, kan je hier een minimum hoogte instellen. Als de afbeelding kleiner is wordt er geen watermerk gebruikt.',
	'WATERMARK_IMAGES'				=> 'Watermerk afbeeldingen',
	'WATERMARK_OPTIONS'				=> 'Watermerk opties',
	'WATERMARK_POSITION'			=> 'Watermerk positie',
	'WATERMARK_POSITION_BOTTOM'		=> 'onderaan',
	'WATERMARK_POSITION_CENTER'		=> 'gecentreerd',
	'WATERMARK_POSITION_LEFT'		=> 'links',
	'WATERMARK_POSITION_MIDDLE'		=> 'midden',
	'WATERMARK_POSITION_RIGHT'		=> 'rechts',
	'WATERMARK_POSITION_TOP'		=> 'bovenaan',
	'WATERMARK_SOURCE'		 		=> 'Watermerk bronbestand',
	'WATERMARK_SOURCE_EXP'		 	=> 'Relatief aan je phpbb root-pad',
	'WATERMARK_WIDTH'				=> 'Minimum breedte voor watermerk',
	'WATERMARK_WIDTH_EXP'			=> 'Om te voorkomen dat kleine afbeeldingen worden afgedekt door het watermerk, kan je hier een minimum breedte instellen. Als de afbeelding kleiner is wordt er geen watermerk gebruikt.',

	'ZIP_ALLOWED'					=> 'ZIP-archieven uploaden toestaan',

	'NO_WRITE_ACCESS'				=> 'Geen schijf rechten',
	'WRITE_ACCESS'					=> 'OK',
	'DIR_CREATED'					=> 'Map aangemaakt',
));

/**
* A copy of Handyman` s MOD version check, to view it on the gallery overview
*/
$lang = array_merge($lang, array(
	'ANNOUNCEMENT_TOPIC'	=> 'Release Aankondiging',
	'CURRENT_VERSION'		=> 'Huidige versie',
	'DOWNLOAD_LATEST'		=> 'Download Laatste versie',
	'LATEST_VERSION'		=> 'Laatste versie',
	'NO_INFO'					=> 'Kan niet verbinden met de server voor de versie controle',
	'NOT_UP_TO_DATE'			=> '%s is niet up-to-date',
	'RELEASE_ANNOUNCEMENT'	=> 'Aankondigings onderwerp',
	'UP_TO_DATE'			=> '%s is up-to-date',
	'VERSION_CHECK'			=> 'EXT Versie Controle',
));

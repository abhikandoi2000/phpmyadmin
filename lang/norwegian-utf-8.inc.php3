<?php
/* $Id$ */

/**
 * Translated by Sven-Erik Andersen <sven_erik at andersen.as>
 */

$charset = 'utf-8';
$allow_recoding = TRUE;
$text_dir = 'ltr';
$left_font_family = 'verdana, arial, helvetica, geneva, sans-serif';
$right_font_family = 'arial, helvetica, geneva, sans-serif';
$number_thousands_separator = '.';
$number_decimal_separator = ',';
// shortcuts for Byte, Kilo, Mega, Giga, Tera, Peta, Exa
$byteUnits = array('Bytes', 'KB', 'MB', 'GB', 'TB', 'PB', 'EB');

$day_of_week = array('Søn', 'Man', 'Tir', 'Ons', 'Tor', 'Fre', 'Lør');
$month = array('Jan', 'Feb', 'Mar', 'Apr', 'Mai', 'Jun', 'Jul', 'Aug', 'Sep', 'Okt', 'Nov', 'Des');
// See http://www.php.net/manual/en/function.strftime.php to define the
// variable below
$datefmt = '%d. %B, %Y klokka %H:%M %p';
$timespanfmt = '%s dager, %s timer, %s minutter og %s sekunder';

$strAPrimaryKey = 'En primærnøkkel har blitt lagt til %s';
$strAbortedClients = 'Avbrutt';
$strAbsolutePathToDocSqlDir = 'Vennligst skriv inn den absolutte stien på webtjeneren til docSQL katalogen';
$strAccessDenied = 'Ingen tilgang';
$strAction = 'Handling';
$strAddDeleteColumn = 'Legg til/Slett kolonne';
$strAddDeleteRow = 'Legg til/Slett kriterierad';
$strAddNewField = 'Legg til felt';
$strAddPriv = 'Legg til nytt privilegium';
$strAddPrivMessage = 'Du har lagt til ett nytt privilegium.';
$strAddPrivilegesOnDb = 'Legg til privilegier til følgende database';
$strAddPrivilegesOnTbl = 'Legg til privilegier til følgende tabell';
$strAddSearchConditions = 'Legg til søkekriterier (innhold i "where"-setningen):';
$strAddToIndex = 'Legg til indeks&nbsp;%s&nbsp;kolonne(r)';
$strAddUser = 'Legg til en ny bruker';
$strAddUserMessage = 'Du har lagt til en ny bruker.';
$strAddedColumnComment = 'Lagt til kolonnekommentar';
$strAddedColumnRelation = 'Lagt til relasjon for kolonne';
$strAdministration = 'Administrasjon';
$strAffectedRows = 'Berørte rader:';
$strAfter = 'Etter %s';
$strAfterInsertBack = 'Returner';
$strAfterInsertNewInsert = 'Sett inn en ny post';
$strAll = 'Alle';
$strAllTableSameWidth = 'vis alle tabeller med samme bredde?';
$strAlterOrderBy = 'Endre tabellrekkefølge ved';
$strAnIndex = 'En indeks har blitt lagt til %s';
$strAnalyzeTable = 'Analyser tabell';
$strAnd = 'og';
$strAny = 'Alle';
$strAnyColumn = 'Alle kolonner';
$strAnyDatabase = 'Alle databaser';
$strAnyHost = 'Alle verter';
$strAnyTable = 'Alle tabeller';
$strAnyUser = 'Alle brukere';
$strAscending = 'Stigende';
$strAtBeginningOfTable = 'Ved begynnelsen av tabellen';
$strAtEndOfTable = 'Ved slutten av tabellen';
$strAttr = 'Attributter';
$strAutodetect = 'Automatisk oppdaging';
$strAutomaticLayout = 'Automatisk disposisjon';

$strBack = 'Tilbake';
$strBeginCut = 'START KUTT';
$strBeginRaw = 'START UFORMATERT';
$strBinary = ' Binær ';
$strBinaryDoNotEdit = ' Binær - må ikke redigeres ';
$strBookmarkDeleted = 'Bokmerket har blitt slettet.';
$strBookmarkLabel = 'Navn';
$strBookmarkQuery = 'Lagret SQL-spørring';
$strBookmarkThis = 'Lagre denne SQL-spørringen';
$strBookmarkView = 'Bare se';
$strBrowse = 'Se på';
$strBzError = 'phpMyAdmin kunne ikke komprimere dumpede data fordi Bz2 tillegget til denne php versjonen er ødelagt. Vi anbefaler på det sterkeste at du setter <code>$cfg[\'BZipDump\']</code> direktivet i din phpMyAdmin konfigurasjonsfil til <code>FALSE</code>. Hvis du ønsker å bruke Bz2 komprimerings funksjonene, så bør du oppgradere til en nyere php versjon. Se php bug rapport %s for detaljer.';
$strBzip = 'Komprimert (bz2)';

$strCSVOptions = 'CSV valg';
$strCannotLogin = 'Kan ikke logge inn til MySQL tjeneren';
$strCantLoad = 'kan ikke starte %s tillegget,<br />vennligst kontroller PHP-konfigurasjonen';
$strCantLoadMySQL = 'kan ikke starte MySQL-modulen,<br />vennligst kontroller PHP-konfigureringen.';
$strCantLoadRecodeIconv = 'Kan ikke laste iconv- eller recode-modulen som trengs for tegnsett konvertering, konfigurer php slik at disse kan lastes eller slå av tegnsettkonvertering i phpMyAdmin.';
$strCantRenameIdxToPrimary = 'Kan ikke endre indeks til PRIMARY!';
$strCantUseRecodeIconv = 'Kan ikke bruke hverken iconv, libiconv eller recode_string funksjonene selv om modulene sier de er lastet. Sjekk din php-konfigurasjon.';
$strCardinality = 'Kardinalitet';
$strCarriage = 'Linjeskift (Mac): \\r';
$strChange = 'Endre';
$strChangeCopyMode = 'Opprett ny bruker med de samme privilegier og ...';
$strChangeCopyModeCopy = '... behold den gamle.';
$strChangeCopyModeDeleteAndReload = ' ... slett den gamle fra brukertabellene og deretter oppfrisk privilegiene.';
$strChangeCopyModeJustDelete = ' ... slett den gamle fra brukertabellene.';
$strChangeCopyModeRevoke = ' ... tilbakekall alle aktive privilegier fra den gamle og slett den etterpå.';
$strChangeCopyUser = 'Endre innloggingsinformasjon / kopiere bruker';
$strChangeDisplay = 'Velg felt for visning';
$strChangePassword = 'Endre passord';
$strCharset = 'Tegnsett';
$strCharsetOfFile = 'Filens tegnsett:';
$strCheckAll = 'Merk alle';
$strCheckDbPriv = 'Kontroller databaseprivilegier';
$strCheckPrivs = 'Kontroller privilegier';
$strCheckPrivsLong = 'Kontroller privilegier for databasen &quot;%s&quot;.';
$strCheckTable = 'Kontroller tabell';
$strChoosePage = 'Vennligst velg en side for redigering';
$strColComFeat = 'Vis kolonnekommentarer';
$strColumn = 'Kolonne';
$strColumnNames = 'Kolonnenavn';
$strColumnPrivileges = 'Kolonne-spesifikke privilegier';
$strCommand = 'Kommando';
$strComments = 'Kommentarer';
$strCompleteInserts = 'Komplette innlegg';
$strCompression = 'Kompresjon';
$strConfigFileError = 'phpMyAdmin kunne ikke lese din konfigurasjonsfil!<br />Dette kan skje hvis PHP finner en syntaksfeil eller ikke kan finne filen.<br />Vennligst kall opp konfigurasjonsfilen direkte via linken under og les PHP feilmeldingen(e) som du vil få. I de fleste tilfeller så mangler det et anførselstegn eller et semikolon et sted.<br />Hvis du får en blank side så er alt ok.';
$strConfigureTableCoord = 'Vennligst konfigurer koordinatene for tabell %s';
$strConfirm = 'Ønsker du virkelig å gjøre det?';
$strConnections = 'tilkoblinger';
$strCookiesRequired = 'Cookies må være slått på forbi dette punkt.';
$strCopyTable = 'Kopier tabell til (database<b>.</b>tabell):';
$strCopyTableOK = 'Tabellen %s er kopiert til %s.';
$strCopyTableSameNames = 'Kan ikke kopiere tabellen til samme navn!';
$strCouldNotKill = 'phpMyAdmin kunne ikke avslutte tråd %s. Den er sansynligvis alt avsluttet.';
$strCreate = 'Opprett';
$strCreateIndex = 'Lag en indeks på&nbsp;%s&nbsp;kolonner';
$strCreateIndexTopic = 'Lag en ny indeks';
$strCreateNewDatabase = 'Opprett ny database';
$strCreateNewTable = 'Opprett ny tabell i database %s';
$strCreatePage = 'Lag en ny side';
$strCreatePdfFeat = 'Lag PDF-dokumenter';
$strCriteria = 'Kriterier';

$strDBComment = 'Database kommentar: ';
$strDBGContext = 'Sammenheng';
$strDBGContextID = 'Sammenhengs-ID';
$strDBGHits = 'Treff';
$strDBGLine = 'Linje';
$strDBGMaxTimeMs = 'Max tid, ms';
$strDBGMinTimeMs = 'Min tid, ms';
$strDBGModule = 'Modul';
$strDBGTimePerHitMs = 'Tid/Treff, ms';
$strDBGTotalTimeMs = 'Total tid, ms';
$strData = 'Data';
$strDataDict = 'Dataordbok';
$strDataOnly = 'Bare data';
$strDatabase = 'Database ';
$strDatabaseHasBeenDropped = 'Databasen %s har blitt slettet';
$strDatabaseWildcard = 'Database (jokertegn er tillatt):';
$strDatabases = 'databaser';
$strDatabasesDropped = '%s databasene har blitt slettet.';
$strDatabasesStats = 'Statistikk for databaser';
$strDatabasesStatsDisable = 'Slå av statistikk';
$strDatabasesStatsEnable = 'Slå på statistikk';
$strDatabasesStatsHeavyTraffic = 'OBS: Når du slår på Databasestatistikk så kan det medføre stor traffik mellom webtjeneren og MySQL-tjeneren.';
$strDbPrivileges = 'Database-spesifikke privilegier';
$strDbSpecific = 'databasespesifikk';
$strDefault = 'Standard';
$strDefaultValueHelp = 'Sett inn en enkelt verdi for standard verdier uten skråstrek, anførselstegn eller annen &quot;escaping&quot; med dette formatet: a';
$strDelOld = 'Den nåværende siden har referanser til tabeller som ikke lenger eksisterer. Vil du slette disse referansene?';
$strDelete = 'Slett';
$strDeleteAndFlush = 'Slett brukeren og oppfrisk privilegiene etterpå.';
$strDeleteAndFlushDescr = 'Dette er den beste måten, men oppfrisking av privilegiene kan ta litt tid.';
$strDeleteFailed = 'Slettingen mislyktes!';
$strDeleteUserMessage = 'Du har slettet brukeren %s.';
$strDeleted = 'Raden er slettet';
$strDeletedRows = 'Slettede rader:';
$strDeleting = 'Sletter %s';
$strDescending = 'Synkende';
$strDisabled = 'Avslått';
$strDisplay = 'Vis';
$strDisplayFeat = 'Vis egenskaper';
$strDisplayOrder = 'Visningsrekkefølge:';
$strDisplayPDF = 'Vis PDF-skjema';
$strDoAQuery = 'Utfør en "spørring ved eksempel" (jokertegn: "%")';
$strDoYouReally = 'Vil du virkelig ';
$strDocu = 'Dokumentasjon';
$strDrop = 'Slett';
$strDropDB = 'Slett databasen %s';
$strDropSelectedDatabases = 'Slett valgte databaser';
$strDropTable = 'Slett tabell';
$strDropUsersDb = 'Slett databasene som har det samme navnet som brukerne.';
$strDumpComments = 'Inkluder kolonnekommentarer som SQL-kommentarer';
$strDumpSaved = 'Dump har blitt lagret til fila %s.';
$strDumpXRows = 'Dumpe %s rader fra rad %s.';
$strDumpingData = 'Dataark for tabell';
$strDynamic = 'dynamisk';

$strEdit = 'Endre';
$strEditPDFPages = 'Rediger PDF-sider';
$strEditPrivileges = 'Rediger privilegier';
$strEffective = 'Effektiv';
$strEmpty = 'Tøm';
$strEmptyResultSet = 'MySQL returnerte ett tomt resultat (m.a.o. ingen rader).';
$strEnabled = 'Påslått';
$strEnd = 'Slutt';
$strEndCut = 'STOPP KUTT';
$strEndRaw = 'STOPP UFORMATERT';
$strEnglishPrivileges = 'OBS: MySQL privilegiumnavn er på engelsk';
$strError = 'Feil';
$strExplain = 'Forklar SQL';
$strExport = 'Eksporter';
$strExportToXML = 'Eksporter til XML format';
$strExtendedInserts = 'Utvidete innlegg';
$strExtra = 'Ekstra';

$strFailedAttempts = 'Feilede forsøk';
$strField = 'Felt';
$strFieldHasBeenDropped = 'Feltet %s har blitt slettet';
$strFields = 'Felter';
$strFieldsEmpty = ' Antall felter er tommt! ';
$strFieldsEnclosedBy = 'Felter omsluttet av';
$strFieldsEscapedBy = 'Felter "escaped" med';
$strFieldsTerminatedBy = 'Felter avsluttet med';
$strFileAlreadyExists = 'Fila %s eksisterer alt på serveren, endre navnet eller merk av for overskriving av fil.';
$strFileCouldNotBeRead = 'Fila kunne ikke leses';
$strFileNameTemplate = 'Filnavnsmal';
$strFileNameTemplateHelp = 'Bruk __DB__ for databasenavn, __TABLE__ for tabellnavn og %svalgfrie strftime%s valg for tidsspesifikasjon, tilleggene vil bli \'automagisk\' lagt til.. All annen tekst vil bli bevart.';
$strFileNameTemplateRemember = 'husk malen';
$strFixed = 'statisk';
$strFlushPrivilegesNote = 'Merk: phpMyAdmin får brukerprivilegiene direkte fra MySQL privilegietabeller. Innholdet i disse tabellene kan være forskjellig fra de privilegiene tjeneren bruker hvis det er utført manuelle endringer på den. I så fall bør du %soppfriske privilegiene%s før du fortsetter.';
$strFlushTable = 'Oppfrisk tabellen ("FLUSH")';
$strFormEmpty = 'Manglende verdi i skjemaet!';
$strFormat = 'Format';
$strFullText = 'Hele strenger';
$strFunction = 'Funksjon';

$strGenBy = 'Generert av';
$strGenTime = 'Generert den';
$strGeneralRelationFeat = 'Generelle relasjonsegenskaper';
$strGlobal = 'global';
$strGlobalPrivileges = 'Globale privilegier';
$strGlobalValue = 'Global verdi';
$strGo = 'Utfør';
$strGrantOption = 'Rettighet';
$strGrants = 'Rettigheter';
$strGzip = 'Komprimert (gz)';

$strHasBeenAltered = 'er endret.';
$strHasBeenCreated = 'er opprettet.';
$strHaveToShow = 'Du må velge minst en kolonne for visning';
$strHome = 'Hjem';
$strHomepageOfficial = 'Offisiell phpMyAdmin-hjemmeside';
$strHomepageSourceforge = 'Sourceforge phpMyAdmin-nedlastingsside';
$strHost = 'Vert';
$strHostEmpty = 'Vertsnavnet er tomt!';

$strId = 'ID';
$strIdxFulltext = 'Fulltekst';
$strIfYouWish = 'Hvis du kun ønsker å lese inn enkelte av tabellens kolonner, angi en kommaseparert feltliste.';
$strIgnore = 'Ignorer';
$strIgnoringFile = 'Ignorerer fil %s';
$strImportDocSQL = 'Importer docSQL-filer';
$strImportFiles = 'Importer filer';
$strImportFinished = 'Importen er ferdig';
$strInUse = 'i bruk';
$strIndex = 'Indeks';
$strIndexHasBeenDropped = 'Indeksen %s har blitt slettet';
$strIndexName = 'Indeksnavn&nbsp;:';
$strIndexType = 'Indekstype&nbsp;:';
$strIndexes = 'Indekser';
$strInnodbStat = 'InnoDB status';
$strInsecureMySQL = 'Din konfigurasjonsfil inneholder innstillinger (root uten passord) som korrensponderer med MySQLs standard priviligerte brukerkonto. Din MySQL-tjener kjører med denne standardinnstillingen, er åpen for misbruk, og du burde fikse dette sikkerhetshullet snarest.';
$strInsert = 'Sett inn';
$strInsertAsNewRow = 'Sett inn som ny rad';
$strInsertNewRow = 'Sett inn ny rad';
$strInsertTextfiles = 'Les tekstfil inn i tabell';
$strInsertedRowId = 'Satt inn rad id:';
$strInsertedRows = 'Innsatte rader:';
$strInstructions = 'Instruksjoner';
$strInvalidName = '"%s" er ett reservert ord, du kan ikke bruke det som et database-, tabell- eller feltnavn.';

$strJumpToDB = 'Hopp til databasen &quot;%s&quot;.';
$strJustDelete = 'Bare slett brukerne fra privilegium tabellene.';
$strJustDeleteDescr = 'Den &quot;slettede&quot; brukeren vil fortsatt kunne bruke tjeneren som normalt inntill privilegiene er oppfrisket.';

$strKeepPass = 'Ikke endre passordet';
$strKeyname = 'Nøkkel';
$strKill = 'Avslutt';

$strLaTeX = 'LaTeX';
$strLaTeXOptions = 'LaTeX innstillinger';
$strLandscape = 'Landskapsformat';
$strLength = 'Lengde';
$strLengthSet = 'Lengde/Sett*';
$strLimitNumRows = 'Antall poster per side';
$strLineFeed = 'Linjeskift: \\n';
$strLines = 'Linjer';
$strLinesTerminatedBy = 'Linker avsluttet med';
$strLinkNotFound = 'Link ikke funnet';
$strLinksTo = 'Linker til';
$strLocalhost = 'Lokal';
$strLocationTextfile = 'Plassering av filen';
$strLogPassword = 'Passord:';
$strLogUsername = 'Brukernavn:';
$strLogin = 'Logg inn';
$strLoginInformation = 'Innlogingsinformasjon';
$strLogout = 'Logg ut';

$strMIME_MIMEtype = 'MIME-type';
$strMIME_available_mime = 'Tilgjengelige MIME-typer';
$strMIME_available_transform = 'Tilgjengelige transformationer';
$strMIME_description = 'Beskrivelse';
$strMIME_file = 'Filenavn';
$strMIME_nodescription = 'Ingen beskrivelse er tilgjengelig for denne transformasjonen.<br />Spør forfatteren hva %s gjør.';
$strMIME_transformation = 'Nettvisertransformasjon';
$strMIME_transformation_note = 'For en liste over tilgjengelige transformasjonsvalg, klikk på %stransformasjonsbeskrivelser%s';
$strMIME_transformation_options = 'Transformasjonsvalg';
$strMIME_transformation_options_note = 'Skriv inn verdiene for transformasjon med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du trenger å bruke en skråstrek ("\") eller en enkel apostrof ("\'") blant disse verdiene så sett en skråstrek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strMIME_without = 'MIME-typer skrevet i kursiv har ikke en separat transformasjonsfunksjon';
$strMissingBracket = 'Manglende parantes';
$strModifications = 'Endringene er lagret';
$strModify = 'Endre';
$strModifyIndexTopic = 'Endre en indeks';
$strMoreStatusVars = 'Flere status variabler';
$strMoveTable = 'Flytt tabell til (database<b>.</b>tabell):';
$strMoveTableOK = 'Tabellen %s har blitt flyttet til %s.';
$strMoveTableSameNames = 'Kan ikke flytte tabellen til samme navn!';
$strMustSelectFile = 'Du må velge fila du ønsker å sette inn.';
$strMySQLCharset = 'MySQL-tegnsett';
$strMySQLReloaded = 'MySQL omstartet.';
$strMySQLSaid = 'MySQL sa: ';
$strMySQLServerProcess = 'MySQL %pma_s1% som kjører på %pma_s2% som %pma_s3%';
$strMySQLShowProcess = 'Vis prosesser';
$strMySQLShowStatus = 'Vis MySQL driftsstatus';
$strMySQLShowVars = 'Vis MySQL systemvariabler';

$strName = 'Navn';
$strNext = 'Neste';
$strNo = 'Nei';
$strNoDatabases = 'Ingen databaser';
$strNoDatabasesSelected = 'Ingen databaser er valgt.';
$strNoDescription = 'ingen beskrivelse';
$strNoDropDatabases = '"DROP DATABASE"-uttrykk er avslått.';
$strNoExplain = 'Ikke forklar SQL';
$strNoFrames = 'phpMyAdmin er mer brukervennlig med en <b>rammekapabel</b> nettleser.';
$strNoIndex = 'Ingen indeks definert!';
$strNoIndexPartsDefined = 'Ingen indeksdeler definert!';
$strNoModification = 'Ingen endring';
$strNoOptions = 'Dette formatet har ingen valg';
$strNoPassword = 'Intet passord';
$strNoPermission = 'Webserveren har ikke tillatelse til å lagre fila %s.';
$strNoPhp = 'uten PHP kode';
$strNoPrivileges = 'Ingen privilegier';
$strNoQuery = 'Ingen SQL spørring!';
$strNoRights = 'Du har ikke nok rettigheter til å være her nå!';
$strNoSpace = 'Ikke nok plass til å lagre fila %s.';
$strNoTablesFound = 'Ingen tabeller i databasen.';
$strNoUsersFound = 'Ingen bruker(e) funnet.';
$strNoUsersSelected = 'Ingen brukere valgt.';
$strNoValidateSQL = 'Ikke teste SQL';
$strNone = 'Ingen';
$strNotNumber = 'Dette er ikke ett tall!';
$strNotOK = 'ikke OK';
$strNotSet = '<b>%s</b> tabellen ble ikke funnet eller ikke konfigurert i %s';
$strNotValidNumber = ' er ikke et gyldig radnummer!';
$strNull = 'Null';
$strNumSearchResultsInTable = '%s treff i tabell <i>%s</i>';
$strNumSearchResultsTotal = '<b>Totalt:</b> <i>%s</i> treff';
$strNumTables = 'Tabeller';

$strOK = 'OK';
$strOftenQuotation = 'Ofte anførselstegn. Valgfritt innebærer at kun tekstfelter ("char" og "varchar"-felter) er omfattet av tegnet.';
$strOperations = 'Operasjoner';
$strOptimizeTable = 'Optimiser tabell';
$strOptionalControls = 'Valgfritt. Angir hvordan spesialtegn skrives eller leses.';
$strOptionally = 'Valgfritt';
$strOptions = 'Innstillinger';
$strOr = 'Eller';
$strOverhead = 'Overheng';
$strOverwriteExisting = 'Overskriv eksisterende fil(-er)';

$strPHP40203 = 'Du bruker PHP 4.2.3, som har en alvorlig feil med flerbyte-strenger (mbstring). Se PHP-feilrapport 19404. Denne versjonen av PHP er ikke anbefalt for bruk med phpMyAdmin.';
$strPHPVersion = 'PHP-Versjon';
$strPageNumber = 'Sidenummer:';
$strPartialText = 'Delvis tekst';
$strPassword = 'Passord';
$strPasswordChanged = 'Passordet til %s er endret.';
$strPasswordEmpty = 'Passordet er blankt!';
$strPasswordNotSame = 'Passordene er ikke like!';
$strPdfDbSchema = 'Skjema for "%s"-databasen - Side %s';
$strPdfInvalidPageNum = 'Undefinert PDF-sidenummer!';
$strPdfInvalidTblName = 'Tabellen "%s" eksisterer ikke!';
$strPdfNoTables = 'Ingen tabeller';
$strPerHour = 'per time';
$strPerMinute = 'per minutt';
$strPerSecond = 'per sekund';
$strPhp = 'Lag PHP kode';
$strPmaDocumentation = 'phpMyAdmin-Dokumentasjon';
$strPmaUriError = '<tt>$cfg[\'PmaAbsoluteUri\']</tt> variabelen MÅ være innstilt i din konfigurasjonsfil!';
$strPortrait = 'Portrettformat';
$strPos1 = 'Start';
$strPrevious = 'Forrige';
$strPrimary = 'Primær';
$strPrimaryKey = 'Primærnøkkel';
$strPrimaryKeyHasBeenDropped = 'Primærnøkkelen har blitt slettet';
$strPrimaryKeyName = 'Navnet til  primærnøkkelen må være... PRIMARY!';
$strPrimaryKeyWarning = '("PRIMARY" <b>må</b> være navnet til og <b>bare til</b> en primærnøkkel!)';
$strPrint = 'Skriv ut';
$strPrintView = 'Utskriftsvennlig forhåndsvisning';
$strPrivDescAllPrivileges = 'Inkluder alle privilegier unntatt GRANT.';
$strPrivDescAlter = 'Tillater endring av struktur på eksisterende tabeller.';
$strPrivDescCreateDb = 'Tillater oppretting av nye databaser og tabeller.';
$strPrivDescCreateTbl = 'Tillater oppretting av nye tabeller.';
$strPrivDescCreateTmpTable = 'Tillater oppretting av midlertidige tabeller.';
$strPrivDescDelete = 'Tillater sletting av data.';
$strPrivDescDropDb = 'Tillater sletting av databaser og tabeller.';
$strPrivDescDropTbl = 'Tillater sletting av tabeller.';
$strPrivDescExecute = 'Tillater kjøring av lagrede prosedyrer; har ingen effekt på denne versjonen av MySQL.';
$strPrivDescFile = 'Tillater import og eksport av data til og fra filer.';
$strPrivDescGrant = 'Tillater å legge til brukere og privilegier uten å oppfriske privilegietabellene.';
$strPrivDescIndex = 'Tillater oppretting og sletting av indekser.';
$strPrivDescInsert = 'Tillater å legge til og erstatte data.';
$strPrivDescLockTables = 'Tillater låsing av tabeller for den kjørende tråden.';
$strPrivDescMaxConnections = 'Begrenser antall nye tilkoblinger brukeren kan åpne per time.';
$strPrivDescMaxQuestions = 'Begrenser antall spørringer brukeren kan sende til tjeneren per time.';
$strPrivDescMaxUpdates = 'Begrenser antall kommandoer som kan endre tabeller eller databaser brukeren kan utføre per time.';
$strPrivDescProcess3 = 'Tillater avslutting av prosesser som tilhører andre brukere.';
$strPrivDescProcess4 = 'Tillater visning av komplette spørringer i prosesslisten.';
$strPrivDescReferences = 'har ingen effekt i denne versjonen av MySQL.';
$strPrivDescReload = 'Tillater oppfrisking av tjenerinnstillinger og oppfrisking av mellomlager.';
$strPrivDescReplClient = 'Gir tillatelse til brukeren til å spørre hvor replikasjonsslaver eller -tjenere er.';
$strPrivDescReplSlave = 'Trenges av replikasjonsslavene.';
$strPrivDescSelect = 'Tillater lesing av data.';
$strPrivDescShowDb = 'Gir adgang til komplett liste over databaser.';
$strPrivDescShutdown = 'Tillater avslutting av tjener.';
$strPrivDescSuper = 'Tillater tilkobling, selv om maksimum tilkoblinger er nådd. Behøves for de fleste administrative operasjoner som å sette globale variabler eller avslutting av andre brukeres tråder.';
$strPrivDescUpdate = 'Tillater endring av data.';
$strPrivDescUsage = 'Ingen privilegier.';
$strPrivileges = 'Privilegier';
$strPrivilegesReloaded = 'Oppfriskingen av privilegiene lyktes.';
$strProcesslist = 'Prosess liste';
$strProperties = 'Egenskaper';
$strPutColNames = 'Sett inn feltnavn i første rad';

$strQBE = 'Spørring ved eksempel (Query by Example)';
$strQBEDel = 'Slett';
$strQBEIns = 'Sett inn';
$strQueryFrame = 'Spørringsvindu';
$strQueryFrameDebug = 'Feilsøkingsinformasjon';
$strQueryFrameDebugBox = 'Aktive variabler for spørringsskjemaet:\nDB: %s\nTabell: %s\nServer: %s\n\nNåværende variabler for spørringsskjemaet:\nDB: %s\nTabell: %s\nServer: %s\n\nÅpningssted: %s\nRammesettsted: %s.';
$strQueryOnDb = 'SQL-spørring i database <b>%s</b>:';
$strQuerySQLHistory = 'SQL-historie';
$strQueryStatistics = '<b>Spørrings statistikk</b>: Siden oppstart, har %s spørringer blitt sendt til tjeneren.';
$strQueryTime = 'Spørring tok %01.4f sek';
$strQueryType = 'Spørringstype';

$strReType = 'Gjenta';
$strReceived = 'Mottatt';
$strRecords = 'Rader';
$strReferentialIntegrity = 'Sjekk referanseintegritet:';
$strRelationNotWorking = 'Tilleggsfunksjonene for å kunne jobbe med koblede tabeller er deaktivert. For å finne ut hvorfor, klikk %sher%s.';
$strRelationView = 'Relasjonsvisning';
$strRelationalSchema = 'Relasjonsskjema';
$strRelations = 'Relasjoner';
$strReloadFailed = 'Omstart av MySQL feilet.';
$strReloadMySQL = 'Omstart av MySQL';
$strReloadingThePrivileges = 'Oppfrisker privilegiene';
$strRememberReload = 'Husk å restarte tjeneren.';
$strRemoveSelectedUsers = 'Fjern valgte brukere';
$strRenameTable = 'Endre tabellens navn';
$strRenameTableOK = 'Tabellen %s har fått nytt navn %s';
$strRepairTable = 'Reparer tabell';
$strReplace = 'Erstatt';
$strReplaceTable = 'Erstatt tabell med filen';
$strReset = 'Tøm skjema';
$strResourceLimits = 'Ressursbegrensninger';
$strRevoke = 'Tilbakekall';
$strRevokeAndDelete = 'Tilbakekall alle aktive privilegier fra brukerne og slett dem etterpå.';
$strRevokeAndDeleteDescr = 'Inntill privilegiene er oppfrisket vil brukerne fortsatt ha USAGE privilegiet.';
$strRevokeGrant = 'Tilbakekall Grant';
$strRevokeGrantMessage = 'Du har tilbakekalt Grant-privilegiet til %s';
$strRevokeMessage = 'Du har fjernet privilegiene til %s';
$strRevokePriv = 'Tibakekall privilegier';
$strRowLength = 'Radlengde';
$strRowSize = ' Radstørelse ';
$strRows = 'Rader';
$strRowsFrom = 'rader fra';
$strRowsModeFlippedHorizontal = 'horisontal (roterte overskrifter)';
$strRowsModeHorizontal = 'vannrett';
$strRowsModeOptions = 'i %s modus og gjenta headers etter %s celler';
$strRowsModeVertical = 'loddrett';
$strRowsStatistic = 'Radstatistikk';
$strRunQuery = 'Kjør spørring';
$strRunSQLQuery = 'Kjør SQL spørring/spørringer mot databasen %s';
$strRunning = 'som kjører på %s';

$strSQL = 'SQL';
$strSQLOptions = 'SQL valg';
$strSQLParserBugMessage = 'Det er en mulighet for at du har funnet en feil i SQL-parseren. Vennligst kontroller din spørring nøye og kontroller at anførselstegn er korrekte og matsjer hverandre. En annen mulig feilårsak kan være at du overfører en fil med binærkode som ikke ligger innenfor anførselstegn. Du kan også teste din spørring i MYSQLs kommandolinjegrensesnitt. Feilmeldingen fra MySQL-tjeneren nedenfor, hvis det var en, kan også hjelpe deg med å analysere problemet. Hvis du fortsatt har problemer eller parseren feiler hvor kommandolinjegrensesnittet lyktes, vennligst reduser din SQL-spørring til den spørringen som forårsaker problemet og send en feilrapport med datastykket i CUT-seksjonen nedenfor:';
$strSQLParserUserError = 'Det ser ut til å være en feil i din SQL-spørring. En eventuell feilmelding fra MySQL-tjeneren er skrevet ut nedenfor, kan kanskje hjelpe deg med å finne feilen.';
$strSQLQuery = 'SQL-spørring';
$strSQLResult = 'SQL-resultat';
$strSQPBugInvalidIdentifer = 'Ugyldig identifikator';
$strSQPBugUnclosedQuote = 'Anførselstegnet er ikke lukket';
$strSQPBugUnknownPunctuation = 'Ukjent tegnsettingsstreng';
$strSave = 'Lagre';
$strSaveOnServer = 'Lagre på server i %s katalogen';
$strScaleFactorSmall = 'Skaleringsfaktoren er for liten til å romme alt på en side';
$strSearch = 'Søk';
$strSearchFormTitle = 'Søk i database';
$strSearchInTables = 'I tabell(ene):';
$strSearchNeedle = 'Ord eller verdi(er) å søke etter (jokertegn: "%"):';
$strSearchOption1 = 'minst ett av ordene';
$strSearchOption2 = 'alle ordene';
$strSearchOption3 = 'med den nøyaktige setningen';
$strSearchOption4 = 'som "regular expression"';
$strSearchResultsFor = 'Søkeresultat for "<i>%s</i>" %s:';
$strSearchType = 'Finn:';
$strSelect = 'Spørring';
$strSelectADb = 'Vennligst velg en database';
$strSelectAll = 'Velg alle';
$strSelectFields = 'Velg felt (minst ett):';
$strSelectNumRows = 'i spørring';
$strSelectTables = 'Velg tabeller';
$strSend = 'Last ned som fil';
$strSent = 'Sendt';
$strServer = 'Tjener %s';
$strServerChoice = 'Tjenervalg';
$strServerStatus = 'Kjøringsinformasjon';
$strServerStatusUptime = 'Denne MySQL tjeneren har kjørt i %s. Den startet opp den %s.';
$strServerTabProcesslist = 'Prosesser';
$strServerTabVariables = 'Variabler';
$strServerTrafficNotes = '<b>Tjenertraffikk</b>: Disse tabellene viser statistikk over nettverkstrafikken for denne MySQL-tjeneren siden dens oppstart.';
$strServerVars = 'Tjenervariabler og -innstillinger';
$strServerVersion = 'Tjenerversjon';
$strSessionValue = 'Økts verdi';
$strSetEnumVal = 'Hvis felttypen er "enum" eller "set", skriv inn verdien med dette formatet: \'a\',\'b\',\'c\'...<br />Hvis du skulle trenge å ha en skråstrek ("\") eller en enkel apostrof ("\'") blant disse verdiene, skriv en skråstrek foran (eks. \'\\\\xyz\' eller \'a\\\'b\').';
$strShow = 'Vis';
$strShowAll = 'Vis alle';
$strShowColor = 'Vis farger';
$strShowCols = 'Vis kolonner';
$strShowDatadictAs = 'Data Ordbok Format';
$strShowFullQueries = 'Vis hele spørringen';
$strShowGrid = 'Vis rutenett';
$strShowPHPInfo = 'Vis PHP-informasjon';
$strShowTableDimension = 'Vis tabelldimensjoner';
$strShowTables = 'Vis tabeller';
$strShowThisQuery = ' Vis denne spørring her igjen ';
$strShowingRecords = 'Viser rader ';
$strSingly = '(enkeltvis)';
$strSize = 'Størrelse';
$strSort = 'Sorter';
$strSpaceUsage = 'Plassbruk';
$strSplitWordsWithSpace = 'Ord er separert med et mellomrom (" ").';
$strStatCheckTime = 'Sist kontrollert';
$strStatCreateTime = 'Opprettet';
$strStatUpdateTime = 'Sist oppdatert';
$strStatement = 'Oversikt';
$strStatus = 'Status';
$strStrucCSV = 'CSV-data';
$strStrucData = 'Struktur og data';
$strStrucDrop = 'Legg til \'drop table\'';
$strStrucExcelCSV = 'CSV for Ms Excel data';
$strStrucOnly = 'Kun struktur';
$strStructPropose = 'Foreslå tabellstruktur';
$strStructure = 'Struktur';
$strSubmit = 'Send';
$strSuccess = 'Kommandoen/spørringen er utført';
$strSum = 'Sum';
$strSwitchToTable = 'Bytt til kopiert tabell';

$strTable = 'Tabell';
$strTableComments = 'Tabellkommentarer';
$strTableEmpty = 'Tabellnavnet er tomt!';
$strTableHasBeenDropped = 'Tabellen %s har blitt slettet';
$strTableHasBeenEmptied = 'Tabellen %s har blitt tømt';
$strTableHasBeenFlushed = 'Tabelen %s har blitt oppfrisket';
$strTableMaintenance = 'Tabellvedlikehold';
$strTableOfContents = 'Innholdsfortegnelse';
$strTableStructure = 'Tabellstruktur for tabell';
$strTableType = 'Tabelltype';
$strTables = '%s tabell(er)';
$strTblPrivileges = 'Tabell-spesifikke privilegier';
$strTextAreaLength = ' På grunn av sin lengde,<br /> så vil muligens dette feltet ikke være redigerbart ';
$strTheContent = 'Innholdet av filen er lagt inn.';
$strTheContents = 'Innholdet av filen erstatter valgt tabell for rader med lik identifikator eller unikt felt';
$strTheTerminator = 'Tegn som angir slutt på felt.';
$strThisHost = 'Denne vert';
$strThisNotDirectory = 'Dette var ikke en katalog';
$strThreadSuccessfullyKilled = 'Tråd %s ble avsluttet med suksess.';
$strTime = 'Tid';
$strTotal = 'totalt';
$strTotalUC = 'Totalt';
$strTraffic = 'Trafikk';
$strTransformation_image_jpeg__inline = 'Viser et klikkbart tommelfingerbilde; valg: bredde, høyde i piksler (bevarer originale forhold)';
$strTransformation_image_jpeg__link = 'Viser en link til dette bildet (m.a.o. direkte blob-nedlasting).';
$strTransformation_image_png__inline = 'Se image/jpeg: inline';
$strTransformation_text_plain__dateformat = 'Tar et TIME, TIMESTAMP eller DATETIME felt og formaterer det med din lokale dato-/tidsformat. Første valg er avviket (i timer) som vil bli lagt til tidsformatet (Standard: 0). Andre valget er et annet dato-/tidsformat basert på parameterene til PHPs strftime().';
$strTransformation_text_plain__external = 'BARE LINUX: Starter et eksternt program og gir den feltdataene via standard input. Returnerer standart output fra programmet. Standard er Tidy, for å skrive ut pen HTML kode. Av sikkerhetsgrunner så må du redigere fila libraries/transformations/text_plain__external.inc.php og skrive inn de verktøyene du tillater å kjøres. Den første verdien er antall programmer du ønsker å bruke og den andre verdien er parameterene for programmet. Den tredje verdien, hvis den er satt til 1 vil konvertere utskriften med htmlspecialchars() (Standard er 1). En fjerde verdi vil, viss satt til 1 sette en NOWRAP i innholdscellen slik at hele resultatet blir vist uten reformatering (Standard er 1)';
$strTransformation_text_plain__formatted = 'Bevarer original formatering av feltet. Ingen \'escaping\' blir utført.';
$strTransformation_text_plain__imagelink = 'Viser et bilde og en link, feltet inneholder filnavnet; første verdi er et prefiks slik som "http://domain.com/", andre verdien er bredden i piksler, tredje er høyden.';
$strTransformation_text_plain__link = 'Viser en link, feltet inneholder filnavnet, ; første verdi er et prefiks slik som "http://domain.com/", andre verdien er en tittel for linken.';
$strTransformation_text_plain__substr = 'Viser bare en delstreng. Første verdien er antall tegn fra starten hvor din tekst begynner (Standard: 0). Andre verdien er hvor mange tegn som skal returneres. Hvis den er tom så returneres resten av teksten. Den tredje verdien definerer hvilke tegn som vil bli lagt til resultatet når en delstreng blir returnert (Standard: ...).';
$strTransformation_text_plain__unformatted = 'Vis HTML kode som HTML enheter. Ingen HTML formatering blir vist.';
$strTruncateQueries = 'Forkort vist spørring';
$strType = 'Type';

$strUncheckAll = 'Fjern merking';
$strUnique = 'Unik';
$strUnselectAll = 'Fjern alle valgte';
$strUpdComTab = 'Les i dokumentasjonen hvordan du oppdaterer din Column_comments tabell';
$strUpdatePrivMessage = 'Du har oppdatert privilegiene til %s.';
$strUpdateProfile = 'Oppdater profil:';
$strUpdateProfileMessage = 'Profilen har blitt oppdatert.';
$strUpdateQuery = 'Oppdater spørring';
$strUsage = 'Bruk';
$strUseBackquotes = 'Bruk venstre anførselstegn med tabell og feltnavn';
$strUseHostTable = 'Vis vert tabell';
$strUseTables = 'Bruk tabeller';
$strUseTextField = 'Bruk tekstfelt';
$strUser = 'Bruker';
$strUserAlreadyExists = 'Brukeren %s finnes fra før!';
$strUserEmpty = 'Brukernavnet er tomt!';
$strUserName = 'Brukernavn';
$strUserNotFound = 'Den valgte brukeren ble ikke funnet i privilegietabellen.';
$strUserOverview = 'Brukeroversikt';
$strUsers = 'Brukere';
$strUsersDeleted = 'De valgte brukerne har blitt slettet.';
$strUsersHavingAccessToDb = 'Brukere som har adgang til &quot;%s&quot;';

$strValidateSQL = 'Test SQL';
$strValidatorError = 'SQL-kontrolleren kunne ikke startes. Vennligst sjekk at du har installert de nødvendige php-tilleggene som beskrevet i %sdokumentasjonen%s.';
$strValue = 'Verdi';
$strVar = 'Variabler';
$strViewDump = 'Vis dump (skjema) av tabell';
$strViewDumpDB = 'Vis dump (skjema) av database';

$strWebServerUploadDirectory = 'webtjener opplastingskatalog';
$strWebServerUploadDirectoryError = 'Katalogen du anga for opplasting kan ikke nåes';
$strWelcome = 'Velkommen til %s';
$strWildcard = 'jokertegn';
$strWithChecked = 'Med avkrysset:';
$strWritingCommentNotPossible = 'Skriving av kommentar er ikke mulig';
$strWritingRelationNotPossible = 'Skriving av relasjon er ikke mulig';
$strWrongUser = 'Ugyldig brukernavn/passord. Ingen tilgang.';

$strXML = 'XML';

$strYes = 'Ja';

$strZeroRemovesTheLimit = 'Merk: Ved å sette disse til 0 (null) fjerner begrensningen.';
$strZip = 'Komprimert (zip)';
// To translate

$strLoadMethod = 'LOAD method';  //to translate
$strLoadExplanation = 'The best method is checked by default, but you can change if it fails.';  //to translate
$strExecuteBookmarked = 'Execute bookmarked query';  //to translate
$strExcelOptions = 'Excel options';  //to translate
$strReplaceNULLBy = 'Replace NULL by';  //to translate
?>

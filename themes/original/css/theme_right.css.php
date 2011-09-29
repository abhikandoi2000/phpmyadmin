<?php
/* vim: set expandtab sw=4 ts=4 sts=4: */
/**
 * main css file from theme Original
 *
 * @package phpMyAdmin-theme
 * @subpackage Original
 */

// unplanned execution path
if (!defined('PMA_MINIMUM_COMMON') && !defined('TESTSUITE')) {
    exit();
}
?>
/******************************************************************************/
/* general tags */
html {
    font-size: <?php echo (null !== $GLOBALS['PMA_Config']->get('fontsize') ? $GLOBALS['PMA_Config']->get('fontsize') : (
        isset($_COOKIE['pma_fontsize']) ? $_COOKIE['pma_fontsize'] : '82%'));?>;
}

input, select, textarea {
    font-size: 1em;
}

body {
<?php if (! empty($GLOBALS['cfg']['FontFamily'])) { ?>
    font-family:        <?php echo $GLOBALS['cfg']['FontFamily']; ?>;
<?php } ?>
    padding:            0;
    margin:             0.5em;
    color:              <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    background:         <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}

<?php if (! empty($GLOBALS['cfg']['FontFamilyFixed'])) { ?>
textarea, tt, pre, code {
    font-family:        <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
}
<?php } ?>
h1 {
    font-size:          140%;
    font-weight:        bold;
}

h2 {
    font-size:          120%;
    font-weight:        bold;
}

h3 {
    font-weight:        bold;
}

a, a:link,
a:visited,
a:active {
    text-decoration:    none;
    color:              #0000FF;
    cursor:             pointer;
}

a:hover {
    text-decoration:    underline;
    color:              #FF0000;
}

dfn {
    font-style:         normal;
}

dfn:hover {
    font-style:         normal;
    cursor:             help;
}

th {
    font-weight:        bold;
    color:              <?php echo $GLOBALS['cfg']['ThColor']; ?>;
    background:         <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

a img {
    border:             0;
}

hr {
    color:              <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    background-color:   <?php echo $GLOBALS['cfg']['MainColor']; ?>;
    border:             0;
    height:             1px;
}

form {
    padding:            0;
    margin:             0;
    display:            inline;
}

textarea {
    overflow:           visible;
    height:             <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
}

textarea.char {
    height:             <?php echo ceil($GLOBALS['cfg']['CharTextareaRows'] * 1.2); ?>em;
}

fieldset {
    margin-top:         1em;
    border:             <?php echo $GLOBALS['cfg']['MainColor']; ?> solid 1px;
    padding:            0.5em;
    background:         <?php echo $GLOBALS['cfg']['BgOne']; ?>;
}

fieldset fieldset {
    margin:             0.8em;
}

fieldset legend {
    font-weight:        bold;
    color:              #444444;
    background-color:   <?php echo 'OPERA' != PMA_USR_BROWSER_AGENT ? 'transparent' : $GLOBALS['cfg']['BgOne']; ?>;
}

/* buttons in some browsers (eg. Konqueror) are block elements,
   this breaks design */
button {
    display:            inline;
}

table caption,
table th,
table td {
    padding:            0.1em 0.5em 0.1em 0.5em;
    margin:             0.1em;
    vertical-align:     top;
}

img,
input,
select,
button {
    vertical-align:     middle;
}

/* Icon sprites */

.icon, .footnotemarker {
    vertical-align: -3px;
    margin-right:   0.3em;
    margin-left:    0.3em;
    width:16px;
    height:16px;
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>iconsprites.png) no-repeat top left;
}

.ic_b_bookmark { background-position: 0 0; }
.ic_b_browse { background-position: 0 -18px; }
.ic_b_calendar { background-position: 0 -36px; }
.ic_b_chart { background-position: 0 -54px; }
.ic_b_close { background-position: 0 -72px; }
.ic_b_comment { background-position: 0 -90px; }
.ic_b_dbstatistics { background-position: 0 -108px; }
.ic_b_deltbl { background-position: 0 -126px; }
.ic_b_docs { background-position: 0 -144px; }
.ic_b_drop { background-position: 0 -162px; }
.ic_b_edit { background-position: 0 -180px; }
.ic_b_empty { background-position: 0 -198px; }
.ic_b_engine { background-position: 0 -216px; }
.ic_b_event_add { background-position: 0 -234px; }
.ic_b_events { background-position: 0 -252px; }
.ic_b_export { background-position: 0 -270px; }
.ic_b_ftext { background-position: 0 -288px; }
.ic_b_globe { background-position: 0 -306px; }
.ic_b_help { background-position: 0 -324px; width: 11px; height: 11px; }
.ic_b_home { background-position: 0 -337px; }
.ic_b_import { background-position: 0 -355px; }
.ic_b_index { background-position: 0 -373px; }
.ic_b_info { background-position: 0 -391px; width: 11px; height: 11px; }
.ic_b_inline_edit { background-position: 0 -404px; }
.ic_b_insrow { background-position: 0 -422px; }
.ic_b_minus { background-position: 0 -440px; width: 9px; height: 9px; }
.ic_b_more { background-position: 0 -451px; }
.ic_b_newdb { background-position: 0 -469px; }
.ic_b_newtbl { background-position: 0 -487px; }
.ic_b_nextpage, .ic_play { background-position: 0 -505px; }
.ic_b_plus { background-position: 0 -523px; width: 9px; height: 9px; }
.ic_b_primary { background-position: 0 -534px; }
.ic_b_print { background-position: 0 -552px; }
.ic_b_props { background-position: 0 -570px; }
.ic_b_relations { background-position: 0 -588px; }
.ic_b_routine_add { background-position: 0 -606px; }
.ic_b_routines { background-position: 0 -624px; }
.ic_b_save { background-position: 0 -642px; }
.ic_b_sbrowse { background-position: 0 -660px; width: 10px; height: 10px; }
.ic_b_search { background-position: 0 -672px; }
.ic_b_selboard { background-position: 0 -690px; }
.ic_b_select { background-position: 0 -708px; }
.ic_b_snewtbl { background-position: 0 -726px; width: 10px; height: 10px; }
.ic_b_spatial { background-position: 0 -738px; }
.ic_b_sql { background-position: 0 -756px; }
.ic_b_sqlhelp { background-position: 0 -774px; }
.ic_b_tblanalyse { background-position: 0 -792px; }
.ic_b_tblexport { background-position: 0 -810px; }
.ic_b_tblimport { background-position: 0 -828px; }
.ic_b_tblops { background-position: 0 -846px; }
.ic_b_tbloptimize { background-position: 0 -864px; }
.ic_b_tipp { background-position: 0 -882px; }
.ic_b_trigger_add { background-position: 0 -900px; }
.ic_b_triggers { background-position: 0 -918px; }
.ic_b_unique { background-position: 0 -936px; }
.ic_b_usradd { background-position: 0 -954px; }
.ic_b_usrcheck { background-position: 0 -972px; }
.ic_b_usrdrop { background-position: 0 -990px; }
.ic_b_usredit { background-position: 0 -1008px; }
.ic_b_usrlist { background-position: 0 -1026px; }
.ic_b_view { background-position: 0 -1044px; }
.ic_b_views { background-position: 0 -1062px; }
.ic_bd_browse { background-position: 0 -1080px; }
.ic_bd_deltbl { background-position: 0 -1098px; }
.ic_bd_drop { background-position: 0 -1116px; }
.ic_bd_edit { background-position: 0 -1134px; }
.ic_bd_empty { background-position: 0 -1152px; }
.ic_bd_export { background-position: 0 -1170px; }
.ic_bd_ftext { background-position: 0 -1188px; }
.ic_bd_index { background-position: 0 -1206px; }
.ic_bd_insrow { background-position: 0 -1224px; }
.ic_bd_nextpage { background-position: 0 -1242px; width: 8px; height: 13px; }
.ic_bd_primary { background-position: 0 -1257px; }
.ic_bd_sbrowse { background-position: 0 -1275px; width: 10px; height: 10px; }
.ic_bd_select { background-position: 0 -1287px; }
.ic_bd_spatial { background-position: 0 -1305px; }
.ic_bd_unique { background-position: 0 -1323px; }
.ic_col_drop { background-position: 0 -1341px; }
.ic_eye { background-position: 0 -1359px; }
.ic_eye_grey { background-position: 0 -1377px; }
.ic_item_ltr { background-position: 0 -1395px; width: 5px; height: 9px; }
.ic_item_rtl { background-position: 0 -1406px; width: 5px; height: 9px; }
.ic_more { background-position: 0 -1417px; width: 13px; height: 8px; }
.ic_pause { background-position: 0 -1427px; }
.ic_s_asc { background-position: 0 -1445px; width: 11px; height: 9px; }
.ic_s_asci { background-position: 0 -1456px; }
.ic_s_cancel { background-position: 0 -1474px; }
.ic_s_cog { background-position: 0 -1492px; }
.ic_s_db { background-position: 0 -1510px; }
.ic_s_desc { background-position: 0 -1528px; width: 11px; height: 9px; }
.ic_s_error { background-position: 0 -1539px; }
.ic_s_error2 { background-position: 0 -1557px; width: 11px; height: 11px; }
.ic_s_host { background-position: 0 -1570px; }
.ic_s_lang { background-position: 0 -1588px; }
.ic_s_loggoff { background-position: 0 -1606px; }
.ic_s_notice { background-position: 0 -1624px; }
.ic_s_passwd { background-position: 0 -1642px; }
.ic_s_really { background-position: 0 -1660px; width: 11px; height: 11px; }
.ic_s_reload { background-position: 0 -1673px; }
.ic_s_replication { background-position: 0 -1691px; }
.ic_s_rights { background-position: 0 -1709px; }
.ic_s_sortable { background-position: 0 -1727px; }
.ic_s_status { background-position: 0 -1745px; }
.ic_s_success { background-position: 0 -1763px; }
.ic_s_sync { background-position: 0 -1781px; }
.ic_s_tbl { background-position: 0 -1799px; }
.ic_s_theme { background-position: 0 -1817px; }
.ic_s_vars { background-position: 0 -1835px; }
.ic_s_views { background-position: 0 -1853px; width: 10px; height: 10px; }
.ic_window-new { background-position: 0 -1865px; }

/* Same as s_notice */
.ic_s_attention { background-position: 0 -1624px; }

/* Same as ic_b_help, but applied to place where width=11, height=11 attributes were used */
.ic_b_help_s { background-position: -324px 0; width: 11px; height: 11px; }

/* Same as ic_s_sortable */
img.sortableIcon { background-position: -1727px 0; }

/* Same as s_asc */
th.headerSortUp img.sortableIcon { background-position: 0 -1528px; width: 11px; height: 9px; }

/* Same as s_desc */
th.headerSortDown img.sortableIcon { background-position: 0 -1445px; width: 11px; height: 9px; }

/* Fix position */
.ic_more { vertical-align: middle; }

/******************************************************************************/
/* classes */
.clearfloat {
    clear: both;
}

.floatleft {
    float: <?php echo $left; ?>;
    margin-<?php echo $right; ?>: 1em;
}

.paddingtop {
    padding-top: 1em;
}

div.tools {
    border: 1px solid #000000;
    padding: 0.2em;
}

div.tools,
fieldset.tblFooters {
    margin-top:         0;
    margin-bottom:      0.5em;
    /* avoid a thick line since this should be used under another fieldset */
    border-top:         0;
    text-align:         <?php echo $right; ?>;
    float:              none;
    clear:              both;
}

div.null_div {
    height: 20px;
    text-align: center;
    font-style:normal;
    min-width:50px;
}

fieldset .formelement {
    float:              <?php echo $left; ?>;
    margin-<?php echo $right; ?>:       0.5em;
    /* IE */
    white-space:        nowrap;
}

/* revert for Gecko */
fieldset div[class=formelement] {
    white-space:        normal;
}

button.mult_submit {
    border:             none;
    background-color:   transparent;
}

/* odd items 1,3,5,7,... */
table tr.odd th,
.odd {
    background: <?php echo $GLOBALS['cfg']['BgOne']; ?>;
}

/* even items 2,4,6,8,... */
table tr.even th,
.even {
    background: <?php echo $GLOBALS['cfg']['BgTwo']; ?>;
}

/* odd table rows 1,3,5,7,... */
table tr.odd th,
table tr.odd,
table tr.even th,
table tr.even {
    text-align:         <?php echo $left; ?>;
}

<?php if ($GLOBALS['cfg']['BrowseMarkerEnable']) { ?>
/* marked table rows */
td.marked,
table tr.marked td,
table tr.marked th,
table tr.marked {
    background:   <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
    color:   <?php echo $GLOBALS['cfg']['BrowseMarkerColor']; ?>;
}
<?php } ?>

<?php if ($GLOBALS['cfg']['BrowsePointerEnable']) { ?>
/* hovered items */
.odd:hover,
.even:hover,
.hover,
.structure_actions_dropdown {
    background: <?php echo $GLOBALS['cfg']['BrowsePointerBackground']; ?>;
    color: <?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>;
}

/* hovered table rows */
table tr.odd:hover th,
table tr.even:hover th,
table tr.hover th {
    background:   <?php echo $GLOBALS['cfg']['BrowsePointerBackground']; ?>;
    color:   <?php echo $GLOBALS['cfg']['BrowsePointerColor']; ?>;
}
<?php } ?>

/**
 * marks table rows/cells if the db field is in a where condition
 */
td.condition,
th.condition {
    border: 1px solid <?php echo $GLOBALS['cfg']['BrowseMarkerBackground']; ?>;
}

/**
 * cells with the value NULL
 */
td.null {
    font-style: italic;
    text-align: <?php echo $right; ?>;
}

table .valueHeader {
    text-align:         <?php echo $right; ?>;
    white-space:        normal;
}
table .value {
    text-align:         <?php echo $right; ?>;
    white-space:        normal;
}
/* IE doesnt handles 'pre' right */
table [class=value] {
    white-space:        normal;
}


<?php if (! empty($GLOBALS['cfg']['FontFamilyFixed'])) { ?>
.value {
    font-family:        <?php echo $GLOBALS['cfg']['FontFamilyFixed']; ?>;
}
<?php } ?>
.attention {
    color:              red;
    font-weight:        bold;
}
.allfine {
    color:              green;
}


img.lightbulb {
    cursor:             pointer;
}

.pdflayout {
    overflow:           hidden;
    clip:               inherit;
    background-color:   #FFFFFF;
    display:            none;
    border:             1px solid #000000;
    position:           relative;
}

.pdflayout_table {
    background:         #D3DCE3;
    color:              #000000;
    overflow:           hidden;
    clip:               inherit;
    z-index:            2;
    display:            inline;
    visibility:         inherit;
    cursor:             move;
    position:           absolute;
    font-size:          80%;
    border:             1px dashed #000000;
}

/* MySQL Parser */
.syntax {
    font-size:          80%;
}

.syntax a {
    text-decoration: none;
    border-bottom:1px dotted black;
}

.syntax_comment {
    padding-left:       4pt;
    padding-right:      4pt;
}

.syntax_digit {
}

.syntax_digit_hex {
}

.syntax_digit_integer {
}

.syntax_digit_float {
}

.syntax_punct {
}

.syntax_alpha {
}

.syntax_alpha_columnType {
    text-transform:     uppercase;
}

.syntax_alpha_columnAttrib {
    text-transform:     uppercase;
}

.syntax_alpha_reservedWord {
    text-transform:     uppercase;
    font-weight:        bold;
}

.syntax_alpha_functionName {
    text-transform:     uppercase;
}

.syntax_alpha_identifier {
}

.syntax_alpha_charset {
}

.syntax_alpha_variable {
}

.syntax_quote {
    white-space:        pre;
}

.syntax_quote_backtick {
}

/* leave some space between icons and text */
.icon, img.footnotemarker {
    vertical-align:     middle;
    margin-right:       0.3em;
    margin-left:        0.3em;
}

img.footnotemarker {
    display: none;
}

/* no extra space in table cells */
td .icon {
    margin: 0;
}

.selectallarrow {
    margin-<?php echo $right; ?>: 0.3em;
    margin-<?php echo $left; ?>: 0.6em;
}

/* message boxes: error, confirmation */
.success h1,
.notice h1,
div.error h1 {
    border-bottom:      2px solid;
    font-weight:        bold;
    text-align:         <?php echo $left; ?>;
    margin:             0 0 0.2em 0;
}

div.success,
div.notice,
div.error,
div.footnotes {
    margin:             0.3em 0 0 0;
    border:             2px solid;
    <?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
    background-repeat:  no-repeat;
        <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
    background-position: 10px 50%;
    padding:            0.1em 0.1em 0.1em 36px;
        <?php } else { ?>
    background-position: 99% 50%;
    padding:            10px 5% 10px 10px;
        <?php } ?>
    <?php } else { ?>
    padding:            0.3em;
    <?php } ?>
}

.success {
    color:              #000000;
    background-color:   #f0fff0;
}
h1.success,
div.success {
    border-color:       #00FF00;
    <?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
    background-image:   url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_success.png);
    background-repeat:  no-repeat;
        <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
    background-position: 5px 50%;
    padding:            0.2em 0.2em 0.2em 25px;
        <?php } else { ?>
    background-position: 97% 50%;
    padding:            0.2em 25px 0.2em 0.2em;
        <?php } ?>
    <?php } ?>
}
.success h1 {
    border-color:       #00FF00;
}

.notice, .footnotes {
    color:              #000000;
    background-color:   #FFFFDD;
}
h1.notice,
div.notice,
div.footnotes {
    border-color:       #FFD700;
    <?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
    background-image:   url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_notice.png);
    background-repeat:  no-repeat;
        <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
    background-position: 5px 50%;
    padding:            0.2em 0.2em 0.2em 25px;
        <?php } else { ?>
    background-position: 97% 50%;
    padding:            0.2em 25px 0.2em 0.2em;
        <?php } ?>
    <?php } ?>
}
.notice h1 {
    border-color:       #FFD700;
}

.error {
    background-color:   #FFFFCC;
    color:              #ff0000;
}

h1.error,
div.error {
    border-color:       #ff0000;
    <?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
    background-image:   url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_error.png);
    background-repeat:  no-repeat;
        <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
    background-position: 5px 50%;
    padding:            0.2em 0.2em 0.2em 25px;
        <?php } else { ?>
    background-position: 97% 50%;
    padding:            0.2em 25px 0.2em 0.2em;
        <?php } ?>
    <?php } ?>
}
div.error h1 {
    border-color:       #ff0000;
}

.confirmation {
    background-color:   #FFFFCC;
}
fieldset.confirmation {
    border:             0.1em solid #FF0000;
}
fieldset.confirmation legend {
    border-left:        0.1em solid #FF0000;
    border-right:       0.1em solid #FF0000;
    font-weight:        bold;
    <?php if ($GLOBALS['cfg']['ErrorIconic']) { ?>
    background-image:   url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_really.png);
    background-repeat:  no-repeat;
        <?php if ($GLOBALS['text_dir'] === 'ltr') { ?>
    background-position: 5px 50%;
    padding:            0.2em 0.2em 0.2em 25px;
        <?php } else { ?>
    background-position: 97% 50%;
    padding:            0.2em 25px 0.2em 0.2em;
        <?php } ?>
    <?php } ?>
}
/* end messageboxes */


.tblcomment {
    font-size:          70%;
    font-weight:        normal;
    color:              #000099;
}

.tblHeaders {
    font-weight:        bold;
    color:              <?php echo $GLOBALS['cfg']['ThColor']; ?>;
    background:         <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

div.tools,
.tblFooters {
    font-weight:        normal;
    color:              <?php echo $GLOBALS['cfg']['ThColor']; ?>;
    background:         <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
}

.tblHeaders a:link,
.tblHeaders a:active,
.tblHeaders a:visited,
div.tools a:link,
div.tools a:visited,
div.tools a:active,
.tblFooters a:link,
.tblFooters a:active,
.tblFooters a:visited {
    color:              #0000FF;
}

.tblHeaders a:hover,
div.tools a:hover,
.tblFooters a:hover {
    color:              #FF0000;
}

/* forbidden, no privilegs */
.noPrivileges {
    color:              #FF0000;
    font-weight:        bold;
}

/* disabled text */
.disabled,
.disabled a:link,
.disabled a:active,
.disabled a:visited {
    color:              #666666;
}

.disabled a:hover {
    color:              #666666;
    text-decoration:    none;
}

tr.disabled td,
td.disabled {
    background-color:   #cccccc;
}

.nowrap {
    white-space:        nowrap;
}

/**
 * login form
 */
body.loginform h1,
body.loginform a.logo {
    display: block;
    text-align: center;
}

body.loginform {
    text-align: center;
}

body.loginform div.container {
    text-align: <?php echo $left; ?>;
    width: 30em;
    margin: 0 auto;
}

form.login label {
    float: <?php echo $left; ?>;
    width: 10em;
    font-weight: bolder;
}

.commented_column {
    border-bottom: 1px dashed black;
}

.column_attribute {
    font-size: 70%;
}

/******************************************************************************/
/* specific elements */

/* topmenu */
ul#topmenu, ul#topmenu2, ul.tabs {
    font-weight:        bold;
    list-style-type:    none;
    margin:             0;
    padding:            0;
}

ul#topmenu2 {
    margin: 0.25em 0.5em 0;
    height: 2em;
    clear: both;
}

ul#topmenu li, ul#topmenu2 li {
    float:              <?php echo $left; ?>;
    margin:             0;
    padding:            0;
    vertical-align:     middle;
}

#topmenu img, #topmenu2 img {
    vertical-align:     middle;
    margin-<?php echo $right; ?>:       0.1em;
}

/* default tab styles */
ul#topmenu a, ul#topmenu span {
    display:            block;
    margin:             2px 2px 0;
    padding:            2px 2px 0;
    white-space:        nowrap;
}

ul#topmenu ul a {
    margin:             0;
    padding-bottom:     2px;
}

ul#topmenu .submenu {
    position:           relative;
    display:            none;
}
ul#topmenu .shown {
    display:            block;
}

ul#topmenu ul {
    margin:             0;
    padding:            0;
    position:           absolute;
    right:              0;
    list-style-type:    none;
    display:            none;
    border:             1px #666 solid;
    z-index:            2;
}

ul#topmenu li:hover ul, ul#topmenu .submenuhover ul {
    display:            block;
}

ul#topmenu ul li {
    width:              100%;
}

ul#topmenu2 a {
    display:            block;
    margin:             0.1em;
    padding:            0.2em;
    white-space:        nowrap;
}

/* disabled tabs */
ul#topmenu span.tab {
    color:              #666666;
}

fieldset.caution a {
    color:              #FF0000;
}
fieldset.caution a:hover {
    color:              #ffffff;
    background-color:   #FF0000;
}

<?php if ($GLOBALS['cfg']['LightTabs']) { ?>
/* active tab */
ul#topmenu a.tabactive, ul#topmenu2 a.tabactive {
    color:              black;
}

ul#topmenu ul {
    background:         <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}
<?php } else { ?>
#topmenu {
    margin-top:         0.5em;
    padding:            0.1em 0.3em 0.1em 0.3em;
}

ul#topmenu ul {
    -moz-box-shadow:    2px 2px 3px #666;
    -webkit-box-shadow: 2px 2px 3px #666;
    box-shadow:         2px 2px 3px #666;
}

ul#topmenu > li {
    border-bottom:      1pt solid black;
}

/* default tab styles */
ul#topmenu a, ul#topmenu span {
    background-color:   <?php echo $GLOBALS['cfg']['BgOne']; ?>;
    border:             0 solid <?php echo $GLOBALS['cfg']['BgTwo']; ?>;
    border-width:       1pt 1pt 0 1pt;
    -moz-border-radius: 0.4em 0.4em 0 0;
    border-radius:      0.4em 0.4em 0 0;
}

ul#topmenu ul a {
    border-width:       1pt 0 0 0;
    -moz-border-radius: 0;
    border-radius:      0;
}

ul#topmenu ul li:first-child a {
    border-width:       0;
}

/* enabled hover/active tabs */
ul#topmenu > li > a:hover,
ul#topmenu > li > .tabactive {
    margin:             0;
    padding:            2px 4px;
    text-decoration:    none;
}

ul#topmenu ul a:hover,
ul#topmenu ul .tabactive {
    text-decoration:    none;
}

ul#topmenu a.tab:hover,
ul#topmenu .tabactive {
    background-color:   <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}

ul#topmenu2 a.tab:hover,
ul#topmenu2 a.tabactive {
    background-color:   <?php echo $GLOBALS['cfg']['BgOne']; ?>;
    -moz-border-radius: 0.3em;
    border-radius:      0.3em;
    text-decoration:    none;
}

/* to be able to cancel the bottom border, use <li class="active"> */
ul#topmenu > li.active {
     border-bottom:      1pt solid <?php echo $GLOBALS['cfg']['MainBackground']; ?>;
}

/* disabled tabs */
ul#topmenu span.tab,
a.error {
    cursor:             url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>error.ico), default;
}
<?php } ?>
/* end topmenu */


/* Calendar */
table.calendar {
    width:              100%;
}
table.calendar td {
    text-align:         center;
}
table.calendar td a {
    display:            block;
}

table.calendar td a:hover {
    background-color:   #CCFFCC;
}

table.calendar th {
    background-color:   #D3DCE3;
}

table.calendar td.selected {
    background-color:   #FFCC99;
}

img.calendar {
    border:             none;
}
form.clock {
    text-align:         center;
}
/* end Calendar */


/* table stats */
div#tablestatistics table {
    float: <?php echo $left; ?>;
    margin-top: 0.5em;
    margin-bottom: 0.5em;
    margin-<?php echo $right; ?>: 0.5em;
}
/* END table stats */


/* server privileges */
#tableuserrights td,
#tablespecificuserrights td,
#tabledatabases td {
    vertical-align: middle;
}
/* END server privileges */



/* Heading */
#serverinfo {
    font-weight:        bold;
    margin-bottom:      0.5em;
}

#serverinfo .item {
    white-space:        nowrap;
}

#span_table_comment {
    font-weight:        normal;
    font-style:         italic;
    white-space:        nowrap;
}

#serverinfo img {
    margin:             0 0.1em 0 0.2em;
}


#textSQLDUMP {
    width:              95%;
    height:             95%;
    font-family:        "Courier New", Courier, mono;
    font-size:          110%;
}

#TooltipContainer {
    position:           absolute;
    z-index:            99;
    width:              20em;
    height:             auto;
    overflow:           visible;
    visibility:         hidden;
    background-color:   #ffffcc;
    color:              #006600;
    border:             0.1em solid #000000;
    padding:            0.5em;
}

/* user privileges */
#fieldset_add_user_login div.item {
    border-bottom:      1px solid silver;
    padding-bottom:     0.3em;
    margin-bottom:      0.3em;
}

#fieldset_add_user_login label {
    float:              <?php echo $left; ?>;
    display:            block;
    width:              10em;
    max-width:          100%;
    text-align:         <?php echo $right; ?>;
    padding-<?php echo $right; ?>:      0.5em;
}

#fieldset_add_user_login span.options #select_pred_username,
#fieldset_add_user_login span.options #select_pred_hostname,
#fieldset_add_user_login span.options #select_pred_password {
    width:              100%;
    max-width:          100%;
}

#fieldset_add_user_login span.options {
    float: <?php echo $left; ?>;
    display: block;
    width: 12em;
    max-width: 100%;
    padding-<?php echo $right; ?>: 0.5em;
}

#fieldset_add_user_login input {
    width: 12em;
    clear: <?php echo $right; ?>;
    max-width: 100%;
}

#fieldset_add_user_login span.options input {
    width: auto;
}

#fieldset_user_priv div.item {
    float: <?php echo $left; ?>;
    width: 9em;
    max-width: 100%;
}

#fieldset_user_priv div.item div.item {
    float: none;
}

#fieldset_user_priv div.item label {
    white-space: nowrap;
}

#fieldset_user_priv div.item select {
    width: 100%;
}

#fieldset_user_global_rights fieldset {
    float: <?php echo $left; ?>;
}
/* END user privileges */


/* serverstatus */

.linkElem:hover {
    text-decoration:    underline;
    color:              #235a81;
    cursor: pointer;
}

h3#serverstatusqueries span {
    font-size:60%;
    display:inline;
}

img.sortableIcon {
    float:right;
    background-repeat:no-repeat;
    margin:0;
}

.buttonlinks {
    float: <?php echo $right; ?>;
    white-space: nowrap;
}

.jsfeature {
    display: none; /* Made visible with js */
}

/* Also used for the variables page */
fieldset#tableFilter {
    margin-bottom:1em;
}

div#serverStatusTabs {
    margin-top:1em;
}

caption a.top {
    float: <?php echo $right; ?>;
}

div#serverstatusquerieschart {
    float:<?php echo $left; ?>;
    width:500px;
    height:350px;
    padding-<?php echo $left; ?>: 30px;
}

div#serverstatus table#serverstatusqueriesdetails {
    float: <?php echo $left; ?>;
}

table#serverstatustraffic {
    float: <?php echo $left; ?>;
}
table#serverstatusconnections {
    float: <?php echo $left; ?>;
    margin-<?php echo $left; ?>: 30px;
}

table#serverstatusvariables {
    width: 100%;
    margin-bottom: 1em;
}
table#serverstatusvariables .name {
    width: 18em;
    white-space:nowrap;
}
table#serverstatusvariables .value {
    width: 6em;
}
table#serverstatusconnections {
    float: <?php echo $left; ?>;
    margin-<?php echo $left; ?>: 30px;
}

div#serverstatus table tbody td.descr a,
div#serverstatus table .tblFooters a {
    white-space: nowrap;
}

div.liveChart {
    clear:both;
    min-width:500px;
    height:400px;
    padding-bottom:80px;
}

#addChartDialog input[type="text"] {
    margin: 0;
    padding:3px;
}

div#chartVariableSettings {
    border:1px solid #ddd;
    background-color:#E6E6E6;
    margin-left:10px;
}

table#chartGrid div.monitorChart {
    background: #EBEBEB;
}

div#serverstatus div.tabLinks {
    float:<?php echo $left; ?>;
    padding-bottom: 10px;
}

.popupContent {
    display: none;
    position: absolute;
    border: 1px solid #CCC;
    margin:0;
    padding:3px;
    -moz-box-shadow:    1px 1px 6px #ddd;
    -webkit-box-shadow: 2px 2px 3px #666;
    box-shadow:         2px 2px 3px #666;
    background-color:white;
    z-index: 2;
}

div#logTable {
    padding-top: 10px;
    clear: both;
}

div#logTable table {
    width:100%;
}

.smallIndent {
    padding-left: 7px;
}

/* end serverstatus */

/* server variables */

a.editLink {
    float: <?php echo $left; ?>;
    font-family:sans-serif;
}

table.serverVariableEditTable {
    border:0;
    margin:0;
    padding:0;
    width:100%;
}
table.serverVariableEditTable td {
    border:0;
    margin:0;
    padding:0;
}
table.serverVariableEditTable td:first-child {
    white-space:nowrap;
    vertical-align:middle;
}

table.serverVariableEditTable input {
    width:95%;
}

table#serverVariables td {
    height:18px;
}

/* end server variables */

/* querywindow */
body#bodyquerywindow {
    margin: 0;
    padding: 0;
    background-image: none;
    background-color: #F5F5F5;
}

div#querywindowcontainer {
    margin: 0;
    padding: 0;
    width: 100%;
}

div#querywindowcontainer fieldset {
    margin-top: 0;
}
/* END querywindow */

/* profiling */

div#profilingchart {
    width:550px;
    height:370px;
    float:left;
}

/* END profiling */

/* querybox */

div#sqlquerycontainer {
    float: <?php echo $left; ?>;
    width: 69%;
    /* height: 15em; */
}

div#tablefieldscontainer {
    float: <?php echo $right; ?>;
    width: 29%;
    /* height: 15em; */
}

div#tablefieldscontainer select {
    width: 100%;
    /* height: 12em; */
}

textarea#sqlquery {
    width: 100%;
    /* height: 100%; */
}
textarea#sql_query_edit{
    height:7em;
    width: 95%;
    display:block;
}
div#queryboxcontainer div#bookmarkoptions {
    margin-top: 0.5em;
}
/* end querybox */

/* main page */
#maincontainer {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>logo_right.png);
    background-position: <?php echo $right; ?> bottom;
    background-repeat: no-repeat;
}

#mysqlmaininformation,
#pmamaininformation {
    float: <?php echo $left; ?>;
    width: 49%;
}

#maincontainer ul {
    list-style-type: disc;
    vertical-align: middle;
}

#maincontainer li {
    margin:  0.2em 0em;
}
/* END main page */


<?php if ($GLOBALS['cfg']['MainPageIconic']) { ?>
/* iconic view for ul items */
li#li_create_database {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_newdb.png);
}

li#li_select_lang {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_lang.png);
}

li#li_select_mysql_collation {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_asci.png);
}

li#li_select_theme{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_theme.png);
}

li#li_user_info{
    /* list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_rights.png); */
}

li#li_mysql_status{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_status.png);
}

li#li_mysql_variables{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_vars.png);
}

li#li_mysql_processes{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_process.png);
}

li#li_mysql_collations{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_asci.png);
}

li#li_mysql_engines{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_engine.png);
}

li#li_mysql_binlogs {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_tbl.png);
}

li#li_mysql_databases {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_db.png);
}

li#li_export {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_export.png);
}

li#li_import {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_import.png);
}

li#li_change_password {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_passwd.png);
}

li#li_log_out {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_loggoff.png);
}

li#li_mysql_privilegs{
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_rights.png);
}

li#li_switch_dbstats {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_dbstatistics.png);
}

li#li_flush_privileges {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_reload.png);
}

li#li_user_preferences {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>b_tblops.png);
}
/* END iconic view for ul items */
<?php } /* end if $GLOBALS['cfg']['MainPageIconic'] */ ?>


#body_browse_foreigners {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    margin:             0.5em 0.5em 0 0.5em;
}

#bodyquerywindow {
    background:         <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
}

#bodythemes {
    width: 500px;
    margin: auto;
    text-align: center;
}

#bodythemes img {
    border: 0.1em solid black;
}

#bodythemes a:hover img {
    border: 0.1em solid red;
}

#fieldset_select_fields {
    float: <?php echo $left; ?>;
}

#selflink {
    clear: both;
    display: block;
    margin-top: 1em;
    margin-bottom: 1em;
    width: 100%;
    border-top: 0.1em solid silver;
    text-align: <?php echo $right; ?>;
}

#table_innodb_bufferpool_usage,
#table_innodb_bufferpool_activity {
    float: <?php echo $left; ?>;
}

#div_mysql_charset_collations table {
    float: <?php echo $left; ?>;
}

.operations_half_width {
    width: 48%;
    float: <?php echo $left; ?>;
}

.operations_full_width {
    width: 100%;
    clear: both;
}

#qbe_div_table_list {
    float: <?php echo $left; ?>;
}

#qbe_div_sql_query {
    float: <?php echo $left; ?>;
}

label.desc {
    width: 30em;
    float: <?php echo $left; ?>;
}

label.desc sup {
    position: absolute;
}

code.sql, div.sqlvalidate {
    display:            block;
    padding:            0.3em;
    margin-top:         0;
    margin-bottom:      0;
    border:             <?php echo $GLOBALS['cfg']['MainColor']; ?> solid 1px;
    border-top:         0;
    border-bottom:      0;
    max-height:         10em;
    overflow:           auto;
    background:         <?php echo $GLOBALS['cfg']['BgOne']; ?>;
}

#main_pane_left {
    width:              60%;
    float:              <?php echo $left; ?>;
    padding-top:        1em;
}

#main_pane_right {
    margin-<?php echo $left; ?>: 60%;
    padding-top: 1em;
    padding-<?php echo $left; ?>: 1em;
}

.group {
    border-<?php echo $left; ?>: 0.3em solid <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
    margin-bottom:      1em;
}

.group h2 {
    background:         <?php echo $GLOBALS['cfg']['ThBackground']; ?>;
    padding:            0.1em 0.3em;
    margin-top:         0;
}

.group-cnt {
    padding: 0 0 0 0.5em;
    display: inline-block;
    width: 98%;
}

textarea#partitiondefinition {
    height:3em;
}


/* for elements that should be revealed only via js */
.hide {
    display:            none;
}

#li_select_server {
    list-style-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>s_host.png);
}

#list_server {
    list-style-image: none;
}

/**
  *  Progress bar styles
  */
div.upload_progress_bar_outer
{
    border: 1px solid black;
    width: 202px;
}

div.upload_progress_bar_inner
{
    background-color: <?php echo $GLOBALS['cfg']['NaviBackground']; ?>;
    width: 0;
    height: 12px;
    margin: 1px;
}

table#serverconnection_src_remote,
table#serverconnection_trg_remote,
table#serverconnection_src_local,
table#serverconnection_trg_local  {
  float:left;
}
/**
  *  Validation error message styles
  */
.invalid_value
{background:#F00;}

/**
  *  Ajax notification styling
  */
 .ajax_notification {
    top: 0;           /** The notification needs to be shown on the top of the page */
    position: fixed;
    margin-top: 0;
    margin-right: auto;
    margin-bottom: 0;
    margin-left: auto;
    padding: 3px 5px;   /** Keep a little space on the sides of the text */
    width: 350px;
    background-color: #FFD700;
    z-index: 1100;      /** If this is not kept at a high z-index, the jQueryUI modal dialogs (z-index:1000) might hide this */
    text-align: center;
    display: block;
    left: 0;
    right: 0;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif);
    background-repeat: no-repeat;
    background-position: 2%;
 }

 #loading_parent {
    /** Need this parent to properly center the notification division */
    position: relative;
    width: 100%;
 }
/**
  * Export and Import styles
  */

.exportoptions h3, .importoptions h3 {
    border-bottom: 1px #999999 solid;
    font-size: 110%;
}

.exportoptions ul, .importoptions ul, .format_specific_options ul {
    list-style-type: none;
    margin-bottom: 15px;
}

.exportoptions li, .importoptions li {
    margin: 7px;
}
.exportoptions label, .importoptions label, .exportoptions p, .importoptions p {
    margin: 5px;
    float: none;
}

#csv_options label.desc, #ldi_options label.desc, #latex_options label.desc, #output label.desc{
    float: left;
    width: 15em;
}

.exportoptions, .importoptions {
    margin: 20px 30px 30px 10px
}

.format_specific_options h3 {
    margin: 10px 0 0 10px;
    border: 0;
}

.format_specific_options {
    border: 1px solid #999999;
    margin: 7px 0;
    padding: 3px;
}

p.desc {
    margin: 5px;
}

/**
  * Export styles only
  */
select#db_select, select#table_select {
    width: 400px;
}

.export_sub_options {
    margin: 20px 0 0 30px;
}

.export_sub_options h4 {
    border-bottom: 1px #999999 solid;
}

.export_sub_options li.subgroup {
    display: inline-block;
    margin-top: 0;
}

.export_sub_options li {
    margin-bottom: 0;
}

#quick_or_custom, #output_quick_export {
    display: none;
}
/**
 * Import styles only
 */

.importoptions #import_notification {
    margin: 10px 0;
    font-style: italic;
}

input#input_import_file {
    margin: 5px;
}

.formelementrow {
    margin: 5px 0 5px 0;
}

/**
 * GIS data editor styles
 */
a.close_gis_editor {
    float: right;
}

#gis_editor {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE */
    z-index: 101;
    overflow-y: auto;
    overflow-x: hidden;
}

#gis_data {
    min-height: 230px;
}

#gis_data_textarea {
    height: 6em;
}

#gis_data_editor {
    background: #D0DCE0;
    padding: 15px;
    min-height: 500px;
}

#gis_data_editor .choice {
    display: none;
}

#gis_data_editor input[type="text"] {
    width: 75px;
}

/**
 * ENUM/SET editor styles
 */
p.enum_notice {
    margin: 5px 2px;
    font-size: 80%;
}

#enum_editor {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE */
    z-index: 101;
    overflow-y: auto;
    overflow-x: hidden;
}

#enum_editor_no_js {
   margin: auto auto;
}

#enum_editor, #enum_editor_no_js {
    background: #D0DCE0;
    padding: 15px;
}

#popup_background {
    display: none;
    position: fixed;
    _position: absolute; /* hack for IE6 */
    width: 100%;
    height: 100%;
    top: 0;
    left: 0;
    background: #000;
    z-index: 100;
    overflow: hidden;
}

a.close_enum_editor {
    float: right;
}

#enum_editor #values, #enum_editor_no_js #values {
    margin: 15px 0;
    width: 100%;
}

#enum_editor #values input, #enum_editor_no_js #values input {
    margin: 5px 0;
    float: top;
    width: 100%;
}

}

#enum_editor_output {
    margin-top: 50px;
}

/**
 * Table structure styles
 */
.structure_actions_dropdown {
    position: absolute;
    padding: 3px;
    display: none;
    z-index: 100;
}

.structure_actions_dropdown a {
    display: block;
}

td.more_opts {
    display: none;
    white-space: nowrap;
}

iframe.IE_hack {
    z-index: 1;
    position: absolute;
    display: none;
    border: 0;
    filter: alpha(opacity=0);
}

/* config forms */
.config-form ul.tabs {
    margin:      1.1em 0.2em 0;
    padding:     0 0 0.3em 0;
    list-style:  none;
    font-weight: bold;
}

.config-form ul.tabs li {
    float: <?php echo $left; ?>;
}

.config-form ul.tabs li a {
    display:          block;
    margin:           0.1em 0.2em 0;
    padding:          0.1em 0.4em;
    white-space:      nowrap;
    text-decoration:  none;
    border:           1px solid <?php echo $GLOBALS['cfg']['BgTwo']; ?>;
    border-bottom:    none;
}

.config-form ul.tabs li a:hover,
.config-form ul.tabs li a:active,
.config-form ul.tabs li a.active {
    margin:           0;
    padding:          0.1em 0.6em 0.2em;
}

.config-form ul.tabs li.active a {
    background-color: <?php echo $GLOBALS['cfg']['BgOne']; ?>;
}

.config-form fieldset {
    margin-top:   0;
    padding:      0;
    clear:        both;
    /*border-color: <?php echo $GLOBALS['cfg']['BgTwo']; ?>;*/
}

.config-form legend {
    display: none;
}

.config-form fieldset p {
    margin:    0;
    padding:   0.5em;
    background: <?php echo $GLOBALS['cfg']['BgTwo']; ?>;
}

.config-form fieldset .errors { /* form error list */
    margin:       0 -2px 1em -2px;
    padding:      0.5em 1.5em;
    background:   #FBEAD9;
    border:       0 #C83838 solid;
    border-width: 1px 0;
    list-style:   none;
    font-family:  sans-serif;
    font-size:    small;
}

.config-form fieldset .inline_errors { /* field error list */
    margin:     0.3em 0.3em 0.3em 0;
    padding:    0;
    list-style: none;
    color:      #9A0000;
    font-size:  small;
}

.config-form fieldset th {
    padding:        0.3em 0.3em 0.3em 0.5em;
    text-align:     left;
    vertical-align: top;
    width:          40%;
    background:     transparent;
}

.config-form fieldset .doc, .config-form fieldset .disabled-notice {
    margin-left: 1em;
}

.config-form fieldset .disabled-notice {
    font-size: 80%;
    text-transform: uppercase;
    color: #E00;
    cursor: help;
}

.config-form fieldset td {
    padding-top:    0.3em;
    padding-bottom: 0.3em;
    vertical-align: top;
}

.config-form fieldset th small {
    display:     block;
    font-weight: normal;
    font-family: sans-serif;
    font-size:   x-small;
    color:       #444;
}

.config-form fieldset th, .config-form fieldset td {
    border-top: 1px <?php echo $GLOBALS['cfg']['BgTwo']; ?> solid;
}

fieldset .group-header th {
    background: <?php echo $GLOBALS['cfg']['BgTwo']; ?>;
}

fieldset .group-header + tr th {
    padding-top: 0.6em;
}

fieldset .group-field-1 th, fieldset .group-header-2 th {
    padding-left: 1.5em;
}

fieldset .group-field-2 th, fieldset .group-header-3 th {
    padding-left: 3em;
}

fieldset .group-field-3 th {
    padding-left: 4.5em;
}

fieldset .disabled-field th,
fieldset .disabled-field th small,
fieldset .disabled-field td {
    color: #666;
    background-color: #ddd;
}

.config-form .lastrow {
    border-top: 1px #000 solid;
}

.config-form .lastrow {
    background: <?php echo $GLOBALS['cfg']['ThBackground']; ?>;;
    padding:    0.5em;
    text-align: center;
}

.config-form .lastrow input {
    font-weight: bold;
}

/* form elements */

.config-form span.checkbox {
    padding: 2px;
    display: inline-block;
}

.config-form .custom { /* customized field */
    background: #FFC;
}

.config-form span.checkbox.custom {
    padding:    1px;
    border:     1px #EDEC90 solid;
    background: #FFC;
}

.config-form .field-error {
    border-color: #A11 !important;
}

.config-form input[type="text"],
.config-form select,
.config-form textarea {
    border: 1px #A7A6AA solid;
    height: auto;
}

.config-form input[type="text"]:focus,
.config-form select:focus,
.config-form textarea:focus {
    border:     1px #6676FF solid;
    background: #F7FBFF;
}

.config-form .field-comment-mark {
    font-family: serif;
    color: #007;
    cursor: help;
    padding: 0 0.2em;
    font-weight: bold;
    font-style: italic;
}

.config-form .field-comment-warning {
    color: #A00;
}

/* error list */
.config-form dd {
    margin-left: 0.5em;
}

.config-form dd:before {
    content: "\25B8  ";
}

.click-hide-message {
    cursor: pointer;
}

.prefsmanage_opts {
    margin-<?php echo $left; ?>: 2em;
}

#prefs_autoload {
    margin-bottom: 0.5em;
}

.rte_table {
    table-layout: fixed;
}

.rte_table td {
    vertical-align:     middle;
}

.rte_table tr td:nth-child(1) {
    font-weight:        bold;
}

.rte_table input, .rte_table select, .rte_table textarea {
    width:              100%;
    margin:             0;
    box-sizing:         border-box;
    -ms-box-sizing:     border-box;
    -moz-box-sizing:    border-box;
    -webkit-box-sizing: border-box;
}

.rte_table .routine_params_table {
    width:              100%;
}

#placeholder .button {
    position: absolute;
    cursor: pointer;
}

#placeholder div.button {
    font-size: smaller;
    color: #999;
    background-color: #eee;
    padding: 2px;
}

.wrapper {
    float: <?php echo $left; ?>;
    margin-bottom: 0.5em;
}
.toggleButton {
    position: relative;
    cursor: pointer;
    font-size: 0.8em;
    text-align: center;
    line-height: 1.55em;
    height: 1.55em;
    overflow: hidden;
    border-right: 0.1em solid #888;
    border-left: 0.1em solid #888;
}
.toggleButton table,
.toggleButton td,
.toggleButton img {
    padding: 0;
    position: relative;
}
.toggleButton .container {
    position: absolute;
}
.toggleButton .toggleOn {
    color: white;
    padding: 0 1em;
}
.toggleButton .toggleOff {
    padding: 0 1em;
}

.doubleFieldset fieldset {
    width: 48%;
    float: <?php echo $left; ?>;
    padding: 0;
}
.doubleFieldset fieldset.left {
    margin-<?php echo $right; ?>: 1%;
}
.doubleFieldset fieldset.right {
    margin-<?php echo $left; ?>: 1%;
}
.doubleFieldset legend {
    margin-<?php echo $left; ?>: 0.5em;
}
.doubleFieldset div.wrap {
    padding: 0.5em;
}

#table_columns input, #table_columns select {
    width:              14em;
    box-sizing:         border-box;
    -ms-box-sizing:     border-box;
    -moz-box-sizing:    border-box;
    -webkit-box-sizing: border-box;
}

#placeholder {
    position: relative;
    border: 1px solid #aaa;
    float: right;
    overflow: hidden;
}

.placeholderDrag {
    cursor: move;
}

#placeholder .button {
    position: absolute;
}

#left_arrow {
    left:8px;
    top:26px;
}

#right_arrow {
    left:26px;
    top:26px;
}

#up_arrow {
    left:17px;
    top:8px;
}

#down_arrow {
    left:17px;
    top:44px;
}

#zoom_in {
    left:17px;
    top:67px;
}

#zoom_world {
    left:17px;
    top:85px;
}

#zoom_out {
    left:17px;
    top:103px;
}

.gis_table td {
    vertical-align: middle;
}

.gis_table select {
    min-width: 151px;
}

.gis_table .save {
    font-weight: bold;
    vertical-align: bottom;
    height: 100px;
}

.gis_table .button {
   text-align: <?php echo $right; ?>;
}

.gis_table .choice {
    display:none;
}

.CodeMirror {
  line-height: 1em;
  font-family: monospace;
  background: white;
  border: 1px solid black;
}

.CodeMirror-scroll {
  height:             <?php echo ceil($GLOBALS['cfg']['TextareaRows'] * 1.2); ?>em;
  overflow: auto;
}

.CodeMirror-gutter {
  position: absolute; left: 0; top: 0;
  background-color: #f7f7f7;
  border-right: 1px solid #eee;
  min-width: 2em;
  height: 100%;
}
.CodeMirror-gutter-text {
  color: #aaa;
  text-align: right;
  padding: .4em .2em .4em .4em;
}
.CodeMirror-lines {
  padding: .4em;
}

.CodeMirror pre {
  -moz-border-radius: 0;
  -webkit-border-radius: 0;
  -o-border-radius: 0;
  border-radius: 0;
  border-width: 0; margin: 0; padding: 0; background: transparent;
  font-family: inherit;
  font-size: inherit;
  padding: 0; margin: 0;
}

.CodeMirror textarea {
  font-family: inherit !important;
  font-size: inherit !important;
}

.CodeMirror-cursor {
  z-index: 10;
  position: absolute;
  visibility: hidden;
  border-left: 1px solid black !important;
}
.CodeMirror-focused .CodeMirror-cursor {
  visibility: visible;
}

span.CodeMirror-selected {
  background: #ccc !important;
  color: HighlightText !important;
}
.CodeMirror-focused span.CodeMirror-selected {
  background: Highlight !important;
}

.CodeMirror-matchingbracket {color: #0f0 !important;}
.CodeMirror-nonmatchingbracket {color: #f22 !important;}

<?php echo $_SESSION['PMA_Theme']->getCssCodeMirror(); ?>

.colborder {
    border-right: solid 1px #FFFFFF;
    cursor: col-resize;
    height: 100%;
    margin-left: -5px;
    position: absolute;
    width: 5px;
}

.pma_table td {
    position: static;
}

.pma_table th.draggable span, .pma_table tbody td span {
    display: block;
    overflow: hidden;
}

.cRsz {
    position: absolute;
}

.draggable {
    cursor: move;
}

.cCpy {
    background: #000;
    color: #FFF;
    font-weight: bold;
    margin: 0.1em;
    padding: 0.3em;
    position: absolute;
}

.cPointer {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>col_pointer.png);
    height: 20px;
    margin-left: -5px;  /* must be minus half of its width */
    margin-top: -10px;
    position: absolute;
    width: 10px;
}

.normalqTip {
    background: #333 !important;
    opacity: 0.8 !important;
    border:1px solid #000 !important;
    -moz-border-radius: 0.3em !important;
    -webkit-border-radius: 0.3em !important;
    border-radius: 0.3em !important;
    text-shadow: -1px -1px #000 !important;
    font-size: 0.8em !important;
    font-weight: bold !important;
}

.normalqTip * {
    background: none !important;
    color: #FFF !important;
}

.normalqTipContent {
    padding: 1px 3px !important;
}


.data_full_width {
    width: 100%;
}
.cHide {
    background: #D3DCE3 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>col_hide.png);
    color: #CCC;
    cursor: pointer;
    height: 16px;
    margin-left: -5px;
    margin-top: 0.3em;
    position: absolute;
    width: 16px;
}

.cHide:hover {
    background-color: #AAA;
}

.cDrop {
    left: 0;
    position: absolute;
    top: 0;
}

.coldrop {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>col_drop.png);
    cursor: pointer;
    height: 16px;
    margin-left: 0.5em;
    margin-top: 0.3em;
    position: absolute;
    width: 16px;
}

.coldrop:hover, .coldrop-hover {
    background-color: #999;
}

.cList {
    background: #EEE;
    border: solid 1px #999;
    position: absolute;
}

.cList .lDiv div {
    padding: 0.2em 0.5em 0.2em 0.2em;
}

.cList .lDiv div:hover {
    background: #DDD;
    cursor: pointer;
}

.cList .lDiv div input {
    cursor: pointer;
}

.showAllColBtn {
    border-bottom: solid 1px #999;
    border-top: solid 1px #999;
    cursor: pointer;
    font-size: 0.9em;
    font-weight: bold;
    padding: 0.35em 1em;
    text-align: center;
}

.showAllColBtn:hover {
    background: #DDD;
}

.navigation {
    background: #E5E5E5;
    border: 1px solid black;
    margin: 0.8em 0;
}

.navigation td {
    margin: 0;
    padding: 0;
    vertical-align: middle;
    white-space: nowrap;
}

.navigation_separator {
    color: #555;
    display: inline-block;
    text-align: center;
    width: 1.2em;
    text-shadow: 1px 0 #FFF;
}

.navigation input[type=submit] {
    background: none;
    border: 0;
    margin: 0;
    padding: 0.3em 0.5em;
    min-width: 1.5em;
    font-weight: bold;
}

.navigation input[type=submit]:hover, .navigation input.edit_mode_active {
    background: #333;
    color: white;
    cursor: pointer;
}

.navigation select {
    margin: 0 0.8em;
}

.cEdit {
    margin: 0;
    padding: 0;
    position: absolute;
}

.cEdit input[type=text] {
    background: #FFF;
    height: 100%;
    margin: 0;
    padding: 0;
}

.cEdit .edit_area {
    background: #FFF;
    border: 1px solid #999;
    min-width: 10em;
    padding: 0.3em 0.5em;
}

.cEdit .edit_area select, .cEdit .edit_area textarea {
    width: 97%;
}

.cEdit .cell_edit_hint {
    color: #555;
    font-size: 0.8em;
    margin: 0.3em 0.2em;
}

.cEdit .edit_box {
    overflow: hidden;
    padding: 0;
}

.cEdit .edit_box_posting {
    background: #FFF url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif) no-repeat right center;
    padding-right: 1.5em;
}

.cEdit .edit_area_loading {
    background: #FFF url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif) no-repeat center;
    height: 10em;
}

.cEdit .goto_link {
    background: #EEE;
    color: #555;
    padding: 0.2em 0.3em;
}

.saving_edited_data {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>ajax_clock_small.gif) no-repeat left;
    padding-left: 20px;
}

/* css for timepicker */
.ui-timepicker-div .ui-widget-header { margin-bottom: 8px; }
.ui-timepicker-div dl { text-align: left; }
.ui-timepicker-div dl dt { height: 25px; }
.ui-timepicker-div dl dd { margin: -25px 0 10px 65px; }
.ui-timepicker-div td { font-size: 90%; }

/* Designer */
.input_tab {
    background-color: #A6C7E1;
    color: #000000;
}

#canvas {
    background-color: #FFFFFF;
    color: #000000;
}

canvas.pmd {
    display: inline-block;
    overflow: hidden;
    text-align: left;
}

canvas.pmd * {
    behavior: url(#default#VML);
}

.pmd_tab {
    background-color: #FFFFFF;
    color: #000000;
    border-collapse: collapse;
    border: 1px solid #AAAAAA;
    z-index: 1;
    -moz-user-select: none;
}

.tab_zag {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_zag_2 {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header_Linked.png);
    background-repeat: repeat-x;
    text-align: center;
    cursor: move;
    padding: 1px;
    font-weight: bold;
}

.tab_field {
    background: #FFFFFF;
    color: #000000;
    cursor: default;
}

.tab_field_2 {
    background-color: #CCFFCC;
    color: #000000;
    background-repeat: repeat-x;
    cursor: default;
}

.tab_field_3 {
    background-color: #FFE6E6; /*#DDEEFF*/
    color: #000000;
    cursor: default;
}

#pmd_hint {
    white-space: nowrap;
    position: absolute;
    background-color: #99FF99;
    color: #000000;
    left: 200px;
    top: 50px;
    z-index: 3;
    border: #00CC66 solid 1px;
    display: none;
}

.scroll_tab {
    overflow: auto;
    width: 100%;
    height: 500px;
}

.pmd_Tabs {
    cursor: default;
    color: #0055bb;
    white-space: nowrap;
    text-decoration: none;
    text-indent: 3px;
    font-weight: bold;
    margin-left: 2px;
    text-align: left;
    background-color: #FFFFFF;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/left_panel_butt.png);
    border: #CCCCCC solid 1px;
}

.pmd_Tabs2 {
    cursor: default;
    color: #0055bb;
    background: #FFEE99;
    text-indent: 3px;
    font-weight: bold;
    white-space: nowrap;
    text-decoration: none;
    border: #9999FF solid 1px;
    text-align: left;
}

.owner {
    font-weight: normal;
    color: #888888;
}

.option_tab {
    padding-left: 2px;
    padding-right: 2px;
    width: 5px;
}

.select_all {
    vertical-align: top;
    padding-left: 2px;
    padding-right: 2px;
    cursor: default;
    width: 1px;
    color: #000000;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
}

.small_tab {
    vertical-align: top;
    background-color: #0064ea;
    color: #FFFFFF;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/small_tab.png);
    cursor: default;
    text-align: center;
    font-weight: bold;
    padding-left: 2px;
    padding-right: 2px;
    width: 1px;
    text-decoration: none;
}

.small_tab2 {
    vertical-align: top;
    color: #FFFFFF;
    background-color: #FF9966;
    cursor: default;
    padding-left: 2px;
    padding-right: 2px;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.small_tab_pref {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
    text-align: center;
    width: 1px;
}

.small_tab_pref2 {
    vertical-align: top;
    color: #FFFFFF;
    background-color: #FF9966;
    cursor: default;
    text-align: center;
    font-weight: bold;
    width: 1px;
    text-decoration: none;
}

.butt {
    border: #4477aa solid 1px;
    font-weight: bold;
    height: 19px;
    width: 70px;
    background-color: #FFFFFF;
    color: #000000;
    vertical-align: baseline;
}

.L_butt2_1 {
    padding: 1px;
    text-decoration: none;
    background-color: #ffffff;
    color: #000000;
    vertical-align: middle;
    cursor: default;
}

.L_butt2_2 {
    padding: 0;
    border: #0099CC solid 1px;
    background: #FFEE99;
    text-decoration: none;
    color: #000000;
    cursor: default;
}

/* ---------------------------------------------------------------------------*/
.bor {
    width: 10px;
    height: 10px;
}

.frams1 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/1.png) no-repeat right bottom;
}

.frams2 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/2.png) no-repeat left bottom;
}

.frams3 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/3.png) no-repeat left top;
}

.frams4 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/4.png) no-repeat right top;
}

.frams5 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/5.png) repeat-x center bottom;
}

.frams6 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/6.png) repeat-y left;
}

.frams7 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/7.png) repeat-x top;
}

.frams8 {
    background: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/8.png) repeat-y right;
}

#osn_tab {
    background-color: #FFFFFF;
    color: #000000;
    border: #A9A9A9 solid 1px;
}

.pmd_header {
    background-color: #EAEEF0;
    color: #000000;
    text-align: center;
    font-weight: bold;
    margin: 0;
    padding: 0;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/top_panel.png);
    background-position: top;
    background-repeat: repeat-x;
    border-right: #999999 solid 1px;
    border-left: #999999 solid 1px;
    height: 28px;
}

.pmd_header a {
    display: block;
    float: left;
    margin: 3px 1px 4px 1px;
    height: 20px;
    border: 1px dotted #ffffff;
}

.pmd_header .M_bord {
    display: block;
    float: left;
    margin: 4px;
    height: 20px;
    width: 2px;
}

.pmd_header a.first {
    margin-right: 1em;
}

.pmd_header a.last {
    margin-left: 1em;
}

a.M_butt_Selected_down_IE,
a.M_butt_Selected_down {
    border: 1px solid #C0C0BB;
    background-color: #99FF99;
    color: #000000;
}

a.M_butt_Selected_down_IE:hover,
a.M_butt_Selected_down:hover,
a.M_butt:hover {
    border: 1px solid #0099CC;
    background-color: #FFEE99;
    color: #000000;
}

#layer_menu {
    z-index: 1000;
    position: absolute;
    left: 0;
    background-color: #EAEEF0;
    border: #999999 solid 1px;
}

#layer_action {
    position: absolute;
    left: 638px;
    top: 52px;
    z-index: 1000;
    background-color: #CCFF99;
    padding: 3px;
    border: #009933 solid 1px;
    white-space: nowrap;
    font-weight: bold;
}

#layer_upd_relation {
    position: absolute;
    left: 637px;
    top: 224px;
    z-index: 1000;
}

#layer_new_relation {
    position: absolute;
    left: 636px;
    top: 85px;
    z-index: 1000;
    width: 153px;
}

#pmd_optionse {
    position: absolute;
    left: 636px;
    top: 85px;
    z-index: 1000;
    width: 153px;
}

#layer_menu_sizer {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/resize.png);
    cursor: nw-resize;
    width: 16px;
    height: 16px;
}

.panel {
    position: fixed;
    top: 50px;
    right: 0;
    display: none;
    background: #FFF;
    border:1px solid #F5F5F5;
    width: 350 px;
    height: auto;
    padding: 30px 170px 30px 30px;
    color:#FFF;
    z-index:99;
}

a.trigger{
    position: fixed;
    text-decoration: none;
    top: 60px; right: 0;
    color:#fff;
    padding: 10px 40px 10px 15px;
    background:#333333 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/plus.png) 85% 55% no-repeat;
    border:1px solid #444444;
    display: block;
}

a.trigger:hover{
    position: fixed;
    text-decoration: none;
    top: 60px; right: 0;
    color:#080808;
    padding: 10px 40px 10px 15px;
    background:#fff696 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/plus.png) 85% 55% no-repeat;
    border:1px solid #999;
    display: block;
}

a.active.trigger {
    background:#222222 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/minus.png) 85% 55% no-repeat;
    z-index:999;
}

a.active.trigger:hover {
    background:#fff696 url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/minus.png) 85% 55% no-repeat;
    z-index:999;
}

h2.tiger{
    background-repeat: repeat-x;
    padding: 1px;
    font-weight: bold;
    padding: 50 20 50 20px;
    margin: 0 0 5px 0;
    width: 250px;
    float: left;
    color : #333;
    text-align: center;
}

h2.tiger a {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    text-align: center;
    text-decoration: none;
    color : #333;
    display: block;
}

h2.tiger a:hover {
    color: #000;
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header_Linked.png);
}

h2.active {
    background-image: url(<?php echo $_SESSION['PMA_Theme']->getImgPath(); ?>pmd/Header.png);
    background-repeat: repeat-x;
    padding: 1px;
    background-position: left bottom;
}

.toggle_container {
    margin: 0 0 5px;
    padding: 0;
    border-top: 1px solid #d6d6d6;
    background: #FFF ;
    width: 250px;
    overflow: hidden;
    font-size: 1.2em;
    clear: both;
}

.toggle_container .block {
    background-color: #DBE4E8;
    padding:40 15 40 15px; /*--Padding of Container--*/
    border:1px solid #999;
    color:#000;
}

.history_table {
    text-align: center;
    background-color: #9999CC;
}

.history_table2 {
    text-align: center;
    background-color: #DBE4E8;
}

#filter {
    display: none;
    position: absolute;
    top: 0%;
    left: 0%;
    width: 100%;
    height: 100%;
    background-color: #CCA;
    z-index:10;
    opacity:0.5;
    filter: alpha(opacity=50);
}

#box {
    display: none;
    position: absolute;
    top: 20%;
    left: 30%;
    width: 500px;
    height: 220px;
    padding: 48px;
    margin:0;
    border: 1px solid black;
    background-color: white;
    z-index:101;
    overflow: visible;
}

#boxtitle {
    position:absolute;
    float:center;
    top:0;
    left:0;
    width:593px;
    height:20px;
    padding:0;
    padding-top:4px;
    left-padding:8px;
    margin:0;
    border-bottom:4px solid #3CF;
    background-color: #D0DCE0;
    color:black;
    font-weight:bold;
    padding-left: 2px;
    text-align:left;
}

#tblfooter {
    background-color: #D3DCE3;
    float: right;
    padding-top:10px;
    color: black;
    font-weight: normal;
}

input.btn {
    color:#333;
    background-color: #D0DCE0;
}

<?
define("BX_USE_MYSQLI", true);
define("DBPersistent", false);
$DBType = "mysql";
$DBHost = "localhost";
$DBLogin = "root";
$DBPassword = "123456";
$DBName = "armswiss";
$DBDebug = false;
$DBDebugToFile = false;

define("DELAY_DB_CONNECT", true);
define("CACHED_b_file", 3600);
define("CACHED_b_file_bucket_size", 10);
define("CACHED_b_lang", 3600);
define("CACHED_b_option", 3600);
define("CACHED_b_lang_domain", 3600);
define("CACHED_b_site_template", 3600);
define("CACHED_b_event", 3600);
define("CACHED_b_agent", 3660);
define("CACHED_menu", 3600);

define("BX_UTF", true);
define("BX_FILE_PERMISSIONS", 0644);
define("BX_DIR_PERMISSIONS", 0755);
@umask(~(BX_FILE_PERMISSIONS|BX_DIR_PERMISSIONS)&0777);
@ini_set("memory_limit", "512M");
define("BX_DISABLE_INDEX_PAGE", true);

// Language
session_start(["LANG_UI"]);
if(isset($_REQUEST['lang_ui']))
    $_SESSION["LANG_UI"] = $_REQUEST['lang_ui']=='en'?'en':($_REQUEST['lang_ui']=='ru'?'ru':'en');

if(!isset($_REQUEST['lang']) && isset($_SESSION["LANG_UI"]))
    define(LANGUAGE_ID, $_SESSION["LANG_UI"]);

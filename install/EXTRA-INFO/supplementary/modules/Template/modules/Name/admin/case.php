<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (!defined('ADMIN_FILE')) {
   die('Access Denied');
}

//Change to your module name
$modname = "Name";
include_once(NUKE_MODULES_DIR.$modname.'/admin/language/lang-'.$currentlang.'.php');

switch($op) {
    //Put all your case statements here
    case $modname:
           include(NUKE_MODULES_DIR.$modname.'/admin/index.php');
    break;
}

?>
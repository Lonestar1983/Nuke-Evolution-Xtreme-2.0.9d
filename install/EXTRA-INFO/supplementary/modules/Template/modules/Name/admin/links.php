<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (!defined('ADMIN_FILE')) {
   die('Access Denied');
}

global $admin_file;

//Change to the name of your module
get_lang("Name");
//Change the name(s) here to the name of your module
adminmenu($admin_file.'.php?op=name', _NAME, 'name.png');
?>
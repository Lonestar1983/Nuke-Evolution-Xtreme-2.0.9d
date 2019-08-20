<?php
/*=======================================================================
 Nuke-Evolution Basic: Enhanced PHP-Nuke Web Portal System
 =======================================================================*/

if (!defined('MODULE_FILE')) {
   die('You can\'t access this file directly...');
}

define('INDEX_FILE', true);
$module_name = basename(dirname(__FILE__));
get_lang($module_name);

global $db, $prefix;

$op = (isset($op)) ? $op : '';
switch ($op) {
    
}

?>
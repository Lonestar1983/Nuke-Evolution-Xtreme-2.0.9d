<?php
/***************************************************************************
 *                                 db.php
 *                            -------------------
 *   begin                : Saturday, Feb 13, 2001
 *   copyright            : (C) 2001 The phpBB Group
 *   email                : support@phpbb.com
 *
 *   $Id: db.php,v 1.10 2002/03/18 13:35:22 psotfx Exp $
 *
 *
 ***************************************************************************/

/***************************************************************************
 *
 *   This program is free software; you can redistribute it and/or modify
 *   it under the terms of the GNU General Public License as published by
 *   the Free Software Foundation; either version 2 of the License, or
 *   (at your option) any later version.
 *
 ***************************************************************************/

if (!defined('NUKE_EVO')) {
    die("You can't access this file directly...");
}

global $dbtype, $db, $dbhost, $dbuname, $dbpass, $dbname, $persistency;

if(!isset($dbtype)) $dbtype = 'mysql';
$dbtype = strtolower($dbtype);

if(isset($_REQUEST['dbtype'])) {
    exit('Illegal Operation');
}

if(file_exists(NUKE_DB_DIR.$dbtype.'.php')) {
    require_once(NUKE_DB_DIR.$dbtype.'.php');
} else {
    exit('Invalid Database Type Specified!');
}

if(!isset($db)) {
    // Make the database connection.
    $db = new sql_db($dbhost, $dbuname, $dbpass, $dbname, false);
}
if(!$db->db_connect_id) {
    exit("<br /><br /><center><img src='images/logo.gif'><br /><br /><strong>There seems to be a problem with the MySQL server, sorry for the inconvenience.<br /><br />We should be back shortly.</strong></center>");
}


if ($dbtype == 'mysql') {
    if (version_compare($db->mysql_version, '4.1.0', '<')) {
        exit("<br /><br /><center><img src='images/logo.gif'><br /><br /><strong>We are sorry but the the MySQL version you are attempting to use is to old and is not supported by Nuke-Evolution nor by MySQL.com any more.<br /><br />Please ask your host to upgrade or switch hosts.</center>");
    }
    $db->set_charset();
}

?>
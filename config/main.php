<?php
/**
 * Created by PhpStorm.
 * User: farindra
 * Date: 4/13/15
 * Time: 9:42 PM
 *------------------------------------------------------------/


/**
 *
 * Database definations
 */
define ('db_type', 'MYSQL');
define ('db_host', 'localhost');
define ('db_port', '3306');
define ('db_name', 'XIS');
define ('db_user', 'root');
define ('db_pass', 'gslnurU12');
define ('db_table_prefix', '');

/**
 * Database Connect
 */
function db_connect($host = db_host, $port = db_port, $username = db_user, $password = db_pass, $database = db_name) {
    if(!$db = @mysql_connect($host.':'.$port, $username, $password)) {
        return FALSE;
    }
    if((strlen($database) > 0) AND (!@mysql_select_db($database, $db))) {
        return FALSE;
    }
    // set the correct charset encoding
    mysql_query('SET NAMES \'utf8\'');
    mysql_query('SET CHARACTER_SET \'utf8\'');
    return $db;
}

/**
 * Database Close
 */
function db_close($identifier) {
    return mysql_close($identifier);
}

/**
 * Database Query
 */
function db_query($query, $identifier) {
    return mysql_query($query, $identifier);
}


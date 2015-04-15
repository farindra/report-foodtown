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
define ('db_host', '10.10.99.3');
define ('db_port', '3306');
define ('db_name', 'report');
define ('db_user', 'labtest1');
define ('db_pass', 'asd123');
define ('db_table_prefix', '');


/**
 * Database Connect
 */
class database{
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

    function db_query2($query) {
        return mysql_query($query);
    }

    function db_listdata($query) {
        $sql_tampil= mysql_query($query);
        while($row=mysql_fetch_array($sql_tampil));
            $data[]=@row;
        return $data;
    }

    function member_count() {
        $rs = $this->db_query2('SELECT count(Card_No) FROM Tab_Member');
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function top5_member() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Member'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function top5_tenant() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Tenant'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

}
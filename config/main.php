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
define ('db_name', 'report');
define ('db_user', 'root');
define ('db_pass', '');
define ('db_table_prefix', '');



class database{
    //Database Connect
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

    //Database Close
    function db_close($identifier) {
        return mysql_close($identifier);
    }

    //Database Query
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
    //<Dashboard>
    //hitung jumah member

    function daily_sales() {
        $rs = $this->db_query2("SELECT Val_1 FROM Tab_Val where Val_Nm='Total_Grand_Hari'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function daily_trans() {
        $rs = $this->db_query2("SELECT Val_1 FROM Tab_Val where Val_Nm='Total_Trans_Hari'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function daily_trans_all() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Total_Trans_Hari'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function daily_member() {
        $rs = $this->db_query2("SELECT Val_1 FROM Tab_Val where Val_Nm='Total_Member_Hari'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    //</Dashboard>

    //TOP 5 member
    function top5_member() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Member'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function top5_member_month() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Member_Month'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
            foreach ($parsed_json as $key => $value) {
                $nourut+= 1;
                $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

            }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    function top5_member_year() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Member_Year'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    function top5_member_new() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Member_New'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>Join Date</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    function total_member() {
        $rs = $this->db_query2("SELECT Val_1 FROM Tab_Val where Val_Nm='Total_Member'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    //TOP 5 Tenant
    function top5_tenant() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Tenant'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function top5_tenant_month() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Tenant_Month'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    function top5_tenant_year() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Tenant_Year'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    function top5_tenant_new() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Top5_Tenant_New'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>ID</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }

    //Tansaksi
    function trans_years_all() {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Trans_Years_All'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);
        return  ($row[0]);
    }

    function trans_hour($dyear,$dmonth,$ddate) {
        $rs = $this->db_query2("SELECT Val_Json FROM Tab_Val where Val_Nm='Trans_Hour_All'");
        //$defval= mysql_fetch_object($rs);
        $row = mysql_fetch_row($rs);

        $fillhead='<thead><tr><th width="1%">'.'#</th><th>Nama</th><th>GrandTotal</th></tr></thead><tbody>';
        $fillbody='';
        $nourut= 0;
        $json_string =($row[0]);
        $parsed_json = json_decode($json_string);
        foreach ($parsed_json as $key => $value) {
            $nourut+= 1;
            $fillbody = $fillbody . '<tr><td>'. $nourut .'</td><td>' . $value->nama . '</td><td class="right-align">'. $value->grandtotal . '</td></tr>';

        }
        $fillbody = $fillbody . '<tbody>';

        return  ($fillhead.$fillbody);
    }
}
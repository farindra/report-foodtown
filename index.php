<?php
/**
 * Created by PhpStorm.
 * User: farindra
 * Date: 4/13/15
 * Time: 9:20 PM
 */
//include 'config/main.php';
include 'dashboard-1.php';

//if(!$conn = db_connect()) {
//    die('cant connect to mysql');
//}
//$rs = db_query('SELECT * FROM Tab_Member', $conn);

//$row = mysql_fetch_row($rs);
//echo $row[0]; //

/* loop through the resultset */
//if (mysql_num_rows($rs) == 0) {
 //   echo "No rows found, nothing to print so am exiting";
  //  exit;
//}

// While a row of data exists, put that row in $row as an associative array
// Note: If you're expecting just one row, no need to use a loop
// Note: If you put extract($row); inside the following loop, you'll
//       then create $userid, $fullname, and $userstatus
//while ($row = mysql_fetch_assoc($rs)) {
//    echo $row["id"];
//    echo $row["username"];
//    echo $row["level"];
//}

//mysql_free_result($rs);

//db_close ($conn);
//echo '</br></br>';
// JSON string
//$someJSON = '[{"name":"Jonathan Suh","gender":"male"},{"name":"William Philbin","gender":"male"},{"name":"Allison McKinnery","gender":"female"}]';

/* Convert JSON string to Array
$someArray = json_decode($someJSON, true);
print_r($someArray);        // Dump all data of the Array
echo '</br></br>'.'1'.$someArray[0]["name"].'</br>'; // Access Array data

// Convert JSON string to Object
$someObject = json_decode($someJSON);
print_r($someObject);      // Dump all data of the Object
echo '</br></br>'.'2'.$someObject[0]->name; // Access Object data */
//echo '[{ "month": "Januari","europe": "546", "americas": "332", "africa": "227" },{ "month": "Februari", "europe": "705", "americas": 417", "africa": "283 },{ "month": "Maret", "europe": "856", "americas": "513", "africa": "361" },{ "month": "April", "europe": "1294", "americas": "614", "africa": "471" }]';
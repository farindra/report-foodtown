<?php
require_once ('config/main.php');
$db=new database();
$db->db_connect();
//$defval=$db->tenant_menu_top_all();


?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="description" content="Xenon Boostrap Admin Panel" />
	<meta name="author" content="" />
	
	<title>Lukison - Berita Acara</title>

    <?php include ('page/style-top.tpl');?>
	
</head>
<body class="page-body">
    <div class="page-container">
        <?php include ('page/nav-main.tpl');?>
        <div class="main-content">
            <?php include ('page/nav-top.tpl');
            include ('page/berita-acara.tpl');?>
        </div>
    </div>
    <?php include('page/style-bottom.tpl');?>

</body>
</html>
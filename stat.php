<?php 
    include("inc/db.php");
    $str = 1;
    $fin = 1; 
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<html>
<head>
    <?php include("inc/head.inc.php"); ?>
    
    <title>Статистика показов</title>
    <meta name="keywords" content="" />
    <meta name="description" content="" />
</head>
<body>
	<div class="main">
<?php include("inc/top.inc.php"); ?>
		<div class="content">
<?php include("inc/main_map.inc.php"); ?>
<?php include("inc/filter.inc.php"); ?>
			<div class="content_page">
<?php echo $_SESSION["error2"]; unset($_SESSION["error2"]); ?>
<?php echo $_SESSION["error"]; ?>
<?php unset($_SESSION["error"]); ?>
<?php include("inc/left.inc.php"); ?>            
<?php include("inc/stat.inc.php"); ?>	
			</div>
		</div>
		<div class="clear"></div>
<?php include("inc/foot1.inc.php"); ?>
<?php include("inc/foot2.inc.php"); ?>
	</div>
</body>
</html>
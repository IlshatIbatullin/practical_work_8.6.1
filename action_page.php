<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Answer</title>
  <link rel="stylesheet" href="style.css" />
</head>
 <div class="header">     
               <?php include 'logo.inc.php' ?>         
               <?php include 'menu.inc.php' ?>	   
        </div>       
<body>
<p>The answer is:
<?php 
$date1 = $_POST["appt"];
$date12 = strtotime($date1);
$date2 = time();

$diff = abs($date2 - $date12) / 86400;
echo round($diff, 0);
?>

<div>
<a href="./">Main page</a>
</div>
</body>
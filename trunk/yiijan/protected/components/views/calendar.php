<center>
<?php
include_once('generate_calendar.php');
$locale='ja_JP.utf8';
$setlocale = setlocale(LC_ALL,  $locale);
$today = date('j', time());
$days = array($today=>array(NULL,NULL,'<span style="color:#990000; font-weight: bold;">'.$today.'</span>'));
echo generate_calendar(Date("Y"), Date("n"), $days, 3);
?>
</center>

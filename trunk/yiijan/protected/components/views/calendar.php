<center>
<?php
include_once('generate_calendar.php');
$locale='ja_JP.utf8';
$setlocale = setlocale(LC_ALL,  $locale);
echo generate_calendar(Date("Y"), Date("n"), NULL, 3);
?>
</center>

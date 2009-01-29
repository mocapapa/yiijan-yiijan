<center>
<ul class="Calendar">
<?php
   //   print_r($this->controller->time);
// Set locale
   $locale='ja_JP.utf8';
$setlocale = setlocale(LC_ALL,  $locale);

// load the algorithm of the calendar
include_once('generate_calendar.php');

// Prepare the css style within the calendar widget
$url=CHtml::asset(Yii::getPathOfAlias('application.components.css.calendar').'.css');
Yii::app()->getClientScript()->registerCssFile($url);

$today = date('j', time());
$days[$today] = array(NULL,NULL,'<span style="color:#990000; font-weight: bold;">'.$today.'</span>');

// Make the links
$post = new Post;
foreach($post->findArtclePostedThisMonth() as $article):
  $days[date('j', $article->createTime)]  = array(CHtml::normalizeUrl(array('date/'.$article->createTime)), 'linked-day');
endforeach;

// Previous month and next month

if (!empty($_GET['time'])) {
  $month = date('n', $_GET['time']);
  $date = 1;
  $year = date('Y', $_GET['time']);
  
  if (!empty($_GET['pn']) && $_GET['pn'] == 'n') $month++;
  if (!empty($_GET['pn']) && $_GET['pn'] == 'p') $month--;
 } else {
  $month = date('n');
  $date = 1;
  $year = date('Y');
 }
$st = mktime(0,0,0,$month,$date,$year);

$pn = array('&lt;'=>CHtml::normalizeUrl(array('month/'.$st.'/p')), '&gt;'=>CHtml::normalizeUrl(array('month/'.$st.'/n')));

// Execution
echo generate_calendar($year, $month, $days, 3, NULL, 0, $pn);
?>
</ul>
</center>

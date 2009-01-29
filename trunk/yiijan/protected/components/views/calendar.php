<center>
<ul class="Calendar">
<?php
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
  $days[date('j', $article->createTime)]  = array(CHtml::normalizeUrl(array('postedon/'.$article->createTime)), 'linked-day');
endforeach;

// Previous month and next month

$pn = array('&lt;'=>'prevMonth', '&gt;'=>'nextMonth');

// Execution
echo generate_calendar(Date("Y"), Date("n"), $days, 3, NULL, 0, $pn);
?>
</ul>
</center>

<?php if(!empty($_GET['time'])): ?>
<?php
    $month = date('n', $_GET['time']);
    $year = date('Y', $_GET['time']);

    if (!empty($_GET['pn']) && $_GET['pn'] == 'n') $month++;
    if (!empty($_GET['pn']) && $_GET['pn'] == 'p') $month--;

    $st = mktime(0,0,0,$month,1,$year);
?>

<h3>Posts Issued in "<?php echo date('F, Y',$st); ?>"</h3>
<?php endif; ?>

<?php foreach($posts as $post): ?>
<?php $this->renderPartial('_post',array(
	'post'=>$post,
)); ?>
<?php endforeach; ?>

<br/>
<?php $this->widget('CLinkPager',array('pages'=>$pages)); ?>
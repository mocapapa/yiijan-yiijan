<?php include_once('header.php');?>
  <div id="sidebar">
    <?php $this->widget('UserLogin',array('visible'=>Yii::app()->user->isGuest)); ?>

    <?php $this->widget('UserMenu',array('visible'=>!Yii::app()->user->isGuest)); ?>

    <?php $this->widget('TagCloud'); ?>

    <?php $this->widget('RecentComments'); ?>

    <?php $this->widget('Nhkclock'); ?>

    <?php $this->widget('Calendar'); ?>

  </div><!-- sidebar -->

  <div id="content">
    <?php echo $content; ?>
  </div><!-- content -->
<?php include_once('footer.php');?>

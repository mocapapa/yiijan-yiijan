<?php include_once('header.php');?>
  <div id="sidebar">
    <?php $this->widget('Calendar'); ?>

    <?php $this->widget('UserLogin',array('visible'=>Yii::app()->user->isGuest)); ?>

    <?php $this->widget('UserMenu',array('visible'=>!Yii::app()->user->isGuest)); ?>

    <?php $this->widget('TagCloud'); ?>

    <?php $this->widget('RecentComments'); ?>

    <?php $this->widget('Link'); ?>

    <?php $this->widget('Nhkclock'); ?>

  </div><!-- sidebar -->

  <div id="content">
    <?php echo $content; ?>
  </div><!-- content -->
<?php include_once('footer.php');?>

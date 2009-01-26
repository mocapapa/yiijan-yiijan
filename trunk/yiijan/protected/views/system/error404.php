<?php include_once(dirname(__FILE__).'/../layouts/header.php');?>
  <div id="content">
    <h2>Page Not Found</h2>
    <p>
    The page you are looking for cannot be found. Please make sure you entered a correct URL.
    </p>
    <p>
    If you think this is a server error, please contact
    <?php echo CHtml::mailto(Yii::app()->params['adminEmail']); ?>.
    </p>
    <p>
    <?php echo CHtml::link('Return to homepage',Yii::app()->homeUrl); ?>
    </p>
  </div><!-- content -->
<?php include_once(dirname(__FILE__).'/../layouts/footer.php');?>

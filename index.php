<?php
//  * @version $Id: index.php 5 2009-02-22 11:37:40Z choco.moca.colon $
// change the following paths if necessary
$yii=dirname(__FILE__).'/../../framework/yii.php';
$config=dirname(__FILE__).'/protected/config/main.php';

// remove the following line when in production mode
// defined('YII_DEBUG') or define('YII_DEBUG',true);

require_once($yii);
$app=Yii::createWebApplication($config);
$app->timer->init();
$app->run();

function dynamicTimer()                                                                                
{                                                                                                      
  return sprintf(", rendered in %.2f[msec]&nbsp;", Yii::app()->timer->getTimer());
}

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="language" content="en" />

<title><?php echo isset($this->pageTitle)? $this->pageTitle:''; ?></title>

<?php
// javascript
  $cs=Yii::app()->clientScript;
  $cs->registerCoreScript('jquery');
  $cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/highslide/highslide.js', CClientScript::POS_HEAD);
  $cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/highslide/highslide_eh.js', CClientScript::POS_HEAD);
  $cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/persist.js', CClientScript::POS_HEAD);
  $cs->registerScriptFile(Yii::app()->request->baseUrl.'/js/jquery.clipboard-2.0.1/jquery.clipboard.js', CClientScript::POS_HEAD);
  $params = array(
		'BASEURL'=>Yii::app()->request->baseUrl,
                'HTTPHOST'=>$_SERVER['HTTP_HOST']
		  );
  $script = 'var PARAMS = eval('.CJavaScript::jsonEncode($params).');';
  $cs->registerScript('widget-oc1', $script, CClientScript::POS_BEGIN);
  $script = implode('',file(Yii::app()->basePath.'/../js/widget-oc.min.js'));
  $cs->registerScript('widget-oc2', $script, CClientScript::POS_READY);
  $script = 'hs.graphicsDir = PARAMS.BASEURL+\'/js/highslide/graphics/\';'."\n";
  $script .= 'hs.outlineType = \'rounded-white\';'."\n";
  $script .= 'hs.showCredits = false;';
  $cs->registerScript('hislide-middle', $script, CClientScript::POS_BEGIN);
  $script = 'addHighSlideAttribute();';
  $cs->registerScript('hislide-end', $script, CClientScript::POS_END);
// css
  $cs->registerCSSFile(Yii::app()->request->baseUrl.'/js/highslide/highslide.css');
  $cs->registerCSSFile(Yii::app()->request->baseUrl.'/css/main.css');
?>
</head>

<body class="page">
<div id="container">
  <div id="header">
    <h1><?php echo CHtml::link(CHtml::image(Yii::app()->baseUrl.'/yiijan-logo.jpg','', array('border'=>'0')),Yii::app()->homeUrl); ?></h1>
  </div>

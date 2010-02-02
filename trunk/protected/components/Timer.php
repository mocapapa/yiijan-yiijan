<?php
// @version $Id$
class Timer extends CApplicationComponent {

	public function init()
	{
		$time = microtime();
		// Yii::trace('start timer @ '.$time,'components.Timer.init()');
		Yii::app()->session['startTime'] = $time;
	}

	public function timer()
	{
		$time = microtime();
		// Yii::trace('stop timer @ '.$time,'components.Timer.timer()');
		list($e1, $e0) = explode(" ", $time);
		list($s1, $s0) = explode(" ", Yii::app()->session['startTime']);
		return (($e1+$e0)-($s1+$s0))*1000.0;
	}
}

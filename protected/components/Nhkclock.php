<?php

class Nhkclock extends Portlet
{
  public $title='NHK Clock';

	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('nhkclock');
	}
}
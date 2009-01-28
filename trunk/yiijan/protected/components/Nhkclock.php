<?php

class Nhkclock extends Portlet
{
  public $title='Nhkclock';

	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('nhkclock');
	}
}
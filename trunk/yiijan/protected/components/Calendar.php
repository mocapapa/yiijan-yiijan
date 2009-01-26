<?php

class Calendar extends Portlet
{
  public $title='Calendar';

	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('calendar');
	}
}
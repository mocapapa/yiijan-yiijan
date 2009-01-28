<?php

class Link extends Portlet
{
  public $title='Link';

	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('link');
	}
}
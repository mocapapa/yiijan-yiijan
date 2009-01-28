<?php

class Link extends Portlet
{
  public $title='Links';

	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('link');
	}
}
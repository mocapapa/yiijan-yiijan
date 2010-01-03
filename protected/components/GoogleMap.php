<?php

class GoogleMap extends GMap
{
  public $title='Gmap';

	public function init()
	{
		parent::init();
	}

	protected function renderContent()
	{
		$this->render('gmap');
	}
}
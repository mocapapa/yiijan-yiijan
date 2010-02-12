<?php
  // @version $Id: Clock.php 2 2010-02-10 10:17:21Z mocapapa@g.pugpug.org $
class Clock extends Portlet
{
  public $title='Clock';

  protected function renderContent()
  {
    $this->render('analog-clock');
  }
}

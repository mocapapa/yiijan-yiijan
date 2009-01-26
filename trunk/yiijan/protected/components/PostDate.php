<?php

class PostDate extends CWidget
{
  public $title='PostDate';
  public $cssClass='postdate';
  public $contentCssClass='content';
  public $visible=true;
  public $dt;

  public function __construct($str='',$data='') {
    parent::__construct($str);

    print_r($data);
    $dt = $str;
  }

  public function init($data='')
  {
    print_r($data);
    if(!$this->visible)
      return;
    echo "<div class=\"{$this->cssClass}\">\n";
  }

  public function run($data='')
  {
    print_r($data);
    if(!$this->visible)
      return;
    $this->renderContent();
    echo "</div><!-- {$this->cssClass} -->";
  }

  protected function renderContent()
  {
    $this->render('postDate');
  }
}
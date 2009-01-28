<?php
class PostDate extends CWidget
{
  public $title='PostDate';
  public $cssClass='postdate';
  public $contentCssClass='content';
  public $visible=true;
  public $ct;

  public function init($data='')
  {
    if(!$this->visible)
      return;
    echo "<div class=\"{$this->cssClass}\">\n";
  }

  public function run($data='')
  {
    if(!$this->visible)
      return;
    $this->renderContent();
    echo "</div><!-- {$this->cssClass} -->";
  }

  protected function renderContent()
  {
    echo "<center>";
    print '<font size="3">';
    print $this->ct;
    print "</font>";
    echo "</center>";
  }
}
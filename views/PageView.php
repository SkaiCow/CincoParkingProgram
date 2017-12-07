<?php
abstract class PageView implements View
{
  protected $title = 'CRHS parking program';

  function renderHead()
  { ?>
    <!DOCTYPE html>
    <html>
      <head>
        <title><?= $this->title ?></title>
        <link rel="stylesheet" type="text/css" href="/SuperCSSLoader.php">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      </head>
  <?php }

  function renderMenus()
  {?>
    <body id="pageview">
      <div class="menu-tab">
        
      </div>
  <?php }

  abstract protected function renderBody();

  static function renderFooter()
  { ?>
    </body>
  <?php }

  function render()
  {
    $this->renderHead();
    $this->renderMenus();
    $this->renderBody();
    $this->renderFooter();
  }
}
?>

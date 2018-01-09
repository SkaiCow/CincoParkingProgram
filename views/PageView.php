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
        <script type="text/javascript" src="/scripts/navMenu.js"></script>
      </head>
  <?php }

  function renderMenus()
  {?>
    <body id="pageview">
      <div class="menu-bar">
        <div class="menu-title">
          <h1>CRHS Parking Program</h1>
        </div>
        <div class="menu-nav-container">
          <div class="menu-nav-bar" id="nav-top"></div>
          <div class="menu-nav-bar" id="nav-mid"></div>
          <div class="menu-nav-bar" id="nav-bot"></div>
        </div>
      </div>
      <div class="menu-sidebar-container">
        <div class="menu-sidebar-exit">
        </div>
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

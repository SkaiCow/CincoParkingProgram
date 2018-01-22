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
          <img src="/images/exit.png" height="100%" width="100%">
        </div>
        <div class="menu-divider">
          <center>
            <span><b>Menu</b></span>
          </center>
        </div>
        <a href="/?p=start" class="menu-nav-button-link">
          <div class="menu-nav-button-container">
            <div class="menu-nav-button">Home</div>
          </div>
        </a>
        <a href="/?p=color" class="menu-nav-button-link">
          <div class="menu-nav-button-container">
            <div class="menu-nav-button">Color</div>
          </div>
        </a>
        <a href="/?p=color" class="menu-nav-button-link">
          <div class="menu-nav-button-container">
            <div class="menu-nav-button">Enter ID</div>
          </div>
        </a>
        <a href="/?p=color" class="menu-nav-button-link">
          <div class="menu-nav-button-container">
            <div class="menu-nav-button">View Table</div>
          </div>
        </a>
        <a href="/?p=color" class="menu-nav-button-link">
          <div class="menu-nav-button-container">
            <div class="menu-nav-button">Search</div>
          </div>
        </a>
        <a href="/?p=color" class="menu-nav-button-link">
          <div class="menu-nav-button-container">
            <div class="menu-nav-button">Parking Map</div>
          </div>
        </a>
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

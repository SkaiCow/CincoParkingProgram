<?php

class AdminLoginView
{
  protected $title = 'CRHS parking program';
  function render()
  {
    ?>
    <!DOCTYPE html>
    <html>
      <head>
        <link rel="stylesheet" type="text/css" href="/SuperCSSLoader.php">
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
      </head>
      <body>
        <div class="login-container">
          <div class="login-image-container">
              <img src="/images/Big_RC_logo_solidColor.jpg" height="300px" width="475px" class="login-image">
          </div><br>
          <center>
          <h2 style="color: #F0EFEF;">Admin Password<h2>
            <div class="login-input-container">
              <form method="post" action="/?p=login&do=loginadmin">
                <input class="login-input" name="password" type="password" placeholder="*******">
                <div class="login-enter">
                  <input type="image" src="/images/Enter.png" border="0" alt="Submit"/>
                </div>
              </form>
            </div>
          </center>
        </div>
      </body>
    </html>
    <?php
  }
}

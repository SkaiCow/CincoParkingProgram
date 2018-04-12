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
              <input class="login-input" type="password" placeholder="*******">
              <div class="login-enter">
                <img src="/images/Enter.png" height="50px" width="50px">
              </div>
            </div>
          </center>
        </div>
      </body>
    </html>
    <?php
  }
}

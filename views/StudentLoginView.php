<?php

class StudentLoginView
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
          <h2 style="color: #F0EFEF;">Student ID<h2>
            <div class="login-input-container">
              <input class="login-input" placeholder="A1000000">
              <div class="login-enter">
                <img src="/images/Enter.png" height="50px" width="50px">
              </div>
            </div><br>
            <select class="login-dropdown">
              <option>Senior</option>
              <option>Junior</option>
              <option>Sophmore</option>
            </select>
          </center>
        </div>
      </body>
    </html>
    <?php
  }
}

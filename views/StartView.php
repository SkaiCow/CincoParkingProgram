<?php

class StartView extends AdminPageView
{
  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h2>Welcome to the CRHS parking program</h2>
        <a href="/?p=color">Go to color standards and defaults</a>
      </div>
    </div>
    <?php
  }
}

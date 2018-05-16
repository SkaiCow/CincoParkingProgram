<?php

class StartView extends AdminPageView
{
  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h2>Welcome to the CRHS parking admin panel</h2>
        <div class="enterId-container">
          <h3>Parking Stats</h3>
          <h4>Number of free spots: <?= (new StatsDatabaseModel())->openSpotsLeft()?></h4>
          <h4>Number of taken spots: <?= (new StatsDatabaseModel())->takenSpots()?></h4>
        </div>
      </div>
    </div>
    <?php
  }
}

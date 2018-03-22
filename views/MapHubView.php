<?php
class MapHubView extends StudentsView
{
  protected $title = 'CRHS parking - Map Hub';

  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>Choose a Lot</h3>
        <center>
          <div class="map-selecter-container">
            <div class="map-pac-selecter">
              <img src="/images/Selecter-03.png" width="100%" height="100%">
            </div>
            <div class="map-softmore-selecter">
              <img src="/images/Selecter-04.png" width="100%" height="100%">
            </div>
            <div class="map-senior-selecter">
              <img src="/images/Selecter-01.png" width="100%" height="100%">
            </div>
            <div class="map-athletic-selecter">
              <img src="/images/Selecter-02.png" width="100%" height="100%">
            </div>
          </div>
        </center>
      </div>
    </div>
    <?php
  }
}
 ?>

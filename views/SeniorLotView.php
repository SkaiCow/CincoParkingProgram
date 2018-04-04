<?php
class SeniorLotView extends StudentsView
{
  protected $title = 'CRHS parking - Senior Lot';

  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>Senior Lot</h3>
        <center>
          <div class="map-senior-container">
            <div class="map-button"></div> <!--this is what an empty spot would look like-->
            <div class="map-button" style="top:51%;left:52.4%;"><div class="map-popup"></div></div>
          </div>
        </center>
      </div>
    </div>
    <?php
  }
}
 ?>

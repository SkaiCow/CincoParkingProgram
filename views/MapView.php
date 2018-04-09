<?php
class MapView extends StudentsPageView
{
  protected $title = 'CRHS parking - Senior Lot';

  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>Senior Lot</h3>
        <center><!--we need to find out how we want to put in all these lots, manualy? or auto mate some of it then tweek...
        i think maybe a lot of these lots are spaced out by 1.8% so add that to ever lot you add on, but they might run off after so many spots.
      -->
          <div class="map-<?= $_GET['do']?>-container">
            <div class="map-button" style="top:51%;left:50.6%;" id="1623"><div class="map-popup"><div>1623</div></div></div> <!--this is what an empty spot would look like-->
            <div class="map-button" style="top:51%;left:52.4%;" id="1624"><div class="map-popup"><div>1624</div></div></div>
            <div class="map-button" style="top:51%;left:54.2%;" id="1625"><div class="map-popup"><div>1625</div></div></div>
          </div>
        </center>
      </div>
    </div>
    <?php
  }
}
 ?>

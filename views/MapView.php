<?php
class MapView extends StudentsPageView
{
  protected $title = 'CRHS parking - Senior Lot';

  protected function renderBody()
  {
    $spots = (new MapDatabaseModel())->getAllFromLot($_GET['do']);
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>Senior Lot</h3>
        <center>
          <div class="map-<?= $_GET['do']?>-container">
            <?php
              foreach($spots as $spot)
              {
            ?>
                <div class="map-button" style="top:51%;left:50.6%;" id="1623"><div class="map-popup"><div>1623</div></div></div>
            <?php
              }
            ?>
            <div class="map-button" style="top:51%;left:50.6%;" id="1623"><div class="map-popup"><div>1623</div></div></div> <!--this is what an empty spot would look like-->
          </div>
        </center>
      </div>
    </div>
    <?php
  }
}
 ?>

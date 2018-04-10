<?php
class MapView extends StudentsPageView
{
  protected $title = 'CRHS parking - Senior Lot';

  protected function renderBody()
  {
    //$spots = (new MapDatabaseModel())->getAllFromLot($_GET['do']);
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>Senior Lot</h3>
        <center>
          <div class="map-<?= $_GET['do']?>-container">
            <!--
            <?php
              foreach($spots as $spot)
              {
                if($spot['statues'] == 0)
                {
            ?>
                <div class="map-button" style="top:<?= $spot['pos_y']?>%;left:<?= $spot['pos_x']?>%;width:<?= $spot['width']?>%;height:<?= $spot['height']?>%;" id="<?= $spot['spot_number']?>">
                  <div class="map-popup">
                    <div><?= $spot['spot_number']?></div>
                  </div>
                </div>
            <?php
                }
                else()
                {
            ?>
              <div class="map-car-<?= $spot['color']?>"  style="top:<?= $spot['pos_y']?>%;left:<?= $spot['pos_x']?>%;width:<?= $spot['width']?>%;height:<?= $spot['height']?>%;"></div>
            <?php
                }
              }
<<<<<<< HEAD
            ?>-->
            <div class="map-button" style="top:51%;left:50.6%;" id="1623"><div class="map-popup"><div>1623</div></div></div> <!--this is what an empty spot would look like-->
=======
            ?>
            <!--
            <div class="map-button" style="top:51%;left:55.6%;" id="1623"><div class="map-popup"><div>1623</div></div></div> this is what an empty spot would look like
            -->
>>>>>>> 0bd9502cc3e985e7e398efc9bf3833fecc76ce8f
          </div>
        </center>
      </div>
    </div>
    <?php
  }
}
 ?>

<?php
class MapView extends StudentsPageView
{

  protected $title = 'CRHS parking - Lots';

  protected function renderBody()
  {
    $lot = $_GET['do'];
    $spots = (new MapDatabaseModel())->getAllFromLot($lot);
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3><?= ucfirst(substr($lot,0,strlen($lot)-3))?> Lot</h3>
        <center>
          <div class="map-overflow">
            <div class="map-hover" onclick="gotohub()">
              <div class="map-back">
                <img src="/images/back.png" width="auto" height="auto">
                Back
              </div>
            </div>
            <div class="map-crop">
              <div class="map-<?= $lot?>-container">
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
                    else
                    {
                      ?>
                      <img src="/images/cars/<?= $spot['color']?>car.png" class="map-car"  style="top:<?= $spot['pos_y']?>%;left:<?= $spot['pos_x']?>%;width:<?= $spot['width']+.4?>%;height:<?= $spot['height']+.2?>%;">
                      <?php
                    }
                  }
                  ?>

                    <div class="map-button" style="top:42.4%;left:14.3%;width:1%;height:2.9%;" id="1623"><div class="map-popup"><div>1623</div></div></div>
                    <div class="map-button" style="top:3.8%;left:39.25%;width:1.6%;height:5.5%;" id="1623"><div class="map-popup"><div>1623</div></div></div>
                  </div>

              </div>
            </div>
          </div>
        </center>
        <button id="addrowbutton">enter row</button>
        <button id="editrowbutton">edit row</button>
      </div>
    </div>
    <?php
  }
}
 ?>

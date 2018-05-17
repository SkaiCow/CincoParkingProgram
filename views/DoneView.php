<?php
class DoneView extends StudentsPageView
{
  protected $title = 'CRHS parking - Finished';

  protected function renderBody()
  {
  $student = (new StudentsDatabaseModel())->getStudent(Session::getid());
  $spot = (new MapDatabaseModel())->getSpotByStudent(Session::getid());
?>
    <div class="defaults-page">
      <div class="defaults-container">
        <div class="done-info-container">
          <h3>Confirm Your Info</h3>
          <div class="Info-container">
            <h3>Your spot Number:</h3>
            <h2>
              <?= $spot['spot_number']?>
              <div class="info-button-edit" id="edit" onclick="changeSpot()"><center><h4 class="info-edit">Edit</h4></center></div>
            </h2>
            <h4>Student Info</h4>
            <ul>
              <li><p>First name: <b><?= $student['name_first']?></b></p></li>
              <li><p>Last name: <b><?= $student['name_last']?></b></p></li>
              <li><p>Student ID: <b><?= $student['student_id']?></b></p></li>
              <li><p>Grade Level: <b><?= $student['grade']?></b></p></li>
            </ul>
            <h4>Spot Info</h4>
            <ul>
              <li><p>Spot name: <b><?= $student['name_spot']?></b></p></li>
              <!--<li><p>Sticker Number: <b><?= $student['sticker_number']?></b></p></li>-->
            </ul>
            <h4>Car Info</h4>
            <ul>
              <li><p>Car Color: <b><?= $student['car_color']?></b></li>
                <li><p>Make: <b><?= $student['car_make']?></b></p></li>
                <li><p>Model: <b><?= $student['car_model']?></b></p></li>
                <li><p>Year: <b><?= $student['car_year']?></b></p></li>
                <li><p>License Plate Number: <b><?= $student['car_license']?></b></p></li>
            </ul>
            <div>
              <div class="info-button" id="confirm" onclick="askForApproval()"><center><h4 class="info-enter">Confirm</h4></center></div>
              <div class="info-button-edit" id="edit" onclick="resetInfo()"><center><h4 class="info-edit">Edit</h4></center></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }
}

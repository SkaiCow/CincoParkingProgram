<?php
class DoneView extends StudentsPageView
{
  protected $title = 'CRHS parking - Finished';

  protected function renderBody()
  {
  $student = (new StudentsDatabaseModel())->getStudentInfo("l1006823"/*put the student's season's id here*/);
?>
    <div class="defaults-page">
      <div class="defaults-container">
        <div class="done-info-container">
          <h3>Confirm Your Info</h3>
          <div class="Info-container">
            <h4>Student Info</h4>
            <ul>
              <li><p>First name: <b><?= $student['first_name']?></b></p></li>
              <li><p>Last name: <b><?= $student['last_name']?></b></p></li>
              <li><p>Student ID: <b><?= $student['student_id']?></b></p></li>
              <li><p>Grade Level: <b><?= $student['grade']?></b></p></li>
            </ul>
            <h4>Spot Info</h4>
            <ul>
              <li><p>Spot name: <b><?= $student['spot_name']?></b></p></li>
              <li><p>Spot name: <b><?= $student['spot_num']?></b></p></li>
              <li><p>Sticker Number: <b><?= $student['sticker_num']?></b></p></li>
            </ul>
            <h4>Car Info</h4>
            <ul>
              <li><p>Car Color: <b><?= $student['color']?></b></li>
                <li><p>Make: <b><?= $student['make']?></b></p></li>
                <li><p>Model: <b><?= $student['model']?></b></p></li>
                <li><p>Year: <b><?= $student['year']?></b></p></li>
                <li><p>License Plate Number: <b><?= $student['license_num']?></b></p></li>
            </ul>
            <div class="help">
              <div class="info-button" id="confirm"><center><h4 class="info-enter">Confirm</h4></center></div>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php
  }
}

<?php

class UsersView extends AdminPageView
{
  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>Add student to list</h3>
        <div class="users-add-container">
          <center>
            <table class="users-add-table">
              <tr class="user-add-tr">
                <th>First Name</th>
                <th>Last Name</th>
                <th>Grade</th>
                <th>Stutent ID</th>
                <th>Spot Name</th>
                <th>Spot Number</th>
                <th>Sticker Number</th>
                <th>Car Color</th>
                <th>Car Make</th>
                <th>Car Model</th>
                <th>Car Year</th>
                <th>License Number</th>
              </tr>
              <tr class="user-add-tr">
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
                <td><input type="text"></td>
              </tr>
            </table>
            <div class="users-enter">
              <img src="/images/right-icon.png" height="50px" width="50px"></img>
            </div>
          </center>
        </div>
        <h3>View student list</h3>
        <table class="users-table">
          <tr class="users-table-header">
            <th></th>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Grade</th>
            <th>Stutent ID</th>
            <th>Spot Name</th>
            <th>Spot Number</th>
            <th>Sticker Number</th>
            <th>Car Color</th>
            <th>Car Make</th>
            <th>Car Model</th>
            <th>Car Year</th>
            <th>License Number</th>
          </tr>
            <?php
            $users = (new StudentsDatabaseModel())->getAllStudents();
            foreach ($users as $user) {
            ?>
            <tr class="users-table-row">
              <td class="users-edit"><img src="/images/tool.png" height="20px" width="20px"></img></td>
              <td><?= $user['name_first']?></th>
              <td><?= $user['name_last']?></th>
              <td>hey we need this</th>
              <td><?= $user['student_id']?></th>
              <td><?= $user['name_spot']?></th>
              <td>624</th>
              <td><?= $user['sticker_number']?></th>
              <td><?= $user['car_color']?></th>
              <td><?= $user['car_make']?></th>
              <td><?= $user['car_model']?></th>
              <td><?= $user['car_year']?></th>
              <td><?= $user['car_license']?></th>
            </tr>
            <?php
            }
            ?>
        </table>
      </div>
    </div>
    <?php
  }
}

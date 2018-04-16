<?php

class UsersView extends AdminPageView
{
  protected function renderBody()
  {
    $users = (new StudentsDatabaseModel())->getAllStudents();
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
            foreach ($users as $user) {
            ?>
            <tr class="users-table-row">
              <td class="users-edit"><img src="/images/tool.png" height="20px" width="20px"></img></td>
              <td><?= $user['first_name']?></th>
              <td><?= $user['last_name']?></th>
              <td><?= $user['grade']?></th>
              <td><?= $user['student_id']?></th>
              <td><?= $user['spot_name']?></th>
              <td><?= $user['spot_num']?></th>
              <td><?= $user['sticker_num']?></th>
              <td><?= $user['color']?></th>
              <td><?= $user['make']?></th>
              <td><?= $user['model']?></th>
              <td><?= $user['year']?></th>
              <td><?= $user['license_num']?></th>
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

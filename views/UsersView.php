<?php

class UsersView extends PageView
{
  protected function renderBody()
  {
    $users = (new StudentsDatabaseModel())->getAllStudents();
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>View student list</h3>
        <table class="users-table">
          <tr class="users-table-header">
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
          <tr class="users-table-row">
            <?php
            foreach ($users as $user) {
            ?>
              <td><?= $user['first_name']?></th>
              <td><?= $user['last_name']?></th>
              <td><?= $user['grade']?></th>
              <td><?= $user['student_id']?></th>
              <td><?= $user['spot_name']?></th>
              <td><?= $user['spot_num']?></th>
              <td class="".<?php ($user['sticker_num']==null)?'user-blank' ?>><?= $user['sticker_num']?></th>
              <td><?= $user['color']?></th>
              <td><?= $user['make']?></th>
              <td><?= $user['model']?></th>
              <td><?= $user['year']?></th>
              <td><?= $user['license_num']?></th>
            <?php
            }
            ?>
          </tr>
        </table>
      </div>
    </div>
    <?php
  }
}

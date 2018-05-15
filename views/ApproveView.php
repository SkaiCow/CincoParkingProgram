<?php

class ApproveView extends AdminPageView
{
  protected function renderBody()
  {
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h3>List of Spots to approve of:</h3>
        <div class="enterId-container">
          <?php
            $requests = (new AdminDatabaseModel())->getApproveRequests();
            if($requests == 'none')
            {
              echo "<h4>there are no requesting approvals<br>Keep up the good work!</h4>";
            }
            else
            {
              ?>
            <table class="approve-table">
              <tr class="approve-table-heading">
                <th>Student name</th>
                <th>Grade</th>
                <th>Spot Number</th>
                <th>Spot Name</th>
                <th>Approval</th>
              </tr>
            <?php
              foreach ($requests as $student) {
                $spot = (new MapDatabaseModel())->getSpotByStudent($student['student_id']);
                ?>
                <tr class="approve-table-body">
                  <td><?= $student['name_first']?> <?= $student['name_last']?></td>
                  <td><?= $student['grade']?></td>
                  <td><?= $spot['spot_number']?></td>
                  <td><?= $student['name_spot']?></td>
                  <td>
                    <div class="approve-yes" id="<?= $student['student_id']?>">
                      <center>
                        Yes
                      </center>
                    </div>
                    <div class="approve-no" id="<?= $student['student_id']?>">
                      <center>
                        No
                      </center>
                    </div>
                  </td>
                </tr>
                <?php
              }
              ?>
              </table>
              <?php
            }
          ?>

        </div>
      </div>
    </div>
    <script>
      setTimeout(function() {
        window.location.reload();
      }, 5000);
    </script>
    <?php
  }
}
?>

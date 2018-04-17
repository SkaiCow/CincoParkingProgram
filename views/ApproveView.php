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
            var_dump($requests);
            if($requests == 'none')
            {
              echo "<h4>there are no requesting approvals<br>Keep up the good work!</h4>";
            }
            else
            {
              foreach ($requests as $student) {
                //put things here for the approval
              }
            }
          ?>
        </div>
      </div>
    </div>
    <?php
  }
}
?>

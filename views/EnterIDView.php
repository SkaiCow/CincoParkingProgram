<?php
class EnterIDView extends PageView
{
  protected function renderBody()
  {
    $studentIDs = (new AdminDatabaseModel())->getAuthorizedID();
    ?>
    <div class="defaults-page">
      <div class="defaults-container">
        <h2>Enter Student ID Page</h2>
        <div class="enterId-container">
          <h3>Add student to list</h3>
          <form action="/Admin/?p=enterID&do=submit" method="post">
            <input class="enterID-input" placeholder="A1000000" name="ID"><input type="submit" value="Submit">
          </form><br>
        </div>
        <div class="enterId-container">
          <h4>Students in list</h4><br>
          <?php
            foreach ($studentIDs as $id) {
              ?>
                <p><?= $id['student_id']?></p>
              <?php
            }
           ?>
        </div>
      </div>
    </div>
    <?php
  }
}
 ?>

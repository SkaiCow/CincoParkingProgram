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
          <form id="enterid-form">
            <input class="enterID-input" placeholder="A1000000" id="ID">
            <input type="submit" value="Submit">
          </form><br>
        </div>
        <div class="enterId-container" style="padding-bottom:20px;">
          <h4>Students in list</h4><br>
          <table class="enterID-entry-table">
            <?php
              foreach ($studentIDs as $id) {
                ?>
                <tr class="enterID-entry-row">
                  <td><img src="/images/exit.png" height="20px" width="20px"></td>
                  <td><p><?= ucfirst($id['student_id'])?></p></td>
                </tr>
                <?php
              }
            ?>
          </table>
        </div>
      </div>
    </div>
    <?php
  }
}
 ?>

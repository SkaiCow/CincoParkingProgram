<?php
class WaitView extends StudentsPageView
{
  protected $title = 'CRHS parking - Wait';

  protected function renderBody()
  {
?>
    <div class="defaults-page">
      <div class="defaults-container">
        <div class="done-wait-container">
            <h3><img src="/images/loading_icon.gif" height="50px" width="auto"> Please Wait...</h3>
            <br>
            Your information is in review and waiting for approval.<br>
            Wait here until your spot has been approved and you see the <i>finished</i> screen.
        </div>
        <div class="done-confirmed-container">
          finished
          <!--make this look better in the future-->
        </div>
      </div>
    </div>
  <?php
  }
} ?>

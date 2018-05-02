<?php
class WaitView extends StudentsPageView
{
  protected $title = 'CRHS parking - Wait';

  protected function renderBody()
  {
?>
    <div class="defaults-page">
      <div class="defaults-container">
        <?php
        if((new StudentsDatabaseModel())->sessionIsdone() == 'FALSE')
        {
        ?>
        <div class="done-wait-container">
            <h3><img src="/images/Loading_icon.gif" height="50px" width="auto"> Please Wait...</h3>
            <br>
            Your information is in review and waiting for approval.<br>
            Wait here until your spot has been approved and you see the <i>finished</i> screen.
        </div>
        <script>
          setTimeout(function() {
            window.location.reload();
          }, 5000);
        </script>
        <?php
        }
        else
        {
        ?>
        <div class="done-confirmed-container">
          <h3>finished</h3>
          <h4>Thank you for reserving a parking spot. Make sure you park in the right spot!</h4>
          <!--make this look better in the future-->
        </div>
        <script>
          setTimeout(function() {
            window.location = "/?p=login&do=logout";
          }, 10000);
        </script>
        <?php
        }
        ?>
      </div>
    </div>
  <?php
  }
} ?>

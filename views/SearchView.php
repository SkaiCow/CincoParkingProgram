<?php
class EnterIDView extends AdminPageView
{
	protected function renderBody()
	{
		$students = (new StudentsDatabaseModel())->getStudentsInProgress(); ?>
		<div class="defaults-page">
			<div class="defaults-container">
        <h3>search for student</h3>
        <form method="post" action="/?p=search&do=submit">
          <input class="search-input" placeholder="A1000000" name="id" autofocus>
          <input type="submit" value="Submit">
        </form><br>
        <?php
          if($_GET['studentid'])
          {
            ?>
              
            <?php
          }
        ?>
      </div>
    </div>
  }
}

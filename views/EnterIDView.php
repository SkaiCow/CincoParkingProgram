<?php
class EnterIDView extends AdminPageView
{
	protected function renderBody()
	{
		$students = (new StudentsDatabaseModel())->getStudentsInProgress(); ?>
		<div class="defaults-page">
			<div class="defaults-container">
				<h2>Enter Student ID Page</h2>
				<div class="enterId-container">
					<h3>Add student to list</h3>
					<form id="enterid-form" method="post" action="/?p=enterID&do=submit">
						<input class="enterID-input" placeholder="A1000000" name="id" autofocus>
						<input type="submit" value="Submit" id="submit">
					</form><br>
				</div>
				<div class="enterId-view-container" style="padding-bottom:20px;">
					<?php
						if(isset($_GET['message']))
						{
					?>
						<div class="enterID-error"><p>
							<?php
								switch($_GET['message'])
								{
									case 'badid':
										echo("For some reason what you entered is not a valid ID number. Try entering it again, or putting it in manualy.");
									break;
									case 'noidenter':
										echo("umm... You didn't enter an id. Maybe try entering the id manualy.");
									break;
								}
							?>
						</p></div>
					<?php
						}
					?>
					<h4>Students in list </h4><br>
					<table class="enterID-entry-table">
						<?php
						if($students == 'none')
						{
							echo "<h4>No students are in progress.</h4>";
						}
						else
						{
							foreach ($students as $student)
							{ ?>
								<tr class="enterID-entry-row">
									<td><img src="/images/exit.png" height="20px" width="20px" class="enterID-kick" id="<?= $student['student_id']?>"></td>
									<td><p><?= ucfirst($student['student_id'])?></p></td>
								</tr>
								<?php
							}
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

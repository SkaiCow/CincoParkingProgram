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
						<input class="enterID-input" placeholder="A1000000" name="id">
						<input type="submit" value="Submit">
					</form><br>
				</div>
				<div class="enterId-view-container" style="padding-bottom:20px;">
					<h4>Students in list</h4><br>
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
									<td><img src="/images/exit.png" height="20px" width="20px"></td>
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

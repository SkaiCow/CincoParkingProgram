<?php
class EnterInfoView extends StudentsPageView
{
	protected $title = 'CRHS parking - Student Info';

	protected function renderBody()
	{
		?>
		<div class="defaults-page">
			<div class="defaults-container">
				<h3>Enter Your Info</h3>
				<div class="Info-container">
					<h4>Student Info</h4>
					<ul>
						<li><p>First name: <input placeholder="William"></p></li>
						<li><p>Last name: <input placeholder="Lasater"></p></li>
						<li><p>Student ID: <input value=<?= Session::$id ?> readonly></p></li>
					</ul>
					<h4>Spot Info</h4>
					<ul>
						<li><p>Spot name: <input placeholder="r3kle$s"></p></li>
						<li><p>Sticker Number: <input placeholder="1234567"></p></li>
					</ul>
					<h4>Car Info</h4>
					<ul>
						<li><p>Car Color:
							<select>
								<option>Blue</option>
								<option>Green</option>
								<option>Black</option>
								<option>Grey</option>
								<option>White</option>
								<option>Red</option>
								<option>Purple</option>
								<option>Yellow</option>
								<option>Orange</option>
							</select>
						</li>
						<li><p>Make: <input placeholder="Ford"></p></li>
						<li><p>Model: <input placeholder="Mustang"></p></li>
						<li><p>Year: <input placeholder="2018"></p></li>
						<li><p>License Plate Number: <input placeholder="morec02"></p></li>
					</ul>
					<div class="help">
					<div class="info-button"><center><h4 class="info-enter">Enter</h4></center></div>
				</div>
				</div>
			</div>
		</div>
		<?php
	}
}
 ?>

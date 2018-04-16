<?php
class EnterInfoView extends StudentsPageView
{
	protected $title = 'CRHS parking - Student Info';

	protected function renderBody()
	{
		?>
		<div class="defaults-page">
			<div class="defaults-container">
				<form action="/?p=students" method="post">
					<h3>Enter Your Info</h3>
					<div class="Info-container">
						<h4>Student Info</h4>
						<ul>
							<li><p>First name: <input name="name_first" placeholder="William"></p></li>
							<li><p>Last name: <input name="name_last" placeholder="Lasater"></p></li>
							<li><p>Student ID: <input value=<?= Session::$id ?> readonly></p></li>
						</ul>
						<h4>Spot Info</h4>
						<ul>
							<li><p>Spot name: <input name="name_spot" placeholder="r3kle$s"></p></li>
							<li><p>Sticker Number: <input name="sticker_number" placeholder="1234567"></p></li>
						</ul>
						<h4>Car Info</h4>
						<ul>
							<li><p>Car Color:
								<select name="car_color">
									<option value="Blue">Blue</option>
									<option value="Green">Green</option>
									<option value="Black">Black</option>
									<option value="Grey">Grey</option>
									<option value="White">White</option>
									<option value="Red">Red</option>
									<option value="Purple">Purple</option>
									<option value="Yellow">Yellow</option>
									<option value="Orange">Orange</option>
								</select>
							</p></li>
							<li><p>Make: <input name="car_make" placeholder="Ford"></p></li>
							<li><p>Model: <input name="car_model" placeholder="Mustang"></p></li>
							<li><p>Year: <input name="car_year" placeholder="2018"></p></li>
							<li><p>License Plate Number: <input name="car_license" placeholder="morec02"></p></li>
						</ul>
						<div class="help">
							<div class="info-button"><center><h4 class="info-enter">Enter</h4></center></div>
						</div>
					</div>
				</form>	
			</div>
		</div>
		<?php
	}
}
 ?>

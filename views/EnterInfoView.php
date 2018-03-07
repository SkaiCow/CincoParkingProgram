<?php
class EnterInfoView extends StudentsView
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
            <li><p>Student ID: <input placeholder="A1000000"></p></li>
          </ul>
          <h4>Spot Info</h4>
          <ul>
            <li><p>Spot name: <input placeholder="Kool kid"></p></li>
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
            <li><p>Make: <input placeholder="Nessan"></p></li>
            <li><p>Model: <input placeholder="Sentra"></p></li>
            <li><p>Year: <input placeholder="2036"></p></li>
            <li><p>License Plate Number: <input placeholder="1234567"></p></li>
          </ul>
          <div class="help">
          <div class="info-button"><h4 class="info-enter">Enter</h4></div>
        </div>
        </div>
      </div>
    </div>
    <?php
  }
}
 ?>

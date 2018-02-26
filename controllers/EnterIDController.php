<?php
class EnterIDController extends Controller
{
  public function adminDisplay()
  {
    (new EnterIDView())->render();
  }
}
 ?>

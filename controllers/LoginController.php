<?php

class LoginController extends Controller
{
  public function display()
  {
    (new StudentLoginView())->render();
  }

  public function adminDisplay()
  {
    (new AdminLoginView())->render();
  }

}

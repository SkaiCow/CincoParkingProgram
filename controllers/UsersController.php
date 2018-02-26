<?php

class UsersController extends Controller
{
  public function adminDisplay()
  {
    (new UsersView())->render();
  }

}

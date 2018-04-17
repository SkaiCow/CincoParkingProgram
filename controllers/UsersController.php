<?php

class UsersController extends Controller
{
  public function display()
  {
    (new UsersView())->render();
  }

}

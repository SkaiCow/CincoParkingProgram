<?php

class StartController extends Controller
{
  public function display()
  {
    (new StartView())->render();
  }

}

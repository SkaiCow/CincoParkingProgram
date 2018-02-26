<?php

class StartController extends Controller
{
  public function adminDisplay()
  {
    (new StartView())->render();
  }

}

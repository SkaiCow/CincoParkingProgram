<?php

class ColorController extends Controller
{
  public function adminDisplay()
  {
    (new ColorView())->render();
  }

}

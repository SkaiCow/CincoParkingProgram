<?php

class ColorController extends Controller
{
  public function display()
  {
    (new ColorView())->render();
  }

}

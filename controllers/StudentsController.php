<?php

class StudentsController extends Controller
{
  public function display()
  {
    (new EnterInfoView())->render();
  }
}

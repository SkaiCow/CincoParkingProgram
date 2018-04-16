<?php

class StudentsController extends Controller
{
  public function display()
  {
    (new EnterInfoView())->render();
  }
  public function done()
  {
    (new DoneView())->render();
  }
  public function wait()
  {
    (new WaitView())->render();
  }
}

<?php

class ApproveController extends Controller
{
  public function adminDisplay()
  {
    (new ApproveView())->render();
  }

}

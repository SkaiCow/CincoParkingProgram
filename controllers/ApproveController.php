<?php

class ApproveController extends Controller
{
  public function display()
  {
    (new ApproveView())->render();
  }

  public function approve()
  {
    (new AdminDatabaseModel())->approve($_POST['student_id']);
  }

}

<?php

class ApproveController extends Controller
{
  public function display()
  {
  	if(Session::isAdmin())
    	(new ApproveView())->render();
    else
    	header("Location: /?p=login");
  }

  public function approve()
  {
  	if(Session::isAdmin())
    {
      (new AdminDatabaseModel())->approve($_POST['student_id']);
      $student = (new StudentsDatabaseModel())->getStudent($_POST['student_id']);
      (new AdminDatabaseModel())->takeSpotById($_POST['student_id']);
    }
    else
    	header("Location: /?p=login");
  }
  public function deny()
  {
  	if(Session::isAdmin())
    	(new AdminDatabaseModel())->deny($_POST['student_id']);
    else
    	header("Location: /?p=login");
  }

}

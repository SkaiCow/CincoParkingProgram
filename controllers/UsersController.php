<?php

class UsersController extends Controller
{
  public function display()
  {
    if(Session::isAdmin())
      (new UsersView())->render();
    else
    		header("Location: /?p=login");
  }

  public function downloadcsv()
  {
    if(Session::isAdmin())
    {
      header('Content-Type: text/csv');
      header('Content-Disposition: attachment; filename="ParkingStudentsList.csv"');
      $students = (new StudentsDatabaseModel())->getAllStudents();
      $file = fopen("php://output","w");
      fputcsv($file,array("Spot Number","First Name","Last Name","Grade","Student ID","Spot Name","Sticker Number","Car Color","Car make","Car Model","Car Year","License Plate"));
      foreach ($students as $student)
      {
        $spot = (new MapDatabaseModel())->getSpotByStudent($student['student_id']);
        $data = array(($spot['spot_number'] == null) ? "No-spot":$spot['spot_number'],$student['name_first'],$student['name_last'],$student['grade'],$student['student_id'],$student['name_spot'],$student['sticker_number'],$student['car_color'],$student['car_make'],$student['car_model'],$student['car_year'],$student['car_license']);
        fputcsv($file,$data);
      }
      fclose($file);
      echo $file;
    }
    else
    		header("Location: /?p=login");

  }

}

<?php

class MapController extends Controller
{
  public function display()
  {
    if(Session::isLoggedIn())
    {
      if(!Session::isAdmin())
      {
        //evaluate a condition to make sure the user hasn't already selected a spot
        (new MapHubView())->render();
      }
      else
        header("Location: /?p=error&message=adminnostudentpage");
    }
    else
    {
      header("Location: /?p=login");
    }
  }
  public function seniorlot()
  {
    (new MapView())->render();
  }
  public function sophomorelot()
  {
    (new MapView())->render();
  }
  public function paclot()
  {

    (new MapView())->render();
  }
  public function athleticlot()
  {
    (new MapView())->render();
  }
  public function addRow()
  {
    (new MapDatabaseModel())->addRowToDB($_POST['x'],$_POST['y'],$_POST['width'],$_POST['height'],$_POST['spot_num'],$_POST['num_of_spots'],$_POST['spacing']);
  }
}

<?php

class MapController extends Controller
{
  public function display()
  {
    if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
        if(Session::getStudent()['name_first'] == "none-entered")
          header("location: /?p=students");
        else
          (new MapHubView())->render();
      }
      else
      {
        header("Location: /?p=error&message=adminnostudentpage");
      }
    }
    else
	  {
		  header("Location: /?p=login");
	  }
  }
  public function seniorlot()
  {
    if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
        if(Session::getStudent()['name_first'] == "none-entered")
          header("location: /?p=students");
        else
          (new MapView())->render();
      }
      else
      {
        header("Location: /?p=error&message=adminnostudentpage");
      }
    }
    else
	  {
		  header("Location: /?p=login");
	  }
  }
  public function sophomorelot()
  {
    if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
        if(Session::getStudent()['name_first'] == "none-entered")
          header("location: /?p=students");
        else
          (new MapView())->render();
      }
      else
      {
        header("Location: /?p=error&message=adminnostudentpage");
      }
    }
    else
	  {
		  header("Location: /?p=login");
	  }
  }
  public function paclot()
  {
    if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
        if(Session::getStudent()['name_first'] == "none-entered")
          header("location: /?p=students");
        else
          (new MapView())->render();
      }
      else
      {
        header("Location: /?p=error&message=adminnostudentpage");
      }
    }
    else
	  {
		  header("Location: /?p=login");
	  }
  }
  public function athleticlot()
  {
    if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
        if(Session::getStudent()['name_first'] == "none-entered")
          header("location: /?p=students");
        else
          (new MapView())->render();
      }
      else
      {
        header("Location: /?p=error&message=adminnostudentpage");
      }
    }
    else
	  {
		  header("Location: /?p=login");
	  }
  }

  public function requestSpot($spot_num, $ID, $color)
  {
    $spot = (new MapDatabaseModel())->getSpotByNumber($spot_num);
    if($spot['statues'] == 0)
    {
      (new MapDatabaseModel())->requestSpot($spot_num, $ID, $color);
      header("location: /?p=wait");
    }
    else
    {
      header("Refresh:0");
    }
  }

  public function addRow()
  {
    if(Session::isAdmin())
    {
      (new MapDatabaseModel())->addRowToDB($_POST['x'],$_POST['y'],$_POST['width'],$_POST['height'],$_POST['spot_num'],$_POST['num_of_spots'],$_POST['spacing']);
    }
  }
  public function editRow()
  {
    if(Session::isAdmin())
    {
      (new MapDatabaseModel())->editRowInDB($_POST['start'],$_POST['finish'],$_POST['x_add'],$_POST['y_add'],$_POST['width_add'],$_POST['height_add']);
    }
  }
}

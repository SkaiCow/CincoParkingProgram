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
					header("Location: /?p=students");
				else
					if((new MapDatabaseModel())->hasSpot(Session::getId()))
						header("Location: /?p=students&do=done");
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

	public function requestspot()
	{
		$spot = (new MapDatabaseModel())->getSpotByNumber($_POST['spot_num']);
		if($spot['statues'] == 0)
		{
			$student = (new StudentsDatabaseModel())->getStudent(Session::getid());
			(new MapDatabaseModel())->requestSpot($spot['spot_number'], Session::getid(), $student['car_color']);
		}
		else
		{
			header("Location: /?p=error&message=spotalreadychosen");
		}
	}

	public function addRow()
	{
		//if(Session::isAdmin())
		//{
			(new MapDatabaseModel())->addRowToDB($_POST['x'],$_POST['y'],$_POST['width'],$_POST['height'],$_POST['spot_num'],$_POST['num_of_spots'],$_POST['spacing'],$_POST['lot']);
		//}
	}
	public function editRow()
	{
		if(Session::isAdmin())
		{
			(new MapDatabaseModel())->editRowInDB($_POST['start'],$_POST['finish'],$_POST['x_add'],$_POST['y_add'],$_POST['width_add'],$_POST['height_add']);
		}
	}

	public function takespots()
  {
    $colors = array("white","red","blue","pink","orange","silver","green","violet","black","indigo","tan","yellow");
    for($i = $_POST['start']; $i <= $_POST['finish']; $i++)
      (new AdminDatabaseModel())->takeSpot($i,$colors[rand(0,11)]);
  }

	public function openspot()
	{
		for($i = $_POST['start']; $i <= $_POST['finish']; $i++)
      (new AdminDatabaseModel())->openSpot($i);
	}
}

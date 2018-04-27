<?php

class StudentsController extends Controller
{
	public function display()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
				if(Session::getStudent()['name_first'] == "none-entered")
					(new EnterInfoView())->render();
				else
					header("Location: /?p=map");
			}
			else
				header("Location: /?p=error&message=adminnostudentpage");
		}
		else
		{
			header("Location: /?p=login");
		}
	}

	public function done()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
				if(Session::getStudent()['name_first'] == "none-entered")
					header("Location: /?p=students");
				else
					if((new MapDatabaseModel())->hasSpot(Session::getId()))
						if(Session::getStudent()['approved'] == 1)
							header("Location: /?p=students&do=wait");
						else
							(new DoneView())->render();
					else
						header("Location: /?p=map");
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

	public function askforapproval()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
				//check if the student has a spot and his info
				(new StudentsDatabaseModel())->askForApproval(Session::getId());
				header("Location: /?p=students&do=wait");
			}
		}
	}

	public function wait()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
				$student = (new StudentsDatabaseModel())->getStudent(Session::getId());
				if($student['approved'] == 1)
				{
					(new WaitView())->render();
				}
				else if($student['approved'] == 2)
				{
					Session::logout();
					?>
						Your reservation has been confirmed! New Form: <a href="/?p=login">Start</a>
					<?php
				}
				else
				{
					header("Location: /?p=students");
				}
			}
		}
	}

	public function resetinfo()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
				(new StudentsDatabaseModel())->resetInfo();
				header("Location: /?p=students");
			}
		}
	}

	public function enterInfo()
	{
		$info = array();

		foreach($_POST as $key => $value)
		{
			if($value != '')
				$info[$key] = $value;
			else
			{
				header("Location: /?p=error&message=nostudentinfo");
			}
		}

		foreach($info as $key => $value)
		{
			(new StudentsDatabaseModel())->editStudent(Session::getId(), $key, $value);
		}
		header("Location: /?p=map");
	}
}

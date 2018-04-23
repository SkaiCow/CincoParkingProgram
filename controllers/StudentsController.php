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
				//check for if you need to wait
				(new DoneView())->render();
			}
		}
	}

	public function wait()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
			{
				$student = (new StudentsDatabaseModel())->getStudent(Session::getid());
				if($student['approved'] == 1)
				{
					(new WaitView())->render();
				}
				else
				{
					header("location: /?p=students");
				}
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

<?php

class StudentsController extends Controller
{
<<<<<<< HEAD
	public function display()
	{
		if(Session::isLoggedIn())
		{
			if(!Session::isAdmin())
				(new EnterInfoView())->render();
			else
				header("Location: /?p=error&message=adminnostudentpage");
		}
		else
		{
			header("Location: /?p=login");
		}
	}

	public function enterInfo()
	{

	}
=======
  public function display()
  {
    (new EnterInfoView())->render();
  }
  public function done()
  {
    (new DoneView())->render();
  }
>>>>>>> a85c0baafa3adcb837b343bf416ff8bb805f5c1b
}

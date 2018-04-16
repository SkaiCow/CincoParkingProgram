<?php

class StudentsController extends Controller
{
<<<<<<< HEAD
  public function display()
  {
    (new EnterInfoView())->render();
  }
  public function done()
  {
    (new DoneView())->render();
  }
  public function wait()
  {
    (new WaitView())->render();
  }
=======
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
>>>>>>> ba63d8e4103ece5781fd1a9109c24d59144512c7
}

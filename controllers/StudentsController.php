<?php

class StudentsController extends Controller
{
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
}

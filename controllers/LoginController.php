<?php

class LoginController extends Controller
{
	public function display()
	{
		echo Session::isLoggedIn();
		if(!Session::isLoggedIn())
			(new StudentLoginView())->render();
		else
		{
			if(Session::isAdmin())
				header("Location: /?p="); //wherever the admin page is
			else
				header("Location: /?p=students");
		}
	}

	public function adminDisplay()
	{
		if(!Session::isLoggedIn())
			(new AdminLoginView())->render();
		else
		{
			if(Session::isAdmin())
				header("Location: /?p="); //wherever the admin page is
			else
				header("Location: /?p=students");
		}
	}

	public function logout()
	{
		if(Session::isAdmin())
		{
			Session::logout();
			header("Location: /?p=login");
		}
		else
		{
			Session::logout();
			header("Location: /admin");
		}
	}

	public function login()
	{
		if(!isset($_POST['id']))
			header("Location: /?p=error&message=nousername");

		$student = (new StudentsDatabaseModel())->getStudent($_POST['id']);

		if($student['student_id'] == $_POST['id'])
		{
			Session::login($_POST['id']);
			header("Location: /?p=students");
		}
		else
		{
			header("Location: /?p=error&message=incorrectusername");
		}
	}

	public function loginAdmin()
	{
		if(!isset($_POST['password']))
			header("Location: /?p=error&message=nopassword");

		if($_POST['password'] == $GLOBALS['config']->get('admin'))
		{
			Session::login($_POST['password']);
			header("Location: /?p="); //whatever the admin page is
		}
		else
		{
			header("Location: /?p=error&message=incorrectpassword");
		}
	}
}

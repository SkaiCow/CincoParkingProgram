<?php
class Session
{
	public static $id;

	public static function setup()
	{
		session_start();

		if(isset($_SESSION['id']))
		{
			self::$id = $_SESSION['id'];
		}
	}

	public static function isAdmin()
	{
		return self::$id == $GLOBALS['config']->get('admin');
	}

	public static function isLoggedIn()
	{
		return isset($_SESSION['id']);
	}

	public static function getId()
	{
		return self::$id;
	}

	public static function getStudent()
	{
		return (new StudentsDatabaseModel())->getStudent(self::$id);
	}

	public static function logout()
	{
		self::$id = null;
		unset($_SESSION['id']);
	}

	public static function login($id)
	{
		self::$id = $id;
		$_SESSION['id'] = $id;
	}
}

<?php
/*
All web page requests pass through this file. It sets up some environment things that all pages need, and then chooses the
proper controller object to route the request through by the 'controller' query string element.
*/
$startTime = microtime(true);

//tell PHP to use UFT-8 character encoding
ini_set('default_charset', 'utf-8');

//tell PHP to always use the CST timezone
ini_set('date.timezone', 'America/Chicago');

//record the path for all files (one step up from public_html).
$fileRoot = $_SERVER['DOCUMENT_ROOT'] . '/../';

function autoload($class) {
	$fileRoot = $GLOBALS['fileRoot'];

	if (strstr($class, 'View') === 'View') {
		$includeFolder = '/views/';
	} else if (strstr($class, 'Model') === 'Model') {
		$includeFolder = '/models/';
	} else if (strstr($class, 'Controller') === 'Controller') {
		$includeFolder = '/controllers/';
	} else {
		$includeFolder = '/classes/';
	}

	if(file_exists($fileRoot . $includeFolder . $class . '.php')) {
		include ($fileRoot . $includeFolder . $class . '.php');
	}
}


//tell PHP to use our autoload function ^
spl_autoload_register('autoload');

Session::setup();
//create a Configuration object to load config.ini
$config = new Configuration($fileRoot . 'config.ini');

//set up and load session information (such as the logged in user)
//Session::setup();

$controller = isset($_GET['p']) ? $_GET['p'] : 'login';
$action = isset($_GET['do']) ? $_GET['do'] : 'display';

switch ($controller)
{
	case 'start':
		(new StartController($action))->executeAction();
		break;
	case 'color':
		(new ColorController($action))->executeAction();
		break;
	case 'user':
		(new UsersController($action))->executeAction();
		break;
	case 'enterID':
		(new EnterIDController($action))->executeAction();
		break;
	case 'login':
		(new LoginController($action))->executeAction();
		break;
	case 'approve':
		(new ApproveController($action))->executeAction();
		break;

	//students pages
	case 'students':
		(new StudentsController($action))->executeAction();
		break;
	case 'map':
		(new MapController($action))->executeAction();
		break;
	case 'error':
		switch($_GET['message'])
		{
			case 'adminnostudentpage':
				echo "Administrators cannot visit student information-entry pages!";
				break;
			case 'incorrectusername':
				echo "This student id is not in the database. Go back and enter it correctly, or ask if your id was entered.";
				break;
			case 'nousername':
				echo "You did not enter a username. Go back and try again.";
				break;
			case 'incorrectpassword':
				echo "The administrator password you used was incorrect. Go back and try again.";
				break;
			case 'nostudentinfo':
				echo "You must fill out all data-fields for the Student Information form. Go back and fill them out.";
				break;
			case 'incorrectpassword':
				echo "The administrator password you used was incorrect. Go back and try again.";
				break;
			case 'noidenter':
				echo "You did not enter an ID into the form. Go back and try again.";
				break;
			case 'badid':
				echo "This ID is invalid or has been used already. Go back and try again.";
				break;
		}
		break;
}

$length = microtime(true) - $startTime;
//echo '<!-- ' . $length * 1000 . ' ms -->';
//$length now contains the time in milliseconds the page took to load. This may be useful somehow...

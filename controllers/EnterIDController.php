<?php
class EnterIDController extends Controller
{
	public function display()
	{
		if(Session::isAdmin())
			(new EnterIDView())->render();
		else
    		header("Location: /?p=login");
	}

	public function submit()
	{
		if($_POST["id"] != "")
		{
			$id = $_POST["id"];
			lcfirst($id);
			trim($id," ");
			$goodID = TRUE;
			if(!ctype_alpha($id[0]))
			{
				$goodID = FALSE;
			}

			for($i = 1; $i < strlen($id); $i++)
			{
				$char = $id[$i];
				if(!is_numeric($char))
				{
					$goodID = FALSE;
				}
			}

			if(strlen($id) != 8)
			{
				$goodID = FALSE;
			}

			if((new StudentsDatabaseModel())->getStudent($id)['student_id'] == $id)
			{
				$goodID = FALSE;
			}
			echo $goodID == FALSE ? "False" : "True";
			
			if($goodID)
			{
				(new StudentsDatabaseModel())->addStudent($id);
				header("Location: /?p=enterID&do=display");
			}
			else
			{
				header("Location: /?p=error&message=badid");
			}
		}
		else
		{
			header("Location: /?p=error&message=noidenter");
		}
	}
}
 ?>

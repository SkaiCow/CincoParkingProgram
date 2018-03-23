<?php
class EnterIDController extends Controller
{
  public function adminDisplay()
  {
    (new EnterIDView())->render();
  }

  public function submit()
  {
    $id = $_POST["ID"];
    lcfirst($id);
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
    if($goodID)
    {
      (new AdminDatabaseModel())->addAuthorizedID($id);
      //$_POST['IDGood'] = "TRUE";
      (new EnterIDController("adminDisplay"))->adminDisplay();
    }
    else
    {
      //$_POST['IDGood'] = "FALSE";
      (new EnterIDController("adminDisplay"))->adminDisplay();
    }
  }
}
 ?>

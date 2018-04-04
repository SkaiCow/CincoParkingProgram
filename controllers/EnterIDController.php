<?php
class EnterIDController extends Controller
{
  public function adminDisplay()
  {
    (new EnterIDView())->render();
  }

  public function submit()
  {
    if($_POST["ID"] != "")
    {
      $id = $_POST["ID"];
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
      if(!(new AdminDatabaseModel())->isUniqueID($id))
      {
        $goodID = FALSE;
      }
      if($goodID)
      {
        (new AdminDatabaseModel())->addAuthorizedID($id);
        echo"SUCCESS";
        return;
      }
    }
    else
    {
      //blank entry
    }
  }
}
 ?>

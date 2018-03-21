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
    for($i = 1; $i < strlen($id); $i++)
    {
      $char = $id[$i];
      if(!is_numeric($char))
      {
        $goodID = FALSE;
      }
    }
    (new AdminDatabaseModel())->addAuthorizedID($id);
    (new EnterIDView())->render();
  }
}
 ?>

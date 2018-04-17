<?php
class AdminDatabaseModel extends DatabaseModel
{
  public function addAuthorizedID($id)
  {
    $query = self::$conn->prepare(
      'INSERT INTO authorizedid (student_id)'.
      'VALUES (:id)');
    $query->bindValue(':id', $id, PDO::PARAM_STR);
    if($query->execute())
    {
  		return "TRUE";
  	}
  	else
  	{
  		return "FALSE";
  	}
  }

  public function getAuthorizedID()
  {
    $query = self::$conn->prepare(
      'SELECT *'.
      'FROM authorizedid');
    if(!$query->execute()) return false;
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
      return $result;
  }

  public function isUniqueID($id)
  {
    $query = self::$conn->prepare(
      'SELECT *'.
      'FROM authorizedid');
    $query->execute();
    $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($query as $ID)
    {
      if($id == $ID)
        return FALSE;
    }
    return TRUE;
  }

  public function getApproveRequests()
  {
    $query = self::$conn->prepare(
      'SELECT *'.
      'FROM students '.
      'WHERE approved = 1');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    $result = array_filter($result);
    if(empty($result))
    {
      return 'none';
    }
    else
    {

      return $result;
    }


  }

}
?>

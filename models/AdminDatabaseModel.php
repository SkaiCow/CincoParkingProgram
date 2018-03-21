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
}
?>

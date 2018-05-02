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

  public function approve($id)
  {
    $query = self::$conn->prepare(
      'UPDATE students '.
      'SET approved = 2 '.
      'WHERE student_id = :id'
    );
    $query->bindvalue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $query2 = self::$conn->prepare(
      'UPDATE spot_data '.
      'SET statues = 2 '.
      'WHERE taken_id = :id'
    );
    $query2->bindvalue(':id', $id, PDO::PARAM_STR);
    $query2->execute();
  }

  public function deny($id)
  {
    $query = self::$conn->prepare(
      'UPDATE students '.
      'SET name_first = DEFAULT, name_last = DEFAULT, name_spot = DEFAULT, sticker_number = DEFAULT, car_color = DEFAULT, car_make = DEFAULT, car_model = DEFAULT, car_year = DEFAULT, car_license = DEFAULT, grade = DEFAULT, approved = 0 '.
      'WHERE student_id = :id'
    );
    $query->bindvalue(':id', $id, PDO::PARAM_STR);
    $query->execute();
  }

  public function takeSpot($num, $color)
  {
    $query = self::$conn->prepare(
      'UPDATE spot_data '.
      'SET statues = 2, color = :color '.
      'WHERE spot_number = :num'
    );
    $query->bindvalue(':num', $num, PDO::PARAM_INT);
    $query->bindvalue(':color', $color);
    $query->execute();
  }
}
?>

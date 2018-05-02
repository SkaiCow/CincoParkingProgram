<?php
class MapDatabaseModel extends DatabaseModel
{
  public function getAllFromLot($lot)
  {
    $query = self::$conn->prepare(
      'SELECT * ' .
      'FROM spot_data '.
      'WHERE lot=:lot');
    $query->bindvalue(':lot', $lot, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getSpotByNumber($num)
  {
    $query = self::$conn->prepare(
      'SELECT * ' .
      'FROM spot_data '.
      'WHERE spot_number = :num');
    $query->bindvalue(':num', $num);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getSpotByStudent($ID)
  {
    $query = self::$conn->prepare(
      'SELECT * ' .
      'FROM spot_data '.
      'WHERE taken_id = :num');
    $query->bindvalue(':num', Session::getid());
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }

  public function addRowToDB($x,$y,$width,$height,$spot_num,$num_of_spots,$spacing)
  {
    $query = self::$conn->prepare(
      'INSERT INTO spot_data (spot_number,lot,width,height,pos_x,pos_y,statues,taken_id,color)' .
      'VALUES (?,"paclot",?,?,?,?,0,0,null);');
    for($i = $spot_num;$i<$spot_num+$num_of_spots;$i++)
    {
      $data = array($i, $width, $height, $x-($spot_num-$i)*$spacing,$y);
      $query->execute($data);
    }
  }
  public function editRowInDB($start,$finish,$x_add,$y_add,$width_add,$height_add)
  {
    $query = self::$conn->prepare('UPDATE spot_data SET pos_x = pos_x + ?, pos_y = pos_y + ?, width = width + ?, height = height + ? WHERE spot_number BETWEEN ? AND ?');
    $data = array($x_add, $y_add, $width_add, $height_add, $start, $finish);
    $query->execute($data);
  }

  public function requestSpot($spot, $ID, $color)
  {
    $query = self::$conn->prepare(
      'UPDATE spot_data '.
      'SET statues = "1", taken_id = ?, color = ? '.
      'WHERE spot_number = ?');
    $data = array($ID,$color,$spot);
    $query->execute($data);
    //we might want to go back to these querys and make responses in case they don't pass.
  }

  public function hasSpot($ID)
  {
    $query = self::$conn->prepare(
      'SELECT * ' .
      'FROM spot_data '.
      'WHERE spot_data.taken_id=:id LIMIT 1');
    $query->bindvalue(':id', $ID);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);

    if(!$result)
      return false;
    return true;
  }
}
 ?>

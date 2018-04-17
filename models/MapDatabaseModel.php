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
  public function addRowToDB($x,$y,$width,$height,$spot_num,$num_of_spots,$spacing)
  {
    $query = self::$conn->prepare(
        'INSERT INTO spot_data (spot_number,lot,width,height,pos_x,pos_y,statues,taken_id,color)' .
        'VALUES (?,"softmorelot",?,?,?,?,0,0,null);');
    for($i = $spot_num;$i<$spot_num+$num_of_spots;$i++)
    {
      $data = array($spot_num+($spot_num-$i), $width, $height, $x+($spot_num-$i)*$spacing,$y);
      $query->execute($data);
    }
    return "im done now, there should be ".$num_of_spots." in the DB";
  }
}
 ?>

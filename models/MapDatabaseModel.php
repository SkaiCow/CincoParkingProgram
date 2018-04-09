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
}
 ?>

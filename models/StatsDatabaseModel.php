<?php
class StatsDatabaseModel extends DatabaseModel
{
  public function openSpotsLeft()
  {
		$query = self::$conn->prepare(
		    'SELECT spot_number ' .
		    'FROM spot_data '.
        'WHERE statues = 0');
		$query->execute();
		$result = $query->rowCount();
		return $result;
  }

  public function takenSpots()
  {
    $query = self::$conn->prepare(
		    'SELECT spot_number ' .
		    'FROM spot_data '.
        'WHERE taken_id != 0 OR taken_id != null');
		$query->execute();
		$result = $query->rowCount();
		return $result;
  }
}

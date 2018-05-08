<?php
class StatsDatabaseModel extends DatabaseModel
{
  public function openSpotsLeft()
  {
		$query = self::$conn->prepare(
		    'SELECT COUNT(spot_number) ' .
		    'FROM spot_data '.
        'WHERE statues = 0');
		$query->execute();
		$result = $query->fetch();
		return $result;
  }
}

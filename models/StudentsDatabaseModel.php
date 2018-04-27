<?php
class StudentsDatabaseModel extends DatabaseModel
{
	public function getAllStudents()
	{
		$query = self::$conn->prepare(
				'SELECT * ' .
				'FROM students');
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
	}

	public function getStudentsInProgress()
	{
		$query = self::$conn->prepare(
				'SELECT * ' .
				'FROM students '.
				'WHERE approved = 0 OR approved = 1');
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

	public function getStudent($id)
	{
		$query = self::$conn->prepare(
				'SELECT * ' .
				"FROM students WHERE student_id=:id");
		$query->bindValue(":id", $id);
		$query->execute();
		$result = $query->fetch(PDO::FETCH_ASSOC);
		return $result;
	}

	public function editStudent($id, $key, $value)
	{
		$query = self::$conn->prepare('UPDATE students SET ' . $key . '=:value WHERE student_id=:id');
		$query->bindValue(':id', $id);
		$query->bindValue(':value', $value);
		return ($query->execute());
	}

	public function addStudent($id)
	{
		$query = self::$conn->prepare('INSERT INTO students SET student_id=:id');
		$query->bindValue(':id', $id);
		return ($query->execute());
	}

	public function askForApproval($ID)
  {
    $query = self::$conn->prepare(
      'UPDATE students '.
      'SET approved = "1" '.
      'WHERE student_id = ?');
    $data = array($ID);
    $query->execute($data);
  }

	public function resetInfo()
	{
		$query = self::$conn->prepare(
				'UPDATE students '.
				'SET name_first = DEFAULT, name_last = DEFAULT, name_spot = DEFAULT, sticker_number = DEFAULT, car_color = DEFAULT, car_make = DEFAULT, car_model = DEFAULT, car_year = DEFAULT, car_license = DEFAULT, grade = DEFAULT '.
				'WHERE student_id = :id');
		$query->bindValue(":id", Session::getid());
		$query->execute();
	}
}
?>

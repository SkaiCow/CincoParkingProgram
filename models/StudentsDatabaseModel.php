<?php
class StudentsDatabaseModel extends DatabaseModel
{
<<<<<<< HEAD
  public function getAllStudents()
  {
    $query = self::$conn->prepare(
        'SELECT * ' .
        'FROM students');
    $query->execute();
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    return $result;
  }

  public function getStudentInfo($id)
  {
    $query = self::$conn->prepare(
        'SELECT * ' .
        'FROM students ' .
        'WHERE student_id = :id');
    $query->bindvalue(':id', $id, PDO::PARAM_STR);
    $query->execute();
    $result = $query->fetch(PDO::FETCH_ASSOC);
    return $result;
  }
=======
	public function getAllStudents()
	{
		$query = self::$conn->prepare(
				'SELECT * ' .
				'FROM students');
		$query->execute();
		$result = $query->fetchAll(PDO::FETCH_ASSOC);
		return $result;
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
>>>>>>> ba63d8e4103ece5781fd1a9109c24d59144512c7
}
?>

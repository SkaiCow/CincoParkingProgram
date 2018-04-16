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
}
?>

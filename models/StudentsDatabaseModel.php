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
}
?>

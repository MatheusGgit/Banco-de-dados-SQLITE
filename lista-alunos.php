<?php
use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\ConnectionCreator;
require_once 'vendor/autoload.php';

$pdo = ConnectionCreator::createConnection();

$statement = $pdo->query("SELECT * FROM Students");
$studentDataList = $statement->fetchAll(PDO::FETCH_ASSOC);
$studentList = [];

foreach ($studentDataList as $studentData)
{
    $studentList[] = new Student(
      $studentData['id'],
      $studentData['name']
    );
}

var_dump($studentList);
<?php
use Alura\Pdo\Domain\Model\Student;
require_once 'vendor/autoload.php';

$caminho = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'.$caminho);

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
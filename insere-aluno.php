<?php
use Alura\Pdo\Domain\Model\Student;
require_once 'vendor/autoload.php';
$caminho = __DIR__ . '/banco.sqlite';
$pdo = new PDO('sqlite:'.$caminho);

$student = new Student(null, 'Matheus Garcia');

$sqlInsert = "INSERT INTO students (name) VALUES ('{$student->name()}')";
var_dump($pdo->exec($sqlInsert));
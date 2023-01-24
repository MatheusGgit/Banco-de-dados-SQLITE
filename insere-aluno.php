<?php
require_once 'vendor/autoload.php';
use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Infrastructure\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

// Exemplo de Sql Injection
$student = new Student(null, "Matheus Garcia', ''); DROP TABLE students -- Dias");

// Preparando o comando Sql para evitar o injection
$sqlInsert = "INSERT INTO students (name) VALUES (:name)";
$statement = $pdo->prepare($sqlInsert);
$statement->bindValue(':name', $student->name());

// Executa o comando
$statement->execute();

//var_dump($pdo->exec($sqlInsert));
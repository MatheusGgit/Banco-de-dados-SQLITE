<?php
require_once 'vendor/autoload.php';
use Alura\Pdo\Infrastructure\ConnectionCreator;
use Alura\Pdo\Infrastructure\PdoStudentRepository;
use Alura\Pdo\Domain\Model\Student;

$pdo = ConnectionCreator::createConnection();
$studentRepository = new PdoStudentRepository($pdo);

$pdo->beginTransaction();

$student = new Student(null, 'Mario');
$anotherStudent = new Student(null, 'Sérgio Ramos');
$studentRepository->save($student);
$studentRepository->save($anotherStudent);

$pdo->commit();
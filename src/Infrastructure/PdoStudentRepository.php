<?php

namespace Alura\Pdo\Infrastructure;

use Alura\Pdo\Domain\Model\Student;
use Alura\Pdo\Domain\Repository\StudentRepository;
use Alura\Pdo\Infrastructure\ConnectionCreator;
use PDO;

class PdoStudentRepository implements StudentRepository
{
    public function __construct()
    {
        $this->connection = ConnectionCreator::createConnection();
    }

    public function allStudents(): array
    {
        $sqlQuery = 'SELECT * FROM students';
        $stmt = $this->connection->query($sqlQuery);
        $stmt->execute();
        return $this->$stmt;
    }

    public function save(Student $student): bool
    {
        $stmt = $this->connection->prepare('INSERT INTO students VALUES (:name)');
        $stmt->bindValue(':name', $student->name(), PDO::PARAM_INT);
        return $stmt->execute();
    }

    public function remove(Student $student): bool
    {
        $stmt = $this->connection->prepare('DELETE FROM students WHERE id = ?');
        $stmt->bindValue(1, $student->id(), PDO::PARAM_INT);
        return $stmt->execute();
    }
}
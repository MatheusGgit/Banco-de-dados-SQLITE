<?php
require_once 'vendor/autoload.php';
use Alura\Pdo\Infrastructure\ConnectionCreator;

$pdo = ConnectionCreator::createConnection();

$id = readline('Insira o id: ');
$preparedStatement = $pdo->prepare("DELETE FROM students WHERE id = :id");
$preparedStatement->bindValue(':id', $id, PDO::PARAM_INT); // Deixando explícito que é um int
$preparedStatement->execute();


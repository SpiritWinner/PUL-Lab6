<?php
require 'config.php';
global $pdo;

$id = $_GET['id'];

$sql = 'DELETE FROM `mybdtest` WHERE `id` = ?';
$query = $pdo->prepare($sql);
$query->execute([$id]);

header('Location: ./index.php');
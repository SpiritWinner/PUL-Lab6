<?php
require 'config.php';
global $pdo;

$name = $_POST['name'];
$email = $_POST['email'];

if ($name == '' || $email == '') {
    echo
    '
       <link rel="stylesheet" href="css/style.css">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
            
       <form class="container">
           <h1 class="display-4">Be sure to enter the data</h1>
           <a type="button" class="btn btn-primary btn-rounded-1 btn-block" href="./index.php">Go back</a>
       </form>
    ';
    exit();
}

$sql = 'INSERT INTO mybdtest(name, email) VALUE(:name, :email)';
$query = $pdo->prepare($sql);
$query->execute(['name' => $name, 'email' => $email]);

header('Location: ./index.php');

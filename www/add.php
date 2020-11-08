<?php
include "DB.php";

$name  = filter($_POST['name']);
$email = filter($_POST['email']);

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
addDB($name, $email);
header('Location: ./index.php');

<?php

$firstname = 'Vlado';
$lastname = 'Kostovski';
$email = 'vlado.kostovski@gmail.com';

print_r("firstname, lastname, email");
die();

if(isset($_GET['firstname']) &&!empty($_GET['firstname'])) {
    $firstname = $_GET['firstname'];
}

if(isset($_GET['lastname']) &&!empty($_GET['lastname'])) {
    $lastname = $_GET['lastname'];
}

if(isset($_GET['email']) &&!empty($_GET['email'])) {
    $email = $_GET['email'];
}

print_r("firstname' 'lastname' 'email");
die();



$firstname = $_GET['firstname'];

$lastname = $_GET['lastname'];

$email = $_GET['email'];

echo ["$firstname","$lastname", "$email"];
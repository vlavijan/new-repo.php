<?php


$email = $_POST['email'];

$password = $_POST['password'];

$address = $_POST['address'];

$address2 = $_POST['address2'];

$city = $_POST['city'];

$state = $_POST['state'];

$zip = $_POST['zip'];

echo $email." ".$password." ".$address." ".$address2." ".$city." ".$state;


header('Location:/user.php?firstname="Vlado"&lastname="Kostovski"&email="vlado.kostovski@gmail.com');

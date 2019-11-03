<?php
require_once 'functions.php';
$firstName = $lastName = $email = $phone = '';
$patternName = '/^[a-z]+$/i';
$patternEmail = '/.+@.+\..+/i';
$patternPhone = '/^\+(380)[0-9]{9}$/';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $firstName = validation($patternName,$_POST['firstName'], 'first Name');
  $lastName = validation($patternName,$_POST['lastName'], 'last Name');
  $email = validation($patternEmail,$_POST['email'], 'email');
  $phone = validation($patternPhone,$_POST['phone'], 'phone number');
}

echo "First Name: ".$firstName."\nLast Name: ".$lastName."\nEmail: ".$email."\nPhone number: ".$phone;
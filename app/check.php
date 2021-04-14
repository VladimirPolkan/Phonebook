<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Что получит Витя 3 или 4? </title>
</head>
<body>

<h1>Телефонный справочник:</h1>
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $number = $_POST['number'];

    echo $name . " " . $surname . " " . $number . "<br />";
}
?>
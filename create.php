<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Телефонный справочник</title>
</head>
<body>
<p><a href="/">Вернутся обратно</a></p>
<h1>Жыве Беларусь:</h1>
<form action="" method="post">
    //app/check.php
    <p>Ваша фамилия:<input type="text" name="surname"/></p>
    <p>Ваше имя:<input type="text" name="name"/></p>
    <p>Ваше отчество:<input type="text" name="patronymic"/></p>
    <p>Ваш номер телефона:<input type="text" name="number"/></p>
    <p><input type="submit"></p>
</form>
<?php
$a = date("y-m-d H:i:s");
echo "Текущее время: $a<br/>\n";
if (empty($_POST["surname"]) or empty($_POST["name"])) {
    exit('Текстовое поле не заполнено');
} else {
    $con = mysqli_connect("localhost", "root", "root", "телефонный справочник");
    mysqli_set_charset($con, "utf8");
    if (mysqli_connect_errno()) {
        echo "Error 404" . "<br />";
        echo mysqli_connect_errno();
    } else {
        echo "Есть подключение к БД" . "<br />";
    }
}

extract($_POST);

echo "\$surname = $surname <br>";
echo "\$name = $name <br>";
echo "\$patronymic = $patronymic <br>";

//echo '<pre>';
//print_r($_POST);
//echo '</pre>';

$query = "INSERT INTO number VALUES (NULL, '$surname', '$name', '$patronymic', '$number', CURRENT_TIMESTAMP);";
$info = mysqli_query($con, $query);
//var_dump($info);
echo $query;
echo "<br>";
echo "Сколько строк было изменено при приведущем запросе: <br>";
echo mysqli_affected_rows($con);
//mysqli_affected_rows-Показывает сколько строк было изменено при приведущем запросе
?>
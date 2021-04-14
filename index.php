//**ДЗ:
Нужно сделать страницу на которой будет форма создания контакта
(create.php) имя, фамилия, номер телефона заполняешь отправляешь
форму - создается запись в БД список контактов твоих
можно просмотреть на другой странице в виде таблицы (index.php)**//
<p><a href="create.php">Для заполнения</a></p>
<?php

$con = mysqli_connect("localhost", "root", "root", "телефонный справочник");
mysqli_set_charset($con, "utf8");
if (mysqli_connect_errno()) {
    echo "Error 404" . "<br />";
    echo mysqli_connect_errno();
} else {
    echo "Есть подключение к БД:" . "<br />";
}

$query = "SELECT * FROM number;";
$info = mysqli_query($con, $query);
    while ($count = mysqli_fetch_assoc($info)) {
        //print_r($count);
         //echo "<br/>";}

           // $count = trim($count);
            //$a = explode($count);
        foreach ($count as $value){
            //$s1[] = $value;
            //$s1 = join(" ", $s1);}
            echo "$value"." ";}
        echo "<br/>";
        }
?>
Использовано:
<p>
    <a href="https://www.youtube.com/watch?v=r_ivKeBLZjE&list=PLVfMKQXDAhGWCBTca7m-snWrZZkjX2jGB&index=8&ab_channel=WebDeveloperBlog">Как
        работать с формами. Методы GET и POST.</a></p>
<p>
    <a href="https://www.youtube.com/watch?v=DfxuZp_7tm0&list=PLuY6eeDuleIN_pFzp1vlu0PD3KXUrPTVS&index=54&ab_channel=ITDoctor">
        Валидация формы и отправка параметров методом POST</a></p>
и <p><a href="https://www.youtube.com/watch?v=roaWTekVYKA&ab_channel=%D0%9F%D1%80%D0%BEPHP">В этом уроке по PHP изучим
        функции explode, которая разбивает строку
        в массив по разделителю, и implode,
        которая собирает строку в массив по разделителю</a></p>
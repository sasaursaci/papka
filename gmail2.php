<?php

$name = $_POST['name'];
$sex = $_POST['sex'];
$date = $_POST['date'];
$name = htmlspecialchars($name);
$sex = htmlspecialchars($sex);
$date = htmlspecialchars($date);
$name = urldecode($name);
$sex = urldecode($sex);
$date = urldecode($date);
$name = trim($name);
$sex = trim($sex);
$date = trim($date);
if (mail("sasaursaci@gmail.com", "Регестрація громадян", "ПІП:".$name.". Рід: ".$sex  ."дата народження:". $date ,  "From: sasaursaci@gmail.com \r\n")){
    echo "Регестрацію завершено";
} else {
    echo "Сталася помилка! Спробуйте ще раз";
}
}
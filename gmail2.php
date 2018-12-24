<?php

$name = $_POST['name'];
$sex = $_POST['sex'];
$date = $_POST['date'];
$name = htmlspecialchars($name);
$sex = htmlspecialchars($sex);
$date = htmlspecialchars($date);
$name = urldecode($name);
$email = urldecode($email);
$fio = trim($fio);
$email = trim($email);
if (mail("sasaursaci@gmail.com", "Регестрація громадян", "ПІП:".$name.". Рід: ".$sex ,"From: sasaursaci@gmail.com \r\n")){
    echo "Регестрацію завершено";
} else {
    echo "Сталася помилка! Спробуйте ще раз";
}
}
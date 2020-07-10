<?php
// Файлы phpmailer
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

// Переменные, которые отправляет пользователь
// $cow = $_POST['cow'];
// $milk = $_POST['milk'];
// $person = $_POST['person'];
// $toSent = $_POST['toSent'];

// Формирование самого письма
$title = "Заголовок письма";
$body = "
<h2>Новое письмо</h2>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    // Настройки вашей почты
    $mail->Host       = 'smtp.gmail.com'; // SMTP сервера вашей почты
    $mail->Username   = 'maksim.zelenovskiy@gmail.com'; // Логин на почте
    $mail->Password   = 'inavif73'; // Пароль на почте
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('maksim.zelenovskiy@gmail.com', 'Максим'); // Адрес самой почты и имя отправителя

    // Получатель письма
    $mail->addAddress('maksim1233@mail.ru', 'hi');  

    // Прикрипление файлов к письму
// Отправка сообщения
$mail->isHTML(true);
$mail->Subject = $title;
$mail->Body = $body;    

// Проверяем отравленность сообщения
if ($mail->send()) {
    echo 'Отправлено';
} else {
    echo  "ошибка";
}


?>
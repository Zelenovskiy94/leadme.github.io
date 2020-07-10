<?php
require 'PHPMailer.php';
require 'SMTP.php';
require 'Exception.php';

$cow = $_POST['cow'];
$milk = $_POST['milk'];
$person = $_POST['person'];
$toSent = $_POST['toSent'];

$title = "Данные пользователя";
$body = "
Количесвто коров: $cow <br>
Количесвто молока: $milk <br>
Специализация: $person <br>
Контакт: $toSent <br>
";

// Настройки PHPMailer
$mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();   
    $mail->CharSet = "UTF-8";
    $mail->SMTPAuth   = true;
    $mail->SMTPDebug = 2;
    $mail->Debugoutput = function($str, $level) {$GLOBALS['status'][] = $str;};

    $mail->Host       = 'smtp.gmail.com'; 
    $mail->Username   = 'maksim1233@gmail.com'; 
    $mail->Password   = 'inavif73'; 
    $mail->SMTPSecure = 'ssl';
    $mail->Port       = 465;
    $mail->setFrom('maksim1233@gmail.com', 'Максим'); 

   
    $mail->addAddress('volohovich_project@leadme.agency', 'Test');  

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
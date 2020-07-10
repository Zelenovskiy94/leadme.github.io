
<meta charset="utf-8"> 
<?php
$urok="Урок 22";
error_reporting( E_ERROR );   //Отключение предупреждений и нотайсов (warning и notice) на сайте
// создание переменных из полей формы		
if (isset($_POST['cows']))			{$cows		= $_POST['cows'];		if ($cows == '')	{unset($cows);}}
if (isset($_POST['milk']))		{$milk		= $_POST['milk'];		if ($milk == '')	{unset($milk);}}
if (isset($_POST['person']))			{$person			= $_POST['person'];		if ($person == '')	{unset($person);}}
if (isset($_POST['toSent']))			{$toSent			= $_POST['toSent'];		if ($toSent == '')	{unset($toSent);}}
if (isset($_POST['sab']))			{$sab			= $_POST['sab'];		if ($sab == '')		{unset($sab);}}
//стирание треугольных скобок из полей формы
/* комментарий */
if (isset($cows) ) {
$cows=stripslashes($cows);
$cows=htmlspecialchars($cows);
}
if (isset($milk) ) {
$milk=stripslashes($milk);
$milk=htmlspecialchars($milk);
}
if (isset($person) ) {
$person=stripslashes($person);
$person=htmlspecialchars($person);
}
if (isset($toSent) ) {
$toSent=stripslashes($toSent);
$toSent=htmlspecialchars($toSent);
}
// адрес почты куда придет письмо
$address="maksim1233@gmail.com";
// текст письма 
$note_text="Тема : $urok \r\nИмя : $cows \r\n Email : $milk \r\n Дополнительная информация : $person, $toSent" ;
if (mail($address, "Заказ с сайта", $note_text,"From: maksim.zelenovskiy@gmail.com \r\n"))
 {
    echo "сообщение успешно отправлено";
} else {
    echo "при отправке сообщения возникли ошибки";
}
?>

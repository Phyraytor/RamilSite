<?php
	$Name = $_POST['UserName'];
	$Email = $_POST['UserMail'];
	$Phone = $_POST['UserPhone'];
	//Фильтруем данные
	//преобразуем все символы
	$Name = htmlspecialchars($Name);
	$Email = htmlspecialchars($Email);
	$Phone = htmlspecialchars($Phone);
	//декодируем url
	$Name = urldecode($Name);
	$Email = urldecode($Email);
	$Phone = urldecode($Phone);
	//Удалить пробелы с конца и начала строки
	$Name = trim($Name);
	$Email = trim($Email);
	$Phone = trim($Phone);
	$Text = "Имя ".$Name." с почтой ".$Email." и телефоном ".$Phone." оставил заявку!";
    //Отправляем письмо
	/*"на какой адрес отправить", 
	"тема письма", 
	"Сообщение (тело письма)",
	"From: с какого email отправляется письмо 
	\r\n"*/

	if ( mail("phyraytor@gmail.com", "Заявка с сайта", $Text) )
		echo "Письмо успешно отправлено";
	else
		echo "При отправке сообщения возникли ошибки";
?>

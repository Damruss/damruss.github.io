<?php 
	//Принимаем постовые данные
	$whatever=$_POST['whatever'];
	$username=$_POST['username'];
	$email=$_POST['email'];
	$user_message=$_POST['user_message'];

	//Тут указываем на какой ящик посылать письмо
	$to = "79991570874@yandex.ru";
	//Далее идет тема и само сообщение
	// Тема письма
	$subject = "Заявка с сайта";
	// Сообщение письма
	$message = "
	Форма, которую заполнил клиент: ".htmlspecialchars($whatever)."<br />
	Имя пользователя: ".htmlspecialchars($username)."<br />
	E-mail: ".htmlspecialchars($email)."<br />
	Сообщение: ".htmlspecialchars($user_message)."<br />
	";

	// Отправляем письмо при помощи функции mail();
	$headers = "From: smart-site.sl <putin@smart-site.sl>\r\nContent-type: text/html; charset=UTF-8 \r\n";
	// Отправляем письмо при помощи функции mail();

	mail ($to, $subject, $message, $headers);
	// Перенаправляем человека на страницу благодарности и завершаем скрипт
	header('Location: thanks.html');
	exit();
 ?>
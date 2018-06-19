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

	$mailForClient = '<table cellpadding="0" cellspacing="0" border="0" width="700px" style="width:700px!important;min-width:600px;max-width:700px">
	      <tbody>
			<tr>
	        <td align="center" valign="middle" height="509" background="https://ci6.googleusercontent.com/proxy/ePIYXQBMtDa-C7Q-p9fNxig1TJy6dQTmaQ1CbFaGQRb7YCS4M8TV=s0-d-e1-ft#http://img/bg.png" style="width:100%;background-image:url(https://ci3.googleusercontent.com/proxy/U0DA-jCM_UlwNZ-ezwHD2I3_wpnSR9F4-IILxrhaxdjuLJ0PaLixv7v7OVtVvbmVmF-IQggyah_dnTFiBhlPJGxZzXaGA_AMqF1HHQxwO5WqSG-h1w=s0-d-e1-ft#https://pp.userapi.com/c846020/v846020487/40a38/2OSFUR1yfj4.jpg);background-position:center top;background-repeat:no-repeat;background-size:100% 100%" bgcolor="#e3c7d7">
	         <table cellpadding="0" cellspacing="0" border="0" width="700px" style="width:700px!important;min-width:600px;max-width:700px">
	              <tbody>
	                <tr>
	                 <td width="15" style="width:325px;max-width:320px;min-width:15px">&nbsp;</td>
	                <td align="center" valign="top" height="60" style="height:60px;max-height:60px;min-height:60px"> 
	                 
	                  <font face="Arial, sans-serif" color="#ababab" style="font-size:1em;line-height:16px">
	                    <span style="font-family:Georgia,Palatino Linotype,Book Antiqua,Palatino,Times New Roman,serif;color:#5bb0fb;font-size:1.4em;line-height:1.75em">
	                        <b> Здравствуйте.</b> <br>
	                        Спасибо за проявленный интерес. <br>
	                        Я <b> с радостью </b> выступлю на Вашем мероприятии
	                        Пожалуйста, укажите: <br>
	                         <b>дату, место и время.</b>  <br>
	                        Так же интересует  жанр события <br>
	                      <i>(свадьба, день рождения, утренник и т.д.)</i> <br>

	                        <b> Есть вопросы? Спрашивайте! </b> <br>
	                      Мои контактные данные: <br>
	                        Телефон: +7 747-347-6297 <br>
	                        Email: ramil.yakupov.1997@mail.ru <br>
	                        ВКонтакте: https://vk.com/magic_rama <br>
	                    </span>
	                </font>
	              </td>
	            </tr>
	          </tbody>
	          </table>
	        </td>
	      </tr>
	    </tbody>
	</table>';

	$mailForAdmin = ' <table cellpadding="0" cellspacing="0" border="0" width="700px" style="width:700px!important;min-width:600px;max-width:700px">
	      <tr>
	        <td align="center" valign="middle" height="509" background="img/bg.png" style="width: 100%; background-image:url(https://sun9-3.userapi.com/c840421/v840421530/7e136/8r8KnEvzhls.jpg); background-position: center top; background-repeat: no-repeat; background-size: 100% 100%;" bgcolor="#e3c7d7">
	         <table cellpadding="0" cellspacing="0" border="0" width="700px" style="width: 700px !important; min-width: 600px; max-width: 700px">
	              <tr>
	                <td align="center" valign="top" height="60" style="height: 60px; max-height: 60px; min-height: 60px;"> 
	                  <font face="Arial, sans-serif" color="#0b0b0b" style="font-size: 11px; line-height: 16px;">
	                    <span style="font-family: Palatino Linotype,Book Antiqua,Palatino, Georgia, Times New Roman,serif;color:#0b0b0b;font-size:1.55em;line-height:1.75em">
	                        Уважаемый <b>Рамиль</b>, <br>
	                        человек с именем <b>'.$Name.'</b> <br>
	                        оставил заявку на твоём сайте.<br>
	                        Уверен, он хочет заказать твоё магическое шоу.<br>
	                        <b>Ему уже отправлено письмо</b><br>
	                        с просьбой указать дату, место и время.<br>
	                        А так же оставленны твои контактные данные.<br>
	                        Он скоро ответит, <b> будь готов. </b> <br>
	                        <b>Его почта:'.$Email.'</b> <br> 
	                        <b>Его телефон:'.$Phone.'</b> <br>     
	                    </span>
	                </font>
	              </td>
	            </tr>
	          </table>
	        </td>
	      </tr>
	    </table>';

    //Отправляем письмо
	/*"на какой адрес отправить", 
	"тема письма", 
	"Сообщение (тело письма)",
	"From: с какого email отправляется письмо 
	\r\n"*/

	if ( mail("ramil.yakupov.1997@mail.ru", "Заявка с сайта", $mailForAdmin) )
		echo "Письмо успешно отправлено";
	else
		echo "При отправке сообщения возникли ошибки";

	if ( mail($Email, "Фокусник Рамиль", $mailForClient ) )
		echo "Письмо успешно отправлено";
	else
		echo "При отправке сообщения возникли ошибки";
	header('Location:http://Ramil.ru');
?>
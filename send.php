<?php

$name= $_POST['name'];
$email=$_POST['email'];
$phone=$_POST['phone'];
$headtext=$_POST['headtext'];
$textmsg=$_POST['textmsg'];


$name= htmlspecialchars($name);
$email= htmlspecialchars($email);
$phone= htmlspecialchars($phone);
$headtext= htmlspecialchars($headtext);
$textmsg= htmlspecialchars($textmsg);

$name= urldecode($name);
$email= urldecode($name);
$phone= urldecode($name);
$headtext= urldecode($name);
$textmsg= urldecode($name);

$name= trim($name);
$email= trim($email);
$phone= trim($phone);
$headtext= trim($headtext);
$textmsg= trim($textmsg);

if
   (mail("pvp_master.38@mail.ru",
         "Новое письмо с сайта",
         "Имя: ".$name."\n".
         "Почта: ".$email."\n".
         "Телефон: ".$phone."\n".
         "Заголовок сообщения: ".$headtext."\n".
         "Текст сообщения: ".$textmsg."\n",
         "From: no-reply@mydomain.ru \r\n")
         ) {
            echo('Заявка успешна подана!');
         }
         else {
            echo('Ошибка. Данные отсутсвуют');
         }

         ?>
         
        

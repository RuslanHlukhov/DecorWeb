<?php
if(!empty($_POST['name']) AND !empty($_POST['email']) AND !empty($_POST['name']) AND !empty($_POST['subqect'])){
    
    $headers = 'From: Hlukhov Ruslan\r\n';
                'Replay-To: ruslanhlukhov@gmail.com\r\n'.
                'X-Mailer: PHP/'. phpversion();

    $theme = 'New Message';

    $letter = 'Данные сообщения:\r\n';
    $letter .='Name:'.$_POST['name'].'\r\n';
    $letter .='Email:'.$_POST['email'].'\r\n';
    $letter .='Subqect:'.$_POST['subqect'].'\r\n';
    $letter .='Message:'.$_POST['message'].'\r\n';

    if (mail('ruslanhlukhov@gmail.com', $theme, $letter)){
        echo "Сообщение отправлено!";
    } else {
        echo "Ошибка при отправке!";
    }
} else{
    echo "Заполните все поля!";
}
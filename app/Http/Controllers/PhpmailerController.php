<?php

namespace App\Http\Controllers;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
require '../vendor/autoload.php';

class PhpmailerController extends Controller
{
    static public function send($mail_address)
    {
        $mail = new PHPMailer(true);

        $mail->SMTPDebug = 2;
        $mail->isSMTP();
        $mail->Host = 'smtp.mail.ru';
        $mail->SMTPAuth = true;
        $mail->Username = 'fortesttask@bk.ru';
        $mail->Password = 'sHXS5WiFNpFbj9qc1VPW';
        $mail->SMTPSecure = 'ssl';
        $mail->Port = 465;
        $mail->CharSet = 'UTF-8';


        $mail->setFrom('fortesttask@bk.ru', 'Test Message');
        $mail->addAddress($mail_address, 'Андрей Грибин');

        $mail->isHTML(true);
        $mail->Subject = 'Подтверждение регистрации';
        $mail->Body    = 'Вы успешно зарегистрировались';

        return $mail->send();
    }
}

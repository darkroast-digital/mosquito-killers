<?php

namespace App\Controllers;

use App\Controllers\Controller;
use PHPMailer\PHPMailer\PHPMailer;


class HomeController extends Controller
{
    public function index($request, $response, $args)
    {

        return $this->view->render($response, 'home.twig');
    }

    public function post($request, $response, $args)
    {
        $params = $request->getParams();
        $mail = new PHPMailer;

        $name = $params['name'];
        $email = $params['email'];
        $phone = $params['phone'];
        $message = $params['message'];

        $mail->setFrom($email, $name);
        $mail->addAddress('info@mosquitokillers.ca', 'Mosquito Killers');
        $mail->addReplyTo('info@mosquitokillers.ca', 'Mosquito Killers');
        $mail->ReutrnPath='info@mosquitokillers.ca';

        $mail->isHTML(true);

        $body = 'Name: ' . $name . "<br/>" .
                'Email: ' . $email . "<br/>" .
                'Phone: ' . $phone . "<br/>" .
                'Message: ' . $message;

        $mail->Subject = "New message from Mosquito Killers website!";
        $mail->Body    = $body;
        $mail->AltBody = $body;

        if(!$mail->send()) {
            echo 'Message could not be sent.';
            echo 'Mailer Error: ' . $mail->ErrorInfo;
        } else {
            echo 'Success!';
        }

    }
}

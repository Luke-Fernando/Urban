<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require_once __DIR__ . '/../../vendor/autoload.php';
require __DIR__ . '/Environment.php';

class Mail
{

    private $environment;
    private $mail;

    public function __construct()
    {
        $this->environment = new Environment();
        $this->mail = new PHPMailer(true);
        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $this->mail->isSMTP();
        $this->mail->Host       = $this->environment->get_env('MAIL_HOST');
        $this->mail->SMTPAuth   = true;
        $this->mail->Username   = $this->environment->get_env('MAIL_USERNAME');
        $this->mail->Password   = $this->environment->get_env('MAIL_PASSWORD');
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
        $this->mail->Port       = $this->environment->get_env('MAIL_PORT');
    }

    public function send_mail($receiver_address, $receiver_name, $subject, $data = [], $file)
    {
        try {
            $this->mail->setFrom($this->environment->get_env('MAIL_USERNAME'), 'Urban Team');
            $this->mail->addAddress($receiver_address, $receiver_name);

            $this->mail->isHTML(true);
            $this->mail->Subject = $subject;
            $this->mail->Body    = $this->generate_html($data, $file);

            $this->mail->send();
            echo 'Please check your inbox';
        } catch (Exception $e) {
            echo "Message could not be sent";
        }
    }

    public function generate_html($date = [], $file)
    {
        ob_start();
        extract($date);
        require __DIR__ . '/../views/mail/' . $file . '.php' . ``;
        $mail_body = ob_get_clean();
        return $mail_body;
    }
}

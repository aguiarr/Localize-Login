<?php 

namespace Localize\Services\PHPMailer;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

class SendMail{
    private $mail;
    private $username;
    private $name;
    private $subject;
    private $body;
     
    public function __construct($username, $name,$subject, $body)
    {
        $this->mail      = new PHPMailer();
        $this->name      = $name;
        $this->username  = $username;
        $this->subject   = $subject;
        $this->body      = $body;
    }

    public function sendMail(){

        $this->mail->SMTPDebug = SMTP::DEBUG_SERVER;                      
        $this->mail->isSMTP();         
                                                                                                         
        $this->mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         
        $this->mail->Port       = Access::$mail_port; 
        $this->mail->SMTPSecure = Access::$mail_smtp_secure;                            
        $this->mail->Mailer     = "smtp";    
        $this->mail->SMTPAuth   = true;       

        $this->mail->SMTPDebug = false;
        $this->mail->do_debug = 0;

        $this->mail->Host       = Access::$mail_host;    
        $this->mail->Username   = Access::$mail_username;                
        $this->mail->Password   = Access::$mail_password; 

        //Recipients
        $this->mail->setFrom( Access::$mail_username);
        $this->mail->FromName   = 'Localize';

        $this->mail->addAddress($this->username , $this->name);   

        //Content
        $this->mail->isHTML(true);        
        $this->mail->CharSet = "UTF-8";                         
        $this->mail->Subject = $this->subject;
        $this->mail->Body    = $this->body;
        $this->mail->AltBody = $this->body;

        $this->mail->send();
    }
}
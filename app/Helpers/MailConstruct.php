<?php

namespace Localize\Helpers;

class MailConstruct
{
    public static function emailConfirmation(string $subject, string $token){
        $body = '<div style="backgroud-color:#4D1280; color:#fff">
                    <h1>'.$subject.'</h1>
                    <div>
                        <p>Thanks for join us in the <b>Localize</b>.</p>
                        <p>To confirm your registration on our system just click on this <a href="http://localhost:1111/confirmed?id='.$token.'">link</a>.</p>
                    </div>
                 </div>'; 
        return $body;
    }
}
<?php

namespace Localize\Helpers;

class MailConstruct
{
    public static function emailConfirmation(string $subject, string $token){
        $body = '<h1>'.$subject.'</h1>
                 <div>
                    <p>Obrigado por se cadastrar na <b>Localize</b>.</p>
                    <p>Para confirmar o seu cadastro no sitema basta clicar nesse <a href="http://localhost:1111/confirmed?id='.$token.'">link</a>.</p>
                 </div>'; 
        return $body;
    }
}
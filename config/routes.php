<?php

use Localize\Controller\Erro\SendMail;
use Localize\Controller\Users\Show;
use Localize\Controller\Login\Login;
use Localize\Controller\Login\Logout;
use Localize\Controller\Erro\NotFound;
use Localize\Controller\Login\Checkout;
use Localize\Controller\Users\Persistence;
use Localize\Controller\Login\ForgotPassword;
use Localize\Controller\Register\EmailConfirmation;
use Localize\Controller\Register\RegisterConfirmation;


return [
    '/'             => Login::class,
    '/login'        => Checkout::class,
    '/logout'       => Logout::class,
    '/register'     => Persistence::class,
    '/home'         => Show::class,
    '/confirmation' => RegisterConfirmation::class,
    '/confirmed'    => EmailConfirmation::class,
    '/forgot'       => ForgotPassword::class,
    '/404'          => NotFound::class,
    '/error'        => SendMail::class
];
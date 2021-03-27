<?php

use Localize\Controller\Login\Login;
use Localize\Controller\Login\Checkout;
use Localize\Controller\Login\Logout;
use Localize\Controller\Users\Persistence;
use Localize\Controller\Users\Show;
use Localize\Controller\Register\VerifyEmail;

return [
    ''              => Login::class,
    '/login'        => Checkout::class,
    '/logout'       => Logout::class,
    '/register'     => Persistence::class,
    '/home'         => Show::class,
    '/verify'       => VerifyEmail::class,
];
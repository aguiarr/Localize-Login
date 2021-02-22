<?php

use Localize\Controller\Login\Login;
use Localize\Controller\Login\Checkout;
use Localize\Controller\Users\Persistence;

return [
    '' => Login::class,
    '/login' => Checkout::class,
    '/register' => Persistence::class
];
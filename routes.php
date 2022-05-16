<?php

use Matscode\Sandbox\Controller\Index;
use Matscode\Sandbox\Controller\Paystack;

return [
    'GET /' => [Index::class, 'home'],
    'GET /paystack' => [Paystack::class, 'index'],
];

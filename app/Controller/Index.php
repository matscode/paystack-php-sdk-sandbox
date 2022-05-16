<?php

namespace Matscode\Sandbox\Controller;

class Index
{
    public static function home(): void
    {
        \Flight::view('home');
    }
}

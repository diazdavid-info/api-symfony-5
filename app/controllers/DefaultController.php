<?php

namespace App\controllers;

use Symfony\Component\HttpFoundation\Response;

class DefaultController
{
    public function __invoke(): Response
    {
        return new Response('OK');
    }
}

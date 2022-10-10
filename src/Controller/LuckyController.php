<?php

// src/Controller/LuckyController.php
namespace App\Controller;

use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class LuckyController
{
    #[Route('/lucky/number')]
    public function number(): Response
    {
        $number = random_int(0, 100);

        return new Response(
        '
        <html>
        <body>
            <h1>Générateur de nombre de 1 à 100</h1>
            <h2>Lucky number: '.$number.'</h2>
        </body>
        </html>
        '
        );
    }
}
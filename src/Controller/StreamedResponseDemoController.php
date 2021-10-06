<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\StreamedResponse;
use Symfony\Component\Routing\Annotation\Route;

class StreamedResponseDemoController extends AbstractController
{
    #[Route('/', name: 'landing')]
    public function landing(): Response
    {
        return new Response("Landing, please go to either /do or /dont\n\n");
    }

    #[Route('/dont', name: 'dont')]
    public function dont(): Response
    {
        $response = new StreamedResponse(function (): void {
            \sleep(3);

            $result = 'FIRST OUTPUT (don\'t)' . PHP_EOL;

            for ($i = 1; $i <= 5; ++$i) {
                \sleep(1);
                $result .= $i . PHP_EOL;
            }

            echo $result;
        });

        $response->headers->set('X-Demo', 'test');

        return $response;
    }

    #[Route('/do', name: 'do')]
    public function do(): Response
    {
        $response = new StreamedResponse(function (): void {
            \sleep(3);

            echo 'FIRST OUTPUT (do!)' . PHP_EOL;

            for ($i = 1; $i <= 5; ++$i) {
                \sleep(1);
                echo $i . PHP_EOL;
            }
        });

        $response->headers->set('X-Demo', 'test');

        return $response;
    }
}

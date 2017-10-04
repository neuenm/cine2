<?php

namespace CineBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class SalasControllerTest extends WebTestCase
{
    public function testCarga()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/cine/nuevo/salas');
    }

}

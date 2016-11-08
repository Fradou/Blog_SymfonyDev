<?php

namespace BlogBundle\Tests\Controller;

use Symfony\Bundle\FrameworkBundle\Test\WebTestCase;

class MainControllerTest extends WebTestCase
{
    public function testIndex()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/');
    }

    public function testResume()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/resume');
    }

    public function testContact()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/contact');
    }

    public function testLogbook()
    {
        $client = static::createClient();

        $crawler = $client->request('GET', '/logbook');
    }

}

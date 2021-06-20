<?php

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use PHPUnit\Framework\TestCase;
use Psr\Http\Client\ClientExceptionInterface;

final class HttpTest extends TestCase
{
    public function testPing(): void
    {
        $request = new Request("GET", "https://notify.qiyutech.tech/api/ping");

        $client = new Client();

        try {
            $resp = $client->sendRequest($request);
            $body = $resp->getBody();
            $content = $body->read(255);
            $this->assertEquals("pong", $content);
        } catch (ClientExceptionInterface) {

        }
    }
}

<?php

namespace Notify;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use Psr\Http\Client\ClientExceptionInterface;


/**
 * Class ApiBase
 * 所有 HTTP 请求的基础类
 * @package Notify
 */
abstract class ApiBase
{
    protected static function doSendRequest(
        string $method,
        string $base_url,
        string $path_url,
        array $path_args = [],
        array $query_args = [],
        array $header = [],
        array $body = [],
        string $bearer = ""
    ): array
    {
        $fullUrl = self::buildFullUrl($base_url, $path_url, $path_args, $query_args);
        if (empty($header) && empty($body) === false) {
            $header = ["Content-Type: application/json"];
        }
        if (!empty($bearer)) {
            array_push($header, "Authorization: Bearer " . $bearer);
        }

        if (empty($body)) {
            $rBody = null;
        } else {
            $rBody = json_encode($body, JSON_UNESCAPED_UNICODE);
        }

        $request = new Request($method, $fullUrl, $header, $rBody);

        try {
            $client = new Client();
            $resp = $client->sendRequest($request);
            $body = $resp->getBody();
            $content = $body->getContents();
            return json_decode($content);
        } catch (ClientExceptionInterface $e) {
            return [];
        }
    }

    protected static function buildFullUrl(
        string $base_url, string $path_url, array $path_args, array $query_args
    ): string
    {
        if (empty($query_args)) {
            $qs = "";
        } else {
            $qs = "?" . http_build_query($query_args);
        }

        $real_path = implode(
            "/",
            array_map(
                function ($p) use ($path_args) {
                    if ($p[0] === "{" && $p[strlen($p) - 1] === "?") {
                        return $path_args[substr($p, 1, strlen($p) - 2)];
                    }
                    return $p;
                },
                explode("/", $path_url)
            )
        );

        return $base_url . $real_path . $qs;
    }
}

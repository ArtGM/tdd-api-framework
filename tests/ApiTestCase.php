<?php

namespace Tests;

use App\Http\Response;
use PHPUnit\Framework\TestCase as BaseTestCase;

abstract class ApiTestCase extends BaseTestCase
{

    public function json(
        string $method,
        string $uri,
        array $data = [],
        array $headers = []
    ): Response
    {

        $body = [
            'id' => 1,
            'title' => 'War and Peace',
            'year' => 1869,
            'author' => [
                'id' => 1,
                'name' => 'Leo Tolstoy',
                'bio' => 'A Russian writer who is regarded as one of the greatest authors of all time.',
            ],
        ];

        //write array as string
        $body = json_encode($body);


        return new Response(body: $body, statusCode: 200, headers: []);

    }
}

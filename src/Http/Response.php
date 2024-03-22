<?php
declare(strict_types=1);

namespace App\Http;

class Response
{

    public function __construct(
        public string $body = '',
        public int $statusCode = 200,
        public iterable $headers = []
    )
    {
    }

    public function getBody(): string
    {
        return $this->body;
    }

    public function getStatusCode(): int
    {
        return $this->statusCode;
    }
}
<?php

declare(strict_types=1);

namespace Tuzex\Superfaktura\Http;

interface HttpClient
{
    public function send(HttpRequest $request): HttpResponse;
}

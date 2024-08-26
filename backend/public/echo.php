<?php

declare(strict_types=1);

function respondText(string $text, int|null $statusCode = null): void {
    if ($statusCode !== null) {
        http_response_code($statusCode);
    }

    header('Content-Type: text/plain');
    header('X-Content-Type-Options: nosniff');

    echo $text;
}

const PARAM_NAME = 'q';

if (! isset($_GET[PARAM_NAME]) || ! is_string($_GET[PARAM_NAME])) {
    respondText('ERROR 400 Bad Request', 400);
    return;
}

$query = $_GET[PARAM_NAME];
respondText($query);

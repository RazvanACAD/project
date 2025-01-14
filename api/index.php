<?php

declare(strict_types = 1);

ini_set("display_errors", "On");

require dirname(__DIR__) . "/vendor/autoload.php";

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);

$parts = explode("/", $path);

$resource = $parts[1] . "/" . $parts[2];

$id = $parts[3] ?? null;

if($resource != "tasks"){

    http_response_code(404);
    exit;

}

$controller = new TaskController;

$controller->processRequest($_SERVER["REQUEST_METHOD"], $id);
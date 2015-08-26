<?php

require __DIR__ . '/../vendor/autoload.php';

$server = new \Weew\EchoServer\EchoServer();
$server->handle(new \Weew\Http\Requests\CurrentRequest());

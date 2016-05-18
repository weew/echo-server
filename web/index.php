<?php

use Weew\EchoServer\EchoServer;
use Weew\Http\Requests\CurrentRequest;

define('WEB_DIR', __DIR__);

require __DIR__ . '/../vendor/autoload.php';

$server = new EchoServer();
$server->handle(new CurrentRequest());

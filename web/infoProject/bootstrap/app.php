<?php

use App\Server\App;
use App\Server\RenderService;
use App\Server\MySQLConnectionService;
use App\Server\RedisConnectionService;

$app = app();

$db_host = 'db';
$db_port = '3306';
$db_username = 'root';
$db_password = 'password';
$db_name = 'test_db';
$mysqlDns = "mysql:host={$db_host};port={$db_port};dbname={$db_name}";
$redisDns = 'tcp://redis:6379';

$app->service(RenderService::class, new RenderService($app, 'main'));
$app->service(MySQLConnectionService::class, new MySQLConnectionService($mysqlDns, $db_username, $db_password));
$app->service(RedisConnectionService::class, new RedisConnectionService($redisDns));
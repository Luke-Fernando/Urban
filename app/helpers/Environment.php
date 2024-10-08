<?php
require_once __DIR__ . '/../../vendor/autoload.php';

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
$dotenv->load();

class Environment
{

    public function __construct()
    {
    }

    public function get_env($key)
    {
        return $_ENV[$key];
    }
}

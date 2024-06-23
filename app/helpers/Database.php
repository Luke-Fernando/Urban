<?php
class Database
{

    protected $connection;
    protected $environment;

    public function __construct()
    {
        $this->environment = new Environment();
        $this->connection;
    }

    public function setConnection()
    {
        if (!isset($this->connection)) {
            $host = $this->environment->get_env("DB_HOST");
            $username = $this->environment->get_env("DB_USERNAME");
            $password = $this->environment->get_env("DB_PASSWORD");
            $database = $this->environment->get_env("DB_NAME");
            $port = $this->environment->get_env("DB_PORT");
            $this->connection = new mysqli($host, $username, $password, $database, $port);
            // Database::$connection = new mysqli($host, $username, $password, $database, $port);
        }
    }
}

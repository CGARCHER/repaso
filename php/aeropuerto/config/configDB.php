<?php

class ConfigDB
{
    private static PDO $instance;
    private static $host;
    private static $user;
    private static $password;

    public function __construct()
    {
        if (!isset(self::$instance)) {
            $this->getValues();
            $this->connect();
        }
    }

    private function connect()
    {
        self::$instance = new PDO(self::$host, self::$user, self::$password);
    }

    private function getValues()
    {
        $conf = parse_ini_file('config.ini');
        self::$host = $conf['bbdd_host'];
        self::$user = $conf['bbdd_user'];
        self::$password = $conf['bbdd_password'];
    }

    public function getInstance()
    {
        return self::$instance;
    }
}

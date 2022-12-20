<?php

namespace K48\DB;

use mysqli;

class DB
{
    const DB_HOST = '127.0.0.1';
    const DB_USERNAME = 'root';
    const DB_PASSWORD = '';
    const DB_NAME = 'k47';

    public $conn;

    public function __construct(string $host = null, string $username = null, string $password = null, string $dbname = null)
    {
        $this->conn = new mysqli(
            $host ?? static::DB_HOST,
            $username ?? static::DB_USERNAME,
            $password ?? static::DB_PASSWORD,
            $dbname ?? static::DB_NAME)
        or die("Connection failed");
    }

    public function get(string $sql)
    {
        $data = [];
        $result = $this->conn->query($sql);
        if ($result->num_rows > 0) {
            $data = $result->fetch_array();
        }
        $this->conn->close();

        return $data;
    }
}
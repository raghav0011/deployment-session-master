<?php

namespace App\Database;

use MongoDB\Client;

class Connection
{
    private $client;
    private $db;
    public function __construct($host='followup_service_db:27017', $database='followup_database', $username='root', $password='root')
    {
        $uri = "mongodb://$username:$password@$host/$database?authSource=admin";
        $this->client = new client($uri);
        $this->db = $this->client->$database;
    }

    public function getDb()
    {
        return $this->db;
    }
}

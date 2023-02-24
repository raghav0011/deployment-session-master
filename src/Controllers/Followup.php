<?php

namespace App\Controllers;

use App\Database\Connection;

class Followup
{
    private $ownership;
    private $connection;
    public function __construct($ownership)
    {
        $this->ownership=$ownership;
        $mongoConnection = new Connection();
        $this->connection = $mongoConnection->getDb();
    }

    public function store()
    {
        $ownershipCollection = 'followup_' . $this->ownership;
        $collection = $this->connection->{$ownershipCollection};
        $insertResult = $collection->insertOne($_POST);
        return success($collection->findOne(['_id' => $insertResult->getInsertedId()]));
    }
}

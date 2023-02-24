<?php
    require_once('../config/auto_load.php');
    use MongoDB\Client;

    class ownership {

        public function insertData(){

            // connect to mongodb
            $m = new Client('mongodb://root:root@172.18.0.2:27017/');
            echo "Connection to database successfully </br>";
            // $db = $mongo->getDb();
            // $collection = $db->test_collection;

            // $document = [
            // "name" => "John Doe",
            // "email" => "johndoe@example.com",
            // "age" => 35
            // ];

            // $collection->insertOne($document);

            // select a database
            $db = $m->followup_service;
            echo "database worldlink selected </br>";

            //creating collection
            $collection = $db -> worldlink;
            echo "collection followup_service created </br>";

            $schedile_time = date('Y-m-d h:i:s a');

            $result = $collection->insertOne([
                "ownership" => $_POST["ownership"],
                "client_username" => $_POST["client_username"],
                "remarks" => $_POST["remarks"],
                "extra_remarks" => $_POST["extra_remarks"],
                "followup_by" => $_POST["followup_by"],
                "followup_date" => $_POST["followup_date"],
                "schedule_time" => $_POST["schedule_time"],
                "alert_message" => $_POST["alert_message"],
                "alert_medium" => $_POST["alert_medium"],
                "alert_address" => $_POST["alert_address"]
            ]);
        }  
    }
    $insert = new ownership();
    $insert->insertData();
?>
<?php

use Symfony\Component\Dotenv\Dotenv;

require '../vendor/autoload.php';

(new Dotenv())->usePutenv()->load(dirname(__DIR__).'/.env');

$user = getenv('MONGODB_USER');
$password = getenv('MONGODB_PASSWORD');

$client = new MongoDB\Client("mongodb://$user:$password@mongo:27017");

//print_r($client->demo->beers->find()->toArray());

//$collection = $client->demo->beers;
//
//$result = $collection->insertOne( [ 'name' => 'Hinterland', 'brewery' => 'BrewDog' ] );
//
//echo "Inserted with Object ID '{$result->getInsertedId()}'";


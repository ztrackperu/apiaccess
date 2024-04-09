<?php 
require '../../ztotal/vendor/autoload.php';
//use Exception;

//echo "ola";
use MongoDB\Client;
use MongoDB\Driver\ServerApi;
use MongoDB\BSON\UTCDateTime ;

const uri = 'mongodb://localhost:27017';
// Specify Stable API version 1
const apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
const client = new MongoDB\Client(uri, [], ['serverApi' => apiVersion]);



?>
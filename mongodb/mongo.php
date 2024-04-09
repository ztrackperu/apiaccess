<?php 
require '../../ztotal/vendor/autoload.php';
//use Exception;

//echo "ola";
use MongoDB\Client;
use MongoDB\Driver\ServerApi;
use MongoDB\BSON\UTCDateTime ;
//use MongoDB\BSON\Regex;

const uri = 'mongodb://localhost:27017';
// Specify Stable API version 1
const apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
const client = new MongoDB\Client(uri, [], ['serverApi' => apiVersion]);

//db.madurador.explain("executionStats").find()
//db.madurador.find().sort({id:-1}).limit(1)

//db.madurador.explain("executionStats").find().sort({id:-1}).limit(1)
/*
$regexObj = new MongoRegex("/^Nicolas/");
db.invmae.explain("executionStats").find({"IN_CODI": /^INDND/}).sort({id:-1}).limit(1)
db.invmae.explain("executionStats").find({"IN_CODI": /^INDND/}).sort({IN_CODI:1}).limit(1)
db.invmae.find({"IN_CODI": /^INDND/}).sort({"IN_CODI":-1}).projection({'_id':0,"IN_CODI":1}).limit(1)
*/

?>
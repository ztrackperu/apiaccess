<?php
$dominioPermitido = "*";
header("Access-Control-Allow-Origin: $dominioPermitido");
header("Access-Control-Allow-Headers: content-type");
header("Access-Control-Allow-Methods: OPTIONS,GET,PUT,POST,DELETE");
header('Content-type: application/json; charset=utf-8');
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
ini_set('memory_limit', '-1');
require '../mongodb/mongo.php';
$total =[];
use MongoDB\BSON\Regex;
$regexObj = new MongoRegex("/^INDND/");
//db.invmae.find({"IN_CODI": /^INDND/}).sort({"IN_CODI":-1}).projection({'_id':0,"IN_CODI":1}).limit(1)
$cursor  = client->intranet->invmae->find(array('IN_CODI' => $regexObj),array('projection' => array('_id'=>0,'IN_CODI'=> 1),'sort'=>array('_id'=>-1),'limit'=> 1));
foreach ($cursor as $document) {
    array_unshift($total,$document);
}
echo json_encode($total);

?>
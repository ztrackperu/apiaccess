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
$cursor  = client->intranet->TAB_UNID->find(array(),array('projection' => array('_id'=>0,'TU_CODI'=> 1, 'TU_DESC' => 1),'sort'=>array('_id'=>-1)));
foreach ($cursor as $document) {
    array_unshift($total,$document);
}
echo json_encode($total);

?>
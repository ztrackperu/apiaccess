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

//$variable = $_GET['data'];
//$data =  "ola desde servidor ".$variable;

//echo  json_encode($data);
error_reporting(E_ALL);
ini_set('memory_limit', '-1');
//require_once '../models/principal.php';
require '../mongodb/mongo.php';
//use Exception;


$total =[];
//depuracion para obtener C_NUMITM ,C_DESITM
//$cursor  = $client->intranet->dettabla->find(array('C_CODTAB'=>'CLP'),array('projection' => array('C_NUMITM'=> 1, 'C_DESITM' => 1),'sort'=>array('_id'=>-1),'limit'=>50000));
//$cursor  = $client->intranet->dettabla->find(array(),array('projection' => array('_id'=>0,'C_NUMITM'=> 1, 'C_DESITM' => 1,'c_codtab' => 1),'sort'=>array('_id'=>-1),'limit'=>50000));
$cursor  = $client->intranet->dettabla->find(array('C_CODTAB' => 'CLP'),array('projection' => array('_id'=>0,'C_NUMITM'=> 1, 'C_DESITM' => 1),'sort'=>array('_id'=>-1)));

foreach ($cursor as $document) {
    //if($document['C_CODTAB']=='CLP'){
        array_unshift($total,$document);
    //}
}
echo json_encode($total);

?>
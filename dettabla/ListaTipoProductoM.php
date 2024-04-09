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
require '../../ztotal/vendor/autoload.php';
//use Exception;

//echo "ola";
use MongoDB\Client;
use MongoDB\Driver\ServerApi;
use MongoDB\BSON\UTCDateTime ;

$uri = 'mongodb://localhost:27017';
// Specify Stable API version 1
$apiVersion = new ServerApi(ServerApi::V1);
// Create a new client and connect to the server
$client = new MongoDB\Client($uri, [], ['serverApi' => $apiVersion]);
$mes_fecha = date("n_Y");
//$prueba1 =$variable."_".$mes_fecha;
try {
    // Send a ping to confirm a successful connection
    $client->selectDatabase('ZTRACK_P')->command(['ping' => 1]);
    //echo "Pinged your deployment. You successfully connected to MongoDB!\n";
} catch (Exception $e) {
    printf($e->getMessage());
}
$total =[];
//depuracion para obtener C_NUMITM ,C_DESITM
//$cursor  = $client->intranet->dettabla->find(array('c_codtab'=>'CLP'),array('projection' => array('C_NUMITM'=> 1, 'C_DESITM' => 1),'sort'=>array('_id'=>-1),'limit'=>50000));
$cursor  = $client->intranet->dettabla->find(array(),array('projection' => array('_id'=>0,'C_NUMITM'=> 1, 'C_DESITM' => 1),'sort'=>array('_id'=>-1),'limit'=>50000));

foreach ($cursor as $document) {
    array_unshift($total,$document);

}
echo json_encode($total);

?>
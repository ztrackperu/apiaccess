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
$datosRecibidos = file_get_contents("php://input");
$recepcion_externa = json_decode($datosRecibidos);
$sql = $recepcion_externa->sql;
echo json_encode($sql);
//$variable = $_GET['data'];
//$data =  "ola desde servidor ".$variable;

//echo  json_encode($data);

//require_once '../models/principal.php';
/*
require '../mongodb/mongo.php';
//use Exception;


$total =[];
//depuracion para obtener C_NUMITM ,C_DESITM
//$cursor  = $client->intranet->dettabla->find(array('C_CODTAB'=>'CLP'),array('projection' => array('C_NUMITM'=> 1, 'C_DESITM' => 1),'sort'=>array('_id'=>-1),'limit'=>50000));
//$cursor  = $client->intranet->dettabla->find(array(),array('projection' => array('_id'=>0,'C_NUMITM'=> 1, 'C_DESITM' => 1,'c_codtab' => 1),'sort'=>array('_id'=>-1),'limit'=>50000));
$cursor  = client->intranet->dettabla->find(array('C_CODTAB' => 'CLP'),array('projection' => array('_id'=>0,'C_NUMITM'=> 1, 'C_DESITM' => 1),'sort'=>array('_id'=>-1)));

foreach ($cursor as $document) {
    //if($document['C_CODTAB']=='CLP'){
        array_unshift($total,$document);
    //}
}
echo json_encode($total);
*/

/*
$data1 = explode(",",$sql);
require '../configMysql/queryMysql.php';
$query =  new Query();
$date =date('d-m-Y');
if($data1[0]==1){
  $sql = "SELECT * FROM contenedores where estado=1 and  ultima_fecha>".$date;
}else{
  $sql = "SELECT * FROM contenedores where estado=1 and empresa_id=".$data1[2];
}
//$sql = "SELECT * FROM contenedores where estado=1 and  ultima_fecha>'2024-03-08 12:42:44' limit 10";
$data = $query->selectAll($sql);
$total =[];
require '../funciones1.php';
foreach($data as $document){
  array_unshift($total,objeto($document,$data1[1]));
}

echo json_encode($total);

*/

?>
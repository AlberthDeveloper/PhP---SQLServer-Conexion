<?php 

$serverName = "NOMBRE _DE_SERVIDOR";

$uid = "usuario_sql";
$pwd = "pass";

$connectionInfo = array( "UID"=>$uid,"PWD"=>$pwd,"Database"=>"siat");
 

$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn === false )
{
	echo "No es posible conectarse al servidor.</br>";
    die( print_r( sqlsrv_errors(), true));
}

else{ 
     echo "Conectado.<br />"; 
    
} 

 ?>

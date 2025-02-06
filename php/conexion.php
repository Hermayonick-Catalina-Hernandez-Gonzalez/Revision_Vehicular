<?php
$serverName = "DGTIT3327383\SQLEXPRESS"; 
$connectionInfo = array( 
    "Database"=>"prueba_verificacion",
    "CharacterSet"=>"UTF-8",
);
$conn = sqlsrv_connect( $serverName, $connectionInfo);


if ($conn === false) {
    die(print_r(sqlsrv_errors(), true));
}
?>

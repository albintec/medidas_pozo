<?php 
//Para base de datos de area local
 $server = "bqopsqgu8tcu1wgsyytb-mysql.services.clever-cloud.com";
 $user = "upl9d6pygqptf755";
 $pass = "2acAjcWGyCirIs5Wms1U";
 $database = "bqopsqgu8tcu1wgsyytb";

//Para base de datos alojada en cleverCloud
// $server = "bg6m8odcnu7xkjo4n4ia-mysql.services.clever-cloud.com";
// $user = "uk8kpiit8iwow3wz";
// $pass = "oKNqqkFzNkjRHU8I7q9a";
// $database = "bg6m8odcnu7xkjo4n4ia";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
} else {
    echo "Conectado";
}

?>
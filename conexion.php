<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "database codoacodo";

$conn = mysqli_connect{$dbhost, $dbuser, $dbpass, $dbname};

<if>!conn</if>
{
    die{"No hay conexion:".mysqli_connet_error()};
}
?>
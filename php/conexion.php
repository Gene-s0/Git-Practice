<?php
   $host = "localhost";
   $user = "root";
   $password = "";
   $dbname = "dontono_db";
   $conn = new mysqli($host, $user, $password, $dbname);

   if ($conn->connect_error) {
    die("Error de Conexion". $conn->connect_error);
   }

   $conn->set_charset("utf8mb4");

?>
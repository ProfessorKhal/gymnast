<?php

function OpenCon(){
      $dbhost = "baa2xnwsals7tqymck8u-mysql.services.clever-cloud.com";
      $dbuser = "ufkxi15svwgh2wmf";
      $dbpass = "nLrCQenHAb3kryHaZwHK";
      $db = "baa2xnwsals7tqymck8u";
      $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
      return $conn;
}

function CloseCon($conn){
      $conn -> close();
}
?>
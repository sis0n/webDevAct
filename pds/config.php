<?php
  $server = 'localhost';
  $db_name = 'pds';
  $db_user = 'root';
  $db_pass = '';

  $conn = new mysqli($server, $db_user, $db_pass, $db_name);

  if($conn->connect_error){
    die('Connection failed:' . $conn->connect_error);
  }
<?php

session_start();
  $usuario ='root';
  $pass = 'Admin09';
  try{
   
  $pdo = new PDO('mysql:host=localhost;dbname=blog', $usuario, $pass);
   
  }catch(PDOException $e){
    echo "ERROR: " . $e->getMessage();
  }
<?php

   
  session_start();

  if(!isset($_SESSION['rol'])){
    header ('location: login.php');
  }else {
    if($_SESSION['rol'] != 1){
        header('location: login.php');
    }
  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>roles y permisso</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
       <div class="row">
          <div class="col-md-4 mx-auto">
            <h1>Admin</h1>
            <a href="logout.php">salir</a>
          </div>
       </div>
    </div>
</body>
</html>
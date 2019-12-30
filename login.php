<?php
  include_once('./db.php');

   
  if($_POST){
   $username = $_POST['username'];
   $password = $_POST['password'];

   $query = "SELECT * FROM usuarios WHERE username = ? AND password = ?";
   $resultado = $pdo->prepare($query);
   $resultado->execute([$username, $password]);
   $row = $resultado->fetch();
    
     if($row == true){
      $rol = $row[3];
      $_SESSION['rol']= $rol;

      switch($_SESSION['rol']){
         case 1:
          header('location: admin.php');
         break;

         case 2:
          header('location: coordinador.php');
         break;
         default:
     }
     }else {
        echo "usuario o contraseña incorrectos";
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
             <div class="card">
             <div class="card-header text-white bg-dark">
               login
             </div>
               <div class="card-body">
                  <form action="login.php" method="POST">
                   <div class="form-group">
                    <input type="text" name="username" class="form-control" placeholder="username" autofocus>
                   </div>
                   <div class="form-group">
                    <input type="password"  name="password" class="form-control" placeholder="*******">
                   </div>
                   <button type="submit" class="btn btn-block btn-success mt-2">acount</button>
                   
                  </form>
               </div>
             </div>
          </div>
       </div>
    </div>
</body>
</html>
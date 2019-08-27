<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include "../headers/head.php"; ?>
  <script src="../js/java.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <?php
      include "../headers/head.php";
      
  ?>
  <style>
    *{
      color:white;
    }
    a{
      color:white;
    }
  </style>
</head>
<body>
 <!-- header principal -->
 <?php
      include "../headers/headerPL.php";
    ?>
     
  <br>
  <br>
  <div class="card" style="width: 100%;text-align: center;margin-top:100px">
    <img class="card-img-top" style="width: 400px;" src="../images/logo.png" alt="Card image cap">
    <div class="card-body">
      <form method="get" action="sEC.php">

      <div class="login-box">
          <h1 style="border-bottom: 6px solid #4caf50;  margin-bottom: 10px;">Login</h1>
          <div class="textbox">
            <i class="fa fa-user"></i>
            <input class="inputa" name="email" type="email" placeholder="Email">
          </div>

          <div class="textbox">
            <i class="fa fa-lock"></i>
            <input class="inputa" name="password" type="password" placeholder="Password">
          </div>
          <button style="color:white;border:2px solid #CA6DE8;" name="comm2" type="submit" class="btn" >Sign in</button><br> <br>
          <button style="color:white" type="button" id="btnMdO" class="btn" >mot de passe oublie ?</button>
          
        

    <div class="well">
    </div>
    </form>
    <div class="mdpO">
          <form action="forgot.php" method="get">
              <input class="inputa" name="forgot" type="email" placeholder="Entrer Votre Email"> <br>

              <input  style="color:white;border:2px solid #CA6DE8;margin-top:8px;" style="color:white;"id="btnMdO" type="submit" class="btn" value="Envoyer">
          </form>
        </div>
  </div>
  </div>
  </div>
  
  <?php
            include "../footer/footer.php";
        ?>
  <script>
    $('.mdpO').hide();
    $('#btnMdO').click(function () {
      $('.mdpO').toggle();
    })
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php
      include "../headers/head.php";
  ?>
  <script src="../js/java.js"></script>
        <link rel="stylesheet" href="../style/style.css">
</head>

<body>
  <!-- header principal -->
  <?php
      include "../headers/Principal-header.php";
    ?>
  <br>
  <!-- sous header -->

<div class="card" style="width: 100%;text-align: center;margin-top:100px">
  <img class="card-img-top"style="width: 400px;" src="../images/logo.png" alt="Card image cap">
  <div class="card-body">
  <form>
           
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
               
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">mot de passe</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            
            <button type="button" id="btnMdO" class="btn btn-link">mot de passe oublie ?</button>
            <div class="mdpO">
                    <input type="text" class="form-control" id="exampleInputtext1" placeholder="entrez votre email ici">
                    <button type="submit" style="margin-top:20px;" class="btn btn-primary">envoyer</button>
            </div>
            
</div>

<div class="well"> 
</div>

            <button type="submit" class="btn btn-primary">Inscrivez Vous</button>
    </form>
  </div>
</div>
<?php
      include "../footer/footer.php";
  ?>
  <script>
    $('.mdpO').hide();
   $('#btnMdO').click(function() {
    $('.mdpO').toggle();
   })
  </script>
</body>

</html>
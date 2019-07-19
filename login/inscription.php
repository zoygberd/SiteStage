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

<div class="myC card" style="width: 100%;text-align: center;margin-top:100px">
  <img class="card-img-top"style="width: 400px;" src="../images/logo.png" alt="Card image cap">
  <div class="card-body">
  <form method="post" action="add.php">
            <div class="form-group">
                <label for="exampleInputtext1">Votre Nom</label>
                <input name="nom" type="text" class="form-control" id="exampleInputPassword1" placeholder="Nom ici">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1">Email</label>
                <input name="email" type="email" id="emailField" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">
                <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">mot de passe</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
            </div>
            <div class="well"> 
      <div class="form-group">
      <label>date de naissance</label>
      <input name="date" type="text" class="form-control" placeholder="annee-mois-jours">
    </div>
</div>
<div class="well"> 
</div>

            <button name="comm" type="submit" class="btn btn-primary">Inscrivez Vous</button>
    </form>
  </div>
</div>
<?php
      include "../footer/footer.php";
  ?>
  <script>
</script>
</body>

</html>
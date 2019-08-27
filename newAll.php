<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Orientation Maroc - New Resultats</title>
  <?php include "./headers/head.php";?>
  <script src="js/java.js"></script>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <!-- header principal -->
  <?php
      include "./headers/Principal-header.php";
    ?>
  <br>

<div class="adminF">
    <h6 style="margin:20px 20px;">vous etes connectee en tant que l Admin ! vous puvez ajouter des nouvelles actualites</h6>
    <h5> <span style="color:red"> veuillez ecrire le nom d ecole en Majuscule <span style="color:blue"> Exemple :</span> <span style="color:green"> <br>FSJE <br> FST ...etc</span></span></h5>
    <h5> <span style="color:red"> veuillez ecrire le nom de ville en miniscule <span style="color:blue"> Exemple :</span> <span style="color:green"> <br>agadir <br> fes ...etc</span></span></h5>
    <form method="get" action="./Database/pourAllNew.php">
        <table class="welcomeAdmin">
        <tr>
            <th>Titre</th>
            <td><input name="titre" type="text" placeholder="hereT"></td>
            <th>sujet</th>
            <td><input name="sujet" type="text" placeholder="hereT"></td>
            <th>Nom De la ville</th>
            <td><input name="ville" type="text" placeholder="hereT"></td>
        </tr>
         <tr>
          <th>Date</span></th>
            <td><input name="date" type="text" placeholder="ann-mois-jour"></td>
          </tr>
          <th>URL photo</th>
            <td><input name="photo" type="text" placeholder="copier l url ici"></td>
          </tr>
          <tr>
            <th>introduction</th>
            <td colspan="3"> <textarea name="intro" class="form-control" rows="5" id="comment" name="text"></textarea></td>
        </tr>
        <tr>
            <th>le lien vers le site officiel de la new</th>
            <td colspan="3"> <textarea name="linkvers" class="form-control" rows="5" id="comment" name="text"></textarea></td>
        </tr>
        <tr>
            <th>plus d informations</th>
            <td colspan="3"> <textarea name="plus" class="form-control" rows="5" id="comment" name="text"></textarea></td>
        </tr>
        </table>
        <button  name="newB" type="submit" class="btn btn-light">ajouter le new</button>
    </form>
    
</div>
  <!-- Foooter  -->

  <?php
      include "./footer/footer.php";
  ?>
  </body>
  </html>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
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
    <form method="get" action="./Database/pourSo.php">
        <table class="welcomeAdmin">
        <tr>
            <th>Titre du Concours</th>
            <td><input name="titre" type="text" placeholder="hereT"></td>
           
            <th>Nom de l ecole</th>
            <td><input name="Ecole" type="text" placeholder="hereT"></td>
            <th>Nom De la ville</th>
            <td><input name="ville" type="text" placeholder="hereT"></td>
        </tr>
        <tr>
            <th>Conditions </th>
            <td colspan="2"> <textarea name="concerne" class="form-control" rows="5" id="comment" name="text"></textarea></td>
            <th>Dossier de candidature :</th>
            <td colspan="2"><textarea name="dossier" class="form-control" rows="5" id="comment" name="text"></textarea></td>
        </tr>
        <tr>
            <th>Etapes Du concours</th>
            <td colspan="3"> <textarea name="etapes" class="form-control" rows="5" id="comment" name="text"></textarea></td>
        </tr>
        <tr>
            
            <th>Description Concours</th>
            <td colspan="3"> <textarea name="textfield" class="form-control" rows="5" id="comment" name="text"></textarea></td>
           
          </tr>
          <tr>
          <th>Date</th>
            <td><input name="date" type="text" placeholder="ann-mois-jour"></td>
          </tr>
          <th>URL photo</th>
            <td><input name="photo" type="text" placeholder="copier l url ici"></td>
          </tr>
          <tr>
            <th>introduction</th>
            <td colspan="3"> <textarea name="intro" class="form-control" rows="5" id="comment" name="text"></textarea></td>
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
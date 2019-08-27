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
    <h5> <span style="color:red"> veuillez ecrire le nom d ecole en Majuscule <span style="color:blue"> Exemple :</span> <span style="color:green"> <br>FSJE <br> FST ...etc</span></span></h5>
    <h5> <span style="color:red"> veuillez ecrire le nom de ville en miniscule <span style="color:blue"> Exemple :</span> <span style="color:green"> <br>agadir <br> fes ...etc</span></span></h5>
    <form method="get" action="./Database/pourRes.php">
        <table class="welcomeAdmin">
        <tr>
            <th>Titre</th>
            <td><input name="titre" type="text" placeholder="hereT"></td>
            <th>Nom de l ecole</th>
            <td>
            <select class="select" id="ecoleh" name="Ecole">
                            <option value="" selected></option>
                            <option value="ENSA">ENSA</option>
                            <option value="EST">EST</option>
                            <option value="FST">FST</option>
                            <option value="ENCG">ENCG</option>
                            <option value="ENS">ENS</option>
                            <option value="ENSET">ENSET</option>
                            <option value="EHTP">EHTP</option>
                            <option value="ENSAM">ENSAM</option>
                            <option value="ENSIAS">ENSIAS</option>
                            <option value="INPT">INPT</option>
                            <option value="EMI">EMI</option>
                            <option value="INSEA">INSEA</option>
                            <option value="IAV">IAV</option>
                            <option value="INSEA">INSEA</option>
                            <option value="FSJES">FSJES</option>
                            <option value="FLSH">FLSH</option>
                            <option value="FS">FS</option>
                            <option value="FMP">FMP</option>
                        </select>
          </td>
            <th>Nom De la ville</th>
            <td><input name="ville" type="text" placeholder="hereT"></td>
        </tr>
        <tr>
            <th>Filieres</th>
            <td colspan="2"> <textarea name="filieres" class="form-control" rows="5" id="comment"></textarea></td>
            <th>Lien vers les resultats</th>
            <td colspan="2"><textarea name="linkres" class="form-control" rows="5" id="comment" name="text"></textarea></td>
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
          <th>Niveau :</th>
            <td> <select name="pour">
            <option value="LP">LP</option>
            <option value="LF">LF</option>
            <option value="Master S">Master S</option>
            <option value="Master F">Master F</option>
            <option value="Cycle dIng">Cycle dIng</option>
            <option value="DUT">DUT</option>
            <option value="DEUG">DEUG</option>
            <option value="cinqans">cinqans</option>
            <option value="DT">DT</option>
            <option value="TS">TS</option>
            <option value="BTS">BTS</option>
            <option value="Doctorat">Doctorat</option>
            </select></td>
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
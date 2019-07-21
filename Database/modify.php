<?php
$id=$_GET['id'];
require "../Database/pdo2.inc";
$pdo = connecto();
$req = "SELECT * FROM invit WHERE id=?";
$t = $pdo->prepare($req);
$t->execute([$id]);
$data = $t->fetch(PDO::FETCH_ASSOC);
?>
<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include "../headers/head.php";?>
  <script src="js/java.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <!-- header principal -->
  <?php
      include "../headers/Principal-header.php";
    ?>
  <br>

<div class="modifyF">
    <h6 style="margin:20px 20px;">re entrer les champs que vous voullez modifer</h6>
    <form method="get" action="../Database/modifyF.php?id=<?php echo $id; ?>">
        <table class="welcomeAdmin">
        <tr>
            <th>Titre du Concours</th>
            <td><input name="titre" type="text" placeholder="hereT" value="<?php echo $data['titre']; ?>"></td>
           
            <th>Nom de l ecole</th>
            <td><input name="Ecole" type="text" placeholder="hereT" value="<?php echo $data['Ecole']; ?>"></td>
            <th>Nom De la ville</th>
            <td><input name="ville" type="text" placeholder="hereT" value="<?php echo $data['ville']; ?>"></td>
        </tr>
        <tr>
            <th>Conditions </th>
            <td colspan="2"> <textarea value="" name="concerne" class="form-control" rows="5" id="comment" name="text"><?php echo $data['concerne']; ?></textarea></td>
            <th>Dossier de candidature :</th>
            <td colspan="2"><textarea name="dossier" class="form-control" rows="5" id="comment" name="text"><?php echo $data['dossier']; ?></textarea></td>
        </tr>
        <tr>
            <th>Etapes Du concours</th>
            <td colspan="3"> <textarea value="" name="etapes" class="form-control" rows="5" id="comment" name="text"><?php echo $data['etapes_conc']; ?></textarea></td>
        </tr>
        <tr>
            
            <th>Description Concours</th>
            <td colspan="3"> <textarea value="" name="textfield" class="form-control" rows="5" id="comment" name="text"><?php echo $data['text_ab']; ?></textarea></td>
           
          </tr>
          <tr>
          <th>Date</th>
            <td><input value="<?php echo $data['date']; ?>" name="date" type="text" placeholder="ann-mois-jour"></td>
          </tr>
          <th>URL photo</th>
            <td><input value="<?php echo $data['photo']; ?>" name="photo" type="text" placeholder="copier l url ici"></td>
          </tr>
          <tr>
            <th>introduction</th>
            <td colspan="3"> <textarea value="" name="intro" class="form-control" rows="5" id="comment" name="text"><?php echo $data['intro']; ?></textarea></td>
        </tr>
        <tr>
          <th>Son ID</th>
            <td><input value="<?php echo $data['ID']; ?>" name="id" type="text" placeholder="id here"></td>
          </tr>
        </table>
        <button name="newB" type="submit">Modifier</button>
    </form>
    
</div>
<?php
      include "../footer/footer.php";
  ?>
  </body>
  </html>
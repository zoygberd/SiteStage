<?php
$id=$_GET['id'];
require "../Database/pdo2.inc";
$pdo = connecto();
$req = "SELECT * FROM newsall WHERE idN=?";
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
    <form method="get" action="../Database/modifyNAk.php?id=<?php echo $id; ?>">
        <table class="welcomeAdmin">
            <tr>
                <th>Titre</th>
                <td><input name="titre" type="text" value="<?php echo $data['titre'] ?>" placeholder="hereT"></td>
                <th>sujet</th>
                <td><input name="sujet" type="text" value="<?php echo $data['sujet'] ?>" placeholder="hereT"></td>
                <th>Nom De la ville</th>
                <td><input name="ville" type="text" value="<?php echo $data['ville'] ?>" placeholder="hereT"></td>
            </tr>
            <tr>
            <th>Date</span></th>
                <td><input name="date" type="text" value="<?php echo $data['date'] ?>" placeholder="ann-mois-jour"></td>
            </tr>
            <th>URL photo</th>
                <td><input name="photo" type="text" value="<?php echo $data['photos'] ?>" placeholder="copier l url ici"></td>
            </tr>
            <tr>
                <th>introduction</th>
                <td colspan="3"> <textarea name="intro" value="<?php echo $data['intro'] ?>" class="form-control" rows="5" id="comment" name="text"></textarea></td>
            </tr>
            <tr>
                <th>le lien vers le site officiel de la new</th>
                <td colspan="3"> <textarea name="linkvers" class="form-control" rows="5" id="comment" name="text"><?php echo $data['linkvers'] ?></textarea></td>
            </tr>
            <tr>
                <th>plus d informations</th>
                <td colspan="3"> <textarea name="plus" class="form-control" rows="5" id="comment" name="text"><?php echo $data['plus'] ?></textarea></td>
            </tr>
            <tr>
            <th> l id de new :</span></th>
                <td><input name="id" type="text" value="<?php echo $data['idN'] ?>" placeholder="ann-mois-jour"></td>
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
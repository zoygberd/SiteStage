<?php
    $id=$_GET['id'];
    require "../Database/pdo2.inc";
      $pdo = connecto();
      $req = "DELETE FROM newsall WHERE idN=?";
      $t = $pdo->prepare($req);
      $t->execute([$id]);
      header('location: ../index.php');
?>
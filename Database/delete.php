<?php
    $id=$_GET['id'];
    require "../Database/pdo2.inc";
      $pdo = connecto();
      $req = "DELETE FROM invit WHERE ID=?";
      $t = $pdo->prepare($req);
      $t->execute([$id]);
      header('location: ../index.php');
?>
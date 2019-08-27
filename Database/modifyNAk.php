<?php
if(isset($_GET['newB'])){
    $id = $_GET['id'];
    $titre= $_GET['titre'];
    $date= $_GET['date'];
    $ville= $_GET['ville'];
    $intro= $_GET['intro'];
    $plus = $_GET['plus'];
    $sujet=$_GET['sujet'];
    $link=$_GET['linkvers'];
    $photo= $_GET['photo'];
    

    include "pdo2.inc";
    $pdo = connecto();
    $req = "UPDATE newsall
    SET titre=?,date=?,ville=?,intro=?,plus=?,sujet=?,lienvers=?,photos=?
    WHERE idN=?;
    ";
    $t = $pdo->prepare($req);
    $t->execute([$titre,$date,$ville,$intro,$plus,$sujet,$link,$photo,$id]);
    header('location: ../index.php');
    
}
?>
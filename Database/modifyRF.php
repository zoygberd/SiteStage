<?php
if(isset($_GET['newB'])){
    $id = $_GET['id'];
    $titre= $_GET['titre'];
    $ville= $_GET['ville'];
    $Ecole= $_GET['Ecole'];
    $date= $_GET['date'];
    $filieres= $_GET['filieres'];
    $linkres= $_GET['linkres'];
    $photo= $_GET['photo'];
    $intro= $_GET['intro'];
    $pour = $_GET['pour'];

    include "pdo2.inc";
    $pdo = connecto();
    $req="UPDATE result
    SET titre = ?,Ecole = ?,Ville = ?,filieres = ?,lien = ?,date = ?,photo = ?,intro = ?,pour = ?
    WHERE ID = ?;
    ";
    $t = $pdo->prepare($req);
    $t->execute([$titre,$Ecole,$ville,$filieres,$linkres,$date,$photo,$intro,$pour,$id]);
    header('location: ../index.php');
    
}
?>
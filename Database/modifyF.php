<?php
if(isset($_GET['newB'])){
    $id = $_GET['id'];
    $titre= $_GET['titre'];
    $ville= $_GET['ville'];
    $Ecole= $_GET['Ecole'];
    $date= $_GET['date'];
    $concerne= $_GET['concerne'];
    $dossier= $_GET['dossier'];
    $etapes= $_GET['etapes'];
    $textfield= $_GET['textfield'];
    $photo= $_GET['photo'];
    $intro= $_GET['intro'];
    $link=$_GET['link'];
    $filiere=$_GET['filiere'];
    $pour= $_GET['pour'];
    

    include "pdo2.inc";
    $pdo = connecto();
    $req = "UPDATE invit
    SET titre = ? ,date = ? ,concerne = ? ,dossier = ?,text_ab = ?,etapes_conc = ?,Ecole= ? ,ville = ?,photo = ?,intro = ?,link = ?,filieres = ?,pour = ?
    WHERE ID=?;
    ";
    $t = $pdo->prepare($req);
    $t->execute([$titre,$date,$concerne,$dossier,$textfield,$etapes,$Ecole,$ville,$photo,$intro,$link,$filiere,$pour,$id]);
    header('location: ../index.php');
    
}
?>
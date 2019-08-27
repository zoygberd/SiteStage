<?php  
    $email=$_GET['forgot'];
    include "../database/PDO.inc";
    $pdo=connect();
    $req="SELECT * FROM logins WHERE email=?";
    $t=$pdo->prepare($req);
    $t->execute([$email]);
    $row=$t->fetch(PDO::FETCH_ASSOC);
    $to = $row['Email'];
    $pswd = $row['MotDp'];
    $sub = "<h3>Votre Mot de passe orientation Maroc est :</h3>".$pswd."\n\r et votre email est :".$to;
    $txt = "Bonjour ".$row['Nom'];
    $head = "From: Admin@OrientatiinMaroc.com" . "\r\n" .
    "CC: ".$to;
    mail($to,$sub,$txt,$head);
?>
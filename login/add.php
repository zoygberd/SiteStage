<?php include "../database/PDO.inc"; ?>
<?php

$nom = $_POST['nom'];
$email = $_POST['email'];
$password = $_POST['password'];
$date = $_POST['date'];
//....
$pdo = connect();
function VerifyClient($email){
        $conn = connect();
        $req = "SELECT * FROM logins WHERE Email=?";
        $t = $conn->prepare($req);
        $t->execute([$email]);
        if($t->fetch()){
            return false;
        }else{
            return true;
        }
        
}
//.....

if(VerifyClient($email)){
$req = "INSERT INTO logins(Nom,Email,MotDp,BirthD) VALUES(?,?,?,?)";
$t = $pdo->prepare($req);
$t->execute([$nom,$email,$password,$date]);
echo "added";
        // header('Location: ./add2.php');
}else{
    header('Location: ../add3.php');
}
?>
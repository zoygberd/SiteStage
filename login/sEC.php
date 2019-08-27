<?php
session_start();
  include "../database/PDO.inc";
  function getUser($email,$password){
    $conn = connect();
    $req = "SELECT Nom FROM logins WHERE Email=? AND MotDp=?";
    $t = $conn->prepare($req);
    $t->execute([$email,$password]);
    $result = $t->fetch(PDO::FETCH_ASSOC);
    return $result['Nom'];
  }
  if(isset($_GET['comm2'])){
                    $email = $_GET['email'];
                    $password = $_GET['password'];
                    $conn = connect();
                    $req = "SELECT * FROM logins WHERE Email=? AND MotDp=?";
                    $t = $conn->prepare($req);
                    $t->execute([$email,$password]);
                    if($t->fetch()){
                        $username = getUser($email,$password);
                        $_SESSION['username']= $username;
                        $_SESSION['email']= $email;
                        
                        header('location:../index.php');
                    }else{
                      ?>
                      <script>
                      alert('mot de passe ou email sont incorettent');
                      </script>
                      <?php
                      header('location:./seConn.php');
                    }
                  }
?>
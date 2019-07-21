<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <script src="../js/java.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <?php
      include "../headers/head.php";
      
  ?>
</head>
<body>

  <br>
  <div class="card" style="width: 100%;text-align: center;margin-top:100px">
    <img class="card-img-top" style="width: 400px;" src="../images/logo.png" alt="Card image cap">
    <div class="card-body">
      <form method="get">

        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
            placeholder="Enter email">

        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">mot de passe</label>
          <input name="password" type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
        </div>

        <button type="button" id="btnMdO" class="btn btn-link">mot de passe oublie ?</button>
        <div class="mdpO">
          <input type="text" class="form-control" id="exampleInputtext1" placeholder="entrez votre email ici">
          <button type="submit" style="margin-top:20px;" class="btn btn-primary">envoyer</button>
        </div>

    </div>

    <div class="well">
    </div>

    <button name="comm2" type="submit" class="btn btn-primary">se connecter</button>
    </form>
  </div>
  </div>

  <?php
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
                        echo "ohayooo ". $_SESSION['username'];
                        header('location:../index.php');
                    }else{
                      ?>
                      <script>
                      alert('mot de passe ou email sont incorettent');
                      </script>
                      <?php
                    }
                  }
?>
  <?php
            include "../footer/footer.php";
        ?>
  <script>
    $('.mdpO').hide();
    $('#btnMdO').click(function () {
      $('.mdpO').toggle();
    })
  </script>
</body>

</html>
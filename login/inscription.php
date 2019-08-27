<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include "../headers/head.php"; ?>
  <script src="../js/java.js"></script>
  <link rel="stylesheet" href="../style/style.css">
  <link rel="stylesheet" href="../style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
  <?php
      include "../headers/head.php";
      
  ?>
    <style>
    *{
      color:white;
    }
    a{
      color:white;
    }
  </style>
</head>
<body>
  <!-- header principal -->
  <?php
      include "../headers/headerPL.php";
    ?>
  <br>
  <!-- sous header -->
  <div class="card" style="width: 100%;text-align: center;margin-top:100px">
    <img class="card-img-top" style="width: 400px;" src="../images/logo.png" alt="Card image cap">
    <div class="card-body">
      <form method="post">

      <div class="login-box">
          <h1 style="border-bottom: 6px solid #4caf50;  margin-bottom: 10px;">Page D'inscription <br> <br></h1>
          
          <div class="textbox">
            <i class="fa fa-user"></i>
            <input class="inputa" name="email" type="email" placeholder="Email">
          </div>
          <div class="textbox">
            <i class="fa fa-user"></i>
            <input class="inputa" name="nom" type="text" placeholder="Votre Nom Complet">
          </div>
          <div class="textbox">
            <i class="fa fa-user"></i>
            <input class="inputa" name="date" type="text" placeholder="annee-mois-jours">
          </div>
          <div class="textbox">
            <i class="fa fa-user"></i>
            <select class="selecta" id="ecoleh" name="ecole">
                            <option value="choix" selected>choisisser une Ecole</option>
                            <option value="ENSA">ENSA</option>
                            <option value="EST">EST</option>
                            <option value="FST">FST</option>
                            <option value="ENCG">ENCG</option>
                            <option value="ENS">ENS</option>
                            <option value="ENSET">ENSET</option>
                            <option value="EHTP">EHTP</option>
                            <option value="ENSAM">ENSAM</option>
                            <option value="ENSIAS">ENSIAS</option>
                            <option value="INPT">INPT</option>
                            <option value="EMI">EMI</option>
                            <option value="INSEA">INSEA</option>
                            <option value="IAV">IAV</option>
                            <option value="INSEA">INSEA</option>
                            <option value="FSJES">FSJES</option>
                            <option value="FLSH">INSEA</option>
                            <option value="FS">INSEA</option>
                        </select>
                        
          </div>
          <div class="textbox">
            <i class="fa fa-user"></i>
            <input class="inputa" name="ville" type="text" placeholder="Nom De Ville">
          </div>
          <div class="textbox">
            <i class="fa fa-user"></i>
            <select  class="selecta" id="pour" name="niv">
                    <option value="choix" selected>choisisser votre niveau</option>
                        <option value="LP">LP</option>
                        <option value="LF">LF</option>
                        <option value="Master S">Master S</option>
                        <option value="Master F">Master F</option>
                        <option value="Cycle dIng">Cycle dIng</option>
                        <option value="DUT">DUT</option>
                        <option value="DEUG">DEUG</option>
                        <option value="cinqans">cinqans</option>
                        <option value="DT">DT</option>
                        <option value="TS">TS</option>
                        <option value="BTS">BTS</option>
                        <option value="Doctorat">Doctorat</option>
                    </select>
          </div>

          <div class="textbox">
            <i class="fa fa-lock"></i>
            <input class="inputa" name="password" type="password" placeholder="Password">
          </div>
          <button style="background-color:#35424a;color:white;border:1px solid #CA6DE8;"name="comm" type="submit" class="btn btn-primary">Inscrivez Vous</button>
    </form>
</div>
</div>
<?php
include "../database/PDO.inc";
    
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
          
      if(isset($_POST['comm'])){
        $nom = $_POST['nom'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $date = $_POST['date'];
        if(VerifyClient($email)){
          $pdo = connect();
          $req = "INSERT INTO logins(Nom,Email,MotDp,BirthD) VALUES(?,?,?,?)";
          $t = $pdo->prepare($req);
          $t->execute([$nom,$email,$password,$date]);
          ?>
          <script>
           alert('Vous avez ete bien Inscrit <br> veuillez aller vers la page d acceuil pour vous connecter');
        </script>
        <?php
        }else{
          echo "<h4 id='messageError' style='visibility:hidden;'>Cet email a deja ete utilise,Veuillez utiliser un autre email !</h4>";
        }
        $nom = NULL;
        $email = NULL;
        $password =NULL;
        $date = NULL;
        $_POST['comm']=NULL;
      }
?>
<?php
      include "../footer/footer.php";
  ?>
  <script>
  alert(document.getElementById('messageError').innerHTML);
</script>
</body>

</html>
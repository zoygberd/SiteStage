<?php session_start(); 
include "./Database/pdo2.inc";?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Orinetation Maroc - Bac+5</title>
  <?php
      include "./headers/head.php";
  ?>
  <script src="js/java.js"></script>
  <link rel="stylesheet" href="style/styleTable.css">
  <link rel="stylesheet" href="style/style.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>

<body>
  <!-- header principal -->
  <?php
      include "./headers/Principal-header.php";
    ?>
  <br>
  <!-- sous header -->
  <?php
    if(!isset($_SESSION['username'])){
      include "./headers/Sous-header1.php";
    
      }else if(isset($_SESSION['username'])){
        include "./headers/Sous-header2.php";
      }   
  ?>
  <!-- pour admin  -->
  <div class="formAdmin">
      <?php 
      if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
      ?>
        <div ><i  id="btnAdmin" style="cursor:pointer;" class="fa fa-plus fa-4x"></i></div>
        <ul id="adminChoises">
          <li style="margin-top:5px;"><a href="./so.php"><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter news</button></a></li>
          <li style="margin-top:5px;"><a href="./res.php"><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter Resultat</button></a></li>
        </ul>
      <?php
      }else if(isset($_SESSION['email'])){
      echo "<h3 style='margin:20px 20px;'>Bienvenue ".$_SESSION['username']."</h3>";
    }else if(!isset($_SESSION['email'])){
      echo "<h3 style='margin:20px 20px;'>Vous pouvez creer un compte pour se connecter</h3>";
    }
      ?>
</div>
  <!-- Articles de new-conc  -->
  <section class="PlaceLeft">
  <div id="newsALL">
 
  <?php
          $pdo = connecto();
          $req = "SELECT * FROM invit WHERE pour = ? OR pour = ? OR pour = ? ORDER BY ID DESC Limit 20";
      $t = $pdo->prepare($req);
      $t->execute(['Master S','Master F','Cycle dIng']);
          while($row = $t->fetch(PDO::FETCH_ASSOC)){
          ?>
          
        <article id="main-col">
        <?php
            if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
        ?>
        
            <div class="iconC"><a href="./Database/delete.php?id=<?php echo $row['ID'] ?>" ><i class="fa fa-window-close fa-2x"></i></a></div>
            <div class="iconC"><a href="./Database/modify.php?id=<?php echo $row['ID'] ?>" ><i class="fa fa-edit fa-2x"></i></a></div>
        
        <?php } ?>
          <ul id="services">
            <li>
              <img style="width:30%;float:left;padding:10px;" src="<?php echo $row['photo'] ?>" alt="">
              <div style="width:70%;float:right;padding:10px;" class="col2">
              <h5 style="width:100%;"><?php echo $row['titre'] ?></h5>
              <p><?php echo substr($row['intro'],1,150) ?></p>
						  <p><a style="color:#CA6DE8" href="new?id=<?php echo $row['ID'] ?>">cliquer ici pour lire la suite</a></p>
              </div>
              
            </li>
          </ul>
        </article>
          <?php } ?>
     

          <!-- autre type article -->
          <?php
          $pdo = connecto();
          $req = "SELECT * FROM result WHERE pour = ? OR pour = ? OR pour = ? ORDER BY ID DESC Limit 20";
          $t = $pdo->prepare($req);
          $t->execute(['Master S','Master F','Cycle dIng']);
          while($row = $t->fetch(PDO::FETCH_ASSOC)){
          ?>
          
        <article id="main-col">
        <?php
            if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
        ?>
        
            <div class="iconC"><a href="./Database/deleteR.php?id=<?php echo $row['ID'] ?>" ><i class="fa fa-window-close fa-2x"></i></a></div>
            <div class="iconC"><a href="./Database/modifyR.php?id=<?php echo $row['ID'] ?>" ><i class="fa fa-edit fa-2x"></i></a></div>
        
        <?php } ?>
          <ul id="services">
            <li>

              <img style="width:30%;float:left;padding:10px;" src="<?php echo $row['photo'] ?>" alt="">
              <div style="width:70%;float:right;padding:10px;" class="col2">
              <h5 style="width:100%;"><?php echo $row['titre'] ?></h5>
              <p><?php echo substr($row['intro'],1,150) ?></p>
              
						  <p><a style="color:#CA6DE8" href="new?id=<?php echo $row['ID'] ?>">cliquer ici pour lire la uite</a></p>
              </div>
            </li>
          </ul>
        </article>
          <?php } ?>
</div>
</section>
 <!-- general news  -->
    
 <section class="placeRight">
    <?php
          $pdo = connecto();
          $req = "SELECT * FROM newsall ORDER BY idN DESC Limit 6";
          $t = $pdo->prepare($req);
          $t->execute();
          while($row = $t->fetch(PDO::FETCH_ASSOC)){
          ?>
             <?php
            if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
        ?>
        
            <div class="iconC"><a href="./Database/deleteNa.php?id=<?php echo $row['idN'] ?>" ><i class="fa fa-window-close fa-2x"></i></a></div>
            <div class="iconC"><a href="./Database/modifyNa.php?id=<?php echo $row['idN'] ?>" ><i class="fa fa-edit fa-2x"></i></a></div>
        
        <?php } ?>
    <aside id="sidebar">
          <div class="dark">
            <img style="width:100%;height:120px;" src="<?php echo $row['photos'] ?>" alt="">
            <h4 style="color:#e8491d"><?php echo $row['titre'] ?></h4>
            <p><?php echo substr($row['intro'],0,140) ?></p>
            <p><a style="color:red" href="./newAff.php?id=<?php echo $row['idN'] ?>">lire la suite</a></p>
          </div>
        </aside>
        <?php } ?>
    </section>
  <!-- Foooter  -->
  <?php
      include "./footer/footer.php";
  ?>
  <script>
  $('#adminChoises').hide();
   $('#btnAdmin').click(function(){
      $('#adminChoises').toggle();
    });
  </script>
</body>

</html>
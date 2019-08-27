<?php session_start(); 
include "Database/pdo2.inc";
$id = $_GET['id'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php include "./headers/head.php";?>
  <script src="js/java.js"></script>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="./style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<body>
  <!-- header principal -->
  <?php
      include "./headers/Principal-header.php";
    ?>
  <br>
  <!-- sous header -->
 
   <div class="testTO">
   <?php
 if(!isset($_SESSION['username'])){
  include "./headers/Sous-header1.php";
 
  }else if(isset($_SESSION['username'])){
    include "./headers/Sous-header2.php";
  }
     
  ?>
      </div>
  
  <!-- Connection a la base de donn -->
  <?php
    $pdo = connecto();
    $req = "SELECT * FROM newsall WHERE idN=?";
    $t = $pdo->prepare($req);
    $t->execute([$id]);
    $data = $t->fetch(PDO::FETCH_ASSOC);
    ?>
  <!-- Article de new : -->
  <section class="PlaceLeft">
  <div class="Ecoleinfo">
        <div class="infoE">
          <?php
                      $jsondata = file_get_contents("./file.Json");
                      $json = json_decode($jsondata,true);
                      foreach ($json as $news) { 
                          if($news['NomEcole'] == $data['sujet'] && $news['Ville'] == $data['ville']){
                            ?>
                               <article id="main-col">
                                  <h1 class="page-title"><?php echo $data['titre'] ?></h1>
                                  <h4 class="page-title"><?php echo $news['NomEcole'] ?> de <?php echo $news['Ville'] ?></h4>
                                  <p>
                                   <img style="width:50%;height:200px;"src="<?php echo $data['photo'] ?>" alt="">
                                  </p>
                                  <p class="dark">
                                        <?php echo substr($news['intro'],0,200)?>....... <a href="ecole.php?ecole=<?php echo $news['NomEcole']?>&ville=<?php echo $news['Ville']?>">Lire la suite</a>
                                  </p>
                                </article>
                          <?php
                                          }}
                        ?>
        </div>
  </div>
  <article style="float:left" class="dark" id="main-col">
        <img style="width:100%;border-right:2px solid red;" src="<?php echo $data['photos'] ?>" alt="">
          <p  style="width:100%;color:black">
                <table>
                  <tr>
                   
                    <td style="color:black" ><?php echo $data['ville'] ?></td>
                  </tr>
                  <tr>
                    
                    <td style="color:black"><?php echo $data['date'] ?></td>
                  </tr>
                  <tr>
                    
                    <td style="color:black"><?php echo $data['sujet'] ?></td>
                  </tr>
                </table>
          </p>
        </article>
        <article style="float:left" id="main-col">
         
          <p class="dark">
            <?php echo $data['sujet'] ?>
          </p>
        </article>
        <article style="float:left" id="main-col">
          <h2 style="color:red" class="page-title">introdution</h2>
          <p>
            <?php echo $data['intro'] ?>
          </p>
        </article>
        <article style="float:left" id="main-col">
          <p>
            <?php echo $data['plus'] ?>
          </p>
        </article>
        <article style="float:left" id="main-col">
         
          <p class="dark">
            <a href="<?php echo $data['lienvers'] ?>">cliquez ici ! Pour Plus D'informations</a>
          </p>
        </article>
  </div>
  </section>
  <!-- News Here : -->
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
            <p><a style="color:#e8491d;" href="./newAff.php?id=<?php echo $row['idN'] ?>">lire la suite</a></p>
          </div>
        </aside>
        <?php } ?>
    </section>

  <!-- Foooter  -->
  <?php
      include "./footer/footer.php";
  ?>
  <!-- Script -->
  <script>
    $('document').ready(function () {
          $('#acceuil').css('color', '#CA6DE8');
        }
  </script>
</body>

</html>
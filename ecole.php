
<?php session_start(); 
include "./Database/pdo2.inc"; 
$ecoleN = $_GET['ecole'];
$villeN = $_GET['ville'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Orinetation Maroc - <?php echo $ecoleN."De".$villeN ?></title>
  <?php include "./headers/head.php";?>
  <script src="js/java.js"></script>
  <link rel="stylesheet" href="style/style.css">
  <link rel="stylesheet" href="./style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
  .tableau{
    width:100%;
  }
    .tableau tr th{
        width:50%;
        padding:3px;
        border-right:2px solid red;
    }
    .tableau tr td{
        width:50%;
        padding:3px;
    }
</style>
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
  
  
<!-- Article -->
<section class="PlaceLeft">
<?php
                      $jsondata = file_get_contents("./file.Json");
                      $json = json_decode($jsondata,true);
                      foreach ($json as $news) { 
                          if($news['NomEcole'] == $ecoleN && $news['Ville'] == $villeN){
                            ?>
<article id="main-col" class="dark">
          <h1 class="page-title" style="color:black;">A propos de l ecole</h1>
          <ul id="services" style="list-style:none;">
            <li>
              <img style="width:40%;float:left;height:150px;" src="<?php echo $news['picture'] ?>" alt="">
              <div style="float:left;padding-left:30px;width:60%;" class="infos">
                    <table class="tableau dark">
                        <tr>
                            <th>Nom</th>
                            <td><?php echo $news['NomEcole'] ?></td>
                        </tr>
                        <tr>
                            <th>Ville</th>
                            <td><?php echo $news['Ville'] ?></td>
                        </tr>
                        <tr>
                            <th>email</th>
                            <td><?php echo $news['email'] ?></td>
                        </tr>
                        <tr>
                            <th>telephone</th>
                            <td><?php echo $news['tel'] ?></td>
                        </tr>
                        <tr>
                            <th>site</th>
                            <td><?php echo $news['site'] ?></td>
                        </tr>
                    </table>
              </div>
            </li>
           
          </ul>
        </article>
        <article id="main-col">
          <h1 class="page-title">Introduction de l'ecole</h1>
          <p>
            <?php echo $news['intro'] ?>
          </p>
          <p class="dark">
            <span style="color:red">Adresse de l ecole : </span> <br><?php echo $news['adresse'] ?>
          </p>
        </article>
        <article id="main-col">
          <h1 class="page-title">En Plus</h1>
          
                <p class="dark" style="width:50%;float:left">
                            <span style="font-size:30px;">Formations</span><br>
                    <?php
                    foreach ($news['formations'] as $formation) {
                                            
                        echo "<span style='color:;list-style:none;'>".$formation."</span> <br>";
                        
                    }
                                    ?>
                </p>
                <p style="width:50%;float:left;padding:20px;">
                            <span style="font-size:30px;">Formations</span><br>
                    <?php
                    foreach ($news['filieres'] as $filiere) {
                                            
                        echo "<span style='color:;list-style:none;padding-left:10px;'>".$filiere."</span> <br>";
                        
                    }
                                    ?>
                </p>


        </article>
                          <?php }} ?>
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
            <p><a style="color:#e8491d;" href="newAff.php?id=<?php echo $row['idN'] ?>">lire la suite</a></p>
          </div>
        </aside>
        <?php } ?>
    </section>
  <!-- Connection  -->
 


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

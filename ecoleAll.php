
<?php session_start(); 
$ecoleN = $_GET['ecole'];
include "./Database/pdo2.inc"; 
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Orinetation Maroc - <?php echo $ecoleN ?></title>
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
     
<!-- AFter ALL ! -->
<section class="PlaceLeft">
<article id="main-col">
                        <?php 
                            $jsondata = file_get_contents("./file.Json");
                            $json = json_decode($jsondata,true);
                            foreach ($json as $news) { 
                                if($news['NomEcole'] == $ecoleN && ($news['Ville']=='fes'||$news['Ville']=='agadir' || $news['Ville']=='meknes'||$news['Ville']=='rabat') ){
                         ?>
                                    <h1 class="page-title"><?php echo $news['NomEcole'] ?></h1>
                                    <p >
                                    <img style="width:100%;height:200px;padding:0px 50px;" src="<?php echo $news['picture'] ?>" alt=""></p>
                                    <p class="dark">
                                    <?php echo $news['intro'] ?>
                                    </p>
                                <?php }} ?>
          <h3>on peut trouvez <?php echo $ecoleN ?> dans :</h3>
          
         
               <table style="width:100%;margin:20px;" class="dark">
               <?php
                            $jsondata = file_get_contents("./file.Json");
                            $json = json_decode($jsondata,true);
                            foreach ($json as $news) { 
                                if($news['NomEcole'] == $ecoleN){
                                    ?>
                   <tr>
                       <th style="padding:10px;border-bottom:2px solid white;border-right:2px solid white;"><?php echo $news['Ville'] ?></th>
                       <td style="padding:10px;border-bottom:2px solid white;"><a style="color:#CA6DE8" href="ecole.php?ecole=<?php echo $news['NomEcole'] ?>&ville=<?php echo $news['Ville'] ?>">Aller voir l ecole </a></td>
                   </tr>
                                <?php }} ?>
               </table>
         
        </article>
        </section>
  <!-- News de Right -->
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

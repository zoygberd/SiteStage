<?php session_start();
include "./Database/pdo2.inc"; ?>
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
  <link rel="stylesheet" href="style/styleTable.css">
  <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
</head>
<style>
    .carousel .carousel-item {
  height: 500px;
}

.carousel-item img {
    position: absolute;
    top: 0;
    left: 0;
    min-height: 500px;
}
@media screen and (max-width:700px){
  .plusdi{
    display:hidden;
  }
}
</style>
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
  <!-- Slider (carrousel bootstrap (affiche les 5 premiers news ))-->
  <div class="Mycontain">
        <div  id="carouselExampleIndicators" class="Mcarousel carousel slide" data-ride="carousel">
        <ol style="background-color:black; opacity:0.8;" class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="5"></li>
        </ol>
        <div class="carousel-inner">
        <div class="carousel-item active">
            <img class="d-block w-100" src="https://www.jamiati.ma/sites/default/files/styles/node-wide-fullcustom_user_large_1x/public/events/sige_2019_0.jpg?timestamp=1562315041" alt="First slide">
            <div  style="background-color:white; opacity:0.8;" class="carousel-caption d-none d-md-block">
              <h5 style="color:red">Visitez le Salon International des Grandes Ecoles et Universités - SIGE</h5>
              <p style="color:black">Le SIGE sera la manifestation incontournable dédiée aux rencontres entre les lycéens, bacheliers, étudiants, parents, les grandes écoles et les universités internationales tous venus dans le but d’opérer au bon fonctionnement des inscriptions pour l’année scolaire 2019/2020.
                        Le Salon des Inscriptions aux Grandes Écoles & Universités est un événement exclusif de rencontres et d’échanges qui réunit l’ensemble des acteurs majeurs des études au Maroc ou à l’international.</p>
              <p ><a style="color:blue" href=""> pour Plus d information</a></p>
            </div>
          </div>
        <?php
      $pdo = connecto();
      $req = "SELECT * FROM invit ORDER BY ID DESC Limit 5";
      $t = $pdo->prepare($req);
      $t->execute();
      while($row = $t->fetch(PDO::FETCH_ASSOC)){
       ?>
       
          <div class="carousel-item">
            <img class="d-block w-100" src="<?php echo $row['photo']; ?>" alt="First slide">
            <div  style="background-color:white; opacity:0.8;" class="carousel-caption d-none d-md-block">
              <h5 style="color:red"><?php echo $row['titre']; ?></h5>
              <p style="color:black"><?php echo $row['intro']; ?></p>
              <p ><a style="color:blue" href="new.php?id=<?php echo $row['ID']; ?>"> pour Plus d information</a></p>
            </div>
          </div>
       
      <?php }?>
      </div>
     
        <a style="background-color:black; opacity:0.8;" class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a style="background-color:black; opacity:0.8;" class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>
  </div >

  <!-- search bar -->

  <div class="chercher">
    <form class="MyForm form-inline my-1 my-lg-1">
      <p> rechercher les ecoles selons le nom <br> ou selon la ville</p>
      <p>appuyez sur <i class="fa fa-window-close fa-x"></i> <br>pour terminer votre recherche</p> <br>
      <input id="searchB" class="form-control mr-sm-5" type="search" placeholder="checher ici" aria-label="Search">
    </form>
    <table class="table">
      <div style="cursor:pointer; width:50px; float:right" onclick="closeS()" class="icon"><i
          class="fa fa-window-close fa-3x"></i></div>
      
      <tbody id="tableSearch">

      </tbody>
    </table>
  </div>

<!-- search news (advanced !)-->
<?php include "database/searshNews.php" ?>

  <!-- pour l admin (ajout des news) -->
<div class="formAdmin">
      <?php 
      if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
      ?>
        <div ><i  id="btnAdmin" style="cursor:pointer;" class="fa fa-plus fa-4x"></i></div>
        <ul id="adminChoises">
          <li style="margin-top:5px;"><a href="./so.php"><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter news</button></a></li>
          <li style="margin-top:5px;"><a href="./res.php"><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter Resultat</button></a></li>
          <li style="margin-top:5px;"><a href="./newAll.php"><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter general new </button></a></li>
        </ul>
      <?php
      }else if(isset($_SESSION['email'])){
      echo "<h3 style='margin:20px 20px;'>Bienvenue ".$_SESSION['username']."</h3>";
    }else if(!isset($_SESSION['email'])){
      echo "<h3 style='margin:20px 20px;'>Vous pouvez creer un compte pour se connecter</h3>";
    }
      ?>
</div>







    <!-- general news  -->
    

  
    


  <!-- Articles de new-conc  -->
  <section class="PlaceLeft">
  <div id="newsALL">
 
  <?php
          $pdo = connecto();
          $req = "SELECT * FROM invit ORDER BY ID DESC Limit 6";
          $t = $pdo->prepare($req);
          $t->execute();
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
          $req = "SELECT * FROM result ORDER BY ID DESC Limit 6";
          $t = $pdo->prepare($req);
          $t->execute();
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
            <!-- news de droite -->
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
            <img style="width:100%;" src="<?php echo $row['photos'] ?>" alt="">
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






  <!-- Script -->

  <script>
    $('document').ready(function () {
      $('#adminChoises').hide();
      $('#acceuil').css('color', '#CA6DE8');

      //////////////////////////Search Bar

      $('#searchB').keydown(function () { //quand l utilisateur ecrit qlq chose x

        $.getJSON('file.json', function (data) {
          var searchF = $('#searchB').val();
          var exp = new RegExp(searchF, "i");
          var out;
          var i = 0;
          $.each(data, function (key, val) {
            if ((val.NomEcole.search(exp) != -1) || (val.Ville.search(exp) != -1)) {
              out += "<tr>";
              out += "<td>" + val.NomEcole + "</td>";
              out += "<td>" + val.Ville + "</td>";
              out += "<td><a style='color:blue;' href='ecole.php?ecole="+val.NomEcole+"&ville="+val.Ville+"' >lien vers le site</a></td>";
              out += "</tr>";
            }
          }); //3
          $('#tableSearch').html(out);
          out = "";

        }); //2

      }); //1
    }); //generak 
    function closeS() {

      $('#tableSearch').html('');
      $('#searchB').val('');
    }
    $('#btnAdmin').click(function(){
      $('#adminChoises').toggle();
    });
    function mesager(){
  if(document.getElementById('misage').value == ""){
            alert('veuillez ecrire un message !');
  }else{
    alert('mercii ! \n message envoye');
  }
 }
    
  </script>
</body>

</html>
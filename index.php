<?php session_start(); ?>
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


  <!-- Slider -->
  <div class="Mycontain">
    <div class="slider-outer">
      <img src="images/arrow-left.png" class="prev" alt="Prev">
      <div class="slider-inner">
        <img src="images/Slide1.jpg" id="Firstimage" class="active">
        <img src="images/Slide2.jpg">
        <img src="images/Slide3.jpg">
        <img src="images/Slide4.jpg" id="Lastimage">
      </div>
      <img src="images/arrow-right.png" class="next" alt="Next">
    </div>
  </div id="divSearch">

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
      <thead>
        <tr>
          <th scope="col">eNom D ecole</th>
          <th scope="col">Ville</th>
          <th scope="col">Filieres</th>
          <th scope="col">Formations</th>
          <th scope="col">Plus D'informations</th>
        </tr>
      </thead>
      <tbody id="tableSearch">

      </tbody>
    </table>
  </div>
<div class="formAdmin">
      <?php 
      if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
      ?>
        <div ><i  id="btnAdmin" style="cursor:pointer;" class="fa fa-plus fa-4x"></i></div>
        <ul id="adminChoises">
          <li style="margin-top:5px;"><a href="./so.php"><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter news</button></a></li>
          <li style="margin-top:5px;"><a href=""><i class="fa fa-plus fa-2x"></i><button type="button" class="btn btn-info">Ajouter Resultat</button></a></li>
        </ul>
      <?php
      }else if(isset($_SESSION['email'])){
      echo "<h3 style='margin:20px 20px;'>Bienvenue ".$_SESSION['username']."</h3>";
    }else if(!isset($_SESSION['email'])){
      echo "<h3 style='margin:20px 20px;'>Vous pouvez creer un compte pour se connecter</h3>";
    }
      ?>
</div>
  <!-- Articles  -->
  
      <?php
      require "./Database/pdo2.inc";
      $pdo = connecto();
      $req = "SELECT * FROM invit";
      $t = $pdo->prepare($req);
      $t->execute();
      while($row = $t->fetch(PDO::FETCH_ASSOC)){
       ?>
      <div class="articleD">
      <?php
            if(isset($_SESSION['email']) && $_SESSION['email'] == "zoygberdzaki@gmail.com"){
        ?>
        
        <div class="iconC"><a href="./Database/delete.php?id=<?php echo $row['ID'] ?>" ><i class="fa fa-window-close fa-2x"></i></a></div>
        <div class="iconC"><a href="./Database/modify.php?id=<?php echo $row['ID'] ?>" ><i class="fa fa-edit fa-2x"></i></a></div>
        
        <?php } ?>
        <div class="txtand">
            <img src="<?php echo $row['photo']; ?>" alt="Pas de photo">
            <table>
              <tr>
                <th>ecole :</th>
                <td><?php echo $row['Ecole']; ?></td>
                <th>Ville :</th>
                <td><?php echo $row['ville']; ?></td>
              </tr>
              <tr>
                <th colspan="2"> Derniere Date :</th>
                <td><?php echo $row['date']; ?></td>
                
              </tr>
            </table>
        </div>
        <div class="contenuD">
          <h1><?php echo $row['titre']; ?></h1>
          <p><?php echo $row['intro']; ?></p>
          <a href="new.php?id=<?php echo $row['ID']; ?>">lire la suite</a>
        </div>
        </div>
      <?php }
      ?>
      
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
              out += "<td>" + val.filieres + "</td>";
              out += "<td>" + val.formations + "</td>";
              out += "<td><a href=" + val.PlusDinfo + " >lien vers le site</a></td>";
              out += "</tr>";
            }
          }); //3
          $('tbody').html(out);
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
    
  </script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <?php
      include "./headers/head.php";
  ?>
  <script src="js/java.js"></script>
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
      include "./headers/Sous-header1.php";
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
  <div class="chercher" >
      <form class="MyForm form-inline my-1 my-lg-1">
      <p> rechercher les ecoles selons le nom <br> ou selon la ville</p>
      <p>appuyez sur <i class="fa fa-window-close fa-x"></i> <br>pour terminer votre recherche</p> <br>
          <input id="searchB" class="form-control mr-sm-5" type="search" placeholder="checher ici" aria-label="Search">
        
         
      </form>
      <table class="table">
      <div style="cursor:pointer; width:50px; float:right" onclick="closeS()" class="icon"><i class="fa fa-window-close fa-3x"></i></div>
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
  <!-- Articles  -->
  <div class="MesArticles">
        <div class="ArtSearsh">
            
        </div>
        <?php
          $jsondata = file_get_contents("./JsonFiles/news.Json");
          $json = json_decode($jsondata,true);
        ?>
        <?php foreach ($json['news'] as $news) { ?>
          <div class="article">
          <img src="<?php echo $news['image'] ?>" alt="image">
          <p><?php echo $news['Description'] ?></p>
        </div>
        <?php } ?>
  </div>
  <!-- Foooter  -->
  <?php
      include "./footer/footer.php";
  ?>
  <!-- Script -->
  <script>
        $('document').ready(function () {

          $('#acceuil').css('color', '#CA6DE8');
        
       //////////////////////////Search Bar

          $('#searchB').keydown(function(){//quand l utilisateur ecrit qlq chose x
            
                  $.getJSON('file.json',function(data){
                    var searchF = $('#searchB').val();
                    var exp = new RegExp(searchF,"i");
                    var out;
                    var i=0;
                        $.each(data,function(key,val){
                          if((val.NomEcole.search(exp)!= -1) || (val.Ville.search(exp)!= -1)){
                             out += "<tr>";
                             out += "<td>"+val.NomEcole+"</td>";
                             out += "<td>"+val.Ville+"</td>";
                             out += "<td>"+val.filieres+"</td>";
                             out += "<td>"+val.formations+"</td>";
                             out += "<td><a href="+val.PlusDinfo+" >lien vers le site</a></td>";
                             out += "</tr>";
                        }
                        });//3
                        $('tbody').html(out);
                        out = "";
                        
                  });//2
                 
          });//1
        });//generak 
        function closeS() {
          
          $('#tableSearch').html('');
          $('#searchB').val('');
        }
  </script>
</body>

</html>
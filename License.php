<?php session_start(); ?>
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
 if(!isset($_SESSION['username'])){
  include "./headers/Sous-header1.php";
 
  }else if(isset($_SESSION['username'])){
    include "./headers/Sous-header2.php";
  }
      
  ?>
  

 
  
  <!-- Articles  -->
  <div class="MesArticles">
        <div class="ArtSearsh">
            
        </div>
        <?php
          $jsondata = file_get_contents("./JsonFiles/news.Json");
          $json = json_decode($jsondata,true);
        ?>
        <?php foreach ($json['news'] as $news) { 
            if($news['niveau'] == "License Pro" || $news['niveau'] == "License Fond" ){
            ?>
          <div class="article">
          <img src="<?php echo $news['image'] ?>" alt="image">
          <p><?php echo $news['Description'] ?></p>
        </div>
        <?php }} ?>
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
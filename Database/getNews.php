<?php
    $ville = $_GET["ville"];
    $ecole = $_GET["ecole"];
    $niv = $_GET["niv"];
    include "../Database/pdo2.inc"; 
?>
  <!-- Articles de new-conc  -->
  
  <?php
          $pdo = connecto();
          $req = "SELECT * FROM invit WHERE ville=? and Ecole=? and pour=? ORDER BY ID DESC Limit 20";
          $t = $pdo->prepare($req);
          $t->execute([$ville,$ecole,$niv]);
          while($row = $t->fetch(PDO::FETCH_ASSOC)){
          ?>
          
        <article style="margin-top:20px; width:66%; background-color:#e6e6e6;" id="main-col">
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
          $req = "SELECT * FROM result WHERE ville=? and Ecole=? and pour=? ORDER BY ID DESC Limit 20";
          $t = $pdo->prepare($req);
          $t->execute([$ville,$ecole,$niv]);
          while($row = $t->fetch(PDO::FETCH_ASSOC)){
          ?>
          
        <article style="margin-top:20px; width:66%; background-color:#e6e6e6;" id="main-col">
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
						  <p><a style="color:#CA6DE8" href="new?id=<?php echo $row['ID'] ?>">cliquer ici pour lire la suite</a></p>
              </div>
            </li>
          </ul>
        </article>
          <?php } ?>
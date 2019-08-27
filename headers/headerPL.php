<?php
function conn(){
    $host="localhost";
    $user="root";
    $password="";
    $dbname="news";
    $dsn="mysql:host=".$host.";dbname=".$dbname.";charset=utf8";
                                            
    try{
        $pdo=new PDO($dsn,$user,$password);
        }catch(Exception $e){ 
        die("erreur:".$e->getMessage());
        }
    return $pdo;
}
$pdo = conn();
?>

<nav>
       <div class="LogoM">
           <img src="./images/PLogo.png" alt="">
        <span> <h1>Orientation</h1> <h3>Maroc</h3></span>
        <!-- <img class="logoP" src="images/Vlogo.png"> -->
        </div> 
        <div class="toggle">
            <i id="togB"class="fa fa-bars" aria-hidden="true"></i>
        </div>
        <ul class="menu_list">
            <li  class="menu1_its"><a id="acceuil" href="../index.php">Acceuil</a></li>
            <li class="menu1_its"><a id="Bac+5" href="../bacP5.php">Bac+5</a>
                <div class="droped">
                        <ul class="c1">
                                            <li class="ho4">
                                                <h4>Master Sp</h4>
                                            </li>
                                            <?php
                                                $req = "SELECT * FROM invit WHERE pour=? ORDER BY ID DESC Limit 4";
                                                $t = $pdo->prepare($req);
                                                $t->execute(['Master S']);
                                                while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                        <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                            
                                            <?php } ?>

                                            <?php
                                                $req = "SELECT * FROM result WHERE pour=? ORDER BY ID DESC Limit 4";
                                                $t = $pdo->prepare($req);
                                                $t->execute(['Master S']);
                                                while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                            ?>
                                        <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                            
                                            <?php } ?>
                            </ul>
                            <ul class="c1">
                                        <li class="ho4">
                                            <h4>Master Fondamental</h4>
                                        </li>
                    
                                        <?php
                                            $req = "SELECT * FROM invit WHERE pour=? ORDER BY ID DESC Limit 4";
                                            $t = $pdo->prepare($req);
                                            $t->execute(['Master F']);
                                            while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                    <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                        
                                        <?php } ?>
                                        
                                        <?php
                                            $req = "SELECT * FROM result WHERE pour=? ORDER BY ID DESC Limit 4";
                                            $t = $pdo->prepare($req);
                                            $t->execute(['Master F']);
                                            while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                    <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a>/<li>
                                        
                                        <?php } ?>
                            </ul>
                            <ul class="c1">
                                        <li class="ho4">
                                            <h4>Cycle d ing</h4>
                                        </li>
                                        <?php
                                            $req = "SELECT * FROM invit WHERE pour=? ORDER BY ID DESC Limit 4";
                                            $t = $pdo->prepare($req);
                                            $t->execute(['Cycle dIng']);
                                            while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                    <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                        
                                        <?php } ?>
                                        
                                        <?php
                                            $req = "SELECT * FROM result WHERE pour=? ORDER BY ID DESC Limit 4";
                                            $t = $pdo->prepare($req);
                                            $t->execute(['Cycle dIng']);
                                            while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                        ?>
                                    <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                        
                                        <?php } ?>
                            </ul>
                </div>
                
            </li>
            <li class="menu1_its"><a href="License.php">License</a>
                <div class="droped">
                        <ul class="c2">
                                <li class="ho4">
                                    <h4>License Pro</h4>
                                </li>
            
                                <?php
                                    $req = "SELECT * FROM invit WHERE pour=? ORDER BY ID DESC Limit 4";
                                    $t = $pdo->prepare($req);
                                    $t->execute(['LP']);
                                    while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                ?>
                               <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                
                                <?php } ?>
                                
                                <?php
                                    $req = "SELECT * FROM result WHERE pour=? ORDER BY ID DESC Limit 4";
                                    $t = $pdo->prepare($req);
                                    $t->execute(['LP']);
                                    while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                ?>
                               <a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a><br><br>
                                
                                <?php } ?>
                            </ul>
                            <ul class="c2">
                                <li class="ho4">
                                    <h4>License Fondamental</h4>
                                </li>
            
                                <?php
                                    $req = "SELECT * FROM invit WHERE pour=? ORDER BY ID DESC Limit 4";
                                    $t = $pdo->prepare($req);
                                    $t->execute(['LF']);
                                    while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                ?>
                               <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                
                                <?php } ?>
                                
                                <?php
                                    $req = "SELECT * FROM result WHERE pour=? ORDER BY ID DESC Limit 4";
                                    $t = $pdo->prepare($req);
                                    $t->execute(['LF']);
                                    while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                ?>
                               <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                
                                <?php } ?>
                            </ul>
                </div>
            </li>
            <li class="menu1_its"><a href="../ApresBac.php">Apres Bac</a>
                <div class="droped">
                        <ul class="c3">
                                <li class="ho4">
                                    <h4 >Actualitees au etudiants du Bac</h4>
                                </li>
                                <?php
                                   $req = "SELECT * FROM invit WHERE pour = ? OR pour = ? pour = ? OR pour = ? pour = ? OR pour = ? pour = ? ORDER BY ID DESC Limit 20";
                                   $t = $pdo->prepare($req);
                                   $t->execute(['DUT','DEUG','DEUST','cinqans','DT','TS','BTS']);//TS: technicien specialise 
                                         // cinqans pour les ecoles dont on peut etudier 5 ans depuis bac ! 
                                   while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                ?>
                               <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                <?php } ?>
                                
                                <?php
                                    $req = "SELECT * FROM result WHERE pour=? ORDER BY ID DESC Limit 4";
                                    $t = $pdo->prepare($req);
                                    $t->execute(['LF']);
                                    while($row = $t->fetch(PDO::FETCH_ASSOC)){
                                ?>
                               <li><a href="../new.php?id=<?php echo $row['ID']; ?>"><?php echo $row['titre'] ?></a></li>
                                
                                <?php } ?>               
                                
                            </ul>
                            <ul class="c4">
                                <li class="ho4">
                                    <h4 >ecoles</h4>
                                </li>
                                
                                <li><a href="#">FST</a></li>
                                <li><a href="#">FSJE</a></li>
                                <li><a href="#">FMP</a></li>
                                <li><a href="#">FSES</a></li>
                                <li><a href="#">FSDM</a></li>
                            </ul>
                            <ul class="c4">
                                <li class="ho4">
                                    <h4>facultees</h4>
                                </li >
                                
                                <li><a href="#">FST</a></li>
                                <li><a href="#">FSJE</a></li>
                                <li><a href="#">FMP</a></li>
                                <li><a href="#">FSES</a></li>
                                <li><a href="#">FSDM</a></li>
                            </ul>
                </div>
            </li>
           
            <li class="menu1_its"><a href="../doctorat.php">Doctorat</a></li>
        </ul>
    </nav>
    <div  class="SMobile" >
    <ul class="MobileStyle">
    <li><a href="../index.php"> <i class="myFa fa fa-home"></i> Acceuil</a></li>
          <li><a href="../bacP5.php"> <i class="myFa fa fa-university"></i> Bac+5</a></li>
          <li><a href="../License.php"> <i class="myFa fa fa-university"></i> License</a></li>
          <li><a href="../ApresBac.php"><i class="myFa fa fa-university"></i>Apres Bac</a></li>
          <li><a href="../doctorat.php"><i class="myFa fa fa-university"></i> Doctorat</a></li>
          
          <?php 
          if( !isset($_SESSION['username']) ){
            include "../headers/NoConnected.php";
           
            }else if(isset($_SESSION['username'])){
              include "../headers/Connected.php";
            }
            ?>
      </ul>
    </div>
    
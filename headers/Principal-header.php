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
            <li  class="menu1_its"><a id="acceuil" href="#">Acceuil</a></li>
            <li class="menu1_its"><a id="Bac+5" href="bacP5.php">Bac+5</a>
                <div class="droped">
                        <ul>
                                <li>
                                    <h4>Master Sp</h4>
                                </li>
            
                                <li><a href="#">Est</a></li>
                                <li><a href="#">Ensa</a></li>
                                <li><a href="#">Ensam</a></li>
                                <li><a href="#">Ena</a></li>
                                <li><a href="#">ENS</a></li>
                            </ul>
                            <ul>
                                <li>
                                    <h4>Master Fondamental</h4>
                                </li>
            
                                <li><a href="#">FST</a></li>
                                <li><a href="#">FSJE</a></li>
                                <li><a href="#">FMP</a></li>
                                <li><a href="#">FSES</a></li>
                                <li><a href="#">FSDM</a></li>
                            </ul>
                            <ul>
                                <li>
                                    <h4>Cycle d ing</h4>
                                </li>
                                <li><a href="#">FST</a></li>
                                <li><a href="#">FSJE</a></li>
                                <li><a href="#">FMP</a></li>
                                <li><a href="#">FSES</a></li>
                                <li><a href="#">FSDM</a></li>
                            </ul>
                </div>
                
            </li>
            <li class="menu1_its"><a href="License.php">License</a>
                <div class="droped">
                        <ul>
                                <li>
                                    <h4>License Pro</h4>
                                </li>
            
                                <li><a href="#">Est</a></li>
                                <li><a href="#">Ensa</a></li>
                                <li><a href="#">Ensam</a></li>
                                <li><a href="#">Ena</a></li>
                                <li><a href="#">ENS</a></li>
                            </ul>
                            <ul>
                                <li>
                                    <h4>License Fondamental</h4>
                                </li>
            
                                <li><a href="#">FST</a></li>
                                <li><a href="#">FSJE</a></li>
                                <li><a href="#">FMP</a></li>
                                <li><a href="#">FSES</a></li>
                                <li><a href="#">FSDM</a></li>
                            </ul>
                </div>
            </li>
            <li class="menu1_its"><a href="ApresBac.php">Apres Bac</a>
                <div class="droped">
                        <ul>
                                <li>
                                    <h4>Ecoles</h4>
                                </li>
            
                                <li><a href="#">Est</a></li>
                                <li><a href="#">Ensa</a></li>
                                <li><a href="#">Ensam</a></li>
                                <li><a href="#">Ena</a></li>
                                <li><a href="#">ENS</a></li>
                            </ul>
                            <ul>
                                <li>
                                    <h4>Faculees</h4>
                                </li>
            
                                <li><a href="#">FST</a></li>
                                <li><a href="#">FSJE</a></li>
                                <li><a href="#">FMP</a></li>
                                <li><a href="#">FSES</a></li>
                                <li><a href="#">FSDM</a></li>
                            </ul>
                </div>
            </li>
           
            <li class="menu1_its"><a href="#">Doctorat</a></li>
        </ul>
    </nav>
    <div  class="SMobile" >
    <ul class="MobileStyle">
          <li><a href="#"> <i class="myFa fa fa-home"></i> Acceuil</a></li>
          <li><a href="#"> <i class="myFa fa fa-university"></i> Bac+5</a></li>
          <li><a href="#"> <i class="myFa fa fa-university"></i> License</a></li>
          <li><a href="#"><i class="myFa fa fa-university"></i> Bac+2</a></li>
          <li><a href="#"><i class="myFa fa fa-university"></i> Doctorat</a></li>
          <li><a href="#"><i class="myFa fa fa-search"></i></i> Recherche</a></li>
          <li><a href="#"><i class="myFa fa fa-search-plus"></i> Recherche Avance</a></li>
          
          <?php 
          if( !isset($_SESSION['username']) ){
            include "NoConnected.php";
           
            }else if(isset($_SESSION['username'])){
              include "Connected.php";
            }
            ?>
      </ul>
    </div>
    
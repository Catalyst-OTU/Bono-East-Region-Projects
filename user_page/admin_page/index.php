<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');
?>


<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/MyWebsite.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>

        <!-- Begin Page Content -->
<div class="container-fluid">


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    
      <h2>WELCOME TO BONO EAST REGION</h2>
    
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>


<!-- <div class="otu-bar">
            
            <ul>
                    <li class="gh1"><a href="#">CONSTITUENCIES</a>
                    <div class="sub-menu-1">
                        <ul>
                        <li><a href="u_atebubu_amantin.php">Atebubu/Amantin</a></li>
                        <li><a href="#">Kintampo North</a></li>
                        <li><a href="#">Kintampo South</a></li>
                        <li><a href="#">Nkoranza North</a></li>
                        <li><a href="#">Nkoranza South</a></li>
                        <li><a href="#">Pru East</a></li>
                        <li><a href="#">Pru West</a></li>
                        <li><a href="#">Sene East</a></li>
                        <li><a href="#">Sene West</a></li>
                        <li><a href="#">Techiman North</a></li>
                        <li><a href="#">Techiman South</a></li>
                        </ul>
                    </div>
                </li>                
             
            </ul>
        </div> -->

        <!-- <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br>
        <br><br><br><br><br><br><br><br><br><br><br><br><br><br> -->

<br><br><br>


<!-- Content Row -->
<div class="row">

            <!-- DASHBOARD FOR GREATER ACCRA REGION POLITICAL PARTIES-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="user_page/u_atebubu_amantin.php">ATEBUBU/AMANTIN CONSTITUENCY</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                    
                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="user_page/u_atebubu_amantin_npp.php">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="user_page/u_atebubu_amantin_ndc.php">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM others ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="user_page/u_atebubu_amantin_others.php">
                      <img src="images/logo4.jpeg" width="60" height="60"> OTHERS</a>
                      : '.$row.'</h4>';
                      ?>

                                     
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-------------DASHBOARD FOR KINTAMPO NORTH CONSTITUENCY--------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_kintampo_north_constituency.php">KINTAMPO NORTH CONSTITUENCY</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="#">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/logo4.jpeg" width="60" height="60"> OTHERS</a>
                      : '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>




             <!-------------------DASHBOARD FOR KINTMAPO SOUTH CONSTITUENCY-------------->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_kintampo_south_constituency.php">KINTAMPO SOUTH CONSTITUENCY</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="#">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/logo4.jpeg" width="60" height="60"> OTHERS</a>
                      : '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
  




            <!-------------------DASHBOARD FOR KINTMAPO NORTH CONSTITUENCY-------------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_nkoranza_north_constituency.php">NKORANZA NORTH CONSTITUENCY</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="#">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/logo4.jpeg" width="60" height="60"> OTHERS</a>
                      : '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>





<!-- Content Row -->
<div class="row">

             <!-------------------DASHBOARD FOR KINTMAPO SOUTH CONSTITUENCY-------------->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_nkoranza_south_constituency.php">NKORANZA SOUTH CONSTITUENCY</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="#">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="#">
                      <img src="images/logo4.jpeg" width="60" height="60"> OTHERS</a>
                      : '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-------------DASHBOARD FOR EASTERN REGION POLITICAL PARTIES--------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>PRU EAST CONSTITUENCY</h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","eastern");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<h4><img src="images/logo2.jpeg" width="60" height="60"> NPP: '.$row.'</h4>';
                      ?>

                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","eastern");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/NDC2.png" width="60" height="60"> NDC: '.$row.'</h4>';
                      ?>
                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","eastern");
                      $query = "SELECT id FROM ppp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/logo4.jpeg" width="60" height="60"> OTHERS: '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>




             <!-------------------DASHBOARD FOR OTHERS REGION POLITICAL PARTIES-------------->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>PRU WEST CONSTITUENCY</h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<h4><img src="images/logo2.jpeg" width="60" height="60"> NPP: '.$row.'</h4>';
                      ?>

                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/NDC2.png" width="60" height="60"> NDC: '.$row.'</h4>';
                      ?>
                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ppp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/logo4.jpeg" width="60" height="60"> OTHERS: '.$row.'</h4>';
                      ?>
                                                           
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
  




            <!----------------DASHBOARD cpp REGION POLITICAL PARTIES---------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>SENE EAST CONSTITUENCY</h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","central");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<h4><img src="images/logo2.jpeg" width="60" height="60"> NPP: '.$row.'</h4>';
                      ?>

                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","central");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/NDC2.png" width="60" height="60"> NDC: '.$row.'</h4>';
                      ?>
                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","central");
                      $query = "SELECT id FROM ppp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/logo4.jpeg" width="60" height="60"> OTHERS: '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>

</div>











<!-- Content Row -->
<div class="row">

            <!-- DASHBOARD FOR GREATER ACCRA REGION POLITICAL PARTIES-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>SENE WEST CONSTITUENCY</h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                    
                      <?php
                      $connection = mysqli_connect("localhost","root","","greater_accra");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<h4><img src="images/logo2.jpeg" width="60" height="60"> NPP: '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","greater_accra");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/NDC2.png" width="60" height="60"> NDC: '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","greater_accra");
                      $query = "SELECT id FROM ppp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/logo4.jpeg" width="60" height="60"> OTHERS: '.$row.'</h4>';
                      ?>

                                     
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>



            <!-------------DASHBOARD FOR EASTERN REGION POLITICAL PARTIES--------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>TECHIMAN NORTH CONSTITUENCY</h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","eastern");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<h4><img src="images/logo2.jpeg" width="60" height="60"> NPP: '.$row.'</h4>';
                      ?>

                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","eastern");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/NDC2.png" width="60" height="60"> NDC: '.$row.'</h4>';
                      ?>
                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","eastern");
                      $query = "SELECT id FROM ppp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/logo4.jpeg" width="60" height="60"> OTHERS: '.$row.'</h4>';
                      ?>
                      
                                      
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>




             <!-------------------DASHBOARD FOR OTHERS REGION POLITICAL PARTIES-------------->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4>TECHIMAN SOUTH CONSTITUENCY</h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                      

                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<h4><img src="images/logo2.jpeg" width="60" height="60"> NPP: '.$row.'</h4>';
                      ?>

                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/NDC2.png" width="60" height="60"> NDC: '.$row.'</h4>';
                      ?>
                      <br>
                      <?php
                      $connection = mysqli_connect("localhost","root","","ashanti");
                      $query = "SELECT id FROM ppp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      echo '<h4> <img src="images/logo4.jpeg" width="60" height="60"> OTHERS: '.$row.'</h4>';
                      ?>
                                                           
                      </div>
                    </div>
                    <div class="col-auto">
                    <!-- <img src="images/logo2.jpeg" width="60" height="60"> -->
                    </div>
                  </div>
                </div>
              </div>
            </div>
  

</div>

        


        <!-- <li class="gh"><a href="#">Training</a>
                    <div class="sub-menu-1">
                        <ul>
                            <li><a href="#">Development</a></li>
                            <li><a href="#">Testing</a></li>
                            <li><a href="#">Ul Designing</a></li>
                        </ul>
                    </div>
                </li>  -->






















<!-- <div class="otu-bar">
            
        <ul>
            
        
            <li><a href="#">CONSTITUENCIES</a>
                <div class="otu-menu-1">
                    <ul>
                        <li><a href="#">Atebubu/Amantin</a></li>
                        <li><a href="#">Kintampo North</a></li>
                        <li><a href="#">Kintampo South</a></li>
                        <li><a href="#">Nkoranza North</a></li>
                        <li><a href="#">Nkoranza South</a></li>
                        <li><a href="#">Pru East</a></li>
                        <li><a href="#">Pru West</a></li>
                        <li><a href="#">Sene East</a></li>
                        <li><a href="#">Sene West</a></li>
                        <li><a href="#">Techiman North</a></li>
                        <li><a href="#">Techiman South</a></li>

                    </ul>
                </div>
            </li> -->
    
           
            <!-- <li><a href="#">POLLING STATIONS</a>
                <div class="otu-menu-1">
                    <ul>
                        <li><a href="#">Development</a></li>
                        <li><a href="#">Testing</a></li>
                        <li><a href="#">Ul Designing</a></li>
                    </ul>
                </div>
            </li> -->


<!-- </div> -->
  
<br><br>





    


<br><br><br><br>




<!-- Content Row -->
<!-- <div class="row"> -->

<!-- Chart Starts -->

<!-- 
<div class="chart">
<h4>Atebubu/Amanting Constituency</h4>
<br>
        <ul class="numbers">
            <li><span>100%</span></li>
            <li><span>50%</span></li>
            <li><span>0%</span></li>

        </ul>
        
        <ul class="bars"> -->
            <!-- <li><div class="bar" data-percentage="50"></div><span>option 01</span></li> -->
            <!-- <li><div class="bar" data-percentage="30"></div><span>option 02</span></li> -->
            <!-- <li><div class="bar" data-percentage="90" value="<?php echo $row['id'] ?>"></div><span>NPP</span></li>
            <li><div class="bar" data-percentage="80"></div><span>NDC</span></li>
            <li><div class="bar" data-percentage="60"></div><span>OTHERS</span></li>

        </ul>

    </div> -->




<!-- 
    <div class="chart">
<h4>Kintampo North Constituency</h4>
<br>
        <ul class="numbers">
            <li><span>100%</span></li>
            <li><span>50%</span></li>
            <li><span>0%</span></li>

        </ul>
        
        <ul class="bars"> -->
            <!-- <li><div class="bar" data-percentage="50"></div><span>option 01</span></li> -->
            <!-- <li><div class="bar" data-percentage="30"></div><span>option 02</span></li> -->
            <!-- <li><div class="bar" data-percentage="100"></div><span>NPP</span></li>
            <li><div class="bar" data-percentage="50"></div><span>NDC</span></li>
            <li><div class="bar" data-percentage="20"></div><span>OTHERS</span></li>

        </ul>

  </div> -->


  


  <!-- Content Row -->
<!-- <div class="row"> -->

<!-- Chart Starts -->


<!-- <div class="chart">
<h4>Kintampo South Constituency</h4>
<br>
        <ul class="numbers">
            <li><span>100%</span></li>
            <li><span>50%</span></li>
            <li><span>0%</span></li>

        </ul>
        
        <ul class="bars"> -->
            <!-- <li><div class="bar" data-percentage="50"></div><span>option 01</span></li> -->
            <!-- <li><div class="bar" data-percentage="30"></div><span>option 02</span></li> -->
            <!-- <li><div class="bar" data-percentage="85"></div><span>NPP</span></li>
            <li><div class="bar" data-percentage="75"></div><span>NDC</span></li>
            <li><div class="bar" data-percentage="40"></div><span>OTHERS</span></li>

        </ul>

        

    </div>





    <div class="chart">
<h4>Nkoranza North Constituency</h4>
<br>
        <ul class="numbers">
            <li><span>100%</span></li>
            <li><span>50%</span></li>
            <li><span>0%</span></li>

        </ul>
        
        <ul class="bars"> -->
            <!-- <li><div class="bar" data-percentage="50"></div><span>option 01</span></li> -->
            <!-- <li><div class="bar" data-percentage="30"></div><span>option 02</span></li> -->
            <!-- <li><div class="bar" data-percentage="75"></div><span>NPP</span></li>
            <li><div class="bar" data-percentage="40"></div><span>NDC</span></li>
            <li><div class="bar" data-percentage="20"></div><span>OTHERS</span></li>

        </ul>

  </div>


  

    

</div> -->



    <!-- Chart Ends -->

    

            






<?php
include('includes/scripts.php');
// include('includes/footer.php');
?>

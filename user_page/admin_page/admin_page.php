<?php 
session_start();
include('includes/header.php');
include('includes/main_navbar.php');
?>


<link rel="stylesheet" href="css/style.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="UTF-8"></script>

        <!-- Begin Page Content -->
<div class="container-fluid">


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    
      <h2>WELCOME TO BONO EAST REGION</h2>
    
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>

<br><br>





<!-- Content Row -->
<div class="row">

          <!-- DASHBOARD FOR ATEBUBU / AMANTIN CONSTITUENCY-->
          <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_atebubu_amantin.php">ATEBUBU/AMANTIN CONSTITUENCY</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                    
                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="u_atebubu_amantin_npp.php">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="u_atebubu_amantin_ndc.php">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM others ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="u_atebubu_amantin_others.php">
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
  




            <!-------------------DASHBOARD FOR NKORANZA NORTH CONSTITUENCY-------------->
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

             <!-------------------DASHBOARD FOR NKORANZA SOUTH CONSTITUENCY-------------->
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





            <!-------------DASHBOARD FOR PRU EAST CONSTITUENCY--------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_pru_east_constituency.php">PRU EAST CONSTITUENCY</a></h4></div>
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




             <!-------------------DASHBOARD FOR PRU WEST CONSTITUENCY-------------->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_pru_west_constituency.php">PRU WEST CONSTITUENCY</a></h4></div>
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
  




            <!----------------DASHBOARD FOR SENE EAST CONSTITUENCY---------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_sene_east_constituency.php">SENE EAST CONSTITUENCY</a></h4></div>
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

            <!-- DASHBOARD FOR SENE WEST CONSTITUENCY-->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_sene_west_constituency.php">SENE WEST CONSTITUENCY</a></h4></div>
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



            <!-------------DASHBOARD FOR TECHIIMAN NORTH CONSTITUENCY--------->
            <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_techiman_north_constituency.php">TECHIMAN NORTH CONSTITUENCY</a></h4></div>
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




             <!-------------------DASHBOARD FOR TECHIMAN SOUTH CONSTITUENCY-------------->
             <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="u_techiman_south_constituency.php">TECHIMAN SOUTH CONSTITUENCY</a></h4></div>
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


<br><br>

<br><br><br><br>


  <!-- Chart Ends -->



<?php
include('includes/scripts.php');
include('includes/footer.php');
?>


<?php 
session_start();
include('includes/header.php');
include('includes/main_navbar.php');
?>


<link rel="stylesheet" href="css/style.css">
<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">





<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <!-- <h1 class="h3 mb-0 text-gray-800"><big>ATEBUBU / AMANTIN NPP MEMBERS DASHBOARD</big></h1> -->
    <h5>ATEBUBU / AMANTIN CONSTITUENCY NDC MEMBERS PROFILE</h5>

    <form action="pdf_atebubu_amantin_ndc.php" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i>Generate Report</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>







<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add NDC Member Data</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
            <form action="u_code.php" method="POST" enctype="multipart/form-data">


              <div class="modal-body">

                <div class="form-group">
                    <label>Username</label>
                    <input type="text" name="username" class="form-control" placeholder="Enter Username" required>
                </div>

                <div class="form-group">
                    <label>Voter's ID</label>
                    <input type="text" name="voters" class="form-control" placeholder="Enter Voter's ID" required>
                </div>

                <div class="form-group">
                    <label>Phone</label>
                    <input type="phone" name="phone" class="form-control" placeholder="Enter Phone Number" required>
                </div>

                <div class="form-group">
                    <label>Gender</label>
                    <select name="gender" class="form-control">
                    <option value="">Select Gender</option>
                      <option value="male">Male</option>
                      <option value="female">Female</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>Date of Birth</label>
                    <input type="date" name="dob" class="form-control" placeholder="Enter Date of Birth" required>
                </div>


                <div class="form-group">
    <label>Polling Stations</label>
                  <select name="polling_stations" class="form-control">

                    <option value="">Select Polling Station</option>

                    <option> DUDUSO D/A PRIM SCH (K060101) </option>
                    <option> OPEN SPACE KONKROMPE (K060102) </option>
                    <option> ABAMBA CAMP D/A PRIM. SCH (K060103) </option>
                    <option> ABAMBA D/A PRIM SCH (K060104)</option>
                    <option> ENGLISH/ARABIC JHS ATEBUBU (K061803) </option>
                    <option> SDA PRIM SCH AMANTIN (K060203) </option>
                    <option> PRESBY JHS ATEBUBU 2 (K061404) </option>
                    <option> ATECO DEM. SCH ATEBUBU (K061405)</option>
                    <option> D/A PRIM SCH ABUO (K060903)</option>
                    <option> ANGLICAN J H S ATEBUBU (K061302)</option>
                    <option> D/A JHS ATEBUBU (K061501)</option>
                    <option> OPEN SPACE, CHOKOSI LINE (K060301)</option>
                    <option> ANGLICAN PRIM SCH DOBIDI (K060801)</option>
                    <option> ANGLICAN PRIM SCH DOBIDI-NKWANTA (K060802)</option>
                    <option> D/A PRIM SCH DUABONE NO 1 (K062401)</option>
                    <option> R/C PRIM SCH DUABONE NO 2 (K062402)</option>
                    <option> PUBLIC SHED ISSIFU AKURAA (K062404)</option>
                    <option> D/A PRIM SCH AWOROSO (K062405)</option>
                    <option> D/A PRIM SCH SABIDI (K062406)</option>
                    <option> PUBLIC SHED BYEBYE (K063103)</option>
                    <option> ANG. PRIM SCH OLD BONIAFO (K063004)</option>
                    <option> PUBLIC SHED TENTARE (K063005)</option>
                    <option> PUBLIC SHED AKYERMADE (K063006)</option>
                    <option> D/A JHS, NEW KONKROMPE (K061202)</option>
                    <option> D/A KG NEW KONKROMPE (K061203)</option>
                    <option> D/A PRIM SCH SANWAKYI (K061206)</option>
                    <option> MALAM TAHIRU'S MOSQUE (K061605)</option>
                    <option> D/A PRIM SCH FEANO NO 2 (K062702)</option>
                    <option> D/A PRIM SCH NWOWAM (K062703)</option>
                    <option> OPEN SPACE ADOM (K062704)</option>
                    <option> D/A PRIM SCH OHIANTI (K062705)</option>
                    <option> D/A PRIM SCH NYANSIBU NO.1 (K062901)</option>
                    <option> D/A PRIM SCH TANKANI (K062904)</option>
                    <option> D/A KG NYOMOASE (K062802)</option>
                    <option> D/A PRIM SCH BOLGA VILLAGE (K062806)</option>
                    <option> D/A PRIM SCH TROHWE (K062808)</option>
                    <option> PUBLIC SHED GYANGYANWURA (K062809)</option>
                    <option> OPEN SPACE, SAMBO (K062003)</option>
                    <option> PAUL ADUNIA D/A PRIM SCH (K062004)</option>
                    <option> D/A PRIM SCH NKONTONSUA (K062204)</option>
                    <option> D/A PRIM SCH. KOFI DENTE (K061002)</option>
                    <option> OPEN SPACE JOMPA (K061007)</option>
                    <option> D/A PRIM SCH. PRUSO NO.2 (K061008)</option>
                    <option> ZONGO NURSERY A. SCH. ATEBUBU (K061701)</option>
                    <option> ALHAJI MAISAMARI MOSQUE (K061704)</option>
                    <option> METHODIST JHS ATEBUBU (K061402)</option>
                    <option> OSAGYEFO EDUC. COMPLEX, ATEBUBU (K061407)</option>
                    <option> D/A PRIM SCH TIATIA (K060905)</option>
                    <option> ANGLICAN PRIM SCH ATEBUBU (K061301)</option>
                    <option> ANGLICAN PRIM SCH NIGRIGYATO (K060803)</option>
                    <option> D/A KG GARADIMA (K063102)</option>
                    <option> D/A PRIM SCH BOANYO (K063104)</option>
                    <option> ANGLICAN KG JATO ZONGO (K061102)</option>
                    <option> D/A PRIM SCH ASEMPANAYE (K060502)</option>
                    <option> EBUOSO D/A PRIM SCH (K060507)</option>
                    <option> OPEN SPACE NEW MARKET 1 (K060509)</option>
                    <option> PUBLIC SHED TUBUR AKURAA (K062304)</option>
                    <option> R/C PRIM SCH AMANTIN (K060701)</option>
                    <option> D/A PRIM SCH YABRASO (K062101)</option>
                    <option> TUSE D/A PRIM SCH. ATEBUBU (K061601)</option>
                    <option> TUSE D/A KG ATEBUBU (K061603)</option>
                    <option> PRESBY PRIM SCH 'A' ATEBUBU (K061606)</option>
                    <option> PRESBY KG ATEBUBU (K061607)</option>
                    <option> D/A PRIM SCH AMANSANO (K062706)</option>
                    <option> D/A PRIM SCH MURUCHUSO (K062707)</option>
                    <option> D/A PRIM SCH NYANSIBU NO. 2 (K062902)</option>
                    <option> D/A PRIM SCH BOLGA NKWANTA (K062807)</option>
                    <option> OPEN SPACE SABON ZONGO 2 (K061902)</option>
                    <option> YAW NKRUMAH D/A PRIM SCH (K060601)</option>
                    <option> ENGLISH/ARABIC A. SCH ATEBUBU (K061801)</option>
                    <option> METHODIST PRIM SCH. ATEBUBU (K061401)</option>
                    <option> PRESBY JHS ATEBUBU 1 (K061403)</option>
                    <option> PUBLIC SHED MEMPEASEM (K060906)</option>
                    <option> DEEPER LIFE PREP SCH ATEBUBU (K061303)</option>
                    <option> D/A PRIM SCH ATEBUBU (K061502)</option>
                    <option> PRESBY JHS FAKWASI (K062602)</option>
                    <option> D/A PRIM SCH HIAMANKYENE (K063106)</option>
                    <option> ENGLISH/ARABIC PRIM SCH AMANTIN (K060401)</option>
                    <option> ENGLISH/ARABIC JHS AMANTIN (K060402)</option>
                    <option> D/A J H S JATO ZONGO (K061101)</option>
                    <option> ANGLICAN PRIM SCH JATO ZONGO (K061103)</option>
                    <option> ANGLICAN PRIM SCH BONIAFO (K063003)</option>
                    <option> DA PRIM. SCH NEW KONKROMPE (K061201)</option>
                    <option> D/A PRIM SCH OLD KONKROMPE (K061205)</option>
                    <option> D/A J H S AFREFRESO (K061207)</option>
                    <option> D/A PRIM SCH FANTE NEW TOWN (K060501)</option>
                    <option> D/A PRIM SCH MASUO(K060503)</option>
                    <option> D/A PRIM SCH AKWAGYINA KRANE (K060504)</option>
                    <option> OPEN SPACE EBOASE (K060506)</option>
                    <option> D/A PRIM SCH KUMFIA (K062501)</option>
                    <option> D/A JHS KUMFIA (K062502)</option>
                    <option> D/A PRIM SCH SEINTI (K062301)</option>
                    <option> TUSE D/A JHS ATEBUBU (K061602)</option>
                    <option> D/A PRIM SCH FEANO NO I (K062701)</option>
                    <option> D/A PRIM SCH NYOMOASE (K062801)</option>
                    <option> PUBLIC SHED KOTOPE (K062805)</option>
                    <option> OPEN SPACE SABON ZONGO 1Sene West (K061901)</option>
                    <option> OPEN SPACE NAJATIA MAKALANTA 1Techiman North (K061903)</option>
                    <option> OPEN SPACE NAJATIA MAKALANTA 2 (K061904)</option>
                    <option> D/A PRIM SCH AHOTOR 2 (K061906)</option>
                    <option> YAKUBU KONKOMBA (K062001)</option>
                    <option> AMANGOASE NO.1 (K062002)</option>
                    <option> D/A PRIM SCH. YAW BRUKU (K061001)</option>
                    <option> D/A PRIM SCH. ASANTE AKURAA (K061005)</option>
                    <option> D/A PRIM SCH. ADENTWO (K061006)</option>
                    <option> D/A PRIM SCH. KAFANO (K061009)</option>
                    <option> D/A PRIM SCH LAILAI (K060604)</option>
                    <option> ZONGO NURSERY B. SCH. ATEBUBU (K061702)</option>
                    <option> ENGLISH/ARABIC B. SCH ATEBUBU (K061802)</option>
                    <option> ANGLICAN J.H.S AMANTIN (K060201)</option>
                    <option> ANGLICAN PRIM SCH. AMANTIN (K060202)</option>
                    <option> D/A PRIM SCH AMANTIN (K060204)</option>
                    <option> ZONGO COMMUNITY AMANTIN (K060205)</option>
                    <option> ASSEMBLIES OF GOD PREP SCH ATEBUBU (K061406)</option>
                    <option> D/A JHS AKOKOA (K060901)</option>
                    <option> ANGLICAN PRIM SCH AKOKOA (K060902)</option>
                    <option> D/A PRIM SCH FAMFOUR (K060904)</option>
                    <option> ST. MARTINS R/C PRIM ATEBUBU (K061304)</option>
                    <option> S.D.A. CHURCH ATEBUBU 1 (K061503)</option>
                    <option> S.D.A. CHURCH ATEBUBU 2 (K061504)</option>
                    <option> CENTRAL MOSQUE LYE-LYE (K060302)</option>
                    <option> KHAIRIYA ISLAMIC PRIM (K060303)</option>
                    <option> PUBLIC SHED DENSI (K062403)</option>
                    <option> PUBLIC SHED DABIDABI (K062407)</option>
                    <option> PRESBY PRIM SCH FAKWASI (K062601)</option>
                    <option> PUBLIC SHED BOMPA (K062603)</option>
                    <option> D/A PRIM GARADIMA (K063101)</option>
                    <option> PUBLIC SHED KWABANA BOAME (K063105)</option>
                    <option> PUBLIC SHED BUGRI AKURAA (K063107)</option>
                    <option> D/A PRIM SCH PATUDA (K061104)</option>
                    <option> PUBLIC SHED ASANTEBOA (K061105)</option>
                    <option> OPEN SPACE CONGO (K063001)</option>
                    <option> R/C PRIM SCH KOKOFU (K063002)</option>
                    <option> SDA CHURCH, NEW KONKROMPE (K061204)</option>
                    <option> D/A PRIM SCH FORTY-FOUR (K060505)</option>
                    <option> OPEN SPACE DENTESO (K060508)</option>
                    <option> OPEN SPACE NEW MARKET 2 (K060510)</option>
                    <option> D/A PRIM SCH GRUMAGRUMA (K060511)</option>
                    <option> PUBLIC SHED ADEEKRO (K062503)</option>
                    <option> D/A PRIM SCH KUMKUMSO (K062302)</option>
                    <option> D/A PRIM SCH APESIKA (K062303)</option>
                    <option> R/C J.H.S. AMANTIN (K060702)</option>
                    <option> D/A PRIM SCH BRESUOANO (K060703)</option>
                    <option> D/A PRIM SCH. MEM (K062102)</option>
                    <option> D/A PRIM SCH. AMANFROM (K062103)</option>
                    <option> D/A PRIM SCH. ABREWANKO (K062104)</option>
                    <option> UMMUL QURAH ISLAMIC PRIM. ATEBUBU (K061604)</option>
                    <option> PRESBY PRIM SCH 'B' ATEBUBU (K061608)</option>
                    <option> PRESBY CHURCH ATEBUBU (K061609)</option>
                    <option> PUBLIC SHED TWEWOPASE (K062903)</option>
                    <option> R/C PRIM SCH PREMUKYEA (K062905)</option>
                    <option> D/A PRIM SCH PRAPRABON (K062906)</option>
                    <option> D/A PRIM SCH BEPOSO (K062907)</option>
                    <option> D/A JHS BEPOSO (K062908)</option>
                    <option> D/A PRIM SCH BACHASO (K062803)</option>
                    <option> D/A PRIM SCH ADEAMRA (K062804)</option>
                    <option> D/A PRIM SCH AHOTOR 1 (K061905)</option>
                    <option> D/A PRIM SCH WATRO (K062201)</option>
                    <option> C M B SHED SENESO (K062202)</option>
                    <option> R/C CHURCH NYAMEANI (K062203)</option>
                    <option> D/A PRIM SCH. SAMPA (K061003)</option>
                    <option> D/A PRIM SCH. DARGARTI AKURAA (K061004)</option>
                    <option> D/A PRIM SCH HYEWANHYE (K060602)</option>
                    <option> D/A PRIM SCH YAW TUFFOUR (K060603)</option>
                    <option> ALHAJI FUSEINI MOSQUE (K061703)</option>
                    
                 
                  </select>
                </div>


                <div class="form-group">
                    <label>Place of Birth</label>
                    <input type="text" name="placeofbirth" class="form-control" placeholder="Enter Place of Birth" required>
                </div>

                <div class="form-group">
                    <label>Occupation</label>
                    <input type="text" name="occupation" class="form-control" placeholder="Enter Occupation" required>
                </div>
               

                    <div class="form-group">
                     <label> Upload Image  </label>
                     <input type="file" name="faculty_image" id="faculty_image" class="form-control">
                    </div>

                  

                     <!-- <input type="text" name="polling_stations" value="ALHAJI FUSEINI MOSQUE(K061703)"> -->

                     <input type="hidden" name="usertype" value="user">



                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="register_btn_atebubu_amantin_ndc" class="btn btn-primary">Save</button>
                </div>  
            </form>
        </div>
    </div>
</div>






<style>


h4{
    color: #3060f0;
}


.chart{
    width: 600px;
    height: 300px;
    display: block;
    margin-left: 120px;
       
}

.numbers{
    color: maroon;
    margin: 0;
    padding: 0;
    width: 50px;
    height: 100%;
    display: inline-block;
    float: left;
}

.numbers li{
    list-style: none;
    height: 150px;
    position: relative;
    bottom: 145px;
}

.numbers span{
    font-size: 12px;
    font-weight: 600;
    position: absolute;
    bottom: 0;
    right: 10px;
}

.bars{
    color: #3060f0;
    font-size: 12px;
    font-weight: 600;
    background: lightseagreen;
    margin: 0;
    padding: 0;
    display: inline-block;
    width: 330px;
    height: 300px;
    box-shadow: 0 0 10px 0 yellow;
    border-radius: 5px;
}

.bars li{
    display: table-cell;
    width: 100px;
    height: 300px;
    position: relative;
}

.bars span{
    width: 100%;
    position: absolute;
    bottom: -30px;
    text-align: center;
}

.bars .bar{
    display: block;
    background: #55EFC4;
    width: 70px;
    position: absolute;
    bottom: 0;
    margin-left: 25px;
    text-align: center;
    box-shadow: 0 0 10px 0 red;
    transition: 0.5s;
    transition-property: background, box-shadow;
}

.bars .bar:hover{
    background: aqua;
    box-shadow: 0 0 10px 0 black;
    cursor: pointer;
}

.bars .bar:before{
    color: white;
    content: attr(data-percentage) '%';
    position: relative;
    bottom: 20px;
}
</style>





<div class="container-fluid">

<!----DataTales Examples-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">
        </h6>
    </div>

    <br><br><br>

    <div class="row">

        
    <div class="chart">
    <h4>ATEBUBU/AMANTIN CONSTITUENCY</h4>
               <br>
               <ul class="numbers">
            <li><span>100%</span></li>
            <li><span>50%</span></li>
            <li><span>0%</span></li>

        </ul>
        
        <ul class="bars">
        <li><div class="bar" data-percentage="<?php 
            
            $connection = mysqli_connect("localhost","root","","atebubu_amantin");
            $query = "SELECT id FROM npp ORDER BY id";
            $query_run = mysqli_query($connection, $query);
            $row = mysqli_num_rows($query_run) / 100;

            echo ''.$row.''; 
            ?>">
        </div><span><a href="atebubu_amantin_npp.php">NPP</a></span></li>

        <li><div class="bar" data-percentage="<?php 
            
            $connection = mysqli_connect("localhost","root","","atebubu_amantin");
            $query = "SELECT id FROM ndc ORDER BY id";
            $query_run = mysqli_query($connection, $query);
            $row = mysqli_num_rows($query_run) / 100;

            echo ''.$row.''; 
            ?>">
            </div><span><a href="atebubu_amantin_ndc.php">NDC</a></span></li>

            <li><div class="bar" data-percentage="<?php 
            
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM others ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run) / 100;

                      echo ''.$row.''; 
            ?>">
            </div><span><a href="atebubu_amantin_others.php">OTHERS</a></span></li>

        </ul>
    </div>

 



    <!-- DASHBOARD FOR GREATER ACCRA REGION POLITICAL PARTIES-->
    <div class="col-xl-3 col-md-6 mb-4">
              <div class="card border-left-primary shadow h-100 py-2">
                <div class="card-body">
                  <div class="row no-gutters align-items-center">
                    <div class="col mr-2">
                      <div class="text-xs font-weight-bold text-primary text-uppercase mb-1"><h4><a href="atebubu_amantin.php">ATEBUBU/AMANTIN</a></h4></div>
                      <br>
                      <div class="h5 mb-0 font-weight-bold text-gray-800">
                      
                    
                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM npp ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);
                      
                      echo '<a href="atebubu_amantin_npp.php">
                      <h4><img src="images/logo2.jpeg" width="60" height="60">NPP</a>
                      : '.$row.'</h4>';
                      ?>

                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM ndc ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="atebubu_amantin_ndc.php">
                      <img src="images/NDC2.png" width="60" height="60"> NDC</a>
                      : '.$row.'</h4>';
                      ?>


                      <br>

                      <?php
                      $connection = mysqli_connect("localhost","root","","atebubu_amantin");
                      $query = "SELECT id FROM others ORDER BY id";
                      $query_run = mysqli_query($connection, $query);
                      $row = mysqli_num_rows($query_run);

                      echo '<h4> <a href="atebubu_amantin_others.php">
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


<br><br><br><br>







    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">NDC Members Profile

        <form action="u_code.php" method="POST">
                <button type="submit" name="delete_multiple_atebubu/amantin_ndc_data" class="btn btn-danger">Delete Multiple Data</button>
            </form>


            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
                Add NDC Member Profile
            </button>
        </h6>
    </div>







        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">ATEBUBU / AMANTIN CONSTITUENCY NDC MEMBERS DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","atebubu_amantin");

            $query = "SELECT * FROM ndc";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>ID</th>
                        <th>Username</th>
                        <th>Voter's ID</th>
                        <th>Phone Number</th>
                        <th>Gender</th>
                        <th>Date of Birth</th>
                        <th>Polling Stations</th>
                        <th>Place of Birth</th>
                        <th>Occupation</th>
                        <th>EDIT</th>
                        <th>DELETE</th>
                    </tr>
                </thead>
                <tbody>

                <?php

                if (mysqli_num_rows($query_run) > 0)
                 {
                    while ($row = mysqli_fetch_assoc($query_run))
                     {
                ?>
                      
                    <tr>
                        <td>
                            <input type="checkbox" onclick="toggleCheckbox(this)" value="<?php echo $row['id'] ?>" <?php echo $row['visible'] == 1 ? "checked" : "" ?> >

                        </td>
                        <td><?php echo $row['id']; ?></td>
                        <td><?php echo $row['username']; ?></td>
                        <td><?php echo $row['voters']; ?></td>
                        <td><?php echo $row['phone']; ?></td>
                        <td><?php echo $row['gender']; ?></td>
                        <td><?php echo $row['dob']; ?></td>
                        <td><?php echo $row['polling_stations']; ?></td>
                        <td><?php echo $row['placeofbirth']; ?></td>
                        <td><?php echo $row['occupation']; ?></td>
                        <td>
                            <form action="atebubu_amantin_ndc_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            
                        </td>
                        <td>

                            <form action="u_code.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_atebubu/amantin_ndc_btn" class="btn btn-danger">DELETE</button>
                            </form>
                        </td>

                        
                    </tr>

                    <?php
                    }

                 }
                 else
                 {
                     echo "No Record Found";
                 }

                    ?>

                  </tbody>
                </table>
              </div>
            </div>
          </div>




        </div>
        <!-- /.container-fluid -->

      </div>
      <!-- End of Main Content -->
 


<?php
include('includes/main_scripts.php');
include('includes/footer.php');
?>




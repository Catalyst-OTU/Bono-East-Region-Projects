
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
<h5><big>WELOCME TO ATEBUBU / AMANTIN CONSTITUENCY</big></h5>

    <form action="pdf_atebubu_amantin_constituency.php" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>







<div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add Data</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
            <form action="try.php" method="POST" enctype="multipart/form-data">


              <div class="modal-body">

                <div class="form-group">
                    <label>Polling Station Code</label>
                    <input type="text" name="polling_station_code" class="form-control" placeholder="Enter Polling Station Code" required>
                </div>

                <div class="form-group">
                    <label>Polling Station Name</label>
                    <input type="text" name="polling_station_name" class="form-control" placeholder="Enter Polling Station Name" required>
                </div>

                <div class="form-group">
                    <label>Register 2019</label>
                    <input type="phone" name="register_2019" class="form-control" placeholder="Enter Register 2019" required>
                </div>

                <div class="form-group">
                    <label>Registered Total</label>
                    <input type="phone" name="registered_total" class="form-control" placeholder="Enter Registered Total" required>
                </div>


                <div class="form-group">
                    <label>Percentage Change</label>
                    <input type="phone" name="percentage_change" class="form-control" placeholder="Enter Percentage Change" required>
                </div>



                </div>

                <div class="modal-footer">
                  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                  <button type="submit" name="register_btn_atebubu_amantin" class="btn btn-primary">Save</button>
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

<br><br><br><br><br>







    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">

        <form action="try.php" method="POST">
                <button type="submit" name="delete_multiple_register_atebubu/amantin_data" class="btn btn-danger">Delete Multiple Data</button>
            </form>


            <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
                Add Data
            </button>
        </h6>
    </div>




        <!-- Begin Page Content -->
        <div class="container-fluid">

         
          <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
          <h6 class="m-0 font-weight-bold text-primary">ATEBUBU / AMANTIN CONSTITUENCY DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","bonoeast_region");

            $query = "SELECT * FROM atebubu_amantin";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>ID</th>
                        <th>Polling Station Code</th>
                        <th>Polling Station Name (Registration Centre)</th>
                        <th>Register 2019</th>
                        <th>Registered Total</th>
                        <th>Percentage Change %</th>
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
                        <td><?php echo $row['polling_station_code']; ?></td>
                        <td><?php echo $row['polling_station_name']; ?></td>
                        <td><?php echo $row['register_2019']; ?></td>
                        <td><?php echo $row['registered_total']; ?></td>
                        <td><?php echo $row['percentage_change']; ?></td>

                        <td>
                            <form action="atebubu_amantin_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            
                        </td>
                        <td>

                            <form action="try.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_btn_atebubu/amantin" class="btn btn-danger">DELETE</button>
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
include('includes/scripts.php');
include('includes/footer.php');
?>




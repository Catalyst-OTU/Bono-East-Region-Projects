
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
    <h5><big>WELCOME TO NKORANZA SOUTH CONSTITUENCY</big></h5>

    <form action="pdf_nkoranza_south_constituency.php" method="POST">
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
                  <button type="submit" name="register_btn_nkoranza_south" class="btn btn-primary">Save</button>
                </div>  
            </form>
        </div>
    </div>
</div>






<div class="container-fluid">

<!----DataTales Examples-->
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">

        <form action="try.php" method="POST">
                <button type="submit" name="delete_multiple_register_nkoranza_south_data" class="btn btn-danger">Delete Multiple Data</button>
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
          <h6 class="m-0 font-weight-bold text-primary">NKORANZA SOUTH CONSTITUENCY DATATABLE</h6>
        </div>



        <div class="card-body">

        <div class="table-responsive">

        <?php
            $connection = mysqli_connect("localhost","root","","bonoeast_region");

            $query = "SELECT * FROM nkoranza_south";
            $query_run = mysqli_query($connection, $query);
            
        ?>

            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Check</th>
                        <th>ID</th>
                        <th>Polling Station Code</th>
                        <th>Polling Station Name</th>
                        <th>Register 2019</th>
                        <th>Registered Total</th>
                        <th>Percentage Change</th>
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
                            <form action="nkoranza_south_edit.php" method="post">
                                <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
                            </form>
                            
                        </td>
                        <td>

                            <form action="try.php" method="post">
                                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                                <button type="submit" name="delete_btn_nkoranza_south" class="btn btn-danger">DELETE</button>
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




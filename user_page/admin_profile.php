<?php
session_start();

include('includes/header.php');
include('includes/main_navbar.php');
?>





<!---------------PAGE CONTENT BEGINS-------------------->
 <!-- Begin Page Content -->
 <div class="container-fluid">


<!-- Page Heading -->
<div class="d-sm-flex align-items-center justify-content-between mb-4">
    <h1 class="h3 mb-0 text-gray-800"><big> NPP ADMIN DASHBOARD</big></h1>
    <form action="#" method="POST">
       <button type="submit" name="btn_pdf" class="btn btn-primary">Generate Report</button>
    </form>
    <!-- <a href="https://newpatrioticparty.org/" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="text-white-50"></i> OFFICIAL PAGE OF NPP PARTY</a> -->
</div>







  <div class="modal fade" id="addadminprofile" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
 <div class="modal-dialog" role="document">
     <div class="modal-content">
         <div class="modal-header">
             <h5 class="modal-title" id="exampleModalLabel">Add Admin Member Data</h5>
             <button type="button" class="Close" data-dismiss="modal" aria-label="Close">
                 <span aria-hidden="true">&times;</span>
             </button>
          </div>
            <form action="code.php" method="POST" enctype="multipart/form-data">


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
    <label>Constituency</label>
                  <select name="constituencies" class="form-control">

                    <option value="">Select Constituency</option>

                    <option value="Atebubu_Amanting"> Atebubu/Amanting </option>
                    <option value="Kintampo_North"> Kintampo North </option>
                    <option value="Kintampo_South"> Kintampo South </option>
                    <option value="Nkoranza_North"> Nkoranza North </option>
                    <option value="Nkoranza_South"> Nkoranza South </option>
                    <option value="Pru_East"> Pru East </option>
                    <option value="Pru_West"> Pru West </option>
                    <option value="Sene_East"> Sene East </option>
                    <option value="Sene_West"> Sene West </option>
                    <option value="Techiman_North"> Techiman North </option>
                    <option value="Techiman_South"> Techiman South </option>
                 
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
    <label>Party Position</label>
    <input type="text" name="partyposition" class="form-control" placeholder="Enter Party Position" required>
</div>

<div class="form-group">
    <label>Government Position</label>
    <input type="text" name="govposition" class="form-control" placeholder="Enter Government Position" required>
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control" placeholder="Enter Password" required>
</div>

    <div class="form-group">
       <label>Confirm Password</label>
    <input type="password" name="confirmpassword" class="form-control" placeholder="Confirm Password" required>
    </div>

    <div class="form-group">
     <label> Upload Image  </label>
     <input type="file" name="faculty_image" id="faculty_image" class="form-control" required>
    </div>

  

     <!-- <input type="hidden" name="gender" value="male"> -->

     <input type="hidden" name="usertype" value="user">



</div>

<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button type="submit" name="register_admin_btn" class="btn btn-primary">Save</button>
</div>  
</form>
</div>
</div>
</div>





        <!-- Begin Page Content -->
        <div class="container-fluid">

         <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">Admin Member Profile

            <form action="code.php" method="POST">
                    <button type="submit" name="delete_multiple_register_data_admin" class="btn btn-danger">Delete Multiple Data</button>
                </form>


                <button type="button" class="btn btn-primary float-right" data-toggle="modal" data-target="#addadminprofile">
                    Add Admin Member Profile
                </button>
            </h6>
        </div>


        <!-- Begin Page Content -->
        <div class="container-fluid">



          <!-- DataTales Example -->
          <div class="card shadow mb-4">
            <div class="card-header py-3">
              <h6 class="m-0 font-weight-bold text-primary">ADMIN MEMBERS DATATABLE</h6>
            </div>
            <div class="card-body">

       

              <div class="table-responsive">
                <?php
                     $connection = mysqli_connect("localhost","root","","bonoeast_region");

                    $query = "SELECT * FROM admin_profile";
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
                        <th>Constituency</th>
                        <th>Place of Birth</th>
                        <th>Occupation</th>
                        <th>Party Position</th>
                        <th>Government Position</th>
                        <th>Password</th>
                        <th>UserType</th>
                        <th>Image</th>
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
                        <td><?php echo $row['constituencies']; ?></td>
                        <td><?php echo $row['placeofbirth']; ?></td>
                        <td><?php echo $row['occupation']; ?></td>
                        <td><?php echo $row['partyposition']; ?></td>
                        <td><?php echo $row['govposition']; ?></td>
                        <td><?php echo $row['password']; ?></td>
                        <td><?php echo $row['usertype']; ?></td>
                        <td><?php echo '<img src="Admin Profile Upload/'.$row['images'].'" width="100px;" height="100px;" alt="Image">'?></td>
                        <td>
                           <form action="admin_profile_edit.php" method="post">
                           <input type="hidden" name="edit_id" value="<?php echo $row['id']; ?>">
                           <button type="submit" name="edit_btn" class="btn btn-success">EDIT</button>
        </form>
            
                    </td>
                    <td>

            <form action="code.php" method="post">
                <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                <button type="submit" name="delete_admin_btn" class="btn btn-danger">DELETE</button>
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

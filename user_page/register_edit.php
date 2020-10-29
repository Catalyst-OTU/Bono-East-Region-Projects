<?php 
session_start();
include('includes/header.php');
include('includes/navbar.php');

?>



 <!-- Content Wrapper -->
 <div id="content-wrapper" class="d-flex flex-column">

<!-- Main Content -->
<div id="content">

  


  <div class="container-fluid">

    <!----DataTales Examples-->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-primary">EDIT GREATER ACCRA NPP MEMBER PROFILE</h6>
        </div>
        <div class="card-body">

        <?php

                $connection = mysqli_connect("localhost","root","","bonoeast_region");
                if (isset($_POST['edit_btn']))
           {
                $id = $_POST['edit_id'];
            
                $query = "SELECT * FROM register WHERE id='$id' ";
                $query_run = mysqli_query($connection, $query);

                foreach($query_run as $row)
            {
        ?>


<form action="code.php" method="POST">

<input type="hidden" name="edit_id" value="<?php echo $row['id'] ?>" >

<div class="form-group">
    <label>Username</label>
    <input type="text" name="edit_username" value="<?php echo $row['username'] ?>" class="form-control" placeholder="Enter Username" required>
</div>

<div class="form-group">
    <label>Voter's ID</label>
    <input type="text" name="edit_voters" value="<?php echo $row['voters'] ?>" class="form-control" placeholder="Enter voter's id" required>
</div>

<div class="form-group">
    <label>Phone</label>
    <input type="phone" name="edit_phone" value="<?php echo $row['phone'] ?>" class="form-control" placeholder="Enter Phone Number" required>
</div>

<div class="form-group">
    <label>Gender</label>
    <select name="update_gender" value="<?php echo $row['gender'] ?>" class="form-control">
      <option value="male">Male</option>
      <option value="female">Female</option>
    </select>
</div>

<div class="form-group">
    <label>Date of Birth</label>
    <input type="date" name="edit_dob" value="<?php echo $row['dob'] ?>" class="form-control" placeholder="Enter Date of Birth" required>
</div>



<div class="form-group">
    <label>Party</label>
      <select name="edit_party" value="<?php echo $row['select_party'] ?>" class="form-control">
        <option value="">Select Party</option>
        <option value="npp"> NPP </option>
        <option value="ndc"> NDC </option>
        <option value="other_party"> OTHER PARTY </option>                
      </select>             
</div>





<div class="form-group">
    <label>Constituency</label>
                  <select name="constituencies" value="<?php echo $row['constituencies'] ?>" class="form-control"class="form-control">

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
    <input type="text" name="edit_placeofbirth" value="<?php echo $row['placeofbirth'] ?>" class="form-control" placeholder="Enter Place of Birth" required>
</div>

<div class="form-group">
    <label>Occupation</label>
    <input type="text" name="edit_occupation" value="<?php echo $row['occupation'] ?>" class="form-control" placeholder="Enter Occupation" required>
</div>

<div class="form-group">
    <label>Party Position</label>
    <input type="text" name="edit_partyposition" value="<?php echo $row['partyposition'] ?>" class="form-control" placeholder="Enter Party Position" required>
</div>

<div class="form-group">
    <label>Government Position</label>
    <input type="text" name="edit_govposition" value="<?php echo $row['govposition'] ?>" class="form-control" placeholder="Enter Government Position" required>
</div>

<div class="form-group">
    <label>Password</label>
    <input type="password" name="edit_password" value="<?php echo $row['password'] ?>" class="form-control" placeholder="Enter Password" required>
</div>

<div class="form-group">
    <label>Usertype</label>
    <select name="update_usertype" value="<?php echo $row['usertype'] ?>" class="form-control">
      <option value="user">user</option>
      <option value="admin">admin</option>
    </select>
</div>


<a href="register.php" class="btn btn-danger"> CANCEL </a>
<button type="submit" name="register_updatebtn0" class="btn btn-primary"> UPDATE </button>

</form>

            <?php
                }
                }
            ?>





</div>
</div>
</div>
</div>
</div>
</div>


<?php
include('includes/scripts.php');
include('includes/footer.php');
?>
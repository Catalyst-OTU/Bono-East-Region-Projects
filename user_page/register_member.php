<?php
session_start(); 
include('includes/header.php');
?>

<script type="text/javascript">window.$crisp=[];window.CRISP_WEBSITE_ID="f2335702-9774-4b1c-b0da-c92f58fbccc6";(function(){d=document;s=d.createElement("script");s.src="https://client.crisp.chat/l.js";s.async=1;d.getElementsByTagName("head")[0].appendChild(s);})();</script>
<link rel="stylesheet" href="css/script.css">

<div class="container">

<!-- Outer Row -->
<div class="row justify-content-center">

  <div class="col-xl-6 col-lg-6 col-md-6">

    <div class="card o-hidden border-0 shadow-lg my-5">
      <div class="card-body p-0">
        <!-- Nested Row within Card Body -->
        <div class="row">
          
          <div class="col-lg-12">
            <div class="p-5">
              <div class="text-center">
                <h1 class="h4 text-gray-900 mb-4">BONO EAST REGION REGISTRATION FORM</h1>
                <!-- <img src="images/logo2.jpeg"> -->
              </div>

              <!-- <div class="social-icons">
                    <img src="images/fb1.png">
                    <img src="images/google1.png">
                    <img src="images/twitter.jpg">
                    <img src="images/instagram2.jpeg"> -->

                    <br><br><br>

      


            <form class="user" action="registration_code.php" method="POST" enctype="multipart/form-data">

            <div class="modal-body">

                <div class="form-group">
                  <input type="text" name="username" class="form-control form-control-user" placeholder="Enter Username..." required>
                </div>

                <div class="form-group">
                  <input type="text" name="voters" class="form-control form-control-user" placeholder="Enter voter's Id..." required>
                </div>

                <div class="form-group">
                  <input type="phone" name="phone" class="form-control form-control-user" placeholder="Enter phone Number..." required>
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
                  <select name="constituencies" class="form-control" required>

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
                  <input type="text" name="placeofbirth" class="form-control form-control-user" placeholder="Enter Place of Birth..." required>
                </div>

                <div class="form-group">
                  <input type="text" name="occupation" class="form-control form-control-user" placeholder="Enter Occupation..." required>
                </div>

                <div class="form-group">
                  <input type="text" name="partyposition" class="form-control form-control-user" placeholder="Enter Party Position..." required>
                </div>

                <div class="form-group">
                  <input type="text" name="govposition" class="form-control form-control-user" placeholder="Enter Government Position..." required>
                </div>

                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Password" required>
                </div>

                <div class="form-group">
                  <input type="password" name="confirmpassword" class="form-control form-control-user" placeholder="Confirm Password" required>
                </div>

                <div class="form-group">
                     <input type="file" name="faculty_image" id="faculty_image" class="form-control" placeholder="Upload Image">
                </div>


                <!-- <input type="hidden" name="gender" value="male"> -->

                <input type="hidden" name="usertype" value="user">

            </div>

            <div class="text-center">

            <!-- NEW PATRIOTIC PARTY (NPP) VOTING BUTTON -->
            <button type="submit" name="register_btn_npp" class="btn btn-primary">NPP</button>



            <!-- PROGRESS PEOPLE'S PARTY (PPP) VOTING BUTTON -->
            <button type="submit" name="register_btn_other_party" class="btn btn-primary">OTHER PARTY</button>

            

            <!-- NATIONAL DEMOCRATIC CONGRESS (NDC) VOTING BUTTON -->
            <button type="submit" name="register_btn_ndc" class="btn btn-primary">NDC</button>

            </div>

            
            
            



            <!-- <button type="submit" name="bono_east_region_register_btn" class="btn btn-primary btn-user btn-block">Register</button> -->
                <hr>
                <p class="text-center">Back to Region Page? <a href="Regions.php">Logout</a></p>
            </form>
             
              
            </div>
          </div>
        </div>
      </div>
    </div>

  </div>

</div>

</div>


<?php
include('includes/scripts.php');

?>

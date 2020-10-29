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
                <h1 class="h4 text-gray-900 mb-4">Admin Login!</h1>
                <!-- <img src="images/logo2.jpeg"> -->
              </div>

              <!-- <div class="social-icons">
                    <img src="images/fb1.png">
                    <img src="images/google1.png">
                    <img src="images/twitter.jpg">
                    <img src="images/whatsapp icon.jpg">
                    <img src="images/instagram2.jpeg">
                 -->


                 <br><br><br>


     



              <form class="user" action="logincode.php" method="POST">

            <div class="form-group">
                  <input type="text" name="voters" class="form-control form-control-user" placeholder="Enter Admin  ID..." required>
                </div>
                <div class="form-group">
                  <input type="password" name="password" class="form-control form-control-user" placeholder="Admin Password" required>
                </div>
                <button type="submit" name="login_btn" class="btn btn-primary btn-user btn-block">Login</button>
                <hr>
                <!-----<p class="text-center">If you don't have an Account? <a href="register_login.php">Sign Up</a></p>------>
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




<?php
session_start();


// include('security.php');
$connection = mysqli_connect("localhost","root","","atebubu_amantin");







//REGISTRATION CODING FOR ATEBUBU / AMANTIN NPP

if (isset($_POST['register_btn_atebubu_amantin_npp']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $polling_stations = $_POST['polling_stations'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];
  


    // USERNAME REQUIRES ONLY LETTERS
    if (!preg_match("/^[a-zA-Z\s]+$/", $username))
    {
      $_SESSION['status'] = "Username requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    }
    else {

    // VOTER'S ID REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$voters)) 
      {
        $_SESSION['status'] = "Voter's ID requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
      }
      else {

    if (strlen($voters)<10) 
    {
        $_SESSION['status'] = "Voter's ID should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else{

    if (strlen($voters)>10) 
    {
        $_SESSION['status'] = "Voter's ID should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else{

    
    // PHONE NUMBER REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
        $_SESSION['status'] = "Phone Number requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else {


    if (strlen($phone)<10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else{

    if (strlen($phone)>10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else{


          // OCCUPATION REQUIRES ONLY LETTERS
          if (!preg_match("/^[a-zA-Z\s]+$/", $occupation))
    {
      $_SESSION['status'] = "Occupation requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    }
    else {




      //ATEBUBU / AMANTIN CONSTITUENCY PHONE NUMBER VOTER'S ID AND VERIFICATION
      $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NPP Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NPP Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else
    {

      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NDC Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM ndc WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NDC Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else
    {

      $voters_query = "SELECT * FROM others WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In OTHER MEMBERS Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM others WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In OTHER MEMBERS Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_npp.php');
    }
    else
    {


     
        
               
        
        
                $query = "INSERT INTO npp (username,voters,phone,gender,dob,polling_stations,placeofbirth,occupation,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$polling_stations', '$placeofbirth', '$occupation', '$usertype', '$images')";
                $query_run = mysqli_query($connection,$query);   
        
        
                if ($query_run) 
                {
                    move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
                    $_SESSION['success'] = "NPP Member Profile Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: atebubu_amantin_npp.php');                                
                }
                else
                {
                  $_SESSION['status'] = "NPP Member Profile Not Added";
                  $_SESSION['status_code'] = "error";
                  header('Location: atebubu_amantin_npp.php');
                }
                if ($query_run) 
                {
                  $_SESSION['status'] = "NPP Member Profile Added Successfully";
                  $_SESSION['status_code'] = "success";
                  header('Location: atebubu_amantin_npp.php');                                
                }

               
}}}}
}}}}
// ATEBUBU / AMANTIN CONSTITUENCY VOTER'S ID AND PHONE NUMBER VERIFICATION
}}}}}}

}






//Update Session

if (isset($_POST['update_atebubu/amantin_npp_btn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $polling_stations = $_POST['edit_polling_stations'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE npp SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', polling_stations='$polling_stations', placeofbirth='$placeofbirth', occupation='$occupation', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: atebubu_amantin_npp.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE npp SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_atebubu/amantin_npp_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM npp WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "NPP Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: atebubu_amantin_npp.php');
   }
   else
   {
    $_SESSION['status'] = "NPP Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: atebubu_amantin_npp.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_atebubu/amantin_npp_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM npp WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: atebubu_amantin_npp.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_npp.php');
    } 
}















//REGISTRATION CODING FOR ATEBUBU / AMANTIN NDC

if (isset($_POST['register_btn_atebubu_amantin_ndc']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $polling_stations = $_POST['polling_stations'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];
  


    // USERNAME REQUIRES ONLY LETTERS
    if (!preg_match("/^[a-zA-Z\s]+$/", $username))
    {
      $_SESSION['status'] = "Username requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    }
    else {

    // VOTER'S ID REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$voters)) 
      {
        $_SESSION['status'] = "Voter's ID requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
      }
      else {

    if (strlen($voters)<10) 
    {
        $_SESSION['status'] = "Voter's ID should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else{

    if (strlen($voters)>10) 
    {
        $_SESSION['status'] = "Voter's ID should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else{

    
    // PHONE NUMBER REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
        $_SESSION['status'] = "Phone Number requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else {


    if (strlen($phone)<10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else{

    if (strlen($phone)>10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else{


          // OCCUPATION REQUIRES ONLY LETTERS
          if (!preg_match("/^[a-zA-Z\s]+$/", $occupation))
    {
      $_SESSION['status'] = "Occupation requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    }
    else {




      //ATEBUBU / AMANTIN CONSTITUENCY PHONE NUMBER VOTER'S ID AND VERIFICATION
      $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NPP Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NPP Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else
    {

      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NDC Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM ndc WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NDC Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else
    {

      $voters_query = "SELECT * FROM others WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In OTHER MEMBERS Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM others WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In OTHER MEMBERS Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_ndc.php');
    }
    else
    {


     
        
               
        
        
                $query = "INSERT INTO ndc (username,voters,phone,gender,dob,polling_stations,placeofbirth,occupation,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$polling_stations', '$placeofbirth', '$occupation', '$usertype', '$images')";
                $query_run = mysqli_query($connection,$query);   
        
        
                if ($query_run) 
                {
                    move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
                    $_SESSION['success'] = "NDC Member Profile Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: atebubu_amantin_ndc.php');                                
                }
                else
                {
                  $_SESSION['status'] = "NDC Member Profile Not Added";
                  $_SESSION['status_code'] = "error";
                  header('Location: atebubu_amantin_ndc.php');
                }
                if ($query_run) 
                {
                  $_SESSION['status'] = "NDC Member Profile Added Successfully";
                  $_SESSION['status_code'] = "success";
                  header('Location: atebubu_amantin_ndc.php');                                
                }

               
}}}}
}}}}
// ATEBUBU / AMANTIN CONSTITUENCY VOTER'S ID AND PHONE NUMBER VERIFICATION
}}}}}}

}






//Update Session

if (isset($_POST['update_atebubu/amantin_ndc_btn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $polling_stations = $_POST['edit_polling_stations'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE ndc SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', polling_stations='$polling_stations', placeofbirth='$placeofbirth', occupation='$occupation', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "NDC Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: atebubu_amantin_ndc.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE ndc SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_atebubu/amantin_ndc_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM ndc WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "NDC Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: atebubu_amantin_ndc.php');
   }
   else
   {
    $_SESSION['status'] = "NDC Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: atebubu_amantin_ndc.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_atebubu/amantin_ndc_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM ndc WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "NDC Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: atebubu_amantin_ndc.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_ndc.php');
    } 
}





















//REGISTRATION CODING FOR ATEBUBU / AMANTIN OTHERS

if (isset($_POST['register_btn_atebubu_amantin_others']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $polling_stations = $_POST['polling_stations'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];
  


    // USERNAME REQUIRES ONLY LETTERS
    if (!preg_match("/^[a-zA-Z\s]+$/", $username))
    {
      $_SESSION['status'] = "Username requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    }
    else {

    // VOTER'S ID REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$voters)) 
      {
        $_SESSION['status'] = "Voter's ID requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
      }
      else {

    if (strlen($voters)<10) 
    {
        $_SESSION['status'] = "Voter's ID should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else{

    if (strlen($voters)>10) 
    {
        $_SESSION['status'] = "Voter's ID should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else{

    
    // PHONE NUMBER REQUIRES ONLY NUMBERS
    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
        $_SESSION['status'] = "Phone Number requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else {


    if (strlen($phone)<10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else{

    if (strlen($phone)>10) 
    {
        $_SESSION['status'] = "Phone Number should be 10 digits";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else{


          // OCCUPATION REQUIRES ONLY LETTERS
          if (!preg_match("/^[a-zA-Z\s]+$/", $occupation))
    {
      $_SESSION['status'] = "Occupation requires only Letters";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    }
    else {




      //ATEBUBU / AMANTIN CONSTITUENCY PHONE NUMBER VOTER'S ID AND VERIFICATION
      $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NPP Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NPP Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else
    {

      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NDC Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM ndc WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NDC Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else
    {

      $voters_query = "SELECT * FROM others WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In OTHER MEMBERS Data Table";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    }
    else
    {
      
    $phone_query = "SELECT * FROM others WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In OTHER MEMBERS Data Table";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin_others.php');
    }
    else
    {


     
        
               
        
        
                $query = "INSERT INTO others (username,voters,phone,gender,dob,polling_stations,placeofbirth,occupation,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$polling_stations', '$placeofbirth', '$occupation', '$usertype', '$images')";
                $query_run = mysqli_query($connection,$query);   
        
        
                if ($query_run) 
                {
                    move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
                    $_SESSION['success'] = "Profile Added";
                    $_SESSION['status_code'] = "success";
                    header('Location: atebubu_amantin_others.php');                                
                }
                else
                {
                  $_SESSION['status'] = "Profile Not Added";
                  $_SESSION['status_code'] = "error";
                  header('Location: atebubu_amantin_others.php');
                }
                if ($query_run) 
                {
                  $_SESSION['status'] = "Profile Added Successfully";
                  $_SESSION['status_code'] = "success";
                  header('Location: atebubu_amantin_others.php');                                
                }

               
}}}}
}}}}
// ATEBUBU / AMANTIN CONSTITUENCY VOTER'S ID AND PHONE NUMBER VERIFICATION
}}}}}}

}






//Update Session

if (isset($_POST['update_atebubu/amantin_others_btn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $polling_stations = $_POST['edit_polling_stations'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE others SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', polling_stations='$polling_stations', placeofbirth='$placeofbirth', occupation='$occupation', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: atebubu_amantin_others.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE others SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_atebubu/amantin_others_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM others WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: atebubu_amantin_others.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: atebubu_amantin_others.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_atebubu/amantin_others_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM others WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: atebubu_amantin_others.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin_others.php');
    } 
}
?>
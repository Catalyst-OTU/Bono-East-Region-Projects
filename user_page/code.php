


<?php
session_start();


// include('security.php');
$connection = mysqli_connect("localhost","root","","bonoeast_region");



//ATEBUBU / AMANTIN CONSTITUENCY 
if (isset($_POST['register_btn_atebubu_amantin']))
 {

    $polling_station_code = $_POST['polling_station_code'];
    $polling_station_name = $_POST['polling_station_name'];
    $register_2019 = $_POST['register_2019'];
    $registered_total = $_POST['registered_total'];
    $percentage_change = $_POST['percentage_change'];
  



    if (!preg_match('/^[0-9]*$/',$register_2019)) 
      {
        $_SESSION['status'] = "Register 2019 requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: atebubu_amantin.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: atebubu_amantin.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: atebubu_amantin.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {


      //BONO EAST REGION (KINTAMPO NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM kintampo_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Kintampo North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (KINTAMPO SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM kintampo_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Kintampo South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM nkoranza_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM nkoranza_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (PRU WEST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru West Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (SENE EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (SENE WEST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene West Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (TECHIMAN NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Techiman North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (TECHIMAN SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Techiman South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {









      $query = "INSERT INTO atebubu_amantin (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: atebubu_amantin.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: atebubu_amantin.php');
          }
      


//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}



// REGISTER 2019 REQUIRES ONLY NUMBERS    
}
// REGISTERED TOTAL REQUIRES ONLY NUMBERS 
}
// PERCENTAGE CHANGE REQUIRES ONLY NUMBERS 
}
   

}




?>



<?php





//Update Session

if (isset($_POST['register_updatebtn_atebubu/amantin']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE atebubu_amantin SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: atebubu_amantin.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE atebubu_amantin SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_atebubu/amantin_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM atebubu_amantin WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: atebubu_amantin.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: atebubu_amantin.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_atebubu/amantin'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM atebubu_amantin WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: atebubu_amantin.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    } 
}









// KINTAMPO NORTH CONSTITUENCY
if (isset($_POST['register_btn_atebubu_amantin']))
 {

    $polling_station_code = $_POST['polling_station_code'];
    $polling_station_name = $_POST['polling_station_name'];
    $register_2019 = $_POST['register_2019phone'];
    $registered_total = $_POST['registered_total'];
    $percentage_change = $_POST['percentage_change'];
  

    if (!preg_match('/^[0-9]*$/',$register_2019)) 
    {
      $_SESSION['status'] = "Register 2019 requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');
    }
    else {

      if (!preg_match('/^[0-9]*$/',$registered_total)) 
      {
        $_SESSION['status'] = "Registered Total requires only numbers";
        $_SESSION['status_code'] = "error";
        header('Location: NPP.php');
      }
      else {

        if (!preg_match('/^[0-9]*$/',$percentage_change)) 
        {
          $_SESSION['status'] = "Percentage Change requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: NPP.php');
        }
        else {
       

    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {


      //BONO EAST REGION (KINTAMPO NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM kintampo_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Kintampo North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (KINTAMPO SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM kintampo_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Kintampo South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM nkoranza_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM nkoranza_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (PRU WEST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru West Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (SENE EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (SENE WEST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene West Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (TECHIMAN NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Techiman North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {

      //BONO EAST REGION (TECHIMAN SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Techiman South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }
    else
    {



     
 


      $query = "INSERT INTO atebubu_amantin (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change,) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total', '$percentage_change')";
      $query_run = mysqli_query($connection,$query);
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "Data Added";
       $_SESSION['status_code'] = "success";
       header('Location: atebubu_amantin.php');
    }
    else{
       $_SESSION['status'] = "Data not Added";
       $_SESSION['status_code'] = "success";
       header('Location: atebubu_amantin.php');
    }
    

// REGISTER 2019 REQUIRES ONLY NUMBERS    
}
// REGISTERED TOTAL REQUIRES ONLY NUMBERS 
}
// PERCENTAGE CHANGE REQUIRES ONLY NUMBERS 
}


//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
//BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
}
   

}





//Update Session

if (isset($_POST['register_updatebtn_atebubu/amantin']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE atebubu_amantin SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: atebubu_amantin.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE atebubu_amantin SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_atebubu/amantin_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM atebubu_amantin WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: atebubu_amantin.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: atebubu_amantin.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_atebubu/amantin'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM atebubu_amantin WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: atebubu_amantin.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: atebubu_amantin.php');
    } 
}




















//REGISTRATION CODING FOR ADMIN MEMBERS

if (isset($_POST['register_admin_btn']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $partyposition = $_POST['partyposition'];
    $govposition = $_POST['govposition'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];



    if (!preg_match ("/^[a-zA-Z\s]+$/", $username)) 
    {
      $_SESSION['status'] = "Username require only Alphabet or Letters";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');     
    }
    else {

    if (!preg_match('/^[0-9]*$/',$voters)) 
    {
      $_SESSION['status'] = "Voter'ID requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    }
    else {

    // if (strlen($voters)<10) 
    // {
    //   $_SESSION['status'] = "Voter's ID should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: admin_profile.php');
    // }

    if (strlen($voters)>10) 
    {
      $_SESSION['status'] = "Voter's ID should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');        
    }
    else {

    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
      $_SESSION['status'] = "Phone Number requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php'); 
    }
    else {

    // if (strlen($phone)<10) 
    // {
    //   $_SESSION['status'] = "Phone Number should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: admin_profile.php');
    // }

    if (strlen($phone)>10) 
    {
      $_SESSION['status'] = "Phone Number should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');   
    }
    else {





  

    $voters_query = "SELECT * FROM admin_profile WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    }
    else
    {
      if ($password === $cpassword)
        {

        if (file_exists("Admin Profile Upload/" . $_FILES["faculty_image"]["name"])) 
        {

          $store = $_FILES["faculty_image"]["name"];
          $_SESSION['status']= "Image Already Exists. '.$store.'";
          $_SESSION['status_code'] = "warning";
          header('Location: admin_profile.php');;

        }


    else
    {      
      $query = "INSERT INTO admin_profile (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,partyposition,govposition,password,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$partyposition', '$govposition', '$password', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "Admin Profile Upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: admin_profile.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists";
          $_SESSION['status_code'] = "error";
          header('Location: admin_profile.php');
        }
    //Image    
    }


    
    if ($query_run) 
    {
       // echo "Saved";
      //  $_SESSION['status'] = "Admin Profile Added";
      //  $_SESSION['status_code'] = "success";
       header('Location: admin_profile.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: admin_profile.php');
        }

  //voters
  }

}

}
}

}
}


 }



//Update Session

if (isset($_POST['register_admin_updatebtn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $partyposition = $_POST['edit_partyposition'];
    $govposition = $_POST['edit_govposition'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE admin_profile SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', constituencies='$constituencies', placeofbirth='$placeofbirth', occupation='$occupation', partyposition='$partyposition', govposition='$govposition', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Admin Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: admin_profile.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE admin_profile SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_data_admin'])) 
  {
   $id = "1";
   $query = "DELETE FROM admin_profile WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Admin Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: admin_profile.php');
   }
   else
   {
    $_SESSION['status'] = "Admin Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: admin_profile.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_admin_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM admin_profile WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Admin Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: admin_profile.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    } 
}







    

    










if (isset($_POST['register_btn_npp']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];




    if (!preg_match ("/^[a-zA-Z\s]+$/", $username)) 
    {
      $_SESSION['status'] = "Username require only Alphabet or Letters";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');     
    }
    else {

    if (!preg_match('/^[0-9]*$/',$voters)) 
    {
      $_SESSION['status'] = "Voter'ID requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');
    }
    else {

    // if (strlen($voters)<10) 
    // {
    //   $_SESSION['status'] = "Voter's ID should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: NPP.php');
    // }

    if (strlen($voters)>10) 
    {
      $_SESSION['status'] = "Voter's ID should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');        
    }
    else {

    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
      $_SESSION['status'] = "Phone Number requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php'); 
    }
    else {

    // if (strlen($phone)<10) 
    // {
    //   $_SESSION['status'] = "Phone Number should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: NPP.php');
    // }

    if (strlen($phone)>10) 
    {
      $_SESSION['status'] = "Phone Number should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');   
    }
    else {

      if (!preg_match ("/^[a-zA-Z\s]+$/", $occupation)) 
      {
        $_SESSION['status'] = "Occupation require only Alphabet or Letters";
        $_SESSION['status_code'] = "error";
        header('Location: NPP.php');     
      }
      else {






    

    //BONO EAST REGION NPP VOTER'S ID VERIFICATION
    $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');
    }
    else
    {


      //BONO EAST REGION NDC PHONE NUMBER AND VOTER'S ID VERIFICATION
    $phone_query = "SELECT * FROM ndc WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NDC Database";
        $_SESSION['status_code'] = "error";
        header('Location: NPP.php');
    }
    else
    {


      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
      $voters_query_run = mysqli_query($connection, $voters_query);
      if (mysqli_num_rows($voters_query_run) > 0) 
      {
        $_SESSION['status'] = "Voter's ID Already Exist In NDC Database";
        $_SESSION['status_code'] = "warning";
        header('Location: NPP.php');
      }
      else
      {



//BONO EAST REGION OTHER PARTY PHONE NUMBER AND VOTER'S ID VERIFICATION
        $phone_query = "SELECT * FROM other_party WHERE phone='$phone' ";
        $phone_query_run = mysqli_query($connection, $phone_query);
        if (mysqli_num_rows($phone_query_run) > 0) 
        {
            
            $_SESSION['status'] = "Phone Number Already Exist In OTHER PARTY Database";
            $_SESSION['status_code'] = "error";
            header('Location: NPP.php');
        }
        else
        {
    
    
          $voters_query = "SELECT * FROM other_party WHERE voters='$voters' ";
          $voters_query_run = mysqli_query($connection, $voters_query);
          if (mysqli_num_rows($voters_query_run) > 0) 
          {
            $_SESSION['status'] = "Voter's ID Already Exist In OTHER PARTY Database";
            $_SESSION['status_code'] = "warning";
            header('Location: NPP.php');
          }
          else
          {


      if ($password === $cpassword)
        {

        if (file_exists("upload/" . $_FILES["faculty_image"]["name"])) 
        {

          $store = $_FILES["faculty_image"]["name"];
          $_SESSION['status']= "Image Already Exists. '.$store.'";
          $_SESSION['status_code'] = "warning";
          header('Location: NPP.php');;

        }
    else
    {


     


      $query = "INSERT INTO npp (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,password,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$password', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "NPP Member Profile Added";
            header('Location: NPP.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists In NPP Database";
          $_SESSION['status_code'] = "error";
          header('Location: NPP.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "NPP Member Profile Added";
       $_SESSION['status_code'] = "success";
       header('Location: NPP.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: NPP.php');
        }

//Greater Accra Region voters id Verification
}

//Eastern Region Phone Number and Voter's ID Verification
}
}
//Ashanti Region Phone Number and Voter's ID Verification
}
}

}
}
}
}
}

    }

}



//Update Session

if (isset($_POST['register_updatebtn1']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE npp SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', constituencies='$constituencies', placeofbirth='$placeofbirth', occupation='$occupation', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: NPP.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');
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


if (isset($_POST['delete_multiple_register_npp_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM npp WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "NPP Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: NPP.php');
   }
   else
   {
    $_SESSION['status'] = "NPP Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: NPP.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_npp'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM npp WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: NPP.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: NPP.php');
    } 
}









// REGISTRATION FORM FOR BONO EAST REGION NDC MEMBERS


if (isset($_POST['register_btn_ndc']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];




    if (!preg_match ("/^[a-zA-Z\s]+$/", $username)) 
    {
      $_SESSION['status'] = "Username require only Alphabet or Letters";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');     
    }
    else {

    if (!preg_match('/^[0-9]*$/',$voters)) 
    {
      $_SESSION['status'] = "Voter'ID requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');
    }
    else {

    // if (strlen($voters)<10) 
    // {
    //   $_SESSION['status'] = "Voter's ID should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: NDC.php');
    // }

    if (strlen($voters)>10) 
    {
      $_SESSION['status'] = "Voter's ID should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');        
    }
    else {

    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
      $_SESSION['status'] = "Phone Number requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php'); 
    }
    else {

    // if (strlen($phone)<10) 
    // {
    //   $_SESSION['status'] = "Phone Number should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: NDC.php');
    // }

    if (strlen($phone)>10) 
    {
      $_SESSION['status'] = "Phone Number should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');   
    }
    else {

      if (!preg_match ("/^[a-zA-Z\s]+$/", $occupation)) 
      {
        $_SESSION['status'] = "Occupation require only Alphabet or Letters";
        $_SESSION['status_code'] = "error";
        header('Location: NDC.php');     
      }
      else {






    

    //BONO EAST REGION NDC VOTER'S ID VERIFICATION
    $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');
    }
    else
    {


      //BONO EAST REGION NPP PHONE NUMBER AND VOTER'S ID VERIFICATION
    $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NPP Database";
        $_SESSION['status_code'] = "error";
        header('Location: NDC.php');
    }
    else
    {


      $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
      $voters_query_run = mysqli_query($connection, $voters_query);
      if (mysqli_num_rows($voters_query_run) > 0) 
      {
        $_SESSION['status'] = "Voter's ID Already Exist In NPP Database";
        $_SESSION['status_code'] = "warning";
        header('Location: NDC.php');
      }
      else
      {



//BONO EAST REGION OTHER PARTY PHONE NUMBER AND VOTER'S ID VERIFICATION
        $phone_query = "SELECT * FROM other_party WHERE phone='$phone' ";
        $phone_query_run = mysqli_query($connection, $phone_query);
        if (mysqli_num_rows($phone_query_run) > 0) 
        {
            
            $_SESSION['status'] = "Phone Number Already Exist In OTHER PARTY Database";
            $_SESSION['status_code'] = "error";
            header('Location: NDC.php');
        }
        else
        {
    
    
          $voters_query = "SELECT * FROM other_party WHERE voters='$voters' ";
          $voters_query_run = mysqli_query($connection, $voters_query);
          if (mysqli_num_rows($voters_query_run) > 0) 
          {
            $_SESSION['status'] = "Voter's ID Already Exist In OTHER PARTY Database";
            $_SESSION['status_code'] = "warning";
            header('Location: NDC.php');
          }
          else
          {


      if ($password === $cpassword)
        {

        if (file_exists("upload/" . $_FILES["faculty_image"]["name"])) 
        {

          $store = $_FILES["faculty_image"]["name"];
          $_SESSION['status']= "Image Already Exists. '.$store.'";
          $_SESSION['status_code'] = "warning";
          header('Location: NDC.php');;

        }
    else
    {


     


      $query = "INSERT INTO ndc (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "NPP Member Profile Added";
            header('Location: NDC.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists In NPP Database";
          $_SESSION['status_code'] = "error";
          header('Location: NDC.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "NPP Member Profile Added";
       $_SESSION['status_code'] = "success";
       header('Location: NDC.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: NDC.php');
        }

//Greater Accra Region voters id Verification
}

//Eastern Region Phone Number and Voter's ID Verification
}
}
//Ashanti Region Phone Number and Voter's ID Verification
}
}

}
}
}
}
}

    }

}



//Update Session

if (isset($_POST['register_updatebtn_ndc']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE ndc SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', constituencies='$constituencies', placeofbirth='$placeofbirth', occupation='$occupation', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: NDC.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');
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


if (isset($_POST['delete_multiple_register_ndc_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM ndc WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "NPP Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: NDC.php');
   }
   else
   {
    $_SESSION['status'] = "NPP Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: NDC.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_ndc'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM ndc WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: NDC.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: NDC.php');
    } 
}








//REGISTRATION FORM FOR BONO EAST REGION OTHER MEMBERS


if (isset($_POST['register_btn_others']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];




    if (!preg_match ("/^[a-zA-Z\s]+$/", $username)) 
    {
      $_SESSION['status'] = "Username require only Alphabet or Letters";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');     
    }
    else {

    if (!preg_match('/^[0-9]*$/',$voters)) 
    {
      $_SESSION['status'] = "Voter'ID requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');
    }
    else {

    // if (strlen($voters)<10) 
    // {
    //   $_SESSION['status'] = "Voter's ID should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: OTHERS.php');
    // }

    if (strlen($voters)>10) 
    {
      $_SESSION['status'] = "Voter's ID should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');        
    }
    else {

    if (!preg_match('/^[0-9]*$/',$phone)) 
    {
      $_SESSION['status'] = "Phone Number requires only numbers";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php'); 
    }
    else {

    // if (strlen($phone)<10) 
    // {
    //   $_SESSION['status'] = "Phone Number should be 10 digits";
    //   $_SESSION['status_code'] = "error";
    //   header('Location: OTHERS.php');
    // }

    if (strlen($phone)>10) 
    {
      $_SESSION['status'] = "Phone Number should be 10 digits";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');   
    }
    else {

      if (!preg_match ("/^[a-zA-Z\s]+$/", $occupation)) 
      {
        $_SESSION['status'] = "Occupation require only Alphabet or Letters";
        $_SESSION['status_code'] = "error";
        header('Location: OTHERS.php');     
      }
      else {






    

    //BONO EAST REGION OTHERS VOTER'S ID VERIFICATION
    $voters_query = "SELECT * FROM others WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');
    }
    else
    {


      //BONO EAST REGION NDC PHONE NUMBER AND VOTER'S ID VERIFICATION
    $phone_query = "SELECT * FROM ndc WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NDC Database";
        $_SESSION['status_code'] = "error";
        header('Location: OTHERS.php');
    }
    else
    {


      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
      $voters_query_run = mysqli_query($connection, $voters_query);
      if (mysqli_num_rows($voters_query_run) > 0) 
      {
        $_SESSION['status'] = "Voter's ID Already Exist In NDC Database";
        $_SESSION['status_code'] = "warning";
        header('Location: OTHERS.php');
      }
      else
      {



//BONO EAST REGION NPP PHONE NUMBER AND VOTER'S ID VERIFICATION
        $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
        $phone_query_run = mysqli_query($connection, $phone_query);
        if (mysqli_num_rows($phone_query_run) > 0) 
        {
            
            $_SESSION['status'] = "Phone Number Already Exist In NPP Database";
            $_SESSION['status_code'] = "error";
            header('Location: OTHERS.php');
        }
        else
        {
    
    
          $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
          $voters_query_run = mysqli_query($connection, $voters_query);
          if (mysqli_num_rows($voters_query_run) > 0) 
          {
            $_SESSION['status'] = "Voter's ID Already Exist In NPP Database";
            $_SESSION['status_code'] = "warning";
            header('Location: OTHERS.php');
          }
          else
          {


      if ($password === $cpassword)
        {

        if (file_exists("upload/" . $_FILES["faculty_image"]["name"])) 
        {

          $store = $_FILES["faculty_image"]["name"];
          $_SESSION['status']= "Image Already Exists. '.$store.'";
          $_SESSION['status_code'] = "warning";
          header('Location: OTHERS.php');;

        }
    else
    {


     


      $query = "INSERT INTO others (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "NPP Member Profile Added";
            header('Location: OTHERS.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists In NPP Database";
          $_SESSION['status_code'] = "error";
          header('Location: OTHERS.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "NPP Member Profile Added";
       $_SESSION['status_code'] = "success";
       header('Location: OTHERS.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: OTHERS.php');
        }

//Greater Accra Region voters id Verification
}

//Eastern Region Phone Number and Voter's ID Verification
}
}
//Ashanti Region Phone Number and Voter's ID Verification
}
}

}
}
}
}
}

    }

}



//Update Session

if (isset($_POST['register_updatebtn_others']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE others SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', constituencies='$constituencies', placeofbirth='$placeofbirth', occupation='$occupation', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: OTHERS.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');
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


if (isset($_POST['delete_multiple_register_others_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM others WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "NPP Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: OTHERS.php');
   }
   else
   {
    $_SESSION['status'] = "NPP Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: OTHERS.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_others'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM others WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "NPP Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: OTHERS.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: OTHERS.php');
    } 
}



























//REGISTRATION CODING FOR ADMIN MEMBERS

if (isset($_POST['register_admin_btn']))
 {

    $username = $_POST['username'];
    $voters = $_POST['voters'];
    $phone = $_POST['phone'];
    $gender = $_POST['gender'];
    $date = $_POST['dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['placeofbirth'];
    $occupation = $_POST['occupation'];
    $partyposition = $_POST['partyposition'];
    $govposition = $_POST['govposition'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];

  

    $voters_query = "SELECT * FROM admin_profile WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    }
    else
    {
      if ($password === $cpassword)
        {

        if (file_exists("Admin Profile Upload/" . $_FILES["faculty_image"]["name"])) 
        {

          $store = $_FILES["faculty_image"]["name"];
          $_SESSION['status']= "Image Already Exists. '.$store.'";
          $_SESSION['status_code'] = "warning";
          header('Location: admin_profile.php');;

        }
    else
    {      
      $query = "INSERT INTO admin_profile (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,partyposition,govposition,password,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$partyposition', '$govposition', '$password', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "Admin Profile Upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "Admin Profile Added";
            header('Location: admin_profile.php');
                       
        }
        else
        {
          $_SESSION['status'] = "phone Number Already Exists";
          $_SESSION['status_code'] = "error";
          header('Location: admin_profile.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
      //  $_SESSION['status'] = "Admin Profile Added";
      //  $_SESSION['status_code'] = "success";
       header('Location: admin_profile.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: admin_profile.php');
        }

  //voters
  }



}



//Update Session

if (isset($_POST['register_admin_updatebtn']))
 {

    $id = $_POST['edit_id'];
    $username = $_POST['edit_username'];
    $voters = $_POST['edit_voters'];
    $phone = $_POST['edit_phone'];
    $gender = $_POST['update_gender'];
    $date = $_POST['edit_dob'];
    $constituencies = $_POST['constituencies'];
    $placeofbirth = $_POST['edit_placeofbirth'];
    $occupation = $_POST['edit_occupation'];
    $partyposition = $_POST['edit_partyposition'];
    $govposition = $_POST['edit_govposition'];
    $password = $_POST['edit_password'];
    $usertypeupdate = $_POST['update_usertype'];


    $query = "UPDATE admin_profile SET username='$username', voters='$voters', phone='$phone', gender='$gender', dob='$date', constituencies='$constituencies', placeofbirth='$placeofbirth', occupation='$occupation', partyposition='$partyposition', govposition='$govposition', password='$password', usertype='$usertypeupdate' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Admin Member data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: admin_profile.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE admin_profile SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_data_admin'])) 
  {
   $id = "1";
   $query = "DELETE FROM admin_profile WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Admin Member data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: admin_profile.php');
   }
   else
   {
    $_SESSION['status'] = "Admin Member data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: admin_profile.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_admin_btn'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM admin_profile WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Admin Member data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: admin_profile.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: admin_profile.php');
    } 
}

?>
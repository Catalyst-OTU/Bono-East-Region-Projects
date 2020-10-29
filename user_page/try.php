<?php
session_start();

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












//KINTAMPO NORTH CONSTITUENCY 
if (isset($_POST['register_btn_kintampo_north']))
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
        header('Location: kintampo_north.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: kintampo_north.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: kintampo_north.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
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
      header('Location: kintampo_north.php');
    }
    else
    {









      $query = "INSERT INTO kintampo_north (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: kintampo_north.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: kintampo_north.php');
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







//Update Session

if (isset($_POST['register_updatebtn_kintampo_north']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE kintampo_north SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: kintampo_north.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: kintampo_north.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE kintampo_north SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_kintampo_north_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM kintampo_north WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: kintampo_north.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: kintampo_north.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_kintampo_north'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM kintampo_north WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: kintampo_north.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: kintampo_north.php');
    } 
}















//KINTAMPO SOUTH CONSTITUENCY 
if (isset($_POST['register_btn_kintampo_south']))
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
        header('Location: kintampo_south.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: kintampo_south.php');
        }
        else {
  
          // if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          // {
          //   $_SESSION['status'] = "Percentage Change requires only numbers";
          //   $_SESSION['status_code'] = "error";
          //   header('Location: kintampo_south.php');
          // }
          // else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
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
      header('Location: kintampo_south.php');
    }
    else
    {









      $query = "INSERT INTO kintampo_south (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: kintampo_south.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: kintampo_south.php');
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
// }
   

}







//Update Session

if (isset($_POST['register_updatebtn_kintampo_south']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE kintampo_south SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: kintampo_south.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: kintampo_south.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE kintampo_south SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_kintampo_south_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM kintampo_south WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: kintampo_south.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: kintampo_south.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_kintampo_south'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM kintampo_south WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: kintampo_south.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: kintampo_south.php');
    } 
}












//NKORANZA NORTH CONSTITUENCY 
if (isset($_POST['register_btn_nkoranza_north']))
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
        header('Location: nkoranza_north.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: nkoranza_north.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: nkoranza_north.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
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
      header('Location: nkoranza_north.php');
    }
    else
    {









      $query = "INSERT INTO nkoranza_north (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: nkoranza_north.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: nkoranza_north.php');
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







//Update Session

if (isset($_POST['register_updatebtn_nkoranza_north']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE nkoranza_north SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: nkoranza_north.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: nkoranza_north.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE nkoranza_north SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_nkoranza_north_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM nkoranza_north WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: nkoranza_north.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: nkoranza_north.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_nkoranza_north'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM nkoranza_north WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: nkoranza_north.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: nkoranza_north.php');
    } 
}















//NKORANZA SOUTH CONSTITUENCY 
if (isset($_POST['register_btn_nkoranza_south']))
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
        header('Location: nkoranza_south.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: nkoranza_south.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: nkoranza_south.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
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
      header('Location: nkoranza_south.php');
    }
    else
    {









      $query = "INSERT INTO nkoranza_south (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: nkoranza_south.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: nkoranza_south.php');
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







//Update Session

if (isset($_POST['register_updatebtn_nkoranza_south']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE nkoranza_south SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: nkoranza_south.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: nkoranza_south.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE nkoranza_south SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_nkoranza_south_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM nkoranza_south WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: nkoranza_south.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: nkoranza_south.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_nkoranza_south'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM nkoranza_south WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: nkoranza_south.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: nkoranza_south.php');
    } 
}

















//PRU EAST CONSTITUENCY 
if (isset($_POST['register_btn_pru_east']))
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
        header('Location: pru_east.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: pru_east.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: pru_east.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
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
      header('Location: pru_east.php');
    }
    else
    {









      $query = "INSERT INTO pru_east (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: pru_east.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: pru_east.php');
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







//Update Session

if (isset($_POST['register_updatebtn_pru_east']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE pru_east SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: pru_east.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: pru_east.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE pru_east SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_pru_east_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM pru_east WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: pru_east.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: pru_east.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_pru_east'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM pru_east WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: pru_east.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: pru_east.php');
    } 
}













//PRU WEST CONSTITUENCY 
if (isset($_POST['register_btn_pru_west']))
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
        header('Location: pru_west.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: pru_west.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: pru_west.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: pru_west.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM pru_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
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
      header('Location: pru_west.php');
    }
    else
    {









      $query = "INSERT INTO pru_west (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: pru_west.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: pru_west.php');
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







//Update Session

if (isset($_POST['register_updatebtn_pru_west']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE pru_west SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: pru_west.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: pru_west.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE pru_west SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_pru_west_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM pru_west WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: pru_west.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: pru_west.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_pru_east'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM pru_east WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: pru_east.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: pru_east.php');
    } 
}





















//SENE EAST CONSTITUENCY 
if (isset($_POST['register_btn_sene_east']))
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
        header('Location: sene_east.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: sene_east.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: sene_east.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_east.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_east WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
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
      header('Location: sene_east.php');
    }
    else
    {









      $query = "INSERT INTO sene_east (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: sene_east.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: sene_east.php');
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







//Update Session

if (isset($_POST['register_updatebtn_sene_east']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE sene_east SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: sene_east.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: sene_east.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE sene_east SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_sene_east_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM sene_east WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: sene_east.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: sene_east.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_sene_east'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM sene_east WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: sene_east.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: sene_east.php');
    } 
}



















//SENE WEST CONSTITUENCY 
if (isset($_POST['register_btn_sene_west']))
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
        header('Location: sene_west.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: sene_west.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: sene_west.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_west.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
    }
    else
    {

      //BONO EAST REGION (SENE EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM sene_west WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
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
      header('Location: sene_west.php');
    }
    else
    {









      $query = "INSERT INTO sene_west (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: sene_west.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: sene_west.php');
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







//Update Session

if (isset($_POST['register_updatebtn_sene_west']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE sene_west SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: sene_west.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: sene_west.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE sene_west SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_sene_west_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM sene_west WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: sene_west.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: sene_west.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_sene_west'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM sene_west WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: sene_west.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: sene_west.php');
    } 
}


















//TECHIMAN NORTH CONSTITUENCY 
if (isset($_POST['register_btn_techiman_north']))
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
        header('Location: techiman_north.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: techiman_north.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: techiman_north.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
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
      header('Location: techiman_north.php');
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
      header('Location: techiman_north.php');
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
      header('Location: techiman_north.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
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
      header('Location: techiman_north.php');
    }
    else
    {

      //BONO EAST REGION (SENE EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
    }
    else
    {

      //BONO EAST REGION (SENE WEST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_north WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene West Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
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
      header('Location: techiman_north.php');
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
      header('Location: techiman_north.php');
    }
    else
    {









      $query = "INSERT INTO techiman_north (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: techiman_north.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: techiman_north.php');
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







//Update Session

if (isset($_POST['register_updatebtn_techiman_north']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE techiman_north SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: techiman_north.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE techiman_north SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_techiman_north_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM techiman_north WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: techiman_north.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: techiman_north.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_techiman_north'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM techiman_north WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: techiman_north.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_north.php');
    } 
}























//TECHIMAN SOUTH CONSTITUENCY 
if (isset($_POST['register_btn_techiman_south']))
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
        header('Location: techiman_south.php');
      }
      else {
  
        if (!preg_match('/^[0-9]*$/',$registered_total)) 
        {
          $_SESSION['status'] = "Registered Total requires only numbers";
          $_SESSION['status_code'] = "error";
          header('Location: techiman_south.php');
        }
        else {
  
          if (!preg_match('/^[0-9]*$/',$percentage_change)) 
          {
            $_SESSION['status'] = "Percentage Change requires only numbers";
            $_SESSION['status_code'] = "error";
            header('Location: techiman_south.php');
          }
          else {




            
    //BONO EAST REGION (ATEBUBU AMANTIN) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM atebubu_amantin WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Atebubu/Amantin Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
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
      header('Location: techiman_south.php');
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
      header('Location: techiman_south.php');
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
      header('Location: techiman_south.php');
    }
    else
    {

      //BONO EAST REGION (NKORANZA SOUTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Nkoranza South Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
    }
    else
    {

      //BONO EAST REGION (PRU EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Pru East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
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
      header('Location: techiman_south.php');
    }
    else
    {

      //BONO EAST REGION (SENE EAST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene East Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
    }
    else
    {

      //BONO EAST REGION (SENE WEST) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Sene West Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
    }
    else
    {

      //BONO EAST REGION (TECHIMAN NORTH) POLLING STATION CODE VERIFICATION
    $psCode_query = "SELECT * FROM techiman_south WHERE polling_station_code='$polling_station_code' ";
    $psCode_query_run = mysqli_query($connection, $psCode_query);
    if (mysqli_num_rows($psCode_query_run) > 0) 
    {
      $_SESSION['status'] = "Polling Station Code Already Exist In Techiman North Constituency";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
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
      header('Location: techiman_south.php');
    }
    else
    {









      $query = "INSERT INTO techiman_south (polling_station_code,polling_station_name,register_2019,registered_total,percentage_change) VALUES ('$polling_station_code', '$polling_station_name', '$register_2019', '$registered_total','$percentage_change')";
      $query_run = mysqli_query($connection,$query);

 
      if ($query_run) 
        {
          $_SESSION['status'] = "Data Added";
          $_SESSION['status_code'] = "success";
          header('Location: techiman_south.php');
        }
        else
          {
            $_SESSION['status'] = "Data not Added";
            $_SESSION['status_code'] = "error";
            header('Location: techiman_south.php');
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







//Update Session

if (isset($_POST['register_updatebtn_techiman_south']))
 {

    $id = $_POST['edit_id'];
    $polling_station_code = $_POST['edit_polling_station_code'];
    $polling_station_name = $_POST['edit_polling_station_name'];
    $register_2019 = $_POST['edit_register_2019'];
    $registered_total = $_POST['edit_registered_total'];
    $percentage_change = $_POST['edit_percentage_change'];
 
    $query = "UPDATE techiman_south SET polling_station_code='$polling_station_code', polling_station_name='$polling_station_name', register_2019='$register_2019', registered_total='$registered_total', percentage_change='$percentage_change' WHERE id='$id' ";
    $query_run = mysqli_query($connection, $query);

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is updated";
      $_SESSION['status_code'] = "success";
      header('Location: techiman_south.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not updated";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
    }

 }


  //DELETING FROM MULTIPLE DATA IN REGISTER PAGE
  if (isset($_POST['search_data'])) 
  {
   $id = $_POST['id'];
   $visible = $_POST['visible'];

   $query = "UPDATE techiman_south SET visible='$visible' WHERE id='$id' ";
   $query_run = mysqli_query($connection, $query);
   
  }


if (isset($_POST['delete_multiple_register_techiman_south_data'])) 
  {
   $id = "1";
   $query = "DELETE FROM techiman_south WHERE visible='$id' ";
   $query_run = mysqli_query($connection, $query);



   if ($query_run) 
   {
    $_SESSION['status'] = "Your data is  Deleted";
    $_SESSION['status_code'] = "success";
    header('Location: techiman_south.php');
   }
   else
   {
    $_SESSION['status'] = "Your data is not Deleted";
    $_SESSION['status_code'] = "error";
    header('Location: techiman_south.php');
   }


}


//REGISTER DELETE CODE

if (isset($_POST['delete_btn_techiman_south'])) 
{
     $id = $_POST['delete_id'];

     $query = "DELETE FROM techiman_south WHERE id='$id' ";
     $query_run = mysqli_query($connection, $query);
     

    if ($query_run) 
    {
      $_SESSION['status'] = "Your data is  Deleted";
      $_SESSION['status_code'] = "success";
         header('Location: techiman_south.php');
    }
    else
    {
      $_SESSION['status'] = "Your data is not Delete";
      $_SESSION['status_code'] = "error";
      header('Location: techiman_south.php');
    } 
}

?>


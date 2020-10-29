




<?php
session_start();


// include('security.php');
$connection = mysqli_connect("localhost","root","","bonoeast_region");




//REGISTRATION CODING FOR GREATER ACCRA REGION

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
    $partyposition = $_POST['partyposition'];
    $govposition = $_POST['govposition'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];



    

    //BONO EAST REGION NPP VOTER'S ID VERIFICATION
    $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NPP Database";
      $_SESSION['status_code'] = "error";
      header('Location: register_member.php');
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
        header('Location: register_member.php');
    }
    else
    {


      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
      $voters_query_run = mysqli_query($connection, $voters_query);
      if (mysqli_num_rows($voters_query_run) > 0) 
      {
        $_SESSION['status'] = "Voter's ID Already Exist In NDC Database";
        $_SESSION['status_code'] = "warning";
        header('Location: register_member.php');
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
            header('Location: register_member.php');
        }
        else
        {
    
    
          $voters_query = "SELECT * FROM other_party WHERE voters='$voters' ";
          $voters_query_run = mysqli_query($connection, $voters_query);
          if (mysqli_num_rows($voters_query_run) > 0) 
          {
            $_SESSION['status'] = "Voter's ID Already Exist In OTHER PARTY Database";
            $_SESSION['status_code'] = "warning";
            header('Location: register_member.php');
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
          header('Location: register_member.php');;

        }
    else
    {


     


      $query = "INSERT INTO npp (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,partyposition,govposition,password,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$partyposition', '$govposition', '$password', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "NPP Member Profile Added";
            header('Location: register_member.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists In NPP Database";
          $_SESSION['status_code'] = "error";
          header('Location: register_member.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "NPP Member Profile Added";
       $_SESSION['status_code'] = "success";
       header('Location: register_member.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: register_member.php');
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











//REGISTRATION CODE FOR BONO EAST REGION NDC MEMBERS


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
    $partyposition = $_POST['partyposition'];
    $govposition = $_POST['govposition'];
    $password = $_POST['password'];
    $cpassword = $_POST['confirmpassword'];
    $usertype = $_POST['usertype'];
    $images = $_FILES["faculty_image"]['name'];



    

    //BONO EAST REGION NPP VOTER'S ID VERIFICATION
    $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In NDC Database";
      $_SESSION['status_code'] = "error";
      header('Location: register_member.php');
    }
    else
    {


      //BONO EAST REGION NDC PHONE NUMBER AND VOTER'S ID VERIFICATION
    $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
    $phone_query_run = mysqli_query($connection, $phone_query);
    if (mysqli_num_rows($phone_query_run) > 0) 
    {
        
        $_SESSION['status'] = "Phone Number Already Exist In NPP Database";
        $_SESSION['status_code'] = "error";
        header('Location: register_member.php');
    }
    else
    {


      $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
      $voters_query_run = mysqli_query($connection, $voters_query);
      if (mysqli_num_rows($voters_query_run) > 0) 
      {
        $_SESSION['status'] = "Voter's ID Already Exist In NPP Database";
        $_SESSION['status_code'] = "warning";
        header('Location: register_member.php');
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
            header('Location: register_member.php');
        }
        else
        {
    
    
          $voters_query = "SELECT * FROM other_party WHERE voters='$voters' ";
          $voters_query_run = mysqli_query($connection, $voters_query);
          if (mysqli_num_rows($voters_query_run) > 0) 
          {
            $_SESSION['status'] = "Voter's ID Already Exist In OTHER PARTY Database";
            $_SESSION['status_code'] = "warning";
            header('Location: register_member.php');
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
          header('Location: register_member.php');;

        }
    else
    {


     


      $query = "INSERT INTO ndc (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,partyposition,govposition,password,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$partyposition', '$govposition', '$password', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "NPP Member Profile Added";
            header('Location: register_member.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists In NDC Database";
          $_SESSION['status_code'] = "error";
          header('Location: register_member.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "NPP Member Profile Added";
       $_SESSION['status_code'] = "success";
       header('Location: register_member.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match";
          $_SESSION['status_code'] = "warning";
          header('Location: register_member.php');
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











//REGISTRATION CODE FOR BONO EAST REGION OTHER PARTY MEMBERS

if (isset($_POST['register_btn_other_party']))
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



    

    //BONO EAST REGION NPP VOTER'S ID VERIFICATION
    $voters_query = "SELECT * FROM other_party WHERE voters='$voters' ";
    $voters_query_run = mysqli_query($connection, $voters_query);
    if (mysqli_num_rows($voters_query_run) > 0) 
    {
      $_SESSION['status'] = "Voter's ID Already Exist In OTHER PARTY Database";
      $_SESSION['status_code'] = "error";
      header('Location: register_member.php');
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
        header('Location: register_member.php');
    }
    else
    {


      $voters_query = "SELECT * FROM ndc WHERE voters='$voters' ";
      $voters_query_run = mysqli_query($connection, $voters_query);
      if (mysqli_num_rows($voters_query_run) > 0) 
      {
        $_SESSION['status'] = "Voter's ID Already Exist In NDC Database";
        $_SESSION['status_code'] = "warning";
        header('Location: register_member.php');
      }
      else
      {



//BONO EAST REGION OTHER PARTY PHONE NUMBER AND VOTER'S ID VERIFICATION
        $phone_query = "SELECT * FROM npp WHERE phone='$phone' ";
        $phone_query_run = mysqli_query($connection, $phone_query);
        if (mysqli_num_rows($phone_query_run) > 0) 
        {
            
            $_SESSION['status'] = "Phone Number Already Exist In NPP Database";
            $_SESSION['status_code'] = "error";
            header('Location: register_member.php');
        }
        else
        {
    
    
          $voters_query = "SELECT * FROM npp WHERE voters='$voters' ";
          $voters_query_run = mysqli_query($connection, $voters_query);
          if (mysqli_num_rows($voters_query_run) > 0) 
          {
            $_SESSION['status'] = "Voter's ID Already Exist In NPP Database";
            $_SESSION['status_code'] = "warning";
            header('Location: register_member.php');
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
          header('Location: register_member.php');;

        }
    else
    {


     


      $query = "INSERT INTO other_party (username,voters,phone,gender,dob,constituencies,placeofbirth,occupation,partyposition,govposition,password,usertype,`images`) VALUES ('$username', '$voters', '$phone', '$gender', '$date', '$constituencies', '$placeofbirth', '$occupation', '$partyposition', '$govposition', '$password', '$usertype','$images')";
      $query_run = mysqli_query($connection,$query);


        if ($query_run) 
        {
            move_uploaded_file($_FILES["faculty_image"]["tmp_name"], "upload/".$_FILES["faculty_image"]["name"]);
            $_SESSION['success'] = "NPP Member Profile Added";
            header('Location: register_member.php');
                       
        }
        else
        {
          $_SESSION['status'] = "Phone Number Already Exists In OTHER PARTY Database";
          $_SESSION['status_code'] = "error";
          header('Location: register_member.php');
        }
    //Image    
    }
    
    if ($query_run) 
    {
       // echo "Saved";
       $_SESSION['status'] = "NPP Member Profile Added";
       $_SESSION['status_code'] = "success";
       header('Location: register_member.php');
    }
    
    //Password    
    }
    
        else
        {
          $_SESSION['status'] = "Password does not match.";
          $_SESSION['status_code'] = "warning";
          header('Location: register_member.php');
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

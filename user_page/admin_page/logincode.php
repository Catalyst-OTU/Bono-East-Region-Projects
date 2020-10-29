<?php
session_start();
$connection = mysqli_connect("localhost","root","","bonoeast_region");


if (isset($_POST['login_btn'])) 
{
    $voters_login = $_POST['voters'];
    $password_login = $_POST['password'];

    //NPP ADMIN LOGIN CODE

    $query = "SELECT * FROM admin_profile WHERE voters='$voters_login' AND password='$password_login' ";
    $query_run = mysqli_query($connection, $query);
    $usertypes = mysqli_fetch_array($query_run);

    if($usertypes['usertype'] == "admin") 
    {
        $_SESSION['username'] = $voters_login;
        header('Location: admin_page.php');
    }

    else if($usertypes['usertype'] == "user")
    {
        $_SESSION['username'] = $voters_login;
        header('Location: index.php');
    }

    else
    {
        $_SESSION['status'] = "Invalid Admin Id and Password!";
        $_SESSION['status_code'] = "warning";
        header('Location: admin_login.php');  
    }
}



?>
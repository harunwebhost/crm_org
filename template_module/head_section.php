<?php 
session_start();
require_once('../functions/db_function.php');
$login_userntype=$_SESSION['login_userntype'];
/*if($login_userntype!="master"){
    $access_ip=get_user_ip_address();
    if($access_ip!="192.168.1.2" || $access_ip!="192.168.1.253"){
        page_redirection("../index.php","Access is Restricted");
    }
}*/
if(!isset($_SESSION['login_username'])){
page_redirection("../index.php","Session Expair Please Login");
}
 ?>

<?php 

   // require_once('../functions/db_function.php');

 ?>

 <?php //check_session(); ?>

<!DOCTYPE html>

<html lang="en">



<head>



    <meta charset="utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <meta name="viewport" content="width=device-width, initial-scale=1">

    <meta name="description" content="">

    <meta name="author" content="">



    <title>CRM</title>



    <!-- Bootstrap Core CSS -->

    <link href="../template_module/css/bootstrap.min.css" rel="stylesheet">

<link href="../template_module/css/bootstrap-datetimepicker.min.css" rel="stylesheet">


    <!-- MetisMenu CSS -->

    <link href="../template_module/css/metisMenu.min.css" rel="stylesheet">

<link href="../template_module/css/metisMenu.min.css" rel="stylesheet">

    <!-- Timeline CSS -->

    <link href="../template_module/css/timeline.css" rel="stylesheet">

 <link href="../template_module/css/mystyle.css" rel="stylesheet">

    <!-- Custom CSS -->

    <link href="../template_module/css/sb-admin-2.css" rel="stylesheet">



    <!-- Morris Charts CSS -->

    <link href="../template_module/css/morris.css" rel="stylesheet">



    <!-- Custom Fonts -->

    <link href="../template_module/css/font-awesome.min.css" rel="stylesheet" type="text/css">



    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->

    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->

    <!--[if lt IE 9]>

        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>

        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->



</head>


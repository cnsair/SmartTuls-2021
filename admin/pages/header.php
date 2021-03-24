<?php 
    include("../../appfunctions/appfunctions.php");

    include("access_checker.php");

    $forgo = new Crud($connect);
    $user_id = $_SESSION["duid"];

    $identifier = (isset($user_id)) ? "2" : "1";
    $userid = (isset($user_id)) ? $user_id : "NULL";
    $fname = $forgo -> AnyContent("FName", "users", "ID", $user_id);
    $sname = $forgo -> AnyContent("SName", "users", "ID", $user_id);
    $fullname = (isset($user_id)) ? $fname." ".$sname : "NULL";

    //$forgo -> LogAll($identifier, $userid, $fullname);
    $forgo -> LogAllCalculate($identifier, $userid, $fullname);
    $forgo -> LogAudit($identifier, $userid, $fullname);
?>

<!doctype html>
<html lang="en">

<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<meta name="HandheldFriendly" content="true">
    <title>
        <?php if( $_SESSION["accesslevel"] == "1") { echo "Admin - " . ucwords($fname); } 
            elseif($_SESSION["accesslevel"] == "2") { echo "SubAdmin - " . ucwords($fname); }
            elseif($_SESSION["accesslevel"] == "3") { echo ucwords($fname); }
            else{ echo ""; } 
        ?>
    </title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no"/>
	<meta name="author" content="Nwachukwu Chisom Samson- CNS, Joshua Sy-Apoe, CNScomputers, SmartTuls Limited">
	<meta name="smarttuls" content="schools registration and communication">
	<meta name="attribute" content="Goal getter,Best Education Platform">
	<meta name="description" content="Connecting Schools and organisations for a better society. An online Educational web-application and system that manages every type and kind of school be it Secular, Professional, Religious etc. Smarttuls also enables Agencies and Associations to manage and control entities under them.">
	<meta name="keywords" content="education,schools,dashboard,web-application,online lecture,school directory,Learn and Connect,News Feeds,Professionals,Mentors and Advisors">
    <!-- Dashboard icon -->
    <link rel="icon" href="../../assets/icons/smart-logo4.png">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <!-- Bootstrap -->
    <link href="../assets/plugins/bootstrap-4.0.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- DataTables -->
    <!-- <link rel="stylesheet" href="../assets/plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
    <link rel="stylesheet" href="../assets/plugins/datatables-buttons/css/buttons.bootstrap4.min.css"> -->
    <!-- Tempusdominus Bootstrap 4 -->
    <!-- <link rel="stylesheet" href="../assets/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"> -->
    <!-- Select2 -->
    <!-- <link rel="stylesheet" href="../assets/plugins/select2/css/select2.min.css">
    <link rel="stylesheet" href="../assets/plugins/select2-bootstrap4-theme/select2-bootstrap4.min.css"> -->
    <!-- Bootstrap4 Duallistbox -->
    <!-- <link rel="stylesheet" href="../assets/plugins/bootstrap4-duallistbox/bootstrap-duallistbox.min.css"> -->
    <!-- iCheck -->
    <!-- <link rel="stylesheet" href="../assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css"> -->

    <!-- App main CSS -->
    <link href="../assets/css/main.07a59de7b920cd76b874.css" rel="stylesheet">

    <!-- useful FontsTypes -->
	<!-- <link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.css"> -->
	<link rel="stylesheet" type="text/css" href="../assets/pe-icon-7-stroke/css/pe-icon-7-stroke.css">
	<link rel="stylesheet" type="text/css" href="../assets/pe-icon-7-stroke/css/helper.css">
    <!-- <link rel="stylesheet" type="text/css" href="assets/typicons/typicons.min.css"> -->
    
    <!-- Ekko Lightbox -->
    <link rel="stylesheet" href="../assets/plugins/ekko-lightbox/ekko-lightbox.css">
    <!-- Summernote -->
    <link rel="stylesheet" href="../assets/plugins/summernote/summernote-lite.css">
    
    <!-- Custom Settings -->
    <link href="../assets/css/custom.css" rel="stylesheet">
    
    <!-- JQuery -->
    <script src="../assets/plugins/jquery/jquery.min.js"></script>
    
    <!-- Fancybox -->
    <!-- <link rel="stylesheet" href="../assets/fancybox/jquery.fancybox2e46.css"> -->
</head>
<?php 

require_once("../../appfunctions/appfunctions.php");


if (!isset($_GET["galid"])) {
	header("Location: dashboard?main&tuls=home");
}
else
{
    $galid = $_GET["galid"];

    $sql = "DELETE FROM gallery WHERE ID = '".$_GET["galid"]."' "; 
    $query = $connect->prepare($sql); 
    $query->execute();

    header("Location: dashboard?dil=gallery");  
}



?>
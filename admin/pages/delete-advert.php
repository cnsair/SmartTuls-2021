<?php 

require_once("../../appfunctions/appfunctions.php");


if (!isset($_GET["del"])) {
	header("Location: dashboard?main&tuls=home");
}
else
{
	$sql = "DELETE FROM advert WHERE ID = '".$_GET["del"]."' ";
    $gg = $connect->prepare($sql);
    $gg->execute();
	header("Location: dashboard?main&tuls=advert");
}



?>
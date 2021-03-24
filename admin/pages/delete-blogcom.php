<?php 

require_once("../../appfunctions/appfunctions.php");


if (!isset($_GET["del"])) {
	header("Location: dashboard?main&tuls=blog");
}
else
{
	$ret = $_GET["returnto"];
	
	$sql = "DELETE FROM blog_com WHERE ComID = '".$_GET["del"]."' ";
    $gg = $connect->prepare($sql);
	$gg->execute();
	
	header("Location: dashboard?dil=blog");

	//var_dump($ret);
}



?>
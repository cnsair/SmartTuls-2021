<?php 

require_once("../../appfunctions/appfunctions.php");


if (!isset($_GET["del"])) {
	header("Location: dashboard?main&tuls=home");
}
else
{
	$sql = "DELETE FROM story_album WHERE ID = '".$_GET["del"]."' ";
    $gg = $connect->prepare($sql);
    $gg->execute();
	header("Location: dashboard?main&tuls=bc-inner");
}



?>
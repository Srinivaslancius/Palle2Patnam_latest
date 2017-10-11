<?php 
include "../manage_webmaster/admin_includes/config.php";
include "../manage_webmaster/admin_includes/common_functions.php";
//Set Array for list
$lists = array();
$response = array();
if($_SERVER['REQUEST_METHOD']=='POST'){

	$result = getAllDataCheckActiveRecords('seasonal_banners','0');
	if ($result->num_rows > 0) {
			$response["lists"] = array();
			while($row = $result->fetch_assoc()) {
				//Chedck the condioton for emptty or not		
				$lists = array();
		    	$lists["id"] = $row["id"];
		    	$lists["title"] = $row["title"];		    	
		    	$lists["image"] = $base_url."uploads/seasonal_banner_images/".$row["banner"];
				array_push($response["lists"], $lists);		 
			}
			$response["success"] = 0;
			$response["message"] = "Success";				
	} else {
	    $response["success"] = 1;
	    $response["message"] = "No Records found";	   
	}
} else {
	$response["success"] = 3;
	$response["message"] = "Invalid request";
}
echo json_encode($response);

?>
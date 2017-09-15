<?php 
include "../manage_webmaster/admin_includes/config.php";
include "../manage_webmaster/admin_includes/common_functions.php";

if($_SERVER['REQUEST_METHOD']=='POST'){
	//Save Ratings in database
	if (isset($_REQUEST['user_id']) && !empty($_REQUEST['user_id']) ) {

		$user_id = $_REQUEST["user_id"];	    
	    //Get user password
	    $row = getIndividualDetails($_REQUEST['user_id'],'users','id');
	    $response["password"] = decryptPassword($row['user_password']); 
		$response["success"] = 0;            
	    $response["message"] = "Success";  

	} else {
		//If post params empty return below error
		$response["success"] = 3;
	    $response["message"] = "Required field(s) is missing";	    
	}
	
} else {
	$response["success"] = 4;
	$response["message"] = "Invalid request";
}
echo json_encode($response);

?>
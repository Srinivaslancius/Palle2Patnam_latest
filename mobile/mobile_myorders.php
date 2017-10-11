<?php 
include "../manage_webmaster/admin_includes/config.php";
include "../manage_webmaster/admin_includes/common_functions.php";

if($_SERVER['REQUEST_METHOD']=='POST'){

	if (isset($_REQUEST['user_id']) && !empty($_REQUEST['user_id']) ) {
		//Success
		$user_id = $_REQUEST['user_id'];
		$getOrders = "SELECT * FROM orders WHERE user_id = '$user_id' GROUP BY order_id ORDER BY id DESC";
		$result = $conn->query($getOrders);

		if ($result->num_rows > 0) {

			$response["lists"] = array();
			while($row = $result->fetch_assoc()) {
				$lists = array();
				$lists["id"] = $row["id"];
				$lists["order_id"] = $row["order_id"];
				$lists["order_total"] = $row["order_total"];
				//Get status
				$status = getIndividualDetails($row["order_status"],'order_status','id');
				$lists["status"] = $status['status'];
				$lists["order_date"] = date("D F, Y", strtotime($row["order_date"]));	
				$table = 'orders';//table name
				$clause = 'order_id'; //clause name
				$param = $row["order_id"]; //Order id			
				$lists["items_count"] = getRowsCountWithClause($table,$clause,$param);
				array_push($response["lists"], $lists);	
			}
			$response["success"] = 0;
			$response["message"] = "Success";

		} else {
		    $response["success"] = 1;
		    $response["message"] = "No Orders Placed";	

		}
		

	} else {
		//If post params empty return below error
		$response["success"] = 3;
	    $response["message"] = "Required field(s) is missing";	    
	}			
	
} else {
	$response["success"] = 3;
	$response["message"] = "Invalid request";
}
echo json_encode($response);

?>
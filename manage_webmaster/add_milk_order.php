<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
if (!isset($_POST['submit']))  {
    echo "fail";
} else {
    //Save data into database
    $user_id = $_POST['user_id'];
    $product_id = $_POST['product_id'];
    $total_ltr = $_POST['total_ltr'];
    $price_per_ltr = $_POST['price_ltr'];
    $total_ltr_price = $_POST['total_ltr_price'];
    $start_date = $_POST['start_date'];
    $end_date = $_POST['end_date'];
    $created_at = date("Y-m-d h:i:s");
  	$sql = "INSERT INTO milk_orders (`user_id`, `product_id`, `total_ltr`,`price_ltr`,`total_ltr_price`, `start_date`, `end_date`, `created_at`) VALUES ('$user_id','$product_id', '$total_ltr','$price_per_ltr','$total_ltr_price', STR_TO_DATE('$start_date', '%m/%d/%Y'), STR_TO_DATE('$end_date', '%m/%d/%Y'), '$created_at')";
    if($conn->query($sql) === TRUE){
    if($conn->query($sql) === TRUE) {
    	echo "<script type='text/javascript'>window.location='milk_vendors.php?msg=success'</script>";
    }else {
    	echo "<script type='text/javascript'>window.location='milk_vendors.php?msg=fail'</script>";
    }
     
}
?>

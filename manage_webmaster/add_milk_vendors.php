<?php include_once 'admin_includes/main_header.php'; ?>
<?php  
if (!isset($_POST['submit']))  {
    echo "fail";
} else {
    //Save data into database
    $vendor_id = $_POST['vendor_id'];
    $milk_in_ltrs  = $_POST['milk_in_ltrs'];
    $created_date = date("Y-m-d");
  	$sql = "INSERT INTO vendor_milk_assign (`vendor_id`,`milk_in_ltrs`,`created_date`) VALUES ('$vendor_id','$milk_in_ltrs', '$created_date')";
    if($conn->query($sql) === TRUE) {
    	echo "<script type='text/javascript'>window.location='milk_vendors.php?msg=success'</script>";
    }else {
    	echo "<script type='text/javascript'>window.location='milk_vendors.php?msg=fail'</script>";
    }
     
}
?>
      <div class="site-content">
        <div class="panel panel-default">
          <div class="panel-heading">
            <h3 class="m-y-0">Milk Vendors</h3>
          </div>
          <div class="panel-body">
            <div class="row">
              <div class="col-sm-8 col-sm-offset-2 col-md-6 col-md-offset-3">
                <form data-toggle="validator" method="post" enctype="multipart/form-data">

                  <?php $getVendors = getAllDataCheckActiveRecords('vendors',0);?>
                  <div class="form-group">
                    <label for="form-control-3" class="control-label">Choose Vendor</label>
                    <select id="form-control-3" name="vendor_id" class="custom-select" data-error="This field is required." required>
                      <option value="">Select vendor</option>
                      <?php while($row = $getVendors->fetch_assoc()) {  ?>
                        <option value="<?php echo $row['id']; ?>"><?php echo $row['vendor_name']; ?></option>
                      <?php } ?>
                   </select>
                    <div class="help-block with-errors"></div>
                  </div>

                  <div class="form-group">
                    <label for="form-control-2" class="control-label">Milk in Ltrs</label>
                    <input type="text" class="form-control" id="milk_in_ltrs" name="milk_in_ltrs" placeholder="Milk in ltrs" data-error="Please enter Milk in Ltrs." required>
                    <div class="help-block with-errors"></div>
                  </div>

                  

                  <button type="submit" name="submit" value="Submit"  class="btn btn-primary btn-block">Submit</button>
                </form>
              </div>
            </div>
            <hr>
          </div>
        </div>
      </div>
      <?php include_once 'admin_includes/footer.php'; ?>
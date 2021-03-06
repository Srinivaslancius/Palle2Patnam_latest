<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getExtraMilkOrdersData = getAllDataWithActiveRecent('extra_milk_orders'); $i=1; ?>
     <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_extra_milk_order.php" style="float:right">Add Extra Milk Order</a>
            <h3 class="m-t-0 m-b-5">Milk Orders</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>User Name</th>
                    <th>Total Ltrs</th>
                    <th>Extra Ltrs</th>
                    <th>Date</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getExtraMilkOrdersData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php $getUserName =  getDataFromTables('users',$status=NULL,'id',$row['user_id'],$activeStatus=NULL,$activeTop=NULL); $getUserName1 = $getUserName->fetch_assoc(); echo $getUserName1['user_name']?></td>
                    <td><?php echo $row['total_ltr'];?></td>
                    <td><?php echo $row['extra_ltr'];?></td>
                    <td><?php echo $row['order_date'];?></td>
                  </tr>
                  <?php  $i++; } ?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
   <?php include_once 'admin_includes/footer.php'; ?>
   <script src="js/tables-datatables.min.js"></script>
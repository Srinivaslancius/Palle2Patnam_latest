<?php include_once 'admin_includes/main_header.php'; ?>
<?php $getMaintanceData = getAllDataWithActiveRecent('maintance_category'); $i=1; ?>
     
      <div class="site-content">
        <div class="panel panel-default panel-table">
          <div class="panel-heading">
            <a href="add_truck_maintenance.php" style="float:right">Add Maintenance Category</a>
            <h3 class="m-t-0 m-b-5">Maintenance Category</h3>
          </div>
          <div class="panel-body">
            <div class="table-responsive">
              <table class="table table-striped table-bordered dataTable" id="table-1">
                <thead>
                  <tr>
                    <th>S.No</th>
                    <th>Title</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <?php while ($row = $getMaintanceData->fetch_assoc()) { ?>
                  <tr>
                    <td><?php echo $i;?></td>
                    <td><?php echo $row['title'];?></td>
                    <td><?php if ($row['status']==0) { echo "<span class='label label-outline-success check_active open_cursor' data-incId=".$row['id']." data-status=".$row['status']." data-tbname='maintance_category'>Active</span>" ;} else { echo "<span class='label label-outline-info check_active open_cursor' data-status=".$row['status']." data-incId=".$row['id']." data-tbname='maintance_category'>In Active</span>" ;} ?></td>
                    <td> <a href="edit_truck_maintenance.php?id=<?php echo $row['id']; ?>"><i class="zmdi zmdi-edit"></i></a> &nbsp; <a href="#"><i class="zmdi zmdi-eye zmdi-hc-fw" data-toggle="modal" data-target="#<?php echo $row['id']; ?>" class=""></i></a>&nbsp; <a href="delete_truck_maintenance.php?uid=<?php echo $row['id']; ?>"><i class="zmdi zmdi-delete zmdi-hc-fw" onclick="return confirm('Are you sure you want to delete?')"></i></a></td>
                    <!-- Open Modal Box  here -->
                    <div id="<?php echo $row['id']; ?>" class="modal fade" tabindex="-1" role="dialog">
                      <div class="modal-dialog">
                        <div class="modal-content animated flipInX">
                          <div class="modal-header bg-success">
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                              <span aria-hidden="true">
                                <i class="zmdi zmdi-close"></i>
                              </span>
                            </button>
                            <center><h4 class="modal-title">Truck Maintenance Information</h4></center>
                          </div>
                        <div class="modal-body" id="modal_body">
                          <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">Name: </div>
                            <div class="col-sm-6"><?php echo $row['title'];?></div>
                          </div>
                          <div class="row">
                            <div class="col-sm-2"></div>
                            <div class="col-sm-4">Status: </div>
                            <div class="col-sm-6"><?php if($row['status'] == 0 ){ echo "Active";} else{ echo "InActive";}?></div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <!--<button type="button" data-dismiss="modal" class="btn btn-success">Continue</button>-->
                          <button type="button" data-dismiss="modal" class="btn btn-success">Close</button>
                          <style>
                            #modal_body{
                              font-size:14px;
                              padding-top:30px;
                              padding-left: 0px;
                              font-family:Roboto,sans-serif;
                            }
                          </style>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- End Modal Box  here -->
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
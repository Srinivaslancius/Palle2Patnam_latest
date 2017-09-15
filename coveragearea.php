    <?php include_once 'header.php'; ?>
        <!--header area end-->

        <!--welcome area Start-->
        <div class="welcome_area">
            <div class="welcome_slider">
                <div class="single_welcome_slider" style="background-image:url(img/welcome_bg.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="welcome_content">
                                    <h1 style="margin-bottom:30px">Neatly. Delightedly. Quietly.</h1>
									<span style="line-height:40px">Get Your Fresh Grocery Delivered to You whenever you want it.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_welcome_slider" style="background-image:url(img/welcome_bg2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="welcome_content">
									<h1 style="margin-bottom:30px">Neatly. Delightedly. Quietly.</h1>
									<span style="line-height:40px">Get Your Fresh Grocery Delivered to You whenever you want it.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="single_welcome_slider" style="background-image:url(img/welcome_bg3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="welcome_content">
                                    <h1 style="margin-bottom:30px">Neatly. Delightedly. Quietly.</h1>
									<span style="line-height:40px">Get Your Fresh Grocery Delivered to You whenever you want it.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--welcome area end-->
    </div>
    <!--Hero area end-->

    <!--Combo_offer area start-->
    <div class="covered_neighbourhood">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="section_tittle">
                        <div class="section_tittle_content">
                            <h1>Covered Neighbourhood</h1>
							<hr class="green-line">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
			    <div class="col-sm-2">
				</div>

                <?php $getCoverageAreas = getDataFromTables('coverage_areas','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>   
                 <div class="col-sm-2">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <?php while ( $getCoverageAreas1 = $getCoverageAreas->fetch_assoc()) { ?>
                            <center><h4 style="margin-bottom:12px"><?php echo $getCoverageAreas1['location_name'];?></h4>
                        <?php } ?>
                    </div>
                </div>
				<?php $getCoverageAreas = getDataFromTables('coverage_areas','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>	
                 <div class="col-sm-2">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <?php while ( $getCoverageAreas1 = $getCoverageAreas->fetch_assoc()) { ?>
                            <center><h4 style="margin-bottom:12px"><?php echo $getCoverageAreas1['location_name'];?></h4>
                        <?php } ?>
					</div>
				</div>
						
                <?php $getCoverageAreas = getDataFromTables('coverage_areas','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>   
                 <div class="col-sm-2">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <?php while ( $getCoverageAreas1 = $getCoverageAreas->fetch_assoc()) { ?>
                            <center><h4 style="margin-bottom:12px"><?php echo $getCoverageAreas1['location_name'];?></h4>
                        <?php } ?>
                    </div>
                </div>
				<?php $getCoverageAreas = getDataFromTables('coverage_areas','0',$clause=NULL,$id=NULL,$activeStatus=NULL,$activeTop=NULL);?>   
                 <div class="col-sm-2">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <?php while ( $getCoverageAreas1 = $getCoverageAreas->fetch_assoc()) { ?>
                            <center><h4 style="margin-bottom:12px"><?php echo $getCoverageAreas1['location_name'];?></h4>
                        <?php } ?>
                    </div>
                </div>
				<div class="col-sm-2">
				</div>
            </div>
        </div>
    </div>
    <!--set_menu area start-->
      <?php include_once 'downloadapp.php'; ?>
        <?php include_once 'footer.php'; ?>

   
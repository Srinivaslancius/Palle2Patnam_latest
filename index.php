    <?php include_once 'header.php'; ?>
    <?php include_once 'slider.php';?>
    <?php 
        $sql="SELECT * from `content_pages` WHERE status = 0  ORDER BY id DESC LIMIT 1,3 ";
        $result = $conn->query($sql);
    ?>
    <?php $getAboutData = getDataFromTables("content_pages",$status=NULL,"id",'6',$activeStatus=NULL,$activeTop=NULL); $getAbout = $getAboutData->fetch_assoc();?>   
    <!--Combo_offer area start-->
    <div class="features">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12">
                    <div class="section_tittle">
                        <div class="section_tittle_content">
                            <h1>Features</h1>
							<hr class="green-line">
                            <span>For a special and interesting shopping pleasure. we have provided the easiest way to buy online for you</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
			        <?php while($getRow = $result->fetch_assoc()) { ?> 
                        <div class="col-sm-4">
                            <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                                <center><img src="<?php echo $base_url . 'uploads/content_images/'.$getRow['image'] ?>" alt="image"></center>
                                <center><h4 style="margin-bottom:10px"><?php echo $getRow['title']?></h4></center>
                                <span style="text-align:justify"><?php echo $getRow['description']?></span>
                            </div>
                        </div>
						<?php } ?>
            </div>
            </div>
        </div>
    <!--Combo_offer area end-->

    <!--our_menu area start-->
    <div class="location_area parallax">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="section_tittle">
                        <div class="section_tittle_content">
                            <h1><?php echo $getAbout['title']; ?></h1>
                            <span><?php echo $getAbout['description']; ?></span>
                        </div><br>
							<a href="coveragearea.php"><button type="button" class="btn btn-success btn-lg">Supported Locations</button></a>
                    </div>
                </div>
				<div class="col-md-6">
					<div class="single_feature wow fadeInUp" data-wow-delay=".2s">
						<img src="<?php echo $base_url . 'uploads/content_images/'.$getAbout['image'] ?>" alt="" width="500" height="350">
					</div>
				</div>
			</div>
		</div>
	</div>
    <!--our_menu area end-->

    <!--special_food area start-->
    <div class="application_screens">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_tittle">
                        <div class="section_tittle_content">
                            <center><h1 style="margin-bottom:18px">Application Screens</h1><center>
							<hr class="green-line">
                        </div>
                    </div>
                </div>
            </div>            
			<?php include_once 'demo.php'; ?>
        </div>
    </div>
    <!--set_menu area start-->
     <?php include_once 'downloadapp.php'; ?>
    <!--footer area start-->
<?php include_once 'footer.php'; ?>
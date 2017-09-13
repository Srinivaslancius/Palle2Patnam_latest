    <?php include_once 'header.php'; ?>
    <?php 
        $getContentData = getDataFromTables('content_pages',$status=NULL,'id','11',$activeStatus=NULL,$activeTop=NULL);
        $getContentData1 = $getContentData->fetch_assoc();
    ?>
    <?php 
        $getContentData2 = getDataFromTables('content_pages',$status=NULL,'id','10',$activeStatus=NULL,$activeTop=NULL);
        $getContentData3 = $getContentData2->fetch_assoc();
    ?>
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
        </div>
    <!--Hero area end-->

    <!--Combo_offer area start-->
    <div class="about_us">
        <div class="container" style="padding-top:70px;padding-left:60px; padding-right:60px">
            <div class="row">
                <div class="col-md-6">
                    <div class="section_tittle">
					   <center><h1 style="margin-bottom:20px"><?php echo $getContentData1['title']; ?></h1></center>
                        <div class="section_tittle_content">
                           <span style="text-aline:justify; line-height:21px"><?php echo $getContentData1['description']; ?></span>
                        </div>
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <center><img src="img/green-idea.png" alt="ptop" class="img-responsive"></center>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top:20px">
                <div class="col-md-6">
				<div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <center><img src="img/service1.png" alt="ptop" class="img-responsive"></center>
                    </div>
                </div>
				 <div class="col-md-6">
                    <div class="section_tittle">
					   <center><h1 style="margin-bottom:20px"><?php echo $getContentData3['title']; ?></h1></center>
                        <div class="section_tittle_content">
                            <span style="text-aline:justify; line-height:21px"><?php echo $getContentData3['description']; ?></span>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
    <!--set_menu area start-->
     <?php include_once 'downloadapp.php'; ?>
    <!--footer area start-->
    <?php include_once 'footer.php'; ?>


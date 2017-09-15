    <?php include_once 'header.php'; ?>
        <div class="welcome_area">
            <div class="welcome_slider">
                <div class="single_welcome_slider" style="background-image:url(img/welcome_bg.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="welcome_content">
                                    <h1>Neatly. Delightedly. Quietly.</h1>
									<span>Get Your Fresh Grocery Delivered to You whenever you want it.</span>
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
									<h1>Neatly. Delightedly. Quietly.</h1>
									<span>Get Your Fresh Grocery Delivered to You whenever you want it.</span>
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
                                    <h1>Neatly. Delightedly. Quietly.</h1>
									<span>Get Your Fresh Grocery Delivered to You whenever you want it.</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--Hero area end-->

    <!--Combo_offer area start-->
    <?php $getAboutData = getDataFromTables("content_pages",$status=NULL,"id",'1',$activeStatus=NULL,$activeTop=NULL); $getAbout = $getAboutData->fetch_assoc();?>
    <div class="about_us">
        <div class="container" style="padding-top:70px;padding-left:60px; padding-right:60px">
            <div class="row">
                <div class="col-md-6">
                    <div class="section_tittle">
                       <center><h1 style="margin-bottom:20px"><?php echo $getAbout['title']; ?></h1></center>
                        <div class="section_tittle_content">
                           <span style="text-align:justify; line-height:21px"><?php echo $getAbout['description']; ?></span>
                        </div>
                    </div>
                </div>
                 <div class="col-md-6">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <center><img src="<?php echo $base_url . 'uploads/content_images/'.$getAbout['image'] ?>" alt="ptop" class="img-responsive"></center>
                    </div>
                </div>
            </div>
            <?php $getAboutData = getDataFromTables("content_pages",$status=NULL,"id",'2',$activeStatus=NULL,$activeTop=NULL); $getAbout = $getAboutData->fetch_assoc();?>
            <div class="row">
                <div class="col-md-6">
                    <div class="single_feature wow fadeInUp" data-wow-delay="0s">
                        <center><img src="<?php echo $base_url . 'uploads/content_images/'.$getAbout['image'] ?>" alt="ptop" class="img-responsive"></center>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="section_tittle">
                       <center><h1 style="margin-bottom:20px"><?php echo $getAbout['title']; ?></h1></center>
                        <div class="section_tittle_content">
                           <span style="text-align:justify; line-height:21px"><?php echo $getAbout['description']; ?></span>
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


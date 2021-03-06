<?php 
ob_start();
include_once('manage_webmaster/admin_includes/config.php');
include_once('manage_webmaster/admin_includes/common_functions.php');
$getSiteSettingsData = getDataFromTables('site_settings',$status=NULL,'id','1',$activeStatus=NULL,$activeTop=NULL);
$getSiteSettingsData1 = $getSiteSettingsData->fetch_assoc();
?>
<?php 
    $currentFile = $_SERVER["PHP_SELF"];
    $parts = Explode('/', $currentFile);
    $page_name = $parts[count($parts) - 1];
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
     <title><?php echo $getSiteSettingsData1['admin_title']; ?></title>

    <!-- === webfont=== -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Great+Vibes" rel="stylesheet">
    <!-- === favicon=== -->
    <link href="img/fevicon.png" rel="shortcut icon">
    <!-- === Bootstrap=== -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <!-- === owl carousel === -->
    <link rel="stylesheet" href="css/owl.carousel.css">
    <!-- === animate === -->
    <link rel="stylesheet" href="css/animate.min.css">
    <!-- === font awesome === -->
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- === slick nav === -->
    <link rel="stylesheet" href="css/slicknav.min.css">
    <!-- === Main css === -->
    <link rel="stylesheet" href="css/custom/style.css">
	<!-- === Social icons === -->
	 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
	<link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
	<link rel="stylesheet" type="text/css" href="gallery/css/reset.css">
	<link rel="stylesheet" type="text/css" href="gallery/css/jquery-responsiveGallery.css">
	<style type="text/css">
		.w-gallery{
			margin-top: 0px;
			margin-bottom:100px;
		}
	</style>
</head>

<body>
    <!--preloader area Start-->
    
    <!--preloader area end-->
    <!--Hero area Start-->
 <div class="hero_area">
        <header>
            <div class="header_bottom">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-5">
                            <nav class="menu_bar">
                                <ul class="main_menu hidden-xs">
                                    <li <?php if($page_name == 'index.php') {  ?> class="active" <?php } ?>> <a href="index.php">Home</a></li>
                                    <li <?php if($page_name == 'coveragearea.php') {  ?> class="active" <?php } ?>> <a href="coveragearea.php">Coverage Area</a></li>
                                    <li <?php if($page_name == 'about.php') {  ?> class="active" <?php } ?>> <a href="about.php">About Us</a></li>
                                    <li <?php if($page_name == 'contactus.php') {  ?> class="active" <?php } ?>> <a href="contactus.php">Contact Us</a></li>
                                </ul>
							</nav>
						</div>
						<div class="col-sm-5">
                            <a href="index.php" class="log"><img src="uploads/logo/<?php echo $getSiteSettingsData1['logo']; ?>" alt="logo" class="img-responsive"></a>
                        </div>
						 <div class="col-sm-2"><br>
							<a href="https://play.google.com/store/apps/details?id=com.lancius.palle2patnam&hl=en"><img src="img/GP.png" 
								alt="image"></a>
                        </div>
                    </div>
                </div>
            </div>
        </header>
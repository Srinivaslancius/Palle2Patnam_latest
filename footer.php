 <footer>
        <div class="footer_top_area">
            <div class="container">
                <div class="row wow fadeInUp">
                    <div class="col-sm-8">
                        <div class="footer_content">
                            <p><?php echo $getSiteSettingsData1['footer_text'];?></p>
							<p><a href="#">Privacy-Terms</a></p>
                        </div>
                    </div>
					<div class="col-sm-4 margin_left">
                        <div class="footer_content">
							<p>Connect with us:<a href="<?php echo $getSiteSettingsData1['fb_link'];?>" style="margin-left:10px"class="faa fa fa-facebook"></a>
							<a href="<?php echo $getSiteSettingsData1['twitter_link'];?>" class="faa fa fa-twitter"></a>
							<a href="<?php echo $getSiteSettingsData1['gplus_link'];?>" class="faa fa fa-google"></a></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</footer>
    
	<!-- === jqyery === -->
    <script src="js/jquery-2.1.4.min.js"></script>
    <!-- === bootsrap-min === -->
    <script src="js/bootstrap.min.js"></script>
    <!-- === owl carousel-min === -->
    <script src="js/owl.carousel.min.js"></script>
    <!-- === slick nav min === -->
    <script src="js/jquery.slicknav.min.js"></script>
    <!-- === wow min === -->
    <script src="js/wow.min.js"></script>
    <!-- === isotope min === -->
    <script src="js/isotope.pkgd.min.js"></script>
    <!-- === active js === -->
    <script src="js/active.js"></script>
	<script type="text/javascript" src="gallery/lib/modernizr.custom.js"></script>
	<script type="text/javascript" src="gallery/src/jquery.responsiveGallery.js"></script>
	
	<script>
		$(function () {
			$('.responsiveGallery-wrapper').responsiveGallery({				
				animatDuration: 400,
				$btn_prev: $('.responsiveGallery-btn_prev'),
				$btn_next: $('.responsiveGallery-btn_next')
			});
		});		
	</script>
</body>

</html>
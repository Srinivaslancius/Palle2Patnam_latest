    <?php include_once 'header.php'; ?>
    <?php 
        error_reporting(1);   
        $statusMsg = '';
        $msgClass = '';
        if(isset($_POST['submit'])){
            // Get the submitted form data
            $name = $_POST['name'];
            $email = $_POST['email'];
            $mobile = $_POST['mobile'];
            $message = $_POST['message'];
            
            // Check whether submitted data is not empty
            if(!empty($email) && !empty($name) && !empty($mobile) && !empty($message)){
                
                if(filter_var($email, FILTER_VALIDATE_EMAIL) === false){
                    $statusMsg = 'Please enter your valid email.';
                    $msgClass = 'errordiv';
                }else{
                    // Recipient email
                    $toEmail = 'haritha@lanciussolution.com';
                    $emailSubject = 'Contact Request Submitted by '.$name;
                    $htmlContent = '<h2>Contact Request Submitted</h2>
                        <h4>Name</h4><p>'.$name.'</p>
                        <h4>Email</h4><p>'.$email.'</p>
                        <h4>Subject</h4><p>'.$mobile.'</p>
                        <h4>Message</h4><p>'.$message.'</p>';
                    
                    // Set content-type header for sending HTML email
                    $headers = "MIME-Version: 1.0" . "\r\n";
                    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
                    
                    // Additional headers
                    $headers .= 'From: '.$name.'<'.$email.'>'. "\r\n";

                    
                    // Send email
                    if(mail($toEmail,$emailSubject,$htmlContent)){
                    echo "srinu"; die;
                        $statusMsg = 'Your contact request has been submitted successfully !';
                        $msgClass = 'succdiv';
                    }else{
                   
                        $statusMsg = 'Your contact request submission failed, please try again.';
                        $msgClass = 'errordiv';
                    }
                }
            }else{
                $statusMsg = 'Please fill all the fields.';
                $msgClass = 'errordiv';
            }
        }

    ?>
    <?php include_once 'slider.php';?>
    <!--booking area start-->
    <div class="booking_area parallax"style="margin-top:2px;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section_tittle">
                        <div class="section_tittle_content">
                            <center><h1>CONTACT US</h1></center>
                            <hr class="green-line">
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                 <div class="col-md-4" style="margin-top:50px">
                    <h3 style="margin-bottom:16px;">Contact us and we'll get back to you within 24 hours.</h3>
                    <h3 style="margin-bottom:16px; text-indent:10px; line-height:20px"><?php echo $getSiteSettingsData1['address'];?></h3>
                    <h3 style="margin-bottom:16px; text-indent:10px;">call us@: <?php echo $getSiteSettingsData1['mobile']; ?></h3>
                    <h3 style="margin-bottom:16px; text-indent:10px;">Mail us@: <?php echo $getSiteSettingsData1['email']; ?></h3> 
                 </div>
                    <div class="col-md-8">
                        <form action="#" class="booking_form wow fadeIn" method="post" autocomplete="off">
                            <div class="row">
                                <div class="col-sm-4">
                                    <input type="text" name="name" placeholder="Name" class="form-control"style="background-color:transparent; color:white; border:1px solid gray" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="email" name="email" placeholder="Email" class="form-control"style="background-color:transparent; color:white; border:1px solid gray" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" required>
                                </div>
                                <div class="col-sm-4">
                                    <input type="text" name="mobile" placeholder="Phone" class="form-control"style="background-color:transparent; color:white; border:1px solid gray" required>
                                </div>
                                <div class="col-sm-12">
                                    <textarea name="message" placeholder="Message.." class="form-control"  style="background-color:transparent; color:white; border:1px solid gray" required></textarea>
                                </div>
                                <div class="col-sm-4">
                                    <input type="submit" class="custom_btn" value="Submit" name="submit">
 -->                                    <!-- <a href="#" class="custom_btn">SUBMIT</a> -->
                                </div>
                            </div>
                        </form>
                    </div>
            </div>
        </div>
    </div>
    <!--booking area end-->

    <!--set_menu area start-->
    <?php include_once 'downloadapp.php'; ?>
    <!--footer area start-->
    <?php include_once 'footer.php'; ?>

    
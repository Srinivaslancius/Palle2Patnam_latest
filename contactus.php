<?php include_once 'header.php'; 
   
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

        <!--header area end-->

        <!--welcome area Start-->
        <div class="welcome_area">
            <div class="welcome_slider">
                <div class="single_welcome_slider" style="background-image:url(img/welcome_bg.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-7 col-sm-8">
                                <div class="welcome_content">
                                    <h1>Neatly. Delightedly. Quietly.</h1><br>
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
        <!--welcome area end-->
    </div>
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
            <form action="#" class="booking_form wow fadeIn" method="post">
                <div class="row">
                    <div class="col-sm-4">
                        <input type="text" name="name" placeholder="Name" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="email" name="email" placeholder="Email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" class="form-control" required>
                    </div>
                    <div class="col-sm-4">
                        <input type="text" name="mobile" placeholder="Phone" class="form-control" maxlength="10" pattern="[0-9]{10}" onkeypress="return isNumberKey(event)" required>
                    </div>
                    <div class="col-sm-12">
                        <textarea placeholder="Message.." name="message" class="form-control" required></textarea>
                    </div>
                    <div class="col-sm-2">
                        <input type="submit" class="custom_btn" value="Submit" name="submit">
                        <!-- <a href="#" class="custom_btn">SUBMIT</a> -->
                    </div>
                </div>
            </form>
        </div>
    </div>
    <!--booking area end-->

    <!--set_menu area start-->
    <?php include_once 'downloadapp.php'; ?>
    <!--footer area start-->
    <?php include_once 'footer.php'; ?>
    <script>
    function isNumberKey(evt){
        var charCode = (evt.which) ? evt.which : event.keyCode
        if (charCode > 31 && (charCode < 48 || charCode > 57))
            return false;
        return true;
    }
    </script>

    
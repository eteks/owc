<?php include ('header.php'); ?>
<?php
	   	  date_default_timezone_set('Asia/Kolkata');
		  
		  if(isset($_POST['form_submit'])){
		  	print_r($_POST);
		  $name = $_POST['name'];
		  $email = $_POST['email'];
		  $subject = $_POST['subject'];
		  $message = $_POST['message'];
		
		  $email_subject = "CONTACTUS DETAILS";
		  $email_body = "You have received a new message\n".
		              "Name: $name\n".
		              "Email: $email\n".
		              "Subject: $subject\n".
		              "Message: $message\n".
		  $to = "info@oneworldchemistry.org";
		  // $to = "info@etekchnoservices.com";
		  $headers = "From: $email \r\n";
		  $headers .= "Reply-To: $email \r\n";
		  $send=mail($to,$email_subject,$email_body,$headers);
		  if($send){
		  	$alert = 'sucs';
		  }else{
		  	$alert = 'fail';
		  }
		  
		  }
	   	?>
    	<section class="complete-content content-footer-space">
    		<!--Mid Content Start-->
     		<div class="about-intro-wrap pull-left">
     			<div class="bread-crumb-wrap ibc-wrap-4">
    				<div class="container">
    					<!--Title / Beadcrumb-->
			         	<div class="inner-page-title-wrap col-xs-12 col-md-12 col-sm-12">
			            	<div class="bread-heading"><h1>Contact OWC</h1></div>
			                <div class="bread-crumb pull-right hidden-sm hidden-xs">
				                <ul>
				                	<li><a href="#" class="sustain_link">Contact us</a></li>
				                	<li><a>Contact OWC</a></li>
				                </ul>
			                </div>
			            </div>
         			</div>
     			</div>
         		<div class="container">
        		<!--About-us top-content-->
        			<div class="row">
            			<div class="col-xs-12 col-lg-12  col-sm-12 col-md-12 pull-left contact2-wrap no-pad">
                		<!--contact widgets-->
                			<div class="col-xs-12 col-lg-12 col-sm-12 col-md-12 pull-left no-pad">
                    			<div class="subtitle col-xs-12 col-sm-12 col-md-12 pull-left news-sub icontact-widg" style="padding-top:20px !important;">One-World Chemistry</div>
                    			<!--Contact form-->
                				<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad wow fadeInUp" data-wow-delay="0.5s" data-wow-offset="160">
                    				<div></div>                 
									<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad">
										<?php
										if(isset($_POST['form_submit'])){
										if($alert = 'sucs'){
										?>	
										<div class="alert alert-success" id="contactSuccess">
											<strong>Success!</strong> Your message has been sent to us.
										</div>
										<?php }
										if($alert = 'fail'){ 
										?>
										<!-- <div class="alert alert-error" id="contactError">
											<strong>Error!</strong> There was an error sending your message.
										</div> -->
										<?php }}?>
										<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
											<p>Comments and suggestions for how to engage in One-World Chemistry and how to develop and take forward its agenda for change are most welcome.</p>
										</div>
            							<form class="contact2-page-form col-lg-12 col-sm-12 col-md-12 col-xs-12 no-pad contact-v1" id="contactForm1" method="post">
                    						<div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 control-group">
                    							<input type="text" class="contact2-textbox" placeholder="Name*" name="name" id="name" required />
                        					</div>    
                        					<div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 control-group">
                        						<input type="email" class="contact2-textbox" placeholder="Email*" name="email" id="email" required/>
                        					</div> 
				                            <div class="col-lg-4 col-sm-12 col-md-4 col-xs-12 control-group">
				                                <input type="text" placeholder="Subject*" class="contact2-textbox" name="subject" id="subject" required>
				                            </div>
				                            <div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
				                            	<textarea class="contact2-textarea" placeholder="Message*" name="message" id="message" required></textarea>
				                            </div>
                        					<div class="col-lg-12 col-sm-12 col-md-12 col-xs-12">
                        						<section class="color-7" id="btn-click">
            										<button id="button_padding_remove" class="btn2-st2 btn-7 btn-7b" name="form_submit"  data-loading-text="Loading..." type="submit">Submit</button>
            									</section>
            								</div>
             							</form>
            						</div>
                        		</div>
                			</div>
            			</div>
            		</div>
        		</div>
         	</div>
    	</section>
<?php include ('footer.php'); ?>
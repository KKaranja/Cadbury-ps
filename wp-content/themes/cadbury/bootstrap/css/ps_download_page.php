<?php
/*
 * Template Name: Download Page
 * Template Post Type: post, page, product
 */
  
 get_header();

?>
<header class="header">
    <div class=" element-display">

        <a href="/ps/ps/">
        	<img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/home_icon.png" class="img-fluid">
        </a>
        <a href="/ps/ps/">
        	<img class="logo" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/cadbury-logo.png">
        </a>
        
    </div>
</header>
	<?php 
	global $wpdb;
	$category_id = $_GET['cat'];
	$message_id = $_GET['fil'];

    if(is_numeric($message_id)){
   		$message = $wpdb->get_results(" SELECT * FROM wp_messages WHERE id = $message_id");
    }


	if($category_id == 1){?>
	 <!-- GIF -->
	 <div class="wrapper">
		<div class="container">
			<div class="row">
				
				<?php 
				foreach ($message as $msg) {?>
					<div class="col-md-12 justify-content-center d-flex">
						<img src="<?php echo $msg->message_url;?>" class="img-fluid gif-download">
					</div>
					<div class="col-md-12 justify-content-center d-flex">
						<a href="<?php echo $msg->message_url;?>" class="btn btn-ps" download>Download to share</a>
					</div>
				<?php }?>
				
			</div>
		</div>
	</div>
	<?php } else if($category_id == 2){
	// IOU
		// $img = imagecreatefromjpeg("https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/love_0.jpg");
		// $white = imagecolorallocate($img, 255, 255, 255);
		// $txt = "Test Data";
		// $font = "C:\Windows\Fonts\arial.ttf";
		// imagettftext($img, 24, 0, 5, 24, $white, $font, $txt);

		// header('Content-type: image/jpeg');
		// imagejpeg($img);
		// imagedestroy($img);
		// imagejpeg($img, "test.jpg", 100);?>
		<div class="wrapper">
			
			<div class="container">
				<div class="row form-group ">
					<div class="col-xs-12">
			            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
			                <li class="active steps"><a href="#step-1">
			                    <h5 class="list-group-item-heading">Choose your cover</h5>
			                </a></li>
			                <li class="disabled steps"><a href="#step-2">
			                    <h5 class="list-group-item-heading">Pick your vouchers</h5>
			                </a></li>
			                <li class="steps disabled"><a href="#step-3">
			                    <h5 class="list-group-item-heading">Your I.O.U Booklet</h5>
			                </a></li>
			                <li class="disabled steps"><a href="#step-4">
			                    <h5 class="list-group-item-heading">Share it</h5>
			                </a></li>
			            </ul>
			            <span class="active-bar"></span>
			        </div>
				</div>
				<div class="row setup-content" id="step-1" style="display: block;">
			        <div class="col-xs-12">
			            <div class="col-md-12 well text-center iou-cover">
			                <h4>Give them something they can’t wait to exchange</h4>
			                <p>
			                	The I.O.U Booklet is 10 gifts that can be cashed in at any time.<br>
			                	Select your favourite cover, and say who it is for.
			                </p>

			                <div class="swiper-container">
							    <div class="swiper-wrapper">
									<div class="swiper-slide">
										<img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/love_0.jpg" class="img-fluid">
										<div class="iou-recipient">
											<div class="iou-recipient-name" style="background-color: #ce153f;">
											
											</div>
										</div>
										
									</div>
									<div class="swiper-slide">
										<img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/friends_0.jpg" class="img-fluid">
										<div class="iou-recipient">
											<div class="iou-recipient-name" style="background-color: #7dc557;">
											
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/dance_0.jpg" class="img-fluid">
										<div class="iou-recipient">
											<div class="iou-recipient-name" style="background-color: #1b8696;">
											
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/love_0.jpg" class="img-fluid">
										<div class="iou-recipient">
											<div class="iou-recipient-name" style="background-color: #ce153f;">
											
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/friends_0.jpg" class="img-fluid">
										<div class="iou-recipient">
											<div class="iou-recipient-name" style="background-color: #7dc557;">
											
											</div>
										</div>
									</div>
									<div class="swiper-slide">
										<img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-09/dance_0.jpg" class="img-fluid">
										<div class="iou-recipient">
											<div class="iou-recipient-name" style="background-color: #1b8696;">
											
											</div>
										</div>
									</div>
							    </div>
							    <!-- <div class="swiper-pagination"></div> -->
							</div>		
							<div class="recipient-div">
								<label for="recipient-name">Recipient's Name <span class="required">*</span></label>
								<input type="text" name="recipient-name" id="recipient-name">

								<button class="ps-next-btn" id="choose-cover">NEXT</button> 
							</div>

							<!-- <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button> -->
			            </div>
			        </div>
			    </div>
			    <div class="row setup-content" id="step-2">
			        <div class="col-xs-12 text-center">
			        	<h4>Which 10 vouchers are you adding to your booklet?</h4>
			            <div class="row well">
			                
			                <div class="col-md-3">
			                	<input type="checkbox" id="voucher1" class="voucher" value="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" />
    							<label for="voucher1"><img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" class="img-fluid" /></label>
			                </div>
			                <div class="col-md-3">
			                	<input type="checkbox" id="voucher2" class="voucher" value="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" />
    							<label for="voucher2"><img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" class="img-fluid" /></label>
			                </div>
			                <div class="col-md-3">
			                	<input type="checkbox" id="voucher3" class="voucher" value="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" />
    							<label for="voucher3"><img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" class="img-fluid" /></label>
			                </div>
			                <div class="col-md-3">
			                	<input type="checkbox" id="voucher4" class="voucher" value="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" />
    							<label for="voucher4"><img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" class="img-fluid" /></label>
			                </div>
			            </div>
			            <button class="ps-next-btn" id="pick-voucher">NEXT</button> 
			        </div>
			    </div>
			    <div class="row setup-content" id="step-3">
			        <div class="col-xs-12 text-center">
			            <div class="col-md-12 well">
			                <h4 class="heading-text">Your cover</h4>
			                <img src="" class="img-fluid iou-cover-preview">
			                <h4 class="heading-text">+</h4>
			                <h4 class="heading-text">Drag and drop the vouchers in your favourite order</h4>
			                <ul class="voucher-preview">
			                	
			                </ul>
			                <button class="ps-next-btn" id="confirm-iou">NEXT</button> 
			            </div>
			        </div>
			    </div>
			    <div class="row setup-content" id="step-4">
			        <div class="col-xs-12 text-center">
			            <div class="col-md-12 well">
			                <h4 class="heading-text">Your I.O.U Booklet is ready!</h4>
			                <h5 class="heading-text">Download to share, or click on an icon to share your booklet on social.</h5>

			                <img src="" class="img-fluid iou-cover-preview iou-cover-download">
			                <div class="iou-cover-name">
								<div class="iou-recipient-name" style="background-color: #ce153f;">
								
								</div>
							</div>

			                <a href="#" class="btn btn-ps" id="download-iou" download>Download to share</a>
			            </div>
			        </div>
			    </div>
			</div>
		</div>

	<?php } else if($category_id == 3){?>
	
		<div class="container" id="main-container">
	        <div class="heading-top">
	            <h4 class="heading-text">Have all the feels but no way to share them?</h4>
	            <p class="text">Tell them exactly what you’re thinking with a one-of-a-kind P.S. message.</p>
	        </div>

	        <div class="swiper-container gallery-top">
	            <div class="swiper-wrapper">
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/AskiesJo_im-sorry.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/crown-justbestrong_0.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/Ill-gladly-take-the-L-Im-Sorry_0.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/I-love-you-like-kanye-loves-kanye-i-love-you.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/IOweYouOne_Thanks.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/Mina-nawe-besties.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content2.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content3.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content4.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content5.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content6.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content7.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content8.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content9.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>	
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content10.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
	                </div>
	                <div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content11.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content12.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content13.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content14.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content15.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content16.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content17.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
					<div class="swiper-slide">
	                    <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content18.jpg">
	                    <div class="message-to change-font"></div>
	                    <div class="message-from change-font"></div>
					</div>
	            </div>
	            <div class="row setup-content" id="btn-tabs">

	                <div class="col-xs-12" id="btns">
	                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
	                        <li class="active"><a href="#step-1">
	                                <h4 class="list-group-item-heading"><strong>Pick your message</strong></h4>
	                            </a></li>
	                        <li class=""><a href="#step-2">
	                                <h4 class="list-group-item-heading"><strong>Who is it for?</strong></h4>
	                            </a></li>
	                        <li class=""><a href="#step-3">
	                                <h4 class="list-group-item-heading"><strong>Share it</strong></h4>
	                            </a></li>
	                    </ul>
	                </div>
	            </div>
	        </div>
	        <div>
	            <div class="row setup-content" id="step-1">
	                <p>Find the right words</p>
	                <div class="swiper-container gallery-thumbs">
	                    <div class="swiper-wrapper">
	                        <div class="swiper-slide step-1"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/AskiesJo_im-sorry.jpg"></div>
	                        <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/crown-justbestrong_0.jpg"></div>
	                        <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/Ill-gladly-take-the-L-Im-Sorry_0.jpg"></div>
	                        <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/I-love-you-like-kanye-loves-kanye-i-love-you.jpg"></div>
	                        <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/IOweYouOne_Thanks.jpg"></div>
	                        <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/Mina-nawe-besties.jpg"></div>
	                        <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content2.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content3.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content4.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content5.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content6.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content7.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content8.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content9.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content10.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content11.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content12.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content13.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content14.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content15.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content16.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content17.jpg"></div>
							<div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/personalized-content18.jpg"></div>
	                    </div>
	                </div>
	                <a href="#step-2" type="button" class="btn btn-warning" id="button-next" style="font-size : 20px;">Next</a>
	            </div>
	        </div>
	        <div class="row setup-content" id="step-2">
	            <div class="card-body">
	                <h2 class="title">Enter all the details</h2>
	                <div id="form-input">
	                    <div class="input-group">
	                        <input class="input--style-3 change-font" type="text" id="message-to-text">
	                        <span class="floating-label">Dear:</span>
	                    </div>
	                    <div class="input-group">
	                        <input class="input--style-3 change-font" type="text" id="message-from-text">
	                        <span class="floating-label">From:</span>
	                    </div>
	                </div>
	                <div class="input-group">
	                    <div class="rs-select2 js-select-simple select--no-search">
	                        <select name="font" id="change-font" class="font-selection" class="form-control">
	                            <option>Choose Your Font</option>
	                            <option value="Arial"><strong>Arial</strong></option>
	                            <option value="Anton ">Anton </option>
	                            <option value="Bangers ">Bangers </option>
	                            <option value="Bowlby one">Bowlby one</option>
	                            <option value="Bungee ">Bungee </option>
	                            <option value="Fredoka one ">Fredoka one</option>
	                            <option value="Hanalei Fill ">Hanalei Fill </option>
	                            <option value="ka lam ">ka lam </option>
	                            <option value="knewave ">knewave </option>
	                            <option value="pacifico ">pacifico</option>
	                            <option value="Passion One ">Passion One </option>
	                            <option value="Permanent Marker ">Permanent Marker </option>
	                            <option value="Sedgwick Ave">Verdana </option>
	                            <option value="Sigmar One">Verdana </option>
	                            <option value="Comic Sans MS">Comic Sans MS</option>
	                        </select>
	                        <div class="select-dropdown"></div>
	                    </div>
	                </div>


	            </div>
	            <a href="#step-3"  type="button" class="btn btn-warning " id="skip-btn">Skip</a>
	            <button type="button" class="btn btn-warning " id="next-btn">Next</button>

	        </div>
	        <div class="row setup-content" id="step-3">
	            <!-- <div class="row" id="step-3">  -->
	            <h1>Download to share, or click on an icon to share your message on social</h1>
	            <div class="col-md-12 justify-content-center d-flex" id="download">

	                <a href="" class="btn btn-ps" id="btn-download" download>Download to share</a>
	            </div>
	            <div class='social-icons'>
	                <div class='icon social fb'><i class='fa fa-facebook'></i></div>
	                <div class='icon social tw' id="twitter-btn"><i class='fa fa-twitter'></i></div>
	                <div class='icon social in'><i class='fa fa-whatsapp'></i></div>
	            </div>
	        </div>

	    </div>
	<?php } else if($category_id == 4){
		foreach ($message as $msg){
			$filter_id = $msg->filter_id;
		}
		?>
		<div class="download-page-wrapper wrapper">
			<div class="owl-carousel owl-theme bar-owl">
				<?php 
				$bars = $wpdb->get_results(" SELECT * FROM wp_filters");
				foreach($bars as $bar){?>
					<div class="item"> 
						<div style="background-image: url(<?php echo $bar->background_image;?>);" class="bar-container">
							<img src="<?php echo $bar->bar_hashtag;?>" class="bar-text-img">
							<img src="<?php echo $bar->bar_image;?>" class="bar-img">
							<p class="bar-text">
		                        <?php echo $bar->bar_text;?>
		                    </p>
						</div>
					</div>
				<?php }
				?>
			</div>
			<div class="owl-theme">
		        <div class="owl-controls">
		            <div class="custom-nav owl-nav"></div>
		        </div>
		    </div>
		</div>
	<?php } else if($category_id == 5){?>
	 <!-- Relationship Tips -->
		<div class="wrapper">
		 	<div class="row">
		 		<div class="col-md-12 relationship-tips text-center">
		 			<h4>Keep bae smiling all day, every day</h4>
		 			<p>
		 				Here’s the down-low on how to do relationships right.<br>
		 				Download to share, or click on an icon to share your tips on social
		 			</p>
		 			<div class="swiper-container gallery-top">
						<div class="swiper-wrapper">
							<div class="swiper-slide">
								<img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/relationship-tips3.jpg" class="img-fluid"> 
							</div>
							<div class="swiper-slide">
								<img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/relationship-tips6_0.jpg" class="img-fluid">
							</div>
							<div class="swiper-slide">
								<img src="https://www.cadbury.co.za/psbar/sites/default/files/2018-09/relationship%20tips5_0.jpg" class="img-fluid">
							</div>
							<div class="swiper-slide">
								<img src="https://www.cadbury.co.za/psbar/sites/default/files/2018-09/relationship%20tips5_0.jpg" class="img-fluid">
							</div>
						</div>
						<!-- <div class="swiper-button-next swiper-button-white"></div>
						<div class="swiper-button-prev swiper-button-white"></div> -->
					</div>

					<div class="row form-group d-flex justify-content-center">
				        <div class="col-xs-12">
				            <ul class="nav nav-pills nav-justified thumbnail setup-panel">
				                <li class="active steps">
				                	<a href="#step-10">
				                    	<h5 class="list-group-item-heading">Pick your relationship tip</h5>
					                </a>
					            </li>
				                <li class="steps"><a href="#step-11" id="share-relationship-tip">
				                    <h5 class="list-group-item-heading">Share it</h5>
				                </a></li>
				            </ul>
				        </div>
					</div>
					<div class="row setup-content" id="step-10">
				        <div class="col-xs-12">
				            <div class="col-md-12 well">
				                <div class="swiper-container gallery-thumbs">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/relationship-tips3.jpg" class="img-fluid">
										</div>
										<div class="swiper-slide">
											<img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/relationship-tips6_0.jpg" class="img-fluid">
										</div>
										<div class="swiper-slide">
											<img src="https://www.cadbury.co.za/psbar/sites/default/files/2018-09/relationship%20tips5_0.jpg" class="img-fluid">
										</div>
										<div class="swiper-slide">
											<img src="https://www.cadbury.co.za/psbar/sites/default/files/2018-09/relationship%20tips5_0.jpg" class="img-fluid">
										</div>
									</div>
								</div>
				            </div>
				        </div>
				    </div>
				    <div class="setup-content" id="step-11">
				    	<div class="row d-flex justify-content-center">
				    		<div class="col-xs-12">
					            <div class="col-md-12 well">
									<a href="#" class="btn btn-ps" id="download-relationship-tip" download>Download to share</a>

									<a href="http://www.facebook.com/sharer.php? u=http://isobarkenya.com/ &t=Made With Cadbury P.S." target="_blank"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/Facebook-icon.png" class="img-fluid share-icon"></a>

									<a target="_blank" href="https://twitter.com/intent/tweet?url=https://www.cadbury.co.ke/martians/&amp;text=Made With Cadbury P.S.&amp;hashtags=SayItWithPS&amp;via=cadbury.co.ke" rel="noreferrer"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/twitter-icon.png" class="img-fluid share-icon"></a>
                        			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

                        			<a href="https://api.whatsapp.com/send?&text=#SayItWithPS" target="_blank">WA</a>
					            </div>
					        </div>
				    	</div>
				    </div>
		 		</div>
		 	</div>
		</div>
	<?php }
	?>

<script type="text/javascript">

	$(document).ready(function() {
    
	    var navListItems = $('ul.setup-panel li a'),
	        allWells = $('.setup-content');

	    allWells.hide();

	    navListItems.click(function(e)
	    {
	        e.preventDefault();
	        var $target = $($(this).attr('href')),
	            $item = $(this).closest('li');
	        
	        if (!$item.hasClass('disabled')) {
	            navListItems.closest('li').removeClass('active');
	            $item.addClass('active');
	            allWells.hide();
	            $target.show();
	        }
	    });
	    
	    $('ul.setup-panel li.active a').trigger('click');
	    
	    $('#choose-cover').on('click', function(e) {
	        $('ul.setup-panel li:eq(1)').removeClass('disabled');
	        $('ul.setup-panel li a[href="#step-2"]').trigger('click');
	        /* $(this).remove(); */
	    });

	    $('#pick-voucher').on('click', function(e) {
	        $('ul.setup-panel li:eq(2)').removeClass('disabled');
	        $('ul.setup-panel li a[href="#step-3"]').trigger('click');
	        
	        var coversrc = $('.iou-cover .swiper-slide-active img').attr("src");
	        $('.iou-cover-preview').attr('src', coversrc);
	        

	        var selected = new Array();
	        $("input[type='checkbox'][id^='voucher']:checked").each(function () {
                selected.push(this.value);
            });

	        var ul = $('.voucher-preview');
            $.each(selected, function(i, value){
            	var li = $('<li/>').appendTo(ul);
		        var img = $('<img/>')
			        .addClass('img-fluid voucher-preview-img')
			        .attr('src', value)
			        .appendTo(li);
            });
	    });

	    $('#confirm-iou').on('click', function(e){
	    	$('ul.setup-panel li:eq(3)').removeClass('disabled');
	        $('ul.setup-panel li a[href="#step-4"]').trigger('click');
	    });

	    $('#recipient-name').keyup(function(){
	    	var name = this.value;
	    	$('.iou-recipient-name').text(name);
	    }); 

        $( ".voucher-preview" ).sortable();
		$( ".voucher-preview" ).disableSelection();
	      
	});

	$('.bar-owl').owlCarousel({
		items:1,
	    loop: false,
	    nav: true,
	    navText: [
	        '<i class="fa fa-angle-left" aria-hidden="true"></i>',
	        '<i class="fa fa-angle-right" aria-hidden="true"></i>'
	    ],
	    navContainer: '.custom-nav',
	});

	var swiper = new Swiper('.swiper-container', {
		slidesPerView: 2,
		spaceBetween: 10,
		centeredSlides: true,
		slideToClickedSlide: true,
	});

	var galleryThumbs = new Swiper('.gallery-thumbs', {
      spaceBetween: 10,
      slidesPerView: 3,
      // freeMode: true,
      watchSlidesVisibility: true,
      // watchSlidesProgress: true,
      centeredSlides: true,
      touchRatio: 0.2,
      slideToClickedSlide: true,
    });
    var galleryTop = new Swiper('.gallery-top', {
      // spaceBetween: 10,
      // centeredSlides: true,
	  // slideToClickedSlide: true,
      navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
      // thumbs: {
      //   swiper: galleryThumbs
      // }
	});
	galleryTop.controller.control = galleryThumbs;
    galleryThumbs.controller.control = galleryTop;

    $('#share-relationship-tip').click(function(){
    	var newUrl = $('.gallery-top .swiper-slide-active img').attr("src");
    	$('#download-relationship-tip').attr("href", newUrl);
    });

</script>
<?php
/*
 * Template Name: Download Page
 * Template Post Type: post, page, product
 */
  
 get_header();

?>
<header class="header">
    <div class="element-display">

        <a href="/ps/">
            <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/home-7-16.png" class="img-fluid" id="home-img">
        </a>
        <!-- <a href="/ps/ps/"> -->
        <img class="logo" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/cadbury-logo.png">
        <!-- </a> -->

    </div>
</header>
<div id="close-icon"><a href="/ps/" class="fa fa-times-thin fa-3x" aria-hidden="true"></a></div>
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
        <div class="row gif-container">

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
        <div class="row form-group d-flex justify-content-center" id="btn-tabs">
            <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12" id="btns">
                <ul class="nav nav-pills nav-justified thumbnail setup-panel" id="nav-justified">

                    <li class="active"><a href="#step-1">
                            <h4 class="list-group-item-heading"><strong>Choose your cover</strong></h4>
                        </a></li>
                    <li class="disabled"><a href="#step-2">
                            <h4 class="list-group-item-heading"><strong>Pick your vouchers</strong></h4>
                        </a></li>
                    <li class="disabled"><a href="#step-3">
                            <h4 class="list-group-item-heading"><strong>Your I.O.U Booklet</strong></h4>
                        </a></li>
                    <li class="disabled"><a href="#step-4">
                            <h4 class="list-group-item-heading"><strong>Share it</strong></h4>
                        </a></li>
                </ul>
            </div>
        </div>
        <div class="row setup-content" id="step-1" style="display: block;">
            <div class="col-xs-12">
                <div class="col-md-12 well text-center iou-cover">
                    <h4 class="heading-text">Give them something they can’t wait to exchange</h4>
                    <p class="text">
                        <strong>
                            The I.O.U Booklet is 10 gifts that can be cashed in at any time.<br>
                            Select your favourite cover, and say who it is for.
                        </strong>
                    </p>

                    <div class="swiper-container">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/PS-BAR-I.O.jpg" class="img-fluid">
                                <div class="iou-recipient">
                                    <div class="iou-recipient-name" style="background-color: #ce153f;">

                                    </div>
                                </div>

                            </div>
                            <div class="swiper-slide">
                                <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/PS-BAR-I.O1.jpg" class="img-fluid">
                                <div class="iou-recipient">
                                    <div class="iou-recipient-name" style="background-color: #7dc557;">

                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/PS-BAR-I.O3.jpg" class="img-fluid">
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
                        <input type="text" name="recipient-name" id="recipient-name" class="recipient-name">

                        <button class="ps-next-btn" id="choose-cover">NEXT</button>
                    </div>

                    <!-- <button id="activate-step-2" class="btn btn-primary btn-lg">Activate Step 2</button> -->
                </div>
            </div>
        </div>
        <div class="row setup-content" id="step-2">
            <div class="col-xs-12 text-center">
                <h4 class="heading-text">Which 10 vouchers are you adding to your booklet?</h4>
                <div class="row well">

                    <div class="col-md-4" id="check-box">
                        <input type="checkbox" id="voucher1" class="voucher" value="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" />
                        <label for="voucher1"><img src="https://www.cadbury.co.za/psbar/sites/default/files/styles/thumbnail/public/2018-10/i-o-u%20vouchers18.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4" id="check-box">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers2.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers2.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers3.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers3.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers4_0.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers4_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers5_0.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers5_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers6.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers6.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers7.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers7.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers8.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers8.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers9.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers9.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers10.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers10.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers7.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers7.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers11_0.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers11_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers12_0.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers12_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers13_0.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers13_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers14.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers14.png" class="img-fluid" /></label>
                    </div>

                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers15.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers15.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers16.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers16.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers17.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers17.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers18.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers18.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers19.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers19.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers20_0.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers20_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers21_0.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers21_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers22.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers22.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers23.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers23.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers24.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers24.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers25.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers25.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers26.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers26.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher4" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers27_0.png" />
                        <label for="voucher4"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers27_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher1" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers28_0.png" />
                        <label for="voucher1"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers28_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher2" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers29_0.png" />
                        <label for="voucher2"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers29_0.png" class="img-fluid" /></label>
                    </div>
                    <div class="col-md-4">
                        <input type="checkbox" id="voucher3" class="voucher" value="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers30.png" />
                        <label for="voucher3"><img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/i-o-u-vouchers30.png" class="img-fluid" /></label>
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
                    <p class="text">Download to share, or click on an icon to share your booklet on social.</p>

                    <img src="" class="img-fluid iou-cover-preview iou-cover-download">
                    <!-- <div class="iou-cover-name">
                        <div class="iou-recipient-name" style="background-color: #ce153f;">

                        </div>
                    </div> -->
                    <div class="row d-flex justify-content-center">
                        <div class="col-xs-12">
                            <div class="col-md-12 well">
                                <a href="#" class="btn btn-ps" id="download-iou-booklet">Download to share</a>

                                <div class='social-icons'>
                                    <div class='icon social fb'>
                                        <a href="http://www.facebook.com/sharer.php? u=http://cadbury.co.ke/ps/ps/ &t=Made With Cadbury P.S."  class='fa fa-facebook share-meta'></></a>
                                    </div>
                                    <div class='icon social tw' id="twitter-btn">
                                        <a href="https://twitter.com/intent/tweet?url=http://cadbury.co.ke/ps/ps/&amp;text=Made With Cadbury P.S.&amp;hashtags=SayItWithPS&amp;via=Cadbury_KE"class='fa fa-twitter share-meta'></a>
                                    </div>
                                    <div class='icon social in'>
                                        <a href="https://api.whatsapp.com/send?text=#SayItWithPS" data-action="share/whatsapp/share"
                                        class='fa fa-whatsapp share-meta whatsapp-mobile'></a>
                                        <a href="https://web.whatsapp.com/send?&text=#SayItWithPS" class='fa fa-whatsapp share-meta whatsapp-pc'></a>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php } else if($category_id == 3){?>

<div class="container personalised-message" id="main-container">
    <div class="heading-top">
        <h4 class="heading-text">Have all the feels but no way to share them?</h4>
        <p class="text">Tell them exactly what you’re thinking with a one-of-a-kind P.S. message.</p>
    </div>

    <div class="swiper-container gallery-top">
        <div class="swiper-wrapper">
            
            <!-- new  -->
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_BUT-SI-NI-LIFE.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_CHEERS-BABA.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_FORM-NI-GANI.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_HAPO-SAWA.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_I-LOVE-YOU.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_NAKUFEEL.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_UHAI.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_UKO-SAWA.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_USI-TENSE.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
            <div class="swiper-slide">
                <img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_YOUR-GOALS.jpg">
                <div class="message-to change-font"></div>
                <div class="message-from change-font"></div>
            </div>
        </div>
    </div>
    <div class="row form-group d-flex justify-content-center" id="btn-tabs">
        <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12" id="btns">
            <ul class="nav nav-pills nav-justified thumbnail setup-panel" id="nav-justified">
                <li class="active"><a href="#step-1">
                        <h4 class="list-group-item-heading"><strong>Pick your message</strong></h4>
                    </a></li>
                <li><a href="#step-2">
                        <h4 class="list-group-item-heading"><strong>Who is it for?</strong></h4>
                    </a></li>
                <li><a href="#step-3">
                        <h4 class="list-group-item-heading"><strong>Share it</strong></h4>
                    </a></li>
            </ul>
        </div>
    </div>
    <div class="row setup-content" id="step-1">
        <p class="header3">Find the right words</p>
        <div class="swiper-container gallery-thumbs">
            <div class="swiper-wrapper">
                
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_BUT-SI-NI-LIFE.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_CHEERS-BABA.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_FORM-NI-GANI.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_HAPO-SAWA.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_I-LOVE-YOU.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_NAKUFEEL.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_UHAI.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_UKO-SAWA.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_USI-TENSE.jpg"></div>
                <div class="swiper-slide"><img class="img-fluid" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/cadburyPS-kenyaims_YOUR-GOALS.jpg"></div>
            </div>
        </div>
        <button href="#step-2" type="button" class="brown-btn" id="choose-message-next-btn" style="font-size : 20px;">Next</button>
    </div>

    <div class="row setup-content" id="step-2">

        <div class="card-body">
            <p class="header3">Enter all the details</p>
            <div id="form-input">
                <div class="input-group-holder">
                    <!-- <span class="floating-label">Dear:</span> -->
                    <input class="input--style-3 change-font" type="text" id="message-to-text">

                </div>
                <div class="input-group-holder">
                    <input class="input--style-3 change-font" type="text" id="message-from-text">

                </div>


            </div>
            <div class="input-group-holder">
                <div class="rs-select2 js-select-simple select--no-search">
                    <select name="font" id="change-font" class="font-selection" class="form-control" onchange="changeFont()">
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
        <div class="col-xs-12col-sm-12  col-md-12 col-lg-12">
            <button href="#step-3" type="button" class="brown-btn pesonalized-skip-btn">Skip</button>
            <button type="button" class="brown-btn" id="who-is-it-for-btn">Next</button>
        </div>

    </div>
    <div class="row setup-content" id="step-3">
        <!-- <div class="row" id="step-3">  -->
        <p class="header3">Download to share, or click on an icon to share your message on social</p>
        <div class="col-md-12 justify-content-center d-flex" id="download">

            <a href="" class="btn btn-ps" id="personolized-btn" download>Download to share</a>
        </div>
       <!--  <canvas id="test-canvas"></canvas> -->
        <div class='social-icons'>
            <div class='icon social fb'>
                <a href="http://www.facebook.com/sharer.php? u=http://cadbury.co.ke/ps/ps/ &t=Made With Cadbury P.S."  class='fa fa-facebook share-meta'></></a>
            </div>
            <div class='icon social tw' id="twitter-btn">
                <a href="https://twitter.com/intent/tweet?url=http://cadbury.co.ke/ps/ps/&amp;text=Made With Cadbury P.S.&amp;hashtags=SayItWithPS&amp;via=Cadbury_KE"class='fa fa-twitter pesonalized-share-tweet'></a>
            </div>
            <div class='icon social in'>
                <a href="https://api.whatsapp.com/send?text=#SayItWithPS" data-action="share/whatsapp/share"
                class='fa fa-whatsapp share-meta whatsapp-mobile'></a>
                <a href="https://web.whatsapp.com/send?&text=#SayItWithPS" class='fa fa-whatsapp share-meta whatsapp-pc'></a>
            </div>
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
<div class="wrapper relationship-tips-wrapper">
    <div class="row">
        <div class="col-md-12 relationship-tips text-center">
            <h4>Keep bae smiling all day, every day</h4>
            <p class="header3">
                Here’s the down-low on how to do relationships right.<br>
                Download to share, or click on an icon to share your tips on social
            </p>
            <div class="swiper-container gallery-top">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/BAE_DAY.jpg" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/be-my-bae.png" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/dm_is_where_its_ar.png" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/let_her_be_the_ig_to_ur_story.jpg" class="img-fluid">
                    </div>
                    <div class="swiper-slide">
                        <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/sweeter.jpg" class="img-fluid">
                    </div>
                </div>
                <!-- <div class="swiper-button-next swiper-button-white"></div>
						<div class="swiper-button-prev swiper-button-white"></div> -->
            </div>

            <div class="row form-group d-flex justify-content-center">
                <div class="col-xs-12 col-sm-12  col-md-12 col-lg-12" id="btns">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel" id="nav-justified">
                        <li class="active">
                            <a href="#step-10">
                                <h4 class="list-group-item-heading">Pick your relationship tip</h4>
                            </a>
                        </li>
                        <li><a href="#step-11" id="share-relationship-tip">
                                <h4 class="list-group-item-heading">Share it</h4>
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
                                    <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/BAE_DAY.jpg" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/be-my-bae.png" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/dm_is_where_its_ar.png" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/let_her_be_the_ig_to_ur_story.jpg" class="img-fluid">
                                </div>
                                <div class="swiper-slide">
                                    <img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/sweeter.jpg" class="img-fluid">
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

                            <div class='social-icons'>
                                <div class='icon social fb'>
                                    <a href="http://www.facebook.com/sharer.php? u=http://cadbury.co.ke/ps/ps/ &t=Made With Cadbury P.S."  class='fa fa-facebook share-meta'></></a>
                                </div>
                                <div class='icon social tw' id="twitter-btn">
                                    <a href="https://twitter.com/intent/tweet?url=http://cadbury.co.ke/ps/ps/&amp;text=Made With Cadbury P.S.&amp;hashtags=SayItWithPS&amp;via=Cadbury_KE"class='fa fa-twitter twitter-share'></a>
                                </div>
                                <div class='icon social in'>
                                    <a href="https://api.whatsapp.com/send?text=#SayItWithPS" data-action="share/whatsapp/share"
                                    class='fa fa-whatsapp whatsapp-share-relationship whatsapp-mobile'></a>
                                    <a href="https://web.whatsapp.com/send?&text=#SayItWithPS" class='fa fa-whatsapp whatsapp-share-relationship whatsapp-pc'></a>
                                </div>
                            </div>

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

        navListItems.click(function(e) {
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
            // $(this).remove();
        });

        $('#pick-voucher').on('click', function(e) {
            $('ul.setup-panel li:eq(2)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-3"]').trigger('click');

            var coversrc = $('.iou-cover .swiper-slide-active img').attr("src");
            $('.iou-cover-preview').attr('src', coversrc);


            var selected = new Array();
            $("input[type='checkbox'][id^='voucher']:checked").each(function() {
                selected.push(this.value);
            });

            var ul = $('.voucher-preview');
            $.each(selected, function(i, value) {
                var li = $('<li/>').appendTo(ul);
                var img = $('<img/>')
                    .addClass('img-fluid voucher-preview-img')
                    .attr('src', value)
                    .appendTo(li);
            });
        });

        var getImageFromUrl = function(url, callback) {
            var img = new Image();
            img.onError = function() {
                alert('Cannot load image: "' + url + '"');
            };
            img.onload = function() {
                callback(img);
            };
            img.src = url;
        }

        // var getArrayImages = function(url) {
        // 	var img = new Image();
        // 	img.onload = function () {
        //         img.src = url;
        //     };

        // }
        var createPDF = function(imgData) {
            var doc = new jsPDF('l', 'pt', [imgData.width / 2, imgData.height / 2]);
            var width = doc.internal.pageSize.width;
            var height = doc.internal.pageSize.height;
            var options = {
                pagesplit: true
            };

            var recipient_name = $('#recipient-name').val();
            doc.text(10, 20, recipient_name);
            // var h1 = 50;
            // var aspectwidth1 = (height - h1) * (9 / 16);
            doc.addImage(imgData, 'JPEG', 0, 0, imgData.width / 2, imgData.height / 2, 'Cover image');
            doc.addPage();
            // doc.text(10, 20, 'Hello World');
            // var h2 = 30;
            // var aspectwidth2 = (height - h2) * (9 / 16);

            // var selected_voucher = new Array();
            //    $("input[type='checkbox'][id^='voucher']:checked").each(function () {
            //           selected_voucher.push(this.value);
            //       });
            //       selected_voucher.forEach(function(element){
            //       	console.log(element);
            //       	doc.addImage(getArrayImages(element), 'JPEG', 0, 0, imgData.width/2, imgData.height/2, 'Cover image2');
            //       	doc.addPage();
            //       });

            doc.addImage(imgData, 'JPEG', 0, 0, imgData.width / 2, imgData.height / 2, 'Cover image2');
            doc.output('datauri');

            var string = doc.output('datauri');
            var iframe = "<iframe width='100%' height='100%' src='" + string + "'></iframe>"
            var x = window.open();
            x.document.open();
            x.document.write(iframe);
            x.document.close();
        }

        $('#download-iou-booklet').click(function() {
            var pdf_image = $('.iou-cover .swiper-slide-active img').attr("src");
            // var selected_voucher = new Array();
            // selected_voucher.push(pdf_image);
            //    $("input[type='checkbox'][id^='voucher']:checked").each(function () {
            //           selected_voucher.push(this.value);
            //       });

            getImageFromUrl(pdf_image, createPDF);
        });

        $('#confirm-iou').on('click', function(e) {
            $('ul.setup-panel li:eq(3)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-4"]').trigger('click');

        });

        $('#recipient-name').keyup(function() {
            var name = this.value;
            $('.iou-recipient-name').text(name);
        });
         
        $('#message-to-text').keyup(function() {
            var name = this.value;
            $('.message-to').text(name);
        });
        $('#message-from-text').keyup(function() {
            var name = this.value;
            $('.message-from').text(name);
        });

        $(".voucher-preview").sortable();
        $(".voucher-preview").disableSelection();

    });

    $('.bar-owl').owlCarousel({
        items: 1,
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
        slidesPerView: 5,
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

    $('#share-relationship-tip').click(function() {
        var newUrl = $('.relationship-tips-wrapper .swiper-slide-active img').attr("src");
        $('#download-relationship-tip').attr("href", newUrl);
        var whatsapp_share = 'https://api.whatsapp.com/send?text=Made With Cadbury P.S. #SayItWithPS ';
        var whatsapp_share_pc = 'https://web.whatsapp.com/send?text=Made With Cadbury P.S. #SayItWithPS ';
        $('.whatsapp-mobile').attr('href', whatsapp_share.concat(newUrl));
        $('.whatsapp-pc').attr('href', whatsapp_share_pc.concat(newUrl));
    });

    $('.twitter-share').click(function(){
        var newUrl = $('.relationship-tips-wrapper .swiper-slide-active img').attr("src");
        // $('meta[name="twitter:image"]').remove();
        // $('head').append( '<meta name="twitter:image" content=newUrl>' );
        var img_url_1 = 'https://twitter.com/intent/tweet?url=';
        var img_url_2 = '&amp;text=Made With Cadbury P.S.&amp;hashtags=SayItWithPS&amp;via=Cadbury_KE';
        $('.twitter-share').attr('href', img_url_1.concat(newUrl, img_url_2));

    });

    $('#message-to-text').attr("placeholder", "Dear:");
    $('#message-from-text').attr("placeholder", "From:");

    $('#choose-message-next-btn').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-2"]').trigger('click');

    });
    $('.pesonalized-skip-btn').on('click', function(e) {
        $('ul.setup-panel li:eq(2)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click');

        var img_url = $('.personalised-message .gallery-top .swiper-slide-active img').attr('src');
        $('#personolized-btn').attr('href', img_url);

        var img_url_1 = 'https://twitter.com/intent/tweet?url=';
        var img_url_2 = '&amp;text=Made With Cadbury P.S.&amp;hashtags=SayItWithPS&amp;via=Cadbury_KE'
        $('.pesonalized-share-tweet').attr('href', img_url_1.concat(img_url, img_url_2))

        var whatsapp_share = 'https://api.whatsapp.com/send?text=Made With Cadbury P.S. #SayItWithPS ';
        var whatsapp_share_pc = 'https://web.whatsapp.com/send?text=Made With Cadbury P.S. #SayItWithPS ';
        $('.whatsapp-mobile').attr('href', whatsapp_share.concat(img_url));
        $('.whatsapp-pc').attr('href', whatsapp_share_pc.concat(img_url));
    });

    $('#who-is-it-for-btn').on('click', function(e) {
        $('ul.setup-panel li:eq(1)').removeClass('disabled');
        $('ul.setup-panel li a[href="#step-3"]').trigger('click'); 

    });
  
    $("#change-font").change(function() {
        $('.change-font').css("font-family", $(this).val());
    });

    $('.share-meta').click(function(){
        var url_img = $('.personalised-message .gallery-top .swiper-slide-active img').attr('src');
        $("meta[property='og\\:image']").attr("content", url_img);
    });
       
</script>

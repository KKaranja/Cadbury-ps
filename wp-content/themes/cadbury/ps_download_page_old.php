<?php
/*
 * Template Name: Download Page
 * Template Post Type: post, page, product
 */
  
 get_header();

?>
<header class="header">
    <div class="container element-display">

        <a href="/http://localhost/Cadbury-ps/home-page/">
            <img src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/home-7-16.png" class="img-fluid">
        </a>
        <img class="logo" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/cadbury-logo.png">
    </div>
</header>
<div class="wrapper">
    <?php 
	global $wpdb;
	$category_id = $_GET['cat'];
	$message_id = $_GET['fil'];

    if(is_numeric($message_id)){
   		$message = $wpdb->get_results(" SELECT * FROM wp_messages WHERE id = $message_id");
    }


	if($category_id == 1){?>
    <!-- GIF -->
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

    <?php } else if($category_id == 2){
	// IOU

     } else if($category_id == 3){?>
    <div class="container" id="main-container">
        <div class="heading-top">
            <h2 class="personalized-heading">Have all the feels but no way to share them?</h2>
            <p class="personalized-top-p">Tell them exactly what you’re thinking with a one-of-a-kind P.S. message.</p>
            
         <canvas id="personalised-canvas"></canvas>
        </div>
        <div class="swiper-container gallery-top">
            <div class="swiper-wrapper">
               
                <div class="swiper-slide">
                    <img class="img-fluid" id="active-img" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-my-kind-of-crazy-besties-1.jpg" crossorigin="anonymous">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/YouveGotThis-justbestrong.jpg" crossorigin="anonymous">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-serving-all-the-sauce-winning.jpg" crossorigin="anonymous">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-goals-winning.jpg">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-my-kind-of-crazy-besties-1.jpg">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/YouveGotThis-justbestrong.jpg">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-serving-all-the-sauce-winning.jpg">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
                <div class="swiper-slide">
                    <img class="img-fluid" id="slider-image" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-goals-winning.jpg">
                    <div class="message-to change-font"></div>
                    <div class="message-from change-font"></div>
                </div>
            </div>
            <div class="row " id="btn-tabs">

                <div class="col-xs-12" id="btns">
                    <ul class="nav nav-pills nav-justified thumbnail setup-panel">
                        <li class="active"><a href="#step-31">
                                <h4 class="list-group-item-heading"><strong>Pick your message</strong></h4>
                            </a></li>
                        <li class=""><a href="#step-32">
                                <h4 class="list-group-item-heading"><strong>Who is it for?</strong></h4>
                            </a></li>
                        <li class=""><a href="#step-33">
                                <h4 class="list-group-item-heading"><strong>Share it</strong></h4>
                            </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div>
            <div class="row setup-content" id="step-31">
                <p>Find the right words</p>
                <div class="swiper-container gallery-thumbs">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide step-1"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-my-kind-of-crazy-besties-1.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/YouveGotThis-justbestrong.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-serving-all-the-sauce-winning.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-goals-winning.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-my-kind-of-crazy-besties-1.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/YouveGotThis-justbestrong.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-serving-all-the-sauce-winning.jpg"></div>
                        <div class="swiper-slide"><img class="img-fluid" id="img-test" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/youre-goals-winning.jpg"></div>
                    </div>
                </div>
                <a href="#step-2" type="button" class="btn btn-warning" id="button-next" style="font-size : 20px;">Next</a>
            </div>
        </div>
        <div class="row setup-content" id="step-32">
            <div class="step-2-form">
                <h2 class="step2-heading">Enter all the details</h2>
                <div id="form-input">
                    <div class="input-group">
                        <input class="input--style-3 change-font" type="text" id="message-to-text">
                        <span class="floating-label" id="form-label">Dear:</span>
                    </div>
                    <div class="input-group">
                        <input class="input--style-3 change-font" type="text" id="message-from-text">
                        <span class="floating-label" id="form-label">From:</span>
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
            <a href="#step-3" type="button" class="btn btn-warning " id="skip-btn">Skip</a>
            <button type="button" class="btn btn-warning " id="personalised-next">Next</button>

        </div>
        <div class="row setup-content" id="step-33">
            <!-- <div class="row" id="step-3">  -->
            <h1>Download to share, or click on an icon to share your message on social</h1>
            <div class="col-md-12 justify-content-center d-flex" id="download">
                
                <a href="<?php echo $msg->message_url;?>" class="btn btn-ps" id="btn-download" download>Download to share</a>
            </div>
            <div class='social-icons'>
                <div class='icon social fb'><i class='fa fa-facebook'></i></div>
                <div class='icon social tw' id="twitter-btn"><i class='fa fa-twitter'></i></div>
                <div class='icon social in'><i class='fa fa-whatsapp'></i></div>
            </div>
        </div>

    </div>
</div>
<?php }?>
</div>

<!-- </div> -->
<script type="text/javascript">
    jQuery(document).ready(function() {

        $('#message-from-text').keyup(function() {
            var from = this.value;
            $('.message-from').text(from);
        });

        $('#message-to-text').keyup(function() {
            var to = this.value;
            $('.message-to').text(to);
        });

        var galleryThumbs = new Swiper('.gallery-thumbs', {
            spaceBetween: 10,
            slidesPerView: 4,
            freeMode: true,
            watchSlidesVisibility: true,
            scrollContainer: false,

            centeredSlides: true,
            scrollbar: {
                el: '.swiper-pagination',
                clickable: true,
            },
        });
        var galleryTop = new Swiper('.gallery-top', {
            spaceBetween: 10,

            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            thumbs: {
                swiper: galleryThumbs
            }

        });

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

        // DEMO ONLY //
        $('#personalised-next').on('click', function(e) {
            $('ul.setup-panel li:eq(1)').removeClass('disabled');
            $('ul.setup-panel li a[href="#step-33"]').trigger('click');
        })

        $("#change-font").change(function() {
            $('.change-font').css("font-family", $(this).val());

        });

        /* $('#twitter-btn').click(function() {
            window.location.href = "#step-3";
            console.log('you clicked me');

        }); */
        /* $(document).ready(function() {
            alert($('#active-img').attr('src'));

        });
 */

    $('#personalised-next').click(function(){
        
        var canvas = $("#personalised-canvas");
        var context = canvas.getContext("2d");
        var imageObj = new Image();
        var text_to = $('#message-to-text').value;
        alert(text_to);
        imageObj.onload = function(){
            context.drawImage(imageObj, 10, 10);
            context.font = "40pt Calibri";
            context.fillText(text_to, 20, 20);
        };
        imageObj.src = $('.swiper-slide-active img').attr('src'); 
    });
        

    });

</script>
</div>

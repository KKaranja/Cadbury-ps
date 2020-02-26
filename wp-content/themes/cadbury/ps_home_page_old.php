<?php
/*
 * Template Name: Home Page
 * Template Post Type: post, page, product
 */
  
 get_header();
?>
<header class="header">
    <div class="element-display">
        <!-- <button type="button" id="sidebarCollapse" > -->
            <!-- <i class="fas fa-align-justify"></i> -->
            <div id="sidebarCollapse">
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-justify" class="svg-inline--fa fa-align-justify fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M432 416H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
            </svg>
            </div>
        <!-- </button> -->
        <img class="logo" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/cadbury-logo.png">
    </div>
</header>
<nav id="sidebar">
    <div class="menu">
        <ul class="sidebar-list" style="list-style-type:none">
            <li>
                <label for="all-elements" style="color:#542f84;" id="labels"><strong>All</strong></label>
                <input type="radio" name="radSize" id="all-elements" value="small" checked="true"/>
            </li>
            <li>
                <label for="be-strong" style="color:#62be71;" id="labels"><strong>#JustBeStrong</strong></label>
                <input type="radio" name="radSize" id="be-strong" value="small" />
            </li>
            <li>
                <label for="winning" style="color:#3c62a5;" id="labels"><strong>#Winning</strong></label>
                <input type="radio" name="radSize" id="winning" value="small" />
            </li>
            <li>
                <label for="be-my-bae" style="color:#6b5d9c;" id="labels"><strong>Be My Bae</strong></label>
                <input type="radio" name="radSize" id="be-my-bae" value="small" />
            </li>
            <li>
                <label for="big-hugs" style="color:#f173ac;" id="labels"><strong>Big Hugs</strong></label>
                <input type="radio" name="radSize" id="big-hugs" value="small" />
            </li>
            <li>
                <label for="happy-b-day" class="size-small" style="color:#f15641;" id="labels"><strong>Happy Bday</strong></label>
                <input type="radio" name="radSize" id="happy-b-day" value="small" />
            </li>
            <li>
                <label for="sorry" style="color:#f58220;" id="labels"><strong>I'm Sorry</strong></label>
                <input type="radio" name="radSize" id="sorry" value="small" />
            </li>
            <li>
                <label for="awesome" style="color:#07afef;" id="labels"><strong>You're Awesome</strong></label>
                <input type="radio" name="radSize" id="awesome" value="small" />
            </li>
            <li>
                <label for="love-you" style="color:#e04c6f;" id="labels"><strong>I Love You</strong></label>
                <input type="radio" name="radSize" id="love-you"  />
            </li>
            <li>
                <label for="thanks" style="color:#63b294;" id="labels"><strong>Thanks</strong></label>
                <input type="radio" name="radSize" id="thanks" value="small" />
            </li>
            <li>
                <label for="besties" style="color:#8dc63f;" id="labels"><strong>Besties</strong></label>
                <input type="radio" name="radSize" id="besties" value="small" />
            </li>
        </ul>

        <ul class="sidenav-page-links" style="list-style-type:none">
            <li>
                <a href=""><strong>Not sure what to do</strong></a>
            </li>
            <li>
                <a href=""><strong>Cookie policy</strong></a>
            </li>
            <li>
                <a href=""><strong>Privacy policy</strong></a>
            </li>
            <li>
                <a href=""><strong>Terms and conditions</strong></a>
            </li>
        </ul>
    </div>
</nav>
<section class="site-section" id="portfolio-section">

    <div class="container">

        <div class="row mb-3">
            <div class="col-12 text-center" data-aos="fade">
                <h2 class="section-title mb-3">Portfolio</h2>
            </div>
        </div>

        <div class="row justify-content-center mb-5" data-aos="fade-up">
            <div id="filters" class="filters text-center button-group col-md-7">
                <button class="btn btn-primary active" data-filter="*">All</button>
                <button class="btn btn-primary" data-filter=".1">#JustBeStrong</button>
                <button class="btn btn-primary" data-filter=".2">#Winning</button>
                <button class="btn btn-primary" data-filter=".3">Be My Bae</button>
            </div>
        </div>
<!-- add_query_arg( $param1, $param2, $old_query_or_uri ); -->
        <div id="posts" class="row no-gutter">
            <?php 
        		global $wpdb;
        		$messages = $wpdb->get_results("SELECT * FROM wp_messages");

        		foreach ($messages as $key => $message) {?>
            <div class="item <?php echo $message->filter_id; if($message->category_id == 1 )
	        				{echo ' col-xl-2';} else{echo ' col-xl-4';}?> mb-2">
                <a href="download-page?fil=<?php echo $message->id;?>&cat=<?php echo $message->category_id;?>" class="item-wrap">
                    <img class="img-fluid" src="<?php echo $message->message_url?>">
                </a>
            </div>
            <?php }?>
        </div>
    </div>

</section>

<script type="text/javascript">
    var siteIstotope = function() {
        /* activate jquery isotope */
        var $container = $('#posts').isotope({
            itemSelector: '.item',
            isFitWidth: true
        });

        $(window).resize(function() {
            $container.isotope({
                columnWidth: '.col-sm-3'
            });
        });

        $container.isotope({
            filter: '*'
        });

        // filter items on button click
        $('#filters').on('click', 'button', function() {
            var filterValue = $(this).attr('data-filter');
            $container.isotope({
                filter: filterValue
            });
            $('#filters button').removeClass('active');
            $(this).addClass('active');
        });
    }

    siteIstotope();

    $(document).ready(function($) {
        $('#sidebarCollapse').click(function() {

            $('#sidebar').toggle();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });
    });

</script>
<?php
get_footer();

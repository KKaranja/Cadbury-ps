<?php
/*
 * Template Name: Home Page
 * Template Post Type: post, page, product
 */
  get_header();
?>

<header class="header">
    <div class="element-display">
        <button type="button" id="sidebarCollapse" class="btn-toggle">
            <!-- <i class="fas fa-align-justify"></i> -->
        <!-- <div id="sidebarCollapse"> -->
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-justify" class="svg-inline--fa fa-align-justify fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                <path fill="currentColor" d="M432 416H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
            </svg>
        <!-- </div> -->
        </button>
        <!-- <a href=""> -->
            <img class="logo" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/cadbury-logo.png">
        <!-- </a> -->
        
    </div>
</header>
<nav id="sidebar">
    <div class="menu">
        <ul class="sidebar-list" style="list-style-type:none" id="filters">
            <li>
                <label for="all-elements" style="color:#542f84;"><strong>All</strong></label>
                <input type="radio" name="radSize" id="all-elements" value="small" class="filters" data-filter="*" checked/>
            </li>
            <li>
                <label for="be-strong" style="color:#62be71;"><strong>Cha muhimu ni uhai! </strong></label>
                <input type="radio" name="radSize" id="be-strong" value="small" data-filter=".1" class="filters"/>
            </li>
            <li>
                <label for="winning" style="color:#3c62a5;"><strong>Cheers baba! </strong></label>
                <input type="radio" name="radSize" id="winning" value="small" data-filter=".2" class="filters"/>
            </li>
            <li>
                <label for="be-my-bae" style="color:#6b5d9c;"><strong>Me I Love You </strong></label>
                <input type="radio" name="radSize" id="be-my-bae" value="small" data-filter=".3" class="filters"/>
            </li>
            <li>
                <label for="big-hugs" style="color:#f173ac;"><strong>But si ni life! </strong></label>
                <input type="radio" name="radSize" id="big-hugs" value="small" data-filter=".4" class="filters"/>
            </li>
            <li>
                <label for="happy-b-day" class="size-small" style="color:#f15641;"><strong>Form ni gani? </strong></label>
                <input type="radio" name="radSize" id="happy-b-day" value="small" data-filter=".5" class="filters"/>
            </li>
            <li>
                <label for="sorry" style="color:#f58220;"><strong>Pole</strong></label>
                <input type="radio" name="radSize" id="sorry" value="small" data-filter=".6" class="filters"/>
            </li>
            <li>
                <label for="awesome" style="color:#07afef;"><strong>Uko tu sawa! </strong></label>
                <input type="radio" name="radSize" id="awesome" value="small" data-filter=".7" class="filters"/>
            </li>
            <li>
                <label for="love-you" style="color:#e04c6f;"><strong>Nakufeel!</strong></label>
                <input type="radio" name="radSize" id="love-you" value="small" data-filter=".8" class="filters"/>
            </li>
            <li>
                <label for="thanks" style="color:#63b294;"><strong>Hapo sawa!</strong></label>
                <input type="radio" name="radSize" id="thanks" value="small" data-filter=".9" class="filters"/>
            </li>
            <li>
                <label for="besties" style="color:#8dc63f;"><strong>You’re goals!</strong></label>
                <input type="radio" name="radSize" id="besties" value="small" data-filter=".10" class="filters"/>
            </li>
        </ul>

        <!-- <ul class="sidenav-page-links" style="list-style-type:none">
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
        </ul> -->
    </div>
</nav>

<div class="col-sm-12 site-section" id="portfolio-section">
	
	<div class="grid" id="posts">
		<?php  
			global $wpdb;
			$messages = $wpdb->get_results("SELECT * FROM wp_messages ORDER BY RAND()"); ?>

			<?php foreach ($messages as $key => $message):?>
				<div class="grid-item item <?php echo $message->filter_id; echo $message->category_id==1?" ":" grid-item--width2"; ?>">
					<a href="download-page?fil=<?php echo $message->id;?>&cat=<?php echo $message->category_id;?>" class="item-wrap">
						<img class="img-fluid" src="<?php echo $message->message_url?>">
					</a>
				</div>
			<?php endforeach; ?>
		
	  <!--<div class="grid-item">...</div>
	  <div class="grid-item grid-item--width2">...</div>
	  <div class="grid-item">...</div>-->
	</div>
	
</div>

<script type="text/javascript">
	
    var siteIstotope = function() {
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
        // $('.filters').on('click', 'button', function() {
        //     var filterValue = $(this).attr('data-filter');
        //     $container.isotope({
        //         filter: filterValue
        //     });
        //     $('#filters button').removeClass('active');
        //     $(this).addClass('active');
        // });
        $('.filters').change(function() {
            if(this.checked){
                var filterValue = $(this).attr('data-filter');
                $container.isotope({
                    filter: filterValue
                });
            }
            
        });
    }

    $(document).ready(function($) {
        siteIstotope();
        $('#sidebarCollapse').click(function() {

            $('#sidebar').toggle();
            $('.collapse.in').toggleClass('in');
            $('a[aria-expanded=true]').attr('aria-expanded', 'false');
        });

        if (window.matchMedia("(min-width: 480px)").matches) {
            $('.grid').masonry({
              // options
              itemSelector: '.grid-item',
              columnWidth: 200,
              isFitWidth: true
            });
            setTimeout(function() {
                $('.grid').masonry({
                  // options
                  itemSelector: '.grid-item',
                  columnWidth: 200,
                  isFitWidth: true
                });
                // $('.grid').masonry();
            }, 1000);
            setTimeout(function() {
                $('.grid').masonry({
                  itemSelector: '.grid-item',
                  columnWidth: 200,
                  isFitWidth: true
                });
            }, 2000);
            setTimeout(function() {
                $('.grid').masonry({
                  itemSelector: '.grid-item',
                  columnWidth: 200,
                  isFitWidth: true
                });
            }, 5000);
            setTimeout(function() {
                $('.grid').masonry({
                  itemSelector: '.grid-item',
                  columnWidth: 200,
                  isFitWidth: true
                });
            }, 7500);
            setTimeout(function() {
                $('.grid').masonry({
                  itemSelector: '.grid-item',
                  columnWidth: 200,
                  isFitWidth: true
                });
            }, 10000);
        }
        
    });

</script>
<?php
get_footer();

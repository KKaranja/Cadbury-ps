<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>

<body>
    <header class="header">
        <div class="container element-display">
        <button type="button" id="sidebarCollapse" class="btn-toggle">
            <i class="fas fa-align-justify"></i>
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="align-justify" class="svg-inline--fa fa-align-justify fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M432 416H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path></svg>
            </button>
            <img class="logo" src="http://localhost/Cadbury-ps/wp-content/uploads/2020/01/cadbury-logo.png">
        </div>
    </header>
    <!-- Sidebar  -->
    <nav id="sidebar" style="list-style-type:none">
    <div class="menu">
        <ul class="sidebar-list">
            <li>
                <label for="all-elements" style="color:#542f84;"><strong>All</strong></label>
                <input type="radio" name="radSize" id="all-elements" value="small" />
            </li>
            <li>
                <label for="be-strong" style="color:#62be71;"><strong>#JustBeStrong</strong></label>
                <input type="radio" name="radSize" id="be-strong" value="small" />
            </li>
            <li>
                <label for="winning" style="color:#3c62a5;"><strong>#Winning</strong></label>
                <input type="radio" name="radSize" id="winning" value="small" />
            </li>
            <li>
                <label for="be-my-bae" style="color:#6b5d9c;"><strong>Be My Bae</strong></label>
                <input type="radio" name="radSize" id="be-my-bae" value="small" />
            </li>
            <li>
                <label for="big-hugs" style="color:#f173ac;"><strong>Big Hugs</strong></label>
                <input type="radio" name="radSize" id="big-hugs" value="small" />
            </li>
            <li>
                <label for="happy-b-day" class="size-small" style="color:#f15641;"><strong>Happy Bday</strong></label>
                <input type="radio" name="radSize" id="happy-b-day" value="small" />
            </li>
            <li>
                <label for="sorry" style="color:#f58220;"><strong>I'm Sorry</strong></label>
                <input type="radio" name="radSize" id="sorry" value="small" />
            </li>
            <li>
                <label for="awesome" style="color:#07afef;"><strong>You're Awesome</strong></label>
                <input type="radio" name="radSize" id="awesome" value="small" />
            </li>
            <li>
                <label for="love-you" style="color:#e04c6f;"><strong>I Love You</strong></label>
                <input type="radio" name="radSize" id="love-you" value="small" />
            </li>
            <li>
                <label for="thanks" style="color:#63b294;"><strong>Thanks</strong></label>
                <input type="radio" name="radSize" id="thanks" value="small" />
            </li>
            <li>
                <label for="besties" style="color:#8dc63f;"><strong>Besties</strong></label>
                <input type="radio" name="radSize" id="besties" value="small" />
            </li>
        </ul>

        <ul class="sidenav-page-links" style="list-style-type:none">
            <li>
                <a href="" ><strong>Not sure what to do</strong></a>
            </li>
            <li>
                <a href=""><strong>Cookie policy</strong></a>
            </li>
            <li>
                <a href="" ><strong>Privacy policy</strong></a>
            </li>
            <li>
                <a href=""><strong>Terms and conditions</strong></a>
            </li>
        </ul>
        </div>
    </nav>
    <script type="text/javascript">
        jQuery(document).ready(function($) {
            $('#sidebarCollapse').click(function() {

                $('#sidebar').toggle();
                $('.collapse.in').toggleClass('in');
                $('a[aria-expanded=true]').attr('aria-expanded', 'false');
            });
        });

    </script>

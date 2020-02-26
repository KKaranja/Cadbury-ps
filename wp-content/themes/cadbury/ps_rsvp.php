<?php
/*
 * Template Name: RSVP
 * Template Post Type: post, page, product
 */
global $wpdb;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$user_name = $_POST["user_name"];
	$user_email = $_POST["user_email"];
	$page_url = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

	$url_exists = $wpdb->get_results("SELECT * FROM wp_tickets WHERE ticket_url = '$page_url'");
	foreach ($url_exists as $key => $url_exist) {
		if(empty($url_exist->user_name)){
			if($wpdb->update("wp_tickets", array('user_name'=>$user_name, 'user_email'=>$user_email), array('ticket_url'=>$page_url))){

				$subject = "Ticket Success";
			    $body = '
			    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
					<html xmlns="http://www.w3.org/1999/xhtml">
						<body width="900" style="width: 100%;">
							<table width="600">
								<tr>
									<td width="600">
										<p>Dear '.$user_name.',</p>
										<p>Find below your RSVP code. Please note that this code admits one person and you need to keep it safe.</p>
										<p>'. $url_exist->rsvp_code .'</p>
									</td>
								</tr>
							</table>
						</body>
					</html>';		
				$headers = "From: support@isobarkenya.com \r\n";
			    $headers .= "Content-Type: text/html; charset=ISO-8859-1\r\n";
			    if(mail($user_email, $subject, $body, $headers)){
			    	header("Location: http://cadbury.co.ke/ps/ps/ticket-success/");
				// header("Location: http://localhost/cubi/cadbury-ps/ticket-success/");
			    }		

			} else {
				
				header("Location: http://cadbury.co.ke/ps/ps/ticket-fail/");
				// header("Location: http://localhost/cubi/cadbury-ps/ticket-fail/");
			}
		} else {
			header("Location: http://cadbury.co.ke/ps/ps/ticket-fail/");
			// header("Location: http://localhost/cubi/cadbury-ps/ticket-fail/");
		}
	}
}
get_header();
?>
<header class="header">
    <div class="element-display">
        <a href="/ps/ps/">
        	<img src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/02/home-7-16.png" class="img-fluid" id="home-img">
        </a>
		<img class="logo" src="http://cadbury.co.ke/ps/ps/wp-content/uploads/2020/01/cadbury-logo.png">
    </div>
</header>

<div class="wrapper wrapper-2">
	<div class="container">
		<div class="row">
			<div class="col-md-7">
				 <!-- <?php
					echo do_shortcode(
				    	'[contact-form-7 id="37" title="RSVP Form"]'
					);
				?> -->
				<form method="POST" action="">
					<div class="form-group">
					    <label for="user_name">Your Name</label>
					    <input type="text" class="form-control" id="user_name" name="user_name" aria-describedby="UserName" required>
				  	</div>
					<div class="form-group">
					    <label for="user_email">Email address</label>
					    <input type="email" class="form-control" id="user_email" name="user_email" aria-describedby="EmailAddress" required>

					    <input type="hidden" name="page_url" class="page_url">
					</div>
					<button type="submit" id="rsvp-submit" class="btn ps-next-btn">RSVP</button>
				</form>
			</div>
		</div>
	</div>
</div>
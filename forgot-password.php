<?php 
	$page="forgot-password";
	include("header.php"); 
?>


<div class="page-header-2">
	<div class="container">
		<h3>Recover Account</h3>
    </div>
</div>


<!-- CONTENT -->
<div class="wpb_column vc_column_container push" >
	<div class="wpb_wrapper" >

		<div class="row">
			<div class="col-md-4"></div>
	
			<div class="col-md-4" style="padding: 1% 0%;">
						
				<!-- signup form -->
				<div class="">  
					<form class="contactz" method="post" action="" enctype="multipart/form-data">

						<h3 align="center">FORGOT PASSWORD</h3>

						<h4><?php if(isset($response)){ echo $response;} ?></h4>
						
						<fieldset>
							<input  type="text" tabindex="1" required name="Email" placeholder="Enter Email used during registration">
						</fieldset>

						<fieldset>
							<button style="width: 100%; background-color: blue; color: #fff;" type="submit" id="contact-submit" data-submit="...Sending">RECOVER MY ACCOUNT</button>
							<input type="hidden" name="INSERT" value="3">
						</fieldset>

					</form>
				</div>

			</div>

			<div class="col-md-4"></div>
			<!-- /SIGNUP -->

		</div>

	</div>
</div>
<!-- /CONTENT -->


<?php include("footer.php"); ?>
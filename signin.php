<?php 
$page = "signin";
include("header.php");

?>
<body class="">
<div class="pushdown">
	<div class="container">
		<div class="row">
			<div class="col-sm-6 col-sm-offset-3">
				
				<form class="contactz" action="" onsubmit="return signInF(this);" method="POST" >

					<h3 align="center" class="reg">SIGN IN</h3>

					<h4><?php if(isset($response)){ echo $response;} ?></h4>

					<div class="form-group">
						<label>Username</label>
						<input type="text" name="UnameOrEmail" class="form-control" placeholder="Enter Username or Email">
					</div>
					<div class="form-group">
						<label>Password</label>
						<input type="password" name="Password" class="form-control" placeholder="Enter Password">
                        <strong class=""><a class="reg" href="forgot-password">Forgot Password?</a></strong>
					</div>
					<div class="form-group" align="right">
						<input style="width: 100%" type="submit" class="btn btn-success btn-flat" name="signIn" value="SIGNIN">
						<input type="hidden" name="INSERT" value="2">
					</div>

					<div>
						<p align="left">
							Not yet registered ? <br>
							<a class="reg" href="register">Register here</a>
							<br>
							Are you an Educational Association? <br>
							<a class="reg" href="#register">Contact P: +2348028712378.</a>
						</p>
					</div>
				</form>
			
			</div><!-- COL-SM-6 -->
		</div>
	</div>
</div><!-- PUSHDOWN -->

<?php include ("footer.php"); ?>
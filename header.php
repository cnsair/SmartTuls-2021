<?php include("appfunctions/appfunctions.php");

	$conn = new crud($connect);
	// strip tags to avoid breaking any html

	if (isset($_GET["ID"]) && $_GET["ID"] !="") {
			$id = $_GET["ID"];

		$string = $conn->AnyContent("Description", "broadcast", "ID", $_GET["ID"]);
		$string = strip_tags($string);

		if (strlen($string) > 300) {
		    // truncate string
		    $stringCut = substr($string, 0, 300);
		    // make sure it ends in a word so assassinate doesn't become ass...
		    $string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
		}
		$og_string = $string;
		$face_img = $conn->AnyContent("Picture", "broadcast", "ID", $_GET["ID"]);
		$face_vid = $conn->AnyContent("VideoAudio", "broadcast", "ID", $_GET["ID"]);
		$face_title = $conn->AnyContent("Topic", "broadcast", "ID", $_GET["ID"]);
		$og_title = substr($conn->AnyContent("OgTopic", "broadcast", "ID", $_GET["ID"]), 0, 30); 
	}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	  (adsbygoogle = window.adsbygoogle || []).push({
	    google_ad_client: "ca-pub-3650479645382463",
	    enable_page_level_ads: true
	  });
	</script>
	<meta charset="utf-8">
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" > 
	<meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="HandheldFriendly" content="true">
	<link rel="alternate" hreflang="en-us" href="https://smarttuls.com/" />
	<title> SmartTuls - Learn and Connect </title>
	<meta name="author" content="Nwachukwu Chisom Samson- CNS, Joshua Sy-Apoe, CNScomputers, SmartTuls IT Team">
	<meta name="smarttuls" content="schools registration and communication">
	<meta name="attribute" content="Goal getter,Best Education Platform">
	<meta name="description" content="Connecting Schools and organisations for a better society. An online Educational web-application and system that manages every type and kind of school be it Secular, Professional, Religious etc. Smarttuls also enables Agencies and Associations to manage and control entities under them.">
	<meta name="keywords" content="education,schools,dashboard,web-application,online lecture,school directory,Learn and Connect,News Feeds,Professionals,Mentors and Advisors">

	<!-- For Facebook - Open Graph meta tags -->
	<?php 
	if (isset($_GET["ID"]) && $_GET["ID"] !="") { ?>

	<!-- For Images - Open Graph meta tags -->
	<meta property='fb:app_id' content='337293396670223'/>
	<meta property="og:site_name" content="SmartTuls"/>
	<meta property="og:type" content="website" />
	<meta property="og:title" content="<?php echo $face_title; ?>" />
	<meta property="og:description" content="<?php echo $og_string;?>" />
	<meta name="twitter:card" content="summary" />
	<meta name="twitter:description" content="<?php echo $og_string;?>" />
	<meta name="twitter:title" content="<?php echo $face_title; ?>" />

    <?php 
    	if(isset($face_img) && $face_img !="") { ?>
			<meta property="og:image:url" content="https://www.smarttuls.com/read_feeds?ID=<?php echo $_GET['ID']; ?>&topic=<?php echo $og_title; ?>" >
			<meta property="og:image" content="https://www.smarttuls.com/<?php echo "broadcastpics/".$face_img; ?>" />
			<meta name="twitter:image" content="https://www.smarttuls.com/<?php echo "broadcastpics/".$face_img; ?>" />
			<meta property="og:image:width" content="400">
			<meta property="og:image:height" content="400">
		<?php } else {
			echo "";//echo nothing
		}
    ?>
	
	<?php 
    	if(isset($face_vid) && $face_vid !="") { ?>
		<!-- For Videos - Open Graph meta tags -->
		<meta property="og:video:url" content="https://www.smarttuls.com/read_feeds?ID=<?php echo $_GET['ID']; ?>&topic=<?php echo $og_title; ?>" />
		<meta property="og:video" content="https://www.smarttuls.com/<?php echo "vid_and_aud/".$face_vid; ?>" />
		<meta property="og:video:type" content="application/x-shockwave-flash" />
		<meta property="og:video:width" content="400" />
		<meta property="og:video:height" content="400" />
	<?php } else {
			echo "";//echo nothing
		}
    ?>

    <?php } ?>
	<!-- Main CSS links -->
	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap-theme.css">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/css/myowncustom.css"> -->
	<link rel="stylesheet" type="text/css" href="assets/css/jquery-ui.css">
	<link rel="stylesheet" type="text/css" href="assets/font-awesome-4.7.0/css/font-awesome.css">
	<link rel="stylesheet" type="text/css" href="assets/css/jquery.dataTables.min.css">
	<link rel="shortcut icon" href="assets/icons/smarttuls-ico2.png">
	<link rel="stylesheet" type="text/css" href="assets/css/animate.css">
	<!-- <link rel="stylesheet" type="text/css" href="assets/summernote/summernote.min.css"> -->

    <!-- Font-awesome -->
    <!-- <link rel="stylesheet" type="text/css" href="fonts/font-awesome/css/font-awesome.css"> -->

    <!-- Slider
    ================================================== -->
    <link href="assets/css/owl.carousel.css" rel="stylesheet" media="screen">
    <link href="assets/css/owl.theme.css" rel="stylesheet" media="screen">

    <!-- STYLE
    ================================================== -->
    <link rel="stylesheet" type="text/css"  href="assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="assets/css/responsive.css">

    <!-- CSS STYLE-->
    <!-- <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="screen" /> -->

    <!-- THE PREVIEW STYLE SHEETS -->
    <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css" media="screen" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="css/jquery-ui.css" media="screen" /> -->
    <!-- <script type="text/javascript" src="assets/js/jquery.1.11.1.js"></script> -->

    <!-- THE PREVIEW STYLE SHEETS -->
    <link rel="stylesheet" type="text/css" href="assets/css/navstylechange.css" media="screen" />
    <!-- <link rel="stylesheet" type="text/css" href="css/noneed.css" media="screen" /> -->


    <!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.plugins.min.js"></script>
    <script type="text/javascript" src="assets/rs-plugin/js/jquery.themepunch.revolution.min.js"></script>

	<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="assets/rs-plugin/css/settings.css" media="screen" />

	<script type="text/javascript" src="assets/js/modernizr.custom.js"></script>
	
	<!-- SWEET ALERT CSS SETTINGS -->
	<!-- <link href="assets/css/sweetalert-copy.css" rel="stylesheet">  -->
	<!-- <link href="assets/css/main.07a59de7b920cd76b874.css" rel="stylesheet"> -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css" integrity="sha512-hwwdtOTYkQwW2sedIsbuP1h0mWeJe/hFOfsvNKpRB3CkRxq8EW7QMheec1Sgd8prYxGm1OM9OZcGW7/GUud5Fw==" crossorigin="anonymous" /> -->

	<!-- CSS CUSTOM SETTINGS SETTINGS -->
	<link rel="stylesheet" type="text/css" href="assets/css/custom.css" />

	<style>
		 /* select{
			color: #000;
			font-size: 14px;
			background-color: red;
		} */

		/* .modal-backdrop {
			z-index: -2;
		}  */
	</style>

	<script>
	  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
	  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
	  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
	  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

	  ga('create', 'UA-98271659-1', 'auto');
	  ga('send', 'pageview');
	</script>
</head>

<!-- The NAVBAR div starts here -->
<header>
	<div>
		<div class="container">
			<nav id="tf-menu" class="navbar navbar-default navbar-fixed-top navbar-inverse" style="opacity:0.9" role="navigation">
				<div class="col-sm-12">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#example-nav-collapse">
							<span class="sr-only">Toggle navigations</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
					</div>

					<div class="collapse navbar-collapse" id="example-nav-collapse">
						<ul class="nav navbar-nav head1">
							<li class="animated headShake"><a href="index"><img class="logo" src="assets/icons/smart-logo5.png"></a></li>
							<?php if(isset($page) && $page == "home") { ?>
					            <li><a href="#tf-about" class="page-scroll">Schools</a></li>
					            <li><a href="#tf-team" class="page-scroll">Partners & Associations</a></li>
					            <li><a href="#tf-contact" class="page-scroll">Contact Us</a></li> 
					            <li><a href="blog" class="page-scroll">Blog</a></li>
				            <?php } ?>
				             <!-- Collect the nav links, forms, and other content for toggling -->
							<li><a class="head1" href="Javascript:history.back();">&laquo;&laquo; Back</a></li>
						</ul>
						<form action="searchresult" class="head1 navbar-form navbar-right" role="search" method="GET">
							<div class="form-group">
								<input type="text" size="30" name="s" class="form-control" placeholder="Search School Using Name, State, City etc. ">
								<input type="hidden" name="startsearch" value="1">
							</div>
							<button type="submit" class="btn btn-warning">search</button>
						</form>
					</div>
					<div class="clearfix"></div>
					<div class="welcome" align="right">
							<span><?php if(isset($_SESSION["regname"])) { echo $_SESSION["regname"]; } else { echo ""; }?> <?php if(isset($_SESSION["firstname"])) { echo $_SESSION["firstname"]; } else { echo ""; } ?>
							<?php echo " "; ?>
						<span style="color: #FF9900" >
						
							<?php if(isset($_SESSION["accesslevel"])) { 

								switch ($_SESSION["accesslevel"]) {
									case 1:
										echo "<a class='reg' href=' admin/pages/dashboard?main&tuls=home'>My Dashboard </a>";
										break;				
									case 2:
										echo "<a class='reg' href='deputyadmin/dashboard'>My Dashboard</a>";
										break;
									case 3:
										echo "<a class='reg' href='school/dashboard'>My Dashboard</a>";
										break;
									case 4:
										echo "<a class='reg' href='teachingstaff/dashboard'>My Dashboard</a>";
										break;
									case 5:
										echo "<a class='reg' href='nonteachingstaff/dashboard'>My Dashboard</a>";
										break;
									case 6:
										echo "<a class='reg' #FF9900' href='students/dashboard'>My Dashboard</a>";
										break;
									case 7:
										echo "<a class='reg' #FF9900' href='parents/dashboard'>My Dashboard</a>";
										break;
									case 8:
										echo "<a class='reg' href='mentoradvisor/dashboard'>My Dashboard</a>";
										break;
									case 9:
										echo "<a class='reg' href='NAPS/dashboard'>My Dashboard</a>";
										break;
									case 10:
										echo "<a class='reg' href='ACEP/dashboard'>My Dashboard</a>";
										break;
									case 11:
										echo "<a class='reg' href='association/dashboard'>My Dashboard</a>";
										break;
									case 12:
										echo "<a class='reg' href='state-ass/dashboard'>My Dashboard</a>";
										break;
									case 13:
										echo "<a class='reg' href='post-ass/dashboard'>My Dashboard</a>";
										break;

									default:
										# code...
										break;
								}	
							} 			
							echo " ". date("Y-m-d | h:i:sa");
						?></span>
						<?php 
                        	//if(!isset($_SESSION["duid"]) || $_SESSION["duid"] =="")
                        	if((!isset($_SESSION["accesslevel"])) || $_SESSION["accesslevel"] =="")

                        	{ 
                        		if(!isset($page) || $page !== "signin" ) { ?>

									<div style="margin-top:-30px;" class="hidden-sm hidden-xs">
										 <form action="" method="POST" >
									        <div class="form-group">    
												<div class=""><?php if(isset($response)){ echo $response;} ?></div> 
									            <div class="col-md-3">
									                <input type="text" name="UnameOrEmail" class="form-control" placeholder="Username or Email">
									             </div>
									            <div class="col-md-3">
									                <input type="password" name="Password" class="form-control" placeholder="Enter Password">
									            </div>
									        </div>
									           
									        <div class="form-group col-md-3" align="left">
									        	<div style="float:left">
										            <input type="submit" name="Submit" class="btn btn-success" value="SIGNIN">
										            <input type="hidden" name="INSERT" value="2">
									            </div>
									           <div style="float:left">
						                            Not yet registered ?
						                            <a class="reg" href="register">Register here</a><br/>
						                            Forgot your password ? <a class="reg" href="forgot-password">click here</a>
						                        </div>
									        </div> 
									    </form>
								    </div>
								    <div class="visible-sm visible-xs">
								    	<a href="signin" class="reg">SIGN IN</a> | <a href="register" class="reg">REGISTER</a>
								    </div>
								  <?php } else 
								  			{ echo "";//do nothing
								  			 } ?>

					    <?php }
					    else {
					    	echo "";//show nothing
					    	} ?>
					</div>
				</div>
			</nav>
		</div>
	</div>
	
</header>
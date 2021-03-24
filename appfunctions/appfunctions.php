<?php 

/*
=====================================================================
START SESSION
=====================================================================
*/

if(!isset($_SESSION))
{
	session_start();
}

//================================================
//				reCAPTCHA KEYS
//================================================

//FOR ONLINE
// $secretKey = "6Lc7V90ZAAAAALcijj9V-MZDNk73ZYW40vI3Uzcw";
// $siteKey = "6Lc7V90ZAAAAALMHx0B57jRl_LLQEgH8gCjH8T0A";

//FOR LOCALHOST
$secretKey = "6LeIxAcTAAAAAGG-vFI1TnRWxMZNFuojJ4WifJWe";
$siteKey = "6LeIxAcTAAAAAJcZVRqyHh71UMIEGNQ_MXjiZKhI";

// spl_autoload_register(array('Manage', 'autoload'));
//============================================================================

spl_autoload_register(function($class) {
    include 'classes/' . $class . '.php';
});

//===============================================================
//		Testing autoload ends here
//================================================================

//===============================================================
//		PHPMailer starts here
//================================================================

// include('netspring_mailer/PHPMailerAutoload.php');
include('netspring_mailer/class.phpmailer.php');
include('netspring_mailer/class.pop3.php');
include('netspring_mailer/class.smtp.php');

/*
=====================================================================
SET DEFAULT TIMEZONE OFFSET
=====================================================================
*/

// $timezone_offset = +6;
// $add_timezone_diff = time() + ($timezone_offset * 3600);

date_default_timezone_set("Africa/Lagos");

/*
=====================================================================
INSTANTIATE CONNECTION VARIABLE
=====================================================================
*/

$kc = new DB; 
$connect = $kc->getConn();

/*
=====================================================================
GENERAL SETTINGS
=====================================================================
*/
$kc = FetchTableContent("17"); 
$_SESSION["SiteName"] = $kc[0]["SiteName"];
$_SESSION["OfficialEmail"] = $kc[0]["OfficialEmail"];
$_SESSION["OfficialWebsite"] = $kc[0]["OfficialWebsite"];
$_SESSION["Favicon"] = $kc[0]["Favicon"];
$_SESSION["Logo"] = $kc[0]["Logo"];
$_SESSION["HomepageTitle"] = $kc[0]["HomepageTitle"];
$_SESSION["DashboardBackground"] = $kc[0]["DashboardBackground"];
//$_SESSION["HomepageURL"] = $kc[0]["HomepageURL"];

/*
=====================================================================
INSERTIONS
=====================================================================
*/

/*
Insertion List

1. Signup new user
2. Login User
3. Resend activation to user
4. Resend Password
.....
*/ 

	
if(isset($_POST["INSERT"]) && $_POST["INSERT"] !="" )
{
		$crud = new Crud($connect);
		$Timenow = date("Y-m-d H:i:s");

		switch ($_POST["INSERT"]) {

			//signup new user
			case 1:

				$fname = $_POST["Fname"];
				$uname = $_POST["Uname"];
				$email  = $_POST["Email"];
				$pword1 = $_POST["Pword1"];
				$pword2 = $_POST["Pword2"];
				$salt = "smartTulsSalt//009";
				$alpha = $pword1.$salt;
				$pword = md5(sha1($alpha));
				$ipaddress = $_SERVER["REMOTE_ADDR"];
				$checkreg1 = $crud->select("users", "*", "Uname = '$uname' OR Email = '$email' ");

				if($checkreg1 == TRUE)
				{
					 $response = "<div class='alert alert-danger alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! The Username or Email you entered already exists. Please use another.
									</p>
								</div>";
				}
				else
				{//general else
					if( $pword1 != $pword2 ){

							$response = "<div class='alert alert-danger alert-dismissable'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! Passwords don't match. Please try again.
											</p>
										</div>";
					}
					else{
						// Validate reCAPTCHA box 
						if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response']))
						{ 
							// Google reCAPTCHA API secret key 
							$secretKey = $secretKey; 
							 
							// Verify the reCAPTCHA response 
							$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
							 
							// Decode json data 
							$responseData = json_decode($verifyResponse); 
							 
							// If reCAPTCHA response is valid 
							if($responseData->success){ 

								//Put values into an Array
								$cal = $crud->insertWithReturnValue("users", 
								array('Fname'=> $fname,
									'Uname' => $uname, 
									'Email'=>$email,
									'Pword'=>$pword,
									'AllowUser'=>md5('DILYASMEMBERS'),
									'IPAddr'=> $ipaddress
								) );

								if(!$cal)
								{
									$response = "<div class='alert alert-danger alert-dismissable'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<p align='center' style='color: #ff0000 !important;'>
														It looks like something went wrong while submitting your form.<br>
														click<a href='javascript:window.location.reload();' class='btn btn-sm btn-warning'> Here </a> to re-try.
													</p>
												</div>";
								}
								else
								{
									//Add Details to members table
									$crud->insert("members", 
									array( 'UID'=>$cal,
											'Fname' => $fname,
											'Uname' => $uname,
											'Email' => $email,
											'IPAddr'=> $ipaddress,
											'Pword'=>$pword
									));
									
									//Add Details to profile table
									$crud->insert("profile", 
									array( 'UID'=>$cal,
											'Email' => $email
									));

									$response = "<div class='alert alert-success alert-dismissable'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<p align='center' style='color: #1a4b04 !important;' >
														Congratulations! Registration was successful. Click <a href='signin'>here</a> to sign in
													</p>
												</div>";
								}
							}else{ 
								$response = "<div class='alert alert-danger alert-dismissable'>
												<button class='close' data-dismiss='alert'>&times;</button>
												<p align='center' style='color: #ff0000 !important;'>
													Robot verification failed, please try again.
												</p>
											</div>";
							} 
						}else{ 
							$response = "<div class='alert alert-danger alert-dismissable'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<p align='center' style='color: #ff0000 !important;'>
												Please confirm you are human by checking \"I'm not a robox\" box.
											</p>
										</div>";
						} 
					}//else before recaptcha		
				}

			break;


			//login user
			case 2:

				$crud = new Crud($connect);
				$uname_email = $_POST["UnameOrEmail"];
				$pword = $_POST["Password"];
				$salt = "smartTulsSalt//009";
				$alpha = $pword.$salt;
				$pword = md5(sha1($alpha));
				
				$checkuser = $crud->select("users", "*", "(Email = '$uname_email' || Uname = '$uname_email') && Pword='$pword'");
				if(!$checkuser)
				{
					//header("Location: signin?res=$response");
					if($page == "home"){ 

						$response = "<div class='alert alert-danger alert-dismissable col-sm-6'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Invalid username or email and password combination, please click the FORGOT PASSWORD button below if you have forgotten your password.
										</p>
									</div>"; ?>
						
							<script type="text/javascript">
								// Swal.fire({
								// icon: 'error',
								// title: 'Oops...',
								// text: 'Something went wrong!',
								// footer: '<a href>Why do I have this issue?</a>'
								// })
								// swal("Are you sure you want to do this?", {
								// 	buttons: ["Oh noez!", "Aww yiss!"],
								// 	});
								// swal({
								// 	icon: 'error',
								// 	title: "Good job!",
								// 	text: "You clicked the button!",
								// 	icon: "success",
								// 	});
							</script> 
					<?php }
					elseif($page == "signin"){

						$response = "<div class='alert alert-danger alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Invalid username or email and password combination, please click the FORGOT PASSWORD button below if you have forgotten your password.
										</p>
									</div>";

					}
				}
				else
				{
					$_SESSION["duid"] = $checkuser[0]["ID"];
					$_SESSION["email"] = $checkuser[0]["Email"];
					$_SESSION["fname"] = $checkuser[0]["Fname"];
					$_SESSION["sname"] = $checkuser[0]["Sname"];
					$_SESSION["accesslevel"] = $checkuser[0]["AccessLevel"];
					$_SESSION["activestatus"] = $checkuser[0]["ActiveStatus"];
					$_SESSION["photo"] = $checkuser[0]["Photo"];					

					if($checkuser[0]["ActiveStatus"]=="3")
					{
						$response = "<div class='alert alert-danger alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Sorry. You cannot log in because your account has been suspended. Please contact the administrator by sending an email to '".$_SESSION["OfficialEmail"]."'
										</p>
									</div>";
						header("Location: signin");
					}
					else
					{
						if(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "1")
						{
							//$_SESSION["allowuser"] = md5("SuperAdminTuls");
							header("Location: admin/pages/dashboard?main&tuls=home");
						}
						elseif(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "3")
						{
							//$_SESSION["allowuser"] = md5("TulsMEMBERS");
							header("Location: school/pages/dashboard?main&tuls=home");
						}
						else
						{
							header("Location: signin");
						}
					}
				}
				
				break;



			//forgot password
			case 3:
				$crud = new User($connect);

				if(!$crud->ForgotPassword($_POST["Email"]))
				{
					$response = '<div class="alert alert-dismissable alert-danger">
									<button class="close" data-dismiss="alert">&times;</button>
									<h3><span style="color:#a94442;">Sorry </span> </h3>
									It seems your email is not listed in our database or something went wrong during the process of recovering your account. Please try again some other time or try another email address. 
									
								</div>';
				}
				else
				{
					 $recover = $crud->ForgotPassword($_POST["Email"]);
					 $to = $_POST["Email"];
                     $subject = "Recover My DILYASTREND Account";
					 $url = urlencode("www.dilyastrend.com/forgot-password?userconfirm=".$recover."&email=".$_POST["Email"]);
					 $randomz = sha1(md5("forgotpasswordforDILYASTREND"));
					 
					 $message = "
							 <div align='center'>
								<img src='www.dilyastrend.com/assets/images/dilyastrend-logo1.jpg' height='200' alt='DILYASTREND' />
							 </div><br/><br/><br/>

                     		Hello there, <br/>
					        You are having problems signing into your dilyastrend.com account. 
					        In order to recover your account, please click on the link 
					        below where you will be redirected to our website and have your account active again. <br><br>
							<strong>Recovery Link:</strong><br>
							
						   <a href='www.dilyastrend.com/change-password?userconfirm=".$recover."&email=".$_POST["Email"]." '>
						   			www.dilyastrend.com/change-password?userconfirm=".$recover."&email=".$_POST["Email"].$randomz."
					       </a><br><br>

					        If you did not signup on our website or initiate this action, please ignore this email and the 
							details will be removed from our server within 48 hours.<br><br>
							
							Thank you!  
							<br><br>
							<b>DILYASTREND - Breaking the Alabaster</b><br>
							www.dilyastrend.com<br/><br/>

							<hr/>

							<small>
							<p>
								The information contained in this message is intended solely for the individual to whom his email is found above. This message and its contents may contain confidential or privileged information from DILYASTREND. If you are not the intended recipient, you are hereby notified that any disclosure or distribution, is strictly prohibited. If you receive this email in error, please notify DILYASTREND immediately and delete it. DILYASTREND does not accept any liability or responsibility if action is taken in reliance on the contents of this information. Note that all personal emails are not authorized by DILYASTREND.
							</p>
							<a href='www.dilyastrend.com/terms-and-condition'>Terms and conditions</a> &nbsp;&nbsp;
							<a href='www.dilyastrend.com/privacy'>Privacy</a>
							</small>
							";

					SendMail($to, $subject, $message);

					$response = '
						<div align="center" class="alert alert-dismissable alert-success">
								<button class="close" data-dismiss="alert">&times;</button>
							<h3><span style="color:#629031;">Done! </span> </h3>
							Account recovery link has been sent to your email '.$_POST["Email"].'.<br/> Please check your mail and click on the <u>Recovery Link</u> link to recover your account. If mail not in your inbox, please check your spam mail.
							
						</div>';
					
				}
				
				break;
				
		
		//POST BLOG
		case 7:

		//BROADCAST Posting
		$cc = new Crud($connect);
				
		$media_size = $_FILES["Mediaz"]["size"];
		$media_name = $_FILES["Mediaz"]["name"];
		$ipaddress = $_SERVER["REMOTE_ADDR"];
		$reach = $_POST["Reach"];
		$target = $_POST["Target"];
		$category = $_POST["Category"];
		$title = $_POST["Title"];
		$title = str_replace(array('"', "'", '(', ')', "\n", "\r", "\t", "[", "]"), ' ', $title);
		$ogtitle = md5(uniqid(time(),true));
		$mes = $_POST["Message"];
		$message = substr($mes, 0, 5000);
		$uid = $_POST["UID"];
		$accesslevel = $cc->AnyContent("AccessLevel", "users", "ID", $_SESSION["duid"] );

		$checkbc = $crud->select("broadcast", "*", "Title='".$title."' ");

		if($checkbc == TRUE)
		{
			$response = "<div class='alert alert-warning alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! A BC post with this title already exists. Please change title or search for the posted BC to edit or comment.
							</p>
						</div>";
		}
		else
		{
			if( (empty($title) == TRUE) || (empty($message) == TRUE) || (empty($category) == true) )
			{
				$response = "<div class='alert alert-warning alert-dismissable'>
								<button class='close' data-dismiss='alert'>&times;</button>
								<p align='center' style='color: #ff0000 !important;' >
									Boxes with asterisk cannot be empty.
								</p>
							</div>";
			}
			else
			{	//maximum upload is 5mb = 5*1024*1024
				if( ($media_size > (5*1024*1024) ) )
				{	
					$response = "<div align='center' class='alert alert-dismissable alert-warning'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										The File you are trying to upload is too large. maximum size allowed is 5mb!
									</p>
								</div>";
				}
				else
				{	//If photo var is NOT empty
					if(!empty($media_name))
					{
						$ext = pathinfo($media_name, PATHINFO_EXTENSION);
						
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg' && $ext != 'MP4' && $ext != 'mp4' && $ext != 'MP3' && $ext != 'mp3')
						{
							//If wrong format of picture or video is selected
							$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! File format not supported. Please select MP4 for video, Mp3 for audio or PNG, JPEG for picture.</p>
											</p>
										</div>";
						}
						else
						{	
							if($ext == 'mp4' || $ext == 'MP4'){
								$temp = explode(".",  $media_name);
								$mediaz = md5(uniqid(time(),true)) . '.' . end($temp);
								move_uploaded_file($_FILES["Mediaz"]["tmp_name"], "../../files/broadcast/video/".$mediaz);
							}
							elseif($ext == 'mp3' || $ext == 'MP3'){
								$temp = explode(".",  $media_name);
								$mediaz = md5(uniqid(time(),true)) . '.' . end($temp);
								move_uploaded_file($_FILES["Mediaz"]["tmp_name"], "../../files/broadcast/audio/".$mediaz);
							}
							else{
								$temp = explode(".",  $media_name);
								$mediaz = md5(uniqid(time(),true)) . '.' . end($temp);
								move_uploaded_file($_FILES["Mediaz"]["tmp_name"], "../../files/broadcast/image/".$mediaz);
							}

							//Add Details to blog table
							$crud->insert("broadcast", 
							array( 'UID'=>$uid,
									'Reach' => $reach,
									'Target' => $target,
									'Category'=>$category,
									'Mediaz'=>$mediaz,
									'Title'=>$title,
									'OgTitle'=>$ogtitle,
									'Message'=>$message,
									'AccessLevel'=> $accesslevel,
									'IPAddr'=> $ipaddress
							) );

							$response = "<div align='center' class='alert alert-dismissable alert-success'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<span> <b>Done!</b> BC post successful.</span>
										</div>";

							// $response = "<div class='alert alert-success'>
							// 				<button type='button' aria-hidden='true' class='close' data-dismiss='alert'>
							// 					<i class='nc-icon nc-simple-remove'></i>
							// 				</button>
							// 				<span><b> Done! </b> Blog post successful.</span>
							// 			</div>";
						
						}
							
					}
					else
					{	//if photo var is empty
						$mediaz = "";
						//Add Details to blog table
						$crud->insert("broadcast", 
						array( 'UID'=>$uid,
								'Reach' => $reach,
								'Target' => $target,
								'Category'=>$category,
								'Mediaz'=>$mediaz,
								'Title'=>$title,
								'OgTitle'=>$ogtitle,
								'Message'=>$message,
								'AccessLevel'=> $accesslevel,
								'IPAddr'=> $ipaddress
						) );

						$response = "<div align='center' class='alert alert-dismissable alert-success'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<span> <b>Done!</b> BC post successful.</span>
									</div>";

					}
					
				}

			}
		}	
		
		break;




		//INSERT FOR GALLERY
		case 8:

		$cc = new Crud($connect);
		
		$ipaddress = $_SERVER["REMOTE_ADDR"];
		$acc_lev = $_SESSION["accesslevel"];
		$album = $_POST["Album"];
		$filename = $_FILES["files"]["name"];
		
		///======================================================================================================	
		if (!empty($album)) {
			$j = 0;     // Variable for indexing uploaded image.
			$target_path = "../../files/gallery/img/";     // Declaring Path for uploaded images.
			$validextensions = array('jpg','png','jpeg', 'JPG', 'PNG', 'JPEG');      // Extensions which are allowed.

			for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
				// Loop to get individual element from the array

				$fileName = basename($_FILES['files']['name'][$i]); 
				$targetFilePath = $target_path . $fileName;

				//Check whether file type is valid
				$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);

				//$fileName = md5(uniqid(time(),true)) . "." . $ext[$i];
				//$target_path = $target_path . $fileName; // Set the target path with a new name of image.

				$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
				if (($_FILES["files"]["size"][$i] < 10 * 1024 * 1024)     // Approx. 10mb files can be uploaded.
				&& in_array($fileType, $validextensions)) {
					if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFilePath)) {
						// If file moved to uploads folder. 
					
						// Image db insert sql
						$insertValuesSQL = "";
						$insertValuesSQL .= $fileName;
					
						// Insert image file name into database
						$insert = $crud->insert("gallery", 
										array( 'Photo'=>$insertValuesSQL,
												'Album'=>$album,
												'CreatedBy'=>$_SESSION["duid"],
												'IPAddr'=>$ipaddress,
												'AccessLevel'=>$acc_lev
										) );

						$statusMsg = "<div class='alert alert-success alert-dismissable'>
										<p align='center' >
											Photo uploaded successfully!.
										</p>
									</div>";

					} else {     //  If File Was Not Moved.
						
						$statusMsg = "<div class='alert alert-warning alert-dismissable'>
										<p align='center' style='color: #ff0000 !important;' >
											Sorry! There was an error uploading your photo(s).
										</p>
									</div>";

					}
				} else {     //   If File Size And File Type Was Incorrect.
					
						$statusMsg = "<div class='alert alert-warning alert-dismissable'>
										<p align='center' style='color: #ff0000 !important;' >
											Invalid format or Photo size too big. <br/>
											Format allowed are JPG, JPEG and PNG less than 10mb.
										</p>
									</div>";

				}
			}
		}else{//   If Album is not chosen.
					
			$statusMsg = "<div class='alert alert-warning alert-dismissable'>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Please select an album.
							</p>
						</div>";
			
		}
		break;



		//CONTACT US
		case 9:

		$fullname = $_POST["Fullname"];
		// $lname = $_POST["Lname"];
		$email  = $_POST["Email"];
		$msg = $_POST["Message"];
		$phone = $_POST["Phone"];
		$ticket = md5($fullname);
		$ipaddress = $_SERVER["REMOTE_ADDR"];

		if( $fullname == "" || $email == "" || $msg == "")
		{
			$response = "<div class='alert alert-success alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Spaces for Firstname, Email and Message must be filled.
							</p>
						</div>";
		}
		else
		{
			// recaptcha enters here

			// Validate reCAPTCHA box 
			if(isset($_POST['g-recaptcha-response']) && !empty($_POST['g-recaptcha-response'])){ 
				// Google reCAPTCHA API secret key 
				$secretKey = $secretKey; 
					
				// Verify the reCAPTCHA response 
				$verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret='.$secretKey.'&response='.$_POST['g-recaptcha-response']); 
					
				// Decode json data 
				$responseData = json_decode($verifyResponse); 
					
				// If reCAPTCHA response is valid 
				if($responseData->success){ 

					//Add Details to guest table
					$crud->insert("guest", 
					array( 
							'Fname' => $fullname,
							'Email' => $email,
							'IPAddr'=> $ipaddress,
							'Message'=> $msg,
							'Phone'=> $phone,
							'Ticket'=> $ticket
					) );

					$response = "<div class='alert alert-success alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #1a4b04 !important;' >
										Done! Message sent. An Admin will contact you within 48 hours. Thank you for your time.
									</p>
									
									<script>
										alert('Message sent. An Admin will contact you within 48 hours. Thank you for your time.');
									</script>
								</div>";

				}else{ 
					$response = "<div class='alert alert-danger alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;'>
										Robot verification failed, please try again.
									</p>
									
									<script>
										alert('Robot verification failed, please try again.');
									</script>
								</div>";
				} 
			}else{ 
				$response = "<div class='alert alert-danger alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;'>
										Please check the \"I'm not a robot\" box.
									</p>
									
									<script>
										alert('Please check the \"I'm not a robot\" box.');
									</script>
								</div>";
			} 
		}
		
		break;		



		//INSERT FOR BLOG MESSAGE PICTURE 
		case 10:

			$cc = new Crud($connect);
			
			$ipaddress = $_SERVER["REMOTE_ADDR"];
			$acc_lev = $_SESSION["accesslevel"];
			$album = $_POST["Album"];
			$filename = $_FILES["files"]["name"];

			//$checkpic = $cc->AnyContent("Photo", "message_picture", "Photo", $filename);
			// $checkpic = $crud->select("message_picture", "*", "Photo = '".$filename."' ");

			// if($checkpic == TRUE)
			// {
			// 		$response = "<div class='alert alert-warning alert-dismissable'>
			// 						<button class='close' data-dismiss='alert'>&times;</button>
			// 						<p align='center' style='color: #ff0000 !important;' >
			// 							Sorry! A picture with this name already exists. Please change the picture name or check whether you have uploaded that particular picture before.
			// 						</p>
			// 					</div>";
			// }
			// else
			// {
				if (!empty($album)) {
					$j = 0;     // Variable for indexing uploaded image.
					$target_path = "../../files/broadcast/image/";     // Declaring Path for uploaded images.
					$validextensions = array('jpg','png','jpeg', 'JPG', 'PNG', 'JPEG');      // Extensions which are allowed.
		
					for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
						// Loop to get individual element from the array
		
						$fileName = basename($_FILES['files']['name'][$i]); 
						$targetFilePath = $target_path . $fileName;
		
						//Check whether file type is valid
						$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		
						//$fileName = md5(uniqid(time(),true)) . "." . $ext[$i];
						//$target_path = $target_path . $fileName; // Set the target path with a new name of image.
		
						$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
						if (($_FILES["files"]["size"][$i] < 5 * 1024 * 1024)     // Approx. 5mb files can be uploaded.
						&& in_array($fileType, $validextensions)) {
							if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFilePath)) {
								// If file has been moved to upload folder. 
							
								// Image db insert sql
								$insertValuesSQL = "";
								$insertValuesSQL .= $fileName;
							
								// Insert image file name into database
								$insert = $crud->insert("message_picture", 
												array( 'Photo'=>$insertValuesSQL,
														'Album'=>$album,
														'CreatedBy'=>$_SESSION["duid"],
														'IPAddr'=>$ipaddress,
														'AccessLevel'=>$acc_lev
												) );
		
								$statusMsg = "<div class='alert alert-success alert-dismissable'>
												<p align='center' >
													Photo uploaded successfully!.
												</p>
											</div>";
		
							} else {     //  If File Was Not Moved.
								
								$statusMsg = "<div class='alert alert-warning alert-dismissable'>
												<p align='center' style='color: #ff0000 !important;' >
													Sorry! There was an error uploading your photo(s).
												</p>
											</div>";
		
							}
						} else {     //   If File Size And File Type Was Incorrect.
							
								$statusMsg = "<div class='alert alert-warning alert-dismissable'>
												<p align='center' style='color: #ff0000 !important;' >
													Invalid format or Photo size too big. <br/>
													Format allowed are JPG, JPEG and PNG less than 5mb.
												</p>
											</div>";
		
						}
					}
				}else{//   If Album is not chosen.
							
					$statusMsg = "<div class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! Please select a story album.
									</p>
								</div>";
					
				}
			//}
				
		break;
	
	


		//Blog-comment
		case 11:

		$cby = $_POST["CreatedBy"];
		$bid = $_POST["BlogID"];
		$uid  = $_POST["UID"];
		$msg = $_POST["Message"];
		$acclev = $_POST["AccessLevel"];
		$ipaddress = $_SERVER["REMOTE_ADDR"];

		if($msg == "")
		{
			$response = "<div class='alert alert-success alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Space for comment can't be empty.
							</p>
						</div>";
		}
		else
		{
			//Add Details to blog table
			$crud->insert("blog_com", 
			array( 
					'CreatedBy' => $cby,
					'BlogID' => $bid,
					'UID' => $uid,
					'AccessLevel'=> $acclev,
					'IPAddr'=> $ipaddress,
					'Message'=> $msg
			) );

					
		}

		break;



		

		//INSERT FOR PRODUCTS 
		case 12:

			$cc = new Crud($connect);
			
			$ipaddress = $_SERVER["REMOTE_ADDR"];
			$acc_lev = $_SESSION["accesslevel"];
			$pro_title = $_POST["ProductTitle"];
			$des = $_POST["Description"];
			$price_from = $_POST["PriceFrom"];
			$price_to = $_POST["PriceTo"];
			$filename = $_FILES["files"]["name"];

			//==========================================================================================================
				if (!empty($pro_title)) {
					$j = 0;     // Variable for indexing uploaded image.
					$target_path = "../../files/products/images/";     // Declaring Path for uploaded images.
					$validextensions = array('jpg','png','jpeg', 'JPG', 'PNG', 'JPEG');      // Extensions which are allowed.
		
					for ($i = 0; $i < count($_FILES['files']['name']); $i++) {
						// Loop to get individual element from the array
		
						$fileName = basename($_FILES['files']['name'][$i]); 
						$targetFilePath = $target_path . $fileName;
		
						//Check whether file type is valid
						$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
		
						//$fileName = md5(uniqid(time(),true)) . "." . $ext[$i];
						//$target_path = $target_path . $fileName; // Set the target path with a new name of image.
		
						$j = $j + 1;      // Increment the number of uploaded images according to the files in array.
						if (($_FILES["files"]["size"][$i] < 5 * 1024 * 1024)     // Approx. 5mb files can be uploaded.
						&& in_array($fileType, $validextensions)) {
							if (move_uploaded_file($_FILES['files']['tmp_name'][$i], $targetFilePath)) {
								// If file has been moved to upload folder. 
							
								// Image db insert sql
								$insertValuesSQL = "";
								$insertValuesSQL .= $fileName;
							
								// Insert image file name into database
								$insert = $crud->insert("product", 
												array( 'Product'=>$insertValuesSQL,
														'ProductTitle'=>$pro_title,
														'Description'=>$des,
														'PriceFrom'=>$price_from,
														'PriceTo'=>$price_to,
														'CreatedBy'=>$_SESSION["duid"],
														'IPAddr'=>$ipaddress,
														'AccessLevel'=>$acc_lev
												) );
		
								$statusMsg = "<div class='alert alert-success alert-dismissable'>
												<p align='center' >
													Product uploaded successfully!.
												</p>
											</div>";
		
							} else {     //  If File Was Not Moved.
								
								$statusMsg = "<div class='alert alert-warning alert-dismissable'>
												<p align='center' style='color: #ff0000 !important;' >
													Sorry! There was an error uploading your product.
												</p>
											</div>";
		
							}
						} else {     //   If File Size And File Type Was Incorrect.
							
								$statusMsg = "<div class='alert alert-warning alert-dismissable'>
												<p align='center' style='color: #ff0000 !important;' >
													Invalid format or Photo size too big. <br/>
													Format allowed are JPG, JPEG and PNG less than 5mb.
												</p>
											</div>";
		
						}
					}
				}else{//   If Album is not chosen.
							
					$statusMsg = "<div class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! Please select a product title.
									</p>
								</div>";
					
				}
				
		break;
	
	


	//INSERT EVENT
	case 15:

		$cc = new Crud($connect);

		$photo_size = $_FILES["Photo"]["size"];
		$photo_name = $_FILES["Photo"]["name"];
		$ogevent = md5(uniqid(time(),true));
		$note = $_POST["Note"];
		$by = $cc->AnyContent("Fname", "users", "ID", $_SESSION["duid"])
				." ".$crud->AnyContent("Sname", "users", "ID", $_SESSION["duid"]);
		$uid = $_SESSION["duid"];
		$theme = $_POST["Theme"];
		$venue  = $_POST["Venue"];
		$performer = $_POST["Performer"];
		$sponsor = $_POST["Sponsor"];
		$datez = $_POST["Datez"];
		$timez = $_POST["Timez"];
		$acclev = $_SESSION["accesslevel"];
		$ipaddress = $_SERVER["REMOTE_ADDR"];

		if(empty($theme) == TRUE || empty($performer) == TRUE || empty($venue) == TRUE)
		{
			$response = "<div class='alert alert-warning alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Boxes with required can't be empty.
							</p>
						</div>";
		}
		else
		{	
			//If photo var is NOT empty
			if(!empty($photo_name))
			{	
				//maximum upload is 5mb = 5*1024*1024
				if( ($photo_size > (5*1024*1024) ) )
				{	
					$response = "<div align='center' class='alert alert-dismissable alert-warning'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										The File you are trying to upload is too large. maximum size allowed is 5mb!
									</p>
								</div>";
				}
				else
				{	
					$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
					
					if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
					{
						//If wrong format of picture or video is selected
						$response = "<div align='center' class='alert alert-warning alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Sorry! File format not supported. Please choose a Photo (PNG, JPEG and JPG format)!</p>
										</p>
									</div>";
					}
					else
					{	
						$temp = explode(".",  $photo_name);
						$photo = md5(uniqid(time(),true)) . '.' . end($temp);
						move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/event/".$photo);
						$_SESSION["Photo"] = $photo;
							
						//Add Details to Event table
						$check = $crud->insert("event", 
								array( 
										'PostedBy' => $by,
										'Theme' => $theme,
										'Venue' => $venue,
										'Performer' => $performer,
										'Sponsor' => $sponsor,
										'UID' => $uid,
										'Photo'=>$photo,
										'Note'=>$note,
										'OgEvent'=>$ogevent,
										'Datez' => $datez,
										'Timez' => $timez,
										'AccessLevel'=> $acclev,
										'IPAddr'=> $ipaddress
								));

						if(!$check){
								$response = "<div align='center' class='alert alert-warning alert-dismissable'>
												<p align='center' style='color: #ff0000 !important;' >
													Sorry! Event not posted, try again later</p>
												</p>
											</div>";
						}else{
								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<span> <b>Done!</b> Event post successful.</span>
											</div>";
						}

									
					}
					
				}
			}else{
				//if photo var is empty
				$photo = "";
												
				//Add Details to Event table
				$check = $crud->insert("event", 
						array( 
								'PostedBy' => $by,
								'Theme' => $theme,
								'Venue' => $venue,
								'Performer' => $performer,
								'Sponsor' => $sponsor,
								'Photo' => $photo,
								'UID' => $uid,
								'Note'=>$note,
								'OgEvent'=>$ogevent,
								'Datez' => $datez,
								'Timez' => $timez,
								'AccessLevel'=> $acclev,
								'IPAddr'=> $ipaddress
						));

				if(!$check){
					$response = "<div align='center' class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! Event not posted, try again later</p>
									</p>
								</div>";
				}else{
						$response = "<div align='center' class='alert alert-dismissable alert-success'>
										<span> <b>Done!</b> Event post successful.</span>
									</div>";
				}

			}
		}
	
	break;




	//Add Album
	case 16:

		$uid  = $_SESSION["duid"];
		$album = $_POST["Album"];

		if($album == "")
		{
			$response = "<div class='alert alert-warning alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Space is empty.
							</p>
						</div>";
		}
		else
		{			
			//Add Details to feed table
			$crud->insert("album", 
			array( 
					'UID' => $uid,
					'Album'=> $album
			) );

			$response = "<div class='alert alert-success alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' !important;' >
								Done! Album added.
							</p>
						</div>";
		}

	break;



	//Add Story for Picture Message
	case 17:

		$uid  = $_SESSION["duid"];
		$album = $_POST["Album"];

		if($album == "")
		{
			$response = "<div class='alert alert-warning alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Story album space cannot be empty.
							</p>
						</div>";
		}
		else
		{			
			//Add Details to feed table
			$crud->insert("story_album", 
			array( 
					'UID' => $uid,
					'Album'=> $album
			) );

			$response = "<div class='alert alert-success alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' !important;' >
								Done! Story album added.
							</p>
						</div>";
		}

	break;



		//PLACE ADVERT
		case 19:

			//Input Details
			$cc = new Crud($connect);
					
			$photo_size = $_FILES["Photo"]["size"];
			$photo_name = $_FILES["Photo"]["name"];
			$name = $_POST["CompName"];
			$email = $_POST["CompEmail"];
			$phone = $_POST["CompPhone"];
			$web = $_POST["CompWeb"];
			$addr = $_POST["CompAddr"];
			$type = $_POST["Type"];
			$date_time = $_POST["daterange-centered"];
			$des = $_POST["Description"];
			$by = $_POST["UploadedBy"];
			$accesslevel = $cc->AnyContent("AccessLevel", "users", "ID", $_SESSION["duid"] );
	
			if($accesslevel <> 1)
			{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! You are not allowed to perform this action.
									</p>
								</div>";
			}
			else
			{
				if( (empty($name) == TRUE) || (empty($email) == TRUE) || (empty($date_time) == true) )
				{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Boxes with asterisk cannot be empty.
									</p>
								</div>";
				}
				else
				{	//maximum upload is 5mb = 5*1024*1024
					if( ($photo_size > (5*1024*1024) ) )
					{	
						$response = "<div align='center' class='alert alert-dismissable alert-warning'>
										<p align='center' style='color: #ff0000 !important;' >
											The File you are trying to upload is too large. maximum size allowed is 5mb!
										</p>
									</div>";
					}
					else
					{	//If photo var is NOT empty
						if(!empty($photo_name))
						{
							$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
							
							if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
							{
								//If wrong format of picture or video is selected
								$response = "<div align='center' class='alert alert-warning alert-dismissable'>
												<p align='center' style='color: #ff0000 !important;' >
													Sorry! File format not supported. Please choose a Photo (PNG, JPEG or JPG format)!</p>
												</p>
											</div>";
							}
							else
							{	
								$temp = explode(".",  $photo_name);
								$photo = md5(uniqid(time(),true)) . '.' . end($temp);
								move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/advert/".$photo);
								//$_SESSION["Photo"] = $photo;
	
								//Add Details to blog table
								$crud->insert("advert", 
								array( 'UploadedBy'=>$by,
										'Photo'=>$photo,
										'ExpiryDate'=>$date_time,
										'Type'=>$type,
										'CompanyName'=>$name,
										'CompanyWebsite'=>$web,
										'CompanyAddress'=>$addr,
										'CompanyPhone'=>$phone,
										'CompanyEmail'=>$email,
										'AddedOn'=>$Timenow,
										'Description'=>$des
								) );

								if($crud){
										$response = "<div align='center' class='alert alert-dismissable alert-success'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<span> <b>Done!</b> Advert placement successful.</span>
												</div>";
								}else{
									$response = "<div class='alert alert-warning alert-dismissable'>
													<p align='center' style='color: #ff0000 !important;' >
														Sorry! Something went wrong. Try again later.
													</p>
												</div>";
								}
	
							}
								
						}
						
					}
	
				}
			}	
			
			break;
	



		//UPLOAD SLIDE
		case 20:

			$cc = new Crud($connect);
					
			$photo_size = $_FILES["Photo"]["size"];
			$photo_name = $_FILES["Photo"]["name"];
			$fname = $cc->AnyContent("Fname", "users", "ID", $_SESSION["duid"] );
			$title = $_POST["Title"];
			$title = str_replace(array('"', "'", '(', ')', "\n", "\r", "\t", "[", "]"), ' ', $title);
			$uid = $_POST["UID"];
			$accesslevel = $cc->AnyContent("AccessLevel", "users", "ID", $_SESSION["duid"] );
	
			$checkblog = $crud->select("slide", "*", "Title = '".$title."' ");
	
			if($checkblog == TRUE)
			{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! A slide with this title already exists. Please change the title or search for the already posted slide and delete to avoid duplicates.
									</p>
								</div>";
			}
			else
			{
				if( (empty($title) == TRUE) || (empty($photo_name) == TRUE))
				{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Boxes with asterisk cannot be left empty.
									</p>
								</div>";
				}
				else
				{	//maximum upload is 5mb = 5*1024*1024
					if( ($photo_size > (5*1024*1024) ) )
					{	
						$response = "<div align='center' class='alert alert-dismissable alert-warning'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											The File you are trying to upload is too large for a slide. maximum size allowed is 5mb!
										</p>
									</div>";
					}
					else
					{	
						$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
						
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
						{
							//If wrong format of picture or video is selected
							$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! File format not supported. Please choose a Photo (PNG, JPEG and JPG format)!</p>
											</p>
										</div>";
							
						}
						else
						{	
							$temp = explode(".",  $photo_name);
							$photo = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/slider/".$photo);
							$_SESSION["Photo"] = $photo;

							//Add Details to blog table
							$in = $crud->insert("slide", 
							array( 'UID'=>$uid,
									'Fname' => $fname,
									'Photo'=>$photo,
									'Title'=>$title,
									'AccessLevel'=> $accesslevel
							) );

							if(!isset($in)){
								$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Ooops! Slide not uploaded. Please try again later.</p>
											</p>
										</div>";
							}else{
								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<span> <b>Done!</b> Slide successfuly uploaded.</span>
											</div>";
							}

						
						}
								
						
						
					}
	
				}
			}	
			
			break;
	


			//POST JOB
			case 21:

				//JOB Posting
				$photo_size = $_FILES["Photo"]["size"];
				$photo_name = $_FILES["Photo"]["name"];
				$type = $_POST["Type"];
				$exp = $_POST["Experience"];
				$pay = $_POST["Pay"];
				$dur = $_POST["Duration"];
				$title = $_POST["Title"];
				$title = str_replace(array('"', "'", '(', ')', "\n", "\r", "\t", "[", "]"), ' ', $title);
				$mes = $_POST["Description"];
				$des = substr($mes, 0, 1000);
				$uid = $_POST["UID"];
				$uid = $_POST["UID"];

				$checkjob = $crud->select("job", "*", "Title = '".$title."' && UID = '".$uid."' ");

				if($checkjob == TRUE)
				{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! You have posted a job with this title before. Please update the existing one or change the title.
									</p>
								</div>";
				}
				else
				{
					if( (empty($title) == TRUE) || (empty($des) == TRUE) || (empty($type) == true) )
					{
						$response = "<div class='alert alert-warning alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Boxes with asterisk cannot be empty.
										</p>
									</div>";
					}
					else
					{	//maximum upload is 5mb = 5*1024*1024
						if( ($photo_size > (3*1024*1024) ) )
						{	
							$response = "<div align='center' class='alert alert-dismissable alert-warning'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<p align='center' style='color: #ff0000 !important;' >
												The File you are trying to upload is too large. maximum size allowed is 3mb!
											</p>
										</div>";
						}
						else
						{	//If photo var is NOT empty
							if(!empty($photo_name))
							{
								$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
								
								if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
								{
									//If wrong format of picture or video is selected
									$response = "<div align='center' class='alert alert-warning alert-dismissable'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<p align='center' style='color: #ff0000 !important;' >
														Sorry! File format not supported. Please choose a Photo (PNG, JPEG AND JPG)!</p>
													</p>
												</div>";
									
								}
								else
								{	
									$temp = explode(".",  $photo_name);
									$photo = md5(uniqid(time(),true)) . '.' . end($temp);
									move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/job/".$photo);

									//Add Details to job table
									$sub = $crud->insert("job", 
									array( 'UID'=>$uid,
											'Type' => $type,
											'Experience'=>$exp,
											'Sample'=>$photo,
											'Title'=>$title,
											'Pay'=>$pay,
											'Duration'=>$dur,
											'AddedOn'=>$Timenow,
											'Description'=>$des
									) );

									if(!$sub){
										$response = "<div align='center' class='alert alert-warning alert-dismissable'>
														<button class='close' data-dismiss='alert'>&times;</button>
														<p align='center' style='color: #ff0000 !important;' >
															Sorry! Job post not succesful. Please try again later
														</p>
													</div>";
									}else{
										$response = "<div align='center' class='alert alert-dismissable alert-success'>
														<button class='close' data-dismiss='alert'>&times;</button>
														<span> <b>Done!</b> Job successfully posted</span>
													</div>";
									}
								}
									
							}
							else
							{	//if photo var is empty
								$photo = "";
								//Add Details to job table
								$sub = $crud->insert("job", 
								array( 'UID'=>$uid,
										'Type' => $type,
										'Experience'=>$exp,
										'Sample'=>$photo,
										'Title'=>$title,
										'Pay'=>$pay,
										'Duration'=>$dur,
										'AddedOn'=>$Timenow,
										'Description'=>$des
								) );

								if(!$sub){
									$response = "<div align='center' class='alert alert-warning alert-dismissable'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<p align='center' style='color: #ff0000 !important;' >
														Sorry! Job post not succesful. Please try again later
													</p>
												</div>";
								}else{
									$response = "<div align='center' class='alert alert-dismissable alert-success'>
													<button class='close' data-dismiss='alert'>&times;</button>
													<span> <b>Done!</b> Job successfully posted</span>
												</div>";
								}

							}
							
						}

					}
				}	
				
				break;




		//UPLOAD WORKER SLIDE FOR HOMEPAGE
		case 22:

			$cc = new Crud($connect);
					
			$photo_size = $_FILES["Photo"]["size"];
			$photo_name = $_FILES["Photo"]["name"];
			$fname = $cc->AnyContent("Fname", "users", "ID", $_SESSION["duid"] );
			$title = $_POST["Title"];
			$title = str_replace(array('"', "'", '(', ')', "\n", "\r", "\t", "[", "]"), ' ', $title);
			$uid = $_POST["UID"];
			$accesslevel = $cc->AnyContent("AccessLevel", "users", "ID", $_SESSION["duid"] );
	
			$checkblog = $crud->select("slide", "*", "Title = '".$title."' ");
	
			if($checkblog == TRUE)
			{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! A worker slide with this title already exists. Please change the title or search for the already posted slide and delete to avoid duplicates.
									</p>
								</div>";
			}
			else
			{
				if( (empty($title) == TRUE) || (empty($photo_name) == TRUE))
				{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<p align='center' style='color: #ff0000 !important;' >
										Boxes with asterisk cannot be left empty.
									</p>
								</div>";
				}
				else
				{	//maximum upload is 5mb = 5*1024*1024
					if( ($photo_size > (5*1024*1024) ) )
					{	
						$response = "<div align='center' class='alert alert-dismissable alert-warning'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											The File you are trying to upload is too large for a slide. maximum size allowed is 5mb!
										</p>
									</div>";
					}
					else
					{	
						$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
						
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
						{
							//If wrong format of picture or video is selected
							$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<button class='close' data-dismiss='alert'>&times;</button>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! File format not supported. Please choose a Photo (PNG, JPEG and JPG format)!</p>
											</p>
										</div>";
							
						}
						else
						{	
							$temp = explode(".",  $photo_name);
							$photo = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/slider/".$photo);
							$_SESSION["Photo"] = $photo;

							//Add Details to blog table
							$in = $crud->insert("worker_slide", 
							array( 'UID'=>$uid,
									'Fname' => $fname,
									'Photo'=>$photo,
									'Title'=>$title,
									'AccessLevel'=> $accesslevel
							) );

							if(!isset($in)){
								$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Ooops! Worker slide not uploaded. Please try again later.</p>
											</p>
										</div>";
							}else{
								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<span> <b>Done!</b> Worker slide successfuly uploaded.</span>
											</div>";
							}

						
						}
								
						
						
					}
	
				}
			}	
			
			break;




			//Add Product Title to 
			case 23:

				$uid  = $_SESSION["duid"];
				$product = $_POST["Product"];
				
			$checkprotitle = $crud->select("product_title", "*", "Product = '".$product."' ");
	
			if($checkprotitle == TRUE)
			{
					$response = "<div class='alert alert-default alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! A product with this title already exists. Please change the title or select the title among the lists of Product Title Available.
									</p>
								</div>";
			}
			else
			{

				if($product == "")
				{
					$response = "<div class='alert alert-warning alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p align='center' style='color: #ff0000 !important;' >
										Sorry! Product title space cannot be empty.
									</p>
								</div>";
				}
				else
				{			
					//Add Details to feed table
					$crud->insert("product_title", 
					array( 
							'UID' => $uid,
							'Product'=> $product
					) );

					// $response = "<div class='alert alert-success alert-dismissable'>
					// 				<button class='close' data-dismiss='alert'>&times;</button>
					// 				<p align='center' !important;' >
					// 					Done! Product title added.
					// 				</p>
					// 			</div>";
				}
			}

			break;












			default:
				# code...
				break;
		}
}


/*
=====================================================================
EDIT
=====================================================================
*/

/*
Edit list
1. Update Profile/Account details
2. Change Password
3. Update Feeds
*/ 

if(isset($_POST["EDIT"]) && $_POST["EDIT"] !="" )
{
	$crud = new Crud($connect);
	$Timenow = date("Y-m-d H:i:s");

	switch ($_POST["EDIT"]) {

	//Update Profile Details
		case 1:

		$photo_size = $_FILES["Photo"]["size"];
		$photo_name = $_FILES["Photo"]["name"];
		$ipaddress = $_SERVER["REMOTE_ADDR"];
		$fname = $_POST["Fname"];
		$sname = $_POST["Sname"];
		$uname = $_POST["Uname"];
		$email  = $_POST["Email"];
		$gender  = $_POST["Gender"];
		$phone  = $_POST["Phone"];
		$addr  = $_POST["Addr"];
		$editval = $_POST["EDITVAL"];

		//MEMBERS FORM DOES NOT CONTAIN THIS TWO
		if((isset($_POST["Bio"]) || isset($_POST["Role"])) && ($_SESSION["accesslevel"] == 1))
		{
			$bio  = $_POST["Bio"];
			$role  = $_POST["Role"];
		}

		if(isset($_POST["Country"]) )//&& $_POST["State"] != "" && $_POST["LocalGov"] != ""
		{
			$country  = $_POST["Country"];
		}
		else
		{
			$country = $crud->AnyContent("Country", "users", "ID", $editval);
		}

		$checkreg1 = $crud->select("users", "*", "Uname='".$uname."' && ID <> '".$_SESSION["duid"]."' ");

		if($checkreg1==TRUE)
		{
				$response_pro = "<div align='center' class='alert alert-warning alert-dismissable'>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! The Username you entered is being used by another. Please use another.
							</p>
						</div>";
		}
		else
		{
				if($photo_size > (3*1024*1024) )
				{	
					$response_pro = "<div align='center' class='alert alert-dismissable alert-warning'>
									The File you are trying to upload is too large. maximum size allowed is 3mb!
								</div>";
				}
				else
				{
					//var_dump($uname);
					if(!empty($photo_name))
					{
						//var_dump($uname);
						$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
						//$ext = explode(".", $thefilez)[1];
						//var_dump($ext);
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
						{
							//If wrong format of picture or video is selected
							$response_pro = "<div align='center' class='alert alert-warning alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p>Sorry! File format not supported. Please choose a Photo (PNG, JPG or JPEG format)!</p>
									</div>";
						}
						else
						{
							if(!empty($photo_name))
							{
								$temp = explode(".",  $photo_name);
								$photo = md5(uniqid(time(),true)) . '.' . end($temp);
								move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/profilepics/".$photo);
								$_SESSION["Photo"] = $photo;
							}
							else
							{
								$photo = $_POST["PhotoHolder"];
							}
						}
							
					}
					else
					{
						$photo = $_POST["PhotoHolder"];
					}

					(isset($bio)) ? $bio = $bio : $bio = "Null";
					(isset($role)) ? $role = $role : $role = "Null";

					$checkupd = $crud->update("users", "ID", $editval, 
						array("Fname"=>$fname,
								"Sname"=>$sname,
								"Uname"=>$uname,
								"Phone"=>$phone,
								"Bio"=>$bio,
								"Role"=>$role,
								"Photo"=>$photo,
								"Gender"=>$gender,
								"Email"=>$email,
								"Country"=>$country,
								"Addr"=>$addr,
								"IPAddr"=>$ipaddress
						));

					//var_dump($checkreg1);
					if($checkupd==false)
					{
						$response_pro = "<div align='center' class='alert alert-dismissable alert-danger'>
									Sorry! Your details could not be modified now. Please try again later.
								</div>";
					}	
					else{
							if(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "1"){
								$crud->update("admin", "UID", $editval, 
										array("Fname"=>$fname,
												"Sname"=>$sname,
												"Uname"=>$uname,
												"Bio"=>$bio,
												"Photo"=>$photo,
												"Role"=>$role,
												"Phone"=>$phone,
												"Email"=>$email,
												"Gender"=>$gender
										));

										$_SESSION["fname"] = $fname;
										$_SESSION["sname"] = $sname;

								$response_pro = "<div align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your profile is saved successfully.
											</div>";
							}
							elseif(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "2"){
								$crud->update("sub_admin", "UID", $editval, 
										array("Fname"=>$fname,
												"Sname"=>$sname,
												"Uname"=>$uname,
												"Phone"=>$phone,
												"Email"=>$email,
												"Photo"=>$photo,
												"Addr"=>$addr,
												"Gender"=>$gender
										));

										$_SESSION["fname"] = $fname;
										$_SESSION["sname"] = $sname;

								$response_pro = "<div align='center' align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your profile has been updated successfully.
											</div>";							
							}
							elseif(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "3"){
								$crud->update("members", "UID", $editval, 
										array("Fname"=>$fname,
												"Sname"=>$sname,
												"Uname"=>$uname,
												"Phone"=>$phone,
												"Email"=>$email,
												"Photo"=>$photo,
												"Addr"=>$addr,
												"Gender"=>$gender
										));

										$_SESSION["fname"] = $fname;
										$_SESSION["sname"] = $sname;

									$response_pro = "<div align='center' class='alert alert-dismissable alert-success'>
													<button class='close' data-dismiss='alert'>&times;</button>
													Done! Your profile update was successful.
												</div>";							
								}
												
							}	
							
				}

		}	
		

		break;


	//CHANGE PASSWORD
	case 2:

	$ipaddress = $_SERVER["REMOTE_ADDR"];
	$editval = $_POST["EDITVAL"];
	$pword_db = $crud->AnyContent("Pword", "users", "ID", $editval); 
	$pword1 = $_POST["Pword1"];
	$pword2 = $_POST["Pword2"];
	$pwordcol = $_POST["PwordOld"];
	
	$saltz = "smartTulsSalt//009";
	$alphaz = $pwordcol.$saltz;
	$pwordold = md5(sha1($alphaz));

	$salt = "smartTulsSalt//009";
	$alpha = $pword1.$salt;
	$pword = md5(sha1($alpha));

	if( $pword1 != $pword2 ){

		$response = "<div class='alert alert-warning alert-dismissable'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<p align='center' style='color: #ff0000 !important;' >
							Sorry! New passwords don't match. Please check and try again.
						</p>
					</div>";
	}
	else
	{
		if($pwordold != $pword_db) {

			$response = "<div class='alert alert-warning alert-dismissable'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<p align='center' style='color: #ff0000 !important;' >
							Sorry! Old password is wrong. Please input again.
						</p>
					</div>";
		}
		else{
			
			$checkupd = $crud->update("users", "ID", $editval, 
			array(
					"Pword"=>$pword,
					"IPAddr"=>$ipaddress
			));

			//var_dump($checkrupd);
			if($checkupd==false)
			{
				$response = "<div align='center' class='alert alert-dismissable alert-warning'>
								<button class='close' data-dismiss='alert'>&times;</button>
								Sorry! Your details could not be modified now. Please try again later.
							</div>";
			}	
			else{
					if(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "1"){
						$crud->update("admin", "UID", $editval, 
								array(
										"Pword"=>$pword,
										"IPAddr"=>$ipaddress
								));

								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your password has been changed.
											</div>";
					}
					elseif(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "2"){
						$crud->update("sub_admin", "UID", $editval, 
								array(
										"Pword"=>$pword,
										"IPAddr"=>$ipaddress
								));

								$response = "<div align='center' align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your password has been changed.
											</div>";							
					}
					elseif(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "3"){
						$crud->update("members", "UID", $editval, 
								array(
										"Pword"=>$pword,
										"IPAddr"=>$ipaddress
								));

									$response = "<div align='center' class='alert alert-dismissable alert-success'>
													<button class='close' data-dismiss='alert'>&times;</button>
													Done! Your password has been changed.
												</div>";							
						}
										
				}	

		}
			
						
	}

	break;


	
	//Update Broadcast
	case 4:

	$cc = new Crud($connect);

	$media_size = $_FILES["Mediaz"]["size"];
	$media_name = $_FILES["Mediaz"]["name"];
	$ipaddress = $_SERVER["REMOTE_ADDR"];
	$tit = $_POST["Title"];
	$title = str_replace(array('"', "'", '(', ')', "\n", "\r", "\t", "[", "]"), ' ', $tit);
	$ogtitle = md5(uniqid(time(),true));
	$mes  = $_POST["Message"];
	$message = substr($mes, 0, 5000);
	$category  = $_POST["Category"];
	$reach = $_POST["Reach"];
	$target = $_POST["Target"];
	$editval = $_POST["EDITVAL"];
	//$accesslevel = $_POST["AccessLevel"];

	$checkbc = $crud->select("broadcast", "*", "Title='".$title."' && ID <> '".$editval."' ");

	if($checkbc == TRUE)
	{
		$response = "<div align='center' class='alert alert-danger alert-dismissable'>
						<button class='close' data-dismiss='alert'>&times;</button>
							Sorry! The Title you entered already exists. Please use another title or search for the posted BC to edit or comment on.
					</div>";
	}
	else
	{
		if( ($title == "") || ($message == "") || ($category == "") ){

			$response = "<div align='center' class='alert alert-danger alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
								Sorry! Boxes with asterisks cannot be empty.
						</div>";
		}
		else
		{
			//if picture is greater than 3mb i.e 1kb = 1024 bytes therefore 1024kb * 1024kb * 5 = ____ kilo-bytes
			if($media_size > (5*1024*1024) )
			{	
				$response = "<div align='center' class='alert alert-dismissable alert-danger'>
								<button class='close' data-dismiss='alert'>&times;</button>
								The File you are trying to upload is too large. maximum size allowed is 5mb!
							</div>";
			}
			else
			{
				//var_dump($uname);
				if(!empty($media_name))
				{
					$ext = pathinfo($media_name, PATHINFO_EXTENSION);
						
					if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg' && $ext != 'MP4' && $ext != 'mp4' && $ext != 'MP3' && $ext != 'mp3')
					{
						//If wrong format of picture or video is selected
						$response = "<div align='center' class='alert alert-warning alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Sorry! File format not supported. Please select MP4 for video, Mp3 for audio or PNG, JPEG for picture.</p>
										</p>
									</div>";
					}
					else
					{
						if($ext == 'mp4' || $ext == 'MP4'){
							$temp = explode(".",  $media_name);
							$mediaz = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Mediaz"]["tmp_name"], "../../files/broadcast/video/".$mediaz);
						}
						elseif($ext == 'mp3' || $ext == 'MP3'){
							$temp = explode(".",  $media_name);
							$mediaz = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Mediaz"]["tmp_name"], "../../files/broadcast/audio/".$mediaz);
						}
						else{
							$temp = explode(".",  $media_name);
							$mediaz = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Mediaz"]["tmp_name"], "../../files/broadcast/image/".$mediaz);
						}

					
						//$photo = $_POST["PhotoHolder"];
						$checkupd = $crud->update("broadcast", "ID", $editval, 
						array("Reach"=>$reach,
								"Target"=>$target,
								"Title"=>$title,
								"OgTitle"=>$ogtitle,
								"Message"=>$message,
								"Category"=>$category,
								"Mediaz"=>$mediaz,
								"IPAddr"=>$ipaddress
						));

						if($checkupd==false)
						{
							$response = "<div align='center' class='alert alert-dismissable alert-danger'>
											<button class='close' data-dismiss='alert'>&times;</button>
											Sorry! Action could not be completed now. Please try again later.
										</div>";
						}	
						else{
								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												<b>Done!</b> Update succesful.
											</div>";									
						}
					}
				
				}//if(User chooses a photo ends here)
				else
				{
					$media = $_POST["MediaHolder"];

					$checkupd = $crud->update("broadcast", "ID", $editval, 
					array("Reach"=>$reach,
							"Target"=>$target,
							"Title"=>$title,
							"OgTitle"=>$ogtitle,
							"Message"=>$message,
							"Category"=>$category,
							"Mediaz"=>$media,
							"IPAddr"=>$ipaddress
					));

					//var_dump($checkupd);
					if($checkupd==false)
					{
						$response = "<div align='center' class='alert alert-dismissable alert-danger'>
										<button class='close' data-dismiss='alert'>&times;</button>
										Sorry! Action could not be completed now. Please try again later.
									</div>";
					}	
					else{
							$response = "
										<div class='no-results'>
											<div class='swal2-icon swal2-success swal2-animate-success-icon'>
												<div class='swal2-success-circular-line-left'
													style='background-color: rgb(255, 255, 255);'></div>
												<span class='swal2-success-line-tip'></span>
												<span class='swal2-success-line-long'></span>
												<div class='swal2-success-ring'></div>
												<div class='swal2-success-fix'
													style='background-color: rgb(255, 255, 255);'></div>
												<div class='swal2-success-circular-line-right'
													style='background-color: rgb(255, 255, 255);'></div>
											</div>
											<div class='results-title' style='color: #449131'>
												<b>Done!</b> Update successful.
											</div>
										</div>

										";									
					}
					
				}
					
						
			}

		}
	}	
	
	break;

	
	//Update ADMIN DETAILS
	case 6:

	$photo_size = $_FILES["Photo"]["size"];
	$photo_name = $_FILES["Photo"]["name"];
	$ipaddress = $_SERVER["REMOTE_ADDR"];
	$fname = $_POST["Fname"];
	$sname = $_POST["Sname"];
	$bio = $_POST["Bio"];
	$role = $_POST["Role"];
	$editval = $_POST["EDITVAL"];
	$accesslevel = $_SESSION["accesslevel"];

	$check = ( isset($accesslevel) && $accesslevel == "1" );

	if($check == FALSE)
	{
			$response = "<div class='alert alert-danger alert-dismissable'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<p align='center' style='color: #ff0000 !important;' >
							Sorry! You don't have permission to perform this action.
						</p>
					</div>";
	}
	else
	{
		if( ($fname == "") || ($bio == "") ){

			$response = "<div class='alert alert-danger alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! Boxes with asterisks cannot be empty.
							</p>
						</div>";
		}
		else
		{
			if($photo_size > (3*1024*1024) )
			{	
				$response = "<div align='center' class='alert alert-dismissable alert-danger'>
								<button class='close' data-dismiss='alert'>&times;</button>
								The File you are trying to upload is too large. maximum size allowed is 3mb!
							</div>";
			}
			else
			{
				//var_dump($uname);
				if(!empty($photo_name))
				{
					$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
					//$ext = explode(".", $photo_size)[1];
					//var_dump($ext);
					if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
					{
						//If wrong format of picture or video is selected
						$response = "<div align='center' class='alert alert-danger alert-dismissable'>
									<button class='close' data-dismiss='alert'>&times;</button>
									<p>Sorry! File format not supported. Please choose a Photo (PNG of JPEG format)!</p>
								</div>";
					}
					else
					{
						if(!empty($photo_name))
						{
							$temp = explode(".",  $photo_name);
							$photo = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Photo"]["tmp_name"], "files/img/".$photo);
							$_SESSION["Photo"] = $photo;
						}
						else
						{
							$photo = $_POST["PhotoHolder"];
						}
					}//Photo format
						
				}
				else//Nothing chosen by user
				{
					$photo = $_POST["PhotoHolder"];
				}

				$checkupd = $crud->update("admin", "UID", $editval, 
					array("Fname"=>$fname,
							"Sname"=>$sname,
							"Bio"=>$bio,
							"Photo"=>$photo,
							"Role"=>$role,
							"AccessLevel"=>$accesslevel,
							"IPAddr"=>$ipaddress

					));

				 //var_dump($checkupd); 
				if($checkupd == FALSE)
				{
					$response = "<div align='center' class='alert alert-dismissable alert-danger'>
								<button class='close' data-dismiss='alert'>&times;</button>
								Sorry! Action could not be completed now. Please try again later.
							</div>";
				}	
				else{
					$response = "<div align='center' class='alert alert-dismissable alert-success'>
									<button class='close' data-dismiss='alert'>&times;</button>
									Done! Admin details updated successfully.
								</div>";
																	
				}	
						
			}

		}
	}	

	break;

	


	
	//UPDATE PROFILE
	case 7:

		$crud = new Crud($connect);
	
		$resume_size = $_FILES["Resume"]["size"];
		$resume_name = $_FILES["Resume"]["name"];
		$editval = $_POST["EDITVAL"];
		(isset($_POST["Agree"])) ? $agree = $_POST["Agree"] : $agree = "";
		$uid = $_SESSION["duid"];
		$acc_lev = $_SESSION["accesslevel"];
	
		$email = $_POST["Email"];
		$phone = $_POST["Phone"];
		$edu = $_POST["Education"];
		$skills = $_POST["Skills"];
		$cert = $_POST["Certification"];
		$exp = $_POST["Experience"];
		$addr1 = $_POST["Address1"];
		$addr2 = $_POST["Address2"];
		$hob = $_POST["Hobby"];
		$lang = $_POST["Language"];
		$ref = $_POST["Referee"];
		
		if(!empty($_POST["Niche"])) {
			$niche = implode(',',$_POST['Niche']);
		}
		if( empty($agree) ){
	
			$response = "<div align='center' class='alert alert-danger alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
								Sorry! Check the agree information box to confirm you have provided true information
						</div>";
		}
		else
		{
			if($resume_size > (3*1024*1024) )
			{	
				$response = "<div align='center' class='alert alert-dismissable alert-danger'>
								<button class='close' data-dismiss='alert'>&times;</button>
								The File you are trying to upload is too large. maximum size allowed is 3mb!
							</div>";
			}
			else
			{
				if(!empty($resume_name))
				{
					$ext = pathinfo($resume_name, PATHINFO_EXTENSION);
					$ext = strtolower($ext);
					//$ext = explode(".", $photo_size)[1];
					//var_dump($ext);
					if($ext != 'pdf' && $ext != 'png' && $ext != 'doc' && $ext != 'jpg' && $ext != 'docx' && $ext != 'jpeg')
					{
						//If wrong format of picture or video is selected
						$response = "<div align='center' class='alert alert-danger alert-dismissable'>
										<button class='close' data-dismiss='alert'>&times;</button>
										<p align='center' style='color: #ff0000 !important;' >
											Sorry! File format not supported. Please choose a Photo (PNG, JPG and JPEG format)
											or Document (PDF, DOC and DOCX)!
										</p>
									</div>";
					}
					else
					{
						$temp = explode(".",  $resume_name);
						$resume = md5(uniqid(time(),true)) . '.' . end($temp);
						move_uploaded_file($_FILES["Resume"]["tmp_name"], "../../files/resume/".$resume);
						$_SESSION["resume"] = $resume;

						(!isset($niche)) ? $niche = 2 : "";
					
						$update_profile = $crud->update("profile", "ID", $editval, 
						array(
								"Resume"=>$resume,
								"UID"=>$uid,
								"AccessLevel"=>$acc_lev,
								"Email"=>$email,
								"Phone"=>$phone,
								"Education"=>$edu,
								"Skills"=>$skills,
								"Certification"=>$cert,
								"Experience"=>$exp,
								"Address1"=>$addr1,
								"Address2"=>$addr2,
								"Hobby"=>$hob,
								"Language"=>$lang,
								"Niche"=>$niche,
								"Referee"=>$ref
						));
	
						// var_dump($checkupd);
						if($update_profile == false)
						{
							$response = "<div align='center' class='alert alert-dismissable alert-warning'>
											<button class='close' data-dismiss='alert'>&times;</button>
											Sorry! profile could not be updated now. Please try again later.
										</div>";
						}
						else
						{
	
							$response = "<div align='center' class='alert alert-dismissable alert-success'>
											<button class='close' data-dismiss='alert'>&times;</button>
											Done! profile successfully updated.
										</div>";
						}
					}
				
				}//if(User chooses a photo ends here)
				else
				{
					$resume = $_POST["ResumeHolder"];
					(!isset($niche)) ? $niche = 2 : "";
					$update_profile = $crud->update("profile", "ID", $editval, 
						array(
								"Resume"=>$resume,
								"UID"=>$uid,
								"AccessLevel"=>$acc_lev,
								"Email"=>$email,
								"Phone"=>$phone,
								"Education"=>$edu,
								"Skills"=>$skills,
								"Certification"=>$cert,
								"Experience"=>$exp,
								"Address1"=>$addr1,
								"Address2"=>$addr2,
								"Hobby"=>$hob,
								"Language"=>$lang,
								"Niche"=>$niche,
								"Referee"=>$ref
								//if(!isset($niche)){, "Niche"=>$niche }
						));
	
					// var_dump($checkupd);
					if($update_profile == false)
					{
						$response = "<div align='center' class='alert alert-dismissable alert-warning'>
										<button class='close' data-dismiss='alert'>&times;</button>
										Sorry! profile could not be updated now. Please try again later.
									</div>";
					}
					else
					{
	
						$response = "<div align='center' class='alert alert-dismissable alert-success'>
										<button class='close' data-dismiss='alert'>&times;</button>
										Done! Profile successfully updated.
									</div>";
					}
					
				}
					
						
			}
	
		}
	
		break;
	
	



	//CHANGE PASSWORD
	case 8:

	$ipaddress = $_SERVER["REMOTE_ADDR"];
	$editval = $_POST["EDITVAL"]; 
	$acc_code = $_POST["ActivationCode"];
	$email = $_POST["Email"];
	$pword1 = $_POST["Pword1"];
	$pword2 = $_POST["Pword2"];
	$acc_code_db = $crud->AnyContent("ActivationCode", "users", "Email", $email); 
	$acc_lev_db = $crud->AnyContent("AccessLevel", "users", "Email", $email); 

	
	if( $acc_code != $acc_code_db ){

		$response = "<div class='alert alert-warning alert-dismissable'>
						<button class='close' data-dismiss='alert'>&times;</button>
						<p align='center' style='color: #ff0000 !important;' >
							Ooops! Something went wrong!. Please try again later and if problem persists please <a href='contact-us'>contact an Admin</a> 
						</p>
					</div>";
	}
	else
	{

		if( $pword1 != $pword2 ){

			$response = "<div class='alert alert-warning alert-dismissable'>
							<button class='close' data-dismiss='alert'>&times;</button>
							<p align='center' style='color: #ff0000 !important;' >
								Sorry! New passwords don't match. Please check and try again.
							</p>
						</div>";
		}
		else
		{
			$salt = "smartTulsSalt//009";
			$alpha = $pword1.$salt;
			$pword = md5(sha1($alpha));

			$checkupd = $crud->update("users", "ID", $editval, 
			array(
					"Pword"=>$pword,
					"IPAddr"=>$ipaddress
			));

			//var_dump($checkrupd);
			if($checkupd==false)
			{
				$response = "<div align='center' class='alert alert-dismissable alert-warning'>
								<button class='close' data-dismiss='alert'>&times;</button>
								Sorry! Your details could not be modified now. Please try again later.
							</div>";
			}	
			else{
					if(isset($acc_lev_db) && $acc_lev_db == "1"){
						$crud->update("admin", "UID", $editval, 
								array(
										"Pword"=>$pword,
										"IPAddr"=>$ipaddress
								));

								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your password has been changed. <br/>
												Please use the new password to <a href='signin'>sign in</a>.
											</div>";

								header("Location: ../signin.php");
					}
					elseif(isset($acc_lev_db) && $acc_lev_db == "2"){
						$crud->update("sub_admin", "UID", $editval, 
								array(
										"Pword"=>$pword,
										"IPAddr"=>$ipaddress
								));

								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your password has been changed. <br/>
												Please use the new password to <a href='signin'>sign in</a>.
											</div>";	
								header("Location: ../signin.php");
					}
					elseif(isset($acc_lev_db) && $acc_lev_db == "3"){
						$crud->update("members", "UID", $editval, 
								array(
										"Pword"=>$pword,
										"IPAddr"=>$ipaddress
								));

								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<button class='close' data-dismiss='alert'>&times;</button>
												Done! Your password has been changed. <br/>
												Please use the new password to <a href='signin'>sign in</a>.
											</div>";
								header("Location: ../signin.php");							
					}
										
				}	

		}
				
							
	}

	break;



	//Update Advert
	case 11:
		$cc = new Crud($connect);
				
		$photo_size = $_FILES["Photo"]["size"];
		$photo_name = $_FILES["Photo"]["name"];
		$name = $_POST["CompName"];
		$email = $_POST["CompEmail"];
		$phone = $_POST["CompPhone"];
		$web = $_POST["CompWeb"];
		$addr = $_POST["CompAddr"];
		$type = $_POST["Type"];
		$exp_date = $_POST["daterange-centered"];
		$date_hold = $_POST["DateHolder"];
		$des = $_POST["Description"];
		$accesslevel = $cc->AnyContent("AccessLevel", "users", "ID", $_SESSION["duid"] );
		$editval = $_POST["EDITVAL"];
	
		if($accesslevel <> 1)
		{
				$response = "<div align='center' class='alert alert-danger alert-dismissable'>
								<p align='center' style='color: #ff0000 !important;' >
									Sorry! You are not allowed to perform this action.
								</p>
							</div>";
		}
		else
		{
			if( ($name == "") || ($phone == "") || ($email == "") ){
	
				$response = "<div align='center' class='alert alert-danger alert-dismissable'>
								<button class='close' data-dismiss='alert'>&times;</button>
									Sorry! Boxes with asterisks cannot be empty.
							</div>";
			}
			else
			{
				if($photo_size > (5*1024*1024) )
				{	
					$response = "<div align='center' class='alert alert-dismissable alert-danger'>
									The File you are trying to upload is too large. maximum size allowed is 5mb!
								</div>";
				}
				else
				{
					//var_dump($uname);
					if(!empty($photo_name))
					{
						$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
						
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
						{
							//If wrong format of picture or video is selected
							$response = "<div align='center' class='alert alert-danger alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! File format not supported. Please choose a Photo (PNG, JPG and JPEG format)!
											</p>
										</div>";
						}
						else
						{
							$temp = explode(".",  $photo_name);
							$photo = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/advert/".$photo);
							$_SESSION["Photo"] = $photo;
						
							$checkupd = $crud->update("advert", "ID", $editval, 
							array("CompanyName"=>$name,
									"CompanyEmail"=>$email,
									"CompanyPhone"=>$phone,
									"CompanyWebsite"=>$web,
									"CompanyAddress"=>$addr,
									"Photo"=>$photo,
									"Type"=>$type,
									"Description"=>$des,

									"ExpiryDate"=> (!empty($exp_date)) ? $exp_date : $date_hold

							));
	
							if($checkupd==false)
							{
								$response = "<div align='center' class='alert alert-dismissable alert-danger'>
												Sorry! Action could not be completed now. Please try again later.
											</div>";
							}	
							else{
									$response = "<div align='center' class='alert alert-dismissable alert-success'>
													<b>Done!</b> Advert updated successfully.
												</div>";									
							}
						}
					
					}//if(User chooses a photo ends here)
					else
					{
						$photo = $_POST["PhotoHolder"];
	
						$checkupd = $crud->update("advert", "ID", $editval, 
							array("CompanyName"=>$name,
									"CompanyEmail"=>$email,
									"CompanyPhone"=>$phone,
									"CompanyWebsite"=>$web,
									"CompanyAddress"=>$addr,
									"Photo"=>$photo,
									"Type"=>$type,
									"Description"=>$des,

									"ExpiryDate"=> (!empty($exp_date)) ? $exp_date : $date_hold

							));
	
							if($checkupd==false)
							{
								$response = "<div align='center' class='alert alert-dismissable alert-danger'>
												Sorry! Action could not be completed now. Please try again later.
											</div>";
							}	
							else{
									$response = "<div align='center' class='alert alert-dismissable alert-success'>
													<b>Done!</b> Advert updated successfully.
												</div>";									
							}
						
					}
						
							
				}
	
			}
		}	
		
		break;
	
	



	//Update Slide
	case 12:

		$photo_size = $_FILES["Photo"]["size"];
		$photo_name = $_FILES["Photo"]["name"];
		$title = $_POST["Title"];
		$fname = $_POST["Fname"];
		$uid = $_POST["UID"];
		$editval = $_POST["EDITVAL"];
	
			if( empty($title)){

				$response = "<div align='center' class='alert alert-danger alert-dismissable'>
								<button class='close' data-dismiss='alert'>&times;</button>
									Sorry! Title cannot be left empty.
							</div>";
			}
			else
			{
				//if picture is greater than 3mb i.e 1kb = 1024 bytes therefore 1024kb * 1024kb * 5 = ____ kilo-bytes
				if($photo_size > (5*1024*1024) )
				{	
					$response = "<div align='center' class='alert alert-dismissable alert-danger'>
									<button class='close' data-dismiss='alert'>&times;</button>
									The File you are trying to upload is too large. maximum size allowed is 5mb!
								</div>";
				}
				else
				{
					if(!empty($photo_name))
					{
						$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
						
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
						{
							//If wrong format of picture or video is selected
							$response = "<div align='center' class='alert alert-danger alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! File format not supported. Please choose a Photo (PNG, JPG and JPEG format)!
											</p>
										</div>";
						}
						else
						{
							$temp = explode(".",  $photo_name);
							$photo = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/slider/".$photo);
							$_SESSION["Photo"] = $photo;

							//Add Details to slide table
							$in = $crud->update("slide", "ID", $editval,  
							array( 'UID'=>$uid,
									'Fname' => $fname,
									'Photo'=>$photo,
									'Title'=>$title
							) );

							if(!isset($in)){
								$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Ooops! Slide not updated. Please try again later.</p>
											</p>
										</div>";
							}else{
								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<span> <b>Done!</b> Slide successfuly updated.</span>
											</div>";
							}
						}
					
					}//if(User chooses a photo ends here)
					else
					{
						$photo = $_POST["PhotoHolder"];

						//Add Details to slide table
						$in = $crud->update("slide", "ID", $editval, 
						array( 'UID'=>$uid,
								'Fname' => $fname,
								'Photo'=>$photo,
								'Title'=>$title
						) );

						if(!isset($in)){
							$response = "<div align='center' class='alert alert-warning alert-dismissable'>
										<p align='center' style='color: #ff0000 !important;' >
											Ooops! Slide not updated. Please try again later.</p>
										</p>
									</div>";
						}else{
							$response = "<div align='center' class='alert alert-dismissable alert-success'>
											<span> <b>Done!</b> Slide successfuly updated.</span>
										</div>";
						}
						
					}
						
							
				}

			}
	
		
		break;




		
	//Update  WORKER Slide for Homepage
	case 13:

		$photo_size = $_FILES["Photo"]["size"];
		$photo_name = $_FILES["Photo"]["name"];
		$title = $_POST["Title"];
		$fname = $_POST["Fname"];
		$uid = $_POST["UID"];
		$editval = $_POST["EDITVAL"];
	
			if( empty($title)){

				$response = "<div align='center' class='alert alert-danger alert-dismissable'>
								<button class='close' data-dismiss='alert'>&times;</button>
									Sorry! Title cannot be left empty.
							</div>";
			}
			else
			{
				//if picture is greater than 3mb i.e 1kb = 1024 bytes therefore 1024kb * 1024kb * 5 = ____ kilo-bytes
				if($photo_size > (5*1024*1024) )
				{	
					$response = "<div align='center' class='alert alert-dismissable alert-danger'>
									<button class='close' data-dismiss='alert'>&times;</button>
									The File you are trying to upload is too large. maximum size allowed is 5mb!
								</div>";
				}
				else
				{
					if(!empty($photo_name))
					{
						$ext = pathinfo($photo_name, PATHINFO_EXTENSION);
						
						if($ext != 'PNG' && $ext != 'png' && $ext != 'JPG' && $ext != 'jpg' && $ext != 'JPEG' && $ext != 'jpeg')
						{
							//If wrong format of picture or video is selected
							$response = "<div align='center' class='alert alert-danger alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Sorry! File format not supported. Please choose a Photo (PNG, JPG and JPEG format)!
											</p>
										</div>";
						}
						else
						{
							$temp = explode(".",  $photo_name);
							$photo = md5(uniqid(time(),true)) . '.' . end($temp);
							move_uploaded_file($_FILES["Photo"]["tmp_name"], "../../files/images/slider/".$photo);
							$_SESSION["Photo"] = $photo;

							//Add Details to slide table
							$in = $crud->update("worker_slide", "ID", $editval,  
							array( 'UID'=>$uid,
									'Fname' => $fname,
									'Photo'=>$photo,
									'Title'=>$title
							) );

							if(!isset($in)){
								$response = "<div align='center' class='alert alert-warning alert-dismissable'>
											<p align='center' style='color: #ff0000 !important;' >
												Ooops! Worker slide not updated. Please try again later.</p>
											</p>
										</div>";
							}else{
								$response = "<div align='center' class='alert alert-dismissable alert-success'>
												<span> <b>Done!</b> Worker slide successfuly updated.</span>
											</div>";
							}
						}
					
					}//if(User chooses a photo ends here)
					else
					{
						$photo = $_POST["PhotoHolder"];

						//Add Details to slide table
						$in = $crud->update("worker_slide", "ID", $editval, 
						array( 'UID'=>$uid,
								'Fname' => $fname,
								'Photo'=>$photo,
								'Title'=>$title
						) );

						if(!isset($in)){
							$response = "<div align='center' class='alert alert-warning alert-dismissable'>
										<p align='center' style='color: #ff0000 !important;' >
											Ooops! Worker slide not updated. Please try again later.</p>
										</p>
									</div>";
						}else{
							$response = "<div align='center' class='alert alert-dismissable alert-success'>
											<span> <b>Done!</b> Worker slide successfuly updated.</span>
										</div>";
						}
						
					}
						
							
				}

			}
	
		
		break;











	default:
	break;


	}//SWITCH STATEMENT

}//IF EDIT CONDITION



/*
===========================================================================================================
									APPLY AND CANCEL JOB APPLICATION
============================================================================================================
*/

if(isset($_GET["apply-job"]) && $_GET["apply-job"] != "" )
{
	$crud = new Crud($connect);
	$Timenow = date("Y-m-d G:i:s");

	$app_job = $_GET["apply-job"];
	$jid = $_GET["xid"];
	$pid = $_GET["yid"];
	$fid = $_GET["zid"];
	$datez = $Timenow;
	$att_id = rand(00000, 99999); //md5(uniqid(time(),true));
	
	//$check = $crud->select("job_attach", "*", " JID = '".$job_id."' AND PID = '".$pid."' AND FID = '".$fid."' ");

	if($app_job == 2)
	{
			//$sql = "update yourTable set yourField = replace(replace(yourField, 'Prince', ''), '@@' , '@') where yourCondition";
		try 
		{	
			//Add Details to job_attach table
			$crud->insert("job_attach", 
			array( 
					'JID' => $jid,
					'PID' => $pid,
					'FID' => $fid,
					'AttachID' => $att_id,
					'AddedOn'=> $datez
			) );

			if($_SESSION["accesslevel"] == 1) {
				header("Location: ../admin/pages/dashboard?dil=job"); 
			}
			elseif($_SESSION["accesslevel"] == 3) {
				header("Location: ../members/pages/dashboard?dil=job"); }
			else{ }//Do Nothing
		} 
		catch (PDOException $e) 
		{
			echo $e->getMessage();
		}
	}
	elseif($app_job == 1)
	{
			$sqlz = "DELETE FROM job_attach WHERE JID = '".$jid."' AND PID = '".$pid."' AND FID = '".$fid."' ";
			$q = $connect->prepare($sqlz);
			$q->execute();

			if($_SESSION["accesslevel"] == 1) {
				header("Location: ../admin/pages/dashboard?dil=job"); 
			}
			elseif($_SESSION["accesslevel"] == 3) {
				header("Location: ../members/pages/dashboard?dil=job"); }
			else{ }//Do Nothing
	}
	else{
		echo "";
	}
	
}



/*
===========================================================================================================
									ACCEPT JOB FROM FINDERS
============================================================================================================
*/

if(isset($_GET["accept-job"]) && $_GET["accept-job"] != "" )
{
	$crud = new Crud($connect);

	$jid = $_GET["xid"];
	$pid = $_GET["yid"];
	$aj = $_GET["accept-job"];

	//$check = $crud->select("advert", "*", " ID = '".$adv_id."' ");

	if($aj == 3)
	{
			$result = "UPDATE job_attach SET Apply = 2 WHERE PID = '".$pid."' AND JID = '".$jid."' ";
			$q = $connect->prepare($result); 
			$q->execute();
			
			header("Location: ../admin/pages/dashboard?dil=post-job");
	}
	elseif($aj == 2)
	{
		$result = "UPDATE job_attach SET Apply = 3 WHERE PID = '".$pid."' AND JID = '".$jid."' ";
		$q = $connect->prepare($result); 
		$q->execute();
		
		header("Location: ../admin/pages/dashboard?dil=post-job");
	}
	elseif($aj == 1)
	{
		$result = "UPDATE job_attach SET Apply = 2 WHERE PID = '".$pid."' AND JID = '".$jid."' ";
		$q = $connect->prepare($result); 
		$q->execute();
		
		header("Location: ../admin/pages/dashboard?dil=post-job");
	}
	else{
		echo "";
	}
	
	
}



/*
===========================================================================================================
									ACTIVATE AND DEACTIVATE ADVERTS
============================================================================================================
*/

if(isset($_GET["activate"]) && $_GET["activate"] != "" )
{
	$crud = new Crud($connect);

	$adv_id = $_GET["xid"];
	$act_val = $_GET["activate"];

	$check = $crud->select("advert", "*", " ID = '".$adv_id."' ");

	if($_GET["activate"] == 1)
	{
		if($check)
		{ 
			$result = "UPDATE advert SET Active = 2 WHERE ID = '".$adv_id."' ";
			$q = $connect->prepare($result); 
			$q->execute();
			
			header("Location: ../admin/pages/dashboard?main&tuls=advert");
		}
		else{
			header("Location: ../confirm-account");
		}
	}
	elseif($_GET["activate"] == 2)
	{
		if($check)
		{
			$result = "UPDATE advert SET Active = 1 WHERE ID = '".$adv_id."' ";
			$q = $connect->prepare($result); 
			$q->execute();
			
			header("Location: ../admin/pages/dashboard?main&tuls=advert");
		}
		else{
			header("Location: ../confirm-account");
		}
	}//elseif
	
}




/*
===========================================================================================================
									ACTIVATE AND DEACTIVATE USERS
============================================================================================================
*/

if(isset($_GET["act-user"]) && $_GET["act-user"] != "" )
{
	$crud = new Crud($connect);

	$lid = $_GET["lid"];
	$xid = $_GET["xid"];
	$act_usr = $_GET["act-user"];

	if($act_usr == 3)
	{
		$result = "UPDATE users SET ActiveStatus = 2 WHERE ID = '".$xid."' AND AccessLevel = '".$lid."' ";
		$q = $connect->prepare($result); 
		$q->execute();
		
		if($lid == 2){
			$crud->update("sub_admin", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=sub-admin");
		}elseif($lid == 3){
			$crud->update("school", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=school");
		}elseif($lid == 4){
			$crud->update("teacher", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=teacher");
		}elseif($lid == 5){
			$crud->update("non_academic", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=non-academic");
		}elseif($lid == 6){
			$crud->update("student", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=student");
		}elseif($lid == 7){
			$crud->update("parent", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=parent");
		}elseif($lid == 8){
			$crud->update("mentor", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=mentor");
		}else{
			header("Location: ../admin/pages/dashboard?main&tuls=home");
		}
	}
	elseif($act_usr == 2)
	{
		$result = "UPDATE users SET ActiveStatus = 3 WHERE ID = '".$xid."' AND AccessLevel = '".$lid."' ";
		$q = $connect->prepare($result); 
		$q->execute();
		
		if($lid == 2){
			$crud->update("sub_admin", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=sub-admin");
		}elseif($lid == 3){
			$crud->update("school", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=school");
		}elseif($lid == 4){
			$crud->update("teacher", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=teacher");
		}elseif($lid == 5){
			$crud->update("non_academic", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=non-academic");
		}elseif($lid == 6){
			$crud->update("student", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=student");
		}elseif($lid == 7){
			$crud->update("parent", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=parent");
		}elseif($lid == 8){
			$crud->update("mentor", "UID", $xid, array("ActiveStatus"=> 3 ));
			header("Location: ../admin/pages/dashboard?main&tuls=mentor");
		}else{
			header("Location: ../admin/pages/dashboard?main&tuls=home");
		}
	}
	elseif($act_usr == 1)
	{
		$result = "UPDATE users SET ActiveStatus = 2 WHERE ID = '".$xid."' AND AccessLevel = '".$lid."' ";
		$q = $connect->prepare($result); 
		$q->execute();
		
		if($lid == 2){
			$crud->update("sub_admin", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=sub-admin");
		}elseif($lid == 3){
			$crud->update("school", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=school");
		}elseif($lid == 4){
			$crud->update("teacher", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=teacher");
		}elseif($lid == 5){
			$crud->update("non_academic", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=non-academic");
		}elseif($lid == 6){
			$crud->update("student", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=student");
		}elseif($lid == 7){
			$crud->update("parent", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=parent");
		}elseif($lid == 8){
			$crud->update("mentor", "UID", $xid, array("ActiveStatus"=> 2 ));
			header("Location: ../admin/pages/dashboard?main&tuls=mentor");
		}else{
			header("Location: ../admin/pages/dashboard?main&tuls=home");
		}
	}
	else{
		echo "";
	}
}






/*
===========================================================================
CONTROL FUNCTIONS
============================================================================
*/

function FetchTableContent($i)
{

/*
Fetchtable content List

1. fetch all users for dashboard
2. fetch all admins for dahsboard
3. total all sub-admins for dahsboard
4. total count of all registered users
5. total count of all admin users
6. fetch all users
17. Fetch General Settings
*/ 
	global $connect;
	$crud = new Crud($connect);

	switch ($i) {

		//select all users
		case 1:
			$data = $crud->select("users","*","", "ID DESC");
			return $data;
			break;

		//select all row from admin 1st level
		case 2:
			$data = $crud->select("admin","*", "", "ID DESC");
			return $data;
			break;

		//select all row from admin 2nd level
		case 3:
			$data = $crud->select("sub_admin","*", "", "ID DESC");
			return $data;
			break;

		//select all row from guest
		case 4:
			$data = $crud->select("guest","*", "", "ID DESC");
			return $data;
			break;

		//fetch audit trail messages for dashboard
		case 8:
			$data = $crud->select("gallery p",
					"p.*, k.Album, k.ID ",
					"",
					" p.ID DESC ", 
					" LEFT JOIN album k on p.Album = k.ID ");
			return $data;
			break;

		//select all row from advert
		case 9:
			$data = $crud->select("advert","*", "", "ID DESC");
			return $data;
			break;

		//select total unique users from general_log table
		case 10:
			$data = $crud->select("general_log","COUNT(ID) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;
		
		//select total clicks from general_log table
		case 11:
			$data = $crud->select("general_log","SUM(Visit) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;

		//select total unique user clicks from general_log table(For Individual Dashboards)
		case 12:
			$data = $crud->select("general_log","COUNT(Visit) as Total", "", "ID DESC");
			return $data[0]["Total"];

		//select all row from Audit Log
		case 13:
			$data = $crud->select("audit_log","*", "", "COUNT(ID) DESC", "UserID");
			return $data;
			break;

		//select total unique users from general_log table
		case 14:
			$data = $crud->select("users","COUNT(ID) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;
		
		//fetch general settings - used
		case 17:
			$data = $crud->select("general_settings", "*");

			return $data;
		break;

		//count schools
		case 18:
			$data = $crud->select("school","COUNT(SchoolID) as Total", "", "SchoolID DESC");
			return $data[0]["Total"];
			break;

		//count teachers 
		case 19:
			$data = $crud->select("teacher","COUNT(TID) as Total", "", "TID DESC");
			return $data[0]["Total"];
			break;

		//count student
		case 20:
			$data = $crud->select("student","COUNT(StdID) as Total", "", "StdID DESC");
			return $data[0]["Total"];
			break;

		//count parent
		case 21:
			$data = $crud->select("parent","COUNT(ParID) as Total", "", "ParID DESC");
			return $data[0]["Total"];
			break;

		//count non-academic
		case 22:
			$data = $crud->select("non_academic","COUNT(ID) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;

		//count sub-admin
		case 23:
			$data = $crud->select("sub_admin","COUNT(ID) as Total", "", "ID DESC");
			return $data[0]["Total"];
			break;
		//select all school
		case 24:
			$data = $crud->select("school","*","", "SchoolID DESC");
			return $data;
			break;
		//select all teacher
		case 25:
			$data = $crud->select("teacher","*","", "TID DESC");
			return $data;
			break;
		//select all student
		case 26:
			$data = $crud->select("student","*","", "StdID DESC");
			return $data;
			break;
		//select all parent
		case 27:
			$data = $crud->select("parent","*","", "ParID DESC");
			return $data;
			break;
		//select all non-academic
		case 28:
			$data = $crud->select("non_academic","*","", "ID DESC");
			return $data;
			break;





		
		default:
			# code...
			break;
	}
}





function FetchIndividualContent($i, $sid)
{
	/*
	Fetchindividual content List

	1. fetch users
	2. fetch specific user's details for everybody - Used
	3. fetch posted Feeds for Editting - Used
	4. 

	*/ 
	global $connect;
	$crud = new Crud($connect);

	switch ($i) {

		//fetch specific user's details for everybody - Used
		case 2:

			$data = $crud->select("users","*"," ID = '$sid' ");
			return $data;
			break;

		//fetch specific event for editing - Used
		case 3:

			$data = $crud->select("event","*"," ID = '$sid' ");
			return $data;
			break;

		//fetch specific from blog - Used
		case 4:

			$data = $crud->select("broadcast","*"," ID = '$sid' ");
			return $data;
			break;

		//fetch specific user's details for everybody - Used
		case 6:

			$data = $crud->select("admin","*"," UID = '$sid' ");
			return $data;
			break;

			//count all specific comment in blog - used
		case 7:
			$data = $crud->select("blog_com",
								"COUNT(ComID) as Total ",
								"BlogID = '$sid' ",
								"");
			return $data[0]["Total"];
			break;

		//fetch specific guests message - Used
		case 8:

			$data = $crud->select("guest","*"," ID = '$sid' ");
			return $data;
			break;					

		//fetch specific music for editing - Used
		case 16:

			$data = $crud->select("advert","*"," ID = '$sid' ");
			return $data;
			break;

		//fetch specific guests message - Used
		case 17:

			$data = $crud->select("audit_log","*"," UserID = '$sid' ");
			return $data;
			break;

		//fetch all rows where UserID = 0, same with all with IPAddress
		case 18:

			$data = $crud->select("audit_log","*"," UserID = 0 ");
			return $data;
			break;

		//fetch all rows where UserID = 0, same with all with IPAddress
		case 19:

			$data = $crud->select("profile","*"," UID = '$sid' ");
			return $data;
			break;

		//fetch all jobs from job where ID = $sid
		case 20:

			$data = $crud->select("job","*"," ID = '$sid' ");
			return $data;
			break;



		default:
			# code...
			break;
	}
}

function GetUserPhoto($uid)
{
	global $connect;
	$crud = new Crud($connect);

	$pp = FetchIndividualContent(2, $uid);

	if(isset($pp[0]["Photo"])){

		//$dd = $crud->AnyContent("Photo", "users", "ID", $uid);
		$data = "<img src='../files/images/profilepics/".$pp[0]["Photo"]."' width='60' height='60' class='pull-left thumbnail' ";
	}
	else{
		$data = "<img src='../files/images/profilepics/default.png' width='60' height='60' class='pull-left thumbnail' ";
	}

	return $data;
}


function GetUserPhoto2($uid)
{
	global $connect;
	$crud = new Crud($connect);

	$pp = FetchIndividualContent(2, $uid);

	if(isset($pp[0]["Photo"])){

		//$dd = $crud->AnyContent("Photo", "users", "ID", $uid);
		$data = "<img src='../files/images/profilepics/".$pp[0]["Photo"]."' width='60' height='60' class='pull-left thumbnail' ";
	}
	else{
		$data = "<img src='../files/images/profilepics/default.png' width='60' height='60' class='pull-left thumbnail' ";
	}

	return $data;
}


//this puts numbers in international format for nigeria
function MakePhoneNumberInt($thenumber)
{
	$dff = substr($thenumber, 0, 1);
	$dff2 = substr($thenumber, 0, 3);
	if($dff=="+")
	{
		return $thenumber;
	}
	else if($dff == "0")
	{
		return "234".substr($thenumber, 1);
	}
	else if($dff2 == "234")
	{
		return $thenumber;
	}
}	



//this sends mails
function SendMail($to, $subject, $message)
{
	global $connect;
	$crud = new Crud($connect);
   // global $connect, $database_connect;

    if(isset($to) && $to !="")
    {
        $mail = new PHPMailer();

        $sendername= "DILYASTREND";
        $senderemail = "info@dilyastrend.com";
        $to = $to;
        $subject = $subject;

        $themails = explode(",", $to);
        for ($i=0; $i <count($themails) ; $i++) { 
          $mail->AddAddress($themails[$i]);
        }

        $MessageHead =   "<img src=\"cid:fx\" /> <br><br>";
        $Message = $MessageHead . $message;

        $mail->From = $senderemail;
        $mail->FromName = $sendername;
        
        
        $mail->AddReplyTo('info@dilyastrend.com', 'DILYASTREND');
        $mail->AddEmbeddedImage("../assets/images/dilyastrend-logo1.jpg", 'DILYASTREND'); 
        $mail->IsHTML(true);                                  // set email format to HTML

        $mail->Subject = $subject;
        $mail->Body    = $Message; //for html capable clients
        //$mail->AltBody = $bodyPlainText; //for plain text clients

        if(!$mail->Send())
        {
            
          // echo "<p style='font-size:18px'>" . "<h2 style='color:red;'>Sorry!</h2><br> A problem occurred and your email could not be sent please try again later" . "</p>";
           //echo "Mailer Error: " . $mail->ErrorInfo;
          // echo "to is " . $to;
           //exit;
        	return false;
        }
        else
        {
        	return true;
        }
    }

}


// send a message
function Logtransaction($transtype, $amount, $description, $affects, $addedby)
{
	global $connect;
    $crud = new Crud($connect);

    $TransactionType = $transtype;
    $Amount = $amount;
    $ItemDescription = $description;
    $Affects = $affects;
    $EnteredBy = $addedby;
    $EnteredOn	= date("Y-m-d G:i:s");


    	
	$crud->insert("transactions", array("TransactionType" => $TransactionType,
	    								"Amount" => $Amount,
	    								"ItemDescription" => $ItemDescription,
	    								"Affects"=>$Affects,
	    								"EnteredBy"=>$EnteredBy,
	    								"EnteredOn"=>$EnteredOn
	    								));

    
}


// credit a user
function Credit($userid, $amount)
{
	global $connect;
    $crud = new Crud($connect);

    $cash =  $_SESSION["Wallet"] + $amount;
	$crud->update("users", "ID", $userid, 
				 array("WalletBalance" => $cash
	    		 ));

	return $cash;

    
}


// debit a user
function Debit($userid, $amount)
{
	global $connect;
    $crud = new Crud($connect);

    $cash =  $_SESSION["Wallet"] - $amount;
	$crud->update("users", "ID", $userid, 
				 array("WalletBalance" => $cash
	    		 ));

    return $cash;
}



// fetch system admin emails
function FetchAdminEmails()
{
	global $connect;
    $crud = new Crud($connect);
    $row = $crud->select("admin_emails", "GROUP_CONCAT(Email separator ', ') as AdminEmails", "IsActive ='1'" );
    return $row[0]["AdminEmails"];
}

// fetch system admin emails
function FetchAdminIDs()
{
	global $connect;
    $crud = new Crud($connect);
    $row = $crud->select("users", "GROUP_CONCAT(ID separator ', ') as AdminIDs", "AccessLevel ='1'" );
    return $row[0]["AdminIDs"];
}




?>
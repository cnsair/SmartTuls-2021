<?php 
    $page = "confirm-account";
    include_once("header.php");
?>

<body class="">
    <div class="pushdown">
        <div class="container">
            <div class="row" style="margin: 10% 0%">
                <div class="col-sm-8 col-sm-offset-2">

                    <div align="center" class="col-md-9">

                        <p class="err-404"><i class="fa fa-times"></i> 404 ERROR!</p>
                        <h2></i> Page Not Found!</h2>
                        <h3>Please Confirm Your Account</h3>
                        <h5>
                            Ooops! Something went wrong. It looks like your session has expired or you are not allowed to perform this action. <br/>
                            Try one of these links or contact an Administrator.<br/>
                            We are sorry for any inconvenience.
                        </h5>

                    </div>

                    <div class="col-sm-3">
                        <div class="col-md-offset-3 default-e404 confirm-acc">
                            
                            <h4>Useful Links</h4>

                            <!-- SIDE NAV -->
                            <ul class="confirm-acc" style="list-style-type: none">

                                <li><a href="index"><i class="fa fa-angle-right"></i> Home</a></li>
                                <li><a href="signin"><i class="fa fa-angle-right"></i> Sign In</a></li>
                                <li><a href="register"><i class="fa fa-angle-right"></i> Register</a></li>
                                <li><a href="gallery"><i class="fa fa-angle-right"></i> Gallery</a></li>
                                <li><a href="bc"><i class="fa fa-angle-right"></i> Broadcast</a></li>
                                <li><a href="#faq"><i class="fa fa-angle-right"></i> FAQ</a></li>

                            </ul>
                            <!-- /SIDE NAV -->

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- PUSHDOWN -->

<?php 
    include("footer.php");
?>
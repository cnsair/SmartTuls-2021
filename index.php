<?php 
    $page = "home";
    include("header.php"); 
?>

<body>
<div class="pushdown">
    <div id="tf-home" class="text-center">
     <div class="tp-banner-container">
        <div class="tp-banner" >
            <ul>    <!-- SLIDE  -->
                <!-- SLIDE 1-->
                <li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
                    <!-- MAIN IMAGE -->
                    <img src="images/black-school-kids-13.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

                    <!-- LAYERS -->
                    <div class="tp-caption mediumlarge_light_white_center customin customout start"
                        data-x="200"
                        data-hoffset="0"
                        data-y="50"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endspeed="300">EDUCATION<br>AT IT'S SIMPLEST
                    </div>

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption medium_bg_asbestos skewfromright"
                        data-x="200"
                        data-y="150"
                        data-speed="900"
                        data-start="800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">SCHOOLS
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption medium_bg_asbestos sfl"
                        data-x="200"
                        data-y="200"
                        data-speed="500"
                        data-start="1200"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">ASSOCIATIONS
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption medium_bg_asbestos skewfromleft"
                        data-x="200"
                        data-y="250"
                        data-speed="600"
                        data-start="1300"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">PROFESSIONALS
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption medium_bg_asbestos sft"
                        data-x="200"
                        data-y="300"
                        data-speed="700"
                        data-start="1400"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">MENTORS AND ADVISORS
                    </div>

                        <!-- LAYER NR. 5 -->
                    <div class="tp-caption medium_bg_asbestos lft"
                        data-x="200"
                        data-y="350"
                        data-speed="800"
                        data-start="1500"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">STUDENTS
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption medium_bg_asbestos lfl"
                        data-x="200"
                        data-y="400"
                        data-speed="900"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">CONNECT
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption medium_bg_asbestos lfl"
                        data-x="200"
                        data-y="450"
                        data-speed="1000"
                        data-start="1700"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">NEWS FEED
                    </div>

                    <!-- LAYER NR. 8 RIGHT-->
                    <div class="tp-caption medium_bg_asbestos sfr"
                        data-x="600"
                        data-hoffset="-250"
                        data-y="100"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="off"
                        style="z-index: 6">
                    <?php 

                        if(isset($_SESSION["duid"]) && !empty($_SESSION["duid"]) )
                        { 
                            echo "<div style=' margin-top:-40px;' class='animated rotateInDownLeft'>
                                    <h4 class='reg'>You are signed In</h4>
                                    <img style='height:440px;' class='img-responsive' src='assets/icons/smart-logo4.png'>
                                </div>";
                        }
                        else
                        { ?>
                            <div style=' margin-top:-60px;' class='animated rotateInDownLeft'>
                                <img style='height:300px;' class='img-responsive' src='assets/icons/smart-logo4.png'>
                                <a href="signin" style="background-color: #FF9900; border-radius: 0px; color: #fff;" class="btn btn-warning btn-block btn-flat reg">SIGN IN</a><br/>
                                <a href="register" style="background-color: #FF9900; border-radius: 0px; color: #fff;" class="btn btn-warning btn-block btn-flat reg">REGISTER</a>
                            </div>
                           
                    <?php } ?>
                    </div>

                </li>

                <!-- SLIDE 2 -->
                <li data-transition="zoomout" data-slotamount="7" data-masterspeed="1000" >
                    <!-- MAIN IMAGE -->
                    <img src="images/class_room.jpg"  alt="darkblurbg"  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption customin"
                        data-x="474"
                        data-y="189"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="800"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 2"><img src="images/macbook2.png" alt="">
                    </div>

                    <!-- REPLACED -->
                    <div class="tp-caption medium_bg_asbestos skewfromleft customout"
                        data-x="620"
                        data-y="180"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="550"
                        data-start="1450"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 6">Ideas
                    </div>

                    <!-- REPLACED -->
                    <div class="tp-caption medium_bg_darkblue skewfromleft customout"
                        data-x="650"
                        data-y="230"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 9">Think BIG !
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption customin"
                        data-x="245"
                        data-y="92"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="500"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 3">
                            <img src="images/imac1.png" alt="">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption customin"
                        data-x="693"
                        data-y="69"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="1300"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 4"><img src="images/lupe_macbook.png" alt="">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption customin"
                        data-x="100"
                        data-y="171"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="500"
                        data-start="1400"
                        data-easing="Power3.easeInOut"
                        data-endspeed="300"
                        style="z-index: 5"><img src="images/lupe_imac.png" alt="">
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption medium_bg_asbestos skewfromleft customout"
                        data-x="104"
                        data-y="154"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1500"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 6">On Mobile
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption medium_bg_asbestos skewfromleft customout"
                        data-x="300"
                        data-y="84"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="550"
                        data-start="1450"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 6">On PC's
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption medium_bg_darkblue skewfromleft customout"
                        data-x="350"
                        data-y="120"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 9">Assignments and Lectures !
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption medium_bg_red skewfromright customout"
                        data-x="820"
                        data-y="274"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1700"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 7">Children 
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption medium_bg_orange skewfromright customout"
                        data-x="820"
                        data-y="314"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1800"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 8">GREAT Minds !
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption medium_bg_darkblue skewfromleft customout"
                        data-x="168"
                        data-y="193"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="800"
                        data-start="1600"
                        data-easing="Power4.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        data-captionhidden="on"
                        style="z-index: 9">Use SmartTuls on the GO !
                    </div>

                     <!-- LAYER NR. 10 -->
                    <div class="tp-caption medium_light_white customin customout"
                        data-x="270"
                        data-y="39"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1000"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        style="z-index: 11">Welcome to the
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption large_bold_white customin customout"
                        data-x="472"
                        data-y="34"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1100"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        style="z-index: 10">Big
                    </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption medium_light_white customin customout"
                        data-x="575"
                        data-y="51"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1200"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-endeasing="Power1.easeIn"
                        style="z-index: 11">World of IT
                    </div>
                </li>

                <!-- SLIDE 3 -->
                <li data-transition="slidedown" data-slotamount="7" data-masterspeed="1000" >
                    <!-- MAIN IMAGE -->
                    <img src="images/class_3.jpg" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    
                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption large_bold_white customin ltl"
                        data-x="350"
                        data-y="90"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="1000"
                        data-start="500"
                        data-easing="Back.easeInOut"
                        data-endspeed="400"
                        data-endeasing="Back.easeIn"
                        style="z-index: 14">Teachers
                    </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption medium_light_white customin ltl"
                        data-x="600"
                        data-y="110"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="1000"
                        data-start="600"
                        data-easing="Back.easeInOut"
                        data-endspeed="400"
                        data-endeasing="Back.easeIn"
                        style="z-index: 15">&
                    </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption large_bold_white customin ltl"
                        data-x="650"
                        data-y="96"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="1000"
                        data-start="700"
                        data-easing="Back.easeInOut"
                        data-endspeed="400"
                        data-endeasing="Back.easeIn"
                        style="z-index: 16">Educators
                    </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption mediumlarge_light_white customin ltl"
                        data-x="300"
                        data-y="200"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-speed="1000"
                        data-start="800"
                        data-easing="Back.easeInOut"
                        data-endspeed="400"
                        data-endeasing="Back.easeIn"
                        style="z-index: 17; color:#FFFFFF">Make your students <span style="color:#FF9900">SEE</span> beyond the everyday classroom.<br/> Recycle their Orientation from Pen and Paper to <br/> that of <span style="color:#FF9900">COMPUTERS</span>.
                    </div>
                </li>

                <!-- SLIDE 4 -->
                <li data-transition="slideleft" data-slotamount="7" data-masterspeed="2000" >
                    <!-- MAIN IMAGE -->
                    <img src="images/transparent.png" style='background-color:#b2c4cc' alt=""  data-bgfit="cover" data-bgposition="left top" data-bgrepeat="no-repeat">
                    <!-- LAYERS -->

                    <!-- LAYER NR. 1 -->
                    <div class="tp-caption lfr"
                        data-x="889"
                        data-y="118"
                        data-speed="600"
                        data-start="1000"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        style="z-index: 2"><img src="images/cloud2.png" alt="">
                    </div>

                    <!-- LAYER NR. 2 -->
                    <div class="tp-caption lfr"
                        data-x="339"
                        data-y="67"
                        data-speed="600"
                        data-start="1100"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        style="z-index: 3"><img src="images/cloud3.png" alt="">
                    </div>

                    <!-- LAYER NR. 3 -->
                    <div class="tp-caption lfr"
                        data-x="12"
                        data-y="181"
                        data-speed="600"
                        data-start="1200"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        style="z-index: 4"><img src="images/cloud1.png" alt="">
                    </div>

                    <!-- LAYER NR. 4 -->
                    <div class="tp-caption lfr"
                        data-x="120"
                        data-y="352"
                        data-speed="600"
                        data-start="900"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-captionhidden="on"
                        style="z-index: 5"><img src="images/hill3.png" alt="">
                    </div>

                    <!-- LAYER NR. 5 -->
                    <div class="tp-caption lfr"
                        data-x="696"
                        data-y="377"
                        data-speed="600"
                        data-start="800"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-captionhidden="on"
                        style="z-index: 6"><img src="images/hill4.png" alt="">
                    </div>

                    <!-- LAYER NR. 6 -->
                    <div class="tp-caption grassfloor lfb ltr"
                        data-x="center" data-hoffset="0"
                        data-y="bottom" data-voffset="50"
                        data-speed="600"
                        data-start="0"
                        data-easing="Power4.easeOut"
                        data-endspeed="600"
                        data-endeasing="Power4.easeIn"
                        data-captionhidden="on"
                        style="z-index: 7">
                    </div>

                    <!-- LAYER NR. 7 -->
                    <div class="tp-caption lfr"
                        data-x="464"
                        data-y="382"
                        data-speed="600"
                        data-start="500"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-captionhidden="on"
                        style="z-index: 8"><img src="images/hill2.png" alt="">
                    </div>

                    <!-- LAYER NR. 8 -->
                    <div class="tp-caption lfr"
                        data-x="-59"
                        data-y="366"
                        data-speed="600"
                        data-start="600"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-captionhidden="on"
                        style="z-index: 9"><img src="images/hill1.png" alt="">
                    </div>

                    <!-- LAYER NR. 9 -->
                    <div class="tp-caption lfr"
                        data-x="857"
                        data-y="386"
                        data-speed="600"
                        data-start="700"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-captionhidden="on"
                        style="z-index: 10"><img src="images/hill2.png" alt="">
                    </div>

                    <!-- LAYER NR. 10 -->
                    <div class="tp-caption large_bold_white customin customout"
                        data-x="center" data-hoffset="0"
                        data-y="80"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1000"
                        data-start="1700"
                        data-easing="Back.easeInOut"
                        data-endspeed="300"
                        style="z-index: 11">Parents & Guardians
                    </div>

                    <!-- LAYER NR. 11 -->
                    <div class="tp-caption mediumlarge_light_white_center customin customout"
                        data-x="center" data-hoffset="0"
                        data-y="bottom" data-voffset="-120"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1000"
                        data-start="1900"
                        data-easing="Back.easeInOut"
                        data-endspeed="300"
                        style="z-index: 12">Invest BIG in the FUTURE<br/>
                           of the Young Ones<br/>
                            and HARVEST GREATNESS 
                    </div>

                    <!-- LAYER NR. 12 -->
                    <div class="tp-caption customin"
                        data-x="110"
                        data-y="118"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="300"
                        data-start="1300"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        data-captionhidden="on"
                        style="z-index: 13"><img src="images/tree.png" alt="">
                    </div>

                    <!-- LAYER NR. 13 -->
                    <div class="tp-caption customin customout"
                        data-x="center" data-hoffset="0"
                        data-y="bottom" data-voffset="-250"
                        data-customin="x:0;y:0;z:0;rotationX:90;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:200;transformOrigin:50% 0%;"
                        data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1000"
                        data-start="1800"
                        data-easing="Back.easeOut"
                        data-endspeed="300"
                        style="z-index: 14"><img src="images/clock2.png" alt="">
                    </div>

                    <!-- LAYER NR. 14 -->
                    <div class="tp-caption customin skewtoright"
                        data-x="817"
                        data-y="197"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1000"
                        data-start="2000"
                        data-easing="Back.easeOut"
                        data-endspeed="600"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 15"><img src="images/guy3.png" alt="">
                    </div>

                    <!-- LAYER NR. 15 -->
                    <div class="tp-caption customin skewtoright"
                        data-x="946"
                        data-y="155"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="1000"
                        data-start="2100"
                        data-easing="Back.easeOut"
                        data-endspeed="600"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 16"><img src="images/guy4.png" alt="">
                    </div>

                    <!-- LAYER NR. 16 -->
                    <div class="tp-caption customin customout"
                        data-x="126"
                        data-y="269"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1800"
                        data-easing="Back.easeOut"
                        data-end="4400"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 17"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 17 -->
                    <div class="tp-caption customin customout"
                        data-x="167"
                        data-y="303"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1500"
                        data-easing="Back.easeOut"
                        data-end="4100"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 18"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 18 -->
                    <div class="tp-caption customin customout"
                        data-x="264"
                        data-y="304"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1600"
                        data-easing="Back.easeOut"
                        data-end="4200"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 19"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 19 -->
                    <div class="tp-caption customin customout"
                        data-x="296"
                        data-y="250"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1700"
                        data-easing="Back.easeOut"
                        data-end="4300"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 20"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 20 -->
                    <div class="tp-caption customin customout"
                        data-x="223"
                        data-y="263"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1400"
                        data-easing="Back.easeOut"
                        data-end="4000"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 21"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 21 -->
                    <div class="tp-caption customin customout"
                        data-x="166"
                        data-y="256"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="1900"
                        data-easing="Back.easeOut"
                        data-end="4500"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 22"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 22 -->
                    <div class="tp-caption customin customout"
                        data-x="118"
                        data-y="219"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="2000"
                        data-easing="Back.easeOut"
                        data-end="4600"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 23"><img src="images/apple.png" alt="">
                    </div>

                    <!-- LAYER NR. 23 -->
                    <div class="tp-caption customin customout"
                        data-x="251"
                        data-y="208"
                        data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0;scaleY:0;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-customout="x:0;y:180;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:1;scaleY:1;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
                        data-speed="600"
                        data-start="2100"
                        data-easing="Back.easeOut"
                        data-end="4700"
                        data-endspeed="600"
                        data-endeasing="Bounce.easeOut"
                        data-captionhidden="on"
                        style="z-index: 24"><img src="images/apple.png" alt="">
                    </div>
                </li>
               
            </ul>        
                <!-- <a href="#tf-about" class="fa fa-angle-down page-scroll"></a> -->
            <div class="tp-bannertimer"></div>
        </div>
    </div>

       
    </div>

    <!-- About Us Page
    ==========================================-->
    <div id="tf-about">
        <div class="container">
            <div class="row">

                <div class="hidden-xs col-md-2" style="margin-right:-11px">
                    <div class="carousel slide" data-ride="carousel" id="carousel-example">

                        <div class="carousel-inner">
                            <?php  
                                try {
                                    $sqli = "SELECT * FROM advert WHERE Type = 2 AND Active = 1";
                                    $sqli = $connect->prepare($sqli);
                                    $sqli->execute();
                                    $count = 1;

                                    if($sqli->rowCount() < 1)
                                    {
                                        echo "<div>
                                                <img width='165' height='200px' src='files/images/advert/icons/advert-test.png'>
                                            </div>";
                                    }
                                    else
                                    {
                                        while ($row = $sqli->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <div class="item <?php if($count=="1") echo "active"; ?>" >
                                                <a href="<?php echo $row["CompanyWebsite"]; ?>" > 
                                                    <img style='height:200px; width:165px;' src="files/images/advert/<?php echo $row["Photo"]; ?>"   
                                                     alt="slide"></a>
                                            </div>
                                        <?php   $count++;
                                        }// end while
                                       
                                    } //end else
                                }
                                catch (PDOException $e) 
                                {
                                    echo $e->getMessage();
                                }
                            ?>
                        </div>
                    </div>

                    <div style="margin-top: 4px; padding-left:0px;">
                        <?php  
                            // $adv = new Crud($connect);
                            // $getrecords = $adv->select("advert", "*", "Adv_Value = '2' ");
                            // $web = $getrecords[0]["CompanyWebsite"];
                            // $item = $getrecords[0]["Item"];
                            // if($adv == "")
                            // {
                            //     echo "<img width='165px' height='175px' src='PNGs/Adsz.png'>";
                            // }
                            // else
                            // {
                            //     echo "<a href='".$web."' > <img src='adverts/".$item."' width='165px' height='175px'> </a> ";

                            // }
                        ?>
                    </div>

                </div>

                <div class="col-md-8" align="center" style="margin-left: ; margin-top: -10px;">
                    <div class="row">
                        <h4 style="color:#FF3300">Schools on SmartTuls <a style="text-decoration: none;" href="view_all_schools">|View All|</a></h4>
                    
                        <div class="panel panel-primary">

                            <div class="panel-body" align="center">

                                <?php   $apr = new Crud($connect);
                                        $getscl = $apr->select("schools", "*", "IsApproved = '1' ", "SchoolID DESC", "", "", "6");
                                        $count = 1;

                                    // $ftc_id = $getscl[0]["SchoolID"];
                                    // $ftc_n = $getscl[0]["SchoolName"]; 

                                    foreach ($getscl as $getdem) { ?>
                                
                                <div class="col-md-2 container-fluid" style="float: left;">
                                    <a href="view-school?galID=<?php echo $getdem["SchoolID"]; ?>&scl=<?php echo $getdem["SchoolName"]; ?>">
                                        <div class="">
                                            <img class="" style="height:100px; width:100px;" src="profilepics/<?php echo $apr->AnyContent("Picture", "users", "SchoolID", $getdem["SchoolID"]); ?>" alt="Please Upload School Logo">
                                            <div class="reg" style="font-size:12px; line-height:14px;"><?php echo substr($getdem['SchoolName'],0,40); ?></div>
                                        </div>
                                    </a>
                                </div>
                                
                                <?php $count++; }  ?>
                                
                            </div>
                                
                        </div>

                        <div class="panel panel-primary" style="margin-top: -18px">

                            <div class="panel-body" align="center">

                                <?php   $apr = new Crud($connect);
                                        $getscl2 = $apr->select("schools", "*", "IsApproved = '1' ", "SchoolID ASC", "", "", "6");
                                        $count = 1;

                                    foreach ($getscl2 as $getdem2) { ?>
                                
                                <div class="col-md-2 container-fluid" style="float: left;">
                                    <a href="view-school?galID=<?php echo $getdem2["SchoolID"]; ?>&scl=<?php echo $getdem2["SchoolName"]; ?>">
                                        <div class="">
                                            <img class="" style="height:100px; width:100px;" src="profilepics/<?php echo $apr->AnyContent("Picture", "users", "SchoolID", $getdem2["SchoolID"]); ?>" alt="Please Upload School Logo">
                                            <div class="reg" style="font-size:12px; line-height:14px;"><?php echo substr($getdem2['SchoolName'],0,40); ?></div>
                                        </div>
                                    </a>
                                </div>
                                
                                <?php }  ?>
                                

                            </div>
                                
                        </div>
                    </div>

                </div>

                <div class="hidden-xs col-md-2" style="margin-left: 10px;">
                    <div class="carousel slide" data-ride="carousel" id="carousel-example">

                        <div class="carousel-inner">
                            <?php  
                                try {
                                    $sqli = "SELECT * FROM advert WHERE Type = 2 AND Active = 1";
                                    $sqli = $connect->prepare($sqli);
                                    $sqli->execute();
                                    $count = 1;

                                    if($sqli->rowCount() < 1)
                                    {
                                        echo "<div>
                                                <img width='165' height='200px' src='files/images/advert/icons/advert-test.png'>
                                            </div>";
                                    }
                                    else
                                    {
                                        while ($row = $sqli->fetch(PDO::FETCH_ASSOC)) { ?>
                                        <div class="item <?php if($count=="1") echo "active"; ?>" >
                                                <a href="<?php echo $row["CompanyWebsite"]; ?>" > 
                                                    <img style='height:200px; width:165px;' src="files/images/advert/<?php echo $row["Photo"]; ?>"   
                                                     alt="slide"></a>
                                            </div>
                                        <?php   $count++;
                                        }// end while
                                       
                                    } //end else
                                }
                                catch (PDOException $e) 
                                {
                                    echo $e->getMessage();
                                }
                            ?>
                        </div>
                    </div>

                    <div style="margin-top: 4px; padding-left:0px;">
                        <?php  
                            // $adv = new Crud($connect);
                            // $getrecords = $adv->select("advert", "*", "Adv_Value = '6' ");

                            // $web = $getrecords[0]["CompanyWebsite"];
                            // $item = $getrecords[0]["Item"];

                            // if($getrecords == "")
                            // {
                            //     echo "<img width='165px' height='175px' src='PNGs/Adsz.png'>";
                            // }
                            // else
                            // {
                            //     echo "<a href='".$web."' > <img src='adverts/".$item."' width='165px' height='175px'> </a> ";

                            // }
                        ?>
                    </div>
                    
                </div>

            </div>
        </div>
    </div>

    <!-- Team Page
    ==========================================-->
    <div id="tf-team" class="text-center">
        <div class="overlay">
            <div class="container">
                <div class="section-title center">
                    <h2>Associations <strong>and Partners</strong></h2>
                    <div class="line">
                        <hr>
                    </div>
                </div>

                <div id="team" class="owl-carousel owl-theme row">
                    <div class="item">
                        <div class="thumbnail">
                            <img src="partner/omep.png" alt="Please update logo" class="team-img">
                            <div class="caption">
                                <h3>OMEP</h3>
                                <h4>Educational Partner.</h4>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="partner/acep.png" alt="Please update logo" class="team-img">
                            <div class="caption">
                                <h3>ACEP</h3>
                                 <h4>Educational Partner.</h4>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="partner/edumedia.jpg" alt="..." class="img-circle team-img">
                            <div class="caption">
                                <h3>EDUMEDIA</h3>
                                <h4>Media & Marketing Partner</h4>
                            </div>
                        </div>
                    </div>

                    <div class="item">
                        <div class="thumbnail">
                            <img src="partner/CNScomputers-Logo2.png" alt="CNScomputers Inc." class="img-circle team-img">
                            <div class="caption">
                                <h3>CNScomputers</h3>
                                <h4>IT Partner</h4>
                            </div>
                        </div>
                    </div>

                    <!-- <a href="#tf-services" class="fa fa-arrow-down zarrows page-scroll"></a> -->
                </div>
                
            </div>
        </div>
    </div>



   
    <!-- Portfolio Section
    ==========================================-->
    <div class="clearfix"></div>

    <!-- Contact Section
    ==========================================-->
    <div id="tf-contact" class="col-md-12 text-center">
        <div class="container">

            <div class="row">
                <div class="col-md-9 col-md-offset-2">

                    <div class="section-title center">
                        <h2>Feel free to <strong>contact us</strong></h2>
                        <div class="line">
                            <hr>
                        </div>
                        <div class="clearfix"></div>
                       <div class="col-md-12 " >
            <div class="row">
            
            <!-- ====================================== CONTACT US STARTS HERE ======================================= -->


                <div  align="center" class="col-md-12">
                    <p class="bolded">
                    Please do well to drop your suggestions and feedbacks via the e.mail address below. Your feedbacks are highly needed. Thank You.
                    </p>
                    <p>E.mail: info@smarttuls.com</p>
                    <p class="social-icon">
                        <a href="https://www.facebook.com/smarttuls/"><i class="fa fa-facebook icon-xs icon-circle icon-facebook"> </i> Like us on facebook</a>
                        <a href="https://twitter.com/smarttul"><i class="fa fa-twitter icon-xs icon-circle icon-twitter"> </i> Follow us twitter</a>
                        <a href="https://aboutme.google.com/u/1/b/107061867328007741493/?referer=gplus"><i class="fa fa-google-plus icon-xs icon-circle icon-google-plus"> </i> Add us on google plus</a>
                    </p>
                </div>

                <div style="margin-bottom:20px">
                    <!-- <a class="btn btn-success" href="contactus"><p>View and Contact the Complete Team</p></a> -->
                </div>

                        <!-- ================================================ CONTACT US ENDS HERE ================================= -->

                        </div><!-- col-md-9 -->
                    </div><!-- col-md-12 -->           
                   </div>
                   	 
                    <form action="" method="POST">
                        <div class="">
                            <h2>SEND US A MESSAGE</h2>
                           <?php if (isset($msg)) { echo $msg; } ?>
                           
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label>Name</label>
                                    <input required maxlength="50" type="text" class="form-control" name="Name" placeholder="Full Name - e.g. Femi Uche Adamu - Maxlength: 50 characters">
                                </div>
                            </div>
                             <div class="col-md-6">
                                <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input required maxlength="50" type="email" class="form-control" name="Email" placeholder="Enter Email - Maxlength: 50 characters">
                                    <input type="hidden" name="INSERT" value="28">
                                </div>
                            </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="exampleInputEmail1">Message</label>
                            <textarea maxlenght="300" placeholder="You can include your phone number if you wish - Maxlenght: 300 characters." class="form-control" name="Message" rows="3"></textarea>
                        </div>
                        
                        <button type="submit" class="btn tf-btn btn-default">SEND</button>
                        
                    </form>
                </div>
            </div>
            <div align="right"><a href="#tf-home" class="fa fa-arrow-up zarrows page-scroll"></a></div>
        </div>
    </div>

    </div>
    
   <?php include("footer.php"); ?>
 
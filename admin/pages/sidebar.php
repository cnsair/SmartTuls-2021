<?php 
	$getprofile = FetchIndividualContent("2", $_SESSION["duid"]);

	$fname = $getprofile[0]["Fname"];
	$sname = $getprofile[0]["Sname"];
	$photo = $getprofile[0]["Photo"];
	$email = $getprofile[0]["Email"];
	$role = $getprofile[0]["Role"];
	$acc_lev = $getprofile[0]["AccessLevel"];
    $duid = $getprofile[0]["ID"];
    
    (isset($_GET["page"])) ? $page = $_GET["page"] : "";

    //if(isset($page)) { $page = $_GET["page"]; } else { echo ""; }
?>
<body>
    <div class="app-sidebar-wrapper">
        <div class="app-sidebar sidebar-shadow bg-midnight-bloom sidebar-text-light">
            <!-- class="app-sidebar bg-midnight-bloom sidebar-text-light" -->
            <div class="app-header__logo">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="My Dashboard" class=""> <!-- logo-src -->
                    <img src="../../assets/icons/smart-logo5.png" alt="SmartTuls Logo" class="headImg" >
                    <!-- <span class="head-light"><b>martTuls</b></span> -->
                </a>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                </button>
            </div>
            <div class="scrollbar-sidebar scrollbar-container">
                <div class="app-sidebar__inner">
                    <ul class="vertical-nav-menu">
                        <li class="app-sidebar__heading">Admin Controls</li>
                        
                        <li>
                            <a href="dashboard?main&tuls=home" class="<?php if(isset($_GET["tuls"]) && $_GET["tuls"] == "home") { echo "mm-active"; } ?>">
                                <i class="metismenu-icon pe-7s-culture">
                                </i>Dashboard
                            </a>
                        </li>
                        <li>
                            <a href="dashboard?main&tuls=audit-trail" class="<?php if(isset($_GET["tuls"]) && $_GET["tuls"] == "audit-trail" || $_GET["tuls"] == "check-action") { echo "active"; } else { echo ""; } ?>">
                                <i class="metismenu-icon pe-7s-graph3">
                                </i>Audit Trail
                            </a>
                        </li>
                        <li>
                            <a href="dashboard?main&tuls=guest" class="<?php if(isset($_GET["tuls"]) && $_GET["tuls"] == "guest" || $_GET["tuls"] == "read-guest-msg") { echo "active"; } ?>">
                                <i class="metismenu-icon pe-7s-mail">
                                </i>Guest Message
                            </a>
                        </li>
                        <li>
                            <a href="dashboard?main&tuls=advert" class="<?php //if(isset($_GET["tuls"]) && $_GET["tuls"] == "advert" || $_GET["tuls"] == "edit-advert") { echo "active"; } ?>">
                                <i class="metismenu-icon pe-7s-display1">
                                </i>Adverts
                            </a>
                        </li>
                        <li>
                            <a href="#" class="<?php //if($_GET["tuls"] == "create-blog" || $_GET["tuls"] == "post-job" || $_GET["tuls"] == "create-slide" || $_GET["tuls"] == "worker-slide" || $_GET["tuls"] == "message-picture" || $_GET["tuls"] == "story-album" || $_GET["tuls"] == "my-product" || $_GET["tuls"] == "product-title" ) { echo "active"; } ?>">
                                <i class="metismenu-icon pe-7s-cloud-upload"></i>
                                Uploads
                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                            </a>
                            <ul>
                                <li>
                                    <a href="dashboard?main&tuls=create-bc" class="<?php //if(isset($_GET["tuls"]) && $_GET["tuls"] == "create-blog") { echo "active"; } ?>">
                                        <i class="metismenu-icon">
                                        </i>Create BC
                                    </a>
                                </li>
                                <li>
                                    <a href="dashboard?main&tuls=bc-inner" class="<?php //if(isset($_GET["tuls"]) && $_GET["tuls"] == "my-product" || $_GET["tuls"] == "product-title") { echo "active"; } ?>">
                                        <i class="metismenu-icon">
                                        </i>BC Inner Picture
                                    </a>
                                </li>
                            </ul>
                        </li>

                        <li class="app-sidebar__heading">Others</li>
                    
                        <li>
                            <a href="dashboard?main&tuls=broadcast" class="<?php //if(isset($_GET["tuls"]) && $_GET["tuls"] == "blog" || $_GET["tuls"] == "story" || $_GET["tuls"] == "edit-blog") { echo "active"; } ?>">
                                <i class="metismenu-icon pe-7s-news-paper">
                                </i>Broadcast - BC
                            </a>
                        </li>
                        <li>
                            <a href="dashboard?main&tuls=gallery" class="<?php //if(isset($_GET["tuls"]) && $_GET["tuls"] == "gallery" || $_GET["tuls"] == "album") { echo "active"; } ?>">
                                <i class="metismenu-icon pe-7s-camera">
                                </i>Gallery
                            </a>
                        </li>
                        <li>
                            <a href="dashboard?main&tuls=calendar" class="<?php //if(isset($_GET["tuls"]) && $_GET["tuls"] == "calendar") { echo "active"; } ?>">
                                <i class="metismenu-icon pe-7s-keypad">
                                </i>Calendar
                            </a>
                        </li>


                    </ul>
                </div>
            </div>
        </div>
    </div>
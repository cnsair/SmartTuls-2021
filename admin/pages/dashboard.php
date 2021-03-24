<div class="app-main__outer">
    <div class="app-main__inner">

        <!-- =======================================================================================================
                                                        NAV HEADER
        =======================================================================================================
        <div class="navbar navbar-default navbar-fixed-top sticky-top"  role="navigation"> -->
        <div class="header-mobile-wrapper  sticky-top">
            <div class="app-header__logo navbar">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="My Dashboard" class=""> <!-- logo-src -->
                    <img src="../../assets/icons/smart-logo5.png" alt="SmartTuls Logo" class="headImg" >
                    <!-- <span class="head-light"><b>martTuls</b></span> -->
                </a>
                <button type="button" class="hamburger hamburger--elastic mobile-toggle-sidebar-nav">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>
                <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
                </div>
            </div>
        </div>

        <div class="app-header sticky-top">
            <div class="page-title-heading">
                Dashboard
                <div class="page-title-subheading">
                    You're signed in as <?php echo $role.", <b>".$fname." ".$sname."</b>"; ?>
                </div>
            </div>
            <div class="app-header-right">
                <div class="search-wrapper">
                    <i class="search-icon-wrapper typcn typcn-zoom-outline"></i>
                    <input type="text" placeholder="Search...">
                </div>
                <div class="header-btn-lg pr-0">
                    <div class="header-dots">

                        <div class="dropdown">
                            <button type="button" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown" class="p-0 btn btn-link">
                                <i class="typcn typcn-bell"></i>
                                <span class="badge badge-dot badge-dot-sm badge-danger">Notifications</span>
                            </button>
                            <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu-xl rm-pointers dropdown-menu dropdown-menu-right">
                                <div class="dropdown-menu-header mb-0">
                                    <div class="dropdown-menu-header-inner bg-night-sky">
                                        <div class="menu-header-image opacity-5" style="background-image: url('assets/images/dropdown-header/city2.jpg');"></div>
                                        <div class="menu-header-content text-light">
                                            <h5 class="menu-header-title">Notifications</h5>
                                            <h6 class="menu-header-subtitle">You have <b>21</b> unread messages</h6>
                                        </div>
                                    </div>
                                </div>
                                <ul class="tabs-animated-shadow tabs-animated nav nav-justified tabs-shadow-bordered p-3">
                                    <li class="nav-item">
                                        <a role="tab" class="nav-link active" data-toggle="tab" href="#tab-messages-header">
                                            <span>Messages</span>
                                        </a>
                                    </li>
                                    <!-- <li class="nav-item">
                                        <a role="tab" class="nav-link" data-toggle="tab" href="#tab-errors-header">
                                            <span>System</span>
                                        </a>
                                    </li> -->
                                </ul>
                                <div class="tab-content">
                                    <div class="tab-pane active" id="tab-messages-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="p-3">
                                                    <div class="notifications-box">
                                                        <div class="vertical-time-simple vertical-without-time vertical-timeline vertical-timeline--one-column">
                                                            <div class="vertical-timeline-item dot-danger vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><h4 class="timeline-title">All Hands Meeting</h4><span class="vertical-timeline-element-date"></span></div>
                                                                </div>
                                                            </div>
                                                            <div class="vertical-timeline-item dot-warning vertical-timeline-element">
                                                                <div><span class="vertical-timeline-element-icon bounce-in"></span>
                                                                    <div class="vertical-timeline-element-content bounce-in"><p>Yet another one, at <span class="text-success">15:00 PM</span></p><span class="vertical-timeline-element-date"></span>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- <div class="tab-pane" id="tab-errors-header" role="tabpanel">
                                        <div class="scroll-area-sm">
                                            <div class="scrollbar-container">
                                                <div class="no-results pt-3 pb-0">
                                                    <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                        <div class="swal2-success-circular-line-left" style="background-color: rgb(255, 255, 255);"></div>
                                                        <span class="swal2-success-line-tip"></span>
                                                        <span class="swal2-success-line-long"></span>
                                                        <div class="swal2-success-ring"></div>
                                                        <div class="swal2-success-fix" style="background-color: rgb(255, 255, 255);"></div>
                                                        <div class="swal2-success-circular-line-right" style="background-color: rgb(255, 255, 255);"></div>
                                                    </div>
                                                    <div class="results-subtitle">All caught up!</div>
                                                    <div class="results-title">There are no system errors!</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> -->

                                </div>
                                <ul class="nav flex-column">
                                    <li class="nav-item-divider nav-item"></li>
                                    <li class="nav-item-btn text-center nav-item">
                                        <button class="btn-shadow btn-wide btn-pill btn btn-focus btn-sm">View All Messages</button>
                                    </li>
                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="header-btn-lg pr-0">
                    <div class="widget-content p-0">
                        <div class="widget-content-wrapper">
                            <div class="widget-content-left">
                                <div class="btn-group">
                                    <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                        <?php 
                                            if(isset($getprofile[0]["Photo"]) && $getprofile[0]["Photo"] !="") { ?>

                                                <img width="42" class="rounded" src="../../files/images/profilepics/<?php echo $getprofile[0]["Photo"]; ?>" class="img-circle elevation-2" 
                                                alt="<?php echo $fname; ?>">
                                            <?php } else { ?>
                                                    <img width="42" class="rounded" src="../../files/images/profilepics/default.png"  class="img-circle elevation-2" alt="Avatar">
                                            <?php } 
                                        ?>
                                        <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                    </a>
                                    <div tabindex="-1" role="menu" aria-hidden="true" class="rm-pointers dropdown-menu-lg dropdown-menu dropdown-menu-right">
                                        <div class="dropdown-menu-header">
                                            <div class="dropdown-menu-header-inner bg-info">
                                                <div class="menu-header-image opacity-2" style="background-image: url('../assets/images/dropdown-header/city1.jpg');"></div>
                                                <div class="menu-header-content text-left">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-wrapper">
                                                            <div class="widget-content-left mr-3">
                                                                <?php 
                                                                    if(isset($getprofile[0]["Photo"]) && $getprofile[0]["Photo"] !="") { ?>

                                                                        <img width="42" class="rounded-circle" src="../../files/images/profilepics/<?php echo $getprofile[0]["Photo"]; ?>" class="img-circle elevation-2" 
                                                                        alt="<?php echo $fname; ?>">
                                                                    <?php } else { ?>
                                                                            <img width="42" class="rounded-circle" src="../../files/images/profilepics/default.png"  class="img-circle elevation-2" alt="Avatar">
                                                                    <?php } 
                                                                ?>        
                                                            </div>
                                                            <div class="widget-content-left">
                                                                <div class="widget-heading"><?php echo $fname." ".$sname; ?>
                                                                </div>
                                                                <div class="widget-subheading opacity-8"><?php echo $role; ?>
                                                                </div>
                                                            </div>
                                                            <div class="widget-content-right mr-2">
                                                                <a class="btn-pill btn-shadow btn-shine btn btn-focus" href="logout">Logout</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <div class="scroll-area-xs" style="height: 150px;">
                                            <div class="scrollbar-container ps">
                                                <ul class="nav flex-column">
                                                    <li class="nav-item-header nav-item">Activity
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">My Profile
                                                           
                                                        </a>
                                                    </li>
                                                    <li class="nav-item">
                                                        <a href="javascript:void(0);" class="nav-link">Recover Password
                                                        </a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div> -->
                                        <!-- <ul class="nav flex-column">
                                            <li class="nav-item-divider mb-0 nav-item"></li>
                                        </ul> -->
                                        <div class="grid-menu grid-menu-3col">
                                            
                                            <div class="no-gutters row">
                                                <div class="col-sm-4">
                                                    <a href="dashboard?main&tuls=profile" class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-success">
                                                        <i class="pe-7s-user icon-gradient bg-amy-crisp btn-icon-wrapper mb-2"></i>
                                                        <b>My Profile</b>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4" style="overflow-wrap: anywhere !important;">
                                                    <a href="dashboard?main&tuls=acct-settings" class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-info">
                                                        <i class="pe-7s-settings icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                        <b>Account <br/> Settings</b>
                                                    </a>
                                                </div>
                                                <div class="col-sm-4" style="word-wrap: break-word !important; overflow-wrap: break-word !important;">
                                                    <a href="dashboard?main&tuls=change-pword" class="btn-icon-vertical btn-transition btn-transition-alt pt-2 pb-2 btn btn-outline-warning">
                                                        <i class="pe-7s-lock icon-gradient bg-love-kiss btn-icon-wrapper mb-2"></i>
                                                        <b>Change <br/> Password</b>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- <ul class="nav flex-column">
                                            <li class="nav-item-divider nav-item">
                                            </li>
                                            <li class="nav-item-btn text-center nav-item">
                                                <button class="btn-wide btn btn-primary btn-sm">
                                                    Open Messages
                                                </button>
                                            </li>
                                        </ul> -->
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>  
                  
            </div>
            <div class="app-header-overlay d-none animated fadeIn"></div>
        </div>
        
        <!-- </div> -->
        <!--=======================================================================================================
                                                        NAV HEADER ENDS HERE
        ======================================================================================================= -->

 
        <!--============================================================================ 
                                    MAIN  DASHBOARD
        =================================================================================-->
        <?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="home") { 

        $home = new Crud($connect);
        ?>

        <div class="app-inner-layout app-inner-layout-page">
            
            <div class="app-inner-layout__wrapper">
                
                <div class="app-inner-layout__content">
                    <div class="tab-content">
                        <div class="container-fluid">
                                        
                        <!-- =======================================================================================
                                                        AUDIT TRAIL
                            ========================================================================================= -->
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-graph3 icon-gradient bg-happy-green"> </i>
                                        Audit Trail
                                    </div>
                                    <div class="btn-actions-pane-right text-capitalize">
                                        <!-- <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">
                                            View All
                                        </button> -->
                                        <a class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm" href="dashboard?main&tuls=audit-trail">
                                            View All
                                        </a>
                                    </div>
                                </div>
                                <div class="no-gutters row">
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                                <i class="pe-7s-mouse text-dark opacity-8"></i>
                                            </div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">Total Clicks</div>
                                                <div class="widget-numbers"><?php echo FetchTableContent(11); ?></div>
                                                <div class="widget-description opacity-8 text-focus">
                                                    <!-- <div class="d-inline text-danger pr-1">
                                                        <i class="fa fa-angle-down"></i>
                                                        <span class="pl-1">54.1%</span>
                                                    </div>
                                                    less earnings -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider m-0 d-md-none d-sm-block"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                                <i class="pe-7s-users text-white"></i>
                                            </div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">Registered Users</div>
                                                <div class="widget-numbers"><span><?php echo FetchTableContent(14); ?></span></div>
                                                <div class="widget-description opacity-8 text-focus">
                                                    <!-- Grow Rate:
                                                    <span class="text-info pl-1">
                                                        <i class="fa fa-angle-down"></i>
                                                        <span class="pl-1">14.1%</span>
                                                    </span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider m-0 d-md-none d-sm-block"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-xl-4">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                <i class="pe-7s-map-2 text-white"></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">Unique Clicks</div>
                                                    <div class="widget-numbers text-success">
                                                        <span><?php echo FetchTableContent(12); ?></span>
                                                    </div>
                                                    <div class="widget-description text-focus">
                                                        <!-- Increased by
                                                        <span class="text-warning pl-1">
                                                        <i class="fa fa-angle-up"></i>
                                                        <span class="pl-1">7.35%</span> -->
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="text-center d-block p-3 card-footer">
                                    <a class="btn-pill btn-wide fsize-1 btn btn-primary" href="dashboard?main&tuls=audit-trail">
                                        <span class="mr-2 opacity-7">
                                            <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                        </span>
                                        <span class="mr-1">View Complete Report</span>
                                    </a>
                                </div>
                            </div>

               <!-- =======================================================================================
                                             BREAK DOWN OF USERS 
                ========================================================================================= -->                        
                            <div class="row">
                                <div class="col-md-6 col-xl-2">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div class="fsize-4">
                                                                <small class="opacity-5"></small>
                                                                <span><?php echo FetchTableContent(23);?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="widget-subheading mb-0 opacity-5">Sub-Admins</h6>                                
                                            </div>
                                            <a class="btn-pill btn-wide btn btn-primary" href="dashboard?main&tuls=sub-admin">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">CHECK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-2">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-success border-success">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div class="fsize-4">
                                                                <small class="opacity-5"></small>
                                                                <span><?php echo FetchTableContent(18);?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="widget-subheading mb-0 opacity-5">Schools</h6>
                                            </div>
                                            <a class="btn-pill btn-wide btn btn-primary" href="dashboard?main&tuls=school">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">CHECK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-2">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-primary border-primary">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div class="fsize-4">
                                                                <small class="opacity-5"></small>
                                                                <span><?php echo FetchTableContent(19);?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="widget-subheading mb-0 opacity-5">Teachers</h6>
                                            </div>
                                            <a class="btn-pill btn-wide btn btn-primary" href="dashboard?main&tuls=teacher">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">CHECK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-2">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-warning border-warning">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div class="fsize-4">
                                                                <small class="opacity-5"></small>
                                                                <span><?php echo FetchTableContent(20);?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="widget-subheading mb-0 opacity-5">Students</h6>
                                            </div>
                                            <a class="btn-pill btn-wide btn btn-primary" href="dashboard?main&tuls=student">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">CHECK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-2">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div class="fsize-4">
                                                                <small class="opacity-5"></small>
                                                                <span><?php echo FetchTableContent(21);?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="widget-subheading mb-0 opacity-5">Parents</h6>
                                            </div>
                                            <a class="btn-pill btn-wide btn btn-primary" href="dashboard?main&tuls=parent">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">CHECK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6 col-xl-2">
                                    <div class="card mb-3 widget-chart widget-chart2 text-left card-btm-border card-shadow-danger border-danger">
                                        <div class="widget-chat-wrapper-outer">
                                            <div class="widget-chart-content pt-3 pl-3 pb-1">
                                                <div class="widget-chart-flex">
                                                    <div class="widget-numbers">
                                                        <div class="widget-chart-flex">
                                                            <div class="fsize-4">
                                                                <small class="opacity-5"></small>
                                                                <span><?php echo FetchTableContent(22);?></span></div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <h6 class="widget-subheading mb-0 opacity-5">Non-Academics</h6>
                                            </div>
                                            <a class="btn-pill btn-wide btn btn-primary" href="dashboard?main&tuls=non-academic">
                                                <span class="mr-2 opacity-7">
                                                    <i class="icon icon-anim-pulse ion-ios-analytics-outline"></i>
                                                </span>
                                                <span class="mr-1">CHECK</span>
                                            </a>
                                        </div>
                                    </div>
                                </div>

                            </div>

               <!-- =======================================================================================
                                             User DataTable 
                ========================================================================================= --> 
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                        Users DataTable
                                    </div>
                            
                                </div>
                                <div class="card-body">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Joined</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $home = new CRUD($connect);
                                            $fet_users = FetchTableContent(1);
                                            $count = 1;

                                            foreach ($fet_users as $key => $val) { 
                                            ?>
                                                <tr>
                                                    <td><?php echo $count; ?></td>
                                                    <td><?php echo $val["Fname"]." ".$val["Sname"]; ?></td>
                                                    <td>
                                                        <?php 
                                                            $acc_lev = $val["AccessLevel"];
                                                            $type = $home -> AnyContent("AccessLevel", "accesslevel", "ID", $acc_lev);
                                                            echo $type;
                                                        ?>
                                                    </td>
                                                    <td><?php echo $val["Role"]; ?></td>
                                                    <td><?php echo $val["Email"]; ?></td>
                                                    <td><?php echo $val["Phone"]; ?></td>
                                                    <td><?php echo $val["AddedOn"]; ?></td>
                                                    <td>
                                                        <?php 
                                                            $act_st = $val["ActiveStatus"];
                                                            //$stat = $home -> AnyContent("ActiveStatus", "activestatus", "ID", $act_st);
                                                            if($act_st == 1){ echo '<div class="badge badge-warning">Not Active</div>'; }
                                                            elseif($act_st == 2){ echo '<div class="badge badge-success">Active</div>'; }
                                                            elseif($act_st == 3){ echo '<div class="badge badge-danger">Deactivated</div>'; }
                                                            else{ echo '<div class="badge badge-info">Unknown</div>'; }
                                                        ?>
                                                        
                                                    </td>
                                                </tr>
                                             
                                            <?php $count++; } ?>
                    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Name</th>
                                                <th>Type</th>
                                                <th>Role</th>
                                                <th>Email</th>
                                                <th>Phone</th>
                                                <th>Joined</th>
                                                <th>Status</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>
                            
               <!-- =======================================================================================
                                            BREAKDOWN OF TRANSACTIONS
                ========================================================================================= --> 
                            <div class="card no-shadow bg-transparent no-border rm-borders mb-3">
                                <div class="card">
                                    <div class="no-gutters row">
                                        <div class="col-md-12 col-lg-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="bg-transparent list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Total Transactions
                                                                    </div>
                                                                    <div class="widget-subheading">All time transaction
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-success">
                                                                        1896
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="bg-transparent list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Total Amount</div>
                                                                    <div class="widget-subheading">Total amount Acrued
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-primary">
                                                                        <del>N</del>12.6M
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="bg-transparent list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Total Failed Transactions</div>
                                                                    <div class="widget-subheading">All failed transactions
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-danger">
                                                                        123
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="bg-transparent list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Total Amount Failed
                                                                    </div>
                                                                    <div class="widget-subheading">Total amount of failed transactions
                                                                        streams
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-warning">
                                                                        <del>N</del>33.6K
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="col-md-12 col-lg-4">
                                            <ul class="list-group list-group-flush">
                                                <li class="bg-transparent list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Total Accepted Tran.
                                                                    </div>
                                                                    <div class="widget-subheading">Total accepted transactions
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-success">
                                                                        1896
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                                <li class="bg-transparent list-group-item">
                                                    <div class="widget-content p-0">
                                                        <div class="widget-content-outer">
                                                            <div class="widget-content-wrapper">
                                                                <div class="widget-content-left">
                                                                    <div class="widget-heading">Total Accepted Amount</div>
                                                                    <div class="widget-subheading">Total amount of accepted tran.
                                                                    </div>
                                                                </div>
                                                                <div class="widget-content-right">
                                                                    <div class="widget-numbers text-primary">
                                                                        <del>N</del>11.6M
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- =======================================================================================
                            ========================================================================================= --> 
                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>




    <!--============================================================================ 
                                MAIN  DASHBOARD
    =================================================================================-->
    <?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="audit-trail") { 

        $home = new Crud($connect);
        ?>

        <div class="app-inner-layout app-inner-layout-page">
            
            <div class="app-inner-layout__wrapper">
                
                <div class="app-inner-layout__content">
                    <div class="tab-content">
                        <div class="container-fluid">
                            
            <!-- =======================================================================================
                                            AUDIT TRAIL
                ========================================================================================= -->
                            <div class="mb-3 card">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-graph3 icon-gradient bg-happy-green"> </i>
                                        Audit Trail
                                    </div>
                                    <div class="btn-actions-pane-right text-capitalize">
                                        <!-- <button class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm">
                                            View All
                                        </button>
                                        <a class="btn-wide btn-outline-2x mr-md-2 btn btn-outline-focus btn-sm" href="main?audit-trail">
                                            View All
                                        </a> -->
                                    </div>
                                </div>
                                <div class="no-gutters row">
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                                <i class="pe-7s-mouse text-dark opacity-8"></i>
                                            </div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">Total Clicks</div>
                                                <div class="widget-numbers"><?php echo FetchTableContent(11); ?></div>
                                                <div class="widget-description opacity-8 text-focus">
                                                    <!-- <div class="d-inline text-danger pr-1">
                                                        <i class="fa fa-angle-down"></i>
                                                        <span class="pl-1">54.1%</span>
                                                    </div>
                                                    less earnings -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider m-0 d-md-none d-sm-block"></div>
                                    </div>
                                    <div class="col-sm-6 col-md-4 col-xl-4">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-danger"></div>
                                                <i class="pe-7s-users text-white"></i>
                                            </div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">Registered Users</div>
                                                <div class="widget-numbers"><span><?php echo FetchTableContent(14); ?></span></div>
                                                <div class="widget-description opacity-8 text-focus">
                                                    <!-- Grow Rate:
                                                    <span class="text-info pl-1">
                                                        <i class="fa fa-angle-down"></i>
                                                        <span class="pl-1">14.1%</span>
                                                    </span> -->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider m-0 d-md-none d-sm-block"></div>
                                    </div>
                                    <div class="col-sm-12 col-md-4 col-xl-4">
                                        <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                            <div class="icon-wrapper rounded-circle">
                                                <div class="icon-wrapper-bg opacity-9 bg-success"></div>
                                                <i class="pe-7s-map-2 text-white"></i></div>
                                            <div class="widget-chart-content">
                                                <div class="widget-subheading">Unique Clicks</div>
                                                    <div class="widget-numbers text-success">
                                                        <span><?php echo FetchTableContent(12); ?></span>
                                                    </div>
                                                    <div class="widget-description text-focus">
                                                        <!-- Increased by
                                                        <span class="text-warning pl-1">
                                                        <i class="fa fa-angle-up"></i>
                                                        <span class="pl-1">7.35%</span> -->
                                                    </span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>



               <!-- =======================================================================================
                                             AUDIT TRAIL BREAKDOWN
                ========================================================================================= --> 
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon  pe-7s-graph3 mr-3 text-muted opacity-6"> </i>
                                        Audit Trail DataTable
                                    </div>
                            
                                </div>
                                <div class="card-body">
                                    <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                        <thead>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Full Name</th>
                                                <th>Identity</th>
                                                <th>Visited Pages</th>
                                                <th>Ip Address</th>
                                                <th>Date</th>
                                                <th class="disabled-sorting">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                                $fet_msg = FetchTableContent(13);
                                                $count = 1;

                                                foreach ($fet_msg as $key => $val) { 
                                                    // while($val = $q->fetch(PDO::FETCH_ASSOC)) {
                                                        ?>

                                                <tr class="">
                                                    <td><?php echo $count; ?></td>
                                                    <td class="center">
                                                        <?php if(isset($val["UserID"]) && $val["UserID"] == 0) { 
                                                            echo "Guest/Not Signed-In"; } else { echo ""; } ?>

                                                        <a href="dashboard?main&tuls=check-action&gst=<?php echo ($val["UserID"] == 0) ? $val["IPAddr"] . "-IP" : $val["UserID"] . "-ID"; ?>&page=audit-trail">
                                                            <?php echo $val["FullName"]; ?>
                                                        </a>
                                                        
                                                    </td>
                                                    <td><?php echo ($val["Identifier"] == 2) ? "Registered User" : "Guest"; ?></td>
                                                    <td><?php echo $val["Task"]; ?></td>
                                                    <td><?php 
                                                            if(isset($val["UserID"]) && $val["UserID"] == 0) { 
                                                                echo "Unknown IPs"; } else { echo $val["IPAddr"]; } 
                                                        ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date("j-M-Y", strtotime($val["DateModified"]))." at ".date("G:i:s a", strtotime($val["DateModified"])); ?>
                                                    </td>
                            
                                                    <td class="center">
                                                        <a class="btn btn-danger btn-sm" href="dashboard?main&tuls=check-action&gst=<?php 
                                                                echo ($val["UserID"] == 0) ? $val["IPAddr"] . "-IP" : $val["UserID"] . "-ID"; ?>&page=audit-trail">
                                                        <i class="fa fa-eye"></i></a> 
                                                    </td> 
                                                </tr>

                                            <?php $count++; } ?>
                    
                                        </tbody>
                                        <tfoot>
                                            <tr>
                                                <th>S/N</th>
                                                <th>Full Name</th>
                                                <th>Identity</th>
                                                <th>Visited Pages</th>
                                                <th>Ip Address</th>
                                                <th>Date</th>
                                                <th>Actions</th>
                                            </tr>
                                        </tfoot>
                                    </table>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <?php } ?>





    <!--============================================================================ 
                                MAIN  DASHBOARD
    =================================================================================-->
    <?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="check-action") { 

    $home = new Crud($connect);
    ?>

    <div class="app-inner-layout app-inner-layout-page">
        
        <div class="app-inner-layout__wrapper">
            
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">
                        
        <!-- =======================================================================================
                                        AUDIT TRAIL
            ========================================================================================= -->
                        <div class="mb-3 card">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon pe-7s-graph3 icon-gradient bg-happy-green"> </i>
                                    Audit Trail
                                </div>
                            </div>
                            <div class="no-gutters row">
                                <div class="col-sm-6 col-md-4 col-xl-4">
                                    <div class="card no-shadow rm-border bg-transparent widget-chart text-left">
                                        <div class="icon-wrapper rounded-circle">
                                            <div class="icon-wrapper-bg opacity-10 bg-warning"></div>
                                            <i class="pe-7s-mouse text-dark opacity-8"></i>
                                        </div>
                                        <div class="widget-chart-content">
                                            <div class="widget-subheading">
                                                <?php 
                                                    $check = $_GET["gst"];
                                                    $home = new CRUD($connect);

                                                    $brk1 = explode("-", $check);
                                                    $before = $brk1[0];//Gets UserID or IPAddr

                                                    $brk2 = explode("-", $check);
                                                    $after = $brk2[1];//Checks whether its an IPAddr or UserID
                                                    
                                                    $aut = ($after == "IP") ? "IP" : "ID";
                                                    
                                                    if($aut == "IP"){
                                                        //$ip = $home -> AnyContent("IPAddr", "audit_log", "IPAddr", $before);
                                                        $ident = "Guest or User not Signed-In";
                                                    }elseif($aut == "ID"){
                                                        $namez = $home -> AnyContent("FullName", "audit_log", "UserID", $before);
                                                        $ip = $home -> AnyContent("IPAddr", "audit_log", "UserID", $before);
                                                        $ident = "Registered User";
                                                    }else{
                                                        $ident = "ERROR!";
                                                    }

                                                ?>
                                                <h5><?php echo (isset($namez)) ? $namez : ""; ?></h5>
                                                <h5><?php echo (isset($ip)) ? $ip : ""; ?></h5>
                                                <h5><?php echo $ident; ?></h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="divider m-0 d-md-none d-sm-block"></div>
                                </div>
                            </div>
                        </div>

                        <!-- =======================================================================================
                                        AUDIT TRAIL BREAKDOWN
                        ========================================================================================= --> 
                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon  pe-7s-graph3 mr-3 text-muted opacity-6"> </i>
                                    Activity breakdown
                                </div>
                        
                            </div>
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Visited Pages</th>
                                            <th>Ip Address</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $fetch = (($aut == "ID") ? FetchIndividualContent("17", $before) : FetchIndividualContent("18", $before));
                                            //var_dump($getgst);
                                            
                                                // $task = $fetch[0]["Task"];
                                                // $ip = $fetch[0]["IPAddr"];
                                                // $gstid = $fetch[0]["ID"];
                                                $count = 1;

                                                foreach ($fetch as $key => $val) { ?>

                                                <tr class="">
                                                    <td><?php echo $count; ?></td>
                                                    <td><?php echo $val["Task"];  ?></td>
                                                    <td><?php echo $val["IPAddr"]; ?></td>
                                                    <td>
                                                        <?php echo date("j-M-Y", strtotime($val["DateModified"]))." at ".date("G:i:s a", strtotime($val["DateModified"])); ?>
                                                    </td>
                            
                                                    <td class="center">
                                                        <!-- <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this trail?');" href="delete-trail?del=<?php //echo $val["ID"]; ?>"><i class=" fa fa-trash"></i></a>  -->
                                                        <button class="btn btn-small btn-flat">Delete <b>Disabled</b></button>
                                                    </td>
                                                </tr>

                                            <?php $count++; } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Visited Pages</th>
                                            <th>Ip Address</th>
                                            <th>Date</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>
                        

                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php } ?>



<!--============================================================================ 
                            GUEST MESSAGES
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="guest") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">

                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon pe-7s-mail mr-3 text-muted opacity-6"> </i>
                                    Guest Messages
                                </div>
                        
                            </div>
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email/IP</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Sent On</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $fet_msg = FetchTableContent(4);
                                            $count = 1;

                                            foreach ($fet_msg as $key => $val) { ?>

                                            <tr class="">
                                                <td><?php echo $count; ?></td>
                                                <td class="center">												
                                                    <a href="dashboard?main&tuls=read-guest-msg&gst=<?php echo $val["ID"]; ?>">
                                                        <?php echo $val["Fname"]." ".$val["Lname"]; ?>
                                                    </a>
                                                </td>
                                                <td><?php echo $val["Email"]." / ".$val["IPAddr"]; ?></td>
                                                <td class="center"><?php echo $val["Phone"]; ?></td>
                                                <td class="center">
                                                    <a href="dashboard?main&tuls=read-guest-msg&gst=<?php echo $val["ID"]; ?>">
                                                        <?php $string = $val["Message"]; 
                                                    
                                                            $checkstr = strlen($string) > 30;

                                                            if ($checkstr == TRUE) {
                                                                // truncate string
                                                                $stringCut = substr($string, 0, 30);

                                                                // make sure it ends in a word so assassinate doesn't become ass...
                                                                $fd= substr($stringCut, 0, strrpos($stringCut, ' '));
                                                                $string = $fd;
                                                            } 
                                                            echo $string;	
                                                        ?>
                                                    </a>
                                                </td>
                                                <td>
                                                    <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:s a", strtotime($val["AddedOn"])); ?>
                                                </td>
                                                
                                                <td class="center">
                                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this message?');" href="delete-guest-msg?del=<?php echo $val["ID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email/IP</th>
                                            <th>Phone</th>
                                            <th>Message</th>
                                            <th>Sent On</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>





<!--============================================================================ 
                            READ GUEST MESSAGE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="read-guest-msg") { 

            $home = new Crud($connect);

            $getgst = FetchIndividualContent("8", $_GET["gst"]);

            $name = $getgst[0]["Fname"]." ".$getgst[0]["Lname"];
            $phone = $getgst[0]["Phone"];
            $email_ip = $getgst[0]["Email"]." ".$getgst[0]["IPAddr"];
            $msg = $getgst[0]["Message"];
            $gstid = $getgst[0]["ID"];
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">

                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon pe-7s-mail-open-file mr-3 text-muted opacity-6"> </i>
                                    Read Message
                                </div>                        
                            </div>
                        </div>

                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <a href="delete-guest-msg?del=<?php echo $gstid; ?>" class='reg' onclick="return confirm('Are you sure you want to delete this message?');">Delete</a>
                                </div>
                            </div>

                        </div>

                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <small style="word-break: break-word"> 
                                        <span class="additional-post"><i class="fa fa-user"></i>Senders Name: 
                                            <?php  echo $name; ?>
                                        </span> |
                                        <span class="additional-post"><i class="fa fa-clock-o"></i>
                                            <?php echo date("jS M Y", strtotime($getgst[0]["AddedOn"]))." at ".date("g:ia", strtotime($getgst[0]["AddedOn"])); ?>
                                        </span> |
                                        <span class="additional-post"><i class="fa fa-phone"></i>
                                            <?php echo $phone; ?>
                                        </span> |
                                        <span class="additional-post"><i class="fa fa-envelope"></i>
                                            <?php echo $email_ip; ?>
                                        </span>
                                    </small>
                                </div>
                            </div>
                            <div class="card-body">
                                <p style="font-size: 17px"><?php echo $msg; ?></p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>





<!--============================================================================ 
                            ADVERT
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="advert") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                            Adverts
                                        </div>                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">

                                        <div class="card card-stats ">
                                            <div class="card-body ">
                                                <strong><h5><b>Types:</b></h5></strong>
                                                <small>
                                                    <h5>Top banner <img class="ads-img" src="../../files/images/advert/icons/top-banner.png" >
                                                    </h5>
                                                    <h5>Portrait <img class="ads-img" src="../../files/images/advert/icons/portrait.png" >
                                                    </h5>
                                                    <h5>Footer banner <img class="ads-img" src="../../files/images/advert/icons/footer-banner.png" >
                                                    </h5>
                                                    <h5>Inline <img class="ads-img" src="../../files/images/advert/icons/inline.png" >
                                                    </h5>
                                                </small>
                                            </div>
                                        </div>

                                        <div class="">
                                            <form onsubmit="return adUploadF(this);" class="form-horizontal" method="post" enctype="multipart/form-data">

                                                <?php echo isset($response) ? $response : ""; ?>
                                                <div class="form-group">
                                            
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Type
                                                            <star class="star">*</star>
                                                        </label>
                                                        <select name="Type" class="form-control" >
                                                            <option selected="selected" value="0">Select Type</option>
                                                            <?php 
                                                            $sql="SELECT * FROM advert_type ORDER BY Type DESC"; 
                                                            $q = $connect->prepare($sql); 
                                                            $q->execute();
                                                            while($r = $q->fetch(PDO::FETCH_ASSOC))
                                                            {
                                                                $ss = ($r["ID"] == $type) ? "selected" : "";
                                                                echo  "<option value=".$r["ID"]." $ss>".$r["Type"]."</option>";
                                                            }
                                                            ?>
                                                        </select>
                                                    </div>

                                                    <div class="form-group has-label">
                                                        <label>
                                                            Expiry Date
                                                            <star class="star">*</star>
                                                        </label>
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <div class="input-group-text">
                                                                    <i class="fa fa-calendar-alt"></i>
                                                                </div>
                                                            </div>
                                                            <input required type="text" class="form-control" name="daterange-centered"/>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-label">
                                                        <label>
                                                            Select Photo
                                                            <star class="star">*</star>
                                                        </label>

                                                        <div class="">                                            
                                                            <div class="col-sm-2 col-md-2" style="float: left;border: 1px solid #ccc; height: 100px;" align="center">
                                                                <div id="image-preview" ></div>
                                                            </div>

                                                            <div class="col-sm-10 col-md-10" style="float: left">
                                                                <small>Photo must not be greater than 5MB. </small><br/>
                                                                <small>Photo format must be PNG, JPG or JPEG. </small>
                                                                <input type="file" id="inputFile" name="Photo" class="form-control" required="true" >
                                                            </div> 
                                                        </div>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Company Name
                                                            <star class="star">*</star>
                                                        </label>
                                                        <input minlength="1" maxlength="50" class="form-control" name="CompName" type="Text" placeholder="Enter company name" required="true" />
                                                    </div>
                                                
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Company Email
                                                            <star class="star">*</star>
                                                        </label>
                                                        <input minlength="1" maxlength="50" class="form-control" name="CompEmail" type="email" placeholder="Enter company email" required="true" />
                                                    </div>
                                                
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Company Phone
                                                            <star class="star">*</star>
                                                        </label>
                                                        <input minlength="1" maxlength="50" class="form-control" name="CompPhone" type="Text" placeholder="Enter company phone" required="true" />
                                                    </div>
                                                    
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Company Website
                                                            <star class="star">*</star>
                                                        </label>
                                                        <input minlength="1" maxlength="50" class="form-control" name="CompWeb" type="Text" placeholder="Enter company name" required="true" />
                                                    </div>
                                                    
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Company Address
                                                        </label>
                                                        <input minlength="1" maxlength="100" class="form-control" name="CompAddr" type="Text" placeholder="Enter company address" />
                                                    </div>
                                                
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Description
                                                        </label>
                                                        <textarea minlength="1" maxlength="200" class="form-control" name="Description" placeholder="Enter company description"></textarea>
                                                    </div>
                                                
                                                    <!-- <input class="btn btn-warning btn-block" type="submit" value="PLACE ADVERT"> -->
                                                    <input style="color: rgb(1, 9, 53);" type="submit" class="btn btn-warning btn-block" name="adUpload" value="PLACE ADVERT">
                                                    <input style="color: rgb(1, 9, 53);" type="button" class="btn btn-default btn-block" value="CANCEL" onclick="adUploadR(this.form);">
                                                    <input type="hidden" name="UploadedBy" value="<?php echo $_SESSION["duid"]; ?>">
                                                    <input type="hidden" name="INSERT" value="19">
                                                </div>
                                                    
                                            </form>
                                        
                                        </div>

                                    </div>
                                </div>

                                <p>Placed Adverts:</p>

                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Content</th>
                                                    <th>Company Name</th>
                                                    <th>Compnay Phone/Email</th>
                                                    <th>Expiry Date</th>
                                                    <th>Uploaded On</th>
                                                    <th>Uploaded By</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Content</th>
                                                    <th>Company Name</th>
                                                    <th>Compnay Phone/Email</th>
                                                    <th>Expiry Date</th>
                                                    <th>Uploaded On</th>
                                                    <th>Uploaded By</th>
                                                    <th>Actions</th>
                                                </tr>
                                        </tfoot>
                                        <tbody>

                                            <?php 
                                                $fet_msg = FetchTableContent(9);
                                                $count = 1;                      

                                                foreach ($fet_msg as $key => $val) { 

                                                $imageURL = "../../files/images/advert/"; 
                                                $key = $val["Photo"];
                                                ?> 

                                                <tr class="">
                                                    <td><?php echo $count; ?></td>
                                                    <td>
                                                        <div class="">
                                                            <a href="<?php echo $imageURL . $key; ?>" data-toggle="lightbox" data-title="<?php echo $key; ?>" data-gallery="gallery">
                                                                <img src="<?php echo $imageURL . $key; ?>" class="img-fluid" alt="<?php echo $key; ?>"/>
                                                            </a>
                                                        </div>
                                                    </td>
                                                    <td class="center">			
                                                        <?php echo $val["CompanyName"]; ?>
                                                    </td>
                                                    <td><?php echo $val["CompanyPhone"]." / ".$val["CompanyEmail"]; ?></td>
                                                    <td>
                                                        <?php echo $val["ExpiryDate"]; ?>
                                                    </td>
                                                    <td>
                                                        <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:s a", strtotime($val["AddedOn"])); ?>
                                                    </td>
                                                    <td>
                                                        <?php $home = new Crud($connect);
                                                            echo $home->AnyContent("Fname", "users", "ID", $val["UploadedBy"]); ?>
                                                    </td>

                                                    <td class="td-actions text-right">
                                                        <?php $home = new Crud($connect);
                                                            if($_SESSION["accesslevel"] == 1){
                                                            
                                                                //$check = $home->select("advert", "*", " ID = '".$val["ID"]."' ");
                                                                $check = $home->AnyContent("Active", "advert", "ID", $val["ID"]);
                                                                
                                                                if($check == "2")
                                                                { ?>
                                                                    <a href="../../appfunctions/appfunctions.php?activate=2&xid=<?php echo $val["ID"]; ?>" class="btn btn-warning btn-sm">
                                                                        Activate
                                                                    </a>
                                                                <?php 
                                                                }
                                                                elseif($check == "1")
                                                                { ?>
                                                                    <a href="../../appfunctions/appfunctions.php?activate=1&xid=<?php echo $val["ID"]; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this advert? Advert will go offline if you deactivate.')">
                                                                    Active
                                                                    </a>
                                                                <?php  

                                                                }else{ ?>
                                                                
                                                                    <a href="../../confirm-account" class="btn btn-danger btn-sm" >
                                                                        Error!
                                                                    </a>

                                                                <?php }
                                                            }
                                                        ?>

                                                        <a class="btn btn-success btn-sm" href="dashboard?main&tuls=edit-advert&xps=<?php echo $val["ID"]; ?>"><i class=" fa fa-tools"></i></a> 
                                                
                                                        <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this advert?');" href="delete-advert?del=<?php echo $val["ID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                    </td>
                                                </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                        </table>
                                    </div>

                                </div>
                            </div>

                            <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>




<!--============================================================================ 
                            EDIT ADVERT
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="edit-advert") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                        Edit Adverts
                                    </div>                        
                                </div>
                            </div>
                        </div>


                        <div class="col-md-7">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                    <?php  echo isset($response) ? $response : ""; ?>
                                    
                                    <form id="TypeValidation" onsubmit="return adUpdateF(this);" class="form-horizontal" method="POST" enctype="multipart/form-data">
                            
                                        <?php
                                            $getad = FetchIndividualContent("16", $_GET["xps"]);
                                            $name = $getad[0]["CompanyName"];
                                            $phone = $getad[0]["CompanyPhone"];
                                            $email = $getad[0]["CompanyEmail"];
                                            $addr = $getad[0]["CompanyAddress"];
                                            $web = $getad[0]["CompanyWebsite"];
                                            $exp_date = $getad[0]["ExpiryDate"];
                                            $des = $getad[0]["Description"];
                                            $type= $getad[0]["Type"];
                                            $photo = $getad[0]["Photo"];
                                            $id = $getad[0]["ID"];
                                        ?>
                            
                                        <div class="card ">
                                            <div class="card-body ">
                                                <div class="form-group has-label">
                                                    <label>
                                                        Type
                                                        <star class="star">*</star>
                                                    </label>
                                                    <select name="Type" class="form-control" >
                                                        <option selected="selected" value="0">Select Type</option>
                                                        <?php 
                                                            $sql="SELECT * FROM advert_type ORDER BY Type ASC"; 
                                                            $q = $connect->prepare($sql); 
                                                            $q->execute();
                                                            while($r = $q->fetch(PDO::FETCH_ASSOC))
                                                            {
                                                                $ss = ($r["ID"] == $type) ? "selected" : "";
                                                                echo  "<option value=".$r["ID"]." $ss>".$r["Type"]."</option>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>
                            
                                                <div class="form-group has-label">
                                                    <label>
                                                        Expiry Date
                                                        <star class="star">*</star>
                                                    </label>

                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text">
                                                                <i class="fa fa-calendar-alt"></i>
                                                            </div>
                                                        </div>
                                                        <input required type="text" class="form-control" name="daterange-centered"/>
                                                    </div>
                        
                                                    <input type="hidden" name="DateHolder" value="<?php echo (isset($exp_date)) ? $exp_date: ""; ?>" >
                                                
                                                    <small>current expiry date: <?php echo $exp_date; ?></small>
                                                </div>
                            
                                                <div class="form-group has-label">
                                                    <label>
                                                        Photo
                                                    </label>
                                                    <div class="col-sm-12">
                                                        <div class="row">
                                                            <div class="form-group col-sm-2 blog-pic-cover">
                                                                <?php if(isset($photo) && $photo != "") 
                                                                    { ?>
                                                                        <img class="blog-pic" src="../../files/images/advert/<?php echo $photo; ?>" alt="Photo"> 
                                                                    <?php } else { ?>
                                                                        No Photo
                                                                <?php } ?>
                                                            </div>
                                                            
                                                            <div class="form-group col-sm-2 blog-pic-cover">
                                                                <div id="image-preview" class="image-preview"></div>
                                                            </div>
                                                            
                                                            <div class="form-group col-sm-8">
                                                                <input type="file" id="inputFile" name="Photo" class="form-control" >
                                                                <input type="hidden" name="PhotoHolder" value="<?php echo (isset($photo)) ? $photo : ""; ?>" >
                                                                
                                                                <small>Photo must not be greater than 5MB. </small><br/>
                                                                <small>Photo format must be PNG, JPG, JPEG. </small>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                
                                                <div class="form-group has-label">
                                                    <label>
                                                        Company Name
                                                        <star class="star">*</star>
                                                    </label>
                                                    <input minlength="2" maxlength="100" class="form-control" name="CompName" type="text" required="true"  placeholder="Enter company name" value="<?php echo (isset($name)) ? $name : ""; ?>" />
                                                </div>
                                                
                                                <div class="form-group has-label">
                                                    <label>
                                                        Company Email
                                                        <star class="star">*</star>
                                                    </label>
                                                    <input minlength="2" maxlength="100" class="form-control" name="CompEmail" type="text" required="true"  placeholder="Enter email" value="<?php echo (isset($email)) ? $email : ""; ?>" />
                                                </div>
                                                
                                                <div class="form-group has-label">
                                                    <label>
                                                        Company Phone
                                                        <star class="star">*</star>
                                                    </label>
                                                    <input minlength="2" maxlength="25" class="form-control" name="CompPhone" type="text" required="true"  placeholder="Enter phone" value="<?php echo (isset($phone)) ? $phone : ""; ?>" />
                                                </div>
                                                
                                                <div class="form-group has-label">
                                                    <label>
                                                        Company Website
                                                        <star class="star">*</star>
                                                    </label>
                                                    <input minlength="2" maxlength="100" class="form-control" name="CompWeb" type="text" required="true"  placeholder="Enter website" value="<?php echo (isset($web)) ? $web : ""; ?>" />
                                                </div>
                                                
                                                <div class="form-group has-label">
                                                    <label>
                                                        Company Address
                                                    </label>
                                                    <input minlength="2" maxlength="100" class="form-control" name="CompAddr" type="text" required="true"  placeholder="Enter address" value="<?php echo (isset($addr)) ? $addr : ""; ?>" />
                                                </div>
                                                
                                                <div class="form-group has-label">
                                                    <label>
                                                        Description
                                                    </label> 
                            
                                                    <textarea style="color:#000;" required class="form-control" rows="3" maxlength="200"  name="Description" placeholder="Enter company description"><?php echo (isset($des)) ? $des : "" ?></textarea>
                                                    
                                                </div>
                            
                                            </div>
                            
                                            <div class="clearfix"></div>
                                            <div class="col-sm-12 col-md-6 card-category form-category">
                                                <star class="star">*</star> Required fields
                                            </div>
                            
                                            <div class="card-footer " align="center">
                                                <input style="color: rgb(1, 9, 53);" type="submit" class="btn btn-warning btn-block" name="adUpdate" value="UPDATE">
                                                <input style="color: rgb(1, 9, 53);" type="button" class="btn btn-default btn-block" value="CANCEL" onclick="adUpdateR(this.form);">
                                                <input type="hidden" name="EDIT" value="11">
                                                <input type="hidden" name="EDITVAL" value="<?php echo $id; ?>">
                                                <div class="clearfix"></div>
                                            </div>
                            
                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>





<!--============================================================================ 
                            CREATE BLOG
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="create-bc") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                            Create BC
                                        </div>                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">

                                        <form onsubmit="return blogUploadF(this);" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <?php echo (isset($response)) ? $response : ""; ?>
                                            <div class="card">
                                            
                                                <div class="card-body ">
                                                    
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label for="exampleEmail55">
                                                                    Reach
                                                                    <star class="star">*</star>
                                                                </label>
                                                                <select required=true id="BroadReach" name="Reach" class="form-control">
                                                                    <?php 
                                                                        $dd = $crud->select("reach", "*", "", "ID DESC");
                                                                        foreach ($dd as $key => $va) { ?>
                                                                            <option id="BroadReach" value="<?php echo $va["ID"]; ?>">
                                                                                <?php echo $va["Type"]; ?>
                                                                            </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword22">
                                                                    Category
                                                                    <star class="star">*</star>
                                                                </label>
                                                                <select required="true" name="Category" class="form-control" >
                                                                    <option selected="selected" value="0">Select Category</option>
                                                                    <?php 
                                                                        //$q = $crud->select("category", "*", "", "ID ASC");
                                                                        $sql="SELECT * FROM category ORDER BY ID ASC"; 
                                                                        $q = $connect->prepare($sql); 
                                                                        $q->execute();
                                                                        while($r = $q->fetch(PDO::FETCH_ASSOC))
                                                                        {
                                                                            echo  "<option value=".$r["ID"].">".$r["Category"]."</option>";
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        
                                                    <div id="broadtype" class="form-group has-label">
                                                        <label>
                                                            Target
                                                            <star class="star">*</star>
                                                        </label>
                                                        <select required=true name="Target" class="form-control">
                                                            <?php $targ = $crud->select("target", "*", "", "ID ASC");
                                                                foreach ($targ as $key => $var) { ?>
                                                                    <option value="<?php echo $var["ID"]; ?>">
                                                                        <?php echo $var["Target"]; ?>
                                                                    </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Title
                                                            <star class="star">*</star>
                                                        </label>
                                                        <input minlength="2" maxlength="150" class="form-control" name="Title" type="text" required="true" placeholder="Enter blog title" value="<?php if(isset($getblog[0]["Title"])) echo $getblog[0]["Title"]; ?>" />
                                                    </div>

                                                    <div class="form-group has-label">
                                                        <label>
                                                            Media (video, audio or picture) <b>optional</b>
                                                        </label>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="form-group col-sm-2" style="border: 1px solid #ccc; height: 100px; align: center; ">
                                                                    <div id="image-preview" class="image-preview">
                                                                        <small>Image preview</small>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group col-sm-10" >
                                                                    
                                                                    <input type="file" id="inputFile" name="Mediaz" class="form-control" >
                                                                    
                                                                    <small>File must not be greater than 5MB. </small><br/>
                                                                    <small>Supported formats are PNG, JPG, JPEG, MP4 and MP3. </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-label">
                                                        <label>
                                                            Message <star class="star">*</star>
                                                        </label> 
                                                        <textarea required id="summernote" maxlength="5100" name="Message" placeholder="Enter Note"></textarea>
                                                    </div>

                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="card-category form-category">
                                                    <star class="star">*</star> Required fields<br/>
                                                    <div>* Note: Copy this path <b>../../files/broadcast/image/PICTURENAME</b> to insert image inside Message. Image must be uploaded before insertion. Upload using the <b>BC Inner Picture</b> button under <b>Uploads</b>.</div>
                                                </div>

                                                <div class="card-footer" align="center">
                                                    <input style="color: rgb(1, 9, 53);" type="button" class="btn btn-default btn-block" value="CANCEL" onclick="blogUploadR(this.form);">
                                                    <input style="color: rgb(1, 9, 53);" type="submit" class="btn btn-warning btn-block" name="blogUpload" value="POST">
                                                    <input type="hidden" name="INSERT" value="7">
                                                    <input type="hidden" name="UID" value="<?php echo $_SESSION["duid"] ?>">
                                                </div>

                                            </div>

                                        </form>


                                    </div>
                                </div>
                            </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>





<!--============================================================================ 
                            CREATE INNER PICTURE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="bc-inner") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                        BC inner Picture
                                    </div>                        
                                </div>
                            </div>
                        </div>


                        <div class="col-md-7">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                    <form id="TypeValidation" class="form-horizontal" method="post" enctype="multipart/form-data">
                                        <div class="card">
                                            <div class="card-body">

                                                <h4>Create BC Album</h4>

                                                <div class="form-group">
                                                    <input minlength="2" maxlength="100" class="form-control" type="text" name="Album">
                                                    <p class="help-block1">Min: 2 and Max: 100 Characters </p>
                                                    
                                                    <input class="btn btn-warning btn-block" type="submit" value="Create">
                                                    <input type="hidden" name="INSERT" value="17">
                                                </div>
                                                        
                                                <div class="clearfix"></div>

                                                <p>Albums:</p>
                                                <?php 
                                                    $sql = "SELECT * FROM story_album ORDER BY ID DESC";
                                                    $q = $connect->prepare($sql);
                                                    $q->execute();

                                                    while($row = $q->fetch(PDO::FETCH_ASSOC)){ ?>
                                                        <div style="border: 1px solid #ccc; padding: 5px;" class="">
                                                            <?php echo $row["Album"]; ?>
                                                            
                                                            <a onclick="return confirm('Are you sure you want to delete this BC album? If you click OK, you might loose access to any picture placed inside it');" class="btn btn-sm btn-danger" href="delete-story-album?del=<?php echo $row["ID"]; ?>" >Delete</a>

                                                        </div>
                                                    <?php }
                                                ?>
                                            
                                            </div>
                                        </div>
                                    </form>

                                    <form id="TypeValidation" onsubmit="return mesUploadF(this);" class="form-horizontal form-upload" method="post" enctype="multipart/form-data">
                                        <?php echo isset($statusMsg) ? $statusMsg : ""; ?>
                                        <div class="card">
                                            <div class="card-body">

                                                <div class="form-group has-label">
                                                    <select required="true" name="Album" class="form-control" >
                                                        <option selected="selected" value="0">Select BC Album</option>
                                                        <?php 
                                                            $sql="SELECT * FROM story_album ORDER BY ID ASC"; 
                                                            $q = $connect->prepare($sql); 
                                                            $q->execute();
                                                            if($q){
                                                                while($r = $q->fetch(PDO::FETCH_ASSOC)) {
                                                                echo  "<option value=".$r["ID"].">".$r["Album"]."</option>";
                                                                }
                                                            }else{
                                                                echo "<p>You have to create story album first!</p>";
                                                            }
                                                        ?>
                                                    </select>
                                                </div>

                                                <div id="maindiv">
                                                    <div id="formdiv">
                                                            
                                                        <h5>Select Image Files to Upload:</h5>
                                                        <div align="center" id="filediv">
                                                            <input class="uploadinput" type="file" name="files[]" multiple required="true">
                                                            <!-- <input class="upload" type="submit" name="submit" value="UPLOAD"> -->
                                                            <input type="submit" class="upload" name="mesUpload" value="UPLOAD">
                                                            <input style="color: rgb(1, 9, 53);" type="button" class="btn btn-default btn-md btn-fill pull-center" value="CANCEL" onclick="mesUploadR(this.form);">
                                                            <input type="hidden" name="INSERT" value="10">
                                                        </div>
                                                        
                                                    </div>
                                                </div>
                                                <div class="clearfix"></div>
                                            
                                            </div>
                                        </div>
                                    </form>

                                    <div class="card card-stats form-upload">
                                        <div class="card-body">
                                            <h4>Photos uploaded for BC inner pictures</h4>
                                            <p>Open by BC Album:
                                                <div style="display: inline">
                                                    <?php
                                                        $sql = "SELECT message_picture.Album as galid, story_album.Album as albumname FROM message_picture 
                                                                RIGHT JOIN story_album on message_picture.Album = story_album.ID GROUP BY message_picture.Album"; 
                                                        $q_alb = $connect->prepare($sql); 
                                                        $q_alb->execute();
                                                        
                                                        foreach($q_alb as $key => $val){
                                                            echo   "<a href='dashboard?main&tuls=bc-album&aid=".$val["galid"]."'>
                                                                        <i style='display: inline' class='fa fa-picture'></i>" ." ". $val["albumname"] . "
                                                                    </a>
                                                                    <br/>
                                                                ";
                                                        }
                                                    ?> 
                                                </div>
                                            </p>
                                            <div class="gallery">
                                                <?php
                                                    $home = new Crud($connect);

                                                    $sql="SELECT * FROM message_picture ORDER BY ID DESC"; 
                                                    $query = $connect->prepare($sql); 
                                                    $query->execute();

                                                    // Generate gallery view of the images
                                                    if($query->rowCount() > 0){
                                                        
                                                        while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                                            $imageURL = '../../files/broadcast/image/';

                                                            $galid = $row["ID"];
                                                            $jk = $row["Photo"];
                                                            $jk = explode(",", $jk);
                                                            
                                                            foreach ($jk as $key) { ?>

                                                                <a href="<?php echo $imageURL . $key; ?>" data-toggle="lightbox" data-title="<?php echo $key; ?>" data-gallery="gallery">
                                                                    <img src="<?php echo $imageURL . $key; ?>" class="img-fluid mb-2" alt="<?php echo $key; ?>"/>
                                                                </a>
                                                                    
                                                                <?php if(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "1") { ?>
                                                                    <a onclick="return confirm('Are you sure you want to delete this picture? You might not be able to recover it.'); " href="delete-story-pic?galid=<?php echo $galid; ?>" >
                                                                        Delete 
                                                                    </a>
                                                                <?php } ?>

                                                            <?php } ?>
                                                        <?php }
                                                    } 
                                                    else{ ?>
                                                            <p style="color: #ff0000"><b>No image uploaded!</b></p>
                                                        <?php } 
                                                ?> 
                                            </div>
                                        </div>
                                    </div>



                                </div>
                            </div>
                        </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>






<!--============================================================================ 
                            BC ALBUM
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="bc-album") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                        <strong>
                                            <?php  $home = new Crud($connect);
                                                echo $home->AnyContent( "Album", "story_album", "ID", $_GET["aid"] ); 
                                            ?> 
                                        </strong> &nbsp; album
                                    </div>                        
                                </div>
                            </div>
                        </div>


                        <div class="col-md-7">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                    <div class="gallery">
                                        <?php
                                            // Get images from the database
                                            $alb_id = $_GET["aid"];

                                            $sql = "SELECT * FROM message_picture WHERE Album = '".$alb_id."' ORDER BY ID DESC"; 
                                            $query = $connect->prepare($sql); 
                                            $query->execute();

                                            // Generate gallery view of the images
                                            if($query->rowCount() > 0){
                                                
                                            while($row = $query->fetch(PDO::FETCH_ASSOC)){
                                                $imageURL = '../../files/images/blog/';
            
                                                $galid = $row["ID"];
                                                $jk = $row["Photo"];
                                                $jk = explode(",", $jk);
                                                
                                                foreach ($jk as $key) { ?>
            
                                                    <a href="<?php echo $imageURL . $key; ?>" data-toggle="lightbox" data-title="<?php echo $key; ?>" data-gallery="gallery">
                                                        <img src="<?php echo $imageURL . $key; ?>" class="img-fluid mb-2" alt="<?php echo $key; ?>"/>
                                                    </a>
                                                        
                                                    <?php if(isset($_SESSION["accesslevel"]) && $_SESSION["accesslevel"] == "1") { ?>
                                                        <a onclick="return confirm('Are you sure you want to delete this picture? You might not be able to recover it.'); " href="delete-story-pic?galid=<?php echo $galid; ?>&aid=<?php echo $alb_id; ?>" >
                                                            Delete 
                                                        </a>
                                                    <?php } ?>
            
                                                <?php } ?>
                                            <?php }
                                            } 
                                            else{ ?>
                                                    <p style="color: #ff0000"><b>No image found!</b></p>
                                                <?php } 
                                        ?> 
                                    </div>

                                </div>
                            </div>
                        </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>






<!--============================================================================ 
                            BROADCAST
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="broadcast") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                        <div class="col-md-12">
                            <div class="card mb-3">
                                <div class="card-header-tab card-header">
                                    <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                        <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                        Broadcast - BC
                                    </div>                        
                                </div>
                            </div>
                        </div>


                        <div class="col-md-7">
                            <div class="main-card mb-3 card">
                                <div class="card-body">

                                    <!-- blog properties -->
                                    <?php 

                                        $perpage = 5;

                                        if (isset($_GET["page"])) 
                                        {
                                            $page = intval($_GET["page"]);
                                        }
                                        else
                                        {
                                            $page = 1;
                                        }

                                        $calc = $perpage * $page;
                                        $start = $calc - $perpage;

                                        $sql = "SELECT * FROM broadcast ORDER BY ID DESC LIMIT $start, $perpage";
                                        $q = $connect->prepare($sql); 
                                        $q->execute();

                                        while($r = $q->fetch(PDO::FETCH_ASSOC)) { ?>

                                        <!-- BEGIN FEATURED POST -->
                                        <div class="featured-post-wide blog-cover">

                                            <div align="center" class="">
                                                <?php $media = $r["Mediaz"];
                                                    if (empty($media)  == TRUE) { echo ""; } 
                                                    else {
                                                        $ext = pathinfo($media, PATHINFO_EXTENSION);
                                                        //video
                                                        if($ext == "mp4" || $ext == "MP4"){ ?>
                                                            <video src="../../files/broadcast/video/<?php echo $media; ?>" width="100%" height="auto" controls="true"></video>
                                                           
                                                            <span id="current-time"></span>
                                                        <?php } 
                                                        //audio
                                                        elseif ($ext == "mp3" || $ext == "MP3"){ ?>
                                                            <audio src="../../files/broadcast/audio/<?php echo $media; ?>" width="100%" height="auto" controls="true"></audio>
                                                            <span id="current-time"></span>
                                                        <?php }
                                                        //image
                                                        else { ?>
                                                            <img src="../../files/broadcast/image/<?php echo $media; ?>" class="img-responsive blog-pic" alt="Image">
                                                        <?php }
                                                    }
                                                ?>
                                            </div>

                                            <div class="featured-text relative-left blog-anc">
                                                
                                                <h3 align="center">
                                                    <a class="regz" href="dashboard?main&tuls=read-bc&amb=<?php echo $r["ID"]; ?>"><?php echo $r["Title"]; ?></a>
                                                </h3>
                                                <small>
                                                    <p class="date">
                                                        <i class="fa fa-clock"></i>
                                                        <?php echo date("M-j-Y", strtotime($r["AddedOn"])); ?> at 
                                                        <?php echo date("g:ia", strtotime($r["AddedOn"])); 

                                                            if($_SESSION["accesslevel"] == "1")
                                                            { ?>
                                                                <a href="dashboard?main&tuls=edit-bc&eed=<?php echo $r["ID"]; ?>" class='regz'>Edit</a>

                                                                <a href="delete-blog?del=<?php echo $r["ID"]; ?>" class='regz'  
                                                                onclick="return confirm('Are you sure you want to delete this BC?');">Delete</a>
                                                            <?php } 
                                                        ?>
                                                    </p>
                                                </small>

                                                <div>
                                                    <?php
                                                        //strip tags to avoid breaking any html
                                                        $string = $r["Message"];
                                                        $string = strip_tags($string);

                                                        $checkstr = strlen($string) > 200;

                                                        if ($checkstr == TRUE) {

                                                            // truncate string
                                                            $stringCut = substr($string, 0, 200);

                                                            // make sure it ends in a word so assassinate doesn't become ass...
                                                            $fd= substr($stringCut, 0, strrpos($stringCut, ' '));
                                                            $string = $fd;
                                                        } 
                                                        echo $string;
                                                        if ($checkstr == TRUE) { echo "..."; }
                                                    ?>

                                                </div>
                                                <p class="additional-post-wrap" style="font-size: 13px">
                                                    <span class="additional-post"><i class="fa fa-user"></i> by <a href="#fakelink">
                                                        <?php $home = new Crud($connect);
                                                            echo $home->AnyContent("Fname", "users", "ID", $r["UID"]);
                                                        ?>
                                                    </a></span>
                                                    <span class="additional-post"><i class="fa fa-clock"></i><a href="#fakelink">
                                                        <?php echo date("Y M", strtotime($r["AddedOn"])); ?>
                                                    </a></span>
                                                    <span class="additional-post"><i class="fa fa-comment"></i><a href="#fakelink">
                                                        <?php echo FetchIndividualContent(7, $r["ID"]) ?> comment(s)</a>
                                                    </span>
                                                </p>
                                                        
                                                <?php if ($checkstr == TRUE) { ?>
                                                    <hr>
                                                    <a href="dashboard?dil=story&amb=<?php echo $r["ID"]; ?>" class="reg" >
                                                    <p class="text-right"><button class="btn btn-success">Read more</button></p>
                                                    </a>
                                                <?php } 
                                                ?>
                                            
                                            </div><!-- /.featured-text -->
                                        </div><!-- /.featured-post-wide -->
                                        <!-- END FEATURED POST -->

                                        <?php } ?>

                                        <?php if(isset($page))
                                        {
                                        $result = "SELECT COUNT(ID) as Total FROM broadcast ORDER BY ID DESC LIMIT $start, $perpage";
                                        $q = $connect->prepare($result); 
                                        $q->execute();
                                        $rows = $q->fetch(PDO::FETCH_ASSOC);

                                        $total =$rows["Total"];
                                        $totalpages = ceil($total/$perpage);
                                        $mycounter = 1;

                                        if($page <=1)
                                        {
                                            echo "<span id='page_links' style='font-weight:bold; padding:20px;'>&laquo; Prev</span>";
                                        }
                                        else
                                        {
                                            $j = $page -1;
                                            echo "<span style='padding:20px;'><a id='page_a_link' class='reg' href='dashboard?main&tuls=broadcast&page=$j'>&laquo; Prev</a></span>";
                                        }

                                        for ($i=1; $i <=$totalpages ; $i++) { 

                                            if($i<>$page)
                                            {
                                                //echo "<span><a id='page_links' href='index.php?page=$i'>$i</a></span>";
                                                if($mycounter<4)
                                                {
                                                    //echo "<br>";
                                                    echo "<span><a id='page_links' class='reg' href='dashboard?main&tuls=broadcast&page=$i'>$i</a></span> - " ;
                                                }
                                                else
                                                {
                                                    //echo "<span><a id='page_links' href='index.php?page=$i'>$i</a></span>" ;
                                                }
                                            }
                                            else
                                            {
                                                    echo "<span id='page_links' style='font-weight:bold; padding:20px;'>$i</span>";
                                            }

                                            $mycounter++;
                                        }

                                        if($page==$totalpages)
                                        {
                                            echo "<span id='page_links' style='font-weight:bold; padding:20px;'>Next</span>";
                                        }
                                        else
                                        {
                                            $j = $page +1;
                                                echo "<span style='padding:20px;'><a id='page_a_link' class='reg' href='dashboard?main&tuls=broadcast&page=$j' >Next &raquo;</a></span>";
                                        }
                                        } ?>

                                        <!-- Ends blog properties -->

                                </div>
                            </div>
                        </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>




<!--============================================================================ 
                            READ BC
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="read-bc") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                            Read BC
                                        </div>                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        
                                        <!-- OPENS ITEM -->
                                        <div class="blog-cover">
                            
                                            <?php
                                                $getbc = FetchIndividualContent("4", $_GET["amb"]);
                                                $media = $getbc[0]["Mediaz"];
                                                $title = $getbc[0]["Title"];
                                                $msg = $getbc[0]["Message"];
                                                $blogid = $getbc[0]["ID"];
                                            ?>
                                                
                                            <div align="center" class="title">
                                                <h3><?php echo ucfirst($title); ?></h3>
                                            </div>

                                            <?php if($_SESSION["accesslevel"] == "1")
                                                { ?>
                                                    <div align="center">
                                                        <a href="dashboard?main&tuls=edit-bc&eed=<?php echo $getbc[0]["ID"]; ?>" class='reg'>Edit</a>
                                                    
                                                        <a href="delete-blog?del=<?php echo $getbc[0]["ID"]; ?>" class='reg'  
                                                        onclick="return confirm('Are you sure you want to delete this post?');">Delete</a>
                                                    </div>

                                            <?php } ?>

                                            <hr/>
                                            <p class="blog-wrap">
                                                <span class="additional-post"><i class="fa fa-user"></i><a href="#fakelink">
                                                    <?php $home = new Crud($connect);
                                                        echo $home->AnyContent("Fname", "users", "ID", $getbc[0]["UID"]);
                                                    ?>
                                                </a></span>
                                                <span class="additional-post"><i class="fa fa-clock-o"></i><a href="#fakelink">
                                                    <?php echo date("Y M", strtotime($getbc[0]["AddedOn"])); ?>
                                                </a></span>
                                                <span class="additional-post"><i class="fa fa-comment"></i><a href="#fakelink">
                                                    <?php echo FetchIndividualContent(7, $blogid) ?> comment(s)</a></span>
                                            </p>

                                            <div align="center" class="">
                                                <?php //$media = $r["Mediaz"];
                                                    if (empty($media)  == TRUE) { echo ""; } 
                                                    else {
                                                        $ext = pathinfo($media, PATHINFO_EXTENSION);
                                                        //video
                                                        if($ext == "mp4" || $ext == "MP4"){ ?>
                                                            <video src="../../files/broadcast/video/<?php echo $media; ?>" width="100%" height="auto" controls="true"></video>
                                                           
                                                            <span id="current-time"></span>
                                                        <?php } 
                                                        //audio
                                                        elseif ($ext == "mp3" || $ext == "MP3"){ ?>
                                                            <audio src="../../files/broadcast/audio/<?php echo $media; ?>" width="100%" height="auto" controls="true"></audio>
                                                            <span id="current-time"></span>
                                                        <?php }
                                                        //image
                                                        else { ?>
                                                            <img src="../../files/broadcast/image/<?php echo $media; ?>" class="img-responsive blog-pic" alt="Image">
                                                        <?php }
                                                    }
                                                ?>
                                            </div>                                            

                                            <div class="" style="padding: 10px 0px">
                                                <p><?php echo $msg; ?></p>
                                            </div>
                                                    
                                            <!-- COMMENT DIV -->
                                            <div class="" >
                                            <?php
                                                $home = new Crud($connect);

                                                $comsql = "SELECT * FROM blog_com WHERE BlogID = '".$blogid."' ORDER BY ComID ASC LIMIT 20";
                                                $queryp = $connect->prepare($comsql);
                                                $queryp->execute();
                                                
                                                while ($rep = $queryp->fetch(PDO::FETCH_ASSOC)) { ?>
                                                    <div class="comment-wrap" style="margin: 10px 0px;">
                                                        <div class="row">
                                                            <?php 

                                                                $ui_d = $home->AnyContent("ID", "users", "ID", $rep["UID"]);
                                                                $acc_lv = $home->AnyContent("AccessLevel", "users", "ID", $rep["AccessLevel"]);

                                                    //If user exists in DB
                                                    if( (isset($ui_d) && $ui_d == TRUE) && (isset($acc_lv) && $acc_lv == TRUE) ) { 

                                                    $kk2 = $home->AnyContent("Photo", "users", "ID", $rep["UID"]); ?>

                                                    <div class="div-inline-1" style="border-right: 1px solid #ccc">  
                                                        
                                                        <?php if(!empty($kk2)) { ?>

                                                            <img src="../../files/images/profilepics/<?php echo $kk2; ?>" class="img-circlez avatarz" alt="<?php echo $rep["CreatedBy"]; ?>">

                                                        <?php } else { ?>

                                                            <img src="../../files/images/profilepics/default.png" class="img-circlez avatarz" alt="Avatar">

                                                        <?php } ?>
                                                        
                                                    </div>
                                                    
                                                    <div class="div-inline-2" style=" color: grey; word-wrap: break-word !important;">
                                                        <span style="font-size: 13px">
                                                            <?php 
                                                                echo "<b>".$home->AnyContent("Fname", "users", "ID", $rep["UID"])." ".$home->AnyContent("Sname", "users", "ID", $rep["UID"]). "</b>";
                                                            ?>
                                                        </span>
                                                        
                                                        <span style="text-decoration: none; font-size: 11px">
                                                            
                                                            <?php echo date("j-M", strtotime($rep["AddedOn"])); ?> at <?php echo date("g:ia",strtotime($rep["AddedOn"])); 

                                                            if( ($rep["UID"] == $_SESSION["duid"]) || ($_SESSION["accesslevel"] == "1") ){ ?> 

                                                                <a href="delete-blogcom.php?del=<?php echo $rep["ComID"]; ?>&returnto=dashboard?one=story&amb=<?php echo $blogid; ?>" class='regz'  
                                                                onclick="return confirm('Are you sure you want to delete this comment?');">Delete</a>

                                                            <?php } ?>
                                                        </span>
                                                    <br/>
                                                
                                                        <div class="" style="font-size: 13px; color: #000; padding-top: 15px; word-wrap: break-word !important;">
                                                            <?php echo $rep["Message"]; ?>
                                                            </div>
                                                        
                                                    </div>

                                                <?php }
                                                else{ ?> 
                                                                                
                                                    <div class="div-inline-1" style="border-right: 1px solid #ccc">  
                                                        
                                                            <img src="../../files/images/profilepics/default.png" class="img-circlez avatarz" alt="Avatar">

                                                    </div>
                                                    
                                                    <div class="div-inline-2" style=" color: grey">
                                                        
                                                        <b style="font-size: 13px"><?php echo $rep["CreatedBy"]; ?></b>
                                                        <!-- <div class="clearfix"></div> -->
                                                        <span style="text-decoration: none; font-size: 11px">
                                                            
                                                            <?php echo date("j-M", strtotime($rep["AddedOn"])); ?> at <?php echo date("g:ia",strtotime($rep["AddedOn"])); 

                                                            if($_SESSION["accesslevel"] == "1"){ ?> 

                                                                <a href="delete-blogcom.php?del=<?php echo $rep["ComID"]; ?>" class='regz'  
                                                                onclick="return confirm('Are you sure you want to delete this comment?');">Delete</a>

                                                            <?php } ?>
                                                        
                                                        </span>
                                                            
                                                        <div style="font-size: 13px; color: #000; padding-top: 15px;">
                                                            <?php echo $rep["Message"]; ?>
                                                        </div>
                                                        
                                                    </div>
                                            <?php } ?>
                                            
                                        </div>		
                                    </div>
                                <?php  }  ?>
                                
                                <div style="padding-top: 15px">
                                    <form action="" method="POST" class="form-group">
                                                <?php 
                                                //    if (isset($_SESSION["duid"])){
                                                //        $name = $home->AnyContent("Fname", "users", "ID", $_SESSION["duid"]);
                                                //        $uid = $home->AnyContent("ID", "users", "ID", $_SESSION["duid"]);
                                                //        $acclev = $home->AnyContent("AccessLevel", "users", "ID", $_SESSION["duid"]);
                                                //    }else{
                                                //        $name = "Anonymous";
                                                //        $uid = "0";
                                                //        $acclev = "0";
                                                //    }
                                                ?>
                                                <div  class="row" >
                                                    <div class="col-sm-10 div-inline-com-1">
                                                        <input maxlength="1000" name="Message" placeholder="Comment here.." class="form-control" required >
                                                    </div>

                                                    <div class="col-sm-1 div-inline-com-2" align="right">
                                                        <input type="submit" class="btn btn-default btn-md" value="comment">
                                                        <input type="hidden" name="INSERT" value="11">
                                                        <input type="hidden" name="CreatedBy" value="<?php echo $fname; ?>">
                                                        <input type="hidden" name="BlogID" value="<?php echo $blogid; ?>">
                                                        <input type="hidden" name="AccessLevel" value="<?php echo $_SESSION["accesslevel"]; ?>">
                                                        <input type="hidden" name="UID" value="<?php echo $_SESSION["duid"]; ?>">
                                                    </div>
                                                </div>
                                                                </form>
                                                            </div>
                                        </div>
                                        <!-- comment DIV -->

                                    </div>
                                    <!-- ENDS ITEM -->

                                    </div>
                            </div>
                        </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>




<!--============================================================================ 
                            CREATE BLOG
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="edit-bc") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">
    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">
                <div class="container-fluid">

                    <div class="row">
                            <div class="col-md-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-display1 mr-3 text-muted opacity-6"> </i>
                                            Edit BC
                                        </div>                        
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">

                                        <form onsubmit="return blogUpdateF(this);" class="form-horizontal" method="POST" enctype="multipart/form-data">
                                            <?php
                                                echo isset($response) ? $response : "";

                                                $getbc = FetchIndividualContent("4", $_GET["eed"]);
                                                $message = $getbc[0]["Message"];
                                                $cat = $getbc[0]["Category"];
                                                $title = $getbc[0]["Title"];
                                                $media = $getbc[0]["Mediaz"];
                                                $reach = $getbc[0]["Reach"];
                                                $tarbc = $getbc[0]["Target"];
                                                $id = $getbc[0]["ID"];
                                            ?>
                                            <div class="card">
                                                <div class="card-body ">
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label for="exampleEmail55">
                                                                    Reach
                                                                    <star class="star">*</star>
                                                                </label>
                                                                <select required=true id="BroadReach" name="Reach" class="form-control">
                                                                    <?php 
                                                                        $dd = $crud->select("reach", "*", "", "ID DESC");
                                                                        foreach ($dd as $key => $va) { ?>
                                                                            <option id="BroadReach" value="<?php echo $va["ID"]; ?>" <?php if($va["ID"] == $reach){ echo "selected"; } ?>>
                                                                                <?php echo $va["Type"]; ?>
                                                                            </option>
                                                                    <?php } ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group">
                                                                <label for="examplePassword22">
                                                                    Category
                                                                    <star class="star">*</star>
                                                                </label>
                                                                <select required="true" name="Category" class="form-control" >
                                                                    <option selected="selected" value="0">Select Category</option>
                                                                    <?php 
                                                                        //$q = $crud->select("category", "*", "", "ID ASC");
                                                                        $sql="SELECT * FROM category ORDER BY ID ASC"; 
                                                                        $q = $connect->prepare($sql); 
                                                                        $q->execute();
                                                                        while($r = $q->fetch(PDO::FETCH_ASSOC))
                                                                        {
                                                                            $ss = ($r["ID"] == $cat) ? "selected" : "";
                                                                            echo  "<option value=".$r["ID"]." $ss>".$r["Category"]."</option>";
                                                                        }
                                                                    ?>
                                                                </select>
                                                            </div>
                                                        </div>
                                                    </div>
                                                                                                        
                                                    <div id="broadtype" class="form-group has-label">
                                                        <label>
                                                            Target
                                                            <star class="star">*</star>
                                                        </label>
                                                        <select required="true" name="Target" class="form-control">
                                                            <?php 
                                                                $targ = $crud->select("target", "*", "", "ID ASC");
                                                                foreach ($targ as $key => $var) { ?>
                                                                    <option value="<?php echo $var["ID"]; ?>" <?php echo ($var["ID"] == $tarbc) ? "selected" : ""; ?>>
                                                                        <?php echo $var["Target"]; ?>
                                                                    </option>
                                                            <?php } ?>
                                                        </select>
                                                    </div>
                                                    
                                                    <div class="form-group has-label">
                                                        <label>
                                                            Title
                                                            <star class="star">*</star>
                                                        </label>
                                                        <input minlength="2" maxlength="150" class="form-control" name="Title" type="text" required="true" placeholder="Enter blog title" value="<?php echo isset($title) ? $title : ""; ?>" />
                                                    </div>

                                                    <div class="form-group has-label">
                                                        <label>
                                                            Media (video, audio or picture) <b>optional</b>
                                                        </label>
                                                        <div class="col-sm-12">
                                                            <div class="row">
                                                                <div class="form-group col-sm-2" style="border: 1px solid #ccc; height: 100px; align: center; ">
                                                                    <?php 
                                                                        $ext = pathinfo($media, PATHINFO_EXTENSION);
                                                                        $ext = strtolower($ext);
                                                                        if($ext == "png" || $ext == "jpg" || $ext == "jpeg") 
                                                                            { ?>
                                                                                <img class="blog-pic" src="../../files/broadcast/image/<?php echo $media; ?>" alt="Photo"> 
                                                                            <?php } else { ?>
                                                                                <strong>No preview! <br/>Not a Photo</strong>
                                                                        <?php } ?>
                                                                </div>

                                                                <div class="form-group col-sm-2" style="border: 1px solid #ccc; height: 100px; align: center; ">
                                                                    <div id="image-preview" class="image-preview">
                                                                        <small>Image preview</small>
                                                                    </div>
                                                                </div>
                                                                
                                                                <div class="form-group col-sm-8" >
                                                                    <input type="file" id="inputFile" name="Mediaz" class="form-control" >
                                                                    <input type="hidden" name="MediaHolder" value="<?php echo (isset($media)) ? $media : ""; ?>" >
                                                                    
                                                                    <small>File must not be greater than 5MB. </small><br/>
                                                                    <small>Supported formats are PNG, JPG, JPEG, MP4 and MP3. </small>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="form-group has-label">
                                                        <label>
                                                            Message <star class="star">*</star>
                                                        </label> 
                                                        <textarea required id="summernote" maxlength="5100" name="Message" placeholder="Enter Note"><?php echo $message; ?></textarea>
                                                    </div>

                                                </div>

                                                <div class="clearfix"></div>
                                                <div class="card-category form-category">
                                                    <star class="star">*</star> Required fields<br/>
                                                    <div>* Note: Copy this path <b>../../files/broadcast/image/PICTURENAME</b> to insert image inside Message. Image must be uploaded before insertion. Upload using the <b>BC Inner Picture</b> button under <b>Uploads</b>. 
                                                    </div>
                                                </div>
                                                
                                                <div class="card-footer " align="center">
                                                    <input style="color: rgb(1, 9, 53);" type="button" class="btn btn-default btn-block" value="CANCEL" onclick="blogUpdateR(this.form);">
                                                    <input style="color: rgb(1, 9, 53);" type="submit" class="btn btn-warning btn-block" name="blogUpdate" value="UPDATE">
                                                    <!-- <input type="hidden" name="AccessLevel" value="<?php //echo $_SESSION["accesslevel"]; ?>"> -->
                                                    <input type="hidden" name="EDIT" value="4">
                                                    <input type="hidden" name="EDITVAL" value="<?php echo $id; ?>">
                                                    <div class="clearfix"></div>
                                                </div>

                                            </div>

                                        </form>


                                    </div>
                            </div>
                        </div>

                        <?php include "advert-portrait.php"; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<?php } ?>




<!--============================================================================ 
                            SUB-ADMINS TABLE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="sub-admin") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">

                        <div class="card mb-3">
                            <div class="card-header-tab card-header">
                                <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                    <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                    Sub-Admin
                                </div>
                        
                            </div>
                            <div class="card-body">
                                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                    <thead>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email/Phone</th>
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Joined</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $fet_msg = FetchTableContent(3);
                                            $count = 1;

                                            foreach ($fet_msg as $key => $val) { ?>

                                            <tr class="">
                                                <td><?php echo $count; ?></td>
                                                <td class="center">	
                                                    <?php echo $val["Fname"]." ".$val["Sname"]; ?>
                                                </td>
                                                <td><?php echo $val["Email"]." / ".$val["Phone"]; ?></td>
                                                <td class="center"><?php echo $val["Role"]; ?></td>
                                                <td class="center"><?php echo $val["Addr"]; ?></td>
                                                <td>
                                                    <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:s a", strtotime($val["AddedOn"])); ?>
                                                </td>
                                                
                                                <td class="center">
                                                    <?php $home = new Crud($connect);
                                                            $usr = $val["UID"];
                                                        if($_SESSION["accesslevel"] == 1){
                                                        
                                                            //$check = $home->select("advert", "*", " ID = '".$val["ID"]."' ");
                                                            $check = $home->AnyContent("ActiveStatus", "users", "ID", $usr);
                                                            
                                                            if($check == "1")
                                                            { ?>
                                                                <a href="../../appfunctions/appfunctions.php?act-user=1&lid=2&xid=<?php echo $usr; ?>" class="btn btn-warning btn-sm">
                                                                    Not active
                                                                </a>
                                                            <?php } 
                                                            elseif($check == "3")
                                                            { ?>
                                                                <a href="../../appfunctions/appfunctions.php?act-user=3&lid=2&xid=<?php echo $usr; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to activate this user? Account was previously deactivated by an admin.')">
                                                                Deactivated
                                                                </a>
                                                            <?php }
                                                            elseif($check == "2")
                                                            { ?>
                                                                <a href="../../appfunctions/appfunctions.php?act-user=2&lid=2&xid=<?php echo $usr; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this user? User account will go offline if you accept.')">
                                                                Active
                                                                </a>
                                                            <?php }else{ ?>
                                                                <strong>
                                                                    Error!
                                                                </strong>
                                                            <?php }
                                                        }
                                                    ?>

                                                    <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this sub-admin. You might not be able to undo action?');" href="#delete-admin?del=<?php echo $val["ID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                </td>
                                            </tr>
                                            <?php $count++; } ?>
                                    </tbody>
                                    <tfoot>
                                        <tr>
                                            <th>S/N</th>
                                            <th>Name</th>
                                            <th>Email/Phone</th>
                                            <th>Role</th>
                                            <th>Address</th>
                                            <th>Joined</th>
                                            <th>Actions</th>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>





<!--============================================================================ 
                            SCHOOLS TABLE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="school") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                            School
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Kind</th>
                                                    <th>Type</th>
                                                    <th>Design</th>
                                                    <th>Category</th>
                                                    <th>Phone/Email</th>
                                                    <th>Address</th>
                                                    <th>Country</th>
                                                    <th>State</th>
                                                    <th>Local Gov</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $fet_msg = FetchTableContent(24);
                                                    $count = 1;

                                                    foreach ($fet_msg as $key => $val) { ?>

                                                    <tr class="">
                                                        <td><?php echo $count; ?></td>
                                                        <td class="center">	
                                                            <?php echo $val["SchoolName"]; ?>
                                                        </td>
                                                        <td><?php echo $val["SchoolKind"]; ?></td>
                                                        <td class="center"><?php echo $val["SchoolType"]; ?></td>
                                                        <td class="center"><?php echo $val["Design"]; ?></td>
                                                        <td class="center"><?php echo $val["Category"]; ?></td>
                                                        <td class="center"><?php echo $val["Phone"]."/ ".$val["Email"]; ?></td>
                                                        <td class="center"><?php echo $val["Address"]; ?></td>
                                                        <td class="center"><?php echo $val["Country"]; ?></td>
                                                        <td class="center"><?php echo $val["State"]; ?></td>
                                                        <td class="center"><?php echo $val["LocalGov"]; ?></td>
                                                        <td>
                                                            <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:s a", strtotime($val["AddedOn"])); ?>
                                                        </td>
                                                
                                                        <td class="center">
                                                            <?php $home = new Crud($connect);
                                                                    $usr = $val["UID"];
                                                                if($_SESSION["accesslevel"] == 1){
                                                                
                                                                    //$check = $home->select("advert", "*", " ID = '".$val["ID"]."' ");
                                                                    $check = $home->AnyContent("ActiveStatus", "users", "ID", $usr);
                                                                    
                                                                    if($check == "1")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=1&lid=3&xid=<?php echo $usr; ?>" class="btn btn-warning btn-sm">
                                                                            Not active
                                                                        </a>
                                                                    <?php } 
                                                                    elseif($check == "3")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=3&lid=3&xid=<?php echo $usr; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to activate this user? Account was previously deactivated by an admin.')">
                                                                        Deactivated
                                                                        </a>
                                                                    <?php }
                                                                    elseif($check == "2")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=2&lid=3&xid=<?php echo $usr; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this user? User account will go offline if you accept.')">
                                                                        Active
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <strong>
                                                                            Error!
                                                                        </strong>
                                                                    <?php }
                                                                }
                                                            ?>

                                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this school. You might not be able to undo action?');" href="#delete-school?del=<?php echo $val["SchoolID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                        </td>
                                                    </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Kind</th>
                                                    <th>Type</th>
                                                    <th>Design</th>
                                                    <th>Category</th>
                                                    <th>Phone/Email</th>
                                                    <th>Address</th>
                                                    <th>Country</th>
                                                    <th>State</th>
                                                    <th>Local Gov</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>





<!--============================================================================ 
                            TEACHER TABLE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="teacher") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                            Teacher
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>Highest Qual.</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $fet_msg = FetchTableContent(25);
                                                    $count = 1;

                                                    foreach ($fet_msg as $key => $val) { ?>

                                                    <tr class="">
                                                        <td><?php echo $count; ?></td>
                                                        <td class="center">	
                                                            <?php echo $val["Fname"]." ".$val["Sname"]; ?>
                                                        </td>
                                                        <td><?php echo $val["Email"]."/ ".$val["Phone"]; ?></td>
                                                        <td class="center"><?php echo $val["Gender"]; ?></td>
                                                        <td class="center"><?php echo $val["Qualification"]; ?></td>
                                                        <td class="center"><?php echo $val["Addr"]; ?></td>
                                                        <td class="center"><?php echo $val["LocalGov"]; ?></td>
                                                        <td class="center"><?php echo $val["State"]; ?></td>
                                                        <td class="center"><?php echo $val["Country"]; ?></td>
                                                        <td>
                                                            <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:sa", strtotime($val["AddedOn"])); ?>
                                                        </td>
                                                
                                                        <td class="center">
                                                            <?php $home = new Crud($connect);
                                                                    $usr = $val["UID"];
                                                                if($_SESSION["accesslevel"] == 1){
                                                                
                                                                    //$check = $home->select("advert", "*", " ID = '".$val["ID"]."' ");
                                                                    $check = $home->AnyContent("ActiveStatus", "users", "ID", $usr);
                                                                    
                                                                    if($check == "1")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=1&lid=4&xid=<?php echo $usr; ?>" class="btn btn-warning btn-sm">
                                                                            Not active
                                                                        </a>
                                                                    <?php } 
                                                                    elseif($check == "3")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=3&lid=4&xid=<?php echo $usr; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to activate this user? Account was previously deactivated by an admin.')">
                                                                        Deactivated
                                                                        </a>
                                                                    <?php }
                                                                    elseif($check == "2")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=2&lid=4&xid=<?php echo $usr; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this user? User account will go offline if you accept.')">
                                                                        Active
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <strong>
                                                                            Error!
                                                                        </strong>
                                                                    <?php }
                                                                }
                                                            ?>

                                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this school. You might not be able to undo action?');" href="#delete-school?del=<?php echo $val["TID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                        </td>
                                                    </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>Highest Qual.</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>






<!--============================================================================ 
                            STUDENT TABLE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="student") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                            Student
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>School</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $fet_msg = FetchTableContent(26);
                                                    $count = 1;

                                                    foreach ($fet_msg as $key => $val) { ?>

                                                    <tr class="">
                                                        <td><?php echo $count; ?></td>
                                                        <td class="center">	
                                                            <?php echo $val["Fname"]." ".$val["Sname"]; ?>
                                                        </td>
                                                        <td><?php echo $val["Email"]."/ ".$val["Phone"]; ?></td>
                                                        <td class="center"><?php echo $val["Gender"]; ?></td>
                                                        <td class="center">
                                                            <?php echo $crud->AnyContent("SchoolName", "school", "SchoolID", $val["SchoolID"]); ?>
                                                        </td>
                                                        <td class="center"><?php echo $val["Addr"]; ?></td>
                                                        <td class="center"><?php echo $val["LocalGov"]; ?></td>
                                                        <td class="center"><?php echo $val["State"]; ?></td>
                                                        <td class="center"><?php echo $val["Country"]; ?></td>
                                                        <td>
                                                            <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:sa", strtotime($val["AddedOn"])); ?>
                                                        </td>
                                                
                                                        <td class="center">
                                                            <?php $home = new Crud($connect);
                                                                    $usr = $val["UID"];
                                                                if($_SESSION["accesslevel"] == 1){
                                                                
                                                                    //$check = $home->select("advert", "*", " ID = '".$val["ID"]."' ");
                                                                    $check = $home->AnyContent("ActiveStatus", "users", "ID", $usr);
                                                                    
                                                                    if($check == "1")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=1&lid=6&xid=<?php echo $usr; ?>" class="btn btn-warning btn-sm">
                                                                            Not active
                                                                        </a>
                                                                    <?php } 
                                                                    elseif($check == "3")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=3&lid=6&xid=<?php echo $usr; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to activate this user? Account was previously deactivated by an admin.')">
                                                                        Deactivated
                                                                        </a>
                                                                    <?php }
                                                                    elseif($check == "2")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=2&lid=6&xid=<?php echo $usr; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this user? User account will go offline if you accept.')">
                                                                        Active
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <strong>
                                                                            Error!
                                                                        </strong>
                                                                    <?php }
                                                                }
                                                            ?>

                                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this school. You might not be able to undo action?');" href="#delete-school?del=<?php echo $val["StdID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                        </td>
                                                    </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>School</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>





<!--============================================================================ 
                            PARENT TABLE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="parent") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                            Parent
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>Ward</th>
                                                    <th>School</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $fet_msg = FetchTableContent(27);
                                                    $count = 1;

                                                    foreach ($fet_msg as $key => $val) { ?>

                                                    <tr class="">
                                                        <td><?php echo $count; ?></td>
                                                        <td class="center">	
                                                            <?php echo $val["Fname"]." ".$val["Sname"]; ?>
                                                        </td>
                                                        <td><?php echo $val["Email"]."/ ".$val["Phone"]; ?></td>
                                                        <td class="center"><?php echo $val["Gender"]; ?></td>
                                                        <td class="center">
                                                            <?php //Use loop to get Fname and Sname from student table
                                                                echo $crud->AnyContent("Fname", "student", "ParID", $val["ParID"])." ".$crud->AnyContent("Sname", "student", "ParID", $val["ParID"]);
                                                            ?> Unfinished!!
                                                        </td>
                                                        <td class="center">
                                                            <?php  //Use loop to get schID list from array. e.g 1,3,2 then another loop to get school name.. Nested Loop
                                                                $sch_id = $crud->AnyContent("SchoolID", "student", "ParID", $val["ParID"]); 
                                                                echo $crud->AnyContent("SchoolName", "school", "SchoolID", $sch_id);
                                                            ?>
                                                        </td>
                                                        <td class="center"><?php echo $val["Addr"]; ?></td>
                                                        <td class="center"><?php echo $val["LocalGov"]; ?></td>
                                                        <td class="center"><?php echo $val["State"]; ?></td>
                                                        <td class="center"><?php echo $val["Country"]; ?></td>
                                                        <td>
                                                            <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:sa", strtotime($val["AddedOn"])); ?>
                                                        </td>
                                                
                                                        <td class="center">
                                                            <?php $home = new Crud($connect);
                                                                    $usr = $val["UID"];
                                                                if($_SESSION["accesslevel"] == 1){
                                                                
                                                                    //$check = $home->select("advert", "*", " ID = '".$val["ID"]."' ");
                                                                    $check = $home->AnyContent("ActiveStatus", "users", "ID", $usr);
                                                                    
                                                                    if($check == "1")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=1&lid=7&xid=<?php echo $usr; ?>" class="btn btn-warning btn-sm">
                                                                            Not active
                                                                        </a>
                                                                    <?php } 
                                                                    elseif($check == "3")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=3&lid=7&xid=<?php echo $usr; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to activate this user? Account was previously deactivated by an admin.')">
                                                                        Deactivated
                                                                        </a>
                                                                    <?php }
                                                                    elseif($check == "2")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=2&lid=7&xid=<?php echo $usr; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this user? User account will go offline if you accept.')">
                                                                        Active
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <strong>
                                                                            Error!
                                                                        </strong>
                                                                    <?php }
                                                                }
                                                            ?>

                                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this school. You might not be able to undo action?');" href="#delete-school?del=<?php echo $val["ParID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                        </td>
                                                    </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>School</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>





<!--============================================================================ 
                            NON-ACADEMIC TABLE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="non-academic") { 

$home = new Crud($connect);
?>

    <div class="app-inner-layout app-inner-layout-page">
        <div class="app-inner-layout__wrapper">
            <div class="app-inner-layout__content">
                <div class="tab-content">
                    <div class="container-fluid">
                        <div class="row">

                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-users mr-3 text-muted opacity-6"> </i>
                                            Non-Academic
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">
                                        <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>Role</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $fet_msg = FetchTableContent(28);
                                                    $count = 1;

                                                    foreach ($fet_msg as $key => $val) { ?>

                                                    <tr class="">
                                                        <td><?php echo $count; ?></td>
                                                        <td class="center">	
                                                            <?php echo $val["Fname"]." ".$val["Sname"]; ?>
                                                        </td>
                                                        <td><?php echo $val["Email"]."/ ".$val["Phone"]; ?></td>
                                                        <td class="center"><?php echo $val["Gender"]; ?></td>
                                                        <td class="center">
                                                            <?php 
                                                                echo $crud->AnyContent("Role", "users", "ID", $val["UID"]);
                                                            ?>
                                                        </td>
                                                        <td class="center"><?php echo $val["Addr"]; ?></td>
                                                        <td class="center"><?php echo $val["LocalGov"]; ?></td>
                                                        <td class="center"><?php echo $val["State"]; ?></td>
                                                        <td class="center"><?php echo $val["Country"]; ?></td>
                                                        <td>
                                                            <?php echo date("j-M-Y", strtotime($val["AddedOn"]))." at ".date("G:i:sa", strtotime($val["AddedOn"])); ?>
                                                        </td>
                                                
                                                        <td class="center">
                                                            <?php $home = new Crud($connect);
                                                                    $usr = $val["UID"];
                                                                if($_SESSION["accesslevel"] == 1){
                                                                    $check = $home->AnyContent("ActiveStatus", "users", "ID", $usr);
                                                                    
                                                                    if($check == "1")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=1&lid=5&xid=<?php echo $usr; ?>" class="btn btn-warning btn-sm">
                                                                            Not active
                                                                        </a>
                                                                    <?php } 
                                                                    elseif($check == "3")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=3&lid=5&xid=<?php echo $usr; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to activate this user? Account was previously deactivated by an admin.')">
                                                                        Deactivated
                                                                        </a>
                                                                    <?php }
                                                                    elseif($check == "2")
                                                                    { ?>
                                                                        <a href="../../appfunctions/appfunctions.php?act-user=2&lid=5&xid=<?php echo $usr; ?>" class="btn btn-success btn-sm" onclick="return confirm('Are you sure you want to deactivate this user? User account will go offline if you accept.')">
                                                                        Active
                                                                        </a>
                                                                    <?php }else{ ?>
                                                                        <strong>
                                                                            Error!
                                                                        </strong>
                                                                    <?php }
                                                                }
                                                            ?>

                                                            <a class="btn btn-danger btn-sm" onclick="return confirm('Are you sure you want to delete this school. You might not be able to undo action?');" href="#delete-school?del=<?php echo $val["ID"]; ?>"><i class=" fa fa-trash"></i></a> 
                                                        </td>
                                                    </tr>
                                                <?php $count++; } ?>
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <th>S/N</th>
                                                    <th>Name</th>
                                                    <th>Email/Phone</th>
                                                    <th>Gender</th>
                                                    <th>School</th>
                                                    <th>Address</th>
                                                    <th>Local Gov</th>
                                                    <th>State</th>
                                                    <th>Country</th>
                                                    <th>Joined</th>
                                                    <th>Actions</th>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<?php } ?>



<!--============================================================================ 
                            MY PROFILE
=================================================================================-->
<?php if(isset($_GET["tuls"]) && $_GET["tuls"]=="profile") { 

$home = new Crud($connect);

?>

<div class="app-inner-layout app-inner-layout-page">

    <div class="app-inner-layout__wrapper">
        <div class="app-inner-layout__content">
            <div class="tab-content">

                <div class="tab-pane tabs-animation fade show active" id="tab-content-0" role="tabpanel">
                    <div class="container-fluid">
                        <div class="row">
                            
                            <div class="col-sm-12">
                                <div class="card mb-3">
                                    <div class="card-header-tab card-header">
                                        <div class="card-header-title font-size-lg text-capitalize font-weight-normal">
                                            <i class="header-icon pe-7s-user mr-3 text-muted opacity-6"> </i>
                                            My Profile                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-md-3 col-lg-3">
                                <div class="card-shadow-primary card-border mb-3 card">
                                    <div class="dropdown-menu-header">
                                        <div class="dropdown-menu-header-inner bg-info">
                                            <div class="menu-header-image opacity-2"
                                                    style="background-image: url('../assets/images/dropdown-header/abstract1.jpg');">
                                            </div>
                                            <div class="menu-header-content btn-pane-right">
                                                <div class="avatar-icon-wrapper mr-2 avatar-icon-xl">
                                                    <div class="avatar-icon rounded">                                                        
                                                        <?php 
                                                            if(isset($getprofile[0]["Photo"]) && $getprofile[0]["Photo"] !="") { ?>

                                                                <img src="../../files/images/profilepics/<?php echo $getprofile[0]["Photo"]; ?>" alt="<?php echo $fname; ?>">
                                                            <?php } else { ?>
                                                                    <img src="../../files/images/profilepics/default.png" alt="Avatar">
                                                            <?php } 
                                                        ?>
                                                    </div>
                                                </div>
                                                <div><h5 class="menu-header-title"><?php echo $fname." ".$sname; ?></h5></div>
                                               
                                            </div>
                                        </div>
                                    </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <div class="widget-content">
                                                <div class="text-center">
                                                    
                                                    <h6 class="widget-heading opacity-7">
                                                        <?php echo $crud->AnyContent("AccessLevel", "accesslevel", "ID", $acc_lev); ?>
                                                    </h6>
                                                    <h6 class="widget-heading opacity-10">
                                                        <?php echo $role; ?>
                                                    </h6>
                                                    <div style="font-size: 14px;" class="widget-heading opacity-7">
                                                            
                                                        <i class="fa fa-phone">
                                                            <?php echo $crud->AnyContent("Phone", "users", "ID", $duid); ?>
                                                        </i>
                                                        <i class="fa fa-envelope">
                                                            <?php echo $crud->AnyContent("Email", "users", "ID", $duid); ?>
                                                        </i>
                                                        <i class="fa fa-pen">
                                                            <?php echo $crud->AnyContent("Bio", "users", "ID", $duid); ?>
                                                        </i>
                                                    </div>

                                                    <!-- <h5><span class="pr-2"><b class="text-danger">12</b>
                                                        <span><b class="text-success"><?php //echo $role; ?></span>
                                                    </h5> -->
                                                </div>
                                            </div>
                                        </li>
                                        <li class="p-0 list-group-item">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    <div class="col-sm-6">
                                                        <a href="dashboard?main&tuls=acct-settings" class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-settings icon-gradient bg-love-kiss btn-icon-wrapper btn-icon-lg mb-3"> </i>Account Settings
                                                        </a>
                                                    </div>
                                                    <div class="col-sm-6">
                                                        <a href="dashboard?main&tuls=change-pword" class="btn-icon-vertical btn-square btn-transition btn btn-outline-link">
                                                            <i class="pe-7s-lock icon-gradient bg-love-kiss btn-icon-wrapper btn-icon-lg mb-3"> </i>Change Password
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <div class="col-lg-7 col-md-7">
                                <div class="main-card mb-3 card">
                                    <div class="card-body">

                                        <div id="smartwizard">
                                            <ul class="forms-wizard">
                                                <li>
                                                    <a href="#step-1">
                                                        <em>1</em><span>Info</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-2">
                                                        <em>2</em><span>Almost done</span>
                                                    </a>
                                                </li>
                                                <li>
                                                    <a href="#step-3">
                                                        <em>3</em><span>Last step</span>
                                                    </a>
                                                </li>
                                            </ul>

                                            <div class="form-wizard-content">
                                                <div id="step-1">
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleEmail55">Email</label><input
                                                                    name="email" id="exampleEmail55"
                                                                    placeholder="with a placeholder" type="email"
                                                                    class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group"><label
                                                                    for="examplePassword22">Password</label><input
                                                                    name="password" id="examplePassword22"
                                                                    placeholder="password placeholder"
                                                                    type="password"
                                                                    class="form-control"></div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative form-group"><label
                                                            for="exampleAddress">Address</label><input
                                                            name="address" id="exampleAddress"
                                                            placeholder="1234 Main St" type="text"
                                                            class="form-control"></div>
                                                    <div class="position-relative form-group"><label
                                                            for="exampleAddress2">Address 2</label><input
                                                            name="address2" id="exampleAddress2"
                                                            placeholder="Apartment, studio, or floor" type="text"
                                                            class="form-control">
                                                    </div>
                                                    <div class="form-row">
                                                        <div class="col-md-6">
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleCity">City</label><input name="city"
                                                                                                            id="exampleCity"
                                                                                                            type="text"
                                                                                                            class="form-control">
                                                            </div>
                                                        </div>
                                                        <div class="col-md-4">
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleState">State</label><input
                                                                    name="state" id="exampleState" type="text"
                                                                    class="form-control"></div>
                                                        </div>
                                                        <div class="col-md-2">
                                                            <div class="position-relative form-group"><label
                                                                    for="exampleZip">Zip</label><input name="zip"
                                                                                                        id="exampleZip"
                                                                                                        type="text"
                                                                                                        class="form-control">
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="position-relative form-check"><input name="check"
                                                                                                        id="exampleCheck"
                                                                                                        type="checkbox"
                                                                                                        class="form-check-input"><label
                                                            for="exampleCheck" class="form-check-label">Check me
                                                        out</label>
                                                    </div>
                                                </div>
                                                <div id="step-2">
                                                    <div id="accordion" class="accordion-wrapper mb-3">
                                                        <div class="card">
                                                            <div id="headingOne" class="card-header">
                                                                <button type="button" data-toggle="collapse"
                                                                        data-target="#collapseOne"
                                                                        aria-expanded="false"
                                                                        aria-controls="collapseOne"
                                                                        class="text-left m-0 p-0 btn btn-link btn-block">
                                                                    <span class="form-heading">Account Information<p>Enter your user informations below</p></span>
                                                                </button>
                                                            </div>
                                                            <div data-parent="#accordion" id="collapseOne"
                                                                    aria-labelledby="headingOne" class="collapse show">
                                                                <div class="card-body">
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <label for="exampleEmail2">Email</label>
                                                                                <input name="email"
                                                                                        id="exampleEmail2"
                                                                                        placeholder="with a placeholder"
                                                                                        type="email"
                                                                                        class="form-control">
                                                                            </div>
                                                                        </div>
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <label for="examplePassword">Password</label>
                                                                                <input name="password"
                                                                                        id="examplePassword"
                                                                                        placeholder="password placeholder"
                                                                                        type="password"
                                                                                        class="form-control">
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="position-relative form-group">
                                                                        <label for="exampleAddress">Address</label><input
                                                                            name="address" id="exampleAddress"
                                                                            placeholder="1234 Main St" type="text"
                                                                            class="form-control"></div>
                                                                    <div class="position-relative form-group"><label
                                                                            for="exampleAddress2">Address
                                                                        2</label><input name="address2"
                                                                                        id="exampleAddress2"
                                                                                        placeholder="Apartment, studio, or floor"
                                                                                        type="text"
                                                                                        class="form-control"></div>
                                                                    <div class="form-row">
                                                                        <div class="col-md-6">
                                                                            <div class="position-relative form-group">
                                                                                <label for="exampleCity">City</label><input
                                                                                    name="city" id="exampleCity"
                                                                                    type="text"
                                                                                    class="form-control"></div>
                                                                        </div>
                                                                        <div class="col-md-4">
                                                                            <div class="position-relative form-group">
                                                                                <label for="exampleState">State</label><input
                                                                                    name="state" id="exampleState"
                                                                                    type="text"
                                                                                    class="form-control"></div>
                                                                        </div>
                                                                        <div class="col-md-2">
                                                                            <div class="position-relative form-group">
                                                                                <label for="exampleZip">Zip</label><input
                                                                                    name="zip" id="exampleZip"
                                                                                    type="text"
                                                                                    class="form-control"></div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div id="step-3">
                                                    <div class="no-results">
                                                        <div class="swal2-icon swal2-success swal2-animate-success-icon">
                                                            <div class="swal2-success-circular-line-left"
                                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                            <span class="swal2-success-line-tip"></span>
                                                            <span class="swal2-success-line-long"></span>
                                                            <div class="swal2-success-ring"></div>
                                                            <div class="swal2-success-fix"
                                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                            <div class="swal2-success-circular-line-right"
                                                                    style="background-color: rgb(255, 255, 255);"></div>
                                                        </div>
                                                        <div class="results-subtitle mt-4">Finished!</div>
                                                        <div class="results-title">You arrived at the last form
                                                            wizard step!
                                                        </div>
                                                        <div class="mt-3 mb-3"></div>
                                                        <div class="text-center">
                                                            <button class="btn-shadow btn-wide btn btn-success btn-lg">
                                                                Finish
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="divider"></div>
                                        <div class="clearfix">
                                            <button type="button" id="reset-btn"
                                                    class="btn-shadow float-left btn btn-link">Reset
                                            </button>
                                            <button type="button" id="next-btn"
                                                    class="btn-shadow btn-wide float-right btn-pill btn-hover-shine btn btn-primary">
                                                Next
                                            </button>
                                            <button type="button" id="prev-btn"
                                                    class="btn-shadow float-right btn-wide btn-pill mr-3 btn btn-outline-secondary">
                                                Previous
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                   
                        </div>
                    </div>
                </div>


            </div>
        </div>

    </div>
</div>

<?php } ?>





























    </div><!--app-main__inner-->
    
    <!-- =======================================================================================
                                FOOTER MENU
    ========================================================================================= --> 
    <div class="app-wrapper-footer">
        <div class="app-footer">
            <div class="">
                <div class="app-footer__inner">
                    <small>
                        Copyright &copy; <script>document.write(new Date().getFullYear());</script>. All rights reserved. SmartTuls. Designed by <a href="#https://smarttuls.com" target="_blank">SmartTuls IT Team</a>
                    </small>
                
                    <div class="app-footer-right">
                        <ul class="header-megamenu nav">
                            <li class="nav-item">
                                <a data-placement="top" rel="popover-focus" data-offset="300" data-toggle="popover-custom" class="nav-link">
                                    Footer Menu
                                    <i class="fa fa-angle-up ml-2 opacity-8"></i>
                                </a>
                                <div class="rm-max-width rm-pointers">
                                    <div class="d-none popover-custom-content">
                                        <div class="dropdown-mega-menu dropdown-mega-menu-sm">
                                            <div class="grid-menu grid-menu-2col">
                                                <div class="no-gutters row">
                                                    
                                                    <div class="col-sm-6 col-xl-6">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-header nav-item">Useful Links</li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-lock"> </i>
                                                                <span>Privacy</span></a>
                                                            </li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-copy-file"> </i>
                                                                <span>Terms</span></a>
                                                            </li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-display1"> </i>
                                                                <span>Advertising</span></a>
                                                            </li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-key"> </i>
                                                                <span>Cookies</span></a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                    
                                                    <div class="col-sm-6 col-xl-6">
                                                        <ul class="nav flex-column">
                                                            <li class="nav-item-header nav-item">Others</li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-network"> </i>
                                                                <span>About SmarTuls</span></a>
                                                            </li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-add-user"> </i>
                                                                <span>Contact Us</span></a>
                                                            </li>

                                                            <li class="nav-item"><a href="javascript:void(0);" class="nav-link">
                                                                <i class="nav-link-icon pe-7s-portfolio"> </i>
                                                                <span>Careers</span></a>
                                                            </li>

                                                        </ul>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

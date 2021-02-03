<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta http-equiv="Content-Language" content="en">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title>Medidoc | Doctor's Portal</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no, shrink-to-fit=no" />
    <meta name="description" content="Medicord is the first online health plaform in Nepal built by young entrepreneurs of Nepal.">
    <meta name="msapplication-tap-highlight" content="no"> 
    <link rel="icon" href="./assets/images/logo.png" type="image/gif" sizes="16x16">

    <link href="./main.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="./assets/icons/font/flaticon.css">
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://code.highcharts.com/highcharts-more.js"></script>
    <!-- <script src="https://code.highcharts.com/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/modules/export-data.js"></script>
    <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
    <link rel="stylesheet" type="text/css" href="./assets/css/jquery.dataTables.css">
    <link rel="stylesheet" type="text/css" href="./assets/css/select.dataTables.min.css">
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.22/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/select/1.3.1/js/dataTables.select.min.js"></script>

    
</head>


<body>
    <div class="app-container app-theme-white fixed-sidebar closed-sidebar">
        <div class="app-header header-shadow">
            <div class="app-header__logo pr-0 pl-0">
                <div class="logo-src" style="padding-left: 20px;">
                	<img src="http://localhost:8080/medidoc/assets/images/logo-inverse.png" style="max-width: 195px;height: 45px;margin-top: -13px">
                </div>
                <div class="header__pane ml-auto">
                    <div>
                        <button type="button" class="hamburger close-sidebar-btn hamburger--elastic" data-class="closed-sidebar">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <div class="app-header__mobile-menu">
                <div>
                    <button type="button" class="hamburger hamburger--elastic mobile-toggle-nav">
                        <span class="hamburger-box">
                            <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
            </div>
            <div class="app-header__menu">
                <span>
                    <button type="button" class="btn-icon btn-icon-only btn btn-primary btn-sm mobile-toggle-header-nav">
                        <span class="btn-icon-wrapper">
                            <i class="fa fa-ellipsis-v fa-w-6"></i>
                        </span>
                    </button>
                </span>
            </div>    
            <div class="app-header__content">
                <div class="app-header-left">
                    <div class="search-wrapper">
                        <div class="input-holder">
                            <input type="text" class="search-input" placeholder="Type to search">
                            <button class="search-icon"><span></span></button>
                        </div>
                        <button class="close"></button>
                    </div> 
                </div>
                <div class="app-header-right">
                    <div class="header-btn-lg pr-0">
                        <div class="widget-content p-0">
                            <div class="widget-content-wrapper">
                                <div class="widget-content-left">
                                    <div class="btn-group">
                                        <a data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="p-0 btn">
                                            <img width="42" class="rounded-circle" src="assets/images/avatars/1.jpg" alt="">
                                            <i class="fa fa-angle-down ml-2 opacity-8"></i>
                                        </a>
                                        <div tabindex="-1" role="menu" aria-hidden="true" class="dropdown-menu dropdown-menu-right">
                                            <button type="button" tabindex="0" class="dropdown-item">User Account</button>
                                            <button type="button" tabindex="0" class="dropdown-item">Settings</button>
                                            <div tabindex="-1" class="dropdown-divider"></div>
                                            <button type="button" tabindex="0" class="dropdown-item">Logout</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="widget-content-left  ml-3 header-user-info">
                                    <div class="widget-heading">
                                        Celeste Shrestha
                                    </div>
                                    <div class="widget-subheading">
                                        Clinical Doctor
                                    </div>
                                </div>
                                <div class="widget-content-right header-user-info ml-3">
                                    <button type="button" class="btn-shadow p-1 btn btn-primary btn-sm show-toastr-example">
                                        <i class="fa text-white fa-calendar pr-1 pl-1"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>        
                </div>
            </div>
        </div> 
        <div style="background: none;">
            <div class="app-header__logo pr-0 pl-0">
            </div>
        </div>   

        <div class="app-main">
            <div class="app-sidebar sidebar-shadow">
                <div class="scrollbar-sidebar">
                    <div class="app-sidebar__inner">
                        <div>
                            <img class="logo-non-hover" src="http://localhost:8080/medidoc/assets/images/logo.png" style="max-width: 40px;margin-top: -80px;">
                        </div>
                        <ul class="vertical-nav-menu mt--20">
                            <li class="app-sidebar__heading">Medidoc Menu</li>
                            <li>
                                <a href="index.php" class="mm-active">
                                    <i class="metismenu-icon flaticon-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li>
                                <a href="./analytics.php">
                                    <i class="metismenu-icon flaticon-nucleus"></i>
                                    Analytics
                                </a>
                            </li>
                            <li>
                                <a href="./patient.php">
                                    <i class="metismenu-icon flaticon-user"></i>
                                    Patients
                                </a>
                            </li>
                            <li>
                                <a href="./read.php">
                                    <i class="metismenu-icon flaticon-folder"></i>
                                    Articles
                                </a>
                            </li>
                            <li>
                                <a href="./diet.php">
                                    <i class="metismenu-icon flaticon-scale"></i>
                                    Diet
                                </a>
                            </li>
                            <li>
                                <a href="./schedule.php">
                                    <i class="metismenu-icon flaticon-schedule"></i>
                                    Appointments
                                </a>
                            </li>
                            
                            <!-- <li>
                                <a href="message.php">
                                    <i class="metismenu-icon flaticon-send"></i>
                                    Message
                                </a>
                            </li>


                            <li class="app-sidebar__heading">Finance</li>
                            <li>
                                <a href="#">
                                    <i class="metismenu-icon flaticon-money-bag">
                                    </i>Payment
                                </a>
                            </li>  -->
                            <li class="app-sidebar__heading">Settings</li>
                            <li>
                                <a href="./settings.php">
                                    <i class="metismenu-icon flaticon-gear">
                                    </i>
                                    Settings
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>     
            <div class="app-main__outer mt--60">
        

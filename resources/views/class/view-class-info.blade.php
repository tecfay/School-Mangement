<!DOCTYPE html>
<html lang="en" class="no-js">

<head>
    <title>Dar Al-hekma school | Dashboard </title>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="keywords" content="Bootstrap Theme, Freebies, Dashboard, MIT license">
    <meta name="description" content="Stream - Dashboard UI Kit">
    <meta name="author" content="htmlstream.com">

    <!-- Favicon -->
    <link rel="shortcut icon" href="1.png" type="image/x-icon">
    <!-- Web Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;700&display=swap" rel="stylesheet">
    <!-- Components Vendor Styles -->
    <link rel="stylesheet" href="assets/vendor/font-awesome/css/all.min.css">
    <link rel="stylesheet" href="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <link rel="stylesheet" href="assets/css/nice-select.css">
    <link rel="stylesheet" href="assets/css/jquery-ui.min.css">
    <!-- Theme Styles -->
    <link rel="stylesheet" href="assets/css/theme.css">
    <link rel="stylesheet" href="assets/css/style.css">

    <!-- Custom Charts -->
    <style>
        .js-doughnut-chart {
            width: 70px !important;
            height: 70px !important;
        }
    </style>
</head>
<!-- End Head -->

<body>
    <!-- Header (Topbar) -->
    <header class="u-header">
        <div class="u-header-left">
            <a class="u-header-logo" href="index.html">
                <img class="u-logo-desktop" src="assets/img/1.jpg" width="200" alt="Stream Dashboard">
            </a>
        </div>

        <div class="u-header-middle">
            <a class="js-sidebar-invoker u-sidebar-invoker text-danger" href="#!" data-is-close-all-except-this="true" data-target="#sidebar">
                <i class="fa fa-bars u-sidebar-invoker__icon--open"></i>
                <i class="fa fa-times u-sidebar-invoker__icon--close"></i>
            </a>

            <div class="u-header-search" data-search-mobile-invoker="#headerSearchMobileInvoker" data-search-target="#headerSearch">
                <a id="headerSearchMobileInvoker" class="btn btn-link input-group-prepend u-header-search__mobile-invoker" href="#!">
                    <i class="fa fa-search"></i>
                </a>

                <div id="headerSearch" class="u-header-search-form">
                    <form>
                        <div class="input-group">
                            <!-- <button class="btn-link input-group-prepend u-header-search__btn" type="submit">
                                <i class="fa fa-search"></i>
                            </button> -->
                            <input class="form-control u-header-search__field" type="search" placeholder="البحث">
                            <button type="submit" class="bg-gradient-blue text-white">بحث</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="u-header-right">
            <!-- Activities -->
            <div class="dropdown mr-4">
                <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-envelope"></i>
                    </span>
                    <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-success"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-3">
                            <h2 class="h4 card-header-title">Activities</h2>
                           <!-- <a class="ml-auto" href="#">Clear all</a> -->
                        </div>

                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <!-- 
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <img class="u-avatar--sm rounded-circle mr-3" src="assets/img/avatars/img1.png" alt="Image description">

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Chad Cannon</h4>
                                                <small class="text-muted ml-auto">23 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                We've just done the project.
                                            </p>
                                        </div>
                                    </div>
                                </a> 
                               

                               
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <img class="u-avatar--sm rounded-circle mr-3" src="assets/img/avatars/img2.jpg" alt="Image description">

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Jane Ortega</h4>
                                                <small class="text-muted ml-auto">18 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                <span class="text-primary">@Bruce</span> advertising your project is not good idea.
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <img class="u-avatar--sm rounded-circle mr-3" src="assets/img/avatars/user-unknown.jpg" alt="Image description">

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Stella Hoffman</h4>
                                                <small class="text-muted ml-auto">15 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                When the release date is expexted for the advacned settings?
                                            </p>
                                        </div>
                                    </div>
                                </a>
                             
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <img class="u-avatar--sm rounded-circle mr-3" src="assets/img/avatars/img4.jpg" alt="Image description">

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Htmlstream</h4>
                                                <small class="text-muted ml-auto">05 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                Adwords Keyword research for beginners
                                            </p>
                                        </div>
                                    </div>
                                </a>
                               End Activity -->
                            </div>
                        </div>

                        <div class="card-footer py-3">
                            <a class="btn btn-block btn-outline-primary" href="#">View all activities</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Activities -->

            <!-- Notifications -->
            <div class="dropdown mr-3">
                <a class="text-danger" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <span class="h3">
                        <i class="far fa-bell"></i>
                    </span>
                    <span class="u-indicator u-indicator-top-right u-indicator--xxs bg-danger"></span>
                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-4" aria-labelledby="dropdownMenuLink" style="width: 360px;">
                    <div class="card">
                        <div class="card-header d-flex align-items-center py-3">
                            <h2 class="h4 card-header-title">Notifications</h2>
                            <a class="ml-auto" href="#">Clear all</a>
                        </div>

                        <div class="card-body p-0">
                            <div class="list-group list-group-flush">
                                <!-- 
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <div class="u-icon u-icon--sm rounded-circle bg-danger text-white mr-3">
                                            <i class="fab fa-dribbble"></i>
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Dribbble</h4>
                                                <small class="text-muted ml-auto">23 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                <span class="text-primary">@htmlstream</span> just liked your post!
                                            </p>
                                        </div>
                                    </div>
                                </a>
                               

                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                            <i class="fab fa-twitter"></i>
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Twitter</h4>
                                                <small class="text-muted ml-auto">18 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                Someone mentioned you on the tweet.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                        
                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <div class="u-icon u-icon--sm rounded-circle bg-success text-white mr-3">
                                            <i class="fab fa-spotify"></i>
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Spotify</h4>
                                                <small class="text-muted ml-auto">18 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                You've just recived $25 free gift card.
                                            </p>
                                        </div>
                                    </div>
                                </a>

                                <a class="list-group-item list-group-item-action" href="#">
                                    <div class="media align-items-center">
                                        <div class="u-icon u-icon--sm rounded-circle bg-info text-white mr-3">
                                            <i class="fab fa-facebook-f"></i>
                                        </div>

                                        <div class="media-body">
                                            <div class="d-flex align-items-center">
                                                <h4 class="mb-1">Facebook</h4>
                                                <small class="text-muted ml-auto">18 Jan 2018</small>
                                            </div>

                                            <p class="text-truncate mb-0" style="max-width: 250px;">
                                                <span class="text-primary">@htmlstream</span> commented in your post.
                                            </p>
                                        </div>
                                    </div>
                                </a>
                                <!-- End Notification -->
                            </div>
                        </div>

                        <div class="card-footer py-3">
                            <a class="btn btn-block btn-outline-primary" href="#">View all notifications</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Notifications -->

            <!-- User Profile -->
            <div class="dropdown ml-2">
                <a class="link-muted d-flex align-items-center us-u-avatar-wrap" href="#!" role="button" id="dropdownMenuLink" aria-haspopup="true" aria-expanded="false" data-toggle="dropdown">
                    <img class="u-avatar--xs img-fluid rounded-circle mr-2 .bg-gradient-blue" src="assets/img/avatars/img1.png" alt="User Profile">
                    <span class="d-none d-sm-inline-block text-danger">
                        <small class="fas fa-ellipsis-v"></small>
                    </span>
                </a>

                <div class="dropdown-menu dropdown-menu-right border-0 py-0 mt-3" aria-labelledby="dropdownMenuLink" style="width: 260px;">
                    <div class="card">
                        <div class="card-header py-3">
                            <!-- Storage -->
                            <div class="d-flex align-items-center mb-3">
                                <span class="h6 text-muted text-uppercase mb-0">Storage</span>

                                <div class="ml-auto text-muted">
                                    <strong class="text-dark">60gb</strong> / 100gb
                                </div>
                            </div>

                            <div class="progress" style="height: 4px;">
                                <div class="progress-bar bg-primary" role="progressbar" style="width: 65%;" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <!-- End Storage -->
                        </div>

                        <div class="card-body">
                            <ul class="list-unstyled mb-0">
                                <li class="mb-4">
                                    <a class="d-flex align-items-center link-dark" href="#!">
                                        <span class="h3 mb-0"><i class="far fa-user-circle text-muted mr-3"></i></span> View Profile
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a class="d-flex align-items-center link-dark" href="#!">
                                        <span class="h3 mb-0"><i class="far fa-list-alt text-muted mr-3"></i></span> Settings
                                    </a>
                                </li>
                                <li class="mb-4">
                                    <a class="d-flex align-items-center link-dark" href="#!">
                                        <span class="h3 mb-0"><i class="far fa-laugh-wink text-muted mr-3"></i></span> Invite your friends
                                    </a>
                                </li>
                                <li>
                                    <a class="d-flex align-items-center link-dark" href="#!">
                                        <span class="h3 mb-0"><i class="far fa-share-square text-muted mr-3"></i></span> Sign Out
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End User Profile -->
        </div>
    </header>
    <!-- End Header (Topbar) -->

    <main class="u-main" role="main">
        <!-- Sidebar -->
        <aside id="sidebar" class="u-sidebar">
            <div class="u-sidebar-inner bg-gradient-blue bdrs-30">
                <header class="u-sidebar-header">
                    <a class="u-sidebar-logo" href="index.html">
                        <img class="img-fluid" src="assets/img/logo.png" width="124" alt="Stream Dashboard">
                    </a>
                </header>

                <nav class="u-sidebar-nav">
                    <ul class="u-sidebar-nav-menu u-sidebar-nav-menu--top-level">
                        <!-- Dashboard -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link active" href="index.html">
                                <i class="fas fa-tachometer-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">الصفحة الرئيسيّة</span>
                            </a>
                        </li>
                        <!-- End Dashboard -->


                        
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#subMenu1">
                                <i class="fas fa-calendar-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">برنامج الدوام</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="subMenu1" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-accounting-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">استعراض برنامج دوام شعبة دراسيّة</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-mathmetics-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">إنشاء برنامج دوام لشعبة</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="routines-accounting.html">
                                        <span class="u-sidebar-nav-menu__item-title">استعراض برنامج دوام لمدرّس</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </li>
                      <!--  Routines -->

                        <!-- 
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#homework">
                                <i class="fas fa-home u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">Homework</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="homework" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Homework Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework.html">
                                        <span class="u-sidebar-nav-menu__item-title">Homework</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="homework-add-new.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add New Homework</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Homework -->

                        <!-- Attendances-->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#attendances">
                                <i class="fas fa-user-check u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">طلبات الغياب</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="attendances" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="attendances-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">عرض طلبات الغياب</span>
                                    </a>
                                </li>
                             
                            </ul>
                        </li>
                        <!-- End Attendances -->
                        <!-- Questions -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#questions">
                                <i class="far fa-id-card u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">المدرسين</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="questions" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                               
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-bank.html">
                                        <span class="u-sidebar-nav-menu__item-title">استعراض جميع المدرسين</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">إضافة حساب  مدرّس</span>
                                    </a>
                                </li>
								 <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="questions-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">تعديل\حذف حساب مدرّس</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Questions -->

                        <!-- Online-Exam -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#online-exam">
                                <i class="fas fa-money-check-alt u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">الرسوم المالية للطلبة</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="online-exam" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">عرض معلومات الأقساط لطالب</span>
                                    </a>
                                </li>
                               
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="online-exam-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">إضافة قسط دراسي</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Online-Exams -->

                        <!-- Marks -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#marks">
                                <i class="far fa-clipboard u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">العلامات</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="marks" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="marks-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">Marks Blank</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="marks.html">
                                        <span class="u-sidebar-nav-menu__item-title">Marks</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="marks-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">Add Marks</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Marks -->

                        <!-- parents -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#students">
                                <i class="fas fa-user-plus u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">الأهالي</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="students" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                
								 <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="students-all.html">
                                        <span class="u-sidebar-nav-menu__item-title">استعراض كافة الأهالي</span>
                                    </a>
                                </li>
								<li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="students-all-blank.html">
                                        <span class="u-sidebar-nav-menu__item-title">تعديل\حذف حساب والد</span>
                                    </a>
                                </li>
                               
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="students-add.html">
                                        <span class="u-sidebar-nav-menu__item-title">إضافة حساب والد جديد</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End paremts -->

                        <!-- Profile -->
                        <li class="u-sidebar-nav-menu__item">
                            <a class="u-sidebar-nav-menu__link" href="#!" data-target="#profile">
                                <i class="fa fa-user u-sidebar-nav-menu__item-icon"></i>
                                <span class="u-sidebar-nav-menu__item-title">الحساب الشخصي</span>
                                <i class="fa fa-angle-right u-sidebar-nav-menu__item-arrow"></i>
                                <span class="u-sidebar-nav-menu__indicator"></span>
                            </a>

                            <ul id="profile" class="u-sidebar-nav-menu u-sidebar-nav-menu--second-level" style="display: none;">
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="my-profile.html">
                                        <span class="u-sidebar-nav-menu__item-title">حسابي الشخصي</span>
                                    </a>
                                </li>
                                <li class="u-sidebar-nav-menu__item">
                                    <a class="u-sidebar-nav-menu__link" href="edit-my-profile.html">
                                        <span class="u-sidebar-nav-menu__item-title">تعديل حسابي الشخصي</span>
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <!-- End Profile -->
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- End Sidebar -->

        <div class="u-content">
            <div class="u-body">
                

                
                <section class="es-form-area">
                    <div class="card">
                        <header class="card-header bg-gradient border-0 pt-5 pb-5 d-flex align-items-center">
                            <h2 class="text-white mb-0">استعراض معلومات شعبة دراسيّة</h2>
                        </header>
                        <div class="card-body">
                            <form action="" class="es-form es-add-form">
                                <div class="row">
                                   
                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="day">الصّف</label>
                                        <select id="day" class="es-add-select">
                                            <option value="1">السّابع</option>
                                            <option value="2">الثّامن</option>
                                            <option value="3">التّاسع</option>
                                          
                                        </select>
                                    </div>

                                    

                                    <div class="col-lg-8 offset-lg-2 col-md-12 mb-4">
                                        <label for="class">الشّعبة</label>
                                        <select id="class" class="es-add-select">
                                            <option value="1">الأولى</option>
                                            <option value="2">الثانية</option>
                                      
                                        </select>
                                    </div>

                                    <div class="col-lg-4 offset-lg-4 col-md-12 text-center">
                                        <a href="routines-mathmetics.html" class="btn btn-danger btn-block bg-gradient border-0 text-white">عرض</a>        
                                    </div>
                                </div>
                                
                            </form> 
                        </div>
                    </div>    
                </section>
   
                <section class="es-form-area" style="padding-top:50px;">
                    <div class="card">
                       
                        <div class="card-body">
                            <form action="" class="es-form es-add-form">
                                <div class="row">
                                   
                                    <div class="col-lg-8  col-md-12 mb-4">
  <div class="">
                                    <img src="assets/img/teacher.png" alt="">
                                </div>                                
								<h2>المدرسين</h2>
                                    </div>

                                    

                                    <div class="col-lg-8 col-md-12 mb-4">
                                        <div >
                                    <img src="assets/img/student.png" alt="">
                                </div>
									  <h2> الطلاب</h2>
                                    </div>

                                    <div class="col-lg-8 col-md-12 mb-4">
    <h2>المواد الدراسيّة</h2>                                
								   </div>
								   
                                    <div class="col-lg-8 col-md-12 mb-4">
    <h2>تعليقات المدرسين على الشعبة</h2>                                
								   </div>
                                </div>
                                
                            </form> 
                        </div>
                    </div>    
                </section>
            </div>
        </div>
    </main>

    <!-- Global Vendor -->
    <script src="assets/vendor/jquery/dist/jquery.min.js"></script>
    <script src="assets/vendor/jquery-migrate/jquery-migrate.min.js"></script>
    <script src="assets/vendor/popper.js/dist/umd/popper.min.js"></script>
    <script src="assets/vendor/bootstrap/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="assets/vendor/chart.js/dist/Chart.min.js"></script>
    <script src="assets/js/jquery.nice-select.min.js"></script>
    <script src="assets/js/jquery-ui.min.js"></script>

    <!-- Initialization  -->
    <script src="assets/js/sidebar-nav.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="assets/js/dashboard-page-scripts.js"></script>
    <!--<script src="assets/js/scripts.js"></script>-->
</body>
</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>Dashboard</title>

      <!-- Fontfaces CSS-->

      <link href={{asset("css/font-face.css")}}rel="stylesheet" media="all">
      <link href={{asset("/vendor/font-awesome-4.7/css/font-awesome.min.css")}} rel="stylesheet" media="all">
      <link href={{asset("/vendor/font-awesome-5/css/fontawesome-all.min.css")}} rel="stylesheet" media="all">
      <link href={{asset("/vendor/mdi-font/css/material-design-iconic-font.min.css")}} rel="stylesheet" media="all">
  
      <!-- Bootstrap CSS-->
      <link href={{asset("/vendor/bootstrap-4.1/bootstrap.min.css")}} rel="stylesheet" media="all">
  
      <!-- Vendor CSS-->
      <link href="{{asset('vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
      <link href={{asset("vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css")}} rel="stylesheet" media="all">
      <link href={{asset("vendor/wow/animate.css")}} rel="stylesheet" media="all">
      <link href={{asset("vendor/css-hamburgers/hamburgers.min.css")}} rel="stylesheet" media="all">
      <link href={{asset("vendor/slick/slick.css")}}  rel="stylesheet" media="all">
      <link href={{asset("vendor/select2/select2.min.css")}} rel="stylesheet" media="all">
      <link href={{asset("vendor/perfect-scrollbar/perfect-scrollbar.css")}} rel="stylesheet" media="all">
  
      <!-- Main CSS-->
      <link href={{asset("/css/theme.css")}} rel="stylesheet" media="all">
  
     
      <!-- Scripts -->
     <script src="{{ asset('js/app.js') }}" defer></script>
  
</head>

<body class="animsition">
    <div class="page-wrapper">
         <!-- MENU SIDEBAR-->
         <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="{{ route('admin.index') }}">
                    <img src="images/icon/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="{{ route('admin.index') }}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                               
                        </li>
                        <li>
                            <a href="{{ route('exam.index') }}">
                                <i class="fas fa-chart-bar"></i>Exam</a>
                        </li>
                        <li>
                            <a href="{{ route('user.index') }}">
                                <i class="fas fa-table"></i>users</a>
                        </li>
                        <li>
                            <a href="{{ route('question.index') }}">
                                <i class="far fa-check-square"></i>َQuestions</a>
                        </li>
                        
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->



        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                            
                            <div class="header-button">


                                
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#">john doe</a>
                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                        <img src="images/icon/avatar-01.jpg" alt="John Doe" />
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#">john doe</a>
                                                    </h5>
                                                    <span class="email">johndoe@example.com</span>
                                                </div>
                                            </div>
                                           
                                            <div class="account-dropdown__footer">
                                                <a href="#">
                                                    <i class="zmdi zmdi-power"></i>Logout</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </header>

            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
            <!-- HEADER DESKTOP-->
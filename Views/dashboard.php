<?php
    if (!isset($_SESSION["email"]))
    {
        header('Location: index.php?controller=user&action=dangnhap');
    }
    else if($_SESSION["role_id"]!=1)
    {
        header('Location: index.php');
    }
?>
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
    <link href="./css/font-face.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="./vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="./vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="./vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="./vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="./vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="./vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="./vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="./vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="./vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="./vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="./css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="index.html">
                            <img src="./img/logo.png" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="index.php?controller=user&action=dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                           
                        </li>
                        <li>
                            <a href="index.php?controller=user&action=list">
                            <i class="fas fa-users"></i>User</a>
                        </li>
                        <li>
                            <a href="index.php?controller=type&action=list">
                                <i class="fas fa-table"></i>Type Of Laptop</a>
                        </li>
                        <li>
                            <a href="index.php?controller=laptop&action=list">
                            <i class="fas fa-laptop"></i>Laptop</a>
                        </li>
                        <li>
                            <a href="index.php?controller=payment&action=list"">
                            <i class="fas fa-shopping-cart"></i>Payment</a>
                        </li>
                        
                        
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a href="index.php">
                    <img width="100px" src="./img/logo.png" alt="Cool Admin" />
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li class="active has-sub">
                            <a class="js-arrow" href="index.php?controller=user&action=dashboard">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            
                        </li>
                        <li>
                            <a href="index.php?controller=user&action=list">
                            <i class="fas fa-users"></i>User</a>
                        </li>
                        <li>
                            <a href="index.php?controller=type&action=list">
                                <i class="fas fa-table"></i>Type Of Laptop</a>
                        </li>
                        <li>
                            <a href="index.php?controller=laptop&action=list">
                            <i class="fas fa-laptop"></i>Laptop</a>
                        </li>
                        <li>
                            <a href="index.php?controller=payment&action=list"">
                            <i class="fas fa-shopping-cart"></i>Payment</a>
                        </li>
                      
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="header-wrap">
                             <form class="form-header" action="" method="POST">
                                <input class="au-input au-input--xl" type="text" name="search"  hidden="true" placeholder="Search for datas &amp; reports..." />
                               
                            </form>
                            <div class="header-button">
                                <div class="noti-wrap">
                                    
                                </div>
                                <div class="account-wrap">
                                    <div class="account-item clearfix js-item-menu">
                                        <div class="image">
                                            
                                            <?php echo '<img  src="./uploads/'.$_SESSION['image'].'" alt="haha">';?>
                                        </div>
                                        <div class="content">
                                            <a class="js-acc-btn" href="#"><?php echo $_SESSION['name'];?>  </a>

                                        </div>
                                        <div class="account-dropdown js-dropdown">
                                            <div class="info clearfix">
                                                <div class="image">
                                                    <a href="#">
                                                    <?php echo '<img  src="./uploads/'.$_SESSION['image'].'" alt="haha">';?>
                                                    </a>
                                                </div>
                                                <div class="content">
                                                    <h5 class="name">
                                                        <a href="#"><?php echo $_SESSION['name'];?> </a>
                                                    </h5>
                                                    <span class="email"><?php echo $_SESSION['email'];?> </span>
                                                </div>
                                            </div>
                                            
                                               
                                            <div class="account-dropdown__footer">
                                                <a href="index.php?controller=user&action=dangnhap">
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
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="overview-wrap">
                                    <h2 class="title-1">overview</h2>
                                    
                                </div>
                            </div>
                        </div>
                        <div class="row m-t-25">
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c1">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-account-o"></i>
                                            </div>
                                            <div class="text">
                                                <h2 ><?=$listUser[0]['soluong']?></h2>
                                                <span>User</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart1"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c2">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-shopping-cart"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?=$listLaptop[0]['soluong']?></h2>
                                                <span>Products Laptop</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart2"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c3">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-calendar-note"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $donhangcho[0]['soluong'] ;?></h2>
                                                <span>Pending Order</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart3"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-sm-6 col-lg-3">
                                <div class="overview-item overview-item--c4">
                                    <div class="overview__inner">
                                        <div class="overview-box clearfix">
                                            <div class="icon">
                                                <i class="zmdi zmdi-money"></i>
                                            </div>
                                            <div class="text">
                                                <h2><?php echo $Money[0]['money'] ;?></h2>
                                                <span>Revenue</span>
                                            </div>
                                        </div>
                                        <div class="overview-chart">
                                            <canvas id="widgetChart4"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Report Product</h3>
                                        <div class="chart-info">
                                            <div class="chart-info__left">
                                                <div class="chart-note">
                                                    <span class="dot dot--red"></span>
                                                    <span>Product Hot</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--blue"></span>
                                                    <span>Product New</span>
                                                </div>
                                                <div class="chart-note mr-0">
                                                    <span class="dot dot--green"></span>
                                                    <span>Product Old</span>
                                                </div>
                                            </div>
                                           
                                        </div>
                                        <div class="recent-report__chart">
                                            <canvas id="linechart" style="height:230px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Report Payment</h3>
                                        
                                        <div class="recent-report__chart">
                                            <canvas id="linechart1" style="height:280px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="col-lg-6">
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Report User Register</h3>
                                       
                                        <div class="recent-report__chart">

                                            <canvas id="linechart3" style="height:280px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                
                                <div class="au-card recent-report">
                                    <div class="au-card-inner">
                                        <h3 class="title-2">Report Create Product</h3>
                                        
                                        <div class="recent-report__chart">
                                            <canvas id="linechart4" style="height:280px;"></canvas>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                            
                        
                        <div class="row">
                            <div class="col-md-12">
                                <div class="copyright">
                                    <p>Copyright � 2018 Colorlib. All rights reserved. Template by <a href="https://colorlib.com">Colorlib</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
 <!-- Jquery JS-->
    <script src="./vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="./vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="./vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="./vendor/slick/slick.min.js">
    </script>
    <script src="./vendor/wow/wow.min.js"></script>
    <script src="./vendor/animsition/animsition.min.js"></script>
    <script src="./vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="./vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="./vendor/circle-progress/circle-progress.min.js"></script>
    <script src="./vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="./vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="./vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="./js/main.js"></script>
    <script>
        var bienx=['Hot','New','Old'];
        var bieny=[<?=$reportProduct[0]['index1']?>,<?=$reportProduct[0]['index2']?>,<?=$reportProduct[0]['index3']?>,0];
       
        var CHART = document.getElementById('linechart').getContext('2d');
        var line_chart = new Chart(CHART,{
            type :'bar',
            data:{
            
                labels : bienx,
                datasets:[{
                    label:'name_data',
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data: bieny,
                    backgroundColor: ["red", "blue", "green"], 
                }]
            }
        });

        var bienx1=['Not Payment','Payment Success','Payment failed'];
        var bieny1=[<?=$reportPayment[0]['index1']?>,<?=$reportPayment[0]['index2']?>,<?=$reportPayment[0]['index3']?>,0];
       
        var CHART = document.getElementById('linechart1').getContext('2d');
        var line_chart = new Chart(CHART,{
            type :'pie',
            data:{
            
                labels : bienx1,
                datasets:[{
                    label:'name_data',
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data: bieny1,
                    backgroundColor: ["red", "green", "blue"], 
                }]
            }
        });
       var bienx2=['Month 8','Month 9','Month 10','Month 11'];
        var bieny2=[<?=$reportUser[0]['index4']?>,<?=$reportUser[0]['index3']?>,<?=$reportUser[0]['index2']?>,<?=$reportUser[0]['index1']?>,0];
       
        var CHART = document.getElementById('linechart3').getContext('2d');
        var line_chart = new Chart(CHART,{
            type :'polarArea',
            data:{
            
                labels : bienx2,
                datasets:[{
                    label:'name_data',
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data: bieny2,
                    backgroundColor: ["red", "green", "blue","yellow"], 
                }]
            }
        });

        var bienx3=['Month 7','Month 8','Month 9','Month 10','Month 11'];
        var bieny3=[<?=$reportCreateProduct[0]['index5']?>,<?=$reportCreateProduct[0]['index4']?>,
                    <?=$reportCreateProduct[0]['index3']?>,<?=$reportCreateProduct[0]['index2']?>,<?=$reportCreateProduct[0]['index1']?>,0];
       
        var CHART = document.getElementById('linechart4').getContext('2d');
        var line_chart = new Chart(CHART,{
            type :'doughnut',
            data:{
            
                labels : bienx3,
                datasets:[{
                    label:'name_data',
                    barPercentage: 0.5,
                    barThickness: 6,
                    maxBarThickness: 8,
                    minBarLength: 2,
                    data: bieny3,
                    backgroundColor: ["red", "green", "blue","pink",'yellow'], 
                }]
            }
        });
    </script>
</body>

</html>
<!-- end document-->

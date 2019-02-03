

<?php include 'server.php';?>

 


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Fontastic Custom icon font-->
    <link rel="stylesheet" href="css/fontastic.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="css/grasp_mobile_progress_circle-1.0.0.min.css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="img/favicon.ico">
  </head>
  <body>
    <!-- Side Navbar -->
    <nav class="side-navbar">
      <div class="side-navbar-wrapper">
        <!-- Sidebar Header    -->
           <div class="sidenav-header d-flex align-items-center justify-content-center">
          <!-- User Info-->
          <div class="sidenav-header-inner text-center"><img src="img/use_logo.png" alt="person" height="40" width="40"class="img-fluid rounded-circle">
            <h2 class="h5"><?php echo $_SESSION['username']; ?></strong></h2><span>Admin</span>
          

      

          </div>
          <!-- Small Brand information, appears on minimized sidebar-->
          <div class="sidenav-header-logo"><a href="main.php" class="brand-small text-center"> <strong>F</strong><strong class="text-primary">D</strong></a></div>
        </div>
        <!-- Sidebar Navigation Menus-->
        <div class="main-menu">
          <h5 class="sidenav-heading">Main</h5>
          <ul id="side-main-menu" class="side-menu list-unstyled">                  
            <li><a href="main.php"> <i class="icon-home"></i>Home                             </a></li>
            <li><a href="order.php"> <i class="fa fa-bar-chart"></i>Orders                             </a></li>
           
            <li><a href="#exampledropdownDropdown" aria-expanded="false" data-toggle="collapse"><i class="icon-grid"></i>Tables</a>
              <ul id="exampledropdownDropdown" class="collapse list-unstyled ">
                <li><a href="order-table.php">orders</a></li>
                <li><a href="employ-info-table.php">Employ</a></li>
                <li><a href="#">Page</a></li>
              </ul>
            </li>
            <li><a href="register.php"> <i class="icon-interface-windows"></i>Register                              </a></li>
          </ul>
        </div>
      </div>
    </nav>
      


    <div class="page">
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <div class="navbar-header"><a id="toggle-btn" href="#" class="menu-btn"><i class="icon-bars"> </i></a><a href="main.php" class="navbar-brand">
                  <div class="brand-text d-none d-md-inline-block"><span>Friends</span><strong class="text-primary">Dashboard</strong></div></a></div>         
             <!-- Log out-->
                <li class="nav-item"><a href="logout.php" class="nav-link logout"> <span class="d-none d-sm-inline-block">Logout</span><i class="fa fa-sign-out"></i></a></li>
              </ul>
            </div>
          </div>
        </nav>
      </header>
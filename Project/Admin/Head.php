<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="../Assets/Templates/Dashboard/css/styles.min.css" />
  <link rel="stylesheet" href="../Assets/Templates/Form.css">
  
  
</head>

<body>

  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- Sidebar Start -->
    <aside class="left-sidebar">
      <!-- Sidebar scroll-->
      <div>
        <div class="brand-logo d-flex align-items-center justify-content-between">
            <img src="../Assets/Templates/Dashboard/images/logos/nll3.png" width="180" alt="" />
          <div class="close-btn d-xl-none d-block sidebartoggler cursor-pointer" id="sidebarCollapse">
            <i class="ti ti-x fs-8"></i>
          </div>
        </div>
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav scroll-sidebar" data-simplebar="">
          <ul id="sidebarnav">
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Home</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="AdminHomepage.php" aria-expanded="false">
                <span>
                  <i class="ti ti-layout-dashboard"></i>
                </span>
                <span class="hide-menu">Dashboard</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Location</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="District.php" aria-expanded="false">
                <span>
                  <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">District</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="place.php" aria-expanded="false">
                <span>
                  <i class="ti ti-map"></i>
                </span>
                <span class="hide-menu">Place</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">plants</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="type.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file"></i>
                </span>
                <span class="hide-menu">Plants Type</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ViewUserBookings.php" aria-expanded="false">
                <span>
                  <i class="ti ti-table"></i>
                </span>
                <span class="hide-menu">View Booking</span>
              </a>
            </li>
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Register</span>
            </li>
           
            <li class="sidebar-item">
              <a class="sidebar-link" href="adminregistration.php" aria-expanded="false">
                <span>
                  <i class="ti ti-user"></i>
                </span>
                <span class="hide-menu">Admin Registration</span>
              </a>
            </li>
           
            <li class="nav-small-cap">
              <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
              <span class="hide-menu">Complaint</span>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ComplaintType.php" aria-expanded="false">
                <span>
                  <i class="ti ti-file"></i>
                </span>
                <span class="hide-menu">Complaint Type</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ViewComplaints.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">View Complaints</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="ViewFeedbacks.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">View Feedback</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="reply.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Reply</span>
              </a>
            </li>
            <li class="sidebar-item">
              <a class="sidebar-link" href="../Guest/Login.php" aria-expanded="false">
                <span>
                  <i class="ti ti-cards"></i>
                </span>
                <span class="hide-menu">Logout</span>
              </a>
            </li>
          </ul>
         
        </nav>
        <!-- End Sidebar navigation -->
      </div>
      <!-- End Sidebar scroll-->
    </aside>
    <!--  Sidebar End -->
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
      <header class="app-header">
        <nav class="navbar navbar-expand-lg navbar-light">
          <ul class="navbar-nav">
            <li class="nav-item d-block d-xl-none">
              <a class="nav-link sidebartoggler nav-icon-hover" id="headerCollapse" href="javascript:void(0)">
                <i class="ti ti-menu-2"></i>
              </a>
            </li>
           
          </ul>
          <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
            <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                         <li class="nav-item dropdown">
                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown"
                  aria-expanded="false">
                  <img src="../Assets/Templates/Dashboard/images/profile/unni.jpg" alt="" width="35" height="35" class="rounded-circle">
                </a>
                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                  <div class="message-body">
                    
                  
                   
                    <a href="../Guest/Login.php" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                  </div>
                </div>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!--  Header End -->
      <div class="container-fluid">
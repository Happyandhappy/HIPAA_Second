<?php 
  require_once('ApiClient/Client.php');
  if (!isset($_SESSION['api'])){
    header("Location: login.php");
    exit();
  }
?>
<!DOCTYPE html>
<html lang="en">
  <!-- begin::Head -->
  <head>
    <meta charset="utf-8" />
    <title>HIPAA Portal</title>
    <meta name="description" content="Latest updates and statistic charts">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no">

    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
      WebFont.load({
        google: {
          "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
        },
        active: function() {
          sessionStorage.fonts = true;
        }
      });
    </script>
    <!--end::Web font -->
    <link href="assets/css/datatables.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/custom.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" type="image/png" href="https://hipaadev.us/favicon.ico"/>
  </head>
  <!-- end::Head -->

  <!-- begin::Body -->
  <body class="m-page--fluid m--skin- m-content--skin-light2 m-header--fixed m-header--fixed-mobile m-aside-left--enabled m-aside-left--skin-dark m-aside-left--fixed m-aside-left--offcanvas m-footer--push m-aside--offcanvas-default">
    <div class="animationload" id="spiner">
        <div class="osahanloading"></div>
    </div>
    <!-- begin:: Page -->
    <div class="m-grid m-grid--hor m-grid--root m-page">

      <!-- BEGIN: Header -->
      <header id="m_header" class="m-grid__item m-header" m-minimize-offset="200" m-minimize-mobile-offset="200">
        <div class="m-container m-container--fluid m-container--full-height">
          <div class="m-stack m-stack--ver m-stack--desktop">

            <!-- BEGIN: Brand -->
            <div class="m-stack__item m-brand  m-brand--skin-dark ">
              <div class="m-stack m-stack--ver m-stack--general">
                <div class="m-stack__item m-stack__item--middle m-brand__logo">
                  <h3>
                    <a href="index.php" style="text-decoration:none; color: lightgray;">HIPAA</a>
                  <h3/>
                </div>
                <div class="m-stack__item m-stack__item--middle m-brand__tools">
                  <!-- BEGIN: Left Aside Minimize Toggle -->
                  <a href="javascript:;" id="m_aside_left_minimize_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-desktop-inline-block  ">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Aside Left Menu Toggler -->
                  <a href="javascript:;" id="m_aside_left_offcanvas_toggle" class="m-brand__icon m-brand__toggler m-brand__toggler--left m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Responsive Header Menu Toggler -->
                  <a id="m_aside_header_menu_mobile_toggle" href="javascript:;" class="m-brand__icon m-brand__toggler m--visible-tablet-and-mobile-inline-block">
                    <span></span>
                  </a>

                  <!-- END -->

                  <!-- BEGIN: Topbar Toggler -->
                  <a id="m_aside_header_topbar_mobile_toggle" href="javascript:;" class="m-brand__icon m--visible-tablet-and-mobile-inline-block">
                    <i class="flaticon-more"></i>
                  </a>

                  <!-- BEGIN: Topbar Toggler -->
                </div>
              </div>
            </div>

            <!-- END: Brand -->
            <div class="m-stack__item m-stack__item--fluid m-header-head" id="m_header_nav">

              <!-- BEGIN: Horizontal Menu -->
              <button class="m-aside-header-menu-mobile-close  m-aside-header-menu-mobile-close--skin-dark " id="m_aside_header_menu_mobile_close_btn">
                <i class="la la-close"></i>
              </button>
              <div id="m_header_menu" class="m-header-menu m-aside-header-menu-mobile m-aside-header-menu-mobile--offcanvas  m-header-menu--skin-light m-header-menu--submenu-skin-light m-aside-header-menu-mobile--skin-dark m-aside-header-menu-mobile--submenu-skin-dark ">
              </div>

              <!-- END: Horizontal Menu -->

              <!-- BEGIN: Topbar -->
              <div id="m_header_topbar" class="m-topbar  m-stack m-stack--ver m-stack--general m-stack--fluid">
                <h3><?php echo strtoupper($_SESSION['HOST']); ?></h3>
              </div>

              <!-- END: Topbar -->
            </div>
          </div>
        </div>
      </header>
      <!-- END: Header -->

      <!-- begin::Body -->
      <div class="m-grid__item m-grid__item--fluid m-grid m-grid--ver-desktop m-grid--desktop m-body">
        <!-- BEGIN: Left Aside -->
        <button class="m-aside-left-close  m-aside-left-close--skin-dark " id="m_aside_left_close_btn">
          <i class="la la-close"></i>
        </button>
        <div id="m_aside_left" class="m-grid__item  m-aside-left  m-aside-left--skin-dark ">
          <!-- BEGIN: Aside Menu -->
          <div id="m_ver_menu" class="m-aside-menu  m-aside-menu--skin-dark m-aside-menu--submenu-skin-dark " m-menu-vertical="1" m-menu-scrollable="1" m-menu-dropdown-timeout="500" style="position: relative;">
            <ul class="m-menu__nav  m-menu__nav--dropdown-submenu-arrow">
              <li class="m-menu__item  m-menu__item<?php if (getSidebarName() == 'dashboard') echo '--active m-menu__item--expanded'?>" aria-haspopup="true">
                <a href="dashboard.php" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-line-graph"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Dashboard</span>
                    </span>
                  </span>
                </a>
              </li>

              <li class="m-menu__item  m-menu__item<?php if (getSidebarName() == 'device-registry') echo '--active m-menu__item--expanded'?>" aria-haspopup="true">
                <a href="itemspage_controller.php?type=device-registry" class="m-menu__link">
                  <i class="m-menu__link-icon flaticon-share"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Device Registry</span>
                    </span>
                  </span>
                </a>
              </li>
              
              <li class="m-menu__item  m-menu__item<?php if (getSidebarName() == 'contact') echo '--active m-menu__item--expanded'?>" aria-haspopup="true">
                <a href="dashboard.php" class="m-menu__link">
                  <i class="m-menu__link-icon fa fa-users"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">HIPAA Contacts</span>
                    </span>
                  </span>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
              </li>
              <li class="m-menu__item  m-menu__item<?php if (getSidebarName() == 'facility') echo '--active m-menu__item--expanded'?>" aria-haspopup="true">
                <a href="dashboard.php" class="m-menu__link">
                  <i class="m-menu__link-icon fa fa-building"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Facility</span>
                    </span>
                  </span>
                  <i class="m-menu__ver-arrow la la-angle-right"></i>
                </a>
              </li>

              <li class="m-menu__section ">
                <h4 class="m-menu__section-text">Extra</h4>
                <i class="m-menu__section-icon flaticon-more-v3"></i>
              </li>
              <li class="m-menu__item  m-menu__item" aria-haspopup="true">
                <a href="logout.php" class="m-menu__link">
                  <i class="m-menu__link-icon fa fa-sign-out-alt"></i>
                  <span class="m-menu__link-title">
                    <span class="m-menu__link-wrap">
                      <span class="m-menu__link-text">Log out</span>
                    </span>
                  </span>
                </a>
              </li>
            </ul>
          </div>
          <!-- END: Aside Menu -->
        </div>
        <!-- END: Left Aside -->
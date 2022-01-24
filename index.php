<?php
    session_start();
  if(!isset($_SESSION['isLoginOK'])){
      header("location:./login.php");
  }
  $manv=$_SESSION['isLoginOK'];
  require_once "./Config/Connect.php";
  $sql="SELECT * from nhanvien where MaNV='$manv'";
  $result = mysqli_query($conn,$sql);
  $row=mysqli_fetch_assoc($result);
  // echo $row['HoTen'];
?>
<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Best FREE time tracking tool for agencies and freelancers.">
  <meta name="author" content="COING">
  <title ng-bind-template="{{titleService.getTitle()}}">TEAM 10 DEMO</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link id="favicon-shortcut" rel="shortcut icon" href="assets/favicons/faviconIdle2.ico">
  <link id="favicon" rel="icon" type="image/x-icon" href="assets/favicons/faviconIdle2.ico">
  <link rel="stylesheet" href="https://clockify.me/styles.d7310a4a3471f8ecb954.css">

  <style>
    body.dark {
      background: #263238;
    }

    body.dark .rotating-loader-logo-wrapper-bg {
      background: #263238 !important;
    }

    body.dark .rotating-loader-logo-wrapper-bg-inapp {
      background: transparent !important;
    }

    .rotating-loader-logo-wrapper {
      display: flex;
      position: fixed;
      top: 0;
      left: 0;
      z-index: 1070;
      width: 100%;
      height: 100vh;
      align-items: center;
      justify-content: center
    }

    .rotating-loader-logo-wrapper-bg {
      width: 100%;
      height: 100vh;
      position: fixed;
      z-index: 1060;
      top: 0;
      -webkit-animation: fade-in ease .3s forwards;
      animation: fade-in ease .3s forwards
    }

    .rotating-loader-logo-container {
      display: flex;
      align-items: center;
      padding: 20px;
      border-radius: 100px;
      box-shadow: 0 0 20px rgba(0, 0, 0, .1);
      background: #fff;
      opacity: 0;
      -webkit-animation: fade-in-down cubic-bezier(0, 1, .47, 1.01) .9s forwards;
      animation: fade-in-down cubic-bezier(0, 1, .47, 1.01) .9s forwards
    }

    .rotating-loader-logo {
      position: relative;
      width: 64px;
      height: 64px;
      opacity: 0;
      -webkit-animation: fade-in-right cubic-bezier(0, 1, .47, 1.01) .8s forwards;
      animation: fade-in-right cubic-bezier(0, 1, .47, 1.01) .8s forwards;
      -webkit-animation-delay: .15s;
      animation-delay: .15s
    }

    .rotating-loader-hands {
      position: absolute;
      -webkit-animation: rotating-logo 2.5s linear infinite;
      animation: rotating-logo 2.5s linear infinite;
      width: 64px;
      height: 64px
    }

    .rotating-loader-hands svg {
      -webkit-transform: rotate(-2deg);
      transform: rotate(-2deg)
    }

    .rotating-loader-hands:not(:first-child) {
      -webkit-animation: rotating-logo 30s linear infinite;
      animation: rotating-logo 30s linear infinite
    }

    .logo-hands-color {
      fill: #222
    }

    .rotating-loader-bg {
      position: absolute;
      width: 64px;
      height: 64px
    }

    .rotating-loader-text {
      padding: 0 20px;
      font-family: Roboto, Arial;
      line-height: 1.3;
      opacity: 0;
      -webkit-animation: fade-in ease-out .5s forwards;
      animation: fade-in ease-out .5s forwards
    }

    .rotating-loader-text-title {
      color: #333;
      font-size: 18px;
      font-weight: 400
    }

    .rotating-loader-text-subtitle {
      color: #999;
      font-size: 12px
    }

    .dark .rotating-loader-logo-wrapper:before {
      background: #12191d
    }

    .dark .logo-hands-color {
      fill: #fff
    }

    .dark .rotating-loader-text-title {
      color: #c6d2d9
    }

    .dark .rotating-loader-text-subtitle {
      color: #90a4ae
    }

    .dark .rotating-loader-logo-container {
      background: #1d272c
    }

    @-webkit-keyframes rotating-logo {
      from {
        -webkit-transform: rotate(0);
        transform: rotate(0)
      }

      to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
      }
    }

    @keyframes rotating-logo {
      from {
        -webkit-transform: rotate(0);
        transform: rotate(0)
      }

      to {
        -webkit-transform: rotate(360deg);
        transform: rotate(360deg)
      }
    }

    @-webkit-keyframes fade-in-down {
      from {
        opacity: 0;
        -webkit-transform: translateY(-32px);
        transform: translateY(-32px)
      }

      to {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
      }
    }

    @keyframes fade-in-down {
      from {
        opacity: 0;
        -webkit-transform: translateY(-32px);
        transform: translateY(-32px)
      }

      to {
        opacity: 1;
        -webkit-transform: translateY(0);
        transform: translateY(0)
      }
    }

    @-webkit-keyframes fade-in-right {
      from {
        opacity: 0;
        -webkit-transform: translateX(-16px);
        transform: translateX(-16px)
      }

      to {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
      }
    }

    @keyframes fade-in-right {
      from {
        opacity: 0;
        -webkit-transform: translateX(-16px);
        transform: translateX(-16px)
      }

      to {
        opacity: 1;
        -webkit-transform: translateX(0);
        transform: translateX(0)
      }
    }

    @-webkit-keyframes fade-in {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }

    @keyframes fade-in {
      from {
        opacity: 0
      }

      to {
        opacity: 1
      }
    }
  </style>
  <link rel="stylesheet" href="styles.d7310a4a3471f8ecb954.css">
  <script type="text/javascript" async=""
    src="https://www.googletagmanager.com/gtag/js?id=G-M4LX3NPKDG&amp;l=dataLayer&amp;cx=c"></script>
  <script async="" src="https://www.googletagmanager.com/gtm.js?id=GTM-KN9WZVL"></script>
  <script async="" src="https://www.google-analytics.com/analytics.js"></script>
  <script>(function (i, s, o, g, r, a, m) {
      i['GoogleAnalyticsObject'] = r; i[r] = i[r] || function () {
        (i[r].q = i[r].q || []).push(arguments)
      }, i[r].l = 1 * new Date(); a = s.createElement(o),
        m = s.getElementsByTagName(o)[0]; a.async = 1; a.src = g; m.parentNode.insertBefore(a, m)
    })(window, document, 'script', 'https://www.google-analytics.com/analytics.js', 'ga');

    ga('create', 'UA-33367547-15', 'auto');
  </script>
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push(
        { 'gtm.start': new Date().getTime(), event: 'gtm.js' }
      ); var f = d.getElementsByTagName(s)[0], j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true; j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KN9WZVL');</script>
  <script src="https://bridget.pumble.com/pumble-bridget.js" async=""></script>
  <script charset="utf-8" src="2-es2015.f6e58f69ec9168b14f4e.js"></script>
  <script charset="utf-8" src="7-es2015.01549cb2680a0a68ed40.js"></script>
  <style>
    .cl-page-only[_ngcontent-jpc-c181] {
      display: inline-block;
      min-width: 20px;
      box-sizing: border-box;
      text-align: center
    }
  </style>
</head>

<body><noscript><iframe src="[https://www.googletagmanager.com/ns.html?id=GTM-KN9WZVL]" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
    <router-outlet></router-outlet>
    <default-layout class="ng-star-inserted">
      <div class="cl-main-wrapper">
        <sidebar-and-topbar>
          <div id="topbar-menu" style="background: #879db1;"
            class="cl-navbar cl-pl-0 cl-pr-lg-3 cl-d-flex cl-align-items-center cl-border-bottom cl-top-bar cl-new-layer cl-d-print-none">
            <div class="cl-d-flex cl-justify-content-between cl-align-items-center cl-w-100">
              <div class="cl-d-flex cl-align-items-center top-bar-nav-align"><button type="button"
                  class="cl-navbar-toggler"><span class="cl-navbar-toggler-icon"></span></button>
                <h1 class="cl-logo-mob fw-bold">TEAM 10 DEMO</h1>
                
                <!---->
                <!---->
                <!---->
              </div>
              <div class="cl-d-flex cl-align-items-center cl-justify-content-end cl-cut-text-wrapper">
                <div class="cl-d-none cl-d-lg-inline-flex cl-cut-text-wrapper">
                  <div dropdownkey=""
                    class="cl-dropdown cl-dropdown-top-bar-ws cl-d-flex cl-justify-content-end cl-cut-text-wrapper ng-star-inserted">
                    <div dropdownkeybutton="" triggers="manual" placement="bottom" tabindex="0"
                      data-cy="workspace-dropdown" class="cl-dropdown-toggle pointer cl-cut-text fs-4 fw-bold" style="color:#fff;"> <?php echo $row['HoTen']?>'s
                      workspace </div>
                    <a href="./process-logout.php" class="btn btn-primary">Log out</a>
                    <!---->
                    <!---->
                  </div>
                  <!---->
                </div>
               
                
              </div>
            </div>
          </div>
          <aside id="sidebar-menu" class="cl-layout-aside" style="font-size: 20px;position: absolute; bottom: auto; top: 50px;
          box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);">
            <nav class="cl-navbar cl-navbar-expand-lg cl-navbar-light">
              <div class="cl-navbar-collapse cl-offcanvas-collapse cl-open">
                <div class="cl-sidebar-wrapper">
                  <div class="cl-sidebar-container">
                    <div class="cl-navbar-container">
                      <ul class="cl-navbar-nav">
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/timesheet" class="cl-nav-link cl-blue" href="/Demo_HQTCSDL/" style="padding-left: 15px;">
                              <span class="cl-nav-link-copy">Trang chủ</span></a>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/tracker" class="cl-nav-link cl-orange" href="/tracker" style="padding-left: 15px;"><span
                                class="ng-star-inserted">Chấm công</span>
                              <!---->
                              <!---->
                            </span></a>
                            <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                              <div>
                                <!---->
                                <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                  class="cl-dropdown-item" href="/Demo_HQTCSDL/Interface/CheckIn.php"> CheckIn </a><a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="/Demo_HQTCSDL/Interface/CheckOut.php"> CheckOut </a>
                                <!---->
                              </div>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown"><a routerlink="/calendar"
                            class="cl-nav-link cl-indigo" href="/calendar" style="padding-left: 15px;"><span class="cl-nav-link-copy">Báo cáo</span></a>
                              <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                                <div>
                                  <!---->
                                  <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                    class="cl-dropdown-item" href="#"> Tạo báo cáo </a><a
                                    routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                    href="#"> Xem báo cáo </a>
                                  <!---->
                                </div>
                          <!---->
                        </li>
                        <!---->
                        <!---->
                        <li>
                          <hr class="cl-m-0 cl-d-none">
                        </li>
                        <li class="cl-pl-3"><span class="cl-nav-link cl-ml-1"><span
                              class="cl-h5 cl-mb-0 fs-3">Analyze</span></span></li>
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown"><a routerlink="/dashboard"
                            class="cl-nav-link cl-light-green" href="./Interface/QuanLy/XemLichSuChamCong.php" style="padding-left: 15px;"><span class="cl-nav-link-copy">Lịch sử chấm
                              công</span></a>
                              
                          <!---->
                        </li>
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted">
                          </span><a routerlink="/reports/summary"
                            class="cl-nav-link cl-dropdown-toggle cl-pink cl-d-none cl-d-lg-flex"
                            href="/reports/summary" style="padding-left: 15px;"><span class="cl-nav-link-copy">Bảng lương</span></a>
                          <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                            <div>
                              <!---->
                              <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                class="cl-dropdown-item" href="./Interface/NhanVien/XemBangLuong.php"> Xem bảng lương </a><a
                                routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                href="/Demo_HQTCSDL/Interface/KeToan/CapNhatLuong.php"> Cập nhật lương </a>
                              <!---->
                            </div>
                          </div>
                        </li>
                        <!---->
                        <!---->
                        <li class="ng-star-inserted">
                          <hr class="cl-m-0 cl-d-none">
                        </li>
                        <li class="cl-pl-3 ng-star-inserted"><span class="cl-nav-link cl-ml-1"><span
                              class="cl-h5 cl-mb-0 fs-3"> Manage </span></span></li>
                        <!---->
                        <!---->
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/projects" class="cl-nav-link cl-yellow" href="/projects" style="padding-left: 15px;"><span class="cl-nav-link-copy"> Công việc </span></a>
                              <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                                <div>
                                  <!---->
                                  <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                    class="cl-dropdown-item" href="./Interface/BangCongViec.php"> Xem bảng công việc </a><a
                                    routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                    href="./Interface/QuanLy/CapNhatCongViec.php"> Cập nhật công việc </a>
                                  <!---->
                                </div>
                              </div>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/teams" class="cl-nav-link cl-purple" href="/teams" style="padding-left: 15px;"><span class="cl-nav-link-copy">Đơn</span></a>
                              <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                                <div>
                                  <!---->
                                  <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                    class="cl-dropdown-item" href="#"> Tạo dơn </a><a
                                    routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                    href="#"> Xem đơn </a>
                                  <!---->
                                </div>
                              </div>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted" ><a
                            class="cl-nav-link cl-deep-orange cl-pr-2" href="/clients" style="padding-left: 12px;"><span class="cl-nav-link-copy cl-cut-text">Hồ sơ nhân
                              viên
                              <!---->
                              <!---->
                              <!---->
                              <!---->
                              <!---->
                              <!---->
                            </span></a>
                            <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                              <div>
                                <!---->
                                <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                  class="cl-dropdown-item" href="#">Danh sách nhân viên</a><a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="#">Thêm nhân viên</a>
                                  <a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="#">Sửa thông tin nhân viên</a>
                                  <a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="#">Xóa nhân viên</a>
                                <!---->
                              </div>
                            </div>
                          <!---->
                        </li>
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted" ><a
                            class="cl-nav-link cl-deep-orange cl-pr-2" href="./login.php" style="padding-left: 12px;"><span class="cl-nav-link-copy cl-cut-text">Log out
                              <!---->
                              <!---->
                              <!---->
                              <!---->
                              <!---->
                              <!---->
                            </span></a>
                          <!---->
                        </li>

                        <!---->
                        <!---->
                        <!---->

                        <!---->
                        <!---->
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
              <div class="cl-offcanvas-collapse-bg cl-open"></div>
            </nav>
          </aside>
        </sidebar-and-topbar>
        <main id="layout-main" class="cl-layout-main"  style="background: url(./2441903.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-size:cover; height:100%">
          height:100vh
</main>
        <!-- <video playsinline="" muted="" autoplay="" loop="" src="" class="attachment-video" data-silent="true" style="width:100%;margin-top: -110px; position: relative;">
    </video> -->
      </div>
      
      <toaster-container class="ng-tns-c48-1">
        <div id="toast-container" class="ng-tns-c48-1 toast-bottom-right">
          <!---->
        </div>
      </toaster-container>
    </default-layout>

  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
  
</body>

</html>
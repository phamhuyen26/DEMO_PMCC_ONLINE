<html>

<head>
  <meta charset="utf-8">
  <meta name="description" content="Best FREE time tracking tool for agencies and freelancers.">
  <meta name="author" content="COING">
  <title ng-bind-template="{{titleService.getTitle()}}">Clockify</title>
  <base href="/">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta property="fb:app_id" content="703408809850298">
  <meta property="og:title" content="Clockify - Time Tracking Software">
  <meta property="og:type" content="website">
  <meta property="og:url" content="https://clockify.me">
  <meta property="og:description" content="Track how much time you and your team spend working on
                                            tasks, run reports, manage projects, and boost your
                                            productivity.">
  <meta property="og:image" content="https://clockify.me/assets/open-graph-images/oGraph.png">
  <meta name="twitter:card" content="summary">
  <meta name="twitter:description" content="Track how much time you and your team spend working on
                                            tasks, run reports, manage projects, and boost your
                                            productivity.">
  <meta name="twitter:title" content="Clockify - Time Tracking Software">
  <meta name="twitter:site" content="@Clockify">
  <meta name="twitter:image" content="https://clockify.me/assets/open-graph-images/oGraph.png">
  <meta name="twitter:creator" content="@Clockify">


  <link rel="apple-touch-icon" href="assets/favicons/apple-touch-icon.png">
  <link rel="manifest" href="assets/favicons/site.webmanifest">
  <link rel="mask-icon" href="assets/favicons/safari-pinned-tab.svg" color="#03a9f4">
  <meta name="msapplication-TileColor" content="#03a9f4">
  <meta name="msapplication-TileImage" content="assets/favicons/mstile-144x144.png">
  <meta name="msapplication-config" content="assets/favicons/browserconfig.xml">
  <meta name="theme-color" content="#ffffff">
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
  <app-root ng-version="9.1.0">
    <router-outlet></router-outlet>
    <default-layout class="ng-star-inserted">
      <div class="cl-main-wrapper">
        <sidebar-and-topbar>
          <div id="topbar-menu"
            class="cl-navbar cl-pl-0 cl-pr-lg-3 cl-d-flex cl-align-items-center cl-border-bottom cl-top-bar cl-new-layer cl-d-print-none">
            <div class="cl-d-flex cl-justify-content-between cl-align-items-center cl-w-100">
              <div class="cl-d-flex cl-align-items-center top-bar-nav-align"><button type="button"
                  class="cl-navbar-toggler"><span class="cl-navbar-toggler-icon"></span></button>
                <div class="cl-logo-mob">TEAM 10 DEMO</div>
                <div class="cl-d-none cl-d-lg-inline-flex cl-align-items-center cl-contact-wrapper ng-star-inserted">
                  <div class="cl-btn-group cl-mr-2 ng-star-inserted"><a href="https://clockify.me/help/contact/sales"
                      target="_blank" class="cl-btn cl-btn-sm cl-btn-outline-primary cl-transform-none no-wrap"> Contact
                      for demo </a><button type="button"
                      class="cl-btn cl-btn-sm cl-btn-outline-primary cl-border-left-0 cl-lh-0 cl-font-size-lg"
                      style="font-size: 20px;">×</button></div>
                  <!---->
                  <!---->
                </div>
                <!---->
                <!---->
                <!---->
              </div>
              <div class="cl-d-flex cl-align-items-center cl-justify-content-end cl-cut-text-wrapper">
                <div class="cl-d-none cl-d-lg-inline-flex cl-cut-text-wrapper">
                  <div dropdownkey=""
                    class="cl-dropdown cl-dropdown-top-bar-ws cl-d-flex cl-justify-content-end cl-cut-text-wrapper ng-star-inserted">
                    <div dropdownkeybutton="" triggers="manual" placement="bottom" tabindex="0"
                      data-cy="workspace-dropdown" class="cl-dropdown-toggle pointer cl-cut-text"> Huyen Pham's
                      workspace </div>
                    <!---->
                    <!---->
                  </div>
                  <!---->
                </div>
                <div class="cl-d-inline-flex cl-mr-3 cl-mr-lg-0 cl-no-outline ng-star-inserted"><a routerlink="/upgrade"
                    clickclosedropdown="" class="cl-btn cl-btn-sm cl-btn-outline-primary cl-ml-3 ng-star-inserted"
                    href="/upgrade"> Upgrade </a>
                  <!---->
                  <!---->
                  <!---->
                </div>
                <!---->
                <!---->
                <div class="cl-d-none cl-d-lg-inline-flex">
                  <!---->
                  <div dropdownkey="" class="cl-dropdown cl-d-flex cl-ml-3 ng-star-inserted"><a dropdownkeybutton=""
                      tabindex="0" class="cl-dropdown-toggle cl-no-arrow cl-component-divided-left"><img
                        src="assets/nav-icons/help.svg"></a>
                    <!---->
                  </div>
                  <!---->
                </div>
                <div class="cl-d-flex cl-align-items-center">
                  <div dropdownkey="" class="cl-dropdown cl-dropdown-large"><a tabindex="0" dropdownkeybutton=""
                      class="cl-dropdown-toggle cl-no-arrow cl-d-flex cl-component-divided-left"><img
                        src="assets/nav-icons/notification.svg">
                      <!---->
                    </a>
                    <!---->
                  </div>
                  <div dropdownkey="" class="cl-dropdown cl-component-divided-left cl-pr-0"><a tabindex="0"
                      dropdownkeybutton="" class="cl-p-0 cl-dropdown-toggle cl-no-arrow cl-d-flex">
                      <avatar>
                        <div class="cl-bg-deep-orange cl-no-image-wrapper-sm ng-star-inserted"><span>HP</span></div>
                        <!---->
                        <!---->
                        <!---->
                      </avatar>
                    </a>
                    <!---->
                  </div>
                </div>
              </div>
            </div>
          </div>
          <aside id="sidebar-menu" class="cl-layout-aside" style="position: absolute; bottom: auto; top: 50px;">
            <nav class="cl-navbar cl-navbar-expand-lg cl-navbar-light">
              <div class="cl-navbar-collapse cl-offcanvas-collapse cl-open">
                <div class="cl-sidebar-wrapper">
                  <div class="cl-sidebar-header"><button type="button" class="cl-navbar-toggler cl-d-block"><span
                        class="cl-navbar-toggler-icon"></span></button>
                    <div class="cl-logo-mob"><svg xmlns="" viewBox="0 0 134 33" fill="none" class="pointer">

                      </svg></div>
                  </div>
                  <div class="cl-sidebar-container">
                    <div class="cl-navbar-container">
                      <ul class="cl-navbar-nav">
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/timesheet" class="cl-nav-link cl-blue" href="/timesheet"><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy">Trang chủ</span></a>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/tracker" class="cl-nav-link cl-orange" href="/tracker"><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy"><span
                                class="ng-star-inserted">Chấm công</span>
                              <!---->
                              <!---->
                            </span></a>
                            <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                              <div>
                                <!---->
                                <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                  class="cl-dropdown-item" href="/Demo_HTChamCong/Interface/CheckIn.php"> CheckIn </a><a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="/Demo_HTChamCong/Interface/CheckOut.php"> CheckOut </a>
                                <!---->
                              </div>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown"><a routerlink="/calendar"
                            class="cl-nav-link cl-indigo" href=""><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy">Công việc</span></a>
                              <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                                <div>
                                  <!---->
                                  <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                    class="cl-dropdown-item" href="/Demo_HTChamCong/Interface/QuanLy/CapNhatCongViec.php">Thêm</a><a
                                    routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                    href=""> Xem bảng </a>
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
                              class="cl-h5 cl-mb-0">Analyze</span></span></li>
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown"><a routerlink="/dashboard"
                            class="cl-nav-link cl-light-green" href="/history.html"><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy">Lịch sử chấm
                              công</span></a>
                              
                          <!---->
                        </li>
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><span
                            class="cl-z0 cl-nav-link cl-dropdown-toggle cl-pink cl-d-lg-none pointer"><span
                              class="cl-nav-icon-wrapper"></span>Bảng lương
                          </span><a routerlink="/reports/summary"
                            class="cl-nav-link cl-dropdown-toggle cl-pink cl-d-none cl-d-lg-flex"
                            href="/reports/summary"><span class="cl-nav-icon-wrapper">
                              </span><span class="cl-nav-link-copy">Bảng lương</span></a>
                          <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                            <div>
                              <!---->
                              <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                class="cl-dropdown-item" href="/reports/summary"> Xem bảng lương </a><a
                                routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                href="/reports/detailed"> Cập nhật lương </a>
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
                              class="cl-h5 cl-mb-0"> Manage </span></span></li>
                        <!---->
                        <!---->
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown"><a routerlink="/calendar"
                            class="cl-nav-link cl-indigo" href=""><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy">Công việc</span></a>
                              <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                                <div>
                                  <!---->
                                  <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                    class="cl-dropdown-item" href="/Demo_HTChamCong/Interface/QuanLy/CapNhatCongViec.php">Thêm</a><a
                                    routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                    href=""> Xem bảng </a>
                                  <!---->
                                </div>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            routerlink="/teams" class="cl-nav-link cl-purple" href="/teams"><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy">Đơn</span></a>
                              <div class="cl-dropdown-menu cl-pink cl-dropdown-menu-nav">
                                <div>
                                  <!---->
                                  <!----><a routerlinkactive="cl-active" routerlink="/reports/summary"
                                    class="cl-dropdown-item" href="/reports/summary"> Tạo dơn </a><a
                                    routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                    href="/reports/detailed"> Xem đơn </a>
                                  <!---->
                                </div>
                              </div>
                          <!---->
                        </li>
                        <!---->
                        <li routerlinkactive="cl-active" class="cl-nav-item cl-dropdown ng-star-inserted"><a
                            class="cl-nav-link cl-deep-orange cl-pr-2" href="/clients"><span
                              class="cl-nav-icon-wrapper"></span><span class="cl-nav-link-copy cl-cut-text">Hồ sơ nhân
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
                                  class="cl-dropdown-item" href="/reports/summary">Danh sách nhân viên</a><a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="/reports/detailed">Thêm nhân viên</a>
                                  <a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="/reports/detailed">Sửa thông tin nhân viên</a>
                                  <a
                                  routerlinkactive="cl-active" routerlink="/reports/detailed" class="cl-dropdown-item"
                                  href="/reports/detailed">Xóa nhân viên</a>
                                <!---->
                              </div>
                            </div>
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
        <main id="layout-main" class="cl-layout-main" style="min-height: 750px;
          background: url(./OIP.jpg);
          background-repeat: no-repeat;
          background-position: center;
          background-size:cover;">
          <!---->
          <router-outlet></router-outlet>
          <projects class="ng-star-inserted">
            <main class="cl-page-wrapper">

            </main>
            <!---->
            <!---->
            <!---->
            <!---->
            <!---->
          </projects>
          <!---->
        </main>
      </div>
      <chat-widget>
        <!---->
        <!---->
        <!---->
      </chat-widget>
      <toaster-container class="ng-tns-c48-1">
        <div id="toast-container" class="ng-tns-c48-1 toast-bottom-right">
          <!---->
        </div>
      </toaster-container>
    </default-layout>
    <!---->
    <loader2 class="ng-tns-c51-0">
      <!---->
      <!---->
      <!---->
    </loader2>
  </app-root>

  <script src="runtime-es2015.dc68ace2118884052ce5.js" type="module"></script>
  <script src="runtime-es5.dc68ace2118884052ce5.js" nomodule="" defer=""></script>
  <script src="polyfills-es5.d4c1fa15e7326fabac8f.js" nomodule="" defer=""></script>
  <script src="polyfills-es2015.8df701c87fc1c4b77539.js" type="module"></script>
  <script src="scripts.be13756ab37d138a5f78.js" defer=""></script>
  <script src="main-es2015.e77169f3d9837ab45f99.js" type="module"></script>
  <script src="main-es5.e77169f3d9837ab45f99.js" nomodule="" defer=""></script>


  <script type="text/javascript" async="" defer="" src="https://js.stripe.com/v3/"></script>
  <gdiv class="ginger-extension-writer" style="display: none;">
    <gdiv class="ginger-extension-writer-frame"><iframe
        src="chrome-extension://kdfieneakcjfaiglcfcgkidlkmlijjnh/writer/index.html"></iframe></gdiv>
  </gdiv><iframe name="__privateStripeMetricsController5040" frameborder="0" allowtransparency="true" scrolling="no"
    allow="payment *"
    src="https://js.stripe.com/v3/m-outer-fd3c67f2efa9f22f2ecd16b13f2a7fb3.html#url=https%3A%2F%2Fclockify.me%2Fprojects%3Farchived%3DACTIVE%26billable%3DNONE%26name%3DPh%25E1%25BA%25A7n%2520m%25E1%25BB%2581m%2520ch%25E1%25BA%25A5m%2520c%25C3%25B4ng%26containsClient%3Dtrue%26containsUser%3Dtrue%26page%3D1%26limit%3D50%26sortColumn%3DPROGRESS%26sortOrder%3DDESCENDING&amp;title=&amp;referrer=&amp;muid=8943e2f2-61ab-4ecc-9142-4a4165a84fa17e6c1e&amp;sid=7b136686-b15e-4262-be3c-8e0d1516d2b2b9222c&amp;version=6&amp;preview=false"
    aria-hidden="true" tabindex="-1"
    style="border: none !important; margin: 0px !important; padding: 0px !important; width: 1px !important; min-width: 100% !important; overflow: hidden !important; display: block !important; visibility: hidden !important; position: fixed !important; height: 1px !important; pointer-events: none !important; user-select: none !important;"></iframe>
</body>
<div id="edge-translate-notifier-container" class="edge-translate-notifier-center"></div>

</html>
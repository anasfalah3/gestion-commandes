<!doctype html>
<html lang="en">

<head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>@yield('title')</title>
      <link rel="shortcut icon" type="image/png" href="{{asset('assets/images/logos/favicon.png')}}" />
      <link rel="stylesheet" href="{{asset('assets/css/styles.min.css')}}" />
</head>

<body>
      <!--  Body Wrapper -->
      <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full" data-sidebar-position="fixed" data-header-position="fixed">
            <!-- Sidebar Start -->
            <aside class="left-sidebar">
                  <!-- Sidebar scroll-->
                  <div>
                        <div class="brand-logo d-flex align-items-center justify-content-between">
                              <a href="./index.html" class="text-nowrap logo-img">
                                    <img src="{{asset('assets/images/logos/dark-logo.svg')}}" width="180" alt="" />
                              </a>
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
                                          <a class="sidebar-link" href="{{(route('home'))}}" aria-expanded="false">
                                                <span>
                                                      <i class="ti ti-layout-dashboard"></i>
                                                </span>
                                                <span class="hide-menu">Dashboard</span>
                                          </a>
                                    </li>
                                    <li class="nav-small-cap">
                                          <i class="ti ti-dots nav-small-cap-icon fs-4"></i>
                                          <span class="hide-menu">Pages</span>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('clients.index')}}" aria-expanded="false">
                                                <span>
                                                      <i class="ti ti-users"></i>
                                                </span>
                                                <span class="hide-menu">Clients</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('produits.index')}}" aria-expanded="false">
                                                <span>
                                                      <i class="ti ti-building-store"></i>
                                                </span>
                                                <span class="hide-menu">Produits</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('commandes.index')}}" aria-expanded="false">
                                                <span>
                                                      <i class="ti ti-shopping-cart"></i>
                                                </span>
                                                <span class="hide-menu">Commandes</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link" href="{{route('commandeProduits.index')}}" aria-expanded="false">
                                                <span>
                                                      <i class="ti ti-circles-relation"></i>
                                                </span>
                                                <span class="hide-menu">Affectation Commandes</span>
                                          </a>
                                    </li>
                                    <li class="sidebar-item">
                                          <a class="sidebar-link has-arrow " href="javascript:void(0)" aria-expanded="false">
                                                <span class="d-flex">
                                                      <i class="ti ti-search"></i>
                                                </span>
                                                <span class="hide-menu">Recherche</span>
                                          </a>
                                          <ul aria-expanded="false" class="collapse first-level">
                                                <li class="sidebar-item">
                                                      <a href="{{route('recherche.commandes_par_client')}}" class="sidebar-link fs-2">
                                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                                  <i class="ti ti-circle fs-1"></i>
                                                            </div>
                                                            <span class="hide-menu">Commandes des clients</span>
                                                      </a>
                                                </li>
                                                <li class="sidebar-item">
                                                      <a href="{{route('recherche.nombre_commandes_par_client')}}" class="sidebar-link fs-2">
                                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                                  <i class="ti ti-circle fs-1"></i>
                                                            </div>
                                                            <span class="hide-menu">Nb Commandes par client</span>
                                                      </a>
                                                </li>
                                                <li class="sidebar-item">
                                                      <a href="{{route('recherche.total_commandes_valides')}}" class="sidebar-link fs-2">
                                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                                  <i class="ti ti-circle fs-1"></i>
                                                            </div>
                                                            <span class="hide-menu">Total de commandes validé</span>
                                                      </a>
                                                </li>
                                                <li class="sidebar-item">
                                                      <a href="{{route('recherche.produits_par_categorie')}}" class="sidebar-link fs-2">
                                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                                  <i class="ti ti-circle fs-1"></i>
                                                            </div>
                                                            <span class="hide-menu">Produits par categorie</span>
                                                      </a>
                                                </li>
                                                <li class="sidebar-item">
                                                      <a href="{{route('recherche.commandes_produits_par_client_View')}}" class="sidebar-link fs-2">
                                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                                  <i class="ti ti-circle fs-1"></i>
                                                            </div>
                                                            <span class="hide-menu">Recherche Commandes d'client</span>
                                                      </a>
                                                </li>
                                                <li class="sidebar-item">
                                                      <a href="{{route('recherche.commandes_produits_par_annee_View')}}" class="sidebar-link fs-2">
                                                            <div class="round-16 d-flex align-items-center justify-content-center">
                                                                  <i class="ti ti-circle fs-1"></i>
                                                            </div>
                                                            <span class="hide-menu">Recherche Commandes par annee</span>
                                                      </a>
                                                </li>
                                          </ul>
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

                              <div class="navbar-collapse justify-content-end px-0" id="navbarNav">
                                    <ul class="navbar-nav flex-row ms-auto align-items-center justify-content-end">
                                          <li class="nav-item dropdown">
                                                <a class="nav-link nav-icon-hover" href="javascript:void(0)" id="drop2" data-bs-toggle="dropdown" aria-expanded="false">
                                                      <img src="{{asset('assets/images/profile/user-1.jpg')}}" alt="" width="35" height="35" class="rounded-circle">
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end dropdown-menu-animate-up" aria-labelledby="drop2">
                                                      <div class="message-body">
                                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                                                  <i class="ti ti-user fs-6"></i>
                                                                  <p class="mb-0 fs-3">My Profile</p>
                                                            </a>
                                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                                                  <i class="ti ti-mail fs-6"></i>
                                                                  <p class="mb-0 fs-3">My Account</p>
                                                            </a>
                                                            <a href="javascript:void(0)" class="d-flex align-items-center gap-2 dropdown-item">
                                                                  <i class="ti ti-list-check fs-6"></i>
                                                                  <p class="mb-0 fs-3">My Task</p>
                                                            </a>
                                                            <a href="./authentication-login.html" class="btn btn-outline-primary mx-3 mt-2 d-block">Logout</a>
                                                      </div>
                                                </div>
                                          </li>
                                    </ul>
                              </div>
                        </nav>
                  </header>
                  <!--  Header End -->
                  <div class="container-fluid">
                        <!--  Row 1 -->

                        @yield('content')

                        <div class="py-6 px-6 text-center">
                              <p class="mb-0 fs-4">&copy; Copyright by <a href="/" class="pe-1 text-primary text-decoration-underline"> Anas Falah</a> &#124; <a href="/">2024</a> &#124; </p>
                        </div>
                  </div>
            </div>
      </div>
      <script src="{{asset('assets/libs/jquery/dist/jquery.min.js')}}"></script>
      <script src="{{asset('assets/libs/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
      <script src="{{asset('assets/js/sidebarmenu.js')}}"></script>
      <script src="{{asset('assets/js/app.min.js')}}"></script>
      <script src="{{asset('assets/libs/apexcharts/dist/apexcharts.min.js')}}"></script>
      <script src="{{asset('assets/libs/simplebar/dist/simplebar.js')}}"></script>
      <script src="{{asset('assets/js/dashboard.js')}}"></script>
</body>

</html>
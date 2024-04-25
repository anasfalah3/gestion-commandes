<!DOCTYPE html>
<html>

<head>
      <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
      <title>@yield('title')</title>
      <link rel="stylesheet" href="{{asset('bootstrap/bootstrap.min.css')}}">
      <link rel="stylesheet" href="{{asset('style.css')}}">

       <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
       <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
      <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
       <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
       <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
       <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
       <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</head>

<body>
      <div id="page">
            
            <div class="feature">
                  <div class="feature-inner">
                        <h1>@yield('heading','Welcome')</h1>
                  </div>
            </div>


            <div id="content">
                  <div id="content-inner">

                        <main id="contentbar">
                              @yield('content')
                        </main>
                        @yield('back')

                        <nav id="sidebar">
                              <div class="widget">
                                    <h3>Navigation</h3>
                                    <ul>
                                          <li><a href="/">Home</a></li>
                                          <li><a href="{{route('clients.index')}}">Clients</a></li>
                                          <li><a href="{{route('produits.index')}}">Prodits</a></li>
                                          <li><a href="{{route('commandes.index')}}">Commandes</a></li>
                                          <li><a href="{{route('commandeProduits.index')}}">Affectation Commandes</a></li>
                                    </ul>
                              </div>
                        </nav>

                        <div class="clr"></div>
                  </div>
            </div>

            <footer id="footer">
                  <div id="footer-inner">
                        <p>&copy; Copyright <a href="#">by Anas Falah</a> &#124; <a href="#">2024</a> &#124;</p>
                        <div class="clr"></div>
                  </div>
            </footer>
      </div>
      <script src="{{asset('bootstrap/bootstrap.min.js')}}"></script>
</body>

</html>
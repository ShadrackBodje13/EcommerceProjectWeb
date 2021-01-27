<!DOCTYPE html>
<html lang="en">

<head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Dashboard Admin</title>
    <!-- css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="{{resources('css/style.css')}}">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <link rel="shortcut icon" href="" />
</head>

<body>
    <div class="container-scroller">
        
        <nav class="navbar default-layout col-lg-12 col-12 p-0 fixed-top d-flex flex-row">
            <div class="text-center navbar-brand-wrapper d-flex align-items-top justify-content-center">
                <a class="navbar-brand brand-logo" href="{{route('admin.dashboard')}}">
                    <div style="color: #007bff;">Nom du site choisi</div>
                </a>
                <a class="navbar-brand brand-logo-mini" href="{{route('admin.dashboard')}}">
                    <div style="color: #007bff;">nom du Site choisi</div>
                </a>
            </div>
            <div class="navbar-menu-wrapper d-flex align-items-center">
                <ul class="navbar-nav navbar-nav-right">
                    <li class="nav-item dropdown d-none d-xl-inline-block">
                        <a class="nav-link dropdown-toggle" id="UserDropdown" href="#" data-toggle="dropdown" aria-expanded="false">
                            <span class="profile-text">{{session()->get('admin')->name}}</span><!--Connecté entant que Admin, on met son nom-->
                            <img class="img-xs rounded-circle" src="" alt="Profile image"><!--Image du profil, tu peux mettre un emoji ou autre-->
                        </a>
                        <div class="dropdown-menu dropdown-menu-right navbar-dropdown" aria-labelledby="UserDropdown">
                            <br>
                            <br>
                            <a class="dropdown-item" href="{{route('admin.logout')}}">
                                Sign Out<!--La deconnexion de l'admin, elle devrait en quelque sorte sortir apres click sur la photo-->
                            </a>
                        </div>
                    </li>
                </ul>
                <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
                    <span class="mdi mdi-menu"></span>
                </button>
            </div>
        </nav>
        
        <div class="container-fluid page-body-wrapper">
            
            <nav class="sidebar sidebar-offcanvas" id="sidebar">
                <ul class="nav">
                    <li class="nav-item nav-profile">
                        <div class="nav-link">
                            <div class="user-wrapper">
                                <div class="profile-image">
                                    <img src="" alt="profile image"><!--Meme image que dans la nav-->
                                </div>
                                <div class="text-wrapper">
                                    <p class="profile-name">{{session()->get('admin')->name}}</p>
                                    <div>
                                        <small class="designation text-muted">Admin</small>
                                        <span class="status-indicator online"></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item {{Route::is('admin.dashboard') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('admin.dashboard')}}">
                            <i class="menu-icon mdi mdi-television"></i>
                            <span class="menu-title">Dashboard</span><!--CRDUD DASHBOARD-->
                        </a>
                    </li>
                    <li class="nav-item {{Route::is('admin.products') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('admin.products')}}">
                            <i class="menu-icon mdi mdi-cart-outline"></i>
                            <span class="menu-title">Products</span><!--CRDUD Produit-->
                        </a>
                    </li>
                    <li class="nav-item {{Route::is('admin.categories') ? 'active' : ''}}">
                        <a class="nav-link" href="{{route('admin.categories')}}">
                            <i class="menu-icon mdi mdi-view-grid"></i>
                            <span class="menu-title">Categories</span><!--CRDUD Categories-->
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{route('admin.orderManagement')}}">
                            <i class="menu-icon mdi mdi-content-paste"></i>
                            <span class="menu-title">Order Management</span><!--CRDUD management pour voir les achats et les noms des achetants, 
                                                                                ca nous laisse une trace Mais pour 'email je saurais pas comment faire killian
                                                                                J'ai pas trop compris la partie de mailtrap avec a prof lorsque dans la facture l'utilisateur pourra prendre sa facture en pdf
                                                                                Mais je crois que ici auss ca devrait s'afficher selon le sujet-->
                        </a>
                    </li>
                </ul>
            </nav>
            
            <div class="main-panel">
                @yield('content')
               
                <footer class="footer">
                   
                </footer>
                
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>

    <script src="{{asset('js/off-canvas.js')}}"></script>
    <script src="{{asset('js/misc.js')}}"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-confirm/3.3.0/jquery-confirm.min.js"></script>
    
    
    <!--    Jquery Validation-->
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.0/jquery.validate.min.js"></script>
</body>

</html>

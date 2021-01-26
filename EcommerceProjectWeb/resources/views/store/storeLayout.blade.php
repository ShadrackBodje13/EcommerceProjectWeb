<!DOCTYPE html>
<html lang="en"><!--Langue natuerelle du site mais on peut le mettre en fr aussi ou créer un dossier fr lang on verra apres si on a le temps -->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Projet Laravel Ynov</title>

    <link rel="shortcut icon" href="{{images('')}}" /><!--LE logo que tu as fais killian-->
    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

    <!-- Slick (J'ai trouvé que c'est un truc comme Boostrap ca peut nous donner des points, aussi il y a les dossiers à l'interieur si tu veux-->
    <link rel="stylesheet" type="text/css" href="slick/slick.css"/>
    // Add the new slick-theme.css if you want the default styling
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css"/>

    <!-- nouislider C'est pourles barres de selections de prix là -->
    <link type="text/css" rel="stylesheet" href="{{resources('css/nouislider.min.css')}}" />

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="{{resources('css/font-awesome.min.css')}}">

    <!-- css personnel -->
    <link type="text/css" rel="stylesheet" href="{{resources('css/style2.css')}}" />
    
    

    {{-- custom css --}}
    <style>
        @media only screen and (max-width: 767px){
            #head_links {
                visibility: hidden;
            }
            .custom_search_top {
                text-align:center;
            }

            .header-ctn {
                width: 100%;
            }
        }
        </style>

</head>

{{-- Le body--}}

<body>
    <!-- HEADER -->
    <header>
        <!-- TOP HEADER -->
        <div id="top-header">
            <div class="container">
                <ul id="head_links" class="header-links pull-left">
                    <li><a href="#"><i class="fa fa-phone"></i> +33 555 555 555</a></li>
                    <li><a href="#"><i class="fa fa-envelope-o"></i> shadrackemmanuel.bodje@ynov.com</a></li>
                    <li><a href="#"><i class="fa fa-map-marker"></i> 12 Rue Anatole Naterre 92000</a></li>
                </ul>
                <ul class="header-links pull-right">
                <!-- Si il est connecté en tant que utilisateur on ajoute lien pour se deconnecter sinon, on met lien de connexion et d'inscriprion-->
                    @if(session()->has('user'))
                      <li><a style="color:white" href="">{{session()->get('user')->lastname}} </a></li>  
                      <li><a href=""><i class="fa fa-user-o"></i> Deconnexion</a></li>
                    @else
                    <li><a href=""><i class="fa fa-user-o"></i> Connexion</a></li>
                    
                    <li><a href=""><i class="fa fa-user-o"></i> Inscription</a></li>
                    @endif
                    
                </ul>
            </div>
        </div>
        <!-- fin du TOP HEADER -->

        <!--HEADER PRINCIPALE-->
        <div id="header">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row">
                    <!-- LOGO -->
                    <div class="col-md-3">
                        <div class="header-logo">
                            <a href="" class="logo"><!--Route pour l'acceuil-->
                                <img src="" alt=""><!--Logo du Site-->
                            </a>
                        </div>
                    </div>
                    <!-- /LOGO -->

                    <!-- Barre de recherche -->
                    <div class="col-md-6">
                        <div class="header-search">
                            <form action="{{route('user.search')}}" method="get">
                                <div class="custom_search_top" >
                                    <input class="input" style="border-radius: 40px 0px 0px 40px;" name="n" placeholder="recherchez ici">
                                    <button  class="search-btn">recherche</button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <!-- fin de barre de recherche -->

                    <!-- ACCOUNT -->
                    <div class="col-md-3 clearfix">
                        <div class="header-ctn">
                            <!-- Cart -->
                            <div  class="dropdown">
                                <a class="dropdown-toggle " id="custom_shopping_cart" href=""><!--route pour le panier-->
                                    <i class="fa fa-shopping-cart"></i>
                                    <span>Panier</span>
                                </a>

                            </div>
                            <!-- /Cart -->

                            <!-- Menu Toogle -->
                            <div class="menu-toggle pull-right">
                                <a href="#">
                                    <i class="fa fa-bars"></i>
                                    <span>Menu</span>
                                </a>
                            </div>
                            <!-- /Menu Toogle -->
                        </div>
                    </div>
                    <!-- /ACCOUNT -->
                </div>
                <!-- row -->
            </div>
            <!-- container -->
        </div>
        <!-- /MAIN HEADER -->
    </header>
    <!-- /HEADER -->

    <!-- NAVIGATION -->
    <nav id="navigation">
        <!-- container -->
        <div class="container">
            <!-- responsive-nav -->
            <div id="responsive-nav">
                <!-- NAV elle contiendra peut-etre les recherches par categories des jeux du projet-->
                <ul class="main-nav nav navbar-nav">
                    <!--<li class="{{Route::is('') ? 'active' : ''}}"><a href="">Accueil</a></li>-->
                    
                    
                </ul>
                <!-- /NAV -->
            </div>
            <!-- /responsive-nav -->
        </div>
        <!-- /container -->
    </nav>
    <!-- /NAVIGATION -->

    <!-- SECTION -->
    <div class="section">
        <!-- container -->
        
        <!-- /container -->
    </div>
    <!-- SECTION -->


    @yield('content')

    <!-- /SECTION DE NEWSLATTER-->
    
    <div id="newsletter" class="section">
        <!-- container -->
        <div class="container">
            <!-- row -->
            <div class="row">
                <div class="col-md-12">
                    <div class="newsletter">
                        <p>Souscrire à notre newsletter <strong>NEWSLETTER</strong></p>
                        <form>
                            <input class="input" type="email" placeholder="Inscrire email">
                            <button class="newsletter-btn"><i class="fa fa-envelope"></i> Subscribe</button>
                        </form>
                        <ul class="newsletter-follow">
                            <li>
                                <a href="#"><i class="fa fa-facebook"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                            </li>
                            <li>
                                <a href="#"><i class="fa fa-pinterest"></i></a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /row -->
        </div>
        <!-- /container -->
    </div>
    <!-- /NEWSLETTER -->

    <!-- FOOTER -->
    <footer id="footer" >
        <!-- top footer -->
        <div class="section">
            <!-- container -->
            <div class="container">
                <!-- row -->
                <div class="row" >
                    <div class="col-md-3 col-xs-6" >
                        <div class="footer" >
                            <h3 class="footer-title">About Us</h3>
                            <p>Shadrack BODJE et Killian Grincourt se sont debrouillés bisous 😘!</p>
                            <ul class="footer-links">
                                <li><a href="#"><i class="fa fa-map-marker"></i>12 Rue Anatole Nanterre 92000</a></li>
                                <li><a href="#"><i class="fa fa-phone"></i>+33 555 555 555</a></li>
                                <li><a href="#"><i class="fa fa-envelope-o"></i>killian.Grincourt@ynov.com</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Categories</h3>
                            <ul class="footer-links">
                                <li><a href="#">PS5</a></li>
                                <li><a href="#">PS4</a></li>
                                <li><a href="#">XBOX </a></li>
                                <li><a href="#">PS VITA</a></li>
                                <li><a href="#">ACCESOIRE PEUT-ETRE</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="clearfix visible-xs"></div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Information</h3>
                            <ul class="footer-links">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Contact Us</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">Orders and Returns</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-md-3 col-xs-6">
                        <div class="footer">
                            <h3 class="footer-title">Service</h3>
                            <ul class="footer-links">
                                <li><a href="#">My Account</a></li>
                                <li><a href="#">View Cart</a></li>
                                <li><a href="#">Wishlist</a></li>
                                <li><a href="#">Track My Order</a></li>
                                <li><a href="#">Help</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /top footer -->

        <!-- bottom footer -->
        <div id="bottom-footer" class="section">
            <div class="container">
                <!-- row -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul class="footer-payments">
                            <li><a href="#"><i class="fa fa-cc-visa"></i></a></li>
                            <li><a href="#"><i class="fa fa-credit-card"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-paypal"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-mastercard"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-discover"></i></a></li>
                            <li><a href="#"><i class="fa fa-cc-amex"></i></a></li>
                        </ul>
                    </div>
                </div>
                <!-- /row -->
            </div>
            <!-- /container -->
        </div>
        <!-- /bottom footer -->
    </footer>
    <!-- fin du FOOTER -->


    <!-- jQuery  -->
    
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="slick/slick.min.js"></script>
    <script src="{{resources('js/nouislider.min.js')}}"></script>
    <script src="{{resources('js/main.js')}}"></script>
    
    

</body>
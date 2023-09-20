    <!--::header part start::-->
    <header class="main_menu home_menu">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <nav class="navbar navbar-expand-lg navbar-light">
                        <a class="navbar-brand" href="{{route("home.index")}}"> <img src="img/logo.png" alt="logo"> </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse"
                            data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                            aria-expanded="false" aria-label="Toggle navigation">
                            <span class="menu_icon"><i class="fas fa-bars"></i></span>
                        </button>

                        <div class="collapse navbar-collapse main-menu-item" id="navbarSupportedContent">
                            <ul class="navbar-nav">
                                <li class="nav-item">
                                    <a class="nav-link" href={{route("home.index")}}>Home</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href={{route("shop.index")}}>Shop</a>
                                </li>
                              
                               
                                
                                <li class="nav-item">
                                    <a class="nav-link" href="{{route("contact.index")}}">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="hearer_icon d-flex">
                            
                            <a href=""><i class="ti-heart"></i></a>
                            <a href="{{route("cart.index")}}"><i class="fas fa-cart-plus"></i></a>
                        </div>
                       {{-- auth --}}
                       @if (Route::has('login'))
                       <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                           @auth
                               <a href="{{ url('/home') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Home</a>
                           @else
                               <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Log in</a>
       
                               @if (Route::has('register'))
                                   <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 dark:text-gray-400 dark:hover:text-white focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>
                               @endif
                           @endauth
                       </div>
                   @endif
       
                        
                    </nav>
                </div>
            </div>
        </div>
        
    </header>
    <!-- Header part end-->

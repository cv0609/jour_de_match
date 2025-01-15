 <!-- preloader area start -->
 <div class="preloader" id="preloader">
     <div class="preloader-inner">
         <div class="preloader-orbit-loading">
             <div class="cssload-inner cssload-one"></div>
             <div class="cssload-inner cssload-two"></div>
             <div class="cssload-inner cssload-three"></div>
         </div>
     </div>
 </div>
 <!-- preloader area end -->

 <!-- search popup start-->
 <div class="body-overlay" id="body-overlay"></div>
 <div class="td-search-popup" id="td-search-popup">
     <form action="https://www.webnextpro.com/tf/gameone/home.html" class="search-form">
         <div class="form-group">
             <input type="text" class="form-control" placeholder="Search.....">
         </div>
         <button type="submit" class="submit-btn"><i class="fa fa-search"></i></button>
     </form>
 </div>
 <!-- search popup end-->
 <!-- Header Start -->
 <header class="sticky-header">
     <div class="container">
         <nav class="navigation-bar">
             <div class="brand-container">
                 <a href="{{ route('home') }}" class="brand-link" style="background-image: url('{{asset('assets/img/logo/logo.svg')}}' );"></a>
             </div>

             <div class="menu-toggle-btn"></div>

             <div class="navigation-menu">
                 <ul>
                     <li><a class="{{ Route::currentRouteName() == 'home' ? 'active' : '' }}" href="{{ route('home') }}">Maison</a></li>
                     <li><a class="{{ Route::currentRouteName() == 'how-to-play' ? 'active' : '' }}" href="{{ route('how-to-play') }}">Comment Jouer</a></li>
                     <li><a class="{{ Route::currentRouteName() == 'leagues' ? 'active' : '' }}" href="{{ route('leagues') }}">Jouez maintenant</a></li>
                     <li><a class="{{ Route::currentRouteName() == 'about-us' ? 'active' : '' }}" href="{{ route('about-us') }}">À Propos De Nous</a></li>
                     <li><a class="{{ Route::currentRouteName() == 'contact-us' ? 'active' : '' }}" href="{{ route('contact-us') }}">Contactez-Nous</a></li>
                 </ul>
                 @if(!Auth::check())
                 <a href="{{ route('login') }}" class="butn login-btn">Se connecter</a>
                 <a href="{{ route('signup') }}" class="butn signup-btn">S'inscrire</a>
                 @endif
                 @if(Auth::check())
                    <div class="profile">
                     <div class="avatar">
                         <div class="avatar-content">
                             <a href="javascript:void(0)">
                                 <div class="profile-image">
                                     <img src="{{(!empty(Auth::user()->image)) ? asset(Auth::user()->image) : asset('assets/img/dummy.jpg') }}" alt="dp">
                                 </div>
                                 <span>{{ ucfirst(Auth::user()->name) }}</span>
                             </a>
                             <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                                 <path
                                     d="M201.4 374.6c12.5 12.5 32.8 12.5 45.3 0l160-160c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L224 306.7 86.6 169.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3l160 160z" />
                             </svg>
                         </div>
                         <div class="dropdown">
                             <ul>
                                 <li><a href="{{ route('profile.profile') }}">
                                 <div class="profile-dropdown-options profile-image-dropdown" style="background-image: url('{{asset('assets/img/dummy.jpg')}}' );"></div>Mon profil
                                     </a>
                                 </li>
                                 <li>
                                     <a href="{{route('profile.matches')}}">
                                     <div class="profile-dropdown-options profile-image-stadium" style="background-image: url('{{asset('assets/img/stadium.png')}}' );"></div>
                                     Mes matchs
                                     </a>
                                 </li>
                                 <li>
                                     <a href="{{ route('logout') }}">
                                     <div class="profile-dropdown-options profile-image-logout" style="background-image: url('{{asset('assets/img/logout.png')}}' );"></div>Déconnexion
                                     </a>
                                 </li>
                             </ul>
                         </div>
                     </div>
                 </div>
                 @endif
                 <div class="menu-close-btn"></div>
             </div>
         </nav>
     </div>
 </header>
 <!-- Header Section End -->

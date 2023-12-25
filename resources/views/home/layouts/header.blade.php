<header class="header_section">
    <div class="container">
       <nav class="navbar navbar-expand-lg custom_nav-container ">
          <a class="navbar-brand" href="index.html"><img width="250" src="images/logo.png" alt="#" /></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
             <ul class="navbar-nav">
                <li class="nav-item active">
                   <a class="nav-link" href="index.html">Home <span class="sr-only">(current)</span></a>
                </li>
               <li class="nav-item dropdown">
                   <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="true"> <span class="nav-label">Pages <span class="caret"></span></a>
                   <ul class="dropdown-menu">
                      <li><a href="about.html">About</a></li>
                      <li><a href="testimonial.html">Testimonial</a></li>
                   </ul>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="product.html">Products</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="blog_list.html">Blog</a>
                </li>
                <li class="nav-item">
                   <a class="nav-link" href="contact.html">Contact</a>
                </li>
                <form class="form-inline">
                   <button class="btn  my-2 my-sm-0 nav_search-btn" type="submit">
                   <i class="fa fa-search" aria-hidden="true"></i>
                   </button>
                </form>
                <li class="nav-item">
                @if (Route::has('login'))
                <div class="">
                    @auth
                    <nav x-data="{ open: false }">
                     <!-- Primary Navigation Menu -->
                     <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                         <div class="flex justify-between">
                 
                             <!-- Settings Dropdown -->
                             <div class="hidden sm:flex sm:items-center sm:ml-6">
                                 <x-dropdown align="right" width="48">
                                     <x-slot name="trigger">
                                         <button class="inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-1400 bg-white hover:text-gray-700 focus:outline-none transition ease-in-out duration-150">
                                             <div>{{ Auth::user()->name }}</div>
                 
                                             <div class="ml-1">
                                                 <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
                                                     <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                                                 </svg>
                                             </div>
                                         </button>
                                     </x-slot>
                 
                                     <x-slot name="content">
                                         <x-dropdown-link :href="route('profile.edit')">
                                             {{ __('Profile') }}
                                         </x-dropdown-link>
                 
                                         <!-- Authentication -->
                                         <form method="POST" action="{{ route('logout') }}">
                                             @csrf
                 
                                             <x-dropdown-link :href="route('logout')"
                                                     onclick="event.preventDefault();
                                                                 this.closest('form').submit();">
                                                 {{ __('Log Out') }}
                                             </x-dropdown-link>
                                         </form>
                                     </x-slot>
                                 </x-dropdown>
                             </div>
                 
                             <!-- Hamburger -->
                             <div class="-mr-2 flex items-center sm:hidden">
                                 <button @click="open = ! open" class="inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition duration-150 ease-in-out">
                                     <svg class="h-6 w-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                                         <path :class="{'hidden': open, 'inline-flex': ! open }" class="inline-flex" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                                         <path :class="{'hidden': ! open, 'inline-flex': open }" class="hidden" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                                     </svg>
                                 </button>
                             </div>
                         </div>
                     </div>
                 
                     <!-- Responsive Navigation Menu -->
                     <div :class="{'block': open, 'hidden': ! open}" class="hidden sm:hidden">
                         <div class="pt-2 pb-3 space-y-1">
                             <x-responsive-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
                                 {{ __('Dashboard') }}
                             </x-responsive-nav-link>
                         </div>
                 
                         <!-- Responsive Settings Options -->
                         <div class="pt-4 pb-1 border-t border-gray-200">
                             <div class="px-4">
                                 <div class="font-medium text-base text-gray-800">{{ Auth::user()->name }}</div>
                                 <div class="font-medium text-sm text-gray-500">{{ Auth::user()->email }}</div>
                             </div>
                 
                             <div class="mt-3 space-y-1">
                                 <x-responsive-nav-link :href="route('profile.edit')">
                                     {{ __('Profile') }}
                                 </x-responsive-nav-link>
                 
                                 <!-- Authentication -->
                                 <form method="POST" action="{{ route('logout') }}">
                                     @csrf
                 
                                     <x-responsive-nav-link :href="route('logout')"
                                             onclick="event.preventDefault();
                                                         this.closest('form').submit();">
                                         {{ __('Log Out') }}
                                     </x-responsive-nav-link>
                                 </form>
                             </div>
                         </div>
                     </div>
                 </nav>                 
                    @else
                      <div class="flex">
                        <a href="{{ route('login') }}" class="btn btn-info">Log in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="btn btn-success ml-1">Register</a>
                        @endif
                      </div>
                   @endauth
               </div>
           @endif
            </li>
             </ul>
          </div>
       </nav>
    </div>
 </header>
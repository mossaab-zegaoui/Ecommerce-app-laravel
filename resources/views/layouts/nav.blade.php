<section id="header">
    <a href="{{ route('home') }}"><img src="{{ asset('img/logo1.png') }}" alt="" class="logo"></a>
    <div>
        <ul id="navbar">
            <li><a href="{{ route('home') }}" class="active" id="link1">Home</a></li>
            <li><a href="{{ route('shops.index') }}" id="link2" class="">Shop</a></li>
            <li><a href="{{ route('blog') }}" id="link3">Blog</a></li>
            <li><a href="{{ route('about') }}" id="link4">About</a></li>
            <li><a href="{{ route('contact') }}" id="link5">Contact us</a></li>
            <li><a href="{{ route('shops.cart') }}" id="link6">
                    <i class="bi bi-bag"> ({{ Cart::content()->count();}}) </i>
                </a>
            </li>
            <li class="dropdown">
                <a href="#" id="dropdownMenuLink" data-bs-toggle="dropdown">
                    <i class="bi bi-person"></i>
                    <ul class="dropdown-menu">
                        @guest
                        @if (Route::has('login'))
                        <li>
                            <a class="dropdown-item" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        @endif
                        @if (Route::has('register'))
                        <li>
                            <a class="dropdown-item" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        @endif
                        @else
                        <li>
                            <a class="dropdown-item" href="#">{{ Auth::user()->name }}</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </li>
                        @endguest
                    </ul>
                </a>
            </li>
        </ul>
    </div>
</section>
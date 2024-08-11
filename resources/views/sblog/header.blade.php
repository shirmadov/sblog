<header class="header">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a class="sblog__logo__link" href="{{route('read')}}">
                    <img class="sblog__logo" src="{{ asset('img/logo/logo.png') }}" alt="Sblog logo">
                    <span>Sblog</span>
                </a>
            </div>
            @auth
                @if(Route::currentRouteName() =='read')
                <div class="search_main">
                    <input class="search__bar" type="text" placeholder="Search Sblog"/>
                </div>
                @endif
            @endauth
            <div class="mobile-menu-icon" id="mobile-menu-icon">
                <div class="menu-bar"></div>
                <div class="menu-bar"></div>
                <div class="menu-bar"></div>
            </div>
            <div class="mobile-close-icon" id="mobile-close-icon">
                &times;
            </div>
            <nav class="nav" id="nav">
                @if (Route::has('login'))
                    @auth
                        <img class="avatar js__avatar" id="js__avatar" src="{{ asset('img/profile/elon.jpg') }}" alt="">
                        <div class="drop__menu js__drop__menu">
                            <div class="drop__profile">
                                <img class="drop__avatar js__avatar" id="js__avatar"
                                     src="{{ asset('img/profile/elon.jpg') }}" alt="">
                                <span class="drop__user__name">Elon Musk</span>
                                <span class="drop__user__email">elon@musk.com</span>
                            </div>
                            <hr>
                            <ul class="drop__settings">
                                <li><a href="{{route('write')}}">{{__('Write your story')}}</a></li>
                                <li>Your stories</li>
                                <li>Your stats</li>
                                <li>Settings</li>
                                <li>Help</li>
                                <li>
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <x-dropdown-link :href="route('logout')"
                                                         onclick="event.preventDefault();
                                                                    this.closest('form').submit();">
                                            {{ __('Sign out') }}
                                        </x-dropdown-link>
                                    </form>
                                </li>
                            </ul>
                        </div>
                    @else
                        <a class="nav__link" href="#">Our Story</a>
                        <a class="nav__link" href="#">Write</a>
                        <a href="{{ route('login') }}" class="nav__link">Sign in</a>
                        @if (Route::has('register'))
                            <a href="{{ route('register') }}" class="nav__link get__started">Get Started</a>
                        @endif
                    @endauth
                @endif
            </nav>
        </div>
    </div>
</header>

<header class="header" style="  background-color: #66F0A8;">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <img class="sblog__logo" src="{{ asset('img/logo/logo.png') }}" alt="Sblog logo">
                <span>Sblog</span>
            </div>
            @auth
                <div class="search_main">
                    <input class="search__bar" type="text" placeholder="Search Sblog"/>
                </div>
            @endauth
            <nav>
                @if (Route::has('login'))
                    @auth
                        <img class="avatar" src="{{ asset('img/profile/elon.jpg') }}" alt="">
{{--                        <form method="POST" action="{{ route('logout') }}">--}}
{{--                            @csrf--}}

{{--                            <x-dropdown-link :href="route('logout')"--}}
{{--                                             onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                {{ __('Log Out') }}--}}
{{--                            </x-dropdown-link>--}}
{{--                        </form>--}}
                    @else
                        <a class="nav__link" href="">Our Story</a>
                        <a class="nav__link" href="">Write</a>
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

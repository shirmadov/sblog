<header class="header" style="  background-color: #66F0A8;">
    <div class="container">
        <div class="header__inner">
            <div class="header__logo">
                <a class="sblog__logo__link" href="{{route('dashboard')}}">
                    <img class="sblog__logo" src="{{ asset('img/logo/logo.png') }}" alt="Sblog logo">
                    <span>Sblog</span>
                </a>
            </div>
            @auth
                <div class="search_main">
                    <input class="search__bar" type="text" placeholder="Search Sblog"/>
                </div>
            @endauth
            <nav>
                @if (Route::has('login'))
                    @auth
                            <img class="avatar js__avatar" id="js__avatar" src="{{ asset('img/profile/elon.jpg') }}" alt="">
                            <div class="drop__menu js__drop__menu">
                                <div class="" style="display: inline-block;">
                                    <img class="drop__avatar js__avatar" id="js__avatar" src="{{ asset('img/profile/elon.jpg') }}"
                                         alt="">
                                    <span class="drop__user__name">Elon Musk</span>
                                    <span class="drop__user__email">elon@musk.com</span>
                                </div>
                                <hr>
                                <ul class="drop__settings">
                                    <li><a href="{{route('editor')}}">{{__('Write your story')}}</a></li>
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

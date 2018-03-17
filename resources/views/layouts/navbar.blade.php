<div class="top-left col-sm-3 col-md-3">
    <a href="/">
        <img class="img-fluid" src="/credito_logo.png" alt="">
    </a>
</div>
@guest
<div class="navbar top-right col-md-offset-6 col-md-3">
    <div class="links">
        <a href="/">Home</a>


        @else
            <div class="navbar top-right col-md-offset-2 col-md-7">
                <div class="links">
                    <a href="/">Home</a>
                    <a href="/organisaties">Organisaties</a>
                    <a href="#">Veilig betalen</a>
                    @endguest

                    @if (Route::has('login'))
                        @auth
                        <a href="{{ url('/mijn_credito') }}">Mijn credito</a>

                        {{--After login, show and activate logout--}}
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                        {{--End logout--}}
                    @else
                        <a href="{{ route('login') }}">Login</a>
                        @endauth
                    @endif
                </div>
            </div>
    </div>
</div>

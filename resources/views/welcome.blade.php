
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @auth
                        <a href="{{ url('/home') }}">Home</a>
                    @else
                        <a href="{{ route('login') }}">Login</a>

                        @if (Route::has('register'))
                            <a href="{{ route('register') }}">Register</a>
                        @endif
                    @endauth
                </div>
            @endif

            <div class="content">
                <div class="title m-b-md">
                ration card 
                </div>
                <div class="links">
                <a href="https://larvel.com/docs">Docs</a>
                <a href="https://larvacasts.com">LarvaCasts</a>
                <a href="https://larvel-news.com">News</a>
                <a href="https://blog.larvel.com">Nova</a>
                <a href="https://forge.larvel.com/docs">Forge</a>
                <a href="https://vapor.larvel.com">Vapor</a>
                <a href="https://gitub.com/larvel/larvel">GituHub</a>
                </div>
        </div>
    </body>
</html>
<header class="top-navigation">
    <div class="top-navigation-logo">
        <a href="{{ route('home') }}">
            <img class="logo" src="/images/laravel-io-logo.png">
        </a>
    </div>
    <nav>
        <ul>
            <li>
                <a class="{{ Request::is('forum*') ? 'active' : null }}" href="{{ action('Forum\ForumThreadsController@getIndex') }}">讨论</a>
            </li>
            <li>
                <a href="https://larajobs.com?partner=28">招聘</a>
            </li>
            <li>
                <a class="{{ Request::is('chat*') ? 'active' : null }}" href="{{ action('ChatController@getIndex') }}">聊天室</a>
            </li>
            <li>
                <a href="{{ action('PastesController@getCreate') }}">博客收录</a>
            </li>
            <li>
                <a href="http://www.laravelpodcast.com">电台</a>
            </li>

            @if (Auth::check() && Auth::user()->hasRole('manage_users'))
                <li>
                    <a href="{{ action('Admin\UsersController@getIndex') }}">后台</a>
                </li>
            @endif
        </ul>
    </nav>
    <ul class="user-navigation">
        @if (Auth::check())
            <li><a href="{{ route('user', Auth::user()->name) }}">{{ Auth::user()->name }}</a></li>
            <li><a class="button" href="{{ route('logout') }}">退出</a></li>
        @else
            <li><a class="button" href="{{ route('login') }}">GitHub 登陆</a></li>
        @endif
    </ul>
</header>

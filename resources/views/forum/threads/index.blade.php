@extends('layouts._two_columns_left_sidebar')

@section('sidebar')
    @include('forum._sidebar')
@stop

@section('content')
    <section class="forum">
        <div class="header">
            <h1>讨论</h1>

            {{-- Display select tags --}}
            @if (Input::get('tags', null))
                <div class="tags">
                    {{{ Input::get('tags') }}}
                </div>
            @endif

            <a class="button" href="{{ action('Forum\ForumThreadsController@getCreateThread') }}">发布讨论</a>
        </div>

        <div class="filter">
            <p>显示:</p>
            <ul>
                <li><a href="{{{ action('Forum\ForumThreadsController@getIndex', '') . $queryString }}}" class="{{ Request::path() == 'forum' ? 'current' : '' }}">所有</a></li>
                <li><a href="{{{ action('Forum\ForumThreadsController@getIndex', 'open') . $queryString }}}" class="{{ Request::is('forum/open') ? 'current' : '' }}">未解决</a></li>
                <li><a href="{{{ action('Forum\ForumThreadsController@getIndex', 'solved') . $queryString }}}" class="{{ Request::is('forum/solved') ? 'current' : '' }}">已解决</a></li>
            </ul>
        </div>

        <div class="threads">
            {{-- Loop over the threads and display the thread summary partial --}}
            @each('forum.threads._index_summary', $threads, 'thread')

            {{-- If no comments are found display a message --}}
            @if (! $threads->count())
                <div class="empty-state">
                    @if (Input::get('tags'))
                        <h3>{{{ Input::get('tags') }}} 下暂时没有新的讨论哦</h3>
                    @else
                        <h3>暂时没有讨论</h3>
                    @endif
                    <a class="button" href="{{ action('Forum\ForumThreadsController@getCreateThread') }}">发布一条</a>
                </div>
            @endif
        </div>

        <div class="pagination">
            {!! $threads->render() !!}
        </div>
    </section>
@stop

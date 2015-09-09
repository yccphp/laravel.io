@extends('layouts._one_column')

@section('content')
    <section class="auth">
        <h1>创建账户.</h1>

        <div class="user">
            {!! Form::open() !!}
                <div class="bio">
                    <p><img src="{{ $githubData['image_url'] }}"/></p>

                    <p>
                        {!! Form::label('name', 'Username') !!}
                        {!! Form::text('name', Input::old('name', $githubData['name'])) !!}
                    </p>

                    @if ($errors->has('name'))
                        <p>{!! $errors->first('name') !!}</p>
                    @endif

                    <p>
                        {!! Form::label('email') !!}
                        {!! Form::email('email', Input::old('email', $githubData['email'])) !!}
                    </p>

                    @if ($errors->has('email'))
                        <p>{!! $errors->first('email') !!}</p>
                    @endif

                    {!! Form::submit('创建我的 Laravel.ren 账户', ['class' => 'button']) !!}
                </div>
            {!! Form::close() !!}
        </div>
    </section>
@stop

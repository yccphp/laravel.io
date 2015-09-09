<section class="alert">
    @if (Session::has('success'))
        <div data-alert class="alert-box success">
            {!! implode('<br />', (array) Session::pull('success')) !!}
        </div>
    @endif

    @if (Session::has('error'))
        <div data-alert class="alert-box alert">
            {!! implode('<br />', (array) Session::pull('error')) !!}
        </div>
    @endif

    {{-- Laravel Form Errors --}}
    @if ($errors->count() > 0)
        <div data-alert class="alert-box alert">
            请检查表单，修正错误.
        </div>
    @endif
</section>

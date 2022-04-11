<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    {!! HTML::style('kc_bootstrap/css/bootstrap.min.css') !!}
    {!! HTML::style('css/kc_style.css') !!}

    <title>ToDo App</title>
</head>

<body>
    @include('partials.navbar')
    <div class="container">
        @yield('content')
    </div>
    @include('partials.footer')
    {!! HTML::script('js/jquery.min.js') !!}
    {!! HTML::script('kc_bootstrap/js/bootstrap.min.js') !!}
    {!! HTML::script('js/kc_script.js') !!}
</body>

</html>

<!doctype html>
<html>
<head>
    @include('includes.head')
</head>
<body>
<div class="container">

    <header class="row">
        <div class="col-sm-12">
            @include('includes.header')
        </div>
    </header>

    <div id="main" class="row">
            @yield('content')
    </div>

    <footer class="row ">
        @include('includes.footer')
    </footer>

</div>
</body>
</html>
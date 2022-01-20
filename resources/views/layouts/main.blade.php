<!doctype html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>@yield('title-head')</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
        <link rel="stylesheet" href="{{ asset('css/main.css') }}">
    </head>
    <body>
        <div class="container py-3">
            @include('includes/header')
            <div class="pricing-header p-3 pb-md-4 mx-auto text-center">
                <h1 class="display-4 fw-normal">@yield('page-title')</h1>
            </div>
            <div class="row">
                @include('includes/messages')
                <div class="col-3">
                    @include('includes/aside')
                </div>
                <div class="col-9">
                    @yield('content')
                </div>
                @include('includes/footer')
            </div>
        </div>
    </body>
</html>



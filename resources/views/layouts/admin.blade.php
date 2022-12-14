<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin/admin.css')}}">
    <link rel="stylesheet" href="{{asset('css/pages/admin/partials/navAdmin.css')}}">
</head>
<body>
    @include('admin.partials.nav')

    <main class="admin-main">

        @yield('content')
    </main>
</body>
</html>
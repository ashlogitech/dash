<!-- resources/views/layouts/admin-layout.blade.php -->
<!DOCTYPE html>
<html>
    
<head>
    
    <title>@yield('title')</title>
    <!-- Add your CSS and JavaScript links here -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
</head>
<body>
    @yield('content')
</body>
</html>


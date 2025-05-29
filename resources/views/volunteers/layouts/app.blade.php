<!DOCTYPE html>
<html lang="ar">
<head>
    <meta charset="UTF-8">
    <title>control pannel</title>
</head>
<body>
    <nav>
        <a href="{{ route('volunteers.index') }}">volunteers</a>
        <!-- روابط للكيانات الأخرى -->
    </nav>
    <hr>
    <div>
        @yield('content')
    </div>
</body>
</html>

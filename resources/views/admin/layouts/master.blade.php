<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Admin Panel')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header>
        <nav>
            <ul>
                <li><a href="{{ url('/admin/dashboard') }}">Dashboard</a></li>
                <li><a href="{{ url('/admin/orders') }}">Orders</a></li>
                <li><a href="{{ url('/admin/vendors') }}">Vendors</a></li>
                <li><a href="{{ url('/admin/products') }}">Products</a></li>
                <li><a href="{{ url('/admin/categories') }}">Categories</a></li>
                <li><a href="{{ url('/admin/payments') }}">Payments</a></li>
            </ul>
        </nav>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <p>&copy; {{ date('Y') }} SmartDealHub. All rights reserved.</p>
    </footer>
</body>
</html>
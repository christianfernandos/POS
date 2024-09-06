<!-- resources/views/home.blade.php -->
<html>
    <body>
        <h1>Selamat Datang di Aplikasi POS</h1>
        <p>Ini adalah halaman awal website Point of Sales.</p>
        <nav>
            <ul>
                <li><a href="{{ route('category.food-beverage') }}">Makanan & Minuman</a></li>
                <li><a href="{{ route('category.beauty-health') }}">Kecantikan & Kesehatan</a></li>
                <li><a href="{{ route('category.home-care') }}">Perawatan Rumah</a></li>
                <li><a href="{{ route('category.baby-kid') }}">Bayi & Anak</a></li>
                <li><a href="{{ route('sales') }}">Penjualan</a></li>
            </ul>
        </nav>
    </body>
</html>
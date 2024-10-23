@extends('homelylayouts.template')

@section('content')

<!-- Konten Tambahan Sebelum Bagian Jenis-Jenis -->
<section class="intro">
    <div class="container">
        <h1>Selamat Datang di Toko Kami</h1>
        <p>Kami menawarkan berbagai produk dan layanan untuk meningkatkan kenyamanan dan gaya hidup Anda di rumah. 
        Dari desain interior, properti, hingga teknologi rumah pintar, kami memiliki segala yang Anda butuhkan untuk menciptakan rumah impian Anda. 
        Jelajahi koleksi kami dan temukan produk yang paling sesuai dengan kebutuhan dan gaya Anda.</p>
        <a href="#top-products" class="cta-button">Jelajahi Produk Kami</a>
    </div>
</section>

<div class="scroll-container">

    <!-- Desain Interior Section -->
    <article class="box interior-design">
        <h2>Desain Interior</h2>
        <img src="{{ asset('images/interior-design.png') }}" alt="Desain Interior" class="section-image">
        <p>Kami menawarkan berbagai solusi desain interior untuk rumah Anda. Jadikan setiap sudut rumah Anda terasa lebih hidup dan menarik.</p>
        <a href="#" class="cta-button">Pelajari Lebih Lanjut</a>
    </article>

    <!-- Properti Section -->
    <article class="box properties">
        <h2>Properti</h2>
        <img src="{{ asset('images/properti.png') }}" alt="Properti" class="section-image">
        <p>Temukan berbagai pilihan properti yang sesuai dengan kebutuhan Anda. Dari rumah impian hingga apartemen modern, kami membantu Anda menemukan tempat tinggal yang sempurna.</p>
        <a href="#" class="cta-button">Lihat Properti</a>
    </article>

    <!-- Furniture & Aksesoris Section -->
    <article class="box furniture-accessories">
        <h2>Furniture & Aksesoris</h2>
        <img src="{{ asset('images/furniture.png') }}" alt="Furniture & Aksesoris" class="section-image">
        <p>Temukan pilihan furniture dan aksesoris terbaik untuk melengkapi dekorasi rumah Anda.</p>
        <a href="#" class="cta-button">Lihat Koleksi</a>
    </article>

    <!-- Smart Home Devices Section -->
    <article class="box smart-home-devices">
        <h2>Smart Home Devices</h2>
        <img src="{{ asset('images/smart-home.png') }}" alt="Smart Home Devices" class="section-image">
        <p>Teknologi rumah pintar untuk meningkatkan kenyamanan dan keamanan di rumah Anda. Mulai dari kunci pintar, pencahayaan otomatis, hingga sistem keamanan canggih.</p>
        <a href="#" class="cta-button">Pelajari Lebih Lanjut</a>
    </article>

    <!-- Peralatan Rumah Tangga Section -->
    <article class="box home-appliances">
        <h2>Peralatan Rumah Tangga</h2>
        <img src="{{ asset('images/home-appliances.png') }}" alt="Peralatan Rumah Tangga" class="section-image">
        <p>Lengkapi rumah Anda dengan peralatan rumah tangga modern yang memudahkan pekerjaan sehari-hari, mulai dari dapur hingga ruang tamu.</p>
        <a href="#" class="cta-button">Lihat Produk</a>
    </article>

    <!-- Pakaian Rumah (Homewear) Section -->
    <article class="box homewear">
        <h2>Pakaian Rumah (Homewear)</h2>
        <img src="{{ asset('images/homewear.png') }}" alt="Pakaian Rumah (Homewear)" class="section-image">
        <p>Kenakan pakaian rumah yang nyaman dan bergaya saat bersantai di rumah. Koleksi homewear kami dirancang untuk kenyamanan Anda.</p>
        <a href="#" class="cta-button">Lihat Koleksi</a>
    </article>

</div>

<!-- Bagian Top Barang yang Sering Dibeli -->
<section class="top-products" id="top-products">
    <div class="container">
        <h2>Top Barang yang Sering Dibeli</h2>
        <div class="grid-scroll-container">

            <!-- Barang 1 -->
            <article class="grid-item">
                <img src="{{ asset('images/smart-lamp.png') }}" alt="Smart Lamp" class="grid-image">
                <h3>Smart Lamp</h3>
                <p>Lampu pintar dengan kontrol otomatis melalui smartphone. Cocok untuk rumah modern.</p>
                <a href="#" class="cta-button">Beli Sekarang</a>
            </article>

            <!-- Barang 2 -->
            <article class="grid-item">
                <img src="{{ asset('images/sofa-minimalis.png') }}" alt="Sofa Minimalis" class="grid-image">
                <h3>Sofa Minimalis</h3>
                <p>Sofa minimalis yang elegan dan nyaman, cocok untuk ruang tamu Anda.</p>
                <a href="#" class="cta-button">Beli Sekarang</a>
            </article>

            <!-- Barang 3 -->
            <article class="grid-item">
                <img src="{{ asset('images/smart-lock.png') }}" alt="Kunci Pintar" class="grid-image">
                <h3>Kunci Pintar</h3>
                <p>Kunci pintar dengan fitur keamanan tinggi, memberikan akses mudah dan aman ke rumah Anda.</p>
                <a href="#" class="cta-button">Beli Sekarang</a>
            </article>

            <!-- Barang 4 -->
            <article class="grid-item">
                <img src="{{ asset('images/kasur-premium.png') }}" alt="Kasur Premium" class="grid-image">
                <h3>Kasur Premium</h3>
                <p>Kasur premium yang memberikan kenyamanan tidur terbaik sepanjang malam.</p>
                <a href="#" class="cta-button">Beli Sekarang</a>
            </article>

            <!-- Barang 5 -->
            <article class="grid-item">
                <img src="{{ asset('images/mesin-kopi.png') }}" alt="Mesin Kopi" class="grid-image">
                <h3>Mesin Kopi</h3>
                <p>Mesin kopi modern untuk membuat kopi dengan mudah di rumah.</p>
                <a href="#" class="cta-button">Beli Sekarang</a>
            </article>

        </div>
    </div>
</section>

@endsection

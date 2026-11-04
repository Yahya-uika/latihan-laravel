@extends('layouts.app')

@section('title', 'Berita dan Kegiatan')
@section('description', 'Kabar kegiatan pendidikan, dakwah, dan sosial Hidayatullah Depok.')

@section('content')
    <section class="page-hero">
        <div class="hero-inner">
            <p class="eyebrow">Berita & kegiatan</p>
            <h1>Berbagi kabar,<br>merawat kebersamaan.</h1>
            <p class="hero-copy">Cerita tentang kegiatan, pembelajaran, dan semangat berbagi di sekitar Hidayatullah Depok.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <p class="eyebrow">Kabar Hidayatullah Depok</p>
            <h2 class="section-title">Cerita dari sekitar kita.</h2>
            <p class="section-copy">Ikuti ragam kegiatan yang menghubungkan pendidikan, dakwah, dan kepedulian sosial.</p>
            <div class="story-list">
                <article class="story"><img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=800&q=80" alt="Kebersamaan warga dalam sebuah kegiatan" loading="lazy"><div><p class="news-meta">KEGIATAN · KABAR KOMUNITAS</p><h2>Menguatkan silaturahmi dan semangat belajar bersama</h2><p>Ruang perjumpaan untuk bertukar ilmu, saling menguatkan, dan menumbuhkan kepedulian di tengah masyarakat.</p></div></article>
                <article class="story"><img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="Suasana belajar di ruang kelas" loading="lazy"><div><p class="news-meta">PENDIDIKAN · RUANG BELAJAR</p><h2>Belajar dengan gembira, bertumbuh dengan bermakna</h2><p>Pendidikan yang baik membuka ruang bagi setiap anak untuk mengenali potensi dan mengasah karakter.</p></div></article>
                <article class="story"><img src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=800&q=80" alt="Relawan bekerja sama dalam kegiatan sosial" loading="lazy"><div><p class="news-meta">SOSIAL · PENGABDIAN</p><h2>Berbagi kebaikan, menghadirkan manfaat yang lebih luas</h2><p>Kolaborasi dan kepedulian menjadi langkah kecil yang berarti bagi lingkungan di sekitar kita.</p></div></article>
            </div>
        </div>
    </section>
    <section class="section section--soft">
        <div class="container intro-grid">
            <div><p class="eyebrow">Punya kabar untuk dibagikan?</p><h2 class="section-title">Mari ceritakan kebaikan bersama.</h2><p class="section-copy">Untuk informasi kegiatan atau kolaborasi publikasi, silakan hubungi sekretariat Hidayatullah Depok.</p></div>
            <div><img src="https://images.unsplash.com/photo-1529156069898-49953e39b3ac?auto=format&fit=crop&w=1000&q=85" alt="Sukarelawan berdiskusi dalam kegiatan komunitas" loading="lazy" style="width: 100%; height: 300px; object-fit: cover"></div>
        </div>
    </section>
@endsection
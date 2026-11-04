@extends('layouts.app')

@section('title', 'Beranda')
@section('description', 'Hidayatullah Depok, tumbuh dalam ilmu dan mengabdi untuk umat.')

@section('content')
    <section class="home-hero">
        <div class="hero-inner">
            <p class="eyebrow">Bersama membangun peradaban</p>
            <h1>Tumbuh dalam ilmu,<br>mengabdi untuk <em>umat.</em></h1>
            <p class="hero-copy">Hidayatullah Depok hadir untuk menumbuhkan generasi yang beriman, berilmu, dan memberi manfaat bagi lingkungan sekitarnya.</p>
            <div class="hero-actions">
                <a class="button" href="{{ route('about', absolute: false) }}">Kenali Kami <span class="arrow" aria-hidden="true">→</span></a>
                <a class="button button--outline" href="{{ route('programs', absolute: false) }}">Lihat Program</a>
            </div>
            <p class="hero-note">Mendidik dengan keteladanan, bergerak bersama masyarakat</p>
        </div>
    </section>
    <section class="section">
        <div class="container intro-grid">
            <div class="intro-visual">
                <img class="intro-photo" src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=1000&q=85" alt="Suasana masjid sebagai ruang ibadah dan belajar" loading="lazy">
                <img class="intro-photo-frame" src="https://images.unsplash.com/photo-1523050854058-8df90110c9f1?auto=format&fit=crop&w=700&q=80" alt="Pelajar merayakan pencapaian pendidikan" loading="lazy">
                <span class="intro-caption">BERKHIDMAT UNTUK MASYARAKAT</span>
            </div>
            <div>
                <p class="eyebrow">Tentang Hidayatullah Depok</p>
                <h2 class="section-title">Membina insan, menguatkan masyarakat.</h2>
                <p class="section-copy">Ikhtiar dakwah dan pendidikan yang mengedepankan nilai keislaman, pembinaan karakter, serta kepedulian sosial. Perubahan baik tumbuh dari ilmu, keteladanan, dan kerja bersama.</p>
                <a class="text-link" href="{{ route('about', absolute: false) }}">Kenali lebih dekat <span aria-hidden="true">→</span></a>
                <div class="values" aria-label="Nilai utama">
                    <div class="value"><strong>Keimanan</strong><span>Landasan setiap langkah</span></div>
                    <div class="value"><strong>Pendidikan</strong><span>Bekal masa depan</span></div>
                    <div class="value"><strong>Pengabdian</strong><span>Manfaat bagi sesama</span></div>
                </div>
            </div>
        </div>
    </section>
    <section class="section program-band">
        <div class="container">
            <p class="eyebrow">Pendidikan & pembinaan</p>
            <h2 class="section-title">Ruang tumbuh untuk setiap generasi.</h2>
            <p class="section-copy">Program pendidikan dan dakwah untuk menemani perjalanan belajar dari usia dini hingga dewasa.</p>
            <div class="program-grid">
                <article class="program-card"><span class="program-number">01</span><h3>Pendidikan Anak</h3><p>Menumbuhkan rasa ingin tahu, kemandirian, dan akhlak baik sejak usia dini.</p></article>
                <article class="program-card"><span class="program-number">02</span><h3>Generasi Muda</h3><p>Mendampingi generasi muda mengembangkan ilmu, karakter, dan kepemimpinan.</p></article>
                <article class="program-card"><span class="program-number">03</span><h3>Dakwah & Pembinaan</h3><p>Menghadirkan ruang belajar dan silaturahmi yang menguatkan masyarakat.</p></article>
            </div>
            <a class="button" href="{{ route('programs', absolute: false) }}" style="margin-top: 28px">Jelajahi Program <span class="arrow" aria-hidden="true">→</span></a>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <p class="eyebrow">Kabar terbaru</p>
            <h2 class="section-title">Cerita dari sekitar kita.</h2>
            <div class="news-grid">
                <article class="news-card"><div class="news-image-wrap"><img class="news-image" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=800&q=80" alt="Kebersamaan warga dalam sebuah kegiatan" loading="lazy"><span class="news-category">Kegiatan</span></div><p class="news-meta">Kabar Hidayatullah Depok</p><h3>Menguatkan silaturahmi dan semangat belajar bersama</h3></article>
                <article class="news-card"><div class="news-image-wrap"><img class="news-image" src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=800&q=80" alt="Suasana belajar di ruang kelas" loading="lazy"><span class="news-category">Pendidikan</span></div><p class="news-meta">Kabar Hidayatullah Depok</p><h3>Belajar dengan gembira, bertumbuh dengan bermakna</h3></article>
                <article class="news-card"><div class="news-image-wrap"><img class="news-image" src="https://images.unsplash.com/photo-1469571486292-0ba58a3f068b?auto=format&fit=crop&w=800&q=80" alt="Relawan bekerja sama dalam kegiatan sosial" loading="lazy"><span class="news-category">Sosial</span></div><p class="news-meta">Kabar Hidayatullah Depok</p><h3>Berbagi kebaikan, menghadirkan manfaat yang lebih luas</h3></article>
            </div>
            <a class="text-link" href="{{ route('news', absolute: false) }}">Lihat semua berita <span aria-hidden="true">→</span></a>
        </div>
    </section>
@endsection
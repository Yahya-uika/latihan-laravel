@extends('layouts.app')

@section('title', 'Program')
@section('description', 'Program pendidikan, pembinaan generasi muda, dan dakwah Hidayatullah Depok.')

@section('content')
    <section class="page-hero">
        <div class="hero-inner">
            <p class="eyebrow">Program pendidikan & pembinaan</p>
            <h1>Ruang tumbuh untuk setiap generasi.</h1>
            <p class="hero-copy">Mendampingi perjalanan belajar, memperkuat karakter, dan membuka ruang pengabdian.</p>
        </div>
    </section>
    <section class="section">
        <div class="container">
            <p class="eyebrow">Jelajahi program</p>
            <h2 class="section-title">Belajar dan bertumbuh bersama.</h2>
            <p class="section-copy">Berbagai bentuk pendidikan dan pembinaan hadir untuk menjawab kebutuhan keluarga serta masyarakat di setiap tahap kehidupan.</p>
            <div class="program-grid program-grid--light">
                <article class="program-card"><span class="program-number">01</span><h3>Pendidikan Anak</h3><p>Lingkungan belajar yang mendukung rasa ingin tahu, kemandirian, kebiasaan baik, serta perkembangan potensi anak.</p><a href="{{ route('contact', absolute: false) }}">Tanyakan informasi <span class="arrow" aria-hidden="true">→</span></a></article>
                <article class="program-card"><span class="program-number">02</span><h3>Pembinaan Generasi Muda</h3><p>Pendampingan untuk menguatkan ilmu, akhlak, kepemimpinan, dan kepedulian sosial generasi muda.</p><a href="{{ route('contact', absolute: false) }}">Tanyakan informasi <span class="arrow" aria-hidden="true">→</span></a></article>
                <article class="program-card"><span class="program-number">03</span><h3>Dakwah & Kajian</h3><p>Ruang belajar dan silaturahmi yang memperluas pemahaman keislaman serta menguatkan kebersamaan.</p><a href="{{ route('contact', absolute: false) }}">Tanyakan informasi <span class="arrow" aria-hidden="true">→</span></a></article>
                <article class="program-card"><span class="program-number">04</span><h3>Pembinaan Keluarga</h3><p>Penguatan peran keluarga melalui kegiatan yang mendorong komunikasi, keteladanan, dan tumbuh bersama.</p><a href="{{ route('contact', absolute: false) }}">Tanyakan informasi <span class="arrow" aria-hidden="true">→</span></a></article>
                <article class="program-card"><span class="program-number">05</span><h3>Kegiatan Sosial</h3><p>Kolaborasi dan kepedulian warga untuk menghadirkan dukungan yang berarti di lingkungan sekitar.</p><a href="{{ route('contact', absolute: false) }}">Tanyakan informasi <span class="arrow" aria-hidden="true">→</span></a></article>
                <article class="program-card"><span class="program-number">06</span><h3>Kolaborasi Masyarakat</h3><p>Ruang kerja sama bagi komunitas dan mitra yang ingin bersama-sama menebar kebaikan.</p><a href="{{ route('contact', absolute: false) }}">Tanyakan informasi <span class="arrow" aria-hidden="true">→</span></a></article>
            </div>
        </div>
    </section>
    <section class="section section--soft">
        <div class="container intro-grid">
            <div><p class="eyebrow">Informasi program</p><h2 class="section-title">Temukan kegiatan yang sesuai untuk Anda.</h2><p class="section-copy">Jadwal dan ketersediaan program dapat berbeda. Hubungi sekretariat untuk memperoleh informasi terbaru sebelum berkunjung.</p><a class="button" style="margin-top: 24px" href="{{ route('contact', absolute: false) }}">Kontak sekretariat <span class="arrow" aria-hidden="true">→</span></a></div>
            <img src="https://images.unsplash.com/photo-1509062522246-3755977927d7?auto=format&fit=crop&w=1000&q=85" alt="Ruang kelas yang siap digunakan untuk belajar" loading="lazy" style="width: 100%; height: 340px; object-fit: cover">
        </div>
    </section>
@endsection
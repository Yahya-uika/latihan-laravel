@extends('layouts.app')

@section('title', 'Tentang Kami')
@section('description', 'Kenali ikhtiar dakwah, pendidikan, dan pengabdian Hidayatullah Depok.')

@section('content')
    <section class="page-hero">
        <div class="hero-inner">
            <p class="eyebrow">Tentang Hidayatullah Depok</p>
            <h1>Membina insan,<br>menguatkan masyarakat.</h1>
            <p class="hero-copy">Berangkat dari keyakinan bahwa pendidikan dan keteladanan dapat menghadirkan kebaikan yang berkelanjutan.</p>
        </div>
    </section>
    <section class="section">
        <div class="container intro-grid">
            <div class="intro-visual">
                <img class="intro-photo" src="https://images.unsplash.com/photo-1519817650390-64a93db51149?auto=format&fit=crop&w=1000&q=85" alt="Arsitektur masjid dengan cahaya alami" loading="lazy">
                <img class="intro-photo-frame" src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=700&q=80" alt="Masyarakat berkumpul dalam kegiatan bersama" loading="lazy">
                <span class="intro-caption">ILMU • IMAN • PENGABDIAN</span>
            </div>
            <div>
                <p class="eyebrow">Ikhtiar kami</p>
                <h2 class="section-title">Tumbuh bersama, memberi manfaat.</h2>
                <p class="section-copy">Hidayatullah Depok merupakan bagian dari ikhtiar dakwah dan pendidikan yang mengedepankan nilai keislaman, pembinaan karakter, serta kepedulian sosial. Kami berupaya hadir sebagai ruang belajar, bertumbuh, dan berkolaborasi bersama masyarakat.</p>
                <p class="section-copy">Setiap kegiatan berangkat dari semangat untuk memperkuat keluarga dan lingkungan melalui ilmu, keteladanan, dan pelayanan yang tulus.</p>
            </div>
        </div>
    </section>
    <section class="section section--soft">
        <div class="container">
            <p class="eyebrow">Nilai yang kami jaga</p>
            <h2 class="section-title">Prinsip dalam setiap langkah.</h2>
            <div class="principles">
                <article class="principle"><h3>Berlandaskan iman</h3><p>Menjadikan nilai-nilai Islam sebagai arah dalam pembinaan diri dan kehidupan bermasyarakat.</p></article>
                <article class="principle"><h3>Belajar sepanjang hayat</h3><p>Membuka ruang untuk terus bertanya, memahami, dan mengembangkan potensi setiap generasi.</p></article>
                <article class="principle"><h3>Mengabdi dengan tulus</h3><p>Merawat kepedulian dan gotong royong agar ilmu menghadirkan manfaat bagi sesama.</p></article>
            </div>
            <a class="text-link" href="{{ route('contact', absolute: false) }}">Bertumbuh bersama kami <span aria-hidden="true">→</span></a>
        </div>
    </section>
@endsection
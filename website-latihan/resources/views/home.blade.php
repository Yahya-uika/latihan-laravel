@extends('layouts.app')

@section('title', 'Angkatan 14 Al-Muntadhorun')
@section('description', 'Angkatan 14 Al-Muntadhorun, Ma\'had Ahlus Shuffah. Tekad Api Perubahan Mewujudkan Generasi Qur\'ani.')

@section('content')
    <section class="cohort-hero" id="beranda">
        <div class="cohort-hero-inner">
            <div class="cohort-hero-copy">
                <p class="cohort-kicker">Ma'had Ahlus Shuffah · Angkatan 14</p>
                <h1>Al-<em>Muntadhorun</em></h1>
                <p class="cohort-arabic" lang="ar" dir="rtl">الْمُنْتَظَرُونَ</p>
                <p class="cohort-motto">Tekad Api Perubahan Mewujudkan Generasi Qur'ani.</p>
                <div class="cohort-hero-links">
                    <a class="button" href="#profil">Jelajahi Angkatan <span class="arrow" aria-hidden="true">↓</span></a>
                    <a class="button button--outline" href="#porseni">Lihat Pencapaian</a>
                </div>
            </div>
            <div class="cohort-emblem"><img src="{{ asset('image/logo almuntazhorun.jpeg') }}" alt="Logo Angkatan 14 Al-Muntadhorun" fetchpriority="high"></div>
        </div>
    </section>
    <section class="section section--cohort" id="profil">
        <div class="container">
            <div class="section-heading"><div><p class="section-kicker">Identitas angkatan</p><h2 class="section-title">Satu nama, satu tekad.</h2></div><p class="section-copy">Profil singkat Angkatan 14 Al-Muntadhorun dari Ma'had Ahlus Shuffah.</p></div>
            <div class="profile-grid">
                <div class="profile-item"><span>Nama</span><strong>Angkatan 14 Al-Muntadhorun</strong></div>
                <div class="profile-item"><span>Ma'had</span><strong>Ma'had Ahlus Shuffah</strong></div>
                <div class="profile-item profile-item--motto"><span>Motto</span><strong>Tekad Api Perubahan Mewujudkan Generasi Qur'ani.</strong></div>
                <div class="profile-item"><span>Nama Arab</span><strong lang="ar" dir="rtl">الْمُنْتَظَرُونَ</strong></div>
            </div>
        </div>
    </section>
    <section class="section section--cohort program-band" id="perjalanan">
        <div class="container">
            <div class="section-heading"><div><p class="section-kicker">Catatan kebersamaan</p><h2 class="section-title">Perjalanan angkatan.</h2></div><p class="section-copy">Ruang untuk merawat cerita dan momen penting Angkatan 14.</p></div>
            <div class="timeline">
                <article class="timeline-item"><span class="timeline-index">01</span><h3>Awal perjalanan</h3><p>Catatan waktu dan cerita awal angkatan belum tersedia.</p></article>
                <article class="timeline-item"><span class="timeline-index">02</span><h3>Momen kebersamaan</h3><p>Dokumentasi perjalanan akan ditambahkan setelah tersedia.</p></article>
                <article class="timeline-item"><span class="timeline-index">03</span><h3>Langkah berikutnya</h3><p>Informasi lanjutan belum tersedia.</p></article>
            </div>
        </div>
    </section>
    <section class="section section--cohort section--soft" id="porseni">
        <div class="container">
            <div class="section-heading"><div><p class="section-kicker">Pencapaian</p><h2 class="section-title">PORSENI 2024</h2></div><p class="section-copy">PORSENI 2024 tercatat sebagai salah satu pencapaian Angkatan 14.</p></div>
            <article class="achievement"><span class="achievement-year">2024</span><h3>Pekan Olahraga dan Seni</h3><p>Rincian kegiatan, cabang, dan hasil PORSENI belum tersedia.</p></article>
        </div>
    </section>
    <section class="section section--cohort" id="osma">
        <div class="container">
            <div class="section-heading"><div><p class="section-kicker">Pencapaian</p><h2 class="section-title">OSMA 2024–2025</h2></div><p class="section-copy">OSMA 2024–2025 tercatat sebagai salah satu pencapaian Angkatan 14.</p></div>
            <article class="achievement"><span class="achievement-year">2024–2025</span><h3>OSMA</h3><p>Rincian kegiatan dan peran Angkatan 14 belum tersedia.</p></article>
        </div>
    </section>
    <section class="section section--cohort section--soft" id="galeri">
        <div class="container">
            <div class="section-heading"><div><p class="section-kicker">Dokumentasi</p><h2 class="section-title">Galeri Kenangan Al-Muntadhorun</h2></div><p class="section-copy">Kumpulan foto dan dokumentasi kegiatan Angkatan 14.</p></div>
            @if (count($galleryImages) > 0)
                <div class="gallery-grid">
                    @foreach ($galleryImages as $image)
                        <figure class="gallery-card">
                            <button class="gallery-trigger" type="button" data-gallery-image data-src="{{ $image['src'] }}" data-caption="{{ $image['caption'] }}" aria-label="Perbesar foto: {{ $image['caption'] }}">
                                <img src="{{ $image['src'] }}" alt="{{ $image['caption'] }}" loading="lazy" decoding="async">
                                <span class="gallery-trigger-label" aria-hidden="true">Lihat foto <span>↗</span></span>
                            </button>
                            <figcaption class="gallery-caption">{{ $image['caption'] }}</figcaption>
                        </figure>
                    @endforeach
                </div>
            @else
                <div class="empty-state"><strong>Foto galeri belum tersedia</strong><p>Tambahkan foto ke folder public/image/gallery untuk menampilkannya di sini.</p></div>
            @endif
                @if (count($galleryImages) > 0)
            <dialog class="gallery-lightbox" id="gallery-lightbox" aria-label="Foto galeri">
                <div class="gallery-lightbox-inner">
                    <div class="gallery-lightbox-bar">
                        <span>Kenangan Al-Muntadhorun</span>
                        <button class="gallery-lightbox-close" type="button" data-gallery-close aria-label="Tutup foto">×</button>
                    </div>
                    <img class="gallery-lightbox-image" data-gallery-preview alt="">
                    <p class="gallery-lightbox-caption" data-gallery-preview-caption></p>
                </div>
            </dialog>
            @endif
        </div>
    </section>
    <script>
        (() => {
            const lightbox = document.querySelector('#gallery-lightbox');

            if (!lightbox) {
                return;
            }

            const preview = lightbox.querySelector('[data-gallery-preview]');
            const caption = lightbox.querySelector('[data-gallery-preview-caption]');

            document.querySelectorAll('[data-gallery-image]').forEach((trigger) => {
                trigger.addEventListener('click', () => {
                    preview.src = trigger.dataset.src;
                    preview.alt = trigger.dataset.caption;
                    caption.textContent = trigger.dataset.caption;
                    lightbox.showModal();
                });
            });

            lightbox.querySelector('[data-gallery-close]').addEventListener('click', () => lightbox.close());
            lightbox.addEventListener('click', (event) => {
                if (event.target === lightbox) {
                    lightbox.close();
                }
            });
        })();
    </script>
    <section class="section section--cohort" id="anggota">
        <div class="container">
            <div class="section-heading"><div><p class="section-kicker">Keluarga angkatan</p><h2 class="section-title">Anggota.</h2></div><p class="section-copy">Ruang untuk mengenal anggota Angkatan 14 Al-Muntadhorun.</p></div>
            <div class="empty-state"><strong>Daftar anggota belum tersedia</strong><p>Nama anggota tidak ditampilkan sampai data yang terverifikasi tersedia.</p><span class="member-count">Angkatan 14</span></div>
        </div>
    </section>
@endsection
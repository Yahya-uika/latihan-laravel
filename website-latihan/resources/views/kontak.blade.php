@extends('layouts.app')

@section('title', 'Kontak')
@section('description', 'Informasi kontak dan wilayah layanan Hidayatullah Depok.')

@section('content')
    <section class="page-hero">
        <div class="hero-inner">
            <p class="eyebrow">Kontak Hidayatullah Depok</p>
            <h1>Mari tumbuh dan bergerak bersama.</h1>
            <p class="hero-copy">Kami terbuka untuk pertanyaan seputar program, kunjungan, maupun peluang kolaborasi.</p>
        </div>
    </section>
    <section class="section">
        <div class="container contact-grid">
            <div>
                <p class="eyebrow">Terhubung dengan kami</p>
                <h2 class="section-title">Ada yang ingin Anda ketahui?</h2>
                <p class="section-copy">Silakan hubungi sekretariat Hidayatullah di wilayah Depok untuk memperoleh informasi yang sesuai dengan kebutuhan Anda. Tim kami siap membantu mengarahkan pertanyaan tentang pendidikan, kegiatan, dan kerja sama.</p>
                <p class="contact-note">Alamat, jadwal layanan, dan kanal komunikasi resmi dapat dikonfirmasi melalui sekretariat setempat.</p>
                <div class="contact-actions"><a class="button" href="{{ route('programs', absolute: false) }}">Lihat Program <span class="arrow" aria-hidden="true">→</span></a></div>
            </div>
            <div class="contact-details">
                <div class="contact-detail"><span class="contact-detail-label">Alamat (contoh)</span><span class="contact-detail-value">Jl. Contoh Pendidikan No. 10, Beji, Kota Depok, Jawa Barat 16421</span></div>
                <div class="contact-detail"><span class="contact-detail-label">Email (contoh)</span><a class="contact-detail-value" href="mailto:sekretariat@example.com">sekretariat@example.com</a></div>
                <div class="contact-detail"><span class="contact-detail-label">Telepon (contoh)</span><a class="contact-detail-value" href="tel:+6281200000000">+62 812-0000-0000</a></div>
                <div class="contact-detail"><span class="contact-detail-label">Wilayah layanan</span><span class="contact-detail-value">Depok, Jawa Barat</span></div>
            </div>
        </div>
    </section>
    <section class="section contact-form-section">
        <div class="container">
            <p class="eyebrow">Kirim pesan</p>
            <h2 class="section-title">Ceritakan kebutuhan Anda.</h2>
            <p class="section-copy">Isi formulir berikut untuk mencoba validasi pesan. Formulir ini belum mengirim email.</p>

            @if (session('success'))
                <p class="form-alert" role="status">{{ session('success') }}</p>
            @endif

            @if ($errors->any())
                <div class="form-alert form-alert--error" role="alert">Mohon periksa kembali kolom yang ditandai.</div>
            @endif

            <form class="contact-form" action="{{ route('contact.send', absolute: false) }}" method="POST" novalidate>
                @csrf
                <div class="form-grid">
                    <div class="form-field">
                        <label for="name">Nama lengkap</label>
                        <input id="name" name="name" type="text" autocomplete="name" value="{{ old('name') }}" required @error('name') aria-invalid="true" @enderror>
                        @error('name')<p class="form-error">{{ $message }}</p>@enderror
                    </div>
                    <div class="form-field">
                        <label for="email">Alamat email</label>
                        <input id="email" name="email" type="email" autocomplete="email" value="{{ old('email') }}" required @error('email') aria-invalid="true" @enderror>
                        @error('email')<p class="form-error">{{ $message }}</p>@enderror
                    </div>
                    <div class="form-field form-field--full">
                        <label for="subject">Subjek</label>
                        <input id="subject" name="subject" type="text" value="{{ old('subject') }}" required @error('subject') aria-invalid="true" @enderror>
                        @error('subject')<p class="form-error">{{ $message }}</p>@enderror
                    </div>
                    <div class="form-field form-field--full">
                        <label for="message">Pesan</label>
                        <textarea id="message" name="message" rows="6" required @error('message') aria-invalid="true" @enderror>{{ old('message') }}</textarea>
                        @error('message')<p class="form-error">{{ $message }}</p>@enderror
                    </div>
                </div>
                <button class="button" type="submit">Validasi pesan <span class="arrow" aria-hidden="true">→</span></button>
            </form>
        </div>
    </section>
    <section class="section section--soft">
        <div class="container intro-grid">
            <div><p class="eyebrow">Lokasi layanan</p><h2 class="section-title">Berkhidmat untuk masyarakat Depok.</h2><p class="section-copy">Sebelum berkunjung, pastikan alamat dan waktu layanan terbaru melalui sekretariat agar kunjungan Anda dapat disambut dengan baik.</p></div>
            <img src="https://images.unsplash.com/photo-1511632765486-a01980e01a18?auto=format&fit=crop&w=1000&q=85" alt="Kebersamaan masyarakat dalam sebuah pertemuan" loading="lazy" style="width: 100%; height: 300px; object-fit: cover">
        </div>
    </section>
@endsection
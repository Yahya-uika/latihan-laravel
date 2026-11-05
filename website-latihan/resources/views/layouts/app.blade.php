<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#103d31">
    <meta name="description" content="@yield('description', 'Hidayatullah Depok, ikhtiar membangun generasi berilmu, berakhlak, dan bermanfaat bagi masyarakat.')">
    <meta name="description" content="@yield('description', 'Angkatan 14 Al-Muntadhorun, Ma\'had Ahlus Shuffah.')">
    <title>@yield('title') | Angkatan 14 Al-Muntadhorun</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@400;500;600&family=DM+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        :root {
            --green: #12392e;
            --green-deep: #081d18;
            --green-soft: #e8eee8;
            --gold: #c6a45e;
            --ink: #111814;
            --muted: #68716b;
            --paper: #f7f7f2;
            --white: #fff;
            --line: #e4e6df;
            --serif: 'Cormorant Garamond', Georgia, serif;
            --sans: 'DM Sans', 'Segoe UI', sans-serif;
            --display: 'DM Sans', 'Segoe UI', sans-serif;
        }

        *, *::before, *::after { box-sizing: border-box; }
        html { scroll-behavior: smooth; }
        body { margin: 0; color: var(--ink); background: var(--paper); font-family: var(--sans); font-size: 15px; line-height: 1.65; }
        img { display: block; max-width: 100%; }
        a { color: inherit; text-decoration: none; }
        .container { width: min(1160px, calc(100% - 48px)); margin-inline: auto; }
        .eyebrow { display: inline-flex; align-items: center; gap: 10px; margin: 0 0 15px; color: var(--gold); font-size: 11px; font-weight: 700; letter-spacing: 1.5px; text-transform: uppercase; }
        .eyebrow::before { width: 25px; height: 1px; background: currentColor; content: ''; }
        .section-title { max-width: 680px; margin: 0; font-family: var(--display); font-size: clamp(32px, 4vw, 48px); font-weight: 700; line-height: 1.16; }
        .section-copy { max-width: 560px; margin: 16px 0 0; color: var(--muted); }
        .button { display: inline-flex; min-height: 50px; align-items: center; justify-content: center; gap: 11px; padding: 0 22px; border: 1px solid transparent; background: var(--gold); color: var(--green-deep); font-size: 13px; font-weight: 700; transition: background .2s ease, color .2s ease, transform .2s ease; }
        .button:hover { transform: translateY(-2px); background: #d7b16d; }
        .button--outline { border-color: rgba(255,255,255,.55); background: transparent; color: var(--white); }
        .button--outline:hover { background: var(--white); color: var(--green); }
        .arrow { font-size: 18px; line-height: 1; }

        .site-header { position: relative; z-index: 5; background: var(--white); }
        .header-inner { display: flex; min-height: 82px; align-items: center; justify-content: space-between; gap: 24px; }
        .brand { display: inline-flex; align-items: center; gap: 12px; flex-shrink: 0; }
        .brand-mark { display: grid; width: 43px; height: 43px; place-items: center; border: 1px solid var(--gold); color: var(--green); font-family: var(--serif); font-size: 22px; font-weight: 700; }
        .brand-name { display: grid; color: var(--green); font-family: var(--display); font-size: 14px; font-weight: 800; line-height: 1.2; }
        .brand-name span { margin-top: 3px; color: var(--muted); font-family: var(--sans); font-size: 10px; font-weight: 500; letter-spacing: .3px; }
        .main-nav { display: flex; align-items: center; gap: clamp(18px, 2.4vw, 34px); }
        .main-nav a { color: #43504a; font-size: 12px; font-weight: 600; transition: color .2s ease; }
        .main-nav a:hover, .main-nav a.is-active { color: var(--gold); }
        .header-cta { min-height: 42px; padding-inline: 16px; background: var(--green); color: var(--white); font-size: 12px; }
        .header-cta:hover { background: var(--green-deep); color: var(--white); }
        .mobile-menu { display: none; }

        .home-hero, .page-hero { position: relative; display: flex; align-items: center; overflow: hidden; background: var(--green-deep); color: var(--white); }
        .home-hero { min-height: 620px; }
        .home-hero::before, .page-hero::before { position: absolute; inset: 0; background: linear-gradient(90deg, rgba(7,31,25,.92) 0%, rgba(7,31,25,.78) 44%, rgba(7,31,25,.22) 100%), url('https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=2000&q=85') center 48% / cover; content: ''; }
        .home-hero::after { position: absolute; right: 7%; bottom: -180px; width: 490px; height: 490px; border: 1px solid rgba(220,190,130,.32); border-radius: 50%; box-shadow: 0 0 0 35px rgba(255,255,255,.035), 0 0 0 70px rgba(255,255,255,.025); content: ''; }
        .hero-inner { position: relative; z-index: 1; width: min(1160px, calc(100% - 48px)); margin-inline: auto; padding-block: 94px; }
        .home-hero .eyebrow, .page-hero .eyebrow { color: #dfbd7d; }
        .home-hero h1 { max-width: 710px; margin: 0; font-family: var(--display); font-size: clamp(44px, 6.5vw, 76px); font-weight: 700; line-height: 1.08; }
        .home-hero h1 em { color: #e0bd79; font-family: var(--serif); font-weight: 400; }
        .hero-copy { max-width: 540px; margin: 23px 0 0; color: rgba(255,255,255,.82); font-size: 16px; }
        .hero-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px; }
        .hero-note { display: flex; align-items: center; gap: 12px; margin-top: 48px; color: rgba(255,255,255,.72); font-size: 11px; letter-spacing: .4px; }
        .hero-note::before { width: 37px; height: 1px; background: var(--gold); content: ''; }
        .page-hero { min-height: 300px; }
        .page-hero::before { background-position: center 43%; }
        .page-hero h1 { max-width: 760px; margin: 0; font-family: var(--display); font-size: clamp(38px, 5vw, 58px); line-height: 1.12; }
        .page-hero .hero-copy { max-width: 620px; margin-top: 14px; font-size: 15px; }

        .section { padding-block: 88px; }
        .section--soft { background: #f0f1eb; }
        .intro-grid { display: grid; grid-template-columns: 1.05fr .95fr; align-items: center; gap: 9%; }
        .intro-visual { position: relative; min-height: 410px; }
        .intro-photo { width: 82%; height: 380px; object-fit: cover; }
        .intro-photo-frame { position: absolute; right: 0; bottom: 0; width: 48%; height: 200px; border: 8px solid var(--paper); object-fit: cover; }
        .intro-caption { position: absolute; bottom: 24px; left: 22px; padding: 8px 12px; background: var(--white); color: var(--green); font-size: 10px; font-weight: 700; letter-spacing: .5px; }
        .text-link { display: inline-flex; align-items: center; gap: 10px; margin-top: 24px; color: var(--green); font-size: 12px; font-weight: 700; }
        .text-link span { color: var(--gold); font-size: 19px; transition: transform .2s ease; }
        .text-link:hover span { transform: translateX(4px); }
        .values { display: grid; grid-template-columns: repeat(3, 1fr); gap: 18px; margin-top: 38px; padding-top: 26px; border-top: 1px solid var(--line); }
        .value strong { display: block; color: var(--green); font-family: var(--display); font-size: 13px; }
        .value span { color: var(--muted); font-size: 11px; }

        .program-band { background: var(--green); color: var(--white); }
        .program-band .eyebrow, .program-band .program-number { color: #dfbd7d; }
        .program-band .section-copy { color: rgba(255,255,255,.7); }
        .program-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; margin-top: 42px; background: rgba(255,255,255,.17); }
        .program-card { min-height: 250px; padding: 28px; background: var(--green); transition: background .2s ease; }
        .program-card:hover { background: #174b3d; }
        .program-number { font-family: var(--serif); font-size: 30px; }
        .program-card h3 { margin: 23px 0 8px; font-family: var(--display); font-size: 19px; }
        .program-card p { margin: 0; color: rgba(255,255,255,.68); font-size: 13px; line-height: 1.75; }
        .program-card a { display: inline-flex; align-items: center; gap: 8px; margin-top: 18px; color: #dfbd7d; font-size: 11px; font-weight: 700; }
        .program-grid--light { background: var(--line); }
        .program-grid--light .program-card { background: var(--white); color: var(--ink); }
        .program-grid--light .program-card:hover { background: #f3f5ef; }
        .program-grid--light .program-card h3 { color: var(--green); }
        .program-grid--light .program-card p { color: var(--muted); }
        .program-grid--light .program-card a { color: var(--green); }
        .program-grid--light .program-number { color: var(--gold); }

        .news-grid { display: grid; grid-template-columns: repeat(3, 1fr); gap: 24px; margin-top: 38px; }
        .news-card { min-width: 0; }
        .news-image-wrap { position: relative; aspect-ratio: 1.55; overflow: hidden; background: var(--green-soft); }
        .news-image { width: 100%; height: 100%; object-fit: cover; transition: transform .4s ease; }
        .news-card:hover .news-image { transform: scale(1.04); }
        .news-category { position: absolute; bottom: 0; left: 0; padding: 7px 12px; background: var(--gold); color: var(--green-deep); font-size: 9px; font-weight: 700; letter-spacing: .8px; text-transform: uppercase; }
        .news-meta { margin: 18px 0 7px; color: var(--muted); font-size: 10px; }
        .news-card h3 { margin: 0; color: var(--green); font-family: var(--display); font-size: 17px; line-height: 1.4; }
        .news-card p { margin: 9px 0 0; color: var(--muted); font-size: 12px; line-height: 1.7; }
        .story-list { display: grid; gap: 1px; margin-top: 36px; background: var(--line); }
        .story { display: grid; grid-template-columns: 230px 1fr; gap: 28px; align-items: center; padding: 22px; background: var(--white); }
        .story img { width: 100%; aspect-ratio: 1.5; object-fit: cover; }
        .story h2 { margin: 8px 0; color: var(--green); font-family: var(--display); font-size: 22px; line-height: 1.3; }
        .story p { max-width: 620px; margin: 0; color: var(--muted); font-size: 13px; }
        .story .news-meta { margin: 0; }

        .principles { display: grid; grid-template-columns: repeat(3, 1fr); gap: 28px; margin-top: 44px; }
        .principle { padding-top: 20px; border-top: 1px solid var(--gold); }
        .principle h3 { margin: 0 0 8px; color: var(--green); font-family: var(--display); font-size: 17px; }
        .principle p { margin: 0; color: var(--muted); font-size: 13px; }
        .contact-grid { display: grid; grid-template-columns: 1fr .8fr; align-items: start; gap: 10%; }
        .contact-details { display: grid; gap: 0; border-top: 1px solid #d5d9d0; }
        .contact-detail { padding: 18px 0; border-bottom: 1px solid #d5d9d0; }
        .contact-detail-label { display: block; margin-bottom: 4px; color: var(--muted); font-size: 10px; font-weight: 700; letter-spacing: .9px; text-transform: uppercase; }
        .contact-detail-value { color: var(--green); font-size: 14px; font-weight: 600; }
        .contact-note { margin: 20px 0 0; color: var(--muted); font-size: 12px; }
        .contact-actions { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 25px; }
        .contact-actions .button { background: var(--green); color: var(--white); }
        .contact-actions .button:hover { background: var(--green-deep); }
        .contact-form-section { background: var(--white); }
        .contact-form { max-width: 760px; margin-top: 34px; }
        .form-grid { display: grid; grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 20px; }
        .form-field { display: grid; gap: 7px; }
        .form-field--full { grid-column: 1 / -1; }
        .form-field label { color: var(--green); font-size: 12px; font-weight: 700; }
        .form-field input, .form-field textarea { width: 100%; padding: 12px 14px; border: 1px solid #d5d9d0; border-radius: 0; background: var(--paper); color: var(--ink); outline: none; }
        .form-field input:focus, .form-field textarea:focus { border-color: var(--green); box-shadow: 0 0 0 2px rgba(16,61,49,.12); }
        .form-field textarea { min-height: 150px; resize: vertical; }
        .form-field [aria-invalid="true"] { border-color: #a63d32; }
        .form-error { margin: 0; color: #a63d32; font-size: 11px; }
        .form-alert { max-width: 760px; margin-top: 22px; padding: 13px 16px; border-left: 3px solid var(--green); background: var(--green-soft); color: var(--green); font-size: 13px; }
        .form-alert--error { border-color: #a63d32; background: #f9eeec; color: #842d25; }
        .contact-form .button { margin-top: 22px; background: var(--green); color: var(--white); }
        .contact-form .button:hover { background: var(--green-deep); }

        .site-footer { padding-block: 32px; background: var(--green-deep); color: var(--white); }
        .footer-inner { display: flex; align-items: center; justify-content: space-between; gap: 20px; }
        .footer-brand .brand-mark { border-color: rgba(223,189,125,.65); color: #dfbd7d; }
        .footer-brand .brand-name { color: var(--white); }
        .footer-brand .brand-name span { color: rgba(255,255,255,.62); }
        .footer-copy { color: rgba(255,255,255,.58); font-size: 10px; }
        .footer-nav { display: flex; flex-wrap: wrap; gap: 20px; }
        .footer-nav a { color: rgba(255,255,255,.77); font-size: 10px; }
        .footer-nav a:hover { color: #dfbd7d; }

        @media (max-width: 800px) {
            .container, .hero-inner { width: min(100% - 36px, 620px); }
            .header-inner { min-height: 72px; }
            .desktop-nav, .header-cta { display: none; }
            .mobile-menu { position: relative; display: block; }
            .mobile-menu summary { display: flex; min-height: 42px; align-items: center; gap: 8px; color: var(--green); cursor: pointer; font-size: 12px; font-weight: 700; list-style: none; }
            .mobile-menu summary::-webkit-details-marker { display: none; }
            .menu-icon { display: grid; gap: 4px; }
            .menu-icon i { display: block; width: 18px; height: 2px; background: var(--green); }
            .mobile-menu[open] .main-nav { position: absolute; top: 50px; right: 0; display: grid; min-width: 210px; gap: 0; padding: 8px 16px; background: var(--white); box-shadow: 0 12px 30px rgba(16,61,49,.16); }
            .mobile-menu .main-nav a { padding-block: 11px; border-bottom: 1px solid var(--line); }
            .mobile-menu .main-nav a:last-child { border-bottom: 0; }
            .home-hero { min-height: 570px; }
            .home-hero::before { background-position: 58% center; }
            .home-hero::after { right: -210px; }
            .hero-inner { padding-block: 76px; }
            .hero-copy { font-size: 15px; }
            .page-hero { min-height: 260px; }
            .section { padding-block: 68px; }
            .intro-grid { grid-template-columns: 1fr; gap: 38px; }
            .intro-visual { min-height: 370px; }
            .intro-photo { height: 340px; }
            .intro-photo-frame { height: 175px; }
            .program-grid { grid-template-columns: 1fr; }
            .program-card { min-height: auto; padding: 25px; }
            .program-card h3 { margin-top: 18px; }
            .news-grid { grid-template-columns: 1fr 1fr; gap: 28px 18px; }
            .contact-grid { grid-template-columns: 1fr; gap: 32px; }
            .form-grid { gap: 16px; }
            .footer-inner { align-items: flex-start; flex-wrap: wrap; }
            .footer-copy { order: 3; width: 100%; }
        }
        @media (max-width: 520px) {
            .container, .hero-inner { width: calc(100% - 32px); }
            .brand-mark { width: 39px; height: 39px; }
            .brand-name { font-size: 12px; }
            .home-hero { min-height: 550px; }
            .home-hero::before { background-image: linear-gradient(90deg, rgba(7,31,25,.89), rgba(7,31,25,.55)), url('https://images.unsplash.com/photo-1564769625905-50e93615e769?auto=format&fit=crop&w=1100&q=80'); background-position: 58% center; }
            .home-hero h1 { font-size: clamp(40px, 12vw, 56px); }
            .hero-copy { font-size: 14px; }
            .hero-actions { align-items: stretch; flex-direction: column; max-width: 260px; }
            .hero-note { margin-top: 34px; }
            .page-hero { min-height: 250px; }
            .page-hero h1 { font-size: clamp(36px, 10vw, 48px); }
            .intro-visual { min-height: 300px; }
            .intro-photo { width: 88%; height: 270px; }
            .intro-photo-frame { width: 48%; height: 135px; border-width: 6px; }
            .intro-caption { bottom: 17px; left: 12px; font-size: 9px; }
            .values { gap: 12px; }
            .value strong { font-size: 11px; }
            .value span { font-size: 10px; }
            .news-grid { grid-template-columns: 1fr; gap: 30px; }
            .news-image-wrap { aspect-ratio: 1.7; }
            .story { grid-template-columns: 1fr; gap: 16px; padding: 16px; }
            .story img { aspect-ratio: 1.8; }
            .principles { grid-template-columns: 1fr; gap: 20px; }
            .form-grid { grid-template-columns: 1fr; }
            .form-field--full { grid-column: auto; }
            .footer-inner { gap: 18px; }
            .footer-nav { gap: 14px; }
        }
        @media (prefers-reduced-motion: reduce) {
            *, *::before, *::after { scroll-behavior: auto !important; transition-duration: .01ms !important; }
        }
        .site-header { position: sticky; top: 0; border-bottom: 1px solid rgba(17,24,20,.08); }
        .brand { gap: 11px; }
        .brand-mark { width: 42px; height: 42px; border: 0; overflow: hidden; }
        .brand-mark img { width: 100%; height: 100%; object-fit: cover; }
        .brand-name { color: var(--ink); font-size: 13px; }
        .brand-name span { color: var(--muted); font-size: 9px; letter-spacing: .5px; }
        .main-nav { gap: clamp(12px, 1.7vw, 23px); }
        .main-nav a { color: #38443d; font-size: 11px; }
        .cohort-hero { position: relative; overflow: hidden; background: var(--green-deep); color: var(--white); }
        .cohort-hero::before { position: absolute; inset: 0; background: repeating-linear-gradient(135deg, transparent 0 42px, rgba(255,255,255,.025) 43px 44px); content: ''; pointer-events: none; }
        .cohort-hero::after { position: absolute; top: -190px; right: -90px; width: 520px; height: 520px; border: 1px solid rgba(198,164,94,.22); border-radius: 50%; box-shadow: 0 0 0 34px rgba(255,255,255,.018), 0 0 0 72px rgba(255,255,255,.014); content: ''; pointer-events: none; }
        .cohort-hero-inner { position: relative; z-index: 1; display: grid; width: min(1160px, calc(100% - 48px)); min-height: 610px; grid-template-columns: 1.2fr .8fr; align-items: center; gap: 60px; margin-inline: auto; padding-block: 80px; }
        .cohort-hero-copy { max-width: 700px; animation: rise-in .7s ease both; }
        .cohort-kicker { margin: 0 0 18px; color: #d7bc7d; font-size: 11px; font-weight: 700; letter-spacing: 1.8px; text-transform: uppercase; }
        .cohort-hero h1 { max-width: 650px; margin: 0; font-family: var(--display); font-size: 68px; font-weight: 700; line-height: 1.04; }
        .cohort-hero h1 em { color: #d9bb76; font-family: var(--serif); font-size: 1.12em; font-weight: 500; }
        .cohort-arabic { margin: 15px 0 0; color: rgba(255,255,255,.78); font-size: 23px; }
        .cohort-motto { max-width: 520px; margin: 29px 0 0; color: rgba(255,255,255,.83); font-family: var(--serif); font-size: 26px; line-height: 1.35; }
        .cohort-hero-links { display: flex; flex-wrap: wrap; gap: 12px; margin-top: 32px; }
        .cohort-hero-links .button { min-height: 46px; }
        .cohort-emblem { width: min(100%, 350px); justify-self: center; padding: 14px; border: 1px solid rgba(198,164,94,.7); background: #080a09; box-shadow: 0 24px 70px rgba(0,0,0,.26); animation: emblem-in .9s .12s ease both; }
        .cohort-emblem img { width: 100%; aspect-ratio: 768 / 1365; object-fit: contain; }
        .section--cohort { padding-block: 88px; scroll-margin-top: 82px; }
        .section-heading { display: grid; grid-template-columns: 1fr minmax(240px, .75fr); align-items: end; gap: 35px; margin-bottom: 40px; }
        .section-heading .section-copy { margin: 0; }
        .section-kicker { display: inline-flex; align-items: center; gap: 10px; margin: 0 0 13px; color: #947338; font-size: 10px; font-weight: 700; letter-spacing: 1.6px; text-transform: uppercase; }
        .program-band .section-kicker { color: #dfbd7d; }
        .section-kicker::before { width: 24px; height: 1px; background: currentColor; content: ''; }
        .section-title { font-size: 42px; }
        .profile-grid { display: grid; grid-template-columns: 1fr 1fr; gap: 1px; background: #dfe3dc; }
        .profile-item { min-height: 160px; padding: 28px; background: var(--white); }
        .profile-item span { display: block; margin-bottom: 14px; color: #947338; font-size: 10px; font-weight: 700; letter-spacing: 1.4px; text-transform: uppercase; }
        .profile-item strong { display: block; color: var(--green); font-family: var(--display); font-size: 20px; line-height: 1.45; }
        .profile-item--motto strong { font-family: var(--serif); font-size: 27px; }
        .timeline { display: grid; grid-template-columns: repeat(3, 1fr); gap: 1px; background: rgba(255,255,255,.18); }
        .timeline-item { min-height: 210px; padding: 28px; background: var(--green); }
        .timeline-index { color: #d7bc7d; font-family: var(--serif); font-size: 28px; }
        .timeline-item h3 { margin: 25px 0 8px; font-family: var(--display); font-size: 17px; }
        .timeline-item p { margin: 0; color: rgba(255,255,255,.7); font-size: 12px; }
        .achievement { min-height: 245px; padding: 30px; border-top: 2px solid var(--gold); background: var(--white); }
        .achievement-year { color: #947338; font-size: 10px; font-weight: 700; letter-spacing: 1.5px; }
        .achievement h3 { margin: 30px 0 12px; color: var(--green); font-family: var(--display); font-size: 25px; }
        .achievement p { max-width: 390px; margin: 0; color: var(--muted); font-size: 13px; }
        .empty-state { display: grid; min-height: 205px; place-content: center; justify-items: center; padding: 28px; border: 1px dashed #b8c0b7; background: rgba(255,255,255,.58); text-align: center; }
        .empty-state strong { color: var(--green); font-family: var(--display); font-size: 17px; }
        .empty-state p { max-width: 440px; margin: 8px 0 0; color: var(--muted); font-size: 12px; }
        .member-count { display: inline-flex; align-items: center; gap: 10px; margin-top: 20px; color: #947338; font-size: 11px; font-weight: 700; }
        .member-count::before, .member-count::after { width: 28px; height: 1px; background: var(--gold); content: ''; }
        .gallery-grid { display: grid; grid-template-columns: repeat(auto-fill, minmax(min(100%, 240px), 1fr)); gap: 18px; }
        .gallery-card { min-width: 0; margin: 0; background: var(--white); }
        .gallery-trigger { position: relative; display: block; width: 100%; aspect-ratio: 4 / 3; overflow: hidden; padding: 0; border: 0; background: #e8eee8; cursor: zoom-in; text-align: left; }
        .gallery-trigger img { width: 100%; height: 100%; object-fit: cover; transition: transform .35s ease; }
        .gallery-trigger:hover img, .gallery-trigger:focus-visible img { transform: scale(1.035); }
        .gallery-trigger-label { position: absolute; right: 12px; bottom: 12px; display: flex; align-items: center; gap: 8px; padding: 8px 11px; background: rgba(8,29,24,.9); color: var(--white); font-size: 10px; font-weight: 700; }
        .gallery-trigger-label span { color: #dfbd7d; font-size: 14px; }
        .gallery-caption { padding: 13px 15px 15px; color: var(--green); font-size: 12px; font-weight: 600; }
        .gallery-lightbox { width: min(1120px, calc(100vw - 32px)); max-width: none; max-height: calc(100vh - 32px); padding: 0; overflow: hidden; border: 1px solid rgba(223,189,125,.42); background: #08110e; color: var(--white); }
        .gallery-lightbox::backdrop { background: rgba(3,9,7,.88); backdrop-filter: blur(5px); }
        .gallery-lightbox[open] .gallery-lightbox-inner { animation: gallery-open .22s ease-out both; }
        .gallery-lightbox-inner { padding: 16px; }
        .gallery-lightbox-bar { display: flex; align-items: center; justify-content: space-between; gap: 16px; margin-bottom: 12px; color: #dfbd7d; font-size: 11px; font-weight: 700; letter-spacing: 1px; text-transform: uppercase; }
        .gallery-lightbox-close { display: grid; width: 38px; height: 38px; place-items: center; border: 1px solid rgba(255,255,255,.32); background: transparent; color: var(--white); cursor: pointer; font-size: 25px; line-height: 1; }
        .gallery-lightbox-close:hover, .gallery-lightbox-close:focus-visible { background: var(--gold); color: var(--green-deep); }
        .gallery-lightbox-image { width: 100%; max-height: min(76vh, 820px); object-fit: contain; }
        .gallery-lightbox-caption { margin: 12px 0 0; color: rgba(255,255,255,.82); font-family: var(--serif); font-size: 20px; text-align: center; }
        @media (max-width: 700px) {
            .gallery-grid { grid-template-columns: repeat(2, minmax(0, 1fr)); gap: 12px; }
            .gallery-lightbox-inner { padding: 10px; }
            .gallery-lightbox-image { max-height: 72vh; }
            .gallery-lightbox-caption { font-size: 18px; }
        }
        @media (prefers-reduced-motion: reduce) {
            .gallery-lightbox[open] .gallery-lightbox-inner { animation-duration: .01ms; }
        }
        @keyframes gallery-open { from { opacity: 0; transform: scale(.975); } to { opacity: 1; transform: scale(1); } }
        .site-footer { border-top: 1px solid rgba(255,255,255,.12); }
        .footer-copy { max-width: 300px; margin: 0; text-align: right; }
        .footer-brand .brand-name { color: var(--white); }
        .footer-brand .brand-name span { color: rgba(255,255,255,.62); }
        .footer-nav { gap: 14px 20px; }
        @keyframes rise-in { from { opacity: 0; transform: translateY(16px); } to { opacity: 1; transform: translateY(0); } }
        @keyframes emblem-in { from { opacity: 0; transform: translateY(16px) scale(.98); } to { opacity: 1; transform: translateY(0) scale(1); } }
        @media (max-width: 1000px) {
            .desktop-nav { display: none; }
            .mobile-menu { position: relative; display: block; }
            .mobile-menu summary { display: flex; min-height: 42px; align-items: center; gap: 8px; color: var(--green); cursor: pointer; font-size: 12px; font-weight: 700; list-style: none; }
            .mobile-menu summary::-webkit-details-marker { display: none; }
            .menu-icon { display: grid; gap: 4px; }
            .menu-icon i { display: block; width: 18px; height: 2px; background: var(--green); }
            .mobile-menu[open] .main-nav { position: absolute; top: 50px; right: 0; display: grid; min-width: 230px; gap: 0; padding: 8px 16px; background: var(--white); box-shadow: 0 12px 30px rgba(16,61,49,.16); }
            .mobile-menu .main-nav a { padding-block: 11px; border-bottom: 1px solid var(--line); }
            .mobile-menu .main-nav a:last-child { border-bottom: 0; }
            .cohort-hero-inner { grid-template-columns: 1.2fr .8fr; gap: 32px; }
            .cohort-hero h1 { font-size: 56px; }
            .cohort-emblem { width: min(100%, 290px); }
        }
        @media (max-width: 700px) {
            .container, .cohort-hero-inner { width: min(100% - 36px, 560px); }
            .header-inner { min-height: 70px; }
            .cohort-hero-inner { min-height: 0; grid-template-columns: 1fr; gap: 38px; padding-block: 66px; }
            .cohort-hero-copy { order: 2; }
            .cohort-emblem { order: 1; width: min(56vw, 220px); }
            .cohort-hero h1 { font-size: 48px; }
            .cohort-motto { font-size: 23px; }
            .section--cohort { padding-block: 64px; scroll-margin-top: 70px; }
            .section-heading { grid-template-columns: 1fr; gap: 12px; margin-bottom: 28px; }
            .section-title { font-size: 34px; }
            .profile-grid, .timeline { grid-template-columns: 1fr; }
            .profile-item { min-height: 130px; padding: 23px; }
            .timeline-item { min-height: 165px; padding: 23px; }
            .timeline-item h3 { margin-top: 18px; }
            .achievement { min-height: 205px; padding: 25px; }
            .achievement h3 { margin-top: 23px; }
            .footer-inner { align-items: flex-start; flex-wrap: wrap; }
            .footer-copy { order: 3; width: 100%; text-align: left; }
        }
        @media (max-width: 420px) {
            .container, .cohort-hero-inner { width: calc(100% - 32px); }
            .brand-name { font-size: 11px; }
            .brand-name span { font-size: 8px; }
            .cohort-hero h1 { font-size: 42px; }
            .cohort-hero-links { align-items: stretch; flex-direction: column; max-width: 260px; }
            .cohort-arabic { font-size: 21px; }
            .profile-item--motto strong { font-size: 24px; }
            .footer-nav { gap: 12px 15px; }
        }
    </style>
</head>
<body>
    @php
        $navigation = [
            ['label' => 'Beranda', 'target' => 'beranda'],
            ['label' => 'Profil Angkatan', 'target' => 'profil'],
            ['label' => 'Perjalanan', 'target' => 'perjalanan'],
            ['label' => 'PORSENI 2024', 'target' => 'porseni'],
            ['label' => 'OSMA 2024–2025', 'target' => 'osma'],
            ['label' => 'Galeri', 'target' => 'galeri'],
            ['label' => 'Anggota', 'target' => 'anggota'],
        ];
    @endphp
    <header class="site-header">
        <div class="container header-inner">
            <a class="brand" href="{{ route('home', absolute: false) }}#beranda" aria-label="Angkatan 14 Al-Muntadhorun, beranda">
                <span class="brand-mark"><img src="{{ asset('image/logo almuntazhorun.jpeg') }}" alt=""></span>
                <span class="brand-name">ANGKATAN 14<span>AL-MUNTADHORUN</span></span>
            </a>
            <nav class="main-nav desktop-nav" aria-label="Navigasi utama">
                @foreach ($navigation as $item)
                    <a href="#{{ $item['target'] }}">{{ $item['label'] }}</a>
                @endforeach
            </nav>
            <details class="mobile-menu">
                <summary aria-label="Buka menu navigasi"><span class="menu-icon" aria-hidden="true"><i></i><i></i><i></i></span> Menu</summary>
                <nav class="main-nav" aria-label="Navigasi seluler">
                    @foreach ($navigation as $item)
                        <a href="#{{ $item['target'] }}">{{ $item['label'] }}</a>
                    @endforeach
                </nav>
            </details>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="site-footer">
        <div class="container footer-inner">
            <a class="brand footer-brand" href="{{ route('home', absolute: false) }}#beranda" aria-label="Kembali ke beranda Angkatan 14 Al-Muntadhorun">
                <span class="brand-mark"><img src="{{ asset('image/logo almuntazhorun.jpeg') }}" alt=""></span>
                <span class="brand-name">ANGKATAN 14<span>AL-MUNTADHORUN</span></span>
            </a>
            <nav class="footer-nav" aria-label="Navigasi footer">
                @foreach ($navigation as $item)
                    <a href="#{{ $item['target'] }}">{{ $item['label'] }}</a>
                @endforeach
            </nav>
            <p class="footer-copy">© {{ date('Y') }} Angkatan 14 Al-Muntadhorun · Ma'had Ahlus Shuffah</p>
        </div>
    </footer>
</body>
</html>
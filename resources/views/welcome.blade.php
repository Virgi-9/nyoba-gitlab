<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ config('app.name', 'MyApp') }}</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #f8fafc;
            color: #1e293b;
            min-height: 100vh;
        }

        /* Navbar */
        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 1rem 2rem;
            background: #fff;
            border-bottom: 1px solid #e2e8f0;
            position: sticky;
            top: 0;
            z-index: 10;
        }

        .nav-brand {
            font-size: 1.25rem;
            font-weight: 700;
            color: #6366f1;
            text-decoration: none;
        }

        .nav-links {
            display: flex;
            gap: 0.75rem;
        }

        .btn {
            padding: 0.5rem 1.25rem;
            border-radius: 8px;
            font-size: 0.875rem;
            font-weight: 500;
            text-decoration: none;
            transition: all 0.2s;
            cursor: pointer;
            border: none;
        }

        .btn-outline {
            border: 1.5px solid #e2e8f0;
            color: #475569;
            background: #fff;
        }

        .btn-outline:hover {
            border-color: #6366f1;
            color: #6366f1;
        }

        .btn-primary {
            background: #6366f1;
            color: #fff;
        }

        .btn-primary:hover {
            background: #4f46e5;
        }

        /* Hero */
        .hero {
            display: flex;
            flex-direction: column;
            align-items: center;
            text-align: center;
            padding: 5rem 1.5rem 4rem;
        }

        .hero-badge {
            display: inline-block;
            background: #ede9fe;
            color: #6366f1;
            font-size: 0.8rem;
            font-weight: 600;
            padding: 0.3rem 0.9rem;
            border-radius: 999px;
            margin-bottom: 1.5rem;
            letter-spacing: 0.03em;
        }

        .hero h1 {
            font-size: clamp(2rem, 5vw, 3.25rem);
            font-weight: 800;
            line-height: 1.15;
            color: #0f172a;
            max-width: 640px;
            margin-bottom: 1.25rem;
        }

        .hero h1 span {
            color: #6366f1;
        }

        .hero p {
            font-size: 1.1rem;
            color: #64748b;
            max-width: 520px;
            line-height: 1.7;
            margin-bottom: 2.25rem;
        }

        .hero-actions {
            display: flex;
            gap: 0.75rem;
            flex-wrap: wrap;
            justify-content: center;
        }

        .btn-lg {
            padding: 0.75rem 1.75rem;
            font-size: 1rem;
            border-radius: 10px;
        }

        /* Features */
        .features {
            padding: 4rem 1.5rem;
            background: #fff;
        }

        .features-title {
            text-align: center;
            font-size: 1.75rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.5rem;
        }

        .features-sub {
            text-align: center;
            color: #64748b;
            margin-bottom: 3rem;
            font-size: 1rem;
        }

        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 1.5rem;
            max-width: 900px;
            margin: 0 auto;
        }

        .feature-card {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 12px;
            padding: 1.75rem 1.5rem;
            transition: box-shadow 0.2s, transform 0.2s;
        }

        .feature-card:hover {
            box-shadow: 0 8px 24px rgba(99, 102, 241, 0.1);
            transform: translateY(-3px);
        }

        .feature-icon {
            font-size: 1.75rem;
            margin-bottom: 0.75rem;
        }

        .feature-card h3 {
            font-size: 1rem;
            font-weight: 600;
            color: #1e293b;
            margin-bottom: 0.4rem;
        }

        .feature-card p {
            font-size: 0.875rem;
            color: #64748b;
            line-height: 1.6;
        }

        /* CTA */
        .cta {
            text-align: center;
            padding: 5rem 1.5rem;
            background: linear-gradient(135deg, #6366f1 0%, #8b5cf6 100%);
            color: #fff;
        }

        .cta h2 {
            font-size: 2rem;
            font-weight: 800;
            margin-bottom: 0.75rem;
        }

        .cta p {
            opacity: 0.85;
            margin-bottom: 2rem;
            font-size: 1.05rem;
        }

        .btn-white {
            background: #fff;
            color: #6366f1;
            font-weight: 600;
        }

        .btn-white:hover {
            background: #f1f5f9;
        }

        /* Footer */
        footer {
            text-align: center;
            padding: 1.75rem;
            background: #1e293b;
            color: #94a3b8;
            font-size: 0.875rem;
        }

        footer a {
            color: #a5b4fc;
            text-decoration: none;
        }

        footer a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

    {{-- Navbar --}}
    <nav>
        <a href="/" class="nav-brand">✦ {{ config('app.name', 'MyApp') }}</a>
        <div class="nav-links">
            @auth
                <a href="{{ url('/home') }}" class="btn btn-outline">Dashboard</a>
            @else
                @if (Route::has('login'))
                    <a href="{{ route('login') }}" class="btn btn-outline">Login</a>
                @endif
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary">Daftar</a>
                @endif
            @endauth
        </div>
    </nav>

    {{-- Hero --}}
    <section class="hero">
        <span class="hero-badge">🚀 Versi 1.0 Sudah Tersedia</span>
        <h1>Selamat Datang di <span>{{ config('app.name', 'MyApp') }}</span></h1>
        <p>Platform modern yang membantu kamu bekerja lebih cepat, lebih terorganisir, dan lebih produktif setiap hari.</p>
        <div class="hero-actions">
            @auth
                <a href="{{ url('/home') }}" class="btn btn-primary btn-lg">Buka Dashboard</a>
            @else
                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="btn btn-primary btn-lg">Mulai Gratis</a>
                @endif
                <a href="#fitur" class="btn btn-outline btn-lg">Lihat Fitur</a>
            @endauth
        </div>
    </section>

    {{-- Features --}}
    <section class="features" id="fitur">
        <h2 class="features-title">Kenapa Pilih Kami?</h2>
        <p class="features-sub">Semua yang kamu butuhkan ada di satu tempat.</p>
        <div class="features-grid">
            <div class="feature-card">
                <div class="feature-icon">⚡</div>
                <h3>Cepat & Ringan</h3>
                <p>Dibangun dengan teknologi modern sehingga responsif di semua perangkat.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🔒</div>
                <h3>Aman & Terpercaya</h3>
                <p>Keamanan data pengguna adalah prioritas utama kami.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🎨</div>
                <h3>Tampilan Bersih</h3>
                <p>Antarmuka yang intuitif dan mudah digunakan siapa saja.</p>
            </div>
            <div class="feature-card">
                <div class="feature-icon">🌐</div>
                <h3>Akses Di Mana Saja</h3>
                <p>Bisa diakses dari browser manapun tanpa perlu install aplikasi.</p>
            </div>
        </div>
    </section>

    {{-- CTA --}}
    <section class="cta">
        <h2>Siap Untuk Memulai?</h2>
        <p>Bergabunglah dan rasakan kemudahannya sekarang juga.</p>
        @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn btn-white btn-lg">Daftar Sekarang →</a>
        @endif
    </section>

    {{-- Footer --}}
    <footer>
        <p>© {{ date('Y') }} {{ config('app.name', 'MyApp') }}. Dibuat dengan ❤️ menggunakan <a href="https://laravel.com" target="_blank">Laravel</a>.</p>
    </footer>

</body>
</html>

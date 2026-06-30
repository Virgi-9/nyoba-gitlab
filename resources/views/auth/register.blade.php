<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Daftar — {{ config('app.name', 'MyApp') }}</title>
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }

        body {
            font-family: 'Segoe UI', system-ui, -apple-system, sans-serif;
            background: #f1f5f9;
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            padding: 1.5rem;
        }

        .card {
            background: #fff;
            border-radius: 16px;
            box-shadow: 0 4px 24px rgba(0,0,0,0.08);
            width: 100%;
            max-width: 440px;
            padding: 2.5rem 2rem;
        }

        .logo {
            text-align: center;
            font-size: 1.5rem;
            font-weight: 800;
            color: #6366f1;
            margin-bottom: 0.5rem;
            text-decoration: none;
            display: block;
        }

        .card-title {
            text-align: center;
            font-size: 1.35rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.3rem;
        }

        .card-sub {
            text-align: center;
            font-size: 0.875rem;
            color: #64748b;
            margin-bottom: 2rem;
        }

        .alert-success {
            background: #f0fdf4;
            border: 1px solid #bbf7d0;
            color: #166534;
            padding: 0.75rem 1rem;
            border-radius: 8px;
            font-size: 0.875rem;
            margin-bottom: 1.25rem;
        }

        .form-group {
            margin-bottom: 1.1rem;
        }

        label {
            display: block;
            font-size: 0.875rem;
            font-weight: 600;
            color: #374151;
            margin-bottom: 0.4rem;
        }

        input {
            width: 100%;
            padding: 0.65rem 0.9rem;
            border: 1.5px solid #e2e8f0;
            border-radius: 8px;
            font-size: 0.9rem;
            color: #1e293b;
            transition: border-color 0.2s, box-shadow 0.2s;
            outline: none;
            background: #f8fafc;
        }

        input:focus {
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99,102,241,0.12);
            background: #fff;
        }

        input.is-error {
            border-color: #f87171;
        }

        .error-msg {
            color: #ef4444;
            font-size: 0.8rem;
            margin-top: 0.3rem;
        }

        .btn-submit {
            width: 100%;
            padding: 0.75rem;
            background: #6366f1;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            margin-top: 0.5rem;
        }

        .btn-submit:hover { background: #4f46e5; }

        .footer-text {
            text-align: center;
            font-size: 0.875rem;
            color: #64748b;
            margin-top: 1.5rem;
        }

        .footer-text a {
            color: #6366f1;
            font-weight: 600;
            text-decoration: none;
        }

        .footer-text a:hover { text-decoration: underline; }

        .divider {
            border: none;
            border-top: 1px solid #e2e8f0;
            margin: 1.5rem 0;
        }
    </style>
</head>
<body>
    <div class="card">
        <a href="/" class="logo">✦ {{ config('app.name', 'MyApp') }}</a>
        <h1 class="card-title">Buat Akun Baru</h1>
        <p class="card-sub">Daftar gratis dan mulai sekarang</p>

        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <form action="/register" method="POST">
            @csrf

            <div class="form-group">
                <label for="name">Nama Lengkap</label>
                <input
                    type="text"
                    name="name"
                    id="name"
                    placeholder="Masukkan nama kamu"
                    value="{{ old('name') }}"
                    class="{{ $errors->has('name') ? 'is-error' : '' }}"
                    required
                >
                @error('name')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="email">Email</label>
                <input
                    type="email"
                    name="email"
                    id="email"
                    placeholder="nama@email.com"
                    value="{{ old('email') }}"
                    class="{{ $errors->has('email') ? 'is-error' : '' }}"
                    required
                >
                @error('email')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password">Password</label>
                <input
                    type="password"
                    name="password"
                    id="password"
                    placeholder="Minimal 8 karakter"
                    class="{{ $errors->has('password') ? 'is-error' : '' }}"
                    required
                >
                @error('password')
                    <p class="error-msg">{{ $message }}</p>
                @enderror
            </div>

            <div class="form-group">
                <label for="password_confirmation">Konfirmasi Password</label>
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    placeholder="Ulangi password"
                    required
                >
            </div>

            <button type="submit" class="btn-submit">Daftar Sekarang</button>
        </form>

        <hr class="divider">

        <p class="footer-text">
            Sudah punya akun? <a href="{{ route('login') }}">Login di sini</a>
        </p>
    </div>
</body>
</html>

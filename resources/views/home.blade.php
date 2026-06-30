<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home — {{ config('app.name', 'MyApp') }}</title>
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
            max-width: 480px;
            padding: 2.5rem 2rem;
            text-align: center;
        }

        .logo {
            font-size: 1.5rem;
            font-weight: 800;
            color: #6366f1;
            margin-bottom: 1.5rem;
            text-decoration: none;
            display: block;
        }

        .avatar {
            width: 64px;
            height: 64px;
            background: #e0e7ff;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 1.75rem;
            margin: 0 auto 1rem;
        }

        h1 {
            font-size: 1.35rem;
            font-weight: 700;
            color: #0f172a;
            margin-bottom: 0.4rem;
        }

        .email {
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
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .info-box {
            background: #f8fafc;
            border: 1px solid #e2e8f0;
            border-radius: 10px;
            padding: 1rem 1.25rem;
            margin-bottom: 1.5rem;
            text-align: left;
        }

        .info-row {
            display: flex;
            justify-content: space-between;
            font-size: 0.875rem;
            padding: 0.35rem 0;
            border-bottom: 1px solid #f1f5f9;
        }

        .info-row:last-child { border-bottom: none; }

        .info-row span:first-child { color: #64748b; }
        .info-row span:last-child  { font-weight: 600; color: #1e293b; }

        .btn-logout {
            display: inline-block;
            padding: 0.7rem 2rem;
            background: #ef4444;
            color: #fff;
            border: none;
            border-radius: 8px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            transition: background 0.2s;
            text-decoration: none;
        }

        .btn-logout:hover { background: #dc2626; }
    </style>
</head>
<body>
    <div class="card">
        <a href="/" class="logo">✦ {{ config('app.name', 'MyApp') }}</a>

        @if (session('success'))
            <div class="alert-success">{{ session('success') }}</div>
        @endif

        <div class="avatar">👤</div>
        <h1>Halo, {{ Auth::user()->name }}!</h1>
        <p class="email">{{ Auth::user()->email }}</p>

        <div class="info-box">
            <div class="info-row">
                <span>Nama</span>
                <span>{{ Auth::user()->name }}</span>
            </div>
            <div class="info-row">
                <span>Email</span>
                <span>{{ Auth::user()->email }}</span>
            </div>
            <div class="info-row">
                <span>Bergabung</span>
                <span>{{ Auth::user()->created_at->format('d M Y') }}</span>
            </div>
        </div>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit" class="btn-logout">Logout</button>
        </form>
    </div>
</body>
</html>

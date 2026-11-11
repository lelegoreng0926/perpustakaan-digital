<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="theme-color" content="#ffffff">
    <title>Peminjaman Buku</title>
    <style>
        :root { color-scheme: light; font-family: Inter, ui-sans-serif, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", sans-serif; color: #111; background: #fff; }
        * { box-sizing: border-box; }
        body { min-height: 100vh; margin: 0; display: grid; place-items: center; padding: 24px; }
        main { width: min(100%, 440px); }
        .mark { width: 42px; height: 42px; display: grid; place-items: center; border: 1px solid #eaeaea; border-radius: 6px; font-size: 20px; }
        h1 { margin: 32px 0 10px; font-size: clamp(28px, 6vw, 36px); line-height: 1.15; letter-spacing: -.04em; font-weight: 600; }
        p { margin: 0; color: #777; font-size: 15px; line-height: 1.7; }
        a { display: inline-flex; align-items: center; justify-content: center; min-height: 44px; margin-top: 28px; padding: 0 18px; border-radius: 4px; background: #111; color: #fff; font-size: 14px; font-weight: 500; text-decoration: none; transition: background .15s ease; }
        a:hover { background: #333; }
        a:focus-visible { outline: 2px solid #111; outline-offset: 3px; }
    </style>
</head>
<body>
    <main>
        <div class="mark" aria-hidden="true">B</div>
        <h1>Peminjaman Buku</h1>
        <p>Kelola koleksi dan peminjaman buku dengan mudah.</p>
        <a href="{{ route('filament.admin.auth.login') }}">Masuk ke aplikasi</a>
    </main>
</body>
</html>

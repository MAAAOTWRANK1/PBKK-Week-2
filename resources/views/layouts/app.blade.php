<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'PBKK ITS' }}</title>
    <style>
        :root {
            --bg: #f5f7fb;
            --card: #ffffff;
            --text: #1f2937;
            --muted: #6b7280;
            --accent: #0f766e;
            --accent-2: #155e75;
            --border: #dbe4ee;
        }

        * { box-sizing: border-box; }

        body {
            margin: 0;
            font-family: Arial, Helvetica, sans-serif;
            background: linear-gradient(180deg, #e8f3f5 0%, var(--bg) 100%);
            color: var(--text);
        }

        .container {
            max-width: 960px;
            margin: 0 auto;
            padding: 32px 20px 48px;
        }

        .card {
            background: var(--card);
            border: 1px solid var(--border);
            border-radius: 18px;
            padding: 28px;
            box-shadow: 0 10px 30px rgba(15, 23, 42, 0.06);
        }

        .brand {
            display: inline-block;
            padding: 6px 12px;
            border-radius: 999px;
            background: rgba(15, 118, 110, 0.12);
            color: var(--accent);
            font-weight: 700;
            margin-bottom: 16px;
        }

        h1, h2, h3 { margin-top: 0; }

        .meta {
            color: var(--muted);
            line-height: 1.7;
        }

        .nav {
            display: flex;
            flex-wrap: wrap;
            gap: 12px;
            margin-top: 20px;
        }

        .nav a {
            text-decoration: none;
            color: white;
            background: var(--accent-2);
            padding: 10px 14px;
            border-radius: 10px;
        }

        .nav a.secondary { background: #334155; }

        ul { padding-left: 20px; line-height: 1.8; }

        .grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(220px, 1fr));
            gap: 16px;
        }

        .panel {
            border: 1px solid var(--border);
            border-radius: 14px;
            padding: 18px;
            background: #f8fafc;
        }

        .value {
            font-size: 1.5rem;
            font-weight: 700;
            color: var(--accent);
        }

        .footer {
            margin-top: 24px;
            color: var(--muted);
            font-size: 0.95rem;
        }
    </style>
</head>
<body>
    <main class="container">
        <div class="card">
            @yield('content')
        </div>
    </main>
</body>
</html>
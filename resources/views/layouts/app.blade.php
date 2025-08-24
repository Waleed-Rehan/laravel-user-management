<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title', 'User Management')</title>
  <style>
    :root {
      --bg: #0f172a;
      --panel: #111827;
      --accent: #3b82f6;
      --text: #e5e7eb;
      --muted: #9ca3af;
      --danger: #ef4444;
      --success: #10b981;
      --border: #334155;
    }
    * { box-sizing: border-box; }
    body {
      margin: 0;
      font-family: ui-sans-serif, system-ui, -apple-system, Segoe UI, Roboto, Helvetica Neue, Arial, Noto Sans, Apple Color Emoji, Segoe UI Emoji, Segoe UI Symbol;
      background: linear-gradient(135deg, #0b1220, #0f172a);
      color: var(--text);
      min-height: 100vh;
    }
    a { color: var(--accent); text-decoration: none; }
    a:hover { text-decoration: underline; }
    .container {
      max-width: 1000px;
      margin: 2rem auto;
      padding: 0 1rem;
    }
    .card {
      background: linear-gradient(180deg, rgba(17,24,39,.8), rgba(17,24,39,.6));
      border: 1px solid var(--border);
      border-radius: 16px;
      box-shadow: 0 10px 30px rgba(0,0,0,.25);
      padding: 1rem 1.25rem;
    }
    .header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      gap: 1rem;
      margin-bottom: 1rem;
      border-bottom: 1px solid var(--border);
      padding-bottom: .75rem;
    }
    h1,h2,h3 { margin: 0; }
    .btn {
      display: inline-flex;
      align-items: center;
      gap: .5rem;
      padding: .6rem .9rem;
      border-radius: 10px;
      border: 1px solid var(--border);
      background: #0b1220;
      color: var(--text);
      text-decoration: none;
      cursor: pointer;
      transition: transform .05s ease, background .2s ease;
    }
    .btn:hover { background: #0f172a; }
    .btn:active { transform: translateY(1px); }
    .btn.primary { background: var(--accent); border-color: transparent; color: white; }
    .btn.danger { background: #1f2937; border-color: #4b5563; color: var(--danger); }
    .btn.success { background: #1f2937; border-color: #4b5563; color: var(--success); }
    .grid {
      display: grid;
      gap: 1rem;
    }
    .grid.cols-2 { grid-template-columns: repeat(2, minmax(0, 1fr)); }
    @media (max-width: 800px) {
      .grid.cols-2 { grid-template-columns: 1fr; }
    }
    table {
      width: 100%;
      border-collapse: collapse;
      overflow: hidden;
      border-radius: 12px;
      border: 1px solid var(--border);
      background: #0b1220;
    }
    th, td {
      text-align: left;
      padding: .75rem .9rem;
      border-bottom: 1px solid var(--border);
      vertical-align: top;
      color: var(--text);
    }
    th { background: #0f172a; font-weight: 600; }
    tr:hover td { background: #0f172a; }
    input[type="text"], input[type="email"], input[type="password"], select {
      width: 100%;
      padding: .7rem .8rem;
      border-radius: 10px;
      background: #0b1220;
      border: 1px solid var(--border);
      color: var(--text);
      outline: none;
    }
    label { color: var(--muted); font-size: .9rem; }
    .field { display: grid; gap: .35rem; }
    .actions { display: flex; gap: .5rem; flex-wrap: wrap; }
    .muted { color: var(--muted); }
    .badge {
      display: inline-block;
      border-radius: 999px;
      padding: .2rem .55rem;
      font-size: .8rem;
      border: 1px solid var(--border);
      background: #0f172a;
      color: var(--text);
    }
    .badge.green { color: var(--success); }
    .badge.red { color: var(--danger); }
    .flash {
      padding: .6rem .8rem;
      border-radius: 10px;
      border: 1px solid var(--border);
      background: rgba(16,185,129,.08);
      color: #a7f3d0;
      margin-bottom: .75rem;
    }
    .flash.error {
      background: rgba(239,68,68,.08);
      color: #fecaca;
    }
    .searchbar {
      display: flex;
      gap: .5rem;
      align-items: center;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="card">
      <div class="header">
        <h1>@yield('header', 'Users')</h1>
        <div class="actions">
          <a href="{{ route('users.index') }}" class="btn">Users</a>
          <a href="{{ route('users.create') }}" class="btn primary">+ New User</a>
        </div>
      </div>

      @include('partials.flash')

      @yield('content')
    </div>
    <p class="muted" style="margin-top:1rem;text-align:center;">Laravel User Management • Minimal UI</p>
  </div>
</body>
</html>

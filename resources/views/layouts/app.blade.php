<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{ $title ?? 'Laravel POS' }}</title>
    <style>
        :root { font-family: Inter, ui-sans-serif, system-ui, sans-serif; color: #172033; background: #f6f8fb; }
        body { margin: 0; } .nav { background: #172033; padding: 1rem 7%; display: flex; gap: 1.25rem; align-items: center; }
        .nav a { color: #dbeafe; text-decoration: none; } .nav .brand { color: #fff; font-weight: 700; margin-right: auto; }
        main { max-width: 1100px; margin: 0 auto; padding: 3rem 7%; } .hero { background: #e0f2fe; border-radius: 18px; padding: 3rem; }
        .button { display: inline-block; background: #2563eb; color: #fff; padding: .7rem 1rem; border-radius: 8px; text-decoration: none; margin: .25rem .5rem .25rem 0; }
        table { width: 100%; border-collapse: collapse; background: #fff; border-radius: 12px; overflow: hidden; } th, td { padding: 1rem; text-align: left; border-bottom: 1px solid #e5e7eb; } th { background: #eff6ff; }
        .muted { color: #64748b; }
    </style>
</head>
<body>
    <nav class="nav"><a class="brand" href="{{ route('home') }}">Laravel POS</a><a href="{{ route('home') }}">Home</a><a href="{{ route('about') }}">About</a><a href="{{ route('customers.index') }}">Customers</a><a href="{{ route('users.index') }}">Users</a></nav>
    <main>@yield('content')</main>
</body>
</html>

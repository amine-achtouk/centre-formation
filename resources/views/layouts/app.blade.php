<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'Mini-site MVC')</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 0; background: #f9f9f9; color: #333; }
        nav { background: #2c3e50; padding: 1rem; display: flex; gap: 20px; }
        nav a { color: white; text-decoration: none; padding: 8px 12px; border-radius: 4px; }
        nav a.active { background: #3498db; font-weight: bold; } /* Mise en évidence de la page active[cite: 2] */
        .container { padding: 20px; max-width: 800px; margin: auto; }
    </style>
</head>
<body>

    <nav>
        <a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Accueil</a>
        <a href="{{ route('filieres') }}" class="{{ request()->routeIs('filieres') ? 'active' : '' }}">Filières</a>
        <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'active' : '' }}">Contact</a>
    </nav>

    <div class="container">
        @yield('content')
    </div>

</body>
</html>
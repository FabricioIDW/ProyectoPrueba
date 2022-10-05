<header>
    <h1>FLY Car</h1>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}" class="{{ request()->routeIs('home') ? 'active' : '' }}">Inicio</a></li>
            <li><a href="{{ route('catalogo.index') }}" class="{{ request()->routeIs('catalogo.*') ? 'active' : '' }}">Cat&aacute;logo</a></li>
            <li><a href="">Productos</a></li>
            <li><a href="{{ route('ofertas.index') }}" class="{{ request()->routeIs('ofertas.*') ? 'active' : '' }}">Ofertas</a></li>
            <li><a href="{{ route('nosotros') }}" class="{{ request()->routeIs('nosotros') ? 'active' : '' }}">Nosotros</a></li>
            <li><a href="{{ route('contactanos.index') }}" class="{{ request()->routeIs('contactanos.index') ? 'active' : '' }}">Contactanos</a></li>
        </ul>
    </nav>
</header>
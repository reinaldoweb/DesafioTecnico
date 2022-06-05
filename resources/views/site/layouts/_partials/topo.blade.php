<div class="topo">

    <div class="logo">
        <a href="{{ route('site.index') }}">
            <img src="{{ asset('img/logo.png') }}">
        </a>
    </div>

    <div class="menu">
        <ul>
            <li> </li>
            <li><a href="{{ route('site.index') }}">Home</a></li>
            <li><a href="{{ route('site.pedido') }}">Pedidos</a></li>
            <li><a href="{{ route('site.produto') }}">Produtos</a></li>
            <li><a href="{{ route('app.sair') }}">Sair</a></li>
        </ul>
    </div>
</div>

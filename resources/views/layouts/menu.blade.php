<li class="{{ Request::is('inicio') ? 'active' : '' }}">
    <a href="{{ route('inicio') }}"><i class="fa fa-dot-circle-o"></i><span> Inicio</span></a>
</li>

<li class="{{ Request::is('users*') ? 'active' : '' }}">
    <a href="{{ route('users.index') }}"><i class="fa fa-users"></i><span> Usuarios</span></a>
</li>

<li class="{{ Request::is('cargos*') ? 'active' : '' }}">
    <a href="{{ route('cargos.index') }}"><i class="fa fa-id-card"></i><span> Cargos</span></a>
</li>

<li class="treeview {{ Request::is('inventario*') ? 'active' : '' }}">
    <a href="#">
        <i class="fa fa-archive"></i>
        <span>Inventario</span>
        <span class="pull-right-container">
          <i class="fa fa-angle-right pull-right"></i>
        </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('inventario/categoriaProductos*') ? 'active' : '' }}">
            <a href="{!! route('categoriaProductos.index') !!}"><i class="fa fa-list"></i><span> Categorías</span></a>
        </li>
        <li class="{{ Request::is('inventario/productos*') ? 'active' : '' }}">
            <a href="{!! route('productos.index') !!}"><i class="fa fa-truck"></i><span> Productos</span></a>
        </li>
    </ul>
</li>


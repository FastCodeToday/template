<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{ Gravatar::get(Auth::user()->email) }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }} {{ Auth::user()->lastname }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Buscar..."/>
                <span class="input-group-btn">
  <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
</span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menú Principal</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{url('home')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
            <li><a href="#"><span>Another Link</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa fa-list-ul"></i> <span>Catálogo</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> <span>Link 1</span></a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> <span>Link 2</span></a></li>
                </ul>
            </li>
            @can('admin_menu')
            <li class="treeview">
                <a href="#"><i class="fa fa-gear"></i> <span>Administración</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('roles') }}"><i class="fa fa-circle-o"></i> <span>Roles</span></a></li>
                    <li><a href="{{ url('permissions') }}"><i class="fa fa-circle-o"></i> <span>Permisos</span></a></li>
                </ul>
            </li>
                @endcan
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
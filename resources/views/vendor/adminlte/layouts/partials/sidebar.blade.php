<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        @if (! Auth::guest())
            <div class="user-panel">
                <div class="pull-left image">
                    <img src="{{ Gravatar::get($user->email) }}" class="img-circle" alt="User Image" />
                </div>
                <div class="pull-left info">
                    <p style="overflow: hidden;text-overflow: ellipsis;max-width: 160px;" data-toggle="tooltip" title="{{ Auth::user()->name }}">{{ Auth::user()->name }}</p>
                    <!-- Status -->
                    <a href="#"><i class="fa fa-circle text-success"></i> {{ trans('adminlte_lang::message.online') }}</a>
                </div>
            </div>
        @endif

        <!-- search form (Optional) -->
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="{{ trans('adminlte_lang::message.search') }}..."/>
              <span class="input-group-btn">
                <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">{{ trans('adminlte_lang::message.header') }}</li>
            <!-- Optionally, you can add icons to the links -->
            <li class="active"><a href="{{ url('/home') }}"><i class='fa fa-tachometer'></i> <span>{{ trans('adminlte_lang::message.dashboard') }}</span></a></li>
            <li><a href="{{ url('catalog') }}"><i class='fa fa-book'></i> <span>{{ trans('adminlte_lang::message.catalog') }}</span></a></li>
            <li><a href="{{ url('map') }}"><i class='fa fa-book'></i> <span>{{ trans('adminlte_lang::message.map') }}</span></a></li>
            <li class="treeview">
                <a href="#"><i class='fa fa-link'></i> <span>{{ trans('adminlte_lang::message.new') }}</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li><a href="{{ url('publishers') }}">{{ trans('adminlte_lang::message.publishers') }}</a></li>
                    <li><a href="{{ url('distributors') }}">{{ trans('adminlte_lang::message.distributors') }}</a></li>
                    <li><a href="{{ url('branch') }}">{{ trans('adminlte_lang::message.branch') }}</a></li>
                    <li><a href="{{ url('authors') }}">{{ trans('adminlte_lang::message.authors') }}</a></li>
                    <li><a href="{{ url('books') }}">{{ trans('adminlte_lang::message.books') }}</a></li>
                </ul>
            </li>
        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>

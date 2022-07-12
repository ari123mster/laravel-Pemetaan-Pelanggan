<aside class="main-sidebar">


    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">

            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="header">MAIN NAVIGATION</li>
            <li class="{{ Request::path() == 'teknisi/dashboard' ? 'active' : '' }}">
                <a href="{{ url('teknisi/dashboard') }}">
                    <i class="fa fa-dashboard"></i> <span>Dashboard</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>


            <li class="{{ Request::path() == 'teknisi/customer' ? 'active' : '' }}">
                <a href="{{ url('teknisi/customer') }}">
                    <i class="fa fa-map"></i> <span>Cari Data Pelanggan</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>
            <li class="{{ Request::path() == 'teknisi/riwayat' ? 'active' : '' }}">
                <a href="{{ url('teknisi/riwayat') }}">
                    <i class="fa fa-table"></i> <span>Manage Komplain </span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>


            <li class="{{ Request::path() == 'teknisi/tampil' ? 'active' : '' }}">
                <a href="{{ url('teknisi/tampil') }}">
                    <i class="fa fa-pie-chart"></i> <span>Grafik Wilayah</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>


            <li class="{{ Request::path() == 'keluar' ? 'active' : '' }}">
                <a href="{{ route('logout') }}">
                    <i class="fa fa-trash"></i> <span>Logout</span>
                    <span class="pull-right-container">
                    </span>
                </a>
            </li>



            <!--<li>-->
            <!--  <a href="{{ url('agenda') }}">-->
            <!--    <i class="fa fa-th"></i> <span>Agenda Bulan Ini</span>-->
            <!--    <span class="pull-right-container">-->
            <!--      <small class="label pull-right bg-green">new</small>-->
            <!--    </span>-->
            <!--  </a>-->
            <!--</li>-->



        </ul>
    </section>
    <!-- /.sidebar -->
</aside>

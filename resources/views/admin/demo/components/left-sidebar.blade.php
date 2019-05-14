<!-- LEFT SIDEBAR -->
<div id="sidebar-nav" class="sidebar">
    <div class="sidebar-scroll">
        <nav>
            <ul class="nav">
                <li><a href="{{ route('admin.demo.dashboard') }}" class=""><i class="lnr lnr-home"></i> <span>Dashboard</span></a></li>
                <li><a href="{{ route('admin.demo.elements') }}" class=""><i class="lnr lnr-code"></i> <span>Elements</span></a></li>
                <li><a href="{{ route('admin.demo.charts') }}" class=""><i class="lnr lnr-chart-bars"></i> <span>Charts</span></a></li>
                <li><a href="{{ route('admin.demo.panels') }}" class=""><i class="lnr lnr-cog"></i> <span>Panels</span></a></li>
                <li><a href="{{ route('admin.demo.notifications') }}" class=""><i class="lnr lnr-alarm"></i>
                        <span>Notifications</span></a></li>
                <li>
                    <a href="#subPages" data-toggle="collapse" class="collapsed"><i class="lnr lnr-file-empty"></i>
                        <span>Pages</span> <i class="icon-submenu lnr lnr-chevron-left"></i></a>
                    <div id="subPages" class="collapse ">
                        <ul class="nav">
                            <li><a href="{{ route('admin.demo.pageProfile') }}" class="">Profile</a></li>
                            <li><a href="{{ route('admin.demo.pageLogin') }}" class="">Login</a></li>
                            <li><a href="{{ route('admin.demo.pageLockscreen') }}" class="">Lockscreen</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="{{ route('admin.demo.tables') }}" class=""><i class="lnr lnr-dice"></i> <span>Tables</span></a></li>
                <li><a href="{{ route('admin.demo.typography') }}" class=""><i class="lnr lnr-text-format"></i>
                        <span>Typography</span></a></li>
                <li><a href="{{ route('admin.demo.icons') }}" class=""><i class="lnr lnr-linearicons"></i> <span>Icons</span></a></li>
            </ul>
        </nav>
    </div>
</div>
<!-- END LEFT SIDEBAR -->
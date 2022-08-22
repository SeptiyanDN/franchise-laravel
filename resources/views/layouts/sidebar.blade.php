<nav class="navbar-default navbar-static-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav metismenu" id="side-menu">
            <li class="nav-header">
                <div class="dropdown profile-element"> <span>
                        <img alt="image" class="img-circle" src={{ asset("assets/img/profile_small.jpg")}} />
                         </span>
                    <a data-toggle="dropdown" class="dropdown-toggle" href="#">
                        <span class="clear"> <span class="block m-t-xs"> <strong class="font-bold">{{Auth::user()->name}}</strong>
                         </span> <span class="text-muted text-xs block">{{Auth::user()->role->nama}}<b class="caret"></b></span> </span> </a>
                    <ul class="dropdown-menu animated fadeInRight m-t-xs">
                        <li><a href="profile.html">Profile</a></li>
                        <li class="divider"></li>
                        <li><a href="login.html">Ubah Password</a></li>
                    </ul>
                </div>
                <div class="logo-element">
                    CMS
                </div>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Dashboards</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li><a href="/">Dashboard v.1</a></li>
                </ul>
            </li>
            <li>
                <a href="index.html"><i class="fa fa-th-large"></i> <span class="nav-label">Master Data</span> <span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    @if (Auth::user()->role->nama == 'Super Admin')
                    <li><a href="/superadmin/daftar-pemilik-bisnis">Pemilik Bisnis</a></li>
                    @elseif(Auth::user()->role->nama == 'Admin')
                    <li><a href="/admin/daftar-pemilik-bisnis">Pemilik Bisnis</a></li>
                    @endif

                </ul>
            </li>
            <li>
                <a href="/"><i class="fa fa-diamond"></i> <span class="nav-label">Layouts</span></a>
            </li>

        </ul>

    </div>
</nav>

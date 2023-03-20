<ul class="navbar-nav" id="navbar-nav">
    <li class="menu-title"><span data-key="t-menu">Menu</span></li>
    <li class="nav-item">
        <a class="nav-link menu-link {{ request()->is('admin/home') ? 'active' : '' }}"  href="{{ url('/admin/home') }}">
            <i class="ri-dashboard-2-line"></i>
            <span data-key="t-dashboard">Dashboard</span>
        </a>
    </li>

    <li class="menu-title"><span data-key="t-eticketing">Eticketing</span></li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarDataDestination" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarDataDestination">
            <i class="ri-pin-distance-line"></i>
            <span data-key="t-data-destination">Data Destinasi</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarDataDestination">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="dashboard-analytics.html" class="nav-link" data-key="t-harian">
                        Daftar Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="dashboard-crm.html" class="nav-link" data-key="t-bulanan">
                        Category
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link {{ request()->is('admin/report/*') ? 'collapsed active' : '' }}" href="#sidebarReportTiket" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarReportTiket">
            <i class="ri-file-list-3-line"></i>
            <span data-key="t-tiketdestinasi">Lap. Eticketing</span>
        </a>
        <div class="collapse menu-dropdown {{ request()->is('admin/report/*') ? 'show' : '' }}" id="sidebarReportTiket">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ url('admin/report/tourist-visitors') }}" class="nav-link {{ request()->is('admin/report/tourist-visitors') ? 'active' : '' }}" data-key="t-tourist-visitors">
                        Pengunjung Wisata
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/report/all-destination') }}" class="nav-link {{ request()->is('admin/report/all-destination') ? 'active' : '' }}" data-key="t-all-destination">
                        Tiket Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/report/tabuhan') }}" class="nav-link {{ request()->is('admin/report/tabuhan') ? 'active' : '' }}" data-key="t-tabuhan">
                        Tiket Tabuhan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/report/mustika-conservasi') }}" class="nav-link {{ request()->is('admin/report/mustika-conservasi') ? 'active' : '' }}" data-key="t-mustika">
                        Tiket Mustika Conservasi
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarDataTiket" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarDataTiket">
            <i class="ri-list-check-2"></i>
            <span data-key="t-tiketdestinasi">Data Tiket Destinasi</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarDataTiket">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ url('admin/ticket/all-destination') }}" class="nav-link" data-key="t-all-destination">
                        Semua Destinasi
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/ticket/tabuhan') }}" class="nav-link" data-key="t-tabuhan">
                        Tiket Tabuhan
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('admin/ticket/mustika-conservasi') }}" class="nav-link" data-key="t-mustika">
                        Tiket Mustika Conservasi
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link {{ request()->is('admin/eticketing-users/*') ? 'collapsed active' : '' }}" href="#sidebarKelolaAdmin" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarKelolaAdmin">
            <i class="ri-account-circle-line"></i>
            <span data-key="t-pengguna-eticketing">Admin Eticketing</span>
        </a>
        <div class="collapse menu-dropdown {{ request()->is('admin/eticketing-users/*') ? 'show' : '' }}" id="sidebarKelolaAdmin">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="{{ url("admin/eticketing-users/request")}}" class="nav-link {{ request()->is('admin/eticketing-users/request') ? 'active' : '' }}" data-key="t-request">
                        Pengajuan Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url("admin/eticketing-users/manage")}}" class="nav-link {{ request()->is('admin/eticketing-users/manage') ? 'active' : '' }}" data-key="t-manage">
                        Kelola Admin
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url("admin/eticketing-users/tracking")}}" class="nav-link {{ request()->is('admin/eticketing-users/tracking') ? 'active' : '' }}" data-key="t-tracking">
                        Tracking Aktivitas
                    </a>
                </li>
            </ul>
        </div>
    </li>

    <li class="nav-item">
        <a class="nav-link menu-link" href="#sidebarSettingDestination" data-bs-toggle="collapse" role="button"
            aria-expanded="false" aria-controls="sidebarSettingDestination">
            <i class="ri-settings-line"></i>
            <span data-key="t-setting-destination">Setting</span>
        </a>
        <div class="collapse menu-dropdown" id="sidebarSettingDestination">
            <ul class="nav nav-sm flex-column">
                <li class="nav-item">
                    <a href="dashboard-analytics.html" class="nav-link" data-key="t-kuota-hari-libur">
                        Kuota dan Hari libur
                    </a>
                </li>
            </ul>
        </div>
    </li>
</ul>

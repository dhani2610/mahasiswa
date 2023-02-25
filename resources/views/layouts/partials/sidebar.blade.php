<!-- ========== Left Sidebar Start ========== -->
<style>
span{
    color: black;
}
#sidebar-menu{
    background: white;
}
.simplebar-content-wrapper{
    background: white!important;
}

body[data-sidebar=dark] .mm-active .active {
    color: black!important;
}

</style>
<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu" style="background:white">
                @if(auth()->user()->can('dashboard') || auth()->user()->can('master-data') || auth()->user()->can('history-log-list'))
                <li class="menu-title" key="t-menu">Menu</li>
                @endif

                @if(auth()->user()->can('dashboard'))
                <li>
                    <a href="{{ route('dashboard.index') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span key="t-dashboards">Dashboard</span>
                    </a>
                </li>
                @endif
                
                @if(auth()->user()->can('pindah-event'))
                <li>
                    <a href="#">
                        <i class="mdi mdi-folder-outline"></i>
                        <span data-key="t-dashboard">Pindah Semester</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('data'))
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-folder-outline"></i>
                            <span key="t-dashboards">Data</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('mahasiswa-list') }}" key="t-default">Mahasiswa</a></li>
                            <li><a href="{{ route('prodi-list') }}" key="t-default">Prodi</a></li>
                            <li><a href="{{ route('tahun-ajaran-list') }}" key="t-saas">Tahun Ajaran</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('pembayaran'))
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-folder-outline"></i>
                            <span key="t-dashboards">Jurnal</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('jurnal-pemasukan-list') }}" key="t-default">Jurnal Pemasukan</a></li>
                            <li><a href="{{ route('jurnal-pengeluaran-list') }}" key="t-default">Jurnal Pengeluaran</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('pembayaran'))
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-folder-outline"></i>
                            <span key="t-dashboards">Pembayaran</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a class="d-none" href="{{ route('pos-keuangan-list') }}" key="t-default">POS Keuangan</a></li>
                            <li><a href="#" key="t-default">Cek Pembayaran (On Progress)</a></li>
                            <li><a href="{{ route('pembayaran-spp-list') }}" key="t-default">Pembayaran SPP Mahasiswa</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('setting-event'))
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-folder-outline"></i>
                            <span key="t-dashboards">Setting Event</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('pengumuman-list') }}" key="t-default">Pengumuman (On Progress)</a></li>
                            <li><a href="#" key="t-default">Kalender (On Progress)</a></li>
                        </ul>
                    </li>
                @endif

                @if(auth()->user()->can('master-data'))
                <li>
                    <a href="{{ route('master-data.index') }}">
                        <i class="mdi mdi-folder-outline"></i>
                        <span data-key="t-dashboard">Master Data</span>
                    </a>
                </li>
                @endif

                @if(auth()->user()->can('laporan'))
                    <li>
                        <a href="javascript: void(0);" class="has-arrow waves-effect">
                            <i class="mdi mdi-folder-outline"></i>
                            <span key="t-dashboards">Laporan</span>
                        </a>
                        <ul class="sub-menu" aria-expanded="false">
                            <li><a href="{{ route('report-spp') }}" key="t-default">Laporan Pembayaran</a></li>
                        </ul>
                    </li>
                @endif

                <li>
                    <form action="{{ url('/logout') }}" method="post">
                        @csrf
                        <button type="submit" class="btn"> 
                            <i class="mdi mdi-logout"></i>
                            <span data-key="t-dashboard">Logout</span>
                        </button>
                    </form>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
<!-- Left Sidebar End -->
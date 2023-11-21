<ul class="sidebar-nav" data-coreui="navigation" data-simplebar>
    <li class="nav-item">
        <a class="nav-link" href="{{ route('home') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-speedometer') }}"></use>
            </svg>
            {{ __('Dashboard') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('users.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-user') }}"></use>
            </svg>
            {{ __('User') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('kategori.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-menu') }}"></use>
            </svg>
            {{ __('Kategori') }}
        </a>
    </li>

    <li class="nav-item">
        <a class="nav-link" href="{{ route('barang.index') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-basket') }}"></use>
            </svg>
            {{ __('Barang') }}
        </a>
    </li>

    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-truck') }}"></use>
            </svg>
            {{ __('Data Pemesanan') }}
        </a>
    </li>

    
    <li class="nav-item">
        <a class="nav-link" href="{{ route('about') }}">
            <svg class="nav-icon">
                <use xlink:href="{{ asset('icons/coreui.svg#cil-bar-chart') }}"></use>
            </svg>
            {{ __('Laporan Penjualan') }}
        </a>
    </li>
            </li>
        </ul>
    </li>
</ul>
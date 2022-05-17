<aside class="main-sidebar sidebar-dark-primary elevation-4">

    <a href="{{ url('dashboard') }}" class="brand-link text-center p-2">
        {{-- <img src="{{ asset('admin-lte') }}/dist/img/AdminLTELogo.png" alt="AdminLTE Logo"
            class="brand-image img-circle elevation-3" style="opacity: .8"> --}}
        <h3 class="brand-text font-weight-light"><span class="text-bold">Q</span> Tester</h3>
    </a>

    <div class="sidebar">
    @guest
        @if (Route::has('login'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
        @endif

        @if (Route::has('register'))
            <li class="nav-item">
                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
        @endif
    @else
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                <img src="{{ asset('admin-lte') }}/dist/img/user2-160x160.jpg" class="img-circle elevation-2"
                    alt="User Image">
            </div>
            <div class="info">
                <a href="#" class="d-block">Welcome, {{ Auth::user()->name }}</a>
            </div>
        </div>


        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">

                <li class="nav-item">
                    <a href="{{ url('dashboard') }}" class="nav-link {{ (request()->is('dashboard')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>
                <li class="nav-header">MAIN MENU</li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/items') }}" class="nav-link {{ (request()->is('dashboard/items*')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-file-alt"></i>
                        <p>
                            Barang
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/categories') }}" class="nav-link {{ (request()->is('dashboard/categories*')) ? 'active' : '' }}">
                        <i class="nav-icon far fa-bookmark"></i>
                        <p>
                            Kategori
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ url('dashboard/transactions') }}" class="nav-link {{ (request()->is('dashboard/transactions*')) ? 'active' : '' }}">
                        <i class="nav-icon fas fa-chart-line"></i>
                        <p>
                            Transaksi
                        </p>
                    </a>
                </li>
            </ul>
        </nav>
    
    @endguest
    </div>

</aside>

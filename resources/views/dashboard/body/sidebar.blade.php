<nav class="sidenav shadow-right sidenav-light">
    <div class="sidenav-menu">
        <div class="nav accordion" id="accordionSidenav">
            <!-- Sidenav Menu Heading (Core)-->
            <div class="sidenav-menu-heading">Dashboard</div>
            <a class="nav-link {{ Request::is('dashboard*') ? 'active' : '' }}" href="{{ route('dashboard') }}">
                <div class="nav-link-icon"><i data-feather="activity"></i></div>
                Dashboard
            </a>
            <a class="nav-link {{ Request::is('pos*') ? 'active' : '' }}" href="{{ route('pos.index') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Werknemers
            </a>

            <!-- Sidenav Heading (Orders)-->
            <div class="sidenav-menu-heading">Afspraken</div>
            <a class="nav-link {{ Request::is('orders/complete*') ? 'active' : '' }}" href="{{ route('appointment.show') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-clock"></i></div>
                Aanvraag
            </a>
            <a class="nav-link {{ Request::is('orders/pending*') ? 'active' : '' }}" href="{{ route('order.pendingOrders') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-calendar-days"></i></div>
                Gepland
            </a>
            <a class="nav-link {{ Request::is('orders/due*') ? 'active' : '' }}" href="{{ route('order.dueOrders') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-circle-check"></i></div>
                Afgerond
            </a>
            <!-- Sidenav Heading (Purchases)-->
            <div class="sidenav-menu-heading">Website Instellingen</div>
            <a class="nav-link {{ Request::is('purchases', 'purchase/create*', 'purchases/details*') ? 'active' : '' }}" href="{{ route('purchases.allPurchases') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-dice"></i></div>
                Toegang
            </a>
            <a class="nav-link {{ Request::is('purchases/approved*') ? 'active' : '' }}" href="{{ route('purchases.approvedPurchases') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-money-bill"></i></div>
                Prijzen & Pakketten
            </a>
            <a class="nav-link {{ Request::is('purchases/report*') ? 'active' : '' }}" href="{{ route('purchases.dailyPurchaseReport') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-image"></i></div>
                Foto's
            </a>

            <!-- Sidenav Accordion (Pages)-->
            {{-- <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages">
                <div class="nav-link-icon"><i data-feather="grid"></i></div>
                People
                <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" data-bs-parent="#accordionSidenav">
                <nav class="sidenav-menu-nested nav accordion" id="accordionSidenavPagesCustomers">
                    <!-- Nested Sidenav Accordion (Pages -> People)-->
                    <a class="nav-link collapsed" href="javascript:void(0);" data-bs-toggle="collapse" data-bs-target="#pagesCollapseCustomers" aria-expanded="false" aria-controls="pagesCollapseCustomers">
                        Customers
                        <div class="sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                    </a>
                    <div class="collapse" id="pagesCollapseCustomers" data-bs-parent="#accordionSidenavPagesCustomers">
                        <nav class="sidenav-menu-nested nav">
                            <a class="nav-link" href="#">Show All</a>
                        </nav>
                    </div>
                    <a class="nav-link" href="#">Customers</a>
                    <a class="nav-link" href="#">Suppliers</a>
                </nav>
            </div> --}}



            <!-- Sidenav Heading (Settings)-->
            <div class="sidenav-menu-heading">Settings</div>
            <a class="nav-link {{ Request::is('users*') ? 'active' : '' }}" href="{{ route('users.index') }}">
                <div class="nav-link-icon"><i class="fa-solid fa-users"></i></div>
                Gebruikers
            </a>
        </div>
    </div>

    <!-- Sidenav Footer-->
    <div class="sidenav-footer">
        <div class="sidenav-footer-content">
            <div class="sidenav-footer-subtitle">Ingelogt als:</div>
            <div class="sidenav-footer-title">{{ auth()->user()->name }}</div>
        </div>
    </div>
</nav>

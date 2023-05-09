<nav class="sb-sidenav accordion" id="sidenavAccordion" style="background-color: #006293;">
    <div class="sb-sidenav-menu">
        <div class="nav" style="color: white">
            <div class="sb-sidenav-menu-heading">Core</div>
            <a class="nav-link" href="{{route('home')}}" style="color: white">
                <div class="sb-nav-link-icon" style="color: white"><i class="fas fa-tachometer-alt"></i></div>
                Dashboard
            </a>
            <div class="sb-sidenav-menu-heading">Interface</div>
            {{-- <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapseLayouts" aria-expanded="false" aria-controls="collapseLayouts" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                Categories
                <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapseLayouts" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav">
                    <a class="nav-link" href="layout-static.html" style="color: white">Static Navigation</a>
                    <a class="nav-link" href="layout-sidenav-light.html" style="color: white">Light Sidenav</a>
                </nav>
            </div> --}}
            <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#collapsePages" aria-expanded="false" aria-controls="collapsePages" style="color: white">
                <div class="sb-nav-link-icon" style="color: white"><i class="fas fa-book-open"></i></div>
                User Management
                <div class="sb-sidenav-collapse-arrow" style="margin-left: 12px;"><i class="fas fa-angle-down"></i></div>
            </a>
            <div class="collapse" id="collapsePages" aria-labelledby="headingTwo" data-bs-parent="#sidenavAccordion">
                <nav class="sb-sidenav-menu-nested nav accordion" id="sidenavAccordionPages">
                    {{-- <a class="nav-link collapsed" href="{{ route('user.list')}}" data-bs-toggle="collapse" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth" style="color: white">
                        Users
                    </a> --}}
                    <a class="nav-link collapsed" href="{{ route('user.list')}}" data-bs-toggle="" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth" style="color:white">Users</a>

                    {{-- error --}}
                    <a class="nav-link collapsed" href="{{ route('users.role')}}" data-bs-toggle="" data-bs-target="#pagesCollapseAuth" aria-expanded="false" aria-controls="pagesCollapseAuth" style="color:white">Role</a>
                    {{-- error end--}}
                </nav>
            </div>
            {{-- <div class="sb-sidenav-menu-heading">Addons</div> --}}
            {{-- <a class="nav-link" href="charts.html" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-chart-area"></i></div>
                Charts
            </a> --}}
            {{-- <a class="nav-link" href="tables.html" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Tables
            </a> --}}
            <a class="nav-link" href="{{route('categories.list')}}" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Category
            </a>
            <a class="nav-link" href="{{route('products.list')}}" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Product
            </a>
            <div class="sb-sidenav-menu-heading">Frontend</div>

            <a class="nav-link" href="{{route('sliders.list')}}" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Slider
            </a>
            <a class="nav-link" href="" style="color: white">
                <div class="sb-nav-link-icon"><i class="fas fa-table"></i></div>
                Offer
            </a>
        </div>
    </div>
</nav>
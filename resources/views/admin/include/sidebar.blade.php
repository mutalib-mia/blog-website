<div id="layoutSidenav_nav">
    <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
        <div class="sb-sidenav-menu">
            <div class="nav">
                <div class="sb-sidenav-menu-heading">Core</div>
                <a class="nav-link" href="{{ route('dashboard') }}">
                    <div class="sb-nav-link-icon"><i class="fas fa-tachometer-alt"></i></div>
                    Dashboard
                </a>
{{--                <div class="sb-sidenav-menu-heading">Interface</div>--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Blog" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Blog Module
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Blog" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('add.blog') }}">Add Blog</a>
                        <a class="nav-link" href="{{ route('manage.blog') }}">Manage Blog</a>
                    </nav>
                </div>{{--                <div class="sb-sidenav-menu-heading">Interface</div>--}}
                <a class="nav-link collapsed" href="#" data-bs-toggle="collapse" data-bs-target="#Author" aria-expanded="false" aria-controls="collapseLayouts">
                    <div class="sb-nav-link-icon"><i class="fas fa-columns"></i></div>
                    Author Module
                    <div class="sb-sidenav-collapse-arrow"><i class="fas fa-angle-down"></i></div>
                </a>
                <div class="collapse" id="Author" aria-labelledby="headingOne" data-bs-parent="#sidenavAccordion">
                    <nav class="sb-sidenav-menu-nested nav">
                        <a class="nav-link" href="{{ route('add.author') }}">Add Author</a>
                        <a class="nav-link" href="{{ route('manage.author') }}">Manage Author</a>
                    </nav>
                </div>

            </div>
        </div>

    </nav>
</div>

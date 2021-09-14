<style>
    .custom-sidebar-bg {
        background-color: rgba(240, 242, 247, 0.25);
    background-image: -moz-linear-gradient(40deg,
        #194d33 0%,
        #339966 100%) !important;
    background-image: -webkit-linear-gradient(40deg,
        #194d33 0%,
        #339966 100%) !important;
    background-image: -ms-linear-gradient(40deg,
        #194d33 0%,
        #339966 100%) !important;
    }

    .nav-sidebar>.nav-item>.nav-link.active {
        /* background-color: #eb212d !important; */
        background-color: #194d33 !important;
    }


    .brand-link .brand-image {
        margin-left: .3rem;
    }

</style>
<aside class="main-sidebar sidebar-dark-primary custom-sidebar-bg elevation-4">
    <a href="{{ route('home') }}" class="brand-link">
        <img src="{{ asset('images/logo.png') }}" alt="{{ config('app.name') }} Logo"
            class="brand-image img-circle elevation-3">
        <span class="brand-text font-weight-light"><strong>EDMS</strong><span>
    </a>

    <div class="sidebar">
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                @include('layouts.menu')
            </ul>
        </nav>
    </div>

</aside>

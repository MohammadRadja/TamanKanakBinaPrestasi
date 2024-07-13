<nav class="navbar navbar-expand navbar-light navbar-bg">
    <a class="sidebar-toggle js-sidebar-toggle">
        <i class="hamburger align-self-center"></i>
    </a>
    <div class="navbar-collapse collapse">
        <ul class="navbar-nav navbar-align">
            <li class="nav-item dropdown">
                <a class="nav-icon dropdown-toggle d-inline-block" href="#" data-bs-toggle="dropdown">
                    <i class="align-middle" data-feather="settings"></i>
                </a>
                <div class="dropdown-menu dropdown-menu-end">
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <a onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                        class="dropdown-item" href="#">
                        <i class="align-middle me-1" data-feather="log-out"></i> Log out
                    </a>
                </div>
            </li>
        </ul>
    </div>
</nav>

<style>
    .navbar{
        background-color: #3f417e;
    }
    .hamburger, .hamburger:after, .hamburger:before {
        background-color: white;
    }
    .nav-flag, .nav-icon{
        color: white;
    }
</style>
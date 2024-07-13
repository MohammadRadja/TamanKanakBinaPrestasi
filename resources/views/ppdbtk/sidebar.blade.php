<nav id="sidebar" class="sidebar js-sidebar">
    <div class="sidebar-content js-simplebar">
        <a class="sidebar-brand" href="{{ route('siswa.dashboard') }}">
            <span class="align-middle">TKIT BINA PRESTASI</span>
        </a>
        <ul class="sidebar-nav">
            @if (Session::has('pengguna_id'))
                @php
                    $role = App\Models\Pengguna::find(Session::get('pengguna_id'))->role;
                @endphp
                @if ($role === 'siswa')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('siswa.dashboard') }}">
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Dashboard</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('siswa.biodata', Session::get('pengguna_id')) }}">
                            <i class="align-middle" data-feather="user"></i> 
                            <span class="align-middle">Biodata Siswa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('siswa.jadwal', Session::get('pengguna_id')) }}">
                            <i class="align-middle" data-feather="calendar"></i> 
                            <span class="align-middle">Jadwal Akademik</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('siswa.profil') }}">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">Profil</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('forum.chat') }}">
                            <i class="align-middle" data-feather="message-circle"></i> 
                            <span class="align-middle">Forum Chat</span>
                        </a>
                    </li>
                @elseif ($role === 'admin')
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.dashboard') }}">
                            <i class="align-middle" data-feather="sliders"></i> 
                            <span class="align-middle">Dashboard Admin</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('admin.data_siswa') }}">
                            <i class="align-middle" data-feather="users"></i> 
                            <span class="align-middle">Data Siswa</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('siswa.profil') }}">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">Profil</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a class="sidebar-link" href="{{ route('forum.chat') }}">
                            <i class="align-middle" data-feather="message-circle"></i> 
                            <span class="align-middle">Forum Chat</span>
                        </a>
                    </li>
                @endif
            @endif
        </ul>
    </div>
</nav>

<style>
    .sidebar {
        background-color: #343a40;
        color: #fff;
    }

    .sidebar-brand {
        font-size: 1.5rem;
        font-weight: bold;
        padding: 1rem;
        display: block;
        text-align: center;
        color: #fff;
    }

    .sidebar-nav {
        padding: 0;
    }

    .sidebar-item {
        list-style: none;
        margin: 0.5rem 0;
    }

    .sidebar-link {
        color: #adb5bd;
        display: flex;
        align-items: center;
        padding: 0.75rem 1rem;
        text-decoration: none;
        transition: background-color 0.3s;
    }

    .sidebar-link:hover {
        background-color: #495057;
        color: #fff;
    }

    .sidebar-link i {
        margin-right: 0.5rem;
    }

    .sidebar-link span {
        font-size: 1rem;
    }

    .sidebar .active > .sidebar-link {
        background-color: #007bff;
        color: #fff;
    }
</style>


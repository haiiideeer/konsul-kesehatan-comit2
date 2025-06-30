<h4 class="text-white mb-4"><i class="bi bi-heart-pulse"></i> Konsul Dokter</h4>
<ul class="nav flex-column">
    <li class="nav-item mb-2">
        <a class="nav-link active" href="{{ route('admin.dashboard') }}">
            <i class="bi bi-speedometer2"></i> Dashboard
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link" href="{{ route('admin.konsultasi.index') }}">
            <i class="bi bi-chat-dots"></i> Data Konsultasi
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link" href="{{ route('admin.users.index') }}">
            <i class="bi bi-people"></i> Kelola Pengguna
        </a>
    </li>
    <li class="nav-item mb-2">
        <a class="nav-link" href="#">
            <i class="bi bi-graph-up"></i> Laporan Konsultasi
        </a>
    </li>
    <li class="nav-item mt-4">
        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-responsive-nav-link :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();">
                {{ __('Log Out') }}
            </x-responsive-nav-link>
        </form>
    </li>

</ul>
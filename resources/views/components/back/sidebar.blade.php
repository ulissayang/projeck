<aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

        <li class="nav-item">
            <a class="nav-link" href="{{ url('dashboard') }}">
                <i class="bi bi-grid"></i>
                <span>Dashboard</span>
            </a>
        </li><!-- End Dashboard Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed " data-bs-target="#components-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-menu-button-wide"></i><span>Informasi</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="components-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('kegiatan.index') }}">
                        <i class="bi bi-circle"></i><span>Kegiatan</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('agenda.index') }}">
                        <i class="bi bi-circle"></i><span>Agenda</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('pengumuman.index') }}">
                        <i class="bi bi-circle"></i><span>Pengumuman</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('prestasi.index') }}">
                        <i class="bi bi-circle"></i><span>Prestasi</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Components Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#forms-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-journal-text"></i><span>Profil Sekolah</span><i class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="forms-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('guru.index') }}">
                        <i class="bi bi-circle"></i><span>Guru</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('fasilitas.index') }}">
                        <i class="bi bi-circle"></i><span>Fasilitas</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('visi-misi.index') }}">
                        <i class="bi bi-circle"></i><span>Visi Misi</span>
                    </a>
                </li>
                {{-- <li>
                    <a href="forms-validation.html">
                        <i class="bi bi-circle"></i><span>Form Validation</span>
                    </a>
                </li> --}}
            </ul>
        </li><!-- End Forms Nav -->

        <li class="nav-item">
            <a class="nav-link collapsed" data-bs-target="#tables-nav" data-bs-toggle="collapse" href="#">
                <i class="bi bi-layout-text-window-reverse"></i><span>Galery</span><i
                    class="bi bi-chevron-down ms-auto"></i>
            </a>
            <ul id="tables-nav" class="nav-content collapse " data-bs-parent="#sidebar-nav">
                <li>
                    <a href="{{ route('galery-foto.index') }}">
                        <i class="bi bi-circle"></i><span>Galery Foto</span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('galery-video.index') }}">
                        <i class="bi bi-circle"></i><span>Galery Video</span>
                    </a>
                </li>
            </ul>
        </li><!-- End Tables Nav -->


        <li class="nav-heading">Pages</li>

        <li class="nav-item">
            <a class="nav-link collapsed" href="{{ route('pengaturan.index') }}">
                <i class="bi bi-gear"></i>
                <span>Pengaturan</span>
            </a>
        </li><!-- End Pengaturan Page -->


    </ul>

</aside>
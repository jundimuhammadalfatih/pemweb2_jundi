<nav class="navbar navbar-expand-lg navbar-dark bg-primary">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mx-auto">
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Dosen') ? 'active' : '' ?>" href="<?= base_url() ?>dosen/">Dosen</a>
            </li>  

            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Mahasiswa') ? 'active' : '' ?>" href="<?= base_url() ?>mahasiswa/">Mahasiswa <span class="sr-only">(current)</span></a>
            </li>
            
            <li class="nav-item">
                <a class="nav-link <?= ($title == 'Mata Kuliah') ? 'active' : '' ?>" href="<?= base_url() ?>matkul/">Mata Kuliah</a>
            </li>
        </ul>
    </div>
</nav>
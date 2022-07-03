    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Main content -->
        <section class="content">
            <div class="card-body font-weight-bold text-center border m-2">
                <div class="container">
                    <div class="row">
                        <div class="mt-lg-3 mx-auto">
                            <h3 class="text-center display-4">
                                Daftar Prodi STT-NF
                            </h3>
                            <table class="table table-hover table-striped text-center mt-lg-3">
                                <thead class="bg-white">
                                    <tr>
                                        <th>#</th>
                                        <th>Kode</th>
                                        <th>Nama Program Studi</th>
                                        <th>Kaprodi</th>
                                    </tr>
                                </thead>
                                <tbody style="border-bottom: 1px solid white; border-right: 1px solid white; border-left: 1px solid white;">
                                    <?php
                                    $nomor = 1;
                                    foreach ($isi_db as $row) {
                                    ?>
                                        <tr>
                                            <td><?= $nomor ?></td>
                                            <td><?= $row->kode ?></td>
                                            <td><?= $row->nama ?></td>
                                            <td><?= $row->kaprodi ?></td>
                                        </tr>
                                    <?php
                                        $nomor++;
                                    }
                                    ?>
                                </tbody>
                            </table>
                            <a href="<?= base_url(); ?>prodi/form" class="btn btn-success mx-auto" style="font-size: 20px;"><i class="bi bi-plus-circle-dotted"></i><strong class="ml-2">Tambah</strong></a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    </div>
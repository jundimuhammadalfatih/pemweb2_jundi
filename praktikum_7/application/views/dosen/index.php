<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-10 mt-lg-3">
            <div class="card col-lg-10 input-data mx-auto">
                <form action="<?= base_url(); ?>dosen/index" method="post">
                <h3 class="text-lg-center mt-lg-3 mb-lg-3">Form Data Dosen STT-NF</h3>
                    <div class="form-group row">
                        <label for="nidn" class="col-4 col-form-label">NIDN</label> 
                        <div class="col-8">
                        <input id="nidn" name="nidn" placeholder="Nomor Induk Dosen Nasional" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="pendidikan" class="col-4 col-form-label">Pendidikan</label> 
                        <div class="col-8">
                        <input id="pendidikan" name="pendidikan" placeholder="Pendidikan Terakhir" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label class="col-4">Jenis Kelamin</label> 
                        <div class="col-8">
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_0" type="radio" class="custom-control-input" value="L"> 
                            <label for="gender_0" class="custom-control-label">Laki-laki</label>
                        </div>
                        <div class="custom-control custom-radio custom-control-inline">
                            <input name="gender" id="gender_1" type="radio" class="custom-control-input" value="P"> 
                            <label for="gender_1" class="custom-control-label">Perempuan</label>
                        </div>
                        </div>
                    </div> 
                    <div class="form-group row">
                        <div class="offset-4 col-8">
                        <button name="submit" type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <div class="card mt-lg-3">
                <h3 class="text-center mt-lg-3">
                    Daftar Dosen
                </h3>
                <table class="table table-hover table-striped mt-lg-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIDN</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>Pendidikan</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_dsn as $dsn) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $dsn->nidn ?></td>
                                <td><?= $dsn->nama ?></td>
                                <td><?= $dsn->gender ?></td>
                                <td><?= $dsn->pendidikan ?></td>
                            </tr>
                        <?php
                            $nomor++;
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
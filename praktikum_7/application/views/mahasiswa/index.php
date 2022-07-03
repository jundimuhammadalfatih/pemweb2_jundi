<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-9 mt-lg-3">
            <div class="card col-lg-9 input-data mx-auto">
                <form action="<?= base_url(); ?>mahasiswa/index" method="post">
                <h3 class="text-lg-center mt-lg-3 mb-lg-3">Form Data Mahasiswa STT-NF</h3>    
                <div class="form-group row">
                    <label for="nama" class="col-4 col-form-label">Nama</label> 
                    <div class="col-8">
                    <input id="nama" name="nama" placeholder="Nama Lengkap" type="text" class="form-control">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="ipk" class="col-4 col-form-label">IPK</label> 
                    <div class="col-8">
                    <input id="ipk" name="ipk" placeholder="Nilai IPK" type="text" class="form-control">
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

            <div class="card mt-3">
                <h3 class="text-center mt-lg-3">
                    Daftar Mahasiswa
                </h3>
                <table class="table table-hover table-striped mt-lg-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>NIM</th>
                            <th>Nama</th>
                            <th>Jenis Kelamin</th>
                            <th>IPK</th>
                            <th>Predikat</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_mhs as $mhs) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= ($mhs->ipk == '') ? '' : '0'.$nomor.'0001' ?></td>
                                <td><?= $mhs->nama ?></td>
                                <td><?= $mhs->gender ?></td>
                                <td><?= $mhs->ipk ?></td>
                                <td><?= $mhs->predikat() ?></td>
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
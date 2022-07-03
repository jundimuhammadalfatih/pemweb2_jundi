<div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-9 mt-lg-3">
            <div class="card col-lg-9 input-data mx-auto">
                <form action="<?= base_url(); ?>matkul/index" method="post">
                <h3 class="text-lg-center mt-lg-3 mb-lg-3">Form Data Mata Kuliah STT-NF</h3>
                    <div class="form-group row">
                        <label for="nama" class="col-4 col-form-label">Nama Matkul</label> 
                        <div class="col-8">
                        <input id="nama" name="nama" placeholder="Nama Mata Kuliah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="kode" class="col-4 col-form-label">Kode</label> 
                        <div class="col-8">
                        <input id="kode" name="kode" placeholder="Kode Mata Kuliah" type="text" class="form-control">
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="sks" class="col-4 col-form-label">SKS</label> 
                        <div class="col-8">
                        <input id="sks" name="sks" placeholder="Jumlah SKS" type="text" class="form-control">
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
                    Daftar Mata Kuliah
                </h3>
                <table class="table table-hover table-striped mt-lg-3">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Kode</th>
                            <th>Nama Mata Kuliah</th>
                            <th>SKS</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $nomor = 1;
                        foreach ($list_mk as $mk) {
                        ?>
                            <tr>
                                <td><?= $nomor ?></td>
                                <td><?= $mk->kode ?></td>
                                <td><?= $mk->nama ?></td>
                                <td><?= $mk->sks ?></td>
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
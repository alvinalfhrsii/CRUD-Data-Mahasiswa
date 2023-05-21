<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?><br><br><br>
<div class="container">
    <div class="row">
        <div class="col-6 position-absolute top-0 start-50 translate-middle" style="margin-top: 15rem;">
            <h2 style="text-align: center;" class="mb-5">Form Edit Data</h2>
            <form action="/mahasiswa/update/<?= $mahasiswa['id']; ?>" method="post">
                <div class="row mb-3">
                    <label for="nama" class="col-sm-2 col-form-label">Nama</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nama" name="nama" autocomplete="off" value="<?= $mahasiswa['nama']; ?>" autofocus required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="nim" class="col-sm-2 col-form-label">Nim</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nim" name="nim" autocomplete="off" value="<?= $mahasiswa['nim']; ?>" required>
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="prodi" class="col-sm-2 col-form-label">Prodi</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prodi" name="prodi" autocomplete="off"  value="<?= $mahasiswa['prodi']; ?>" required>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" style="margin-left: 17rem; margin-top: 2rem;">Simpan</button>
                <button type="reset" class="btn btn-danger" style="margin-left: 1rem; margin-top: 2rem;">Reset</button>
            </form>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>
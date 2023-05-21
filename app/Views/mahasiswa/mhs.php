<?= $this->extend('layout/template'); ?>

<?= $this->section('konten'); ?><br><br><br>

<div class="container">
    <div class="row">
        <div class="col">
            <h1 style="text-align: center;" class="mb-4">Data Mahasiswa</h1>
            <?php if (session()->getFlashdata('pesan')) : ?>
                <div class="alert alert-success" role="alert">
                    <?= session()->getFlashdata('pesan'); ?>
                </div>
            <?php endif; ?>
            <table class="table table-striped table-hover" border="1">
                <thead>
                    <tr>
                        <th scope="col" class="ps-5">No.</th>
                        <th scope="col" class="ps-5">Nama</th>
                        <th scope="col" class="ps-5">Nim</th>
                        <th scope="col" class="ps-5">Prodi</th>
                        <th scope="col" class="ps-5">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1; ?>
                    <?php foreach ($mahasiswa as $m) : ?>
                        <tr>
                            <th scope="row" class="ps-5"><?= $i++; ?></th>
                            <td class="ps-5"><?= $m['nama']; ?></td>
                            <td class="ps-5"><?= $m['nim']; ?></td>
                            <td class="ps-5"><?= $m['prodi']; ?></td>
                            <td class="ps-5">
                                <a href="/mahasiswa/edit/<?= $m['id']; ?>" class="btn btn-success">Edit</a>
                                <form action="/mahasiswa/delete/<?= $m['id']; ?>" method="POST" class="d-inline">
                                    <?= csrf_field(); ?>
                                    <input type="hidden" name="_method" value="DELETE">
                                    <button type="submit" class="btn btn-danger" onclick="return confirm('Apakah anda yakin ingin menghapus ?')">Hapus</button>
                                </form>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

<?= $this->endSection(); ?>
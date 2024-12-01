<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <h1 class="mb-4">Tambah Buku</h1>

    <?php if(isset($validation)): ?>
        <div class="alert alert-danger"><?= $validation->listerror() ?></div>
    <?php endif; ?>

    <form action="/perpus/saveTambah" method="post">
        <?= csrf_field() ?>

        <div class="mb-3">
            <label for="id_buku" class="form-label">ID Buku</label>
            <input type="text" class="form-control" name="id_buku" id="id_buku" value="<?= set_value('id_buku')?>" required>
        </div>

        <div class="mb-3">
            <label for="judul" class="form-label">Judul</label>
            <input type="text" class="form-control" name="judul" id="judul" value="<?= set_value('judul')?>" required>
        </div>

        <div class="mb-3">
            <label for="penulis" class="form-label">Penulis</label>
            <input type="text" class="form-control" name="penulis" id="penulis" value="<?= set_value('penulis')?>" required>
        </div>

        <div class="mb-3">
            <label for="penerbit" class="form-label">Penerbit</label>
            <input type="text" class="form-control" name="penerbit" id="penerbit" value="<?= set_value('penerbit')?>" required>
        </div>

        <div class="mb-3">
            <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
            <input type="text" class="form-control" name="tahun_terbit" id="tahun_terbit" value="<?= set_value('tahun_terbit')?>" required>
        </div>

        <button type="submit" class="btn btn-success">Simpan</button>
        <a href="/perpus" class="btn btn-secondary">Kembali</a>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

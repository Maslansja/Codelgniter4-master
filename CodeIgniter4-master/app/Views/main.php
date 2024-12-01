<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perpustakaan Digital</title>
    <link rel="stylesheet" href="<?= base_url("asset/bootstrap/css/bootstrap.min.css")?>">
    <style>
        body {
            background-color: #f8f9fa; /* Warna background yang ringan */
        }
        header {
            background-color: #343a40; /* Warna gelap yang elegan */
            color: white;
        }
        h1 {
            font-size: 1.8rem;
        }
        table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-primary, .btn-danger, .btn-warning {
            border-radius: 20px;
        }
        .btn-primary {
            background-color: #28a745;
            border: none;
        }
        .btn-warning {
            background-color: #ffc107;
            border: none;
        }
        .btn-danger {
            background-color: #dc3545;
            border: none;
        }
        .container {
            margin-top: 50px;
        }
        .sidebar {
            height: 100vh;
            position: fixed;
            left: 0;
            top: 0;
            width: 250px;
            background-color: #343a40;
            padding-top: 20px;
        }
        .sidebar a {
            color: white;
            padding: 15px;
            text-decoration: none;
            display: block;
        }
        .sidebar a:hover {
            background-color: #575d63;
        }
        .main-content {
            margin-left: 260px; /* Give space for sidebar */
            padding: 20px;
        }
    </style>
</head>
<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <h2 class="text-center text-white">Menu</h2>
        <a href="/peminjaman">Data Peminjaman</a>
        <a href="/perpus">Data Buku</a>
        <a href="/datauser">Data User</a>
    </div>

    <!-- Main Content -->
    <div class="main-content">
        <header class="py-3">
            <div class="container text-center">
                <h1>Perpustakaan Digital</h1>
            </div>
        </header>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="/perpus/tambah" class="btn btn-primary mb-3">Tambah Data Buku</a>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Nomor</th>
                                <th>Id Buku</th>
                                <th>Judul</th>
                                <th>Penulis</th>
                                <th>Penerbit</th>
                                <th>Tahun Terbit</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($buku as $perpus): ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $perpus['id_buku'] ?></td>
                                    <td><?= $perpus['judul'] ?></td>
                                    <td><?= $perpus['penulis'] ?></td>
                                    <td><?= $perpus['penerbit'] ?></td>
                                    <td><?= $perpus['tahun_terbit'] ?></td>
                                    <td>
                                        <form action="perpus/edit" method="post" style="display:inline;">
                                            <input type="hidden" name="id_buku" value="<?= $perpus['id_buku'] ?>">
                                            <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                        </form>
                                        <form action="perpus/hapus" method="post" style="display:inline;">
                                            <input type="hidden" name="id_buku" value="<?= $perpus['id_buku'] ?>">
                                            <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                        </form>
                                    </td>
                                </tr>
                            <?php $no++; endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

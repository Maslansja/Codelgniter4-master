<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Peminjaman</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
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
        .table {
            background-color: white;
            border-radius: 8px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        .table th, .table td {
            vertical-align: middle;
        }
        .btn-primary, .btn-warning, .btn-danger {
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
                <h1>Daftar Peminjaman</h1>
            </div>
        </header>

        <div class="container mt-5">
            <a href="/peminjaman/create" class="btn btn-primary mb-3">Tambah Peminjaman</a>
            <table class="table table-striped table-bordered">
                <thead class="thead-light">
                    <tr>
                        <th>ID</th>
                        <th>User ID</th>
                        <th>Buku ID</th>
                        <th>Tanggal Peminjaman</th>
                        <th>Tanggal Pengembalian</th>
                        <th>Status Peminjaman</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($peminjaman as $item): ?>
                    <tr>
                        <td><?= $item['PeminjamanID']; ?></td>
                        <td><?= $item['UserID']; ?></td>
                        <td><?= $item['BukuID']; ?></td>
                        <td><?= $item['TanggalPeminjaman']; ?></td>
                        <td><?= $item['TanggalPengembalian']; ?></td>
                        <td><?= $item['StatusPeminjaman']; ?></td>
                        <td>
                            <a href="/peminjaman/edit/<?= $item['PeminjamanID']; ?>" class="btn btn-success btn-sm">Edit</a>
                            <a href="/peminjaman/delete/<?= $item['PeminjamanID']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah Anda yakin?')">Hapus</a>
                        </td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

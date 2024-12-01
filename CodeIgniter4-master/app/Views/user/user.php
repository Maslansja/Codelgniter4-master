<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data User</title>
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
        .btn-primary, .btn-danger {
            border-radius: 20px;
        }
        .btn-primary {
            background-color: #28a745;
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

    <!-- Main content -->
    <div class="main-content">
        <header class="py-3">
            <div class="container text-center">
                <h1>Data User</h1>
            </div>
        </header>

        <div class="container mt-5">
            <div class="row">
                <div class="col-md-12">
                    <a href="/register" class="btn btn-primary mb-3">Tambah Data User</a>
                    <table class="table table-bordered table-hover">
                        <thead class="thead-light">
                            <tr>
                                <th>Nomor</th>
                                <th>Username</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Nama Lengkap</th>
                                <th>Alamat</th>
                                <th>Aksi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $no=1; foreach ($user as $data): ?>
                                <tr>
                                    <td><?= $no ?></td>
                                    <td><?= $data['Username'] ?></td>
                                    <td><?= $data['Password'] ?></td>
                                    <td><?= $data['Email'] ?></td>
                                    <td><?= $data['NamaLengkap'] ?></td>
                                    <td><?= $data['Alamat'] ?></td>
                                    <td>
                                        <form action="user/edit" method="post" style="display:inline;">
                                            <input type="hidden" name="UserID" value="<?= $data['UserID'] ?>">
                                            <button type="submit" class="btn btn-success btn-sm">Edit</button>
                                        </form>
                                        <form action="user/hapus" method="post" style="display:inline;">
                                            <input type="hidden" name="UserID" value="<?= $data['UserID'] ?>">
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

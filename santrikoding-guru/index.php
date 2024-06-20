<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
    <title>Data Siswa</title>
</head>

<body>

    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                <div class="card-header">DATA SISWA</div>
                <div class="card-body">
                    <a href="tambah-guru.php" class="btn btn-md btn-success" style="margin-bottom: 10px">TAMBAH DATA</a>
                    <table class="table table-bordered" id="myTable">
                        <thead>
                            <tr>
                                <th scope="col">NO.</th>
                                <th scope="col">NUPTK</th>
                                <th scope="col">NAMA LENGKAP</th>
                                <th scope="col">GOLONGAN</th>
                                <th scope="col">JENIS KELAMIN</th>
                                <th scope="col">AKSI</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php 
                                include('koneksi.php');
                                $no = 1;
                                $query = mysqli_query($connection,"SELECT * FROM tbl_guru");
                                while($row = mysqli_fetch_array($query)){
                            ?>

                            <tr>
                                <td><?php echo $no++ ?></td>
                                <td><?php echo $row['nuptk'] ?></td>
                                <td><?php echo $row['nama'] ?></td>
                                <td><?php echo $row['golongan'] ?></td>
                                <td><?php echo ($row['jenis_kelamin'] == 'L') ? 'Laki-laki' : 'Perempuan'; ?></td>
                                <td class="text-center">
                                    <a href="edit-guru.php?id=<?php echo $row['nuptk'] ?>" class="btn btn-sm btn-primary">EDIT</a>
                                    <a href="hapus-guru.php?id=<?php echo $row['nuptk'] ?>" class="btn btn-sm btn-danger">HAPUS</a>
                                </td>
                            </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
</body>
</html>
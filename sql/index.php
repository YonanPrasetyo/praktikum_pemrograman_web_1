<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Create database
$sql = "SHOW DATABASES LIKE 'Prak_Web'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
    $sql = "CREATE DATABASE Prak_Web";
    mysqli_query($conn, $sql);
}
// mysqli_close($conn);

$dbname = "prak_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// sql to create table
    
$sql = "SHOW TABLES LIKE 'MyGuests'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) == 0) {
$sql = "CREATE TABLE MyGuests (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    firstname VARCHAR(30) NOT NULL,
    lastname VARCHAR(30) NOT NULL,
    email VARCHAR(50),
    reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
    )";
    mysqli_query($conn, $sql);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
</head>
<body>
    <div class="container" style="margin-top: 80px">
        <div class="row">
            <div class="col-md-12">

                <?php
                if (isset($_GET['proses'])) {
                    $proses = $_GET["proses"];
                    
                    switch ($proses) {
                        case 'edit':
                        $id = $_GET["id"];
                        $query = "SELECT * FROM myguests WHERE id = $id LIMIT 1";
                        $result = mysqli_query($conn, $query);
                        $row = mysqli_fetch_array($result);
                            ?>
                            <div class="card">
                            <div class="card-header">EDIT DATA</div>
                            <div class="card-body">
                            <form action="proses.php?proses=edit" method="POST">

                                <div class="form-group">
                                <label>Nama Depan</label>
                                    <input type="text" name="firstname" value="<?php echo $row['firstname'] ?>" placeholder="Masukkan NISN Siswa" class="form-control">
                                    <input type="hidden" name="id" value="<?php echo $row['id'] ?>">
                                </div>
                                
                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input type="text" name="lastname" value="<?php echo $row['lastname'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" value="<?php echo $row['email'] ?>" placeholder="Masukkan Nama Siswa" class="form-control">
                                </div>
                                
                                <button type="submit" class="btn btn-success">UPDATE</button>
                                
                            </form>
                            </div>
                            </div>
                            <?php
                            break;

                            case 'tambah':
                            ?>
                            <div class="card">
                            <div class="card-header">TAMBAH DATA</div>
                            <div class="card-body">
                            <form action="proses.php?proses=tambah" method="POST">
                                
                                <div class="form-group">
                                <label>Nama Depan</label>
                                    <input type="text" name="firstname" placeholder="Masukkan Nama Depan" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Nama Belakang</label>
                                    <input type="text" name="lastname" placeholder="Masukkan Nama Belakang" class="form-control">
                                </div>
                                
                                <div class="form-group">
                                    <label>Email</label>
                                    <input type="text" name="email" placeholder="Masukkan Email" class="form-control">
                                </div>
                                
                                <button type="submit" class="btn btn-success">UPDATE</button>
                            </form>
                            </div>
                            </div>
                            <?php
                            
                            break;
                    }
                }
                ?>

                <div class="card">
                    <div class="card-header">DATA SISWA</div>
                    <div class="card-body">
                        <a href="index.php?proses=tambah" class="btn btn-md btn-success" style="margin-bottom: 10px">Tambah Data</a>
                        <?php
                        $sql = "SELECT * FROM MyGuests";
                        $result = mysqli_query($conn, $sql);
                        
                        if (mysqli_num_rows($result) > 0) {
                            ?> <table class="table table-bordered" id="myTable">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Nama Depan</th>
                                        <th>Nama Belakang</th>
                                        <th>Email</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    while($row = mysqli_fetch_assoc($result)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $row['id'] ?></td>
                                        <td><?php echo $row['firstname'] ?></td>
                                        <td><?php echo $row['lastname'] ?></td>
                                        <td><?php echo $row['email'] ?></td>
                                        <td>
                                        <a href="index.php?id=<?php echo $row['id'] ?>&proses=edit" class="btn btn-sm btn-primary">EDIT</a>
                                        <a href="proses.php?id=<?php echo $row['id'] ?>&proses=hapus" class="btn btn-sm btn-danger">HAPUS</a>
                                        </td>
                                    </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                </table>
                            <?php
                        } else {
                            echo "0 results";
                        }   
                        ?>
                    </div>
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


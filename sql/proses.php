<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "prak_web";

$conn = mysqli_connect($servername, $username, $password, $dbname);
function insert($firstname, $lastname, $email){
    global $conn;
    // insert Data
    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('$firstname', '$lastname', '$email')";

    mysqli_query($conn, $sql);
}

function insertBanyak(){
    global $conn;

    $sql = "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('John', 'Doe', 'john@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Mary', 'Moe', 'mary@example.com');";
    $sql .= "INSERT INTO MyGuests (firstname, lastname, email)
    VALUES ('Julie', 'Dooley', 'julie@example.com')";

    if (mysqli_multi_query($conn, $sql)) {
        echo "New records created successfully<br>";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

function delete($id){
    global $conn;
    // sql to delete a record
    $sql = "DELETE FROM MyGuests WHERE id=$id";

    mysqli_query($conn, $sql);
}

function Update($id, $firstname, $lastname, $email){
    global $conn;

    $sql = "UPDATE MyGuests SET firstname = '$firstname', lastname = '$lastname', email = '$email' WHERE id=$id";

    mysqli_query($conn, $sql);
}

$proses = $_GET["proses"];

switch ($proses) {
    case 'hapus':
        $id = $_GET["id"]; 
        delete($id);
        break;
    
    case 'edit':
        $id = $_POST['id'];
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        Update($id, $firstname, $lastname, $email);
        break;
    
    case 'tambah':
        $firstname = $_POST['firstname'];
        $lastname = $_POST['lastname'];
        $email = $_POST['email'];
        insert($firstname, $lastname, $email);
        break;
}

header("location: index.php");

mysqli_close($conn);
?>
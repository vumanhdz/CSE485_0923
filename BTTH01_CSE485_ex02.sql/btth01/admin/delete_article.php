<?php
$servername = "localhost";
$username = "root";
$password = "";
$db = "btth01_cse485";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if(isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM baiviet WHERE ma_bviet = $id";
    if (mysqli_query($conn, $sql)) {
        header("Location: ./article.php");
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

  mysqli_close($conn);
  ?>
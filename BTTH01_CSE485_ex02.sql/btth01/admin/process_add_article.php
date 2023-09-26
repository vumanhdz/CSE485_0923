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

$tieuDe = $_POST['txtTieuDe'];
$baiHat = $_POST['txtBaiHat'];
$maTheLoai = $_POST['txtMaTheLoai'];
$tomTat = $_POST['txtTomTat'];
$noiDung = $_POST['txtNoiDung'];
$MaTacGia = $_POST['txtMaTacGia'];



if(isset($_POST['id'])) {
    $id = $_POST['id'];
    // update
    $sql = "UPDATE `baiviet` SET `tieude`='$tieuDe', `ten_bhat`='$baiHat', `ma_tloai`='$maTheLoai', `tomtat`='$tomTat', `noidung`='$noiDung', `ma_tgia`='$MaTacGia'
    WHERE `ma_bviet`=$id";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header("Location: ./article.php");
    } else {
        echo "Update fail: " . mysqli_error($conn);
    }
}else{
    $sql = "INSERT INTO `baiviet`(`tieude`, `ten_bhat`, `ma_tloai`, `tomtat`, `noidung`, `ma_tgia`)
    VALUES ('".$tieuDe."','".$baiHat."','".$maTheLoai."','".$tomTat."','".$noiDung."','".$MaTacGia."')";
    $result = mysqli_query($conn, $sql);
}






if ($result) {
    header("Location: ./article.php");
} else {
    echo "Insert fail: " . mysqli_error($conn);
}

mysqli_close($conn);

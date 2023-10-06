<?php
$bn_id = $_GET['bn_id'];
require_once '../Services/connect.php';
$xoa_sql = "DELETE FROM benhnhan WHERE bn_id = $bn_id";
mysqli_query($conn, $xoa_sql);
header("Location: index.php");
exit();
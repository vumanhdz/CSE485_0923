<?php 
require_once 'data.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Filter Results</title>
    <!-- Thêm các tài nguyên CSS của Bootstrap (ví dụ: CDN) nếu bạn đang sử dụng Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container">
    <h1>Filtered Results</h1>
    
    <?php

if(isset($_GET['email'])&&isset($_GET['mobile'])&&isset($_GET['group'])){
    $email = $_GET['email'];
    $mobile = $_GET['mobile'];
    $group = $_GET['group'];
}
    echo $email;
    echo $mobile;
    echo $group;

    // $filteredData = [];
    foreach($data as $value)
    if($email===$value['email']&&$mobile===$value['mobile']&&$group===$value['gruop']){
        echo '<pre>';
        print_r($value);
        echo '</pre>';
    }

    // foreach ($data as $row) {
    //     $matchEmail = empty($email) || stripos($row['email'], $email) !== false;
    //     $matchMobile = empty($mobile) || stripos($row['mobile'], $mobile) !== false;
    //     $matchGroup = empty($group) || $row['group'] === $group;

    //     if ($matchEmail && $matchMobile && $matchGroup) {
    //         $filteredData[] = $row;
    //     }
    // }

    // if (empty($filteredData)) {
    //     echo "<p>No results found.</p>";
    // } else {
    //     echo '<table class="table">';
    //     echo '<thead>';
    //     echo '<tr>';
    //     echo '<th scope="col">#</th>';
    //     echo '<th scope="col">Full name</th>';
    //     echo '<th scope="col">Email</th>';
    //     echo '<th scope="col">Gender</th>';
    //     echo '<th scope="col">Groups</th>';
    //     echo '<th scope="col">Mobile</th>';
    //     echo '<th scope="col">Date of Birth</th>';
    //     echo '<th scope="col">Status</th>';
    //     echo '<th scope="col">Action</th>';
    //     echo '</tr>';
    //     echo '</thead>';
    //     echo '<tbody>';
    //     foreach ($filteredData as $row) {
    //         echo '<tr>';
    //         echo '<th scope="row">' . $row['id'] . '</th>';
    //         echo '<td>' . $row['full_name'] . '</td>';
    //         echo '<td>' . $row['email'] . '</td>';
    //         echo '<td>' . $row['gender'] . '</td>';
    //         echo '<td>' . $row['group'] . '</td>';
    //         echo '<td>' . $row['mobile'] . '</td>';
    //         echo '<td>' . $row['date_of_birth'] . '</td>';
    //         echo '<td>' . $row['status'] . '</td>';
    //         echo '<td>' . $row['action'] . '</td>';
    //         echo '</tr>';
    //     }
    //     echo '</tbody>';
    //     echo '</table>';
    // }
    ?>
</div>

</body>
</html>

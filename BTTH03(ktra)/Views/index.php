<!DOCTYPE html>
<html>
<head>
    <title>Bảng bệnh nhân</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div style="margin-top: 1rem;" class="d-flex justify-content-between">
            <h5 class="me-3">Danh sách bệnh nhân</h5>
            <div>
                <a href="../Views/Dsbacsi.php" style="background-color: green;" class="btn btn-primary">Danh sách bác sĩ</a>
                <a href="../Views/them_bn.php" style="background-color: green;" class="btn btn-primary">Thêm mới bệnh nhân</a>
            </div>
        </div>
        <h1 style="margin-top: 2.5rem;">Danh sách bệnh nhân</h1>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">Mã bệnh nhân</th>
                    <th scope="col">Tên bệnh nhân</th>
                    <th scope="col">Ngày khám</th>
                    <th scope="col">Triệu chứng</th>
                    <th scope="col">Mã bác sĩ</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>

                </tr>
            </thead>
            <tbody>
            <?php
                require_once'../Services/connect.php';
                $lk_sql = "SELECT * FROM benhnhan";
                $result = mysqli_query($conn, $lk_sql);
                while($r = mysqli_fetch_assoc($result)){
            ?>
                <tr>
                    <td><?php echo $r['bn_id'] ?></td>
                    <td><?php echo $r['tenBenhNhan'] ?></td>
                    <td><?php echo $r['ngayKham'] ?></td>
                    <td><?php echo $r['trieuChung'] ?></td>
                    <td><?php echo $r['bs_id'] ?></td>
                    <td><a href="../Views/sua_bn.php">sửa</a></td>
                    <td><a onclick="return confirm('bạn có muốn xóa bệnh nhân này?')" href="xoa.php?bn_id=<?php echo $r['bn_id'];?>">xóa</a></td>

                </tr>
            <?php         
                }
            ?>
            </tbody>
        </table>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

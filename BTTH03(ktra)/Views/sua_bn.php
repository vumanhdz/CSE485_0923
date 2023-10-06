<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sửa bệnh nhân</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1>Thay đổi thông tin bệnh nhân</h1>
        <form>
            <div class="mb-3">
                <label for="patientId" class="form-label">ID:</label>
                <input type="text" class="form-control" id="patientId" name="patientId" required>
            </div>
            <div class="mb-3">
                <label for="patientName" class="form-label">Tên:</label>
                <input type="text" class="form-control" id="patientName" name="patientName" required>
            </div>
            <div class="mb-3">
                <label for="appointmentDate" class="form-label">Ngày khám:</label>
                <input type="date" class="form-control" id="appointmentDate" name="appointmentDate" required>
            </div>
            <div class="mb-3">
                <label for="symptoms" class="form-label">Triệu chứng:</label>
                <textarea class="form-control" id="symptoms" name="symptoms" required></textarea>
            </div>
            <div class="mb-3">
                <label for="doctorCode" class="form-label">Mã bác sĩ:</label>
                <input type="text" class="form-control" id="doctorCode" name="doctorCode" required>
            </div>
            <button onclick="return confirm('bạn có muốn thay đổi thông tin này?')" type="submit" class="btn btn-primary">Sửa</button>
            <a href="../Views/index.php" class="btn btn-primary">Quay lại</a>
        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
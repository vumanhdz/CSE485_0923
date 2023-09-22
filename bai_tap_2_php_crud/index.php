<?php
require_once 'data.php';        
if(isset($_GET['submit'])){
    $email=$_GET['email'];
    $mobile=$_GET['mobile'];
    $group=$_GET['group'];
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/css/all.min.css">
    <link rel="stylesheet" href="fontawesome-free-6.4.0-web/js/all.min.js">
    <link rel="stylesheet" href="main.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-2 bg-white ">
            <img src="image/logo.png" alt="">
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu1" aria-expanded="false" class="d-flex align-items-center justify-content-between">
                   <div>
                   <i class="fa-regular fa-user mr-2 "></i> User
                   </div>
                    <i class="fa-solid fa-chevron-down ml-2"></i>
                </h3>
                <ul class="collapse" id="menu1">
                    <li><a href="#">Users</a></li>
                    <li><a href="#">Groups</a></li>
                    <li><a href="#">Permissions</a></li>
                </ul>
            </div>


            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu2" aria-expanded="false">CMS</h3>
                <ul class="collapse" id="menu2">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu3" aria-expanded="false">Config</h3>
                <ul class="collapse" id="menu3">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu4" aria-expanded="false">Dashboard</h3>
                <ul class="collapse" id="menu4">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
            <div class="menu">
                <h3 data-bs-toggle="collapse" href="#menu5" aria-expanded="false">Courses</h3>
                <ul class="collapse" id="menu5">
                    <li><a href="#">Danh sách 1</a></li>
                    <li><a href="#">Danh sách 2</a></li>
                    <li><a href="#">Danh sách 3</a></li>
                    <li><a href="#">Danh sách 4</a></li>
                    <li><a href="#">Danh sách 5</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-9" style="background-color: antiquewhite;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center p-3">
                    <a href="#" style="text-decoration: none; color: black;"><i class="fa-solid fa-bars fa-2xl p-3"></i></a>
                    <div class="mr-3"></div>
                    <a href="#" style="text-decoration: none; color: black;"><h3>User</h3></a>
                </div>
                <form action="" style="background-color: white; border-radius: 15px;">
                    <div class="d-flex align-items-center p-1">
                        <a href="#" style="text-decoration: none; color: black;">
                            <i class="fa-solid fa-magnifying-glass p-1" style="margin-right: 10px; color:indianred;"></i>
                        </a>
                        <input type="text" class="form-control border-0" style="font-size: 1rem; outline: none;" placeholder="Search here...">
                    </div>
                </form>
            </div>
            <div class="bg-white">
                <h4 class="d-flex align-items-center">
                    Filter
                    <i class="fa-solid fa-chevron-down ml-2" data-bs-toggle="collapse" href="#filterCollapse"></i>
                </h4>
                <div class="collapse" id="filterCollapse">
                    <form action="filter.php" method="GET" style="background-color: white; border-radius: 15px;" class="d-flex align-items-center">
                        <div class="input-group">
                            <input type="text" name="email" class="form-control" placeholder="Email">
                        </div>
                        <div class="input-group mx-2">
                            <input type="text" name="mobile" class="form-control" placeholder="Mobile">
                        </div>
                        <div class="input-group mx-2">
                            <select name="group" class="form-select">
                                <option value="">Select Group</option>
                                <option value="Manager">Manager</option>
                                <option value="Staff">Staff</option>
                                <option value="Other">Other</option>
                            </select>
                        </div>
                        <button type="submit" class="btn btn-primary" name="submit">Filter</button>
                    </form>
                </div>
            </div>
            <div class="order-md-last"> <!-- Di chuyển phần table xuống dưới trên màn hình lớn (>= medium) -->
                <h3></h3>
                <table class="table">

                    <thead>
                    <thead>
                        <tr>
                        <th scope="col"><input type="checkbox" name="check" id=""></th>
                        <th scope="col">Full name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Gender</th>
                        <th scope="col">Groups</th>
                        <th scope="col">mobile</th>
                        <th scope="col">Datet Of Birth</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                        </tr>
                    </thead>
                        <?php foreach ($data as $value): ?>
                        <tr>
                        <th scope="col"><input type="checkbox" name="check" id=""></th>
                        <td scope="col"><?php echo $value['full_name']?></td>
                        <td scope="col"><?php echo $value['email']?></td>
                        <td scope="col"><?php echo $value['gender']?></td>
                        <td scope="col"><?php echo $value['group']?></td>
                        <td scope="col"><?php echo $value['mobile']?></td>
                        <td scope="col"><?php echo $value['date_of_birth']?></td>
                        
                        <td scope="col"><i class="fa fa-circle text-success me-1"></i></td>
                        <td p-1>
                            <a href="" style="color: lightcoral;"><i class="fa fa-shield"></i></a>
                            <a href=""style="color: lightcoral;"><i class="fa fa-pencil"></i></a>
                            <a href=""style="color: lightcoral;"><i class="fa fa-trash"></i></a>
                        </td>

                        </tr>
                        <?php endforeach; ?>
                    </thead>
                </table>
            </div>
        </div>
        <div class="col-md-1 bg-white">
        <p></p>
        </div>
    </div>

</div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

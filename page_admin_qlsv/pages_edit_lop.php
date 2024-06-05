<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5" />
    <meta name="author" content="AdminKit" />
    <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web" />

    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="shortcut icon" href="img/icons/logo_ntu.png" />

    <link rel="canonical" href="https://demo-basic.adminkit.io/ui-buttons.html" />

    <title>SỬA THÔNG TIN LỚP HỌC</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
    <?php
    session_start();
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datn_test_2";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("" . mysqli_connect_error());
    }
    // Kiểm tra xem admin đã đăng nhập hay chưa
    if (isset($_SESSION['acc_cbnv']) && $_SESSION['acc_cbnv'] === true) {
        if (isset($_GET["ID_LOP"])) {
            $ID_LOP = $_GET["ID_LOP"];
            $sql1 = "SELECT * FROM lop
                WHERE lop.ID_LOP = '$ID_LOP'";
            $result1 = mysqli_query($conn, $sql1);

            if (mysqli_num_rows($result1) <> 0) {
                $sinhvien = mysqli_fetch_assoc($result1);
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
                $ten_lop = $_POST["ten_lop"];
              

                $sql_update = "UPDATE lop SET ten_lop = '$ten_lop'
                    WHERE  ID_LOP = '$ID_LOP'";
                $result_update = mysqli_query($conn, $sql_update);
                // var_dump($sql_update);exit;
                if ($result_update) {
                    echo "<script>
                        setTimeout(function(){
                            alert('Cập nhật thành công');
                            window.location.href = 'pages_lop.php';
                        }, 0);
                    </script>";
                    header('Location: ?ID_LOP=' . $ID_LOP . '');
                } else {
                    echo 'Error';
                }
            }
        }
    } 
    ?>
    <div class="wrapper">
        <nav id="sidebar" class="sidebar js-sidebar">
            <div class="sidebar-content js-simplebar">
                <a class="sidebar-brand" href="index.php">
                    <span class="align-middle">CÁN BỘ NGHIỆP VỤ</span>
                </a>

                <ul class="sidebar-nav">
                    <li class="sidebar-header">Pages</li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="index.php">
                            <i class="align-middle" data-feather="home"></i>
                            <span class="align-middle">TRANG CHỦ</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages-profile.php">
                            <i class="align-middle" data-feather="user"></i>
                            <span class="align-middle">QUẢN LÝ THÔNG TIN SINH VIÊN</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_hocphan_ctdt.php">
                            <i class="align-middle" data-feather="book"></i>
                            <span class="align-middle">QUẢN LÝ CHƯƠNG TRÌNH ĐÀO TẠO</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_dm_hocphan.php">
                            <i class="align-middle" data-feather="clipboard"></i>
                            <span class="align-middle">QUẢN LÝ HỌC PHẦN</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_dm_dkhp.php">
                            <i class="align-middle" data-feather="calendar"></i>
                            <span class="align-middle">ĐĂNG KÝ HỌC PHẦN</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_dm_diem.php">
                            <i class="align-middle" data-feather="bar-chart"></i>
                            <span class="align-middle">QUẢN LÝ ĐIỂM THI</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_list_KTHB.php">
                            <i class="align-middle" data-feather="star"></i>
                            <span class="align-middle">QUẢN LÝ KHEN THƯỞNG HỌC BỔNG</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_dm_drl.php">
                            <i class="align-middle" data-feather="bar-chart"></i>
                            <span class="align-middle">QUẢN LÝ ĐIỂM RÈN LUYỆN</span>
                        </a>
                    </li>

                    <li class="sidebar-item active">
                        <a class="sidebar-link" href="pages_danhmuc.php">
                            <i class="align-middle" data-feather="align-left"></i>
                            <span class="align-middle">QUẢN LÝ DANH MỤC</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_quanly_totnghiep.php">
                            <i class="align-middle" data-feather="award"></i>
                            <span class="align-middle">QUẢN LÝ TỐT NGHIỆP</span>
                        </a>
                    </li>
                </ul>
            </div>
        </nav>

        <div class="main">
            <nav class="navbar navbar-expand navbar-light navbar-bg">
                <a class="sidebar-toggle js-sidebar-toggle">
                    <i class="hamburger align-self-center"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <?php
                            $server = "localhost";
                            $username = "root";
                            $password = "";
                            $database = "datn_test_2";

                            //Kết nối đến MySQL với PHP
                            $conn = mysqli_connect($server, $username, $password, $database);

                            //Kiểm tra kết nối
                            if (!$conn) {
                                die("Connection failed: " . mysqli_connect_error());
                            }

                            // Kiểm tra đăng nhập
                            if (isset($_SESSION['acc_cbnv'])) {
                                $id_cbnv = $_SESSION['id'];
                                $quyen = $_SESSION['quyen'];

                                // Lấy thông tin CBNV từ database
                                $sql = "SELECT * FROM cbnv WHERE ID_CBNV = '" . $_SESSION['id'] . "'";
                                $result = mysqli_query($conn, $sql);
                                if (mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    echo ' <span class="d-none d-lg-inline">' . $row['HOTEN_CBNV'] . '<span> ';
                                }
                            }
                            ?>
                            <img class="rounded-circle me-lg-2" src="<?php echo $row['ANH_CBNV']; ?>" alt="" style="width: 40px; height: 40px;">
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="../login.php" class="dropdown-item">Log Out</a>
                        </div>
                    </div>
                </div>
            </nav>

            <form class="content" method="post">
                <div class="container-fluid p-0">
                    <div class="mb-3">
                        <h1 class="h3 d-inline align-middle">CHỈNH SỬA THÔNG TIN KHOA VIỆN</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Chỉnh sửa thông tin khoa viện</h5>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Mã lớp</label>
                                    <input type="text" name="ID_LOP" class="form-control" placeholder="Mã khoa viện" required value="<?php
                                                                                                                                        if (isset($ID_LOP)) echo $ID_LOP;
                                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Tên lớp</label>
                                    <input type="text" name="ten_lop" class="form-control" placeholder="Tên khoa viện" required value="<?php if (isset($ten_lop))
                                                                                                                                            echo $ten_lop;
                                                                                                                                        ?>" />
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-body">
                                    <input type="submit" name="update" class="btn btn-success" value="LƯU" />
                                    <a href="javascript:window.history.back(-1);" class="btn btn-primary">HỦY</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </form>

            <footer class="footer">
                <div class="container-fluid">
                    <div class="row text-muted">
                        <div class="col-6 text-start">
                            <p class="mb-0">
                                <a class="text-muted" href="https://ntu.edu.vn/" target="_blank"><strong>QUẢN LÝ QUÁ TRÌNH HỌC TẬP CỦA SINH VIÊN</strong></a>
                                &copy;
                            </p>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>

    <script src="js/app.js"></script>
</body>

</html>
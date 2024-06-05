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

    <title>THÊM KHOA VIỆN</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
</head>

<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datn_test_2";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (mysqli_connect_errno()) {
        die("" . mysqli_connect_error());
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_khoavien"])) {
        $id_khoavien = $_POST["id_khoavien"];
        $ten_khoavien = $_POST["ten_khoavien"];

        $sql_add_khoavien = "INSERT INTO `khoa_vien` (`ID_KHOAVIEN`, `TEN_KHOAVIEN`) VALUES ('$id_khoavien', '$ten_khoavien')";

        if (mysqli_query($conn, $sql_add_khoavien)) {
            echo "<script>
              setTimeout(function(){
                  alert('Thêm chương trình đào tạo thành công');
                  window.location.href = 'pages_KhoaVien.php';
              }, 0);
          </script>";
        } else {
            echo "Error: " . $sql_add_khoavien . mysqli_error($conn);
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
                            <span class="align-middle">QUẢN LÝ HỌC PHẦN - CHƯƠNG TRÌNH ĐÀO TẠO</span>
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
                        <a class="sidebar-link" href="pages_dm_drl.php">
                            <i class="align-middle" data-feather="bar-chart"></i>
                            <span class="align-middle">QUẢN LÝ ĐIỂM RÈN LUYỆN</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_list_KTHB.php">
                            <i class="align-middle" data-feather="star"></i>
                            <span class="align-middle">QUẢN LÝ KHEN THƯỞNG HỌC BỔNG</span>
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

                // Lấy thông tin sinh viên từ database
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
                        <h1 class="h3 d-inline align-middle">THÊM KHOA VIỆN</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Thêm khoa viện</h5>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Mã khoa viện</label>
                                    <input type="text" name="id_khoavien" class="form-control" placeholder="Mã khoa viện" required value="<?php
                                                                                                                                                        if (isset($id_khoavien)) echo $id_khoavien;
                                                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Tên khoa viện</label>
                                    <input type="text" name="ten_khoavien" class="form-control" placeholder="Tên khoa viện" required value="<?php
                                                                                                                                                        if (isset($ten_khoavien)) echo $ten_khoavien;
                                                                                                                                                        ?>" />
                                </div>

                                <div class="card-body">
                                    <input type="submit" name="add_khoavien" class="btn btn-success" value="THÊM KHOA VIỆN" />
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
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>QUẢN LÝ QUÁ TRÌNH HỌC TẬP CỦA SINH VIÊN</strong></a>
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
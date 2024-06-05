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

    <title>SỬA THÔNG TIN SINH VIÊN</title>

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
    if (isset($_GET["ID_SV"])) {
        $ID_SV = $_GET["ID_SV"];
        
        $sql1 = "SELECT * FROM sinhvien 
            JOIN lop ON sinhvien.ID_LOP = lop.ID_LOP
            JOIN nganh ON sinhvien.ID_NGANH = nganh.ID_NGANH
            JOIN khoa_vien ON sinhvien.ID_KHOAVIEN = khoa_vien.ID_KHOAVIEN
            JOIN phuhuynh ON sinhvien.ID_PHUHUYNH = phuhuynh.ID_PHUHUYNH
            WHERE sinhvien.ID_SV = '$ID_SV'";
        $result1 = mysqli_query($conn, $sql1);

        if (mysqli_num_rows($result1) <> 0) {
            $sinhvien = mysqli_fetch_assoc($result1);
        }

        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['update'])) {
            $hoten_SV = $_POST["hoten_SV"];
            $id_lop = $_POST["id_lop"];
            $khoahoc = $_POST["khoahoc"];
            $id_khoavien = $_POST["id_khoavien"];
            $id_nganh = $_POST["id_nganh"];
            $ngaySinh = $_POST["ngaySinh"];
            $gioiTinh = $_POST["gioiTinh"];
            $anh_TK = $_POST["anh_TK"];
            $email = $_POST["email"];
            $heDaoTao = $_POST["heDaoTao"];
            $cccd = $_POST["cccd"];
            $noiSinh = $_POST["noiSinh"];
            $danToc = $_POST["danToc"];
            $tonGiao = $_POST["tonGiao"];
            $hoKhau = $_POST["hoKhau"];
            $diaChi = $_POST["diaChi"];
            $sdt = $_POST["sdt"];
            $id_phuhuynh = $_POST["id_phuhuynh"];
            $tinhTrang = $_POST["tinhTrang"];

            $sql_update = "UPDATE sinhvien SET hoten_SV = '$hoten_SV', id_lop='$id_lop', khoahoc='$khoahoc' , id_khoavien='$id_khoavien',
                id_nganh='$id_nganh', ngaySinh='$ngaySinh', gioiTinh='$gioiTinh', anh_TK='$anh_TK', email='$email', heDaoTao='$heDaoTao', cccd='$cccd', noiSinh= '$noiSinh', 
                danToc ='$danToc', tonGiao='$tonGiao', hoKhau='$hoKhau', diaChi='$diaChi', sdt = '$sdt', id_phuhuynh = '$id_phuhuynh', tinhTrang = '$tinhTrang'
                WHERE  ID_SV = '$ID_SV'";
            $result_update = mysqli_query($conn, $sql_update);
            
            if ($result_update) {
                echo "<script>
                    setTimeout(function(){
                        alert('Cập nhật thành công');
                        window.location.href = 'pages-profile.php';
                    }, 0);
                </script>";
                exit();
            } else {
                echo 'Error: ' . mysqli_error($conn);
            }
        }
    } else {
        echo 'ID_SV không được cung cấp.';
    }
} else {
    echo 'Bạn cần đăng nhập trước.';
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

                    <li class="sidebar-item active">
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

                    <li class="sidebar-item">
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
                        <h1 class="h3 d-inline align-middle">CHỈNH SỬA THÔNG TIN SINH VIÊN</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Chỉnh sửa thông tin sinh viên</h5>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Mã số sinh viên</label>
                                    <input type="text" name="id_SV" class="form-control" placeholder="Mã số sinh viên" required value="<?php
                                                                                                                                        if (isset($ID_SV)) echo $ID_SV;
                                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Họ tên sinh viên</label>
                                    <input type="text" name="hoten_SV" class="form-control" placeholder="Họ tên sinh viên" required value="<?php echo $sinhvien['HOTEN_SV']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Lớp</label>
                                    <select class="form-select" name="id_lop" required>
                                        <?php
                                        $sql_lop = "SELECT * FROM lop";
                                        $result_lop = mysqli_query($conn, $sql_lop);

                                        while ($row = mysqli_fetch_assoc($result_lop)) {
                                            echo '<option value="' . $sinhvien['ID_LOP'] . '">'
                                                . $sinhvien['TEN_LOP'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="card-body">
                                    <label class="form-label">Khóa học</label>
                                    <input type="number" name="khoahoc" class="form-control" placeholder="Khóa học" required value="<?php echo $sinhvien['KHOAHOC']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Khoa viện</label>
                                    <select class="form-select" name="id_khoavien" required>
                                        <?php
                                        $sqlkhoavien = "SELECT * FROM khoa_vien";
                                        $resultkhoavien = mysqli_query($conn, $sqlkhoavien);

                                        while ($row = mysqli_fetch_assoc($resultkhoavien)) {
                                            echo '<option value="' . $sinhvien['ID_KHOAVIEN'] . '">'
                                                . $sinhvien['TEN_KHOAVIEN'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Ngành học</label>
                                    <select class="form-select" name="id_nganh" required>
                                        <?php
                                        $sqlnganh = "SELECT * FROM nganh";
                                        $resultnganh = mysqli_query($conn, $sqlnganh);

                                        while ($row = mysqli_fetch_assoc($resultnganh)) {
                                            echo '<option value="' . $sinhvien['ID_NGANH'] . '">'
                                                . $sinhvien['TEN_NGANH'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Hệ đào tạo</label>
                                    <input type="text" name="heDaoTao" class="form-control" placeholder="Hệ đào tạo" required value="<?php echo $sinhvien['HEDAOTAO']; ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Email</label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required value="<?php echo $sinhvien['EMAIL']; ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" name="ngaySinh" class="form-control" placeholder="Ngày sinh" required value="<?php echo $sinhvien['NGAYSINH']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Giới tính</label>
                                    <input type="text" name="gioiTinh" class="form-control" placeholder="Giới tính" required value="<?php echo $sinhvien['GIOITINH']; ?>"></input>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-label">CCCD</label>
                                    <input type="text" name="cccd" class="form-control" placeholder="Số CCCD" value="<?php echo $sinhvien['CCCD']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Nơi sinh</label>
                                    <input type="text" name="noiSinh" class="form-control" placeholder="Nơi sinh" value="<?php echo $sinhvien['NOISINH']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Dân tộc</label>
                                    <input type="text" name="danToc" class="form-control" placeholder="Dân tộc" value="<?php echo $sinhvien['DANTOC']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Tôn giáo</label>
                                    <input type="text" name="tonGiao" class="form-control" placeholder="Tôn giáo" value="<?php echo $sinhvien['TONGIAO']; ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Hộ khẩu thường trú</label>
                                    <textarea class="form-control" name="hoKhau" rows="2" placeholder="Hộ khẩu thường trú" required value="<?php echo $sinhvien['HOKHAU']; ?>"></textarea>
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Địa chỉ</label>
                                    <textarea class="form-control" name="diaChi" rows="2" placeholder="Địa chỉ" required value="<?php echo $sinhvien['DIACHI']; ?>"></textarea>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại" value="<?php echo $sinhvien['SDT']; ?>" />
                                </div>


                                <div class="card-body">
                                    <label class="form-label">Tình trạng</label>
                                    <input type="text" name="tinhTrang" class="form-control" placeholder="Tình trạng" value="<?php echo $sinhvien['TINHTRANG']; ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Ảnh sinh viên</label>
                                    <input type="text" name="anh_TK" class="form-control" placeholder="Ảnh sinh viên" required value="<?php echo $sinhvien['ANH_TK']; ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Thông tin phụ huynh</label>
                                    <select class="form-select" name="id_phuhuynh" required>
                                        <?php
                                        $sql_id_phuhuynh = "SELECT * FROM phuhuynh";
                                        $result_id_phuhuynh = mysqli_query($conn, $sql_id_phuhuynh);

                                        while ($row = mysqli_fetch_assoc($result_id_phuhuynh)) {
                                            echo '<option value="' . $sinhvien['ID_PHUHUYNH'] . '">'
                                                . $sinhvien['ID_PHUHUYNH'] .
                                                '</option>';
                                        }

                                        ?>
                                    </select>
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
                                <a class="text-muted" href="https://adminkit.io/" target="_blank"><strong>QUẢN LÝ QUÁ TRINHD HỌC TẬP CỦA SINH VIÊN</strong></a>
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
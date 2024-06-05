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

    <title>THÊM SINH VIÊN</title>

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

    if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["add_sinhvien"])) {
        $id_SV = $_POST["id_SV"];
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
        $id_ph = $_POST["id_ph"];
        $tinhTrang = $_POST["tinhTrang"];
        $id_quyen = $_POST["id_quyen"];
        $matkhau = $_POST["matkhau"];

        $sql_add_sinhvien = "INSERT INTO `sinhvien` (`ID_SV`, `HOTEN_SV`, `ID_LOP`,`KHOAHOC` ,`ID_KHOAVIEN`,`ID_NGANH`,`NGAYSINH`, `GIOITINH`, 
    `ANH_TK`,`EMAIL`, `HEDAOTAO`, `CCCD`, `NOISINH`, `DANTOC`, `TONGIAO`, `HOKHAU`, `DIACHI`, `SDT`, `ID_PHUHUYNH` ,`TINHTRANG`, `ID_QUYEN`, `MATKHAU`)
    VALUES ('$id_SV', '$hoten_SV', '$id_lop', '$khoahoc','$id_khoavien', '$id_nganh','$ngaySinh','$gioiTinh', '$anh_TK',  '$email', '$heDaoTao',
     '$cccd', '$noiSinh', '$danToc','$tonGiao', '$hoKhau', '$diaChi','$sdt', '$id_ph','$tinhTrang', '$id_quyen', '$matkhau')";

        if (mysqli_query($conn, $sql_add_sinhvien)) {
            echo "<script>
              setTimeout(function(){
                  alert('Thêm sinh viên thành công');
                  window.location.href = 'pages_list_sv.php?ID_SV=" . $id_SV . "';
              }, 0);
          </script>";
        } else {
            echo "Error: " . $sql_add_sinhvien . mysqli_error($conn);
        }
    }
    ?>
    <?php
    session_start();
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
        $id_sv = $_SESSION['id'];
        $quyen = $_SESSION['quyen'];

        // Lấy thông tin sinh viên từ database
        $sql = "SELECT * FROM cbnv WHERE ID_CBNV = '" . $_SESSION['id'] . "'";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
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
                        <a class="sidebar-link" href="pages_dm_drl.php">
                            <i class="align-middle" data-feather="star"></i>
                            <span class="align-middle">QUẢN LÝ KHEN THƯỞNG HỌC BỔNG</span>
                        </a>
                    </li>

                    <li class="sidebar-item">
                        <a class="sidebar-link" href="pages_list_KTHB.php">
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
                        <h1 class="h3 d-inline align-middle">THÊM SINH VIÊN</h1>
                    </div>
                    <div class="row">
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h5 class="card-title mb-0">Thêm sinh viên</h5>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Mã số sinh viên</label>
                                    <input type="text" name="id_SV" class="form-control" placeholder="Mã số sinh viên" required value="<?php
                                                                                                                                        if (isset($id_SV)) echo $id_SV;
                                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Họ tên sinh viên</label>
                                    <input type="text" name="hoten_SV" class="form-control" placeholder="Họ tên sinh viên" required value="<?php
                                                                                                                                            if (isset($hoten_SV)) echo $hoten_SV;
                                                                                                                                            ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Lớp</label>
                                    <select class="form-select" name="id_lop" required>
                                        <?php
                                        $sql_lop = "SELECT * FROM lop";
                                        $result_lop = mysqli_query($conn, $sql_lop);

                                        while ($row = mysqli_fetch_assoc($result_lop)) {
                                            echo '<option value="' . $row['ID_LOP'] . '">'
                                                . $row['TEN_LOP'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>

                                </div>
                                <div class="card-body">
                                    <label class="form-label">Khóa học</label>
                                    <input type="number" name="khoahoc" class="form-control" placeholder="Khóa học" required value="<?php
                                                                                                                                    if (isset($khoahoc)) echo $khoahoc;
                                                                                                                                    ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Khoa viện</label>
                                    <select class="form-select" name="id_khoavien" required>
                                        <?php
                                        $sqlkhoavien = "SELECT * FROM khoa_vien";
                                        $resultkhoavien = mysqli_query($conn, $sqlkhoavien);

                                        while ($row = mysqli_fetch_assoc($resultkhoavien)) {
                                            echo '<option value="' . $row['ID_KHOAVIEN'] . '">'
                                                . $row['TEN_KHOAVIEN'] .
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
                                            echo '<option value="' . $row['ID_NGANH'] . '">'
                                                . $row['TEN_NGANH'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Hệ đào tạo</label>
                                    <input type="text" name="heDaoTao" class="form-control" placeholder="Hệ đào tạo" required value="<?php if (isset($heDaoTao))
                                                                                                                                            echo $heDaoTao;
                                                                                                                                        ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Email</label>
                                    <input type="text" name="email" class="form-control" placeholder="Email" required value="<?php if (isset($email))
                                                                                                                                    echo $email;
                                                                                                                                ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Ngày sinh</label>
                                    <input type="date" name="ngaySinh" class="form-control" placeholder="Ngày sinh" required value="<?php if (isset($ngaySinh))
                                                                                                                                        echo $ngaySinh;
                                                                                                                                    ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Giới tính</label>
                                    <input type="text" name="gioiTinh" class="form-control" placeholder="Giới tính" required value="<?php if (isset($gioiTinh))
                                                                                                                                        echo $gioiTinh;
                                                                                                                                    ?>"></input>
                                </div>


                            </div>
                        </div>
                        <div class="col-12 col-lg-6">
                            <div class="card">
                                <div class="card-body">
                                    <label class="form-label">CCCD</label>
                                    <input type="text" name="cccd" class="form-control" placeholder="Số CCCD" value="<?php if (isset($cccd))
                                                                                                                            echo $cccd;
                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Nơi sinh</label>
                                    <input type="text" name="noiSinh" class="form-control" placeholder="Nơi sinh" value="<?php if (isset($noiSinh))
                                                                                                                                echo $noiSinh;
                                                                                                                            ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Dân tộc</label>
                                    <input type="text" name="danToc" class="form-control" placeholder="Dân tộc" value="<?php if (isset($danToc))
                                                                                                                            echo $danToc;
                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Tôn giáo</label>
                                    <input type="text" name="tonGiao" class="form-control" placeholder="Tôn giáo" value="<?php if (isset($tonGiao))
                                                                                                                                echo $tonGiao;
                                                                                                                            ?>" />
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Hộ khẩu thường trú</label>
                                    <textarea class="form-control" name="hoKhau" rows="2" placeholder="Hộ khẩu thường trú" required value="<?php if (isset($hoKhau))
                                                                                                                                                echo $hoKhau;
                                                                                                                                            ?>"></textarea>
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Địa chỉ</label>
                                    <textarea class="form-control" name="diaChi" rows="2" placeholder="Địa chỉ" required value="<?php if (isset($diaChi))
                                                                                                                                    echo $diaChi;
                                                                                                                                ?>"></textarea>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Số điện thoại</label>
                                    <input type="text" name="sdt" class="form-control" placeholder="Số điện thoại" value="<?php if (isset($sdt))
                                                                                                                                echo $sdt;
                                                                                                                            ?>" />
                                </div>


                                <div class="card-body">
                                    <label class="form-label">Tình trạng</label>
                                    <input type="text" name="tinhTrang" class="form-control" placeholder="Tình trạng" value="<?php if (isset($tinhTrang))
                                                                                                                                    echo $tinhTrang;
                                                                                                                                ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Ảnh sinh viên</label>
                                    <input type="text" name="anh_TK" class="form-control" placeholder="Ảnh sinh viên" required value="<?php
                                                                                                                                        if (isset($anh_TK)) echo $anh_TK;
                                                                                                                                        ?>" />
                                </div>

                                <div class="card-body">
                                    <label class="form-label">Thông tin phụ huynh</label>
                                    <select class="form-select" name="id_ph" required>
                                        <?php
                                        $sql_id_phuhuynh = "SELECT * FROM phuhuynh";
                                        $result_id_phuhuynh = mysqli_query($conn, $sql_id_phuhuynh);

                                        while ($row = mysqli_fetch_assoc($result_id_phuhuynh)) {
                                            echo '<option value="' . $row['ID_PHUHUYNH'] . '">'
                                                . $row['ID_PHUHUYNH'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Quyền đăng nhập</label>
                                    <select class="form-select" name="id_quyen" required>
                                        <?php
                                        $sql_id_quyen = "SELECT * FROM quyen";
                                        $result_id_quyen = mysqli_query($conn, $sql_id_quyen);

                                        while ($row = mysqli_fetch_assoc($result_id_quyen)) {
                                            echo '<option value="' . $row['ID_QUYEN'] . '">'
                                                . $row['TEN_QUYEN'] .
                                                '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="card-body">
                                    <label class="form-label">Mật khẩu</label>
                                    <input type="text" name="matkhau" class="form-control" placeholder="Mật khẩu" required value="<?php
                                                                                                                                        if (isset($matkhau)) echo $matkhau;
                                                                                                                                        ?>" />
                                </div>
                                <div class="card-body">
                                    <input type="submit" name="add_sinhvien" class="btn btn-success" value="THÊM SINH VIÊN" />
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
<!-- DANH SÁCH HỌC PHẦN -->
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

    <link rel="canonical" href="https://demo-basic.adminkit.io/pages-profile.html" />

    <title>QUẢN LÝ THÔNG TIN SINH VIÊN</title>

    <link href="css/app.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>


</head>

<body>
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

        // Lấy thông tin CBNV từ database
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

                    <li class="sidebar-item active">
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

            <main class="content">
                <div class="col-12 col-lg-12 col-xxl-12 d-flex">
                    <div class="card flex-fill">
                        <div class="card-header">
                            <h5 class="card-title mb-0">DANH SÁCH HỌC PHẦN</h5>
                        </div>

                        <div class="row">
                            <div class="col-12">
                                <div class="button-container" style="position: absolute; top: 20px; right: 20px; bottom: 20px;">
                                    <button class="btn btn-primary btn-lg" onclick="goToPageAdd_diemhocphan()">THÊM</button>
                                </div>
                                <script>
                                    function goToPageAdd_diemhocphan() {
                                        window.location.href = "pages_add_diemhocphan.php"; // Chuyển sang trang trang pages_add_DKHP.php
                                    }
                                </script>

                            </div>
                        </div>

                        <table class="table table-hover my-0">

                            <tbody>
                                <?php
                                include '../page_admin_qlsv/config.php';

                                // Giả sử ID_DKHP được nhận từ một nguồn nào đó như GET parameter
                                if (isset($_GET['ID_DKHP']) && isset($_GET['ID_HOCPHAN'])) {
                                    $id_dkhp = $_GET['ID_DKHP'];
                                    $id_hocphan = $_GET['ID_HOCPHAN'];

                                    // Lấy thông tin khóa học
                                    $sql1 = "SELECT hocphan.TEN_HOCPHAN, dkhp.HOCKY, dkhp.NAMHOC FROM dkhp
              JOIN hocphan ON hocphan.ID_HOCPHAN = dkhp.ID_HOCPHAN
              WHERE dkhp.ID_DKHP = ? AND hocphan.ID_HOCPHAN = ?";
                                    $stmt1 = mysqli_prepare($conn, $sql1);

                                    if ($stmt1) {
                                        mysqli_stmt_bind_param($stmt1, "ii", $id_dkhp, $id_hocphan);
                                        mysqli_stmt_execute($stmt1);
                                        $result1 = mysqli_stmt_get_result($stmt1);
                                        $course = mysqli_fetch_assoc($result1);
                                        mysqli_stmt_close($stmt1);

                                        // Kiểm tra nếu có thông tin khóa học
                                        if ($course) {
                                            // Lấy điểm của sinh viên
                                            $sql2 = "SELECT DISTINCT sinhvien.ID_SV, sinhvien.HOTEN_SV, kqht.DIEMBOPHAN, 
                                            kqht.DIEMGIUAKY, kqht.DIEMCUOIKY
                                            FROM kqht
                                            INNER JOIN sinhvien ON sinhvien.ID_SV = kqht.ID_SV
                                            INNER JOIN dkhp ON dkhp.ID_DKHP = kqht.ID_DKHP
                                            WHERE kqht.ID_DKHP = ? AND dkhp.ID_HOCPHAN = ?";
                                    

                                            $stmt2 = mysqli_prepare($conn, $sql2);

                                            if ($stmt2) {
                                                mysqli_stmt_bind_param($stmt2, "ii", $id_dkhp, $id_hocphan);
                                                mysqli_stmt_execute($stmt2);
                                                $result2 = mysqli_stmt_get_result($stmt2);

                                                if (mysqli_num_rows($result2) > 0) {
                                                    echo '<table class="table table-hover my-0" style="text-align: center;">
                            <thead>
                                <tr>
                                    <th class="d-none d-md-table-cell">Mã số sinh viên</th>
                                    <th class="d-none d-md-table-cell">Họ tên sinh viên</th>
                                    <th class="d-none d-md-table-cell">Điểm bộ phận</th>
                                    <th class="d-none d-md-table-cell">Điểm giữa kỳ</th>
                                    <th class="d-none d-md-table-cell">Điểm cuối kỳ</th>
                                    <th class="d-none d-md-table-cell">Điểm trung bình</th>
                                    <th class="d-none d-md-table-cell">Xếp loại</th>
                                    <th class="d-none d-md-table-cell">Thao tác</th>
                                </tr>
                            </thead>
                            <tbody>';

                                                    while ($rows = mysqli_fetch_assoc($result2)) {
                                                        $diemBoPhan = $rows['DIEMBOPHAN'];
                                                        $diemGiuaKy = $rows['DIEMGIUAKY'];
                                                        $diemCuoiKy = $rows['DIEMCUOIKY'];
                                                        // Tính điểm trung bình
                                                        $diemTrungBinh = ($diemBoPhan * 0.2 + $diemGiuaKy * 0.3 + $diemCuoiKy * 0.5);
                                                        // Xếp loại dựa trên điểm trung bình
                                                        if ($diemTrungBinh >= 5.0) {
                                                            $xepLoai = "Đạt";
                                                        } else {
                                                            $xepLoai = "Chưa đạt";
                                                        }

                                                        echo '<tr>
                                                                    <td class="d-none d-xl-table-cell">' . $rows["ID_SV"] . '</td>
                                                                    <td class="d-none d-xl-table-cell">' . $rows["HOTEN_SV"] . '</td>
                                                                    <td class="d-none d-xl-table-cell">' . $diemBoPhan . '</td>
                                                                    <td class="d-none d-xl-table-cell">' . $diemGiuaKy . '</td>
                                                                    <td class="d-none d-xl-table-cell">' . $diemCuoiKy . '</td>
                                                                    <td class="d-none d-xl-table-cell">' . round($diemTrungBinh, 2) . '</td>
                                                                    <td class="d-none d-xl-table-cell">' . $xepLoai . '</td>
                                                                    <td>
                                                                        <a class="btn btn-primary" href="pages_edit_diem.php?ID_DKHP=' . $id_dkhp . '&ID_SV=' . $rows["ID_SV"] . '">Chỉnh sửa</a>
                                                                    </td>
                                                                </tr>';
                                                    }

                                                    echo '</tbody></table>';
                                                } else {
                                                    echo '<p>Không có dữ liệu điểm cho môn học này.</p>';
                                                }

                                                mysqli_stmt_close($stmt2);
                                            } else {
                                                echo '<p>Lỗi khi chuẩn bị câu truy vấn: ' . mysqli_error($conn) . '</p>';
                                            }
                                        } else {
                                            echo '<p>Không tìm thấy thông tin khóa học.</p>';
                                        }
                                    } else {
                                        echo '<p>Lỗi khi chuẩn bị câu truy vấn: ' . mysqli_error($conn) . '</p>';
                                    }
                                } else {
                                    echo '<p>ID_DKHP và ID_HOCPHAN không được cung cấp.</p>';
                                }

                                // Đóng kết nối
                                mysqli_close($conn);
                                ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </main>

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
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVFQWrvVuHdBsV5JuJuwALPXzcfvnzVVAjTkLv4ttianOl4zEOXi" crossorigin="anonymous"></script>
</body>

</html>
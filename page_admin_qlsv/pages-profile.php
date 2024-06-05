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
        <!-- <form class="d-none d-md-flex ms-4">
          <input class="form-control border-1" type="search" id="search" name="search" placeholder="Tìm kiếm" value="<?php echo isset($_GET['search']) ? htmlspecialchars($_GET['search']) : ''; ?>">
          <button type="submit">Tìm kiếm</button>
        </form> -->
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
              <h5 class="card-title mb-0">DANH SÁCH SINH VIÊN</h5>
            </div>
            <div class="row">
              <div class="col-12">
                <div class="button-container" style="position: absolute; top: 20px; right: 20px; bottom: 20px;">
                  <button class="btn btn-primary btn-lg" onclick="goToPageAdd_SV()">THÊM</button>
                </div>
                <script>
                  function goToPageAdd_SV() {
                    window.location.href = "pages_add_SV.php"; // Chuyển sang trang trang pages_add_SV.php
                  }
                </script>

              </div>
            </div>


            <table class="table table-hover my-0" style="text-align: center;">
              <thead>
                <tr>
                  <th class="d-none d-md-table-cell">Mã số sinh viên</th>
                  <th class="d-none d-md-table-cell">Họ tên sinh viên</th>
                  <th class="d-none d-xl-table-cell">Lớp</th>
                  <th class="d-none d-xl-table-cell">Ngành</th>
                  <th class="d-none d-md-table-cell">Khoa</th>
                  <th class="d-none d-md-table-cell">Thao tác</th>
                  <th></th>
                </tr>
              </thead>
              <tbody>
                <?php
                include '../page_admin_qlsv/config.php';

                if (isset($_GET['message']) && $_GET['message'] == 'delete_success') {
                  echo "<div class='alert alert-success'>Xóa sinh viên thành công.</div>";
                }

                $sql = "SELECT sinhvien.ID_SV, sinhvien.HOTEN_SV, sinhvien.ID_LOP, nganh.TEN_NGANH, khoa_vien.TEN_KHOAVIEN
        FROM sinhvien
        JOIN lop ON sinhvien.ID_LOP = lop.ID_LOP
        JOIN nganh ON sinhvien.ID_NGANH = nganh.ID_NGANH
        JOIN khoa_vien ON sinhvien.ID_KHOAVIEN = khoa_vien.ID_KHOAVIEN";

                $result = mysqli_query($conn, $sql);

                if (!$result) {
                  die("Query failed: " . mysqli_error($conn));
                }

                if (mysqli_num_rows($result) > 0) {
                  while ($row = mysqli_fetch_assoc($result)) {
                    echo '<tr>
              <td class="d-none d-xl-table-cell">' . htmlspecialchars($row['ID_SV']) . '</td>
              <td class="d-none d-xl-table-cell">' . htmlspecialchars($row['HOTEN_SV']) . '</td>
              <td class="d-none d-xl-table-cell">' . htmlspecialchars($row['ID_LOP']) . '</td>
              <td class="d-none d-xl-table-cell">' . htmlspecialchars($row['TEN_NGANH']) . '</td>
              <td class="d-none d-xl-table-cell">' . htmlspecialchars($row['TEN_KHOAVIEN']) . '</td>
              <td>
                <a class="btn btn-primary" href="page_list_sv.php?ID_SV=' . htmlspecialchars($row['ID_SV']) . '">Xem</a>
                <a class="btn btn-primary" href="pages_edit_SV.php?ID_SV=' . htmlspecialchars($row['ID_SV']) . '">Chỉnh sửa</a>
                <a class="btn btn-primary" href="pages_delete_SV.php?ID_SV=' . htmlspecialchars($row['ID_SV']) . '" onclick="return confirm(\'Bạn có chắc chắn muốn xóa sinh viên này?\');">Xóa</a>
              </td>
              </tr>';
                  }
                }
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
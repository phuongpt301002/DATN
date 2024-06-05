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

  <link rel="canonical" href="https://demo-basic.adminkit.io/ui-typography.html" />

  <title>QUẢN LÝ DANH MỤC</title>

  <link href="css/app.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet" />
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

      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3"><strong>QUẢN LÝ</strong> DANH MỤC</h1>
          <div class="row">
            <div class="col-xl-8 col-xxl-8 d-flex">
              <div class="w-100">
                <div class="row">
                  <div class="col-sm-6">
                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_KhoaVien()" style="width: 250px; height: 100px; ">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto mx-auto">
                            <h1 class="mt-1 mb-3">KHOA VIỆN</h1>
                          </div>
                        </div>
                      </div>
                    </button>
                    <script>
                      function goToPage_KhoaVien() {
                        window.location.href = "pages_KhoaVien.php"; // Chuyển sang trang trang pages_add_SV.php
                      }
                    </script>
                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_NganhHoc()" style="width: 250px; height: 100px;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <h1 class="mt-1 mb-3">NGÀNH HỌC</h1>
                          </div>
                        </div>
                      </div>
                    </button>
                    <script>
                      function goToPage_NganhHoc() {
                        window.location.href = "pages_NganhHoc.php";
                      }
                    </script>

                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_CTDT()" style="width: 250px; height: 100px; ">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto mx-auto">
                            <h2 class="mt-1 mb-3">CHƯƠNG TRÌNH ĐÀO TẠO</h2>
                          </div>
                        </div>
                      </div>
                    </button>
                    <script>
                      function goToPage_CTDT() {
                        window.location.href = "pages_dm_ctdt.php";
                      }
                    </script>

                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_KTHB()" style="width: 250px; height: 100px;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <h1 class="mt-1 mb-3">KHEN THƯỞNG</h1>
                          </div>
                        </div>
                      </div>
                    </button>

                    <script>
                      function goToPage_KTHB() {
                        window.location.href = "pages_KTHB.php";
                      }
                    </script>
                  </div>

                  <div class="col-sm-6">
                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_HocPhan()" style="width: 250px; height: 100px;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <h1 class="mt-1 mb-3">HỌC PHẦN</h1>
                          </div>
                        </div>
                      </div>
                    </button>
                    <script>
                      function goToPage_HocPhan() {
                        window.location.href = "pages_dm_hocphan.php";
                      }
                    </script>

                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_LopHoc()" style="width: 250px; height: 100px;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <h1 class="mt-1 mb-3">LỚP HỌC</h1>
                          </div>
                        </div>
                      </div>
                    </button>
                    <script>
                      function goToPage_LopHoc() {
                        window.location.href = "pages_lop.php";
                      }
                    </script>


                    <button class="card d-flex justify-content-center align-items-center" onclick="goToPage_TieuChiDRL()" style="width: 250px; height: 100px;">
                      <div class="card-body">
                        <div class="row">
                          <div class="col-auto">
                            <h1 class="mt-1 mb-3">TIÊU CHÍ ĐIỂM RÈN LUYỆN</h1>
                          </div>
                        </div>
                      </div>
                    </button>
                    <script>
                      function goToPage_TieuChiDRL() {
                        window.location.href = "pages_dm_tieuchiDRL.php";
                      }
                    </script>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </main>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a class="text-muted" href="index.php" target="_blank"><strong>Quản lý quá trình học tập của sinh viên</strong></a>
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
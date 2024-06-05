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

  <link rel="canonical" href="https://demo-basic.adminkit.io/ui-forms.html" />

  <title>XEM CHI TIẾT THÔNG TIN SINH VIÊN</title>
  <title>
    <?php echo $row['hoten_SV']; ?>
  </title>

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

  // Kết nối đến MySQL với PHP
  $conn = mysqli_connect($server, $username, $password, $database);

  // Kiểm tra kết nối
  if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
  }

  // Kiểm tra xem admin đã đăng nhập hay chưa
  if (isset($_SESSION['acc_cbnv']) && $_SESSION['acc_cbnv'] === true) {
    // Giả sử admin muốn truy vấn thông tin của user dựa trên user_id
    if (isset($_GET['ID_SV'])) {
      $id_sv = $_GET['ID_SV'];

      // Sử dụng prepared statements để tránh SQL injection
      $sql1 = "SELECT * FROM sinhvien 
                JOIN lop ON sinhvien.ID_LOP = lop.ID_LOP
                JOIN nganh ON sinhvien.ID_NGANH = nganh.ID_NGANH
                JOIN khoa_vien ON sinhvien.ID_KHOAVIEN = khoa_vien.ID_KHOAVIEN
                JOIN phuhuynh ON sinhvien.ID_PHUHUYNH = phuhuynh.ID_PHUHUYNH
                WHERE sinhvien.ID_SV = ?";

      if ($stmt = mysqli_prepare($conn, $sql1)) {
        // Bind variables to the prepared statement as parameters
        mysqli_stmt_bind_param($stmt, "s", $id_sv);

        // Execute the prepared statement
        mysqli_stmt_execute($stmt);

        // Get the result
        $result1 = mysqli_stmt_get_result($stmt);

        // Fetch data
        if (mysqli_num_rows($result1) > 0) {
          $row1 = mysqli_fetch_assoc($result1);
          // Xử lý dữ liệu $row ở đây
        } else {
          echo "No records found.";
        }

        // Close the statement
        mysqli_stmt_close($stmt);
      } else {
        echo "Error: " . mysqli_error($conn);
      }
    } else {
      echo "User ID not provided.";
    }
  } else {
    echo "Admin not logged in.";
  }

  // Đóng kết nối
  mysqli_close($conn);
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
        <div class="container-fluid p-0">
          <div class="mb-3">
            <h1 class="h3 d-inline align-middle">XEM CHI TIẾT THÔNG TIN SINH VIÊN</h1>
          </div>
          <form method="post">
            <div class="row">
              <div class="col-12 col-lg-2">
                <div class="card">
                  <div class="card-body">
                    <img class="img-fluid rounded-circle mx-auto mb-4" src="<?php echo $row1['ANH_TK']; ?>" style="width: 100px; height: 100px; text-align: center;">
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-5">
                <div class="card">
                  <div class="card-body">
                    <div>
                      <label class="form-label"><strong>Mã số sinh viên:</strong></label>
                      <?php echo $row1['ID_SV']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Họ tên sinh viên:</strong></label>
                      <?php echo $row1['HOTEN_SV']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Giới tính:</strong></label>
                      <?php echo $row1['GIOITINH']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Ngày sinh:</strong></label>
                      <?php echo $row1['NGAYSINH']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Lớp:</strong></label>
                      <?php echo $row1['TEN_LOP']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Khóa học:</strong></label>
                      <?php echo $row1['KHOAHOC']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Khoa viện:</strong></label>
                      <?php echo $row1['TEN_KHOAVIEN']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Ngành học:</strong></label>
                      <?php echo $row1['TEN_NGANH']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Email:</strong></label>
                      <?php echo $row1['EMAIL']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Hệ đào tạo:</strong></label>
                      <?php echo $row1['HEDAOTAO']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Tình trạng:</strong></label>
                      <?php echo $row1['TINHTRANG']; ?>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-12 col-lg-5">
                <div class="card">

                  <div class="card-body">
                    <div>
                      <label class="form-label"><strong>CCCD:</strong></label>
                      <?php echo $row1['CCCD']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Nơi sinh:</strong></label>
                      <?php echo $row1['NOISINH']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Dân tộc:</strong></label>
                      <?php echo $row1['DANTOC']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Tôn giáo:</strong></label>
                      <?php echo $row1['TONGIAO']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Hộ khẩu thường trú:</strong></label>
                      <?php echo $row1['HOKHAU']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Địa chỉ:</strong></label>
                      <?php echo $row1['DIACHI']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Số điện thoại:</strong></label>
                      <?php echo $row1['SDT']; ?>
                    </div>

                    <div>
                      <label class="form-label"><strong>Số điện thoại:</strong></label>
                      <?php echo $row1['SDT']; ?>
                      </di>

                      <div>
                        <label class="form-label"><strong>Thông tin phụ huynh</strong></label>
                        <ul>
                          <li><strong>Họ tên phụ huynh:</strong></li>
                          <?php echo $row1['HOTEN_PHUHUYNH'] ?>
                          <li><strong>Số điện thoại:</strong></li>
                          <?php echo $row1['SDT_PHUHUYNH'] ?>
                          <li><strong>Địa chỉ:</strong></li>
                          <?php echo $row1['DIACHI_PHUHUYNH'] ?>
                        </ul>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
          </form>
        </div>
      </main>

      <footer class="footer">
        <div class="container-fluid">
          <div class="row text-muted">
            <div class="col-6 text-start">
              <p class="mb-0">
                <a class="text-muted" href="https://www.ntu.edu.vn/" target="_blank"><strong>QUẢN LÝ QUÁ TRÌNH HỌC TẬP CỦA SINH VIÊN</strong></a>
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
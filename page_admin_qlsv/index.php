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

  <link rel="canonical" href="https://demo-basic.adminkit.io/" />

  <title>TRANG CHỦ</title>
  <link rel="stylesheet" href="../page_admin_qlsv/css/index.css">

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

          <li class="sidebar-item active">
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
              <img class="rounded-circle me-lg-2" src="<?php echo $row['ANH_CBNV']; ?>" alt="" style="width: 40px; height: 40px;">
              <?php
              if (isset($_SESSION['acc_cbnv'])) {
                echo ' <span class="d-none d-lg-inline-flex">' . $row['HOTEN_CBNV'] . '<span> ';
              }
              ?>
            </a>
            <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
              <a href="../login.php" class="dropdown-item">Log Out</a>
            </div>
          </div>
        </div>
      </nav>

      <main class="content">
        <div class="container-fluid p-0">
          <h1 class="h3 mb-3"><strong>TRANG CHỦ</strong></h1>

          <div class="row">
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-1">
              <div class="card flex-fill">
                <div class="card-header">
                  <h5 class="card-title mb-0">Calendar</h5>
                </div>
                <div class="card-body d-flex">
                  <div class="align-self-center w-100">
                    <div class="chart">
                      <div id="datetimepicker-dashboard"></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-md-6 col-xxl-3 d-flex order-1 order-xxl-2">
              <div id="dnn_P3" class="ss_sidebar_inner">
                <div class="DnnModule DnnModule-NoteView DnnModule-9981"><a name="9981"></a>
                  <div class="DNNContainer_Title_h2 SpacingBottom">
                    <div class="main-title mt30">
                      <h2><span id="dnn_ctr9981_dnnTITLE_titleLabel" class="TitleH2">Thông báo</span>
                      </h2>
                    </div>
                    <div id="dnn_ctr9981_ContentPane"><!-- Start_Module_9981 -->
                      <div id="dnn_ctr9981_ModuleContent" class="DNNModuleContent ModNoteViewC">
                        <div id="mvcContainer-9981">
                          <marquee id="test" behavior="scroll" direction="up" height="300px" scrolldelay="50" scrollamount="2" onmouseover="document.all.test.stop()" onmouseout="document.all.test.start()">
                            <div class="media bb1">
                              <div class="media-body p10">
                                <a href="/thong-bao/thong-bao-ve-viec-de-cu-thanh-vien-tham-gia-hoi-dong-giao-su-co-so--truong-dai-hoc-nha-trang-nam-2024" class="review_title mt-0" title="Thông báo về việc đề cử thành viên tham gia Hội đồng Giáo sư cơ sở  Trường Đại học Nha Trang năm 2024">
                                  <i class="fa fa-caret-right"></i> Thông báo về việc đề cử thành viên tham gia Hội đồng Giáo sư cơ sở Trường Đại học Nha Trang năm 2024 <span class="color-red" href="#">[07/05/2024]</span>
                                </a>
                              </div>
                            </div>
                            <div class="media bb1">
                              <div class="media-body p10">
                                <a href="/thong-bao/thong-bao-tuyen-chon-to-chuc--ca-nhan-chu-tri-thuc-hien-de-tai-khcn-cap-bo-nam-2025" class="review_title mt-0" title="Thông báo tuyển chọn tổ chức, cá nhân chủ trì thực hiện đề tài KHCN cấp bộ năm 2025">
                                  <i class="fa fa-caret-right"></i> Thông báo tuyển chọn tổ chức, cá nhân chủ trì thực hiện đề tài KHCN cấp bộ năm 2025 <span class="color-red" href="#">[05/05/2024]</span>
                                </a>
                              </div>
                            </div>
                            <div class="media bb1">
                              <div class="media-body p10">
                                <a href="/thong-bao/thong-bao-to-chuc-cuoc-thi-thach-thuc-doi-moi-cham-dut-o-nhiem-rac-thai-nhua" class="review_title mt-0" title="Thông báo tổ chức cuộc thi “Thách thức đổi mới chấm dứt ô nhiễm rác thải nhựa”">
                                  <i class="fa fa-caret-right"></i> Thông báo tổ chức cuộc thi “Thách thức đổi mới chấm dứt ô nhiễm rác thải nhựa” <span class="color-red" href="#">[11/04/2024]</span>
                                </a>
                              </div>
                            </div>
                            <div class="media bb1">
                              <div class="media-body p10">
                                <a href="/thong-bao/thong-bao-ke-hoach-trien-khai-xet-de-nghi-cong-nhan--dat-tieu-chuan-chuc-danh-giao-su--pho-giao-su-nam-2024" class="review_title mt-0" title="Thông báo Kế hoạch triển khai xét đề nghị công nhận  đạt tiêu chuẩn chức danh giáo sư, phó giáo sư năm 2024">
                                  <i class="fa fa-caret-right"></i> Thông báo Kế hoạch triển khai xét đề nghị công nhận đạt tiêu chuẩn chức danh giáo sư, phó giáo sư năm 2024 <span class="color-red" href="#">[09/04/2024]</span>
                                </a>
                              </div>
                            </div>
                            <div class="media bb1">
                              <div class="media-body p10">
                                <a href="/thong-bao/thong-bao-danh-sach-thi-sinh-trung-tuyen-va-hoan-thien-ho-so-tuyen-dung--ky-tuyen-dung-vien-chuc-nam-2023-cua-truong-dai-hoc-nha-trang" class="review_title mt-0" title="Thông báo danh sách thí sinh trúng tuyển và hoàn thiện hồ sơ tuyển dụng, kỳ tuyển dụng viên chức năm 2023 của Trường Đại học Nha Trang">
                                  <i class="fa fa-caret-right"></i> Thông báo danh sách thí sinh trúng tuyển và hoàn thiện hồ sơ tuyển dụng, kỳ tuyển dụng viên chức năm 2023 của Trường Đại học Nha Trang <span class="color-red" href="#">[15/03/2024]</span>
                                </a>
                              </div>
                            </div>
                          </marquee>
                          <div class="ss_notification_box">
                            <ul class="view_edit_delete_list">
                              <li class="list-inline-item wa">
                                <a class="btn-sm" title="Xem tất cả" href="https://ntu.edu.vn/thong-bao?view=all">
                                  Xem tất cả
                                  <i class="fa fa-long-arrow-right"></i>
                                </a>
                              </li>
                            </ul>
                          </div>
                          <script>
                            function printDiv(id) {
                              var divContents = document.getElementById(id).innerHTML;
                              var a = window.open('', '', 'height=500, width=500');
                              a.document.write('<html>');
                              a.document.write('<body >');
                              a.document.write(divContents);
                              a.document.write('</body></html>');
                              a.document.close();
                              a.print();
                            }
                          </script>
                        </div>
                      </div><!-- End_Module_9981 -->
                    </div>
                    <div class="clear"></div>
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
                <a class="text-muted" href="index.php" target="_blank"><strong>QUẢN LÝ QUÁ TRÌNH HỌC TẬP CỦA SINH VIÊN</strong></a>
                &copy;
              </p>
            </div>
          </div>
        </div>
    </div>
    </footer>
  </div>
  </div>

  <script src="js/app.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var ctx = document
        .getElementById("chartjs-dashboard-line")
        .getContext("2d");
      var gradient = ctx.createLinearGradient(0, 0, 0, 225);
      gradient.addColorStop(0, "rgba(215, 227, 244, 1)");
      gradient.addColorStop(1, "rgba(215, 227, 244, 0)");
      // Line chart
      new Chart(document.getElementById("chartjs-dashboard-line"), {
        type: "line",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [{
            label: "Sales ($)",
            fill: true,
            backgroundColor: gradient,
            borderColor: window.theme.primary,
            data: [
              2115, 1562, 1584, 1892, 1587, 1923, 2566, 2448, 2805, 3438,
              2917, 3327,
            ],
          }, ],
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          tooltips: {
            intersect: false,
          },
          hover: {
            intersect: true,
          },
          plugins: {
            filler: {
              propagate: false,
            },
          },
          scales: {
            xAxes: [{
              reverse: true,
              gridLines: {
                color: "rgba(0,0,0,0.0)",
              },
            }, ],
            yAxes: [{
              ticks: {
                stepSize: 1000,
              },
              display: true,
              borderDash: [3, 3],
              gridLines: {
                color: "rgba(0,0,0,0.0)",
              },
            }, ],
          },
        },
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Pie chart
      new Chart(document.getElementById("chartjs-dashboard-pie"), {
        type: "pie",
        data: {
          labels: ["Chrome", "Firefox", "IE"],
          datasets: [{
            data: [4306, 3801, 1689],
            backgroundColor: [
              window.theme.primary,
              window.theme.warning,
              window.theme.danger,
            ],
            borderWidth: 5,
          }, ],
        },
        options: {
          responsive: !window.MSInputMethodContext,
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          cutoutPercentage: 75,
        },
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      // Bar chart
      new Chart(document.getElementById("chartjs-dashboard-bar"), {
        type: "bar",
        data: {
          labels: [
            "Jan",
            "Feb",
            "Mar",
            "Apr",
            "May",
            "Jun",
            "Jul",
            "Aug",
            "Sep",
            "Oct",
            "Nov",
            "Dec",
          ],
          datasets: [{
            label: "This year",
            backgroundColor: window.theme.primary,
            borderColor: window.theme.primary,
            hoverBackgroundColor: window.theme.primary,
            hoverBorderColor: window.theme.primary,
            data: [54, 67, 41, 55, 62, 45, 55, 73, 60, 76, 48, 79],
            barPercentage: 0.75,
            categoryPercentage: 0.5,
          }, ],
        },
        options: {
          maintainAspectRatio: false,
          legend: {
            display: false,
          },
          scales: {
            yAxes: [{
              gridLines: {
                display: false,
              },
              stacked: false,
              ticks: {
                stepSize: 20,
              },
            }, ],
            xAxes: [{
              stacked: false,
              gridLines: {
                color: "transparent",
              },
            }, ],
          },
        },
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var markers = [{
          coords: [31.230391, 121.473701],
          name: "Shanghai",
        },
        {
          coords: [28.70406, 77.102493],
          name: "Delhi",
        },
        {
          coords: [6.524379, 3.379206],
          name: "Lagos",
        },
        {
          coords: [35.689487, 139.691711],
          name: "Tokyo",
        },
        {
          coords: [23.12911, 113.264381],
          name: "Guangzhou",
        },
        {
          coords: [40.7127837, -74.0059413],
          name: "New York",
        },
        {
          coords: [34.052235, -118.243683],
          name: "Los Angeles",
        },
        {
          coords: [41.878113, -87.629799],
          name: "Chicago",
        },
        {
          coords: [51.507351, -0.127758],
          name: "London",
        },
        {
          coords: [40.416775, -3.70379],
          name: "Madrid ",
        },
      ];
      var map = new jsVectorMap({
        map: "world",
        selector: "#world_map",
        zoomButtons: true,
        markers: markers,
        markerStyle: {
          initial: {
            r: 9,
            strokeWidth: 7,
            stokeOpacity: 0.4,
            fill: window.theme.primary,
          },
          hover: {
            fill: window.theme.primary,
            stroke: window.theme.primary,
          },
        },
        zoomOnScroll: false,
      });
      window.addEventListener("resize", () => {
        map.updateSize();
      });
    });
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var date = new Date(Date.now() - 5 * 24 * 60 * 60 * 1000);
      var defaultDate =
        date.getUTCFullYear() +
        "-" +
        (date.getUTCMonth() + 1) +
        "-" +
        date.getUTCDate();
      document.getElementById("datetimepicker-dashboard").flatpickr({
        inline: true,
        prevArrow: '<span title="Previous month">&laquo;</span>',
        nextArrow: '<span title="Next month">&raquo;</span>',
        defaultDate: defaultDate,
      });
    });
  </script>
</body>

</html>
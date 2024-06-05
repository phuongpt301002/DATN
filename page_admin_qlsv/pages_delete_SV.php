<?php
include '../page_admin_qlsv/config.php';

if (isset($_GET['ID_SV'])) {
    $id_sv = $_GET['ID_SV'];

    // Tạo truy vấn xóa sinh viên
    $sql = "DELETE FROM sinhvien WHERE ID_SV = ?";

    // Chuẩn bị truy vấn
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán tham số vào truy vấn
        mysqli_stmt_bind_param($stmt, "s", $id_sv);

        // Thực thi truy vấn
        if (mysqli_stmt_execute($stmt)) {
            //echo "Xóa sinh viên thành công.";
            // Chuyển hướng về trang danh sách sinh viên
            echo "<script>
              setTimeout(function(){
                  alert('Xóa sinh viên thành công');
                  window.location.href = 'pages-profile.php';
              }, 0);
          </script>";
            exit();
        } else {
            echo "Lỗi: Không thể xóa sinh viên.";
        }

        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi: Không thể chuẩn bị truy vấn.";
    }
} else {
    echo "Lỗi: Không có mã số sinh viên.";
}

// Đóng kết nối
mysqli_close($conn);


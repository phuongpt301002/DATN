<?php
// Bật báo lỗi
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Kết nối đến cơ sở dữ liệu
include '../page_admin_qlsv/config.php';

// Kiểm tra xem ID_DKHP và ID_SV có tồn tại không
if (isset($_GET['ID_DKHP']) && isset($_GET['ID_SV'])) {
    $id_dkhp = $_GET['ID_DKHP'];
    $id_sv = $_GET['ID_SV'];

    // Cập nhật trạng thái xác nhận trong bảng dkhp
    $sql = "UPDATE dkhp SET TINHTRANG = 1 WHERE ID_DKHP = ? AND ID_SV = ?";
    
    if ($stmt = mysqli_prepare($conn, $sql)) {
        mysqli_stmt_bind_param($stmt, "ii", $id_dkhp, $id_sv);
        
        if (mysqli_stmt_execute($stmt)) {
            // Hiển thị thông báo thành công và chuyển hướng
            echo "<script>
                    alert('Xác nhận thành công!');
                    window.location.href = 'pages_dm_dkhp.php'; 
                  </script>";
            exit();
        } else {
            echo "Lỗi: Không thể cập nhật trạng thái xác nhận.<br>";
            echo "Lỗi: " . mysqli_error($conn);
        }
        
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi: Không thể chuẩn bị câu truy vấn.<br>";
        echo "Lỗi: " . mysqli_error($conn);
    }
} else {
    echo "Dữ liệu không hợp lệ.<br>";
}

// Đóng kết nối cơ sở dữ liệu
mysqli_close($conn);
?>

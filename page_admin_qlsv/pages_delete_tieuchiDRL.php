<?php
include '../page_admin_qlsv/config.php';

if (isset($_GET['ID_TIEUCHI'])) {
    $ID_TIEUCHI = $_GET['ID_TIEUCHI'];

    // Tạo truy vấn xóa sinh viên
    $sql = "DELETE FROM tieuchi_drl WHERE ID_TIEUCHI = ?";

    // Chuẩn bị truy vấn
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán tham số vào truy vấn
        mysqli_stmt_bind_param($stmt, "s", $ID_TIEUCHI);

        // Thực thi truy vấn
        if (mysqli_stmt_execute($stmt)) {
            echo "Xóa chương trình đào tạo thành công.";
            // Chuyển hướng về trang danh sách sinh viên
            header("Location: pages_dm_tieuchiDRL.php?message=delete_success");
            exit();
        } else {
            echo "Lỗi: Không thể xóa chương trình đào tạo.";
        }

        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi: Không thể chuẩn bị truy vấn.";
    }
} else {
    echo "Lỗi: Không có mã chương trình đào tạo.";
}

// Đóng kết nối
mysqli_close($conn);


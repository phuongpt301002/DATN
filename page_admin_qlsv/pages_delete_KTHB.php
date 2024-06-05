<?php
include '../page_admin_qlsv/config.php';

if (isset($_GET['ID_KTHB'])) {
    $ID_KTHB = $_GET['ID_KTHB'];

    // Tạo truy vấn xóa học phần
    $sql = "DELETE FROM kthb WHERE ID_KTHB = ?";

    // Chuẩn bị truy vấn
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán tham số vào truy vấn
        mysqli_stmt_bind_param($stmt, "s", $ID_KTHB);

        // Thực thi truy vấn
        if (mysqli_stmt_execute($stmt)) {
            echo "Xóa học phần thành công.";
            // Chuyển hướng về trang danh sách học phần
            header("Location: pages_KTHB.php?message=delete_success");
            exit();
        } else {
            echo "Lỗi: Không thể xóa học phần.";
        }

        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi: Không thể chuẩn bị truy vấn.";
    }
} else {
    echo "Lỗi: Không có mã học phần.";
}

// Đóng kết nối
mysqli_close($conn);


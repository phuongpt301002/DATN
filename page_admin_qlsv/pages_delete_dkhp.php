<?php
include '../page_admin_qlsv/config.php';

if (isset($_GET['ID_DKHP'])) {
    $id_dkhp_delete = $_GET['ID_DKHP'];

    // Tạo truy vấn xóa đăng ký học phần
    $sql = "DELETE FROM dkhp WHERE ID_DKHP = ?";

    // Chuẩn bị truy vấn
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán tham số vào truy vấn
        mysqli_stmt_bind_param($stmt, "s", $id_dkhp_delete);

        // Thực thi truy vấn
        if (mysqli_stmt_execute($stmt)) {
            echo "Xóa đăng ký học phần thành công.";
            // Chuyển hướng về trang danh sách đăng ký học phần
            header("Location: pages_dm_dkhp.php?message=delete_success");
            exit();
        } else {
            echo "Lỗi: Không thể xóa đăng ký học phần.";
        }

        // Đóng câu lệnh
        mysqli_stmt_close($stmt);
    } else {
        echo "Lỗi: Không thể chuẩn bị truy vấn.";
    }
} else {
    echo "Lỗi: Không có mã đăng ký.";
}

// Đóng kết nối
mysqli_close($conn);


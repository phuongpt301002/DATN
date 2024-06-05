<?php
include '../page_admin_qlsv/config.php';

if (isset($_GET['ID_CTDT'])) {
    $id_sv = $_GET['ID_CTDT'];

    // Tạo truy vấn xóa sinh viên
    $sql = "DELETE FROM ctdt WHERE ID_CTDT = ?";

    // Chuẩn bị truy vấn
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán tham số vào truy vấn
        mysqli_stmt_bind_param($stmt, "s", $id_sv);

        // Thực thi truy vấn
        if (mysqli_stmt_execute($stmt)) {
            echo "Xóa chương trình đào tạo thành công.";
            // Chuyển hướng về trang danh sách sinh viên
            header("Location: pages_hocphan_ctdt.php?message=delete_success");
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


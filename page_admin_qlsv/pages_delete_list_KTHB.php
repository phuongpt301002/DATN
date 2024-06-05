<?php
include '../page_admin_qlsv/config.php';

if (isset($_GET['ID_SV_KTHB'])) {
    $id_sv_kthb = $_GET['ID_SV_KTHB'];

    // Tạo truy vấn xóa sinh viên
    $sql = "DELETE FROM sinhvien_kthb WHERE ID_SV_KTHB = ?";

    // Chuẩn bị truy vấn
    if ($stmt = mysqli_prepare($conn, $sql)) {
        // Gán tham số vào truy vấn
        mysqli_stmt_bind_param($stmt, "s", $id_sv_kthb);

        // Thực thi truy vấn
        if (mysqli_stmt_execute($stmt)) {
            echo "Xóa sinh viên thành công.";
            // Chuyển hướng về trang danh sách sinh viên
            header("Location: pages_list_KTHB.php?message=delete_success");
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


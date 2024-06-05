<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="datn_css/login.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css" />
    <title>Document</title>
</head>

<body>
    <?php
    session_start();

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "datn_test_2";

    // Connect to MySQL
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $id = isset($_POST['id']) ? $_POST['id'] : ''; // Handle empty POST data
    $matkhau = isset($_POST['password']) ? $_POST['password'] : '';

    // Use prepared statement to check ID and password in SINHVIEN table
    $stmt = $conn->prepare("SELECT ID_SV, ID_QUYEN FROM SINHVIEN WHERE ID_SV = ? AND MATKHAU = ?");
    $stmt->bind_param("ss", $id, $matkhau);
    $stmt->execute();
    $result = $stmt->get_result();

    // Authentication for SINHVIEN
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        session_unset(); // Clear existing session variables
        session_destroy(); // Destroy existing session
        session_start(); // Start a new session
        $_SESSION['acc_sv'] = true;
        $_SESSION['id'] = $row['ID_SV']; // Store student ID
        $_SESSION['quyen'] = $row['ID_QUYEN']; // Store access level
        header("Location: page_sv/index.php");
        exit();
    } else {
        // Check ID and password in CBNV table if SINHVIEN authentication fails
        $stmt = $conn->prepare("SELECT ID_CBNV, ID_QUYEN FROM CBNV WHERE ID_CBNV = ? AND MATKHAU = ?");
        $stmt->bind_param("ss", $id, $matkhau);
        $stmt->execute();
        $result = $stmt->get_result();

        // Authentication for CBNV
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            session_unset(); // Clear existing session variables
            session_destroy(); // Destroy existing session
            session_start(); // Start a new session
            $_SESSION['acc_cbnv'] = true;
            $_SESSION['id'] = $row['ID_CBNV']; // Store staff ID
            $_SESSION['quyen'] = $row['ID_QUYEN']; // Store access level
            header("Location: page_admin_qlsv/index.php");
            exit();
        } 
        if (!$result->num_rows > 0) {
            echo "<script>
                    alert('Vui lòng đăng nhập lại.');
                </script>";
        }
    }

    // Close connection
    $stmt->close();
    $conn->close();
    ?>

    <div id="container">
        <form id="login_form" action="login.php" method="post">
            <div class="login_form">
                <img src="img_datn1/logo_ntu.png" alt="Logo" style="width: 150px; height: 150px;">
            </div>
            <h2>ĐĂNG NHẬP</h2>
            <div class="form-group">
                <input type="text" id="id" name="id" placeholder="Mã số tài khoản" required value="<?php
                                                                                                    if (isset($id)) echo ($id);
                                                                                                    ?>">
            </div>
            <div class="form-group">
                <input type="password" id="password" name="password" placeholder="Mật khẩu" required value="<?php
                                                                                                            if (isset($matkhau)) echo ($matkhau);
                                                                                                            ?>">
            </div>
            <div class="form-group-check">
                <input type="checkbox" id="showPassword">
                <label for="password">Hiển thị mật khẩu</label>
            </div>
            <div class="form-group-submit">
                <button id="form-submit" type="submit" name="submit_login">Đăng nhập</button>
            </div>
            <!-- <div class="form-submit">
                <a href="reset_pwd.php">Quên mật khẩu?</a>
            </div> -->
        </form>
    </div>

    <script>
        const passwordInput = document.getElementById('password');
        const showPasswordCheckbox = document.getElementById('showPassword');

        showPasswordCheckbox.addEventListener('change', function() {
            if (showPasswordCheckbox.checked) {
                passwordInput.type = 'text';
            } else {
                passwordInput.type = 'password';
            }
        });
    </script>
</body>

</html>
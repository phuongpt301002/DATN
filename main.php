<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    if (isset($_GET['page'])) {
        $tam = $_GET['page'];
    } else {
        $tam = '';
    }
    if ($tam == 'home') {
        include 'page_main_menu_SV.php';
    }  elseif ($tam == 'login') {
        include 'page_datn1/login.php';
    }  else {
        include 'main/home.php';
    }
    ?>

</body>

</html>
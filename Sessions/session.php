<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    session_start();
    error_reporting(0);
    // Set session variables
    $_SESSION["favcolor"] = "green";
    $_SESSION["favanimal"] = "cat";
    echo "Session variables are set.<br>";
    echo "Favorite color is " . $_SESSION["favcolor"] . ".<br>";
    echo "Favorite animal is " . $_SESSION["favanimal"] . ".<br>";
    $_SESSION['info'] = array(
        "n" => $_POST['name'],
        "m" => $_POST['mail'],
        "a" => $_POST['add'],
    );
    print_r($_SESSION['info']);
    $filename='../Cookie_practice/cookie.php';
    if (file_exists($filename) == 1) {
        echo "<br>File has been created";
    } else {
        echo "<br>File not found!";
    }
    
    ?>
    <form action="" method="post" class="form">
        <table>
            <tr class="center">
                <td colspan="2">
                    Thông tin đăng nhập
                </td>
            </tr>
            <tr class="">
                <td>
                    Họ và tên:
                </td>
                <td>
                    <input type="text" name="name" id="name"
                        value="<?php if(isset($_POST['name']))  echo $_POST['name']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Email:
                </td>
                <td>
                    <input type="text" name="mail" id="mail"
                        value="<?php if(isset($_POST['mail']))  echo $_POST['mail']; ?>">
                </td>
            </tr>
            <tr>
                <td>
                    Địa chỉ:
                </td>
                <td>
                    <input type="text" name="add" id="add"
                        value="<?php if(isset($_POST['add']))  echo $_POST['add']; ?>">
                </td>
            </tr>
            <tr class="center">
                <td colspan="2">
                    <button type="submit">Xác nhận</button>
                </td>
            </tr>
        </table>
    </form>
    <a href="./index.php">Next</a>
</body>

</html>
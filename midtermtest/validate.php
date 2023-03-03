<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>


<body>
    <form action="" method="post">
        <?php  ?>
        <table>
            <tr>
                <td>
                    <input type="text" placeholder="Họ tên" name="name">
                </td>
            </tr>
            <tr>
                <?php 
                ?>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="Số điện thoại" name="phonenumber">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="Email" name="email">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="text" placeholder="Nội dung" name="content">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Gửi tin">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (empty($_POST["name"])) {
                echo "<span style='color:red;'>Họ tên bắt buộc phải nhập.</span></br>";
            } else {
                $name = $_POST["name"];
                if(!preg_match("/^[a-zA-Z_ÀÁÂÃÈÉÊÌÍÒÓÔÕÙÚĂĐĨŨƠàáâãèéêìíòóôõùúăđĩũơƯĂẠẢẤẦẨẪẬẮẰẲẴẶẸẺẼỀỀỂưăạảấầẩẫậắằẳẵặẹẻẽềềểỄỆỈỊỌỎỐỒỔỖỘỚỜỞỠỢỤỦỨỪễếệỉịọỏốồổỗộớờởỡợụủứừỬỮỰỲỴÝỶỸửữựỳỵỷỹ ]*$/",$name)) {
                    echo "<span style='color:red;'>Họ tên chỉ chấp nhận chữ và khoảng trắng.</span></br>";
                } else {
                    echo $name."</br>";
                    $name = $_POST["name"];
                }
            }
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                if (empty($_POST["phonenumber"])) {
                    echo "<span style='color:red;'>Số điện thoại bắt buộc phải nhập.</span></br>";
                } else {
                    $phonenumber = $_POST["phonenumber"];
                    if(preg_match('/^[0-9]{10}+$/', $phonenumber)) {
                        echo $phonenumber."</br>";
                        $phonenumber = $_POST["phonenumber"];
                    } else {
                        echo "<span style='color:red;'>Số điện thoại nhập chưa đúng.</span></br>";
                    }
                }
            }
            if (empty($_POST["email"])) {
            echo "<span style='color:red;'>Email bắt buộc phải nhập.</span></br>";
            } else {
                $email = $_POST["email"];
                if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                    echo "<span style='color:red;'>Email nhập chưa đúng.</span></br>";
                } else {
                    echo $email."</br>";
                    $email = $_POST["email"];
                }
            }
            if (empty($_POST["content"])) {
                echo "<span style='color:red;'>Nội dung bắt buộc phải nhập.</span></br>";
            } else {
                $content = $_POST["content"];
                echo $content."</br>"; 
            }
        }
    ?>
</body>

</html>
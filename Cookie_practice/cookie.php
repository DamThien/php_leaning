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
        $flag=0;
        if (!empty($_POST['name']) && !empty ($_POST['mail']) && !empty($_POST['add']))
        {
            $inform =$_POST['name']. " - ". $_POST['mail']." - " .$_POST['add'];
            setcookie("khach_hang",$inform, time() +3600);
            $flag=1;
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


    <div>
        <?php 
            if ($flag==1) {
                echo "<table><tr class='center'><td>";
                echo "<font color='#ffffff'>Thông tin khách hàng: </br>";
                echo $_COOKIE["khach_hang"]."<br>";
                echo "<a href='cookies_doc.php' >Click here! </a>";
                echo "</td></tr></table>";
            }
        ?>
    </div>
</body>

</html>
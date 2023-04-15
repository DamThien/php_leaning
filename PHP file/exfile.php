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
    
?>
    <form action="" method="post">
        <table>
            <tr>
                <td colspan="2">CREATE, READ AND WRITE FILE</td>
            </tr>
            <tr>
                <td>
                    <span>Tên file</span>
                </td>
                <td>
                    <input type="text " name="filename" id="ten_file" value="text.txt">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Tên hàng</span>
                </td>
                <td>
                    <input type="text " name="proname" id="" value="<?php echo $_POST["proname"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Số lượng</span>
                </td>
                <td>
                    <input type="text " name="quantity" id="" value="<?php echo $_POST["quantity"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <span>Đơn giá</span>
                </td>
                <td>
                    <input type="text " name="price" id="" value="<?php echo $_POST["price"]?>">
                </td>
            </tr>
            <tr>
                <td>
                    <input type="submit" name="" id="" value="Nhập">
                </td>
            </tr>
        </table>
    </form>
    <?php 
        if (isset($_POST["filename"])) {
            $tenfile = $_POST["filename"];
            $tenhang = $_POST["proname"];
            $soluong = $_POST["quantity"];
            $dongia = $_POST["price"];
            $file = fopen($tenfile,"a",1);
            $sanpham = $tenfile."\t".$tenhang."\t".$soluong."\t".$dongia;
            fwrite($file,$sanpham);
            fclose($file);
            echo '<p style="color: red; text-align: center">Tạo và ghi file thành công!</p>';
        }
    
    ?>

</body>

</html>
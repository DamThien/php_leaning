<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
</head>

<body>
    <?php 
    error_reporting(0);
        $list_product = array(
            "Men"=>array(
                "1" => array(
                    "Name"=>"The Cosmo (Đen) Quần short khaki",
                    "Code"=>"TC1025011BA",
                    "Price"=>"398,000 đ",
                    "ImageURL"=>"https://salt.tikicdn.com/cache/w1200/ts/product/6a/67/6f/45b6bb0e5a0fb7080b4af576ecfc800c.jpg",
                ),
                "2" => array(
                    "Name"=>"Quần short nam Bernice màu cobal QQK 102",
                    "Code"=>"TC1025011BB",
                    "Price"=>"498,000 đ",
                    "ImageURL"=>"https://cf.shopee.vn/file/c4bfffac9bb8c60f1772664b24c38a9d_tn",
                ),
                "3" => array(
                    "Name"=>"Quần kaki nam Bernice màu sữa",
                    "Code"=>"TC1025011BC",
                    "Price"=>"348,000 đ",
                    "ImageURL"=>"https://cf.shopee.vn/file/3a9a451e6ab315835af415b76565b2c9",
                ),
            ),
            "Women"=>array(
                "1" => array(
                    "Name"=>"Quần baggy đen sang trọng QQ",
                    "Code"=>"JUHA2349",
                    "Price"=>"495,000 đ",
                    "ImageURL"=>"https://blogger.googleusercontent.com/img/a/AVvXsEj-ZiA08T7dk-CCR4Tn-ZggEC1R8-mM6p-BQ37inrFGKm9yO-o3N8m2p7fsOioub82fzJCDvy3aaZAc5PVW-gqkc03Pzr9QaTOmGeCBLzfmrlV6TO668Mar1bOzri68G44N7dnChkFnw-pqHKF7MxS7Vx_5rZixFm9GDfMUhagI-A3MdFDejl3uHEhf=w640-h640",
                ),
                "2" => array(
                    "Name"=>"QUẦN SHORT NỮ BERMUDA BOW TIE",
                    "Code"=>"JUHA2349D",
                    "Price"=>"345,000 đ",
                    "ImageURL"=>"https://cdn2.boo.vn/media/catalog/product/1/_/1.2.09.1.06.004.121.23-10400011-bst-1.jpg",
                ),
                "3" => array(
                    "Name"=>"Áo Len Nữ 3 Cúc Áo len Đà Lạt",
                    "Code"=>"JUHA23492",
                    "Price"=>"405,000 đ",
                    "ImageURL"=>"https://image.voso.vn/users/vosoimage/images/88a66cef190a6cd3747ca05bc8a0634c?t%5B0%5D=compress%3Alevel%3D100&accessToken=6e673c4790158e94c48eedcc0f16aa38f591d709fc4c9e4312e1eafc05e80b7b",
                ),
            )
        );
        function buy()
        {   
            echo "alert('Cảm ơn bạn đã mua hàng!')";
        }
    ?>
    <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = $_POST['namep'];
            $code = $_POST['codep'];
            $price = $_POST['pricep']." đ";
            $URL = $_POST['link'];
        }
        if ($_POST["chose"]== "F") {
            $list_product["Men"][] = array(
                "Name"=>$name,
                "Code"=>$code,
                "Price"=>$price,
                "ImageURL"=>$URL
            );
        } elseif ($_POST["chose"]== "M") {
            $list_product["Women"][] = array(
                "Name"=>$name,
                "Code"=>$code,
                "Price"=>$price,
                "ImageURL"=>$URL
        );
    }
    ?>
    <div class="container">
        <form action="" method="post">
            <table>
                <tr>
                    <select name="chose" id="">
                        <option value="F">Nam</option>
                        <option value="M">Nữ</option>
                    </select>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Tên sản phẩm" name="namep"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Mã sản phẩm" name="codep"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="Giá sản phẩm" name="pricep"></td>
                </tr>
                <tr>
                    <td><input type="text" placeholder="URL hình ảnh" name="link"></td>
                </tr>
                <tr>
                    <td><input type="submit" value="Thêm"></td>
                </tr>
            </table>
        </form>

        <div class="protable">
            <?php foreach ($list_product as $gender => $id) {?>
            <div>
                <h3><?php echo $gender;?> </h3>
                <div class="genderlist"><?php 
                    foreach ($id as $idpro => $value) {?>
                    <div class='prodcart'>
                        <div class="imge"><img src="<?php echo $value['ImageURL']?>" alt=""></div>
                        <div><?php echo $value['Name']?></div>
                        <div><?php echo $value['Code']?></div>
                        <div><?php echo $value['Price']?></div>
                        <div><input type="submit" value="Đặt mua" onclick="<?php buy();?>">
                        </div>
                    </div>
                    <?php }?>
                </div>
                <?php }?>
            </div>
        </div>
    </div>

</body>

</html>
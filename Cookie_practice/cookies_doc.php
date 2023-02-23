<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="title">

        Kết quả sau khi nhấn <a> click here! </a> của trang session.
    </div>

    <?php 
        echo '<div class="ket_qua">Xin chào '. $_COOKIE["khach_hang"].'<br>';
        echo '<a href="cookie.php"> Click để quay về trang đăng nhập </a>';
        echo '</div>';
        echo '<img class="content-img1" src="https://img.meta.com.vn/Data/image/2020/12/07/ong-gia-noel-cuoi-may-con-tuan-loc-al.jpg">';
        echo '<img class="content-img2" src="https://cdn.tgdd.vn/Files/2022/11/05/1484413/ong-gia-noel-cuoi-may-con-tuan-loc-ten-cua-chung-la-gi-202211050908100309.jpg">';
    ?>
</body>

</html>
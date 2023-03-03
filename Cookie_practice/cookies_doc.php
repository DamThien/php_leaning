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
        echo '<img class="content-img1" src="https://www.science.org/do/10.1126/science.abi5787/abs/main_puppies_1280p.jpg">';
        echo '<img class="content-img2" src="https://www.science.org/do/10.1126/science.aba2340/abs/dogs_1280p_0.jpg">';
    ?>
</body>

</html>
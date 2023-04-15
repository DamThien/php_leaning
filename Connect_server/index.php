<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div class="title-product-main">
        <h3 class="section-title">Thời Trang Nữ</h3>
    </div>
    <div class="content-product-main">
        <div class="row">
            <?php
            include("connectserver.php");
            $sql = "SELECT id,image,name,price FROM products WHERE category_id=2 LIMIT 8";
            $result = mysqli_query($conn, $sql);
            while ($kq = mysqli_fetch_assoc($result)) {
            ?>
                <div class="col-md-3 col-sm-6 text-center">
                    <div class="thumbnail">
                        <div class="hoverimage1">
                            <img src="<?php echo $kq['image']; ?>" alt="Generic placeholder thumbnail" width="100%" height="300">
                        </div>
                        <div class="name-product">
                            <?php echo $kq['name']; ?>
                        </div>
                        <div class="price">
                            Giá: <?php echo $kq['price']; ?><sup> đ</sup>
                        </div>
                        <div class="product-info">
                            <a href="addcart.php?id=<?php echo $kq['id']; ?>">
                                <button type="button" class="btn btn-primary">
                                    <label style="color: red;">&hearts;</label> Mua hàng <label style="color: red;">&hearts;</label>
                                </button>
                            </a>
                            <a href="detail.php?id=<?php echo $kq['id'] ?>">
                                <button type="button" class="btn btn-primary">
                                    <label style="color: red;">&hearts;</label> Chi Tiết <label style="color: red;">&hearts;</label>
                                </button>
                            </a>
                        </div><!-- /product-info -->
                    </div><!-- /thumbnail -->
                </div><!-- /col -->
            <?php } ?>
        </div><!-- /row -->
    </div><!-- /Thời Trang Nữ -->
</body>

</html>
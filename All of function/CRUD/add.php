<?php
$target_file = "../" . basename($_FILES["FileImage"]["name"]);
$uploadOk = 1;

if (isset($_POST['addProduct'])){
    $keywordPr = '';
    $descriptPr = '';
    $status = 0;

    $image = basename($_FILES["FileImage"]["name"]);
    if ($image == null || $image = '')
        {
        $image = $_POST['image'];
        $uploadOk = 0;
        } else {
        $check = getimagesize($_FILES["FileImage"]["tmp_name"]);
            if ($check !== false)
            {
            $image = basename($_FILES["FileImage"]["name"]);
            $uploadOk = 1;
            } else {
            $image = '';
            ?>
            <script type="text/javascript">
            window.location = 'product-add.php?notimage=notimage';
            </script>
            <?php
            $uploadOk = 0;
            }
        }


    //Upload image
    if (file_exists($target_file)) {
        $uploadOk = 0;
    }

    if ($uploadOk == 0)
    {
    } else {
    if (move_uploaded_file($_FILES["FileImage"]["tmp_name"], $target_file)) {
    echo "The file " . basename($_FILES["FileImage"]["name"]) . " has been uploaded.";
    } else {
    }
}
}
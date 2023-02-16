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
        $ages = array("Peter"=>22,"Clark"=>30,"John"=>32);
        $sph = array("Ngô","Khoai","Sắn","Đậu");
        foreach ($ages as $key => $value) {
            echo "Hello ".$key." ". $value ." years old <br>";
        }
        for ($i=0; $i <= count($ages); $i++) { 
            echo $sph[$i]." ";
        }
        
        $std_manage = array(
            "Student"=>array(
                "sv1"=>array(
                    "Tên"=>"Nguyễn Văn A",
                    "Quê quán"=>"Quảng Bình",
                ),
                "sv2"=>array(
                    "Tên"=>"Nguyễn Văn B",
                    "Quê quán"=>"Quảng Trị",
                ),
                "sv3"=>array(
                    "Tên"=>"Nguyễn Văn C",
                    "Quê quán"=>"Quảng Nam",
                ),
            ),
            "Teacher"=>array(
                "gv1"=>array(
                    "Tên"=>"Nguyễn Thị A",
                    "Quê quán"=>"Đà Nẵng",
                ),
                "gv2"=>array(
                    "Tên"=>"Nguyễn THị B",
                    "Quê quán"=>"Kom Tum",
                ),
                "gv3"=>array(
                    "Tên"=>"Nguyễn Thị C",
                    "Quê quán"=>"Bình Định",
                ),
            )
        );

        echo "<br>";
        foreach ($std_manage as $key => $ArrValue) {
            echo "<br>Vai trò ".$key;
            foreach ($ArrValue as $ArKey => $value) {
                echo "<br>Mã: " .$ArKey;
                foreach ($value as $valueKey => $value2) {
                    echo "<br>" .$valueKey. ": " . $value2;
                }
            }
            echo "<br>";
        }
        
    ?>

</body>

</html>
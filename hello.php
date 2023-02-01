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
    echo "hello";
    $dai=30;
    $rong = 50;
    $cv=($dai+$rong)*2;
    echo "<h1 style='bold:30px; color:#187'>$cv</h1>";
    
    $mong = "mong1";
    if ($mong == "mong1") {
        echo "<h3>Đi học</h3>";
    } else if ($mong == "mong2") {
        echo "<h3>Đi học</h3>";
    }

    $favcolor = "red";
    switch ($favcolor) {
    case "red":
        echo "Your favorite color is red!";
        break;
    case "blue":
        echo "Your favorite color is blue!";
        break;
    case "green":
        echo "Your favorite color is green!";
        break;
    default:
        echo "Your favorite color is neither red, blue, nor green!";
    }
    ?>
    
    <h1>@@</h1>

    
    <form action="welcome.php" method="post">
        <table>
            <thead>
                <h2>Tính diện tích chữ nhật</h2>
            </thead>
            <tbody>
            <td> Name: <input type="text" name="name"><br></td>
            <td>E-mail: <input type="text" name="email"><br></td>
            </tbody>
        </table>
    <input type="submit">
    </form>
      
</body>

</html>
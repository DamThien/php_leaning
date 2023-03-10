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
    error_reporting(0);
    function add_number($a, $b)
    {
        echo $a + $b;
    }
    function display_name($name)
    {
        echo "Hello " . $name;
    }
    function kilometers_to_miles($k = 0)
    {
        $miles_scale = 0.62;
        return $k * $miles_scale;
    }
    display_name("Thiên");
    echo kilometers_to_miles(400) . "</br>";
    ?>
    <form action="" method="post">
        <table>
            <tr>
                <td>Number 1</td>
                <td><input type="number" name="number1" id="" value="<?php echo !empty($_POST["number1"]) ?: 1; ?>">
                </td>
            </tr>
            <tr>
                <td>Number 2</td>
                <td><input type="number" name="number2" id="" value="<?php echo !empty($_POST["number2"]) ?: 1; ?>">
                </td>
            </tr>
            <tr>
                <td>Total</td>
                <td><input type="text" value="<?php add_number($x = $_POST["number1"], $y = $_POST["number2"]) ?>">
                </td>
            </tr>
            <tr>
                <div><input type="submit" value="Tính"></div>
            </tr>
        </table>
    </form>
    <form action="" method="post">
        <table>
            <tr>
                <td>Name</td>
                <td><input type="text" name="ur_name" id="" value="<?php echo $ur_name = $_POST["ur_name"]; ?>">
                </td>
            </tr>
            <tr>
                <td colspan="2"><input type="text" value="<?php display_name($ur_name) ?>">
                </td>
            </tr>

            <tr>
                <div><input type="submit" value="Nhập"></div>
            </tr>
        </table>
    </form>
    <form action="" method="post">
        <table>
            <tr>
                <td>Kilometers</td>
                <td><input type="number" name="km" id="" value="<?php echo $km = $_POST["km"]; ?>">
                </td>
            </tr>
            <tr>
                <td>Scales</td>
                <td><input type="text" value="<?php echo kilometers_to_miles($km) ?>">
                </td>
            </tr>
            <tr>
                <div><input type="submit" value="Nhập"></div>
            </tr>
        </table>
    </form>
</body>

</html>
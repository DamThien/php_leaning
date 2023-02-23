<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>sakdjn</title>
</head>

<body>
    <table>
        <?php 
        $data = json_decode(file_get_contents("https://61bc10bdd8542f0017824522.mockapi.io/List_students"), true);
        foreach ($data as $key => $value) {
            ?>
        <tr>
            <?php foreach ($value as $title => $mainvalue) {?>
            <td><?php echo $mainvalue?></td>
            <?php }?>
        </tr>
        <?php }
    ?>
    </table>
</body>

</html>
<!DOCTYPE html>
<html>
<body>
    <?php
        error_reporting(0);
        $width = $_POST["width"];
        $height = $_POST["height"];
        $area= $width * $height;  
        // if ($area > 200) {
        //     $messenger = "Nên xây villa";
        // }elseif ($area > 150){
        //     $messenger = "Nên xây biệt thự";
        // }elseif ($area > 50){
        //     $messenger = "Nên xây nhà cấp 4";
        // }elseif ($area == 0){
        //     $messenger = "Không có đất xay nhà";
        // }else{
        //     $messenger = "Nên xây nhà cấp 3";
        // }
        switch ($area) {
            case $area > 200:
                $messenger = "Nên xây villa";
                break;
            case $area > 150:
                $messenger = "Nên xây biệt thự";
                break;
            case $area > 50:
                $messenger = "Nên xây nhà cấp 4";
                break;
            case $area > 0:
                $messenger = "Không có đất xay nhà";
                break;       
        }
    for ($a=0;$a<=10;$a++){
        echo "a</br>";
    };
    $x=0;
    while ($x<10){
        echo "a</br>";
        $x++;
    };
   ?>
   <form id="form" name="form" method="post" action="hw1.php">
        <table width="400"  border="0" align="center" cellpadding ="2" cellspacing="2">
            <tr>
                <td colspan="2" align="center"><span class ="style1">Diện tích hình nhật</span></td>
            </tr>
            <tr>
                <td width="125"><span class ="style4">Chiều dài</span></td>
                <td width="261"><label>
                    <input name="width" type="text" id ="width" value ="<?php echo !empty($width) ? $width : '0'; ?>" size="20">
                </label></td>
            </tr>
            <tr>
                <td width="125"><span class ="style4">Chiều rộng</span></td>
                <td width="261"><label>
                    <input name="height" type="text" id ="height" value ="<?php echo !empty($height) ? $height : '0'; ?>" size="20">
                </label></td>
            </tr>
            <tr>
            <td><span class="style4">Diện tích</span></td>
                <td><input name="area" type="text" id="area" value="<?php echo $area;?>" size="20">
            </tr>
            <tr><td></td>
            <td><input name="" type="text" id="Mes" value="<?php echo $messenger?>" size="20">  
            </tr>
        <script>
            document.getElementById("Mes").innerHTML=<?php $messenger?>;
        </script>
        </table>
        <input type="submit" name="Submit" value="Tính">
   </form>
</body>
</html>
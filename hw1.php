<!DOCTYPE html>
<html>
<body>
    <?php
        error_reporting(0);
        $width = $_POST["width"];
        $height = $_POST["height"];
        $area= $width * $height;  
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
            <td><span class="style4">S</span></td>
                <td><input name="area" type="text" id="area" value="<?php echo $area;?>" size="20">
            </tr>
            <tr>    
            </tr>
        </table>
        <input type="submit" name="Submit" value="Tính">
   </form>

</body>
</html>
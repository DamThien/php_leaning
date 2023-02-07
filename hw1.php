<!DOCTYPE html>
<html>
<body>
    <?php
        $dai = $_POST["dai"];
        $rong = $_POST["rong"];
        $dt= $dai * $rong;
   ?>
   <form id="form" name="form" method="post" action="hw1.php">
        <table width="400"  border="0" align="center" cellpadding ="2" cellspacing="2">
            <tr>
                <td colspan="2" align="center"><span class ="style1">Diện tích hình nhật</span></td>
            </tr>
            <tr>
                <td width="125"><span class ="style4">Chiều dài</span></td>
                <td width="261"><label>
                    <input name="dai" type="text" id ="dai" value ="<?php echo !empty($dai) ? $dai : '0'; ?>" size="20">
                </label></td>
            </tr>
            <tr>
                <td width="125"><span class ="style4">Chiều rộng</span></td>
                <td width="261"><label>
                    <input name="rong" type="text" id ="rong" value ="<?php echo !empty($rong) ? $rong : '0'; ?>" size="20">
                </label></td>
            </tr>
            <tr>
            <td><span class="style4">S</span></td>
                <td><input name="dt" type="text" id="dt" value="<?php echo $dt;?>" size="20">
            </tr>
            <tr>    
            </tr>
        </table>
        <input type="submit" name="Submit" value="Tính">
   </form>

</body>
</html>
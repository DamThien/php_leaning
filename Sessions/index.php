<?php 
    session_start();
    
?>
<p><?php echo $_SESSION['info']["n"]?></p>
<p><?php echo $_SESSION['info']["m"]?></p>
<p><?php echo $_SESSION['info']["a"]?></p>
<a href="./session.php">Back</a>
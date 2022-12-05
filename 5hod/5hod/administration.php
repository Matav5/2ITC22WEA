<?php
    $username = $_SESSION["username"];
?>
<div>
    <h3>Dobrý den uživateli <?php echo $username ?></h3>

    <form action="server.php" method="pOsT">
        <input type="submit" name="logout" value="Logout">
    </form>
</div>
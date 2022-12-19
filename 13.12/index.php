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
        include 'connection.php';
        $selectSQL = "SELECT * FROM section ORDER BY section_order";
        $results = $connect->query($selectSQL);
        while($row = $results->fetch_object()){
            echo $row->html;
        }
    ?>
    <hr>
    <form action="server.php" method="POST">
        <label for="html">HTML: </label>
    <textarea name="html"></textarea><br>
        <label for="order">Pořadí: </label>
    <input type="number" name="order">
    <input type="submit" name="htmlAdd" value="Odeslat">
</form>
</body>
</html>
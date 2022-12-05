<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Žebříček</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <table>
        <tr>
            <th>Pořadí</th>
            <th>Přezdívka</th>
            <th>Skóre</th>
            <th>Datum</th>
        </tr>
    <?php
        include 'connection.php';
        $selectSQL = "SELECT * FROM leaderboard ORDER BY score DESC";
        $result = $connect->query($selectSQL);
        $pozice = 1;
        while($row = $result->fetch_object()){
            echo "
            <tr>
            <td> {$pozice}. </td>
            <td> {$row->username} </td>
            <td>{$row->score} </td>
            <td>{$row->datum_vysledku}</td>
            </tr>
            ";
            $pozice++;
        }
      
    ?>
    </table>
</body>
</html>
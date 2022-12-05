<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="post">
        <input type="number" name="min">
        <input type="number" name="max">
        <input type="submit" value="Pošli">
    </form>
    <?php
    $connect = new mysqli("localhost","root","","2itcwea");

    if($connect->connect_errno){
        echo "There was a connection error: ".$connect->connect_error;
        die();
    }
    
    $result = $connect->query("SELECT number FROM nahodne_cisla");
    $row = $result->fetch_object();
        if($row){
            $sum = $row->number;
            $min = $row->number;
            $max = $row->number;
            $count = 1;
                while($row = $result->fetch_object()){
                    $sum += $row->number;
                    if($min > $row->number)
                        $min = $row->number;
                    if($max < $row->number)
                        $max = $row->number;
                    $count++;
                }
            $avg =(double) $sum / (double)$count;
            echo "<p>Průměr:".$avg."</p>";
            echo "<p>Minimální číslo:".$min."</p>";
            echo "<p>Maximální číslo:".$max."</p>";
        }
?>
</body>
</html>
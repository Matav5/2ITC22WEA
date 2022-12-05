<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="server.php" method="POST" id="form">
        <input type="hidden" name="score" id="score">
        <input type="hidden" name="username" id="username">
    </form>
</body>
    <script>
        let timeout = setTimeout(lose,2000);
        let score = -1;
        let square = document.createElement("div");
        square.style.backgroundColor = "red";
        square.style.width = "50px";
        square.style.height = "50px";
        square.style.position = "absolute";
        square.onclick = move;
        document.body.append(square);

        move();

        function move(){
            square.style.top = Math.random() * window.innerHeight - 25 + "px";
            square.style.left = Math.random() * window.innerWidth - 25 + "px";
            score++;
            clearTimeout(timeout);
            timeout = setTimeout(lose,2000);
            console.log(score);
        }
        function lose(){
            let username = prompt("You lost! Your score was: " + score + "\n What is your username?");
            console.log("prohrál jsi");
            document.getElementById("score").value = score;
            document.getElementById("username").value = username;
            document.getElementById("form").submit();
            //Odeslat na server jméno a skóre
        }
    </script>
</html>
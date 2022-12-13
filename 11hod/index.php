<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editor Textu a uložení do souboru</title>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.3.2/classic/ckeditor.js"></script>
</head>
<body>
    <form action="server.php" method="post">
    <textarea name="text" id="editor">

    <?php
        if(file_exists("ulozenyText.txt")){
            $file = fopen("ulozenyText.txt","r");
            echo fread($file, filesize("ulozenyText.txt"));
            fclose($file);
        }
        
    ?>

    </textarea>
    <input type="submit" value="Uložit do Souboru">
    </form>
</body>
<script>
    ClassicEditor
        .create( document.querySelector( '#editor' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
</html>
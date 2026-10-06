<!DOCTYPE html>
<?php
    if (isset($_POST["btn"])){
        $txt=@_POST["txt"];
        $hide=$_POST["hide"]." ".$txt;
    }

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="index.php" method="post">
        <label for="txt">skriv en mening</label>
        <textarea name="txt" id="txt"></textarea>
        <input type="hidden" name="hide" id="hide" value="<?=$hide?>">
        <input type="submit" name="btn" value="skicka">
    </form>
    <h1>berättelse</h1>
    <p><?=$hide?></p>-
</body>
</html>
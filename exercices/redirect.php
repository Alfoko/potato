<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
    <body>
        <?php
            if ($_GET["z"]=="+") {
                echo $_GET["x"].$_GET["z"].$_GET["y"]."=".$_GET["x"]+$_GET["y"];
            }
            else if ($_GET["z"]=="*") {
                echo $_GET["x"].$_GET["z"].$_GET["y"]."=".$_GET["x"]*$_GET["y"];
            }
            else if ($_GET["z"]=="-") {
                echo $_GET["x"].$_GET["z"].$_GET["y"]."=".$_GET["x"]-$_GET["y"];
            }
            else if ($_GET["z"]=="/") {
                echo $_GET["x"].$_GET["z"].$_GET["y"]."=".$_GET["x"]/$_GET["y"];
            }
        ?>
    </body>
</html>
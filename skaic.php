<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>skaiciuotuvas</title>
    <style>
        body {background-color: rgb( <?php
        if(isset($_GET["patvirtinti"]))
        {
            $red = $_GET["red"];
            echo $red.", ";
            $green = $_GET["green"];
            echo $green.", ";
            $blue = $_GET["blue"];
            echo $blue;
        }
        ?>);   }
    </style>
</head>

<body>
    <form method="GET" action="skaic.php">
        <input id="red" name="red" placeholder="red" value="<?php echo isset($_GET["red"]) ? $_GET["red"] : "0"; ?>" />
        <input id="green" name="green" placeholder="green" value="<?php echo isset($_GET["green"]) ? $_GET["green"] : "0"; ?>" />
        <input id="blue" name="blue" placeholder="blue" value="<?php echo isset($_GET["blue"]) ? $_GET["blue"] : "0"; ?>" />
        <button name="patvirtinti" type="submit">pakeisti spalva</button>
    </form>
</body>

</html>
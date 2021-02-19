<!DOCTYPE html>
<html lang="ru">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
</head>

<body>
    <table style="width: 100%" border="1px solid">
        <tbody>
            <?php
            $i = 1;
            $x = 1;
            while ($i <= 10) {
                echo "<tr>";
                while ($x <= 10) {
                    echo "<td>";
                    echo $i." x ".$x." = ".$i*$x;
                    echo "</td>";
                    $x++;
                }
                echo "</tr>";
                $x = 1;
                $i++;
            }
            ?>
        </tbody>
    </table>
</body>

</html>

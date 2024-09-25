<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Membuat Tabel</title>
    <style>
        .warna{
            background-color: silver;
        }
    </style>
</head>
<body>
    <table border="1" cellpadding="10" cellspacing= "0">
        <!--opsi pertama -->
        <?php 
        /*
            for($i = 0; $i < 5; $i++){
                echo "<tr>";
                for($j = 0; $j < 5; $j++){
                    echo "<td>" . ($i + 1) . "," . ($j + 1) . "</td>";
                }
                echo "</tr>";
            }
        */
        ?>
        <!--opsi kedua -->
        <?php for($i = 0; $i < 5 ;$i++){?>
            <?php if((($i + 1) % 2) === 0){?>
                <tr class="warna">
            <?php } else{?>
                <tr>
            <?php }?>
                <?php for($j = 0; $j < 5; $j++){?>
                    <td>
                        <?php echo ($i+1) . "," . ($j+1);?>
                    </td>
                <?php }?>
            </tr>
        <?php }?>
    </table>
</body>
</html>
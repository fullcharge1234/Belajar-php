<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba PHP pengulangan</title>
</head>
<body>
    <?php function tabel($row, $colom) { ?>
        <?php for($i=1; $i<=$row; $i++) { ?>
            <tr>
                <?php for($j=1; $j<=$colom; $j++) { ?>
                <td>
                    <span>apakabar</span>
                </td>
                <?php } ?>
            </tr>
        <?php } ?>
    <?php } ?>

    <table border="1" cellspacing="0" cellpadding="20">
    <?php 
        tabel(9,3);
    ?>
    </table>
  
<script src="javascript.js"></script>
   
</body>
</html>

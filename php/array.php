<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba array</title>
    <style>
        .kotak{
            width : 50px;
            height : 50px;
            background-color : green;
            line-height: 50px;
            margin: 3px;
            text-align: center;
            transition: 1s;
            float: left;
        }

        .kotak:hover{
            transform: rotate(360deg);
            border-radius:50%;
        }

        .clear {
            clear:both;
        }
    </style>
</head>
<body>

        <?php 
             $angka=[[1,2,3],[4,5,6]];
        ?>
        <?php foreach ($angka as $ang) :?>
            <?php foreach ($ang as $asos) :?>
            <div class="kotak"><?php echo $asos;?></div>
            <?php endforeach;?>
            <div class="clear"></div>
        <?php endforeach; ?>
 
        
</body>
</html>
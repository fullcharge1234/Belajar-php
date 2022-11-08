<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>coba bikin deret fibonacci</title>
</head>
<body>
    <?php 
        $pjgbil = 10;
        $bil1=0;
        $bil2=1;
        $bilberikutnya;
    
        for($i=0;$i<$pjgbil;$i++){
            if ($i==0) {
                echo $bil1.",";
            }
            else if($i==1){
                echo $bil2.",";
            }else { 
                $bilberikutnya = $bil1+$bil2;
                $bil1=$bil2;
                $bil2=$bilberikutnya;
                echo $bilberikutnya.",";
            }
        }?>

   
</body>
</html>
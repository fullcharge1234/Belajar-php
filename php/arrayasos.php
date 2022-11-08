<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $mahasiswa=[
        [
            "nama" => "aldi nugroho",
            "bulan" => "april",
            "tahun" => 2004,
            "hobi" => ['tidur','makan','renang']
        ],
        [
            "nama" => "Dwi aryana",
            "bulan" => "maret",
            "tahun" => 2005,
            "hobi" => ['bulutangkis','game','coding']
        ]];
    ?>
    <?php foreach ($mahasiswa as $mhs):?>
        <ul>
            <li>nama : <?php echo $mhs["nama"]?></li>
            <li>bulan : <?php echo $mhs["bulan"]?></li>
            <li>tahun : <?php echo $mhs["tahun"]?></li>
            <li>hobi : <?php echo $mhs["hobi"][1]?></li>
        </ul>
    <?php endforeach;?>
</body>
</html>
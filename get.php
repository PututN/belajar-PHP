<!-- <?php
        $nama = $_GET['nama'];
        $alamat = $_GET['alamat'];
        ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="index.php">
        <input type="text" name="nama">
        <input type="text" name="alamat">
        <input type="submit">
    </form>
    <h1>Hai nama Saya <?php echo $nama ?></h1>
    <h4>Saya tinggal di <?php echo $alamat ?></h4>
</body>

</html> -->

<html>

<body>
    <form action="proses.php" method="get">
        Nama: <input type="text" name="nama">
        Alamat: <input type="text" name="alamat"><br><br>
        <input type="submit" value="submit">
    </form>
</body>

</html>
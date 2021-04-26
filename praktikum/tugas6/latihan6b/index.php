<!-- 
Nama : Yoga Bagja Ramadhan
NRP : 203040112
Shift Praktikum : Kamis pukul 08:00
-->

<?php
    require 'php/functions.php';
    $mahasiswa = query("SELECT * FROM mahasiswa")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan 6B</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
    <button class="btn btn-info" style="background-color: #0061a8;"><a href="php/login.php" style="text-decoration: none; color: white;">Masuk ke halaman admin</a></button>
    <table class="table bordered striped" border="1" cellpadding="13" cellspacing="0" style="background-color: #8ab6d6;">
        <tr>
          <th>No</th>
          <th>Foto</th>
          <th>NRP</th>
          <th>Nama</th>
          <th>Email</th>
          <th>Jurusan</th>
          <th>#</th>
        </tr>
		<?php $i = 1; ?>
		<?php foreach ($mahasiswa as $mhs) : ?>
         <tr>
             <td><?=$i; ?></td>
             <td><img src="assets/img/<?=$mhs["img"]; ?>"></td>
             <td><?=$mhs["nrp"]; ?></td>
             <td><?=$mhs["nama"]; ?></td>
             <td><?=$mhs["email"]; ?></td>
             <td><?=$mhs["jurusan"]; ?></td>
             <td>
                <a href="php/detail.php?id=<?=$mhs['id'] ?>" style="text-decoration: none; color: white;">Lihat</a>
            </td>
         </tr>
         <?php $i++;?>
        <?php endforeach; ?>
    </table>
</body>
</html>
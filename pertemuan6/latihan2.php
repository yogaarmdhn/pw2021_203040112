<?php
// $mahasiswa = [
//     ["Yoga Bagja Ramadhan", "203040112", "yogaarmdhn@gmail.com", "Teknik Informatika"],
//     ["Hervin Fakhrul", "203040097", "hervinfakhrulm@gmail.com", "Teknik Informatika"],
//     ["Agam Ramdhan", "203040098", "agamrka@gmail.com", "Teknik Informatika"]
// ];

// Array Associative
// definisinya sama seperti array numerik, kecuali
// key-nya adalah string yang kita buat sendiri
$mahasiswa = [
    [
        "nama" => "Yoga Bagja Ramadhan",
        "nrp" => "203040112",
        "email" => "yogaarmdhn@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "agoy.png"
    ],
    [
        "nama" => "Hervin Fakhrul",
        "nrp" => "203040097",
        "email" => "hervinfakhrulm@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "hervin.png"
    ],
    [
        "nama" => "Agam Ramdhan",
        "nrp" => "203040098",
        "email" => "agamrka@gmail.com",
        "jurusan" => "Teknik Informatika",
        "gambar" => "agam.png"
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>

    <?php foreach( $mahasiswa as $mhs ) : ?>
    <ul>
        <li><img src="img/<?= $mhs["gambar"]; ?>"></li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["nrp"]; ?></li>
        <li>Email : <?= $mhs["email"]; ?></li>
        <li>Jurusan : <?= $mhs["jurusan"]; ?></li>
    </ul>
    <?php endforeach; ?>

</body>
</html>
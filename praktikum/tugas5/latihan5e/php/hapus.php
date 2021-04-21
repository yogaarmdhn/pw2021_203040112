<!-- 
Nama : Yoga Bagja Ramadhan
NRP : 203040112
Shift Praktikum : Kamis pukul 08:00
-->

<?php

require 'functions.php';
$id = $_GET['id'];

if (hapus($id) > 0) {
    echo "<script>
            alert('Data Berhasil dihapus!');
            document.location.href = '../index.php';
            </script>";
} else {
    echo "<script>
            alert('Data Gagal dihapus!');
            document.location.href = '../index.php';
            </script>";
}
?>
<!-- 
Nama : Yoga Bagja Ramadhan
NRP : 203040112
Shift Praktikum : Kamis pukul 08:00
-->

<?php 
$barang = [
    [
        "nama"=>"AGV Pista GP-RR Limited Edition Speciale",
        "detailBarang"=>"Material : 100% Carbon Fiber
        <br>Visor : Red Visor
        <br>Chinstrap : DD Ring",
        "sizeChart"=>"M : 57-58 cm
        <br>ML : 59 cm
        <br>L : 60 cm
        <br>XL : 61-62 cm
        <br>XXL : 63-64 cm",
        "harga"=>38000000,
        "stokBarang"=>4,
        "foto"=>"pistagprr.png"
    ],
   
];

function rupiahIDR($duit){
    return "Rp" . number_format($duit,2,',','.');
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agoy Motoshop</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.9.1/css/bulma.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/dataTables.bulma.min.css">
    <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/1.10.24/js/dataTables.bulma.min.js"></script>

</head>

<body>
    <div class="container mt-5 mb-5">
        <table id="cari" class="table is-bordered is-fullwidth is-hoverable">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Barang</th>
                    <th>Detail Barang</th>
                    <th>Size Chart</th>
                    <th>Harga</th>
                    <th>Stok Barang</th>
                    <th>Foto</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach($barang as $dagang => $barang) : ?>
                <tr>
                    <td><?= $dagang+1; ?></td>
                    <td><?= $barang["nama"]; ?></td>
                    <td><?= $barang["detailBarang"]; ?></td>
                    <td><?= $barang["sizeChart"]; ?></td>
                    <td><?= rupiahIDR($barang["harga"]) ?></td>
                    <td><?= $barang["stokBarang"]; ?></td>
                    <td>
                        <figure class="image is-128x128">
                            <img src="img/<?= $barang["foto"]; ?>" alt="">
                        </figure>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    

    <script type="text/javascript">
    $(document).ready(function() {
        $('#cari').DataTable();
    });
    </script>
</body>

</html>

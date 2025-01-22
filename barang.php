<?php
require "koneksi.php";

$sql = "SELECT * FROM barang";
// $rows = $koneksi->execute_query($sql)->fetch_all(MYSQLI_ASSOC);
$rows = mysqli_query($koneksi, $sql);

var_dump($rows);
$barang=[
    [
        "nama" => "laptop",
        "stok" => "6",
        "status" => "baik"
    ],

    [
        "nama" => "PC",
        "stok" => "2",
        "status" => "baik"
    ],

    [
        "nama" => "Printer",
        "stok" => "1",
        "status" => "rusak"
    ],
];

foreach($barang as $item) {
    echo $item['nama'] . " ";
    echo $item['stok'] . " ";
    echo $item['status'] . "<br>";
}
// $barang = [...
// ];
?>

!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="style.css"></link>
</head>
<body>
<a href="barang-tambah.php"></a>
<table>
    <thead>
        <tr>
            <th>No. </th>
            <th>Nama Barang</th>
            <th>Stok</th>
            <th>Status</th>
        </tr>
    </thead>
    <tbody></tbody>
        <?php
        $no = 1;
        foreach ($barang as $item) {
        }
        ?>

        //isi tiap baris dari tabel
        <tr>
            <td><?= $no; ?></td>
            <td><?= $item["nama"]; ?></td>
            <td><?= $item["stok"]; ?></td>
            <td><?= $item["status"]; ?></td>
        </tr>

        <?php
        $no += 1;
        ?>
    </tbody>
</table>
</body>
</html>
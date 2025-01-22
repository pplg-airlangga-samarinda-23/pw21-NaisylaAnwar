<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$barang=[
    [
        "nama" => "Laptop",
        "stok" => "6",
        "status" => "Baik"
    ],
    [
        "nama" => "PC",
        "stok" => "38",
        "status" => "Baik"
    ],
    [
        "nama" => "Printer",
        "stok" => "1",
        "status" => "Rusak"
    ],
];

foreach ($barang as $item) {
    echo $item['nama'] . " ";
    echo $item['stok'] . " ";
    echo $item['status'] . "<br>";
}
?>
</body>
</html>
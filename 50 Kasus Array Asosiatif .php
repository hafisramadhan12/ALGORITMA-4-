<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel Berwarna di PHP</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
            font-size: 18px;
            text-align: left;
        }
        th, td {
            padding: 12px;
            border: 1px solid #ddd;
        }
        th {
            background-color: #4CAF50;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #ddd;
        }
    </style>
</head>
<body>


<?php
// Contoh array asosiatif untuk menyimpan data produk
$customer = [
    [
        "No" => 1,
        "name" => "arjun",
        "Alamat" => "kebun tenngah",
        "No. Telp" => "082345467879",
        "Pekerjaan" => "PNS",
        "Gaji" => "5.000.000",

    ],
   
    [
        "No" => 2,
        "name" => "riyan",
        "Alamat" => "sekrak",
        "No. Telp" => "082245349098",
        "Pekerjaan" => "Asistent manager",
        "Gaji" => "7.000.000",

    ],

    [
        "No" => 3,
        "name" => "hafis",
        "Alamat" => "Kp dalam",
        "No. Telp" => "082311678076",
        "Pekerjaan" => "Wirasswasta",
        "Gaji" => "15.000.000",

    ],

];

// Menampilkan data produk dalam bentuk tabel HTML
echo "<table border='1'>";
echo "<tr><th>No</th><th>Nama</th><th>Alamat</th><th>No. Telp</th><th>pekerjaan</th><th>Gaji</th></tr>";

foreach ($customer as $customer) {
    echo "<tr>";
    echo "<td>" . $customer['No'] . "</td>";
    echo "<td>" . $customer['name'] . "</td>";
    echo "<td>" . $customer['Alamat'] . "</td>";
    echo "<td>" . $customer['No. Telp'] . "</td>";
    echo "<td>" . $customer['Pekerjaan'] . "</td>";
    echo "<td>" . $customer['Gaji'] . "</td>";





    echo "</tr>";
}

echo "</table>";

echo "<p><strong><i>HAFIS RAMADHAN</strong>";

?>
</body>
</html>
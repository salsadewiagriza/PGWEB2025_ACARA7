<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Data Kecamatan di Kabupaten Sleman</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 40px;
        }
        table {
            border-collapse: collapse;
            width: 600px;
            border: 1px solid black;
        }
        th, td {
            border: 1px solid black;
            padding: 5px 8px;
            font-size: 14px;
            text-align: center;
        }
        .judul {
            background-color: yellow; /* Warna kuning untuk judul tabel */
            font-weight: bold;
            font-size: 18px;
        }
        .header {
            background-color: #d9d9d9; /* Warna abu-abu untuk header kolom */
            font-weight: bold;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<table align="center">
    <!-- Baris judul -->
    <tr>
        <td colspan="5" class="judul">Data Kecamatan di Kabupaten Sleman</td>
    </tr>

    <!-- Header kolom -->
    <tr class="header">
        <th>Kecamatan</th>
        <th>Longitude</th>
        <th>Latitude</th>
        <th>Luas</th>
        <th>Jumlah_Penduduk</th>
    </tr>

    <?php
    // Array data kecamatan
    $dataKecamatan = [
        ["Kecamatan" => "Moyudan", "Longitude" => 110.2478, "Latitude" => -7.7774, "Luas" => 27.62, "Jumlah_Penduduk" => 31497],
        ["Kecamatan" => "Minggir", "Longitude" => 110.2484, "Latitude" => -7.7318, "Luas" => 27.27, "Jumlah_Penduduk" => 29886],
        ["Kecamatan" => "Seyegan", "Longitude" => 110.3003, "Latitude" => -7.7265, "Luas" => 26.63, "Jumlah_Penduduk" => 47129],
        ["Kecamatan" => "Godean", "Longitude" => 110.2957, "Latitude" => -7.7681, "Luas" => 26.84, "Jumlah_Penduduk" => 72028],
        ["Kecamatan" => "Gamping", "Longitude" => 110.3202, "Latitude" => -7.7903, "Luas" => 29.25, "Jumlah_Penduduk" => 108675]
    ];

    // Menampilkan data dalam tabel
    foreach ($dataKecamatan as $row) {
        echo "<tr>
                <td>{$row['Kecamatan']}</td>
                <td>{$row['Longitude']}</td>
                <td>{$row['Latitude']}</td>
                <td>{$row['Luas']}</td>
                <td>{$row['Jumlah_Penduduk']}</td>
              </tr>";
    }
    ?>
</table>

</body>
</html>

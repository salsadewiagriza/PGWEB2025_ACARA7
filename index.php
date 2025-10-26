<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Daftar Kecamatan di Sleman</title>
    <style>
        body {
            font-family: "Times New Roman", serif;
            margin: 40px;
            display: flex;
            flex-direction: column;
            align-items: center; /* ✅ Pusatkan isi secara horizontal */
        }
        h2 {
            text-align: center; /* ✅ Judul di tengah */
            margin-bottom: 10px;
            font-size: 18px;
        }
        table {
            border-collapse: collapse;
            width: 200px; /* ✅ Lebar tabel tetap kecil (±8 cm) */
            border: 1px solid black;
            margin-top: 10px;
        }
        th, td {
            border: 1px solid black;
            padding: 3px 5px;
            font-size: 14px;
        }
        th {
            background-color: #f2f2f2;
            text-align: center;
        }
        td:first-child {
            text-align: center;
            width: 25px;
        }
        td:last-child {
            width: 140px;
        }
        tr:hover {
            background-color: #f9f9f9;
        }
    </style>
</head>
<body>

<h2>Daftar Kecamatan di Kabupaten Sleman</h2>

<table>
    <tr>
        <th>Nomor</th>
        <th>Kecamatan</th>
    </tr>

    <?php
    $kecamatan = [
        "Berbah", "Cangkringan", "Depok", "Gamping", "Godean", "Kalasan",
        "Minggir", "Mlati", "Moyudan", "Ngaglik", "Ngemplak", "Pakem",
        "Prambanan", "Seyegan", "Sleman", "Tempel", "Turi"
    ];

    $no = 1;
    foreach ($kecamatan as $nama) {
        echo "<tr>
                <td>$no</td>
                <td>$nama</td>
              </tr>";
        $no++;
    }
    ?>
</table>

</body>
</html>

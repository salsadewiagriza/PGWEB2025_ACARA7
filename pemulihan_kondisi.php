<html>
<body>
<?php
// Mendapatkan hari ini dalam format singkat (Mon, Tue, Wed, dst)
$d = date("D");

// IF sederhana
if ($d == "Sat") {
    echo "Selamat berakhir pekan!<br>";
} else {
    echo "Semoga hari anda menyenangkan!<br>";
}

// IF dengan blok { }
if ($d == "Sat") { 
    echo "Hallo!<br>";
    echo "Selamat berakhir pekan!<br>";
    echo "Sampai jumpa di hari Senin!<br>";
}

echo "<br><br><br><br>";

// Menggunakan elseif
$d = date("D");
if ($d == "Sat") {
    echo "Selamat berakhir pekan!<br>";
} elseif ($d == "Sun") {
    echo "Semoga hari Minggu anda menyenangkan!<br>";
} else {
    echo "Semoga hari anda menyenangkan!<br>";
}

echo "<br><br><br><br>";

// Menggunakan switch
$x = 2;
switch ($x) { 
    case 1:
        echo "Angka 1<br>";
        break;
    case 2:
        echo "Angka 2<br>";
        break;
    case 3:
        echo "Angka 3<br>";
        break;
    default:
        echo "Bukan angka antara 1 sampai 3<br>";
}
?>
</body>
</html>
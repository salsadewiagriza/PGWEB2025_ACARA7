<?php
// Tampilkan link dengan parameter GET
echo "<a href='passing_variable.php?nama=Merapi&alamat=Sleman'>Gunung</a><br><br>";

// Cek apakah variabel dikirim lewat URL
if (isset($_GET['nama']) && isset($_GET['alamat'])) {
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];
    echo "Nama gunung adalah Gunung $nama beralamat di $alamat";
} else {
    echo "Klik link di atas untuk menampilkan data gunung.";
}
?>
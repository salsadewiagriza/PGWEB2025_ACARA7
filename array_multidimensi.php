<html>
<body>
<?php
$keluarga = array(
    "Joko" => array("Jojon", "Joni", "Joana"),
    "Parto" => array("Parmi", "4", "5"),
    "Warto" => array("Warami", "Warno", "Warmin")
);

foreach ($keluarga as $ayah => $anggota) {
    echo "<b>Keluarga $ayah:</b><br>";
    foreach ($anggota as $anak) {
        echo "- $anak<br>";
    }
    echo "<br>";
}
?>
</body>
</html>
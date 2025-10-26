<html> 
<body>
<?php

// menggunakan while
$i = 1;
while ($i <= 5) {
    echo "Angka " . $i . "<br />";
    $i++;
}

echo "<br><br><br><br>";

// menggunakan do...while
$i = 0;
do { 
    $i++;
    echo "Angka " . $i . "<br />";
} while ($i < 5);

echo "<br><br><br><br>";

// menggunakan for
for ($i = 1; $i <= 5; $i++) { 
    echo "Hello World!<br />";
} 

echo "<br><br><br><br>";

// menggunakan foreach
$arr = array("satu", "dua", "tiga");
foreach ($arr as $nilai) {
    echo "Nilai: " . $nilai . "<br />"; 
}

echo "<br><br><br><br>";
?>
</body>
</html>
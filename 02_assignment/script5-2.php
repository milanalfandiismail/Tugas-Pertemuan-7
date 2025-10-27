<html>
<head>
    <title>Menghitung Gaji Bersih Karyawan</title>
</head>
<body>
    <h1>Menghitung Gaji Bersih Karyawan</h1>
    <?php
    /*
    Script ini akan menghitung gaji bersih karyawan yang dirumuskan dengan
    Gaji Bersih = Gaji Pokok + Tunjangan - Pajak,
    misalkan gaji pokoknya Rp. 1.000.000, tunjangan Rp. 500.000 dan
    dikenakan 15% dari Gaji Kotor = Gaji Pokok + Tunjangan.
    Tunjukkan ada beberapa cara pembuatan script yang dapat menghasilkan
    output yang sama.
    */
    // Cara 1
    $gajiPokok = 1000000; // gaji pokok
    $tunjangan = 500000; // tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
    $pajak = 0.15 * $gajiKotor; // hitung pajak
    $gajiBersih = $gajiPokok + $tunjangan - $pajak; // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih.",-</p>"; // menampilkan gaji bersih
    // Cara 2
    $gajiPokok = 1000000; // gaji pokok
    $tunjangan = 500000; // tunjangan
    $gajiKotor = $gajiPokok + $tunjangan; // hitung gaji kotor
    $gajiBersih = $gajiKotor - (0.15 * $gajiKotor); // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih.",-</p>"; // menampilkan gaji bersih 
    // Cara 3
    $gajiPokok = 1000000; // gaji pokok
    $tunjangan = 500000; // tunjangan
    $gajiBersih = $gajiPokok + $tunjangan - 0.15 * ($gajiPokok + 
    $tunjangan); // hitung gaji bersih
    echo "<p>Gaji bersih karyawan adalah Rp. ".$gajiBersih.",-</p>"; // menampilkan gaji bersih
    ?>
</body>
</html>
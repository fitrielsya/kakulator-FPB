<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kalkulator FPB</title>
    <style>
        body { font-family: Arial, sans-serif; background-color: #f4f4f9; padding: 20px; }
        .container { max-width: 400px; background: white; padding: 20px; border-radius: 8px; box-shadow: 0 4px 8px rgba(0,0,0,0.1); margin: auto; }
        input[type="number"] { width: 100%; padding: 8px; margin: 10px 0 20px; border: 1px solid #ccc; border-radius: 4px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background-color: #0056b3; color: white; border: none; border-radius: 4px; cursor: pointer; font-size: 16px; }
        button:hover { background-color: #004494; }
        .result { margin-top: 20px; padding: 15px; background-color: #e9ecef; border-radius: 4px; }
        .relatif-prima { color: #155724; font-weight: bold; }
        .tidak-relatif-prima { color: #721c24; font-weight: bold; }
    </style>
</head>
<body>

<div class="container">
    <h2>Kalkulator FPB</h2>
    <p>Algoritma Euclidean</p>
    
    <!-- 1. Desain Form HTML -->
    <form method="POST" action="">
        <label for="angka1">Angka 1 (Nilai A):</label>
        <input type="number" id="angka1" name="angka1" required placeholder="Masukkan angka pertama">

        <label for="angka2">Angka 2 (Nilai B):</label>
        <input type="number" id="angka2" name="angka2" required placeholder="Masukkan angka kedua">

        <button type="submit" name="hitung">Hitung FPB</button>
    </form>

    <?php
    // 2. Proses dengan PHP
    if (isset($_POST['hitung'])) {
        // Menangkap input dari form
        $a = (int)$_POST['angka1'];
        $b = (int)$_POST['angka2'];

        // Menyimpan nilai asli untuk ditampilkan di output
        $nilaiA = $a;
        $nilaiB = $b;

        // Memastikan angka positif
        $a = abs($a);
        $b = abs($b);

        // Fungsi Algoritma Euclidean
        while ($b != 0) {
            $temp = $b;
            $b = $a % $b;
            $a = $temp;
        }
        
        $fpb = $a;

        // 3. Luaran (Output)
        echo "<div class='result'>";
        echo "<h3>Hasil:</h3>";
        echo "<p>FPB dari <b>$nilaiA</b> dan <b>$nilaiB</b> adalah <b>$fpb</b></p>";

        // Pengecekan Relatif Prima
        if ($fpb == 1) {
            echo "<p class='relatif-prima'>Keterangan: Kedua angka RELATIF PRIMA</p>";
        } else {
            echo "<p class='tidak-relatif-prima'>Keterangan: TIDAK RELATIF PRIMA</p>";
        }
        echo "</div>";
    }
    ?>
</div>

</body>
</html>
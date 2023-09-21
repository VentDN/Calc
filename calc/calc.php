

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="function.php" method="get">
        <input type="text" name="num1" placeholder="Nomor 1">
        <select name="oper">
            <label>Pilih Operasi Perhitungan</label>
            <option value="tambah">Penjumlahan</option>
            <option value="kurang">Pengurangan</option>
            <option value="kali">Perkalian</option>
            <option value="bagi">Pembagian</option>
            <option value="eksp">Perpangkatan</option>
        </select>
        <input type="text" name="num2" placeholder="Nomor 2">
        <button type="submit">Hitung</button>
    </form>
</body>
</html>
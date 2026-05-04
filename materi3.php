<?php
function hello()
{
    echo "Selamat datang di kelas TIA1";
}
hello();

function tambah(int $a, int $b){
$hasil = $a + $b;
return $hasil;
}
echo "<br><br>";
echo tambah(12, 8);

function perkalian(int $a, int $b){
$hasil = $a * $b;
return $hasil;
}

function pembagian(int $a, int $b){
$hasil = $a / $b;
return $hasil;
}

function pengurangan(int $a, int $b){
$hasil = $a - $b;
return $hasil;
}



?>

<form method="post">
    Masukkan Angka 1 : <input type="number" name="angka1">
    Masukkan Angka 2 : <input type="number" name="angka2">
    <input type="submit" name="kirim" value="kirim">
    </form>

    <?php
    if (isset($_POST["angka1"])){
        $newangka1 = $_POST["angka1"];
        $newangka2 = $_POST["angka2"];
        echo tambah($newangka1, $newangka2);
        echo "<br>";
        echo perkalian($newangka1, $newangka2);
        echo "<br>";
        echo pembagian($newangka1, $newangka2);
        echo "<br>";
        echo pengurangan($newangka1, $newangka2);
    }
    ?>
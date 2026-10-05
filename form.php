<form method="POST">
    <label>Nama:</label>
    <input type="text" name="nama">
    <button type="submit">Kirim</button>
</form>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST["nama"];

    echo "Halo, $nama!";
}

?>

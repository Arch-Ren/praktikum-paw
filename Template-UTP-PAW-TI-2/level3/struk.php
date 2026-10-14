<?php

$_SESSION["total"] = $total;

die(var_dump($_SESSION["total"]));

if (!isset($_SESSION["total"])) {
    echo "<p>Belum ada pekerjaan cetak.</p>";
} else {
    // Kerjakan Level 3: tampilkan ringkasan
    echo "<p>Ukuran: <?= htmlspecialchars($ukuran) ?></p>";
    echo "<p>Warna: <?= htmlspecialchars($warna) ?></p>";
    echo "<p>Jumlah halaman: <?= $halaman ?></p>";
    echo "<p>Jumlah rangkap: <?= $rangkap ?></p>";
    echo"<p>Tarif per halaman: Rp<?= number_format($tarif, 0, ',', '.') ?></p>";
    echo"<p>Total: Rp<?= number_format($total, 0, ',', '.') ?></p>";
}

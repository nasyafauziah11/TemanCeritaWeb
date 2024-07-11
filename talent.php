<?php
if (isset($_GET['talent'])) {
    $talent = $_GET['talent'];
    // Simulasi mengambil data talent dari database
    $talents = [
        1 => 'Talent 1 - Spesialis Masalah Pekerjaan',
        2 => 'Talent 2 - Spesialis Masalah Keluarga',
        3 => 'Talent 3 - Spesialis Hubungan Asmara'
    ];
    $talentName = $talents[$talent];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Chat dengan <?= htmlspecialchars($talentName) ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Curhat Online</h1>
        <nav>
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="forum.html">Forum</a></li>
                <li><a href="chat.html">Chat Pribadi</a></li>
            </ul>
        </nav>
    </header>
    <main>
        <h2>Chat dengan <?= htmlspecialchars($talentName) ?></h2>
        <p>Layanan chat berbayar akan segera dimulai.</p>
        <!-- Simulasi layanan chat -->
        <div class="chat-box">
            <p>[Talent]: Halo, apa yang bisa saya bantu?</p>
            <p>[Anda]: Saya ingin curhat tentang...</p>
        </div>
    </main>
    <footer>
        <p>&copy; 2024 Curhat Online. All rights reserved.</p>
    </footer>
</body>
</html>

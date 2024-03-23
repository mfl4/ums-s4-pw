<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Date</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Ramadan Date</h2>
    <p>Implementasi beberapa fungsi built-in PHP terkait tanggal dan waktu untuk studi kasus tentang Ramadan.</p>

    <div class="info">
        <?php
        // Mendapatkan tanggal hari ini
        $today_date = date('Y-m-d');
        echo "Today's Date: $today_date <br>";

        // Membuat waktu untuk pukul 00:00:00 pada tanggal 1 Ramadan 2024
        $ramadan_start = mktime(00, 00, 0, 3, 11, 2024);
        echo "Ramadan starts at: " . date('Y-m-d H:i:s', $ramadan_start) . "<br>";

        // Mendapatkan waktu saat ini
        $current_time = time();
        echo "Current Time: " . date('Y-m-d H:i:s', $current_time) . "<br>";

        // Mengonversi string waktu ke timestamp dengan
        $iftar_time = strtotime('tomorrow 17:48:00');
        echo "Iftar Time Tomorrow: " . date('Y-m-d H:i:s', $iftar_time) . "<br>";
        ?>
    </div>
</div>

</body>
</html>

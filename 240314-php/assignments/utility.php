<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan Utility</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Ramadan Utility</h2>
    <p>Implementasi beberapa fungsi built-in PHP terkait utilitas untuk studi kasus tentang Ramadan.</p>

    <div class="info">
        <?php
        // Menghitung jumlah elemen dalam array
        $takjils = ["kolak", "pisang ijo", "tahu goreng", "es buah", "es kuwut"];
        $count = count($takjils);
        echo "Number of elements in the array: $count<br>";

        // Memeriksa apakah sebuah variabel sudah diatur dan tidak null
        $iftar = 18;
        $fasting = null;
        $message = "Its time to iftar!";
        echo "Is iftar set and not null? " . (isset($iftar) ? "Yes" : "No") . "<br>";
        echo "Is fasting set and not null? " . (isset($fasting) ? "Yes" : "No") . "<br>";
        echo "Is message set and not null? " . (isset($message) ? "Yes" : "No") . "<br>";

        // Memeriksa apakah sebuah variabel kosong
        $activity = '';
        $takjil = 0;
        $friend = [];
        $money = null;
        $pray = True;
        echo "Is activity empty? " . (empty($activity) ? "Yes" : "No") . "<br>";
        echo "Is takjil empty? " . (empty($takjil) ? "Yes" : "No") . "<br>";
        echo "Is friend empty? " . (empty($friend) ? "Yes" : "No") . "<br>";
        echo "Is money empty? " . (empty($money) ? "Yes" : "No") . "<br>";
        echo "Is pray empty? " . (empty($pray) ? "Yes" : "No") . "<br>";
        ?>
    </div>

</div>
</body>
</html>

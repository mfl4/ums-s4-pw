<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ramadan String</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Ramadan String</h2>
    <p>Implementasi beberapa fungsi built-in PHP terkait manipulasi string</p>

    <div class="info">
        <?php
        // Mengambil panjang dari string
        $message = "Marhaban ya Ramadan!";
        echo "Length of the string \"$message\": " . strlen($message) . "<br>";

        // Membandingkan dua string
        $ramadan = "Ramadan";
        $eid = "Eid";
        $comparison = strcmp($ramadan, $eid);
        if ($comparison == 0) {
            echo "\"$ramadan\" is equal to \"$eid\"<br>";
        } elseif ($comparison > 0) {
            echo "\"$ramadan\" is greater than \"$eid\"<br>";
        } else {
            echo "\"$ramadan\" is less than \"$eid\"<br>";
        }

        // Mencari kemunculan pertama dari sebuah string dalam string lain
        $email = "infotakjil@ramadan.com";
        $domain = strstr($email, '@');
        echo "Domain part of email \"$email\": $domain<br>";

        // Menggabungkan elemen-elemen array dengan sebuah string
        $takjils = array("Kolak", "Gorengan", "Es buah");
        $takjils_implode = implode(", ", $takjils);
        $takjils_join = join(", ", $takjils);
        echo "Implode takjils: $takjils_implode<br>";
        echo "Join takjils: $takjils_join<br>";

        // Membagi sebuah string menjadi array berdasarkan string pemisah
        $sentence = "Welcome to Ramadan Kareem";
        $words = explode(" ", $sentence);
        echo "Exploded words: " . implode(", ", $words) . "<br>";

        // Mengonversi karakter-karakter khusus ke bentuk entitas HTML
        $html_message = "<p>Ramadan Kareem</p>";
        $encoded_message = htmlspecialchars($html_message);
        echo "Encoded Message: $encoded_message<br>";
        ?>
    </div>
</div>

</body>
</html>
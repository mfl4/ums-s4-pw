<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Math Ramadan</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="container">
    <h2>Ramadan Math</h2>
    <p>Implementasi beberapa fungsi built-in PHP terkait matematika untuk studi kasus tentang Ramadan.</p>

    <div class="info">
        <?php
        # Mempangkat bilangan ke pangkat tertentu
        $base = 2;
        $exponent = 3;
        $result_pow = pow($base, $exponent);
        echo "Result of $base raised to the power of $exponent: $result_pow<br>";

        // Menghitung logaritma dari bilangan
        $number = 10;
        $number_log = log($number);
        echo "logarithm of $number: $number_log<br>";

        // Mendapatkan nilai π (pi)
        $pi_value = pi();
        echo "Value of pi: $pi_value<br>";

        // Menghasilkan bilangan bulat acak
        $random_number = rand(1, 100);
        echo "Random number between 1 and 100: $random_number<br>";

        // Mencari nilai tertinggi dari beberapa nilai
        $numbers = [10, 20, 5, 30];
        $max_number = max($numbers);
        echo "Highest number in the array: $max_number<br>";

        // Mencari nilai terendah dari beberapa nilai
        $min_number = min($numbers);
        echo "Lowest number in the array: $min_number<br>";

        // Pembulatan ke bawah dari bilangan pecahan
        $number_to_floor = 3.7;
        $result_floor = floor($number_to_floor);
        echo "Floor value of $number_to_floor: $result_floor<br>";

        // Pembulatan ke atas dari bilangan pecahan
        $number_to_ceil = 3.2;
        $result_ceil = ceil($number_to_ceil);
        echo "Ceiling value of $number_to_ceil: $result_ceil<br>";

        // Pembulatan dari bilangan pecahan
        $number_to_round = 3.5;
        $result_round = round($number_to_round);
        echo "Rounded value of $number_to_round: $result_round<br>";

        // Fungsi trigonometri (sinus, kosinus, tangen)
        $hilal_degrees = 45;
        // Mengubah derajat menjadi radian
        $hilal_radians = deg2rad($hilal_degrees);
        $sin_value = sin($hilal_radians);
        $cos_value = cos($hilal_radians);
        $tan_value = tan($hilal_radians);
        echo "Sine of $hilal_degrees degrees: $sin_value<br>";
        echo "Cosine of $hilal_degrees degrees: $cos_value<br>";
        echo "Tangent of $hilal_degrees degrees: $tan_value<br>";
        ?>
    </div>

</div>

</body>
</html>

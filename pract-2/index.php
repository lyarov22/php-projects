<?php 

    $title = "Pract-2 (06.06.2023)";
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>$title</title>
</head>
<body>
    <h1><?= $title ?></h1>

    <?php 
        echo "Task 1 <br>";
        $a = 1 + 2 + 3;
        echo $a . "<br><br>";

        $a = 10;
        $b = 2;
        

        echo "Task 2 <br>";
        $sum = $a + $b;
        $difference = $a - $b;
        $product = $a * $b;
        $quotient = $a / $b;
        
        echo "Sum: " . $sum . "<br>";
        echo "Difference: " . $difference . "<br>";
        echo "Product: " . $product . "<br>";
        echo "Quotient: " . $quotient . "<br><br>";
        
        echo "Task 3 <br>";
        $c = 10;
        $d = 5;
        
        $res = $c + $d;
        echo $res . "<br><br>";
        

        echo "Task 4 <br>";
        $a = 1;
        $b = 2;
        $c = 3;
        
        $sum = $a + $b + $c;
        echo $sum . "<br><br>";
        
        $a = 10;
        $b = 5;
        $d = 7;
        
        $c = $a - $b;
        $res = $c + $d;
        echo "Task 5 <br>";
        echo $res . "<br><br>";
        
        $price = 1500;
        $shipping = 200;
        $name = "Автомат АК47";
        echo "Task 6 <br>";
        echo "Название товара: " . $name . "<br>";
        echo "Стоимость товара: " . $price . "<br>";
        echo "Стоимость товара с доставкой: " . ($price + $shipping) . "<br><br>";
            
        $salary_vasya = 25000;
        $salary_petya = 30000;
        
        $salary_vasya_next_year = $salary_vasya * 1.2;
        $salary_petya_next_year = $salary_petya * 1.15;
        echo "Task 7 <br>";
        echo "Зарплата Васи в следующем году: " . $salary_vasya_next_year . "<br>";
        echo "Зарплата Пети в следующем году: " . $salary_petya_next_year . "<br><br>";
        
        
        $total_shares = 1000;
        $john_shares = 100;
        $stolerman_shares = 150;
        $ivan_shares = 235;
        
        $john_percentage = ($john_shares / $total_shares) * 100;
        $stolerman_percentage = ($stolerman_shares / $total_shares) * 100;
        $ivan_percentage = ($ivan_shares / $total_shares) * 100;
        
        $sold_shares = $john_shares + $stolerman_shares + $ivan_shares;
        $unsold_shares = $total_shares - $sold_shares;
        echo "Task 8 <br>";
        echo "Процент акций у Джона: " . $john_percentage . "%<br>";
        echo "Процент акций у Столермана: " . $stolerman_percentage . "%<br>";
        echo "Процент акций у Ивана: " . $ivan_percentage . "%<br>";
        echo "Общее количество проданных акций: " . $sold_shares . "<br>";
        echo "Общее количество непроданных акций: " . $unsold_shares . "<br><br>";
        echo "Task 9 <br>";
        echo pow(3, 5) . "<br>"; // 3 to the power of 5
        echo (-8) / (-4) . "<br>"; // -8 divided by -4
        echo 100 % 3 . "<br><br>"; // remainder of 100 divided by 3
            
        $eurosCount = 100;

        $dollarsCount = $eurosCount * 1.25;
        $rublesCount = $dollarsCount * 60;
        echo "Task 10 <br>";
        echo $dollarsCount . "<br>";
        echo $rublesCount . "<br><br>";
        


        

        
    ?>
    <div class="imgs">
    <img src="./backgroundHelloWorldAnime.jpg" alt="Image description">

        <?php
            // Проверяем, была ли отправлена форма
            if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Получение значения из поля ввода
            $inputText = $_POST['inputText'];

            // Вывод введенного текста
            echo "<br/> Введенный текст: " . $inputText . "<br/><br/>";
            }
            ?>

            <!-- Форма с полем ввода и кнопкой -->
            <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <input type="text" name="inputText" placeholder="Введите текст">
            <button type="submit">Отправить</button>
            </form>

            <textarea rows="4" cols="10">Some textSome textSome textSome text</textarea>
            
    </div>

    <?php
// 1. Количество секунд в сутках
$secondsPerDay = 24 * 60 * 60;
echo "Количество секунд в сутках: " . $secondsPerDay . "<br>";

// 2. Количество секунд в 30 сутках
$secondsPerMonth = $secondsPerDay * 30;
echo "Количество секунд в 30 сутках: " . $secondsPerMonth . "<br>";

// 3. Количество секунд в году
$secondsPerYear = $secondsPerDay * 365;
echo "Количество секунд в году: " . $secondsPerYear . "<br>";

// 4. Количество минут в сутках
$minutesPerDay = 60 * 24;
echo "Количество минут в сутках: " . $minutesPerDay . "<br>";

// 5. Количество минут в году
$minutesPerYear = $minutesPerDay * 365;
echo "Количество минут в году: " . $minutesPerYear . "<br>";

// 6. Количество байт в мегабайте
$bytesPerMegabyte = 1024 * 1024;
echo "Количество байт в мегабайте: " . $bytesPerMegabyte . "<br>";

// 7. Количество байт в гигабайте
$bytesPerGigabyte = 1024 * 1024 * 1024;
echo "Количество байт в гигабайте: " . $bytesPerGigabyte . "<br>";

// 8. Количество байт в 10 гигабайтах
$gigabytes = 10;
$bytesInTenGigabytes = $gigabytes * $bytesPerGigabyte;
echo "Количество байт в 10 гигабайтах: " . $bytesInTenGigabytes . "<br>";

// 9. Количество байт в терабайте
$bytesPerTerabyte = 1024 * 1024 * 1024 * 1024;
echo "Количество байт в терабайте: " . $bytesPerTerabyte . "<br>";

// 10. Количество килобайт в терабайте
$kilobytesPerTerabyte = $bytesPerTerabyte / 1024;
echo "Количество килобайт в терабайте: " . $kilobytesPerTerabyte . "<br>";
?>


   

</body>
</html>
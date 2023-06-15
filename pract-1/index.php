<?php 
    $name = "Ilya";
    $name2 = "Fedorov";
    $name3 = "Vladmirovich";
    $surname = "Ilysha";
    $title = "P2A";
    $content = "Info in the site";
    $dob = 2006;
    $now = 2023;
    $post = 2021;

    $name11 = "John";
    $name22 = "Tom";
    $name33 = "Emily";

    $one = "Naharis";
    $two = "Mormont";
    $three = "Sand";
    
    
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1><?= $title ?></h1>
    <?php 
        echo "<p>Всем <br> привет <br> от <br> PHP! </p>" ;
    ?>
    <p> <?= $name ?><?= $name2 ?><?= $name3 ?></p>
    <div><?= $content ?></div>
    <p>Мне <?= $now-$dob ?>  лет</p>
    <p>Я учусь в ЦАТЕК <?= $now-$post ?> года</p>

    <?php 

        $text = "abcde";
        echo "Задача 1: ".$text[0]." ".$text[2]." ".$text[4]."<br>";


        print_r($name11[0] . $name33[2] . $name22[2] . "<br>"); // => Jim



        print_r($one[2] . $two[1] . $three[3] . $two[1] . $two[2] . "</br>");

        $str = "World";
        print_r($str[1] . $str[3] . $str[4] . "</br>");

        $str2 = "abcde";
        print_r($str2[4] . $str2[1] . $str2[0] . $str2[2] . $str2[0] . "</br>");

        $boolValue = true;
        $falseValue = false;
        $floatValue = 43.658e2;
        $sqrtValue = sqrt(-2);
        
        echo "Boolean Value 1: " . ($boolValue ? 'true' : 'false') . "<br>";
        echo "Boolean Value 2: " . ($falseValue ? 'true' : 'false') . "<br>";
        echo "Float Value: " . $floatValue . "<br>";
        echo "Square Root Value: " . $sqrtValue . "<br>";
        
        $string1 = 'Добро ';
        $string2 = 'побеждает ';
        $string3 = 'зло';
        echo "<br>";
        $combinedString = $string1 . $string2 . $string3;
        
        echo $combinedString;
        echo "<br>";
        $string = "На манёврах \"красные\" выступали против \"синих\"";
        echo $string;
        echo "<br>";
    ?>
</body>
</html>
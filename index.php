<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <ol>
    <?php
        $arr = [
            " 451° по Фаренгейту" => "Цветы для Элджернона",
            "Шантарам" => "Даниел Киз",
            "1984" => "Над пропастью во ржи", 
            "Мастер и Маргарита" => "Джером Д. Сэлинджер",
            "Три товарища" => "Маленький принц",
            "Портрет Дориана Грея" => "Антуан де Сент-Экзюпери",
            "Вино из одуванчиков" => "Анна Каренина",
            "Цветы для Элджернона" => "Лев Толстой",
            "Над пропастью во ржи" => "Сто лет одиночества",
            "Маленький принц" => "Габриэль Гарсиа Маркес",
            "Анна Каренина" => "Тень горы",
            "Сто лет одиночества" => "Грегори Дэвид Робертс",
            "Тень горы" => "Атлант расправил плечи",
            "Атлант расправил плечи" => "Айн Рэнд",

        ];
        foreach($arr as $key => $value){
            echo '<li><strong>' . $value . '</strong> : '. $key .'</li>'; 
        }
    ?>
    </ol>
</body>
</html>
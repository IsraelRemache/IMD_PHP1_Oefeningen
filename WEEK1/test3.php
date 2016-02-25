<?php
    $todos = [
        [
            "beschrijving" => "Taak PHP",
            "deadline" => 60 ,
            "categorie" => "school",
        ],
         [
            "beschrijving" => "Taak webtechnologie",
            "deadline" =>  100,
            "categorie" => "school",
        ],
         [
            "beschrijving" => "Flash kijken",
            "deadline" => 320 ,
            "categorie" => "thuis",
        ],
         [
            "beschrijving" => "In de zoo werken",
            "deadline" => 1500 ,
            "categorie" => "werk",
        ],
         [
            "beschrijving" => "Met Lora afspreken",
            "deadline" => 1800 ,
            "categorie" => "thuis",
        ],
    
    
    
    
    
    ];



?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>To Do</title>
    <link rel="stylesheet" href="css/style3.css">
</head>
<body>
    
    <article>
       <?php foreach ($todos as $todo):?>
       <?php
    if ($todo['deadline']<120){
        echo '<div class="rood">' . $todo['beschrijving'].'</div>';
    }
    else if ($todo['deadline']<1440){
        echo '<div class="oranje">' . $todo['beschrijving'].'</div>';
    }
    else if ($todo['deadline']>1440){
        echo '<div class="groen">' . $todo['beschrijving'].'</div>';
    }
    

    
?>

        
        
        <?php endforeach;?>
    </article>
    
    
</body>
</html>
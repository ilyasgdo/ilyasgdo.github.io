<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        .mainTitle{
            background-color: blueviolet;
        }
        .mainP{
            background-color: greenyellow;
        }
        .hun{
            background-color: greenyellow;
        }
    </style>
</head>
<body>
    <div class="mainTitle">
        <h1 class="hun">
            enfin un site ouf  
        </h1>
    </div>
    <div class="mainTitle">
        <p class="hun">
            se n'est que le debut tqt mon pote 
        </p>
    </div>

    <?php
        for($i=0;$i<20;$i++){
            print($i);
            echo("<p class='hun'>
            recurance 
        </p>");
        }
    ?>
</body>
</html>
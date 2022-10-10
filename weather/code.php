<?php

    include('codes.php');
        
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="code.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Alkalami&family=Francois+One&family=Montserrat:wght@100;400&family=Oswald:wght@600&family=Roboto:ital@1&display=swap" rel="stylesheet">
</head>
<body>
    <div class="main">
        <h1 class="head"> 
            <i class="fa-solid fa-cloud-sun-rain"></i>
            <i>WEATHER STATUS</i> 
            <i class="fa-solid fa-cloud"></i>
        </h1>
         <p> <b> Weather status is describing typical weather phenomena, such as a series of thunderstorm
                in hot<br/> summer, foggy month in autumn or other weather conditions which are typical for a specific <br/>
                region and/or season.</b>
         </p>        
         <DIV class="inner">
            <form action="" method="get">
                <input type="text" name="name" placeholder="Search Your City Weather....">
                <input class="button" type="submit" name="submit" value="Search" >
            </form>
         </DIV>
            <div class="out">
                <img src="http://openweathermap.org/img/wn/<?php echo $result['weather'][0]['icon']?>@4x.png" alt="" srcset="">
            
                    <?php
                        if($channel)
                        {
                            echo " $channel";
                        }
                    ?>
            </div>
     </div>
</body>
</html>
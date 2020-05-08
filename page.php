<?php 
if(isset($_COOKIE['name'])) {
    $name =$_COOKIE['name'];
    } else {
        $name='Гость';
    }
    ?>


    <!DOCTYPE html>
    <html>
    <head>
    <title> Страница page.php</title> 
     <meta charset="UTF-8">
     </head>
     <body>
     <h1>Страница page.php</h1>
     <p>Привет , <?php echo $name; ?></p>
     <a href="index.php">Страница index.php</a>
     </body>
     </html>
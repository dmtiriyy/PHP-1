<?php
  if (isset($_POST['button'])){
    if((!empty($_POST['name']))) {
        $name=$_POST['name'];
        setcookie('name',$name); 
    } 
  }
  else if(isset($_COOKIE['name'])) {
    $name =$_COOKIE['name'];
  }
  else {
      $name='Гость';
  }
?>


<!DOCTYPE html>
    <html>
    <head>
    <title> Страница index.php</title> 
     <meta charset="UTF-8">
     </head>
     <body>
     <h1> Страница index.php</h1>
     <a href="page.php"> Cтраница page.php</a>
     <br><br>
     <p>Привет , <?php echo $name; ?></p>
    
     <form method ="post">
     <input type="text" name="name" />
     <input type="submit" name="button" />
     </form>
     </body>
     </html>
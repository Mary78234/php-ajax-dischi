<?php
include 'data/db.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <link rel="stylesheet" href="assets/style/style.css">
</head>
<body>

  <header>
    <div class="box-img"></div>
  </header>

  <main>
    <div class="container">
      <div class="box-row">

        <?php foreach($database as $artist): ?>
        <div class="box-card">

          <img src="<?php echo $artist['poster'] ?>" alt="<?php echo $artist['title'] ?>">
          <h2><?php echo $artist['title'] ?></h2>
          <p><?php echo $artist['author'] ?> <?php echo $artist['year'] ?></p>
          
        </div>
        <?php endforeach; ?>

      </div>
    </div>
  </main>
  
</body>
</html>
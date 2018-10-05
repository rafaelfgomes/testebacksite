<?php

  require_once 'database/connection.php';

?>

<!DOCTYPE html>

<html lang="pt-br">

  <head>

    <?php include_once 'partials/_head.php' ?>
    <link rel="stylesheet" href="css/styles.css" type="text/css">
    
  </head>

  <body>

    <?php include_once 'partials/_top.php'; ?>

    <div class="container">

      <?php include_once 'partials/_header.php'; ?>

      <?php include_once 'partials/_navbar.php'; ?>

      <p>&nbsp;</p>

      <div class="row">

        <div class="col-12 col-md-3">
          
          <?php include_once 'partials/_leftnews.php'; ?>
        
        </div>
        
        <div class="col-12 col-md-6">
          
          <?php include_once 'partials/_centernews.php'; ?>
        
        </div>
        
        <div class="col-12 col-md-3">
          
          <?php include_once 'partials/_rightnews.php'; ?>
          
        </div>

      </div>

    </div>

    <?php include_once 'partials/_footer.php'; ?>

    <?php include_once 'partials/_scripts.php'; ?>

  </body>

</html>
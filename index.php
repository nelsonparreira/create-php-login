<?php
// Allow the config
define('__CONFIG__', true);
// Require the config
require_once 'inc/config.php';
?><!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <title>Document</title>

    <!-- UIkit CSS -->
    <!-- https://getuikit.com/docs/installation -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.30/css/uikit.min.css" />


  </head>
  <body>

    <div class="uk-section uk-container ">
      <h2>Hello world. Today we are in <?= date("Y"); ?></h2>
      <p>
        <a href="login.php">Login</a>
        <a href="register.php">Register</a>
      </p>

    </div>



    <?php require_once 'inc/footer.php'; ?>
  </body>
</html>
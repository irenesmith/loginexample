<?php
  // define the config constant
  define('__CONFIG__', true);
  // allow the config
  require_once 'inc/config.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- UIkit CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/uikit@3.5.7/dist/css/uikit.min.css" />
</head>

<body>
  <div class="uk-section uk-container">
    <p>
      <?php
        echo "Hello, today is: ";
        echo date('Y m d');
      ?>
    </p>

    <p><a href="login.php">Login</a></p>
    <p><a href="register.php">Register</a></p>
  </div>

  <?php require_once('inc/footer.php'); ?>

</body>

</html>
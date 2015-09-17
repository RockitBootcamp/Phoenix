<?php

  include "numbers.php"; // gives a warning and keeps on going and going and going and going ...
  // include_once "numbers.php"; // "once" means it will never read the file again,
                                 // even if you do another "include"

  // require "numbers.php"; // raises an exception, dies in a fire
  // require_once "numbers.php";

  die('oops');
  exit();

  $five = 5;
  $FIVE = 6;
  $seven = $three + $four;

  $hello = "Hello 'world'!";

  echo "Rockit Bootcamp";

  echo "This is not a comment"; // everything-after-this-point-is-a-comment comment

  $pizza = "yummy"; // <--- so true

  // here is some code
  $here;
  $is;
  $more;
  $code;

  $code = 'php';

  /*$somethingelse;*/

  /*
    here i can type
    more than
    one

    line

    ....


    weee.

   */

  // here is another
  // way
  // to
  // do multi line
  // comment
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Document</title>
</head>
<body>
  <h1><?php echo($hello); ?></h1>

  <div>5 + 3 = <?php echo($five + $three); ?></div>
  <div>7 - 2 = <?php echo($seven - $two); ?></div>

  <?php include("footer.php"); ?>
</body>
</html>

<?php 
  include 'hash.php';
?>

<html>
  <body>
    <style>
      .<?php echo $randomString[0][2]; ?> {
        color: red;
      }
      .<?php echo $randomString[1][2]; ?> {
        font-size: 30px;
        color: blue;
      }
      .<?php echo $randomString[2][2]; ?> {
        color: yellow;
      }
      .<?php echo $randomString[3][2]; ?> {
        color: gray;
      }
    </style>
    <h1 class="<?php echo $randomString[0][2]; ?>"><?php echo $randomString[0][1]; ?></h1>
    <span class="<?php echo $randomString[1][2]; ?>"><?php echo $randomString[1][1]; ?></span>
  	<p class="<?php echo $randomString[2][2]; ?>"><?php echo $randomString[2][1]; ?></p>
  	<h1 class="<?php echo $randomString[3][2]; ?>"><?php echo $randomString[3][1]; ?></h1>
  </body>
</html>


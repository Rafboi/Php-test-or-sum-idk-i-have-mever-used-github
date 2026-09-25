<html>
 <head>
  <link rel="stylesheet" href="styles.css"
 </head>
 <body>
  <div class="file">
<?php
if (!file_exists("data.txt")) {
    echo "err: file not existing";
    } else {
    $output = file_get_contents("data.txt");
    echo $output;
    }
?>
  </div>
 </body>
</html>

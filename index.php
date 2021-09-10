<!DOCTYPE html>
<html lang="en" >
  <head>
    <meta charset="UTF-8">
    <title>Hash2JOAATSigned</title>
    <link rel="stylesheet" href="./style.css">
  </head>
  <body>
    <form method="post">  
      <textarea rows='1' name="prop" type="text" placeholder="Insert data"></textarea>
      <input  type="submit" name="submit" value="HASH">  
    </form>  
    <script  src="./script.js"></script>
  </body>
</html>


<?php
if (isset($_POST['submit']))
{

    error_reporting(E_ERROR | E_PARSE);
    $text = trim($_POST['prop']);
    $textAr = explode("\n", $text);
    $textAr = array_filter($textAr, 'trim');
    foreach ($textAr as $texto)
    {
        $texto = preg_replace('/\s+/', '', $texto);
        $hash = hash('joaat', $texto, false);
        $tmp = reset(unpack("l", pack("l", hexdec($hash))));
        echo reset(unpack("l", pack("l", hexdec($hash))));
        echo "<br>";

    }

}
?>

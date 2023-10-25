<?php
$censureWord = $_POST['censureWord'];
$text = $_POST['text'];

$textReplace = str_replace($censureWord,"***",$text);

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP result</title>
</head>
<body>
  <p>Il paragrafo è: <?php echo $text ?></p>
  <p>Il paragrafo è lungo <?php echo strlen($text) ?> caratteri</p>

  <p>Il paragrafo è: <?php echo $textReplace ?></p>
  <p>Il paragrafo è lungo <?php echo strlen($textReplace) ?> caratteri</p>
</body>
</html>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
$inputText = $_POST["textarea_content"];

$wordCount = str_word_count($inputText);

$letterCount = strlen(preg_replace('/[^a-zA-Z]/','',$inputText));

$reversedText = strrev($inputText);

echo "Input: $inputText\n";
?><br>
<?php
echo "Ayat ini mengandungi $wordCount\n patah perkataan";
?><br>
<?php
echo "Ayat ini mengandungi $letterCount\n huruf";
?> <br>
<?php
echo "Ayat terbalik : $reversedText\n";
?>
</body>
</html>

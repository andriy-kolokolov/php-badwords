<?php
$wordInput = $_GET['wordInput'];
$textInput = $_GET['textInput'];

$replacedText = str_replace($wordInput, " ***** ", $textInput);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>PHP BadWords</title>
</head>
<body style="background-color: #b2b2b2">
<div class="container w-75 mt-5">
    <div>
        <h1 class="text-center">Original Text: </h1>
        <div class="bg-white rounded-2 p-3 mt-3">
            <p><?= $textInput ?> </p>
        </div>
    </div>
    <div class="mt-4">
        <h1 class="text-center">Censored Text: </h1>
        <div class="bg-white rounded-2 p-3 mt-3">
            <p><?= $replacedText ?> </p>
        </div>
    </div>
</div>


<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
        crossorigin="anonymous"></script>
</body>
</html>



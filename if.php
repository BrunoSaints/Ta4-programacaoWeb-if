<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>if</title>
</head>
<body>
    <?php
$t = date("h");
if ($t < 20) {
echo "Tenha um ótimo dia!";
if ($t > 20) {
echo "Tenha uma ótima noite";
}
} ?>


</body>
</html>
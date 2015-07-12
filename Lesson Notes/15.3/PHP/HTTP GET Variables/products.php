<?php



if ($_GET['time'] == 'morning') {
    $message = 'its morning';
} else if ($_GET['time'] == 'night') {
    $message = 'its night';
} else {
    $message = 'No Products';
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>

    What time of day is it? <?php echo $message; ?>
    
</body>
</html>
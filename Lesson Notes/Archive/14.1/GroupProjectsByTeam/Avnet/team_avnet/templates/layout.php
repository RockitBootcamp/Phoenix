<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="favicon.ico">
    <title><?php echo $title ?></title>
    <slink rel="stylesheet" href="//<?=PUBLIC_PATH?>/bootstrap.min.css">
    <slink rel="stylesheet" href="//<?=PUBLIC_PATH?>/bootstrap-theme.min.css">
    <link rel="stylesheet" href="//<?=PUBLIC_PATH?>/styleGuide.css" type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/themes/smoothness/jquery-ui.css" />
</head>
<body>    
    <?php include TEMPLATES_PATH . "/header.php" ?>
    <div class="menu">
        <a href="//<?=APP_PATH?>/schools.php">Schools</a>
        <a href="//<?=APP_PATH?>/video.php">Video</a>
        <a href="//<?=APP_PATH?>/games.php">Games</a>
        <a href="//<?=APP_PATH?>/sponsors.php">Sponsors</a>
        <a href="//<?=APP_PATH?>/faculty.php">Faculty</a>
        <a href="//<?=APP_PATH?>/students.php">Students</a>
    </div>

    <div class="bodyInformation">
        <?php echo $content ?>
    </div>

    <footer>
        <p>Contact Us 480-643-7657</p>
        <a href="#">Link</a>
        <a href="#">Link</a>
        <a href="#">Link</a>
    </footer>
    <script>
        var appPath = "<?=APP_PATH?>";
    </script>
    <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="//<?=PUBLIC_PATH?>/tgregister.js"></script>
    <script src="//<?=PUBLIC_PATH?>/bootstrap.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
</body>
</html>
<?php
// index.php
$games = array(
        array("Title"=>"Game1","Description"=>"This is a great game","Duration"=>"30"),
        array("Title"=>"Game2","Description"=>"This is a great game2","Duration"=>"60"),
        array("Title"=>"Game3","Description"=>"This is a great game3","Duration"=>"90"),
        array("Title"=>"Game4","Description"=>"This is a great game4","Duration"=>"120"));

?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Games</title>
    </head>
    <body>
        <h1>List of Games</h1>
        <ul>
            <?php foreach ($games as $idx => $game) { ?>
            <li>
                <a href="/show.php?id=<?php echo $idx ?>">
                    <?php echo $game['Title'] ?>
                </a>
            </li>
            <?} ?>
        </ul>
    </body>
</html>

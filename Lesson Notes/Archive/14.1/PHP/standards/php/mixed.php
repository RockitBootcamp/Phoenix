<?php
// index.php
$link = mysql_connect('localhost', 'myuser', 'mypassword');
mysql_select_db('techGames_db', $link);

$result = mysql_query('SELECT id, title FROM games', $link);
?>

<!DOCTYPE html>
<html>
    <head>
        <title>List of Games</title>
    </head>
    <body>
        <h1>List of Games</h1>
        <ul>
            <?php while ($row = mysql_fetch_assoc($result)): ?>
            <li>
                <a href="/show.php?id=<?php echo $row['id'] ?>">
                    <?php echo $row['title'] ?>
                </a>
            </li>
            <?php endwhile; ?>
        </ul>
    </body>
</html>

<?php
mysql_close($link);
?>

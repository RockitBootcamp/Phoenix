<!DOCTYPE html>
<html>
    <head>
        <title>List of Students</title>
    </head>
    <body>
        <h1>List of Students</h1>
        <ul>
            <?php foreach ($students as $idx => $student) { ?>

            <li>
                <a href="/show.php?id=<?php echo $idx ?>">
                    <?php echo $student['FirstName'] ?>
                </a>
            </li>
            <?} ?>
        </ul>
    </body>
</html>

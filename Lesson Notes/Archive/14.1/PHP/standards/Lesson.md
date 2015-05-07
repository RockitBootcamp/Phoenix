# Objectives

* Apply PHP Coding Standards and Styles
* Apply the MVC pattern

# Lesson

Single page with both HTML and Backend code mixed into one page.

```
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
```



**Step1: Split out View**

* Split out View into a new file
* Add a 'require' to new file

**Step 2: Model**
* Create a new file for our model
* Choose a function that makes sense
* add a 'require_once' to new file

**Example**

Create three files:

* Controller (index.php)
* Model (model.php)
* View (gameDetail.php)

**Controller**

````
<?php
namespace RockIT\TechGames;

require_once 'model.php';

$game = get_game_by_id(1);

require 'templates/gameDetail.php';
````

**Model**

````
<?php
namespace RockIT\TechGames;

$games = array(
        array("Title"=>"Game1","Description"=>"This is a great game","Duration"=>"30"),
        array("Title"=>"Game2","Description"=>"This is a great game2","Duration"=>"60"),
        array("Title"=>"Game3","Description"=>"This is a great game3","Duration"=>"90"),
        array("Title"=>"Game4","Description"=>"This is a great game4","Duration"=>"120"));

function get_all_games()
{
    return  $GLOBALS["games"];
}

function get_game_by_id($gameId)
{
    return $GLOBALS["games"][$gameId];
}
````

**View**

Layout.php

```
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title><?php echo $title ?></title>
</head>
<body>
    <?php echo $content ?>
</body>
</html>
```

gameDetail.php

```
<?php $title = $post['title'] ?>

<?php ob_start() ?>
    <h1><?php echo $game[Title] ?></h1>

    <div class="date"><?php echo $game[Duration] ?></div>
    <div class="body">
        <?php echo $game[Description] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
```

# Exercise
1. Change Sublime User Settings  "translate_tabs_to_spaces": true,
2. Change existing files (View -> Indentation -> Convert Indentation to Spaces)
2. Create a single flat file for students (Fetch all students from DB)
3. Separate into Three files (index.php, model.php, studentList.php) See https://github.com/PhoenixRockit/standards/tree/master/php/student
4. Separate into Three files Games https://github.com/PhoenixRockit/standards/tree/master/php/games


# Homework
1. Separate Group Project into MVC (index.php, model.php, studentList.php)

# Resources
* [RockIT Code Standards](https://github.com/PhoenixRockit/standards)
* [From flat to MVC](http://symfony.com/doc/current/book/from_flat_php_to_symfony2.html)

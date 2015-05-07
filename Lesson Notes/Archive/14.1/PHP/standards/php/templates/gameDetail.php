<?php $title = $game['title'] ?>

<?php ob_start() ?>
    <h1><?php echo $game[Title] ?></h1>

    <div class="date"><?php echo $game[Duration] ?></div>
    <div class="body">
        <?php echo $game[Description] ?>
    </div>
<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>

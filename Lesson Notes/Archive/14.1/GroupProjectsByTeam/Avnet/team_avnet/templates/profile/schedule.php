<?php ob_start() ?>

    <div class="control-group">
            <div class="dayDate">
                <label class="control-label" for="day"></label>
                <input type="text" id="day" value="<?= $user->getDay();?>" placeholder ="Game Day">
                <label class="control-label" for="date"></label>
                <input type="text" id="date" value="<?= $user->getDate();?>" placeholder ="Game Date">
            </div>
            <div class="timeTitle">
                <label class="control-label" for="time"></label>
                <input type="text" id="time" value="<?= $user->getTime();?>" placeholder ="Game DatTime">
                <label class="control-label" for="title"></label>
                <input type="text" id="title" value="<?= $user->getTitle();?>" placeholder ="Game DatTitle">
            </div>
    <div>
<br>
<br>
    <div class="control-group">
            <div class="dayDate">
                <label class="control-label" for="day"></label>
                <input type="text" id="day" value="<?= $user->getDay();?>" placeholder ="Game Day">
                <label class="control-label" for="date"></label>
                <input type="text" id="date" value="<?= $user->getDate();?>" placeholder ="Game Date">
            </div>
            <div class="timeTitle">
                <label class="control-label" for="time"></label>
                <input type="text" id="time" value="<?= $user->getTime();?>" placeholder ="Game DatTime">
                <label class="control-label" for="title"></label>
                <input type="text" id="title" value="<?= $user->getTitle();?>" placeholder ="Game DatTitle">
            </div>
    <div>
<br>
<br>
    <div class="control-group">
            <div class="dayDate">
                <label class="control-label" for="day"></label>
                <input type="text" id="day" value="<?= $user->getDay();?>" placeholder ="Game Day">
                <label class="control-label" for="date"></label>
                <input type="text" id="date" value="<?= $user->getDate();?>" placeholder ="Game Date">
            </div>
            <div class="timeTitle">
                <label class="control-label" for="time"></label>
                <input type="text" id="time" value="<?= $user->getTime();?>" placeholder ="Game DatTime">
                <label class="control-label" for="title"></label>
                <input type="text" id="title" value="<?= $user->getTitle();?>" placeholder ="Game DatTitle">
            </div>
    <div>
<br>
<br>
    <div class="control-group">
            <div class="dayDate">
                <label class="control-label" for="day"></label>
                <input type="text" id="day" value="<?= $user->getDay();?>" placeholder ="Game Day">
                <label class="control-label" for="date"></label>
                <input type="text" id="date" value="<?= $user->getDate();?>" placeholder ="Game Date">
            </div>
            <div class="timeTitle">
                <label class="control-label" for="time"></label>
                <input type="text" id="time" value="<?= $user->getTime();?>" placeholder ="Game DatTime">
                <label class="control-label" for="title"></label>
                <input type="text" id="title" value="<?= $user->getTitle();?>" placeholder ="Game DatTitle">
            </div>
    <div>
<br>
            <div class="errorReset">
                <div class="saveChanges">
                    <button type="submit" class="addToCalendar">Add to Calendar</button>
                </div>
            </div>



        

<?php $content = ob_get_clean() ?>
<?php include TEMPLATES_PATH . '/layout.php' ?>



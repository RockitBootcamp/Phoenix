
    <?php ob_start() ?>

      <div class="profileNav">
        <li><a href="//<?=APP_PATH?>/index.php/profile?t=name">Name and Details</a></li>
        <li><a href="//<?=APP_PATH?>/index.php/profile?t=account">Account Settings</a></li>
        <li><a href="//<?=APP_PATH?>/index.php/profile?t=profile">Profile Detail</a></li>
        <li><a href="//<?=APP_PATH?>/index.php/profile?t=schedule">Schedule</a></li>
      </div>

<?php $content = ob_get_clean() ?>
<?php include TEMPLATES_PATH . '/layout.php' ?>
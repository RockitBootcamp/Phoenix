<?php ob_start() ?>
    <h1>Change Password</h1>

    <div class="date"></div>
    <div class="body">
      <form action="//<?=APP_PATH?>/index.php/changePassword" method="POST"> 
            <input type="hidden" id="userId" name="userId" value="<?= $user->getId();?>">
            <input type="hidden" id="userId" name="email" value="<?=$user->getEmail();?>">

      <div class="control-group">
          <label class="control-label" for="userName"></label>
          <div class="controls">
            <input type="password" id="oldPassword"  name="oldPassword" placeholder="old Password">
          </div>
        </div>

        <div class="control-group">
          <label class="control-label" for="inputEmail"></label>
          <div class="controls">
            <input type="password" id="newPassword"  name="password" placeholder="New Password">
          </div>
        </div>
         <div class="control-group">
          <label class="control-label" for="inputEmail"></label>
          <div class="controls">
            <input type="password" id="retypeNewPassword" name="ReTypenewPassword"placeholder="Retype New Password">
          </div>
        </div>
          <div class="errorResetPassword"></div>
          <div class="saveChanges">
              <button type="submit" class="btnSaveChangepassword">Save</button>
              <span> or </span>
              <a href="//<?=APP_PATH?>/index.php/profile?t=account" class="cancel">Cancel</a>
          </div>
        </div>
      </form>

    </div>
<?php $content = ob_get_clean() ?>

<?php include TEMPLATES_PATH . '/layout.php' ?>
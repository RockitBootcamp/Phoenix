<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li class="<?= ($activeTab == 'name' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=name">Name and Details</a></li>
		<li class="<?= ($activeTab == 'account' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=account">Account Settings</a></li>
		<li class="<?= ($activeTab == 'profile' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=profile">Profile Detail</a></li>
		<li class="<?= ($activeTab == 'schedule' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=schedule">Schedule</a></li>
	</ul>

	<div class="date"></div>


	<form class="profileAccount" action="//<?=APP_PATH?>/index.php/profile?t=account" method="POST">
			<input type="hidden" id="userId" name="userId" value="<?= $user->getId();?>">

		<h2>Account Setting</h2>

		<div class="control-group">
			<div  class="formElement">
				<label class="control-label" for="inputEmail">Email</label>
				<input type="text" id="inputEmail" name='email' value="<?=$user->getEmail();?>">
			</div>
			<div class="formElement">
				<label>Password</label>
				<a href="//<?=APP_PATH?>/index.php/changePassword" class="btn">Change</a>
			</div>
			<div class="errorReset"></div>
			<?php
			if ($hasErrors === true){

				  echo $validator->getErrors()['email'];
			}
			?>
		</div>

		<div class="saveChanges">
			
			<button type="submit" class="btnSave secondaryButton">Save</button>
			<span>or</span>
			<a href="//<?=APP_PATH?>/index.php" class="cancel">Cancel</a>
		</div>
	</form>
</div>
<?php $content = ob_get_clean() ?>

<?php include TEMPLATES_PATH . '/layout.php' ?>





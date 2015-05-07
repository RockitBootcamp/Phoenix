<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li class="<?= ($activeTab == 'name' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=name">Name and Details</a></li>
		<li class="<?= ($activeTab == 'account' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=account">Account Settings</a></li>
		<li class="<?= ($activeTab == 'profile' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=profile">Profile Detail</a></li>
		<li class="<?= ($activeTab == 'schedule' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=schedule">Schedule</a></li>
	</ul>

	<form class="profileName" action="//<?=APP_PATH?>/index.php/profile?t=name" method="POST">
		<input type="hidden" id="userId" name="userId" value="<?= $user->getId();?>">
		<h2>Profile Detail</h2>

		<div class="control-group">
			<div class="formElement">
				<label class="control-label" for="first_name">First Name</label>
				<input type="text" id="first_name" name="first_name" value="<?= $user->getFirstName();?>" placeholder ="first Name">
			</div>

			<div class="formElement">
				<label class="control-label" for="last_name">Last Name</label>
				<input type="text" id="last_name" name="last_name" placeholder ="last Name" value="<?= $user->getLastName();?>">
			</div>

			<div class="formElement">
				<label class="control-label" for="gender">Gender</label>
				<input type="text" id="gender" name="gender" placeholder ="" value="<?= $user->getgender();?>">
			</div>

			<div class="formElement">
				<label class="control-label" for="age">Age</label>
				<input type="text" id="age" name="age" value="<?= $user->getage();?>" placeholder ="">
			</div>

			<div class="formElement">
				<label class="control-label" for="address">Address</label>
				<input type="text" id="address" name="address"  placeholder ="address" value="<?=$user->getaddress();?>">
			</div>

			<div class="formElement">
				<label class="control-label" for="website">website</label>
				<input type="text" id="website" name="website" placeholder ="website" value="<?=$user->getwebsite();?>">
			</div>

			<div class="errorReset"></div>
			<?php
			if ($hasErrors === true){
				foreach($validator->getErrors() as $err) {
					echo $err . "<br>";
				}				 
			}
			?>
		</div>

			<div class="saveChanges">
				<button type="submit" class="btnSaveNameDetail secondaryButton">Save</button>
				<span> or </span>
				<a href="//<?=APP_PATH?>/" class="cancel">Cancel</a>
			</div>
	</form>
</div>
					
<?php $content = ob_get_clean() ?>
<?php include TEMPLATES_PATH . '/layout.php' ?>
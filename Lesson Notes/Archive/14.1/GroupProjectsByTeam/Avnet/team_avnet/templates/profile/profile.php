
<?php
$title = "Profile";


$db = new DB();

$school_results = array();


$results = $db->execute("SELECT * FROM school");
$result = $results->fetch_assoc();


while ($row = mysqli_fetch_array($results, MYSQL_ASSOC)) {
    $row_array['school_id'] = $row['school_id'];
    $row_array['name'] = $row['name'];

    array_push($school_results,$row_array);
}

$schools = json_encode($school_results);


?>
<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li class="<?= ($activeTab == 'name' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=name">Name and Details</a></li>
		<li class="<?= ($activeTab == 'account' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=account">Account Settings</a></li>
		<li class="<?= ($activeTab == 'profile' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=profile">Profile Detail</a></li>
		<li class="<?= ($activeTab == 'schedule' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=schedule">Schedule</a></li>
	</ul>				

	<form class="profileProfile" action="//<?=APP_PATH?>/index.php/profile?t=profile" method="POST">
		<input type="hidden" id="userId" name="userId" value="<?= $user->getId();?>">
		<h2>Profile</h2>

		<div class="control-group">
			<div class="formElement">
				<label class="photo">Photo</label>
				<div class="changePhoto">
					<a href="http://www.gravatar.com/emails">
						<img src="<?=$user->getAvatar(140)?>" />
						<div class="changePhoto">Change Photo</div>
					</a>
				</div>
			</div>
 
			<div class="formElement">
				<label class="school" for="school">School</label>
				<input type="text" id="school" name="school" value="<?=$user->getschool();?>">
			</div>

			<div class="formElement">
				<label class="bio" for="bio">Bio</label>
				<input type="text" id="bio" name="bio" value="<?=$user->getbio();?>">
			</div>
		</div>
		<div class="errorProfile">
		<?php
			if ($hasErrors === true){
				foreach($validator->getErrors() as $err) {
					echo $err . "<br>";
				}
			}			
			
			?>
		</div>
		
		<div class="saveChanges">
			<button type="submit" class="btnSave secondaryButton" id="wired">Save</button>
			<span>or</span>
			<a href="<?php TEMPLATES_PATH?>index.php ?>" class="cancel">Cancel</a>
		</div>              
	</form>
</div>

<?php $content = ob_get_clean() ?>
<?php include TEMPLATES_PATH . '/layout.php' ?>

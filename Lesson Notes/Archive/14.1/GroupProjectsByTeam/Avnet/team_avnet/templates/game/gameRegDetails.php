<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameHome&gameId=<?=$game->getId();?>">Game Home</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameRegDetails&gameId=<?=$game->getId();?>">Registration Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameDetails&gameId=<?=$game->getId();?>">Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameSchedule&gameId=<?=$game->getId();?>">Schedule</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameResults&gameId=<?=$game->getId();?>">Results</a></li>
	</ul>					

	<h1>Registration Details</h1>

	<form action="//<?=APP_PATH?>/index.php/gameRegDetails" method="POST">

		<div class="control-group">
 
			<div class="formElement">
				<label class="location" for="location">Location</label>
				<input type="text" id="location" name="location" value="">
			</div>

			<div class="formElement">
				<label class="capacity" for="capacity">Capacity</label>
				<input type="text" id="capacity" name="capacity" value="">
			</div>

			<div class="formElement">
				<label class="teamSize" for="teamSize">Team-size</label>
				<input type="text" id="teamSize" name="teamSize" value="">
			</div>
			
			<div class="formElement">
				<label class="seatsOpen" for="seatsOpen">Seats Open</label>
				<input type="text" id="seatsOpen" name="seatsOpen" value="">
			</div>

			<div class="formElement">
				<label class="addTeam" for="addTeam">Add Team</label>
				<input type="text" id="addTeam" name="addTeam" value="">
				<button>Add</button>
			</div>

			<div class="formElement">
				<label class="addStandby" for="addStandby">Add Standby</label>
				<input type="text" id="addStandby" name="addStandby" value="">
				<button>Add</button>
			</div>

		</div>
		
		<div class="saveChanges">
			<button type="submit" class="btnSave secondaryButton">Save</button>
			<span>or</span>
			<a href="<?php TEMPLATES_PATH?>index.php ?>" class="cancel">Cancel</a>
		</div>              
	</form>
</div>

<?php $content = ob_get_clean() ?>
<?php include TEMPLATES_PATH . '/layout.php' ?>
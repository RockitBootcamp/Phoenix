<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameHome&gameId=<?=$game->getId();?>">Game Home</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameRegDetails&gameId=<?=$game->getId();?>">Registration Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameDetails&gameId=<?=$game->getId();?>">Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameSchedule&gameId=<?=$game->getId();?>">Schedule</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameResults&gameId=<?=$game->getId();?>">Results</a></li>
	</ul>					

	<h1>Details</h1>

	<form action="//<?=APP_PATH?>/index.php/gameDetails" method="POST">

		<div class="control-group">
 
			<div class="formElement">
				<label class="overview" for="overview">Overview</label>
				<input type="text" id="overview" name="overview" value="">
			</div>

			<div class="formElement">
				<label class="skills" for="skills">Skills</label>
				<textarea rows="6" cols="30" type="text" id="skills" name="skills" value=""><?=$game->getSkills();?></textarea>
			</div>

			<div class="formElement">
				<label class="description" for="description">Description</label>
				<textarea rows="6" cols="30" type="text" id="description" name="description" value=""><?=$game->getDescription();?></textarea>
			</div>

			<div class="formElement">
				<label class="scoring" for="scoring">Scoring</label>
				<textarea rows="6" cols="30" type="text" id="scoring" name="scoring" value=""><?=$game->getScoring();?></textarea>
			</div>

			<div class="formElement">
				<label class="parameters" for="parameters">Parameters</label>
				<textarea rows="6" cols="30" type="text" id="parameters" name="parameters" value=""></textarea>
			</div>

			<div class="formElement">
				<label class="equipment" for="equipment">Equipment</label>
				<textarea rows="6" cols="30" type="text" id="equipment" name="equipment" value=""><?=$game->getEquipment();?></textarea>
			</div>

			<div class="formElement">
				<label class="grading" for="grading">Grading</label>
				<textarea rows="6" cols="30" type="text" id="grading" name="grading" value=""></textarea>
			</div>

			<div class="formElement">
				<label class="awards" for="awards">Awards</label>
				<input type="text" id="awards" name="awards" value="">
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
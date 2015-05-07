<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameHome&gameId=<?=$game->getId();?>">Game Home</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameRegDetails&gameId=<?=$game->getId();?>">Registration Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameDetails&gameId=<?=$game->getId();?>">Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameSchedule&gameId=<?=$game->getId();?>">Schedule</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameResults&gameId=<?=$game->getId();?>">Results</a></li>
	</ul>					

	<h1>Results</h1>

	<form action="//<?=APP_PATH?>/index.php/gameResults" method="POST">

		<div class="control-group">
 
			<div class="formElement">
				<label class="winner" for="winner">Winner</label>
				<input type="text" id="winner" name="winner" value="">
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
<?php ob_start() ?>

<div class="body">
	<ul class="leftNav">
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameHome&gameId=<?=$game->getId();?>">Game Home</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameRegDetails&gameId=<?=$game->getId();?>">Registration Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameDetails&gameId=<?=$game->getId();?>">Details</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameSchedule&gameId=<?=$game->getId();?>">Schedule</a></li>
		<li><a href="//<?=APP_PATH?>/index.php/gameHome?t=gameResults&gameId=<?=$game->getId();?>">Results</a></li>
	</ul>				

	<h1>Game Home</h1>

	<form action="//<?=APP_PATH?>/index.php/gameHome" method="POST">

		<div class="control-group">
 
			<div class="formElement">
				<label class="title" for="title">Title</label>
				<input type="text" id="title" name="title" value="<?=$game->getTitle();?>">
			</div>

			<div class="formElement">
				<label class="image" for="image">Image</label>
				<input type="text" id="image" name="image" value="">
			</div>

			<div class="formElement">
				<label class="description" for="description">Description</label>
				<textarea rows="6" cols="30" type="text" id="description" name="description"><?=$game->getDescription();?></textarea>
			</div>
			
			<div class="formElement">
				<label class="sponsor" for="sponsor">Sponsor</label>
				<input type="text" id="sponsor" name="sponsor" value="">
			</div>

			<div class="formElement">
				<label class="supSponsors" for="supSponsors">Supporting Sponsors</label>
				<input type="text" id="supSponsors" name="supSponsors" value="">
			</div>

			<div class="formElement">
				<label class="owner" for="owner">Game Owner</label>
				<input type="text" id="owner" name="owner" value="">
			</div>

			<div class="formElement">
				<label class="judge" for="judge">Judge</label>
				<input type="text" id="judge" name="judge" value="">
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
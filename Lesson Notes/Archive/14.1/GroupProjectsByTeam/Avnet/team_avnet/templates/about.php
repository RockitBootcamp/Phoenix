<?php 
//namespace RockIT\TechGames;

error_reporting(E_ALL);
ini_set('display_errors', 'on');

//use RockIT\TechGames;
$title = "About";
?>

<?php ob_start() ?>

<img class="infographic" width="600px" src="http://www.avnettechgames.com/sites/default/files/promofiles/Infographic.jpg">

<div class="content">
	<div class="about">
		<h1>About Avnet Tech Games</h1>
		<p>The Avnet Tech Games (ATG) is an annual college technology competition that provides students with an opportunity to apply what they learn in school to real-world scenarios. Students compete in teams and each winning team member is eligible to receive a scholarship up to $1,000 in value. Thousands of students will graduate and apply for the same jobs, but the ones who get the best jobs have one thing in common: experience outside the classroom. Adding the Avnet Tech Games to your resume can be the difference that can land you the job that will launch your career.</p>
		<p>The Virtual Games are open to college students nationwide. Student teams are presented with a scenario and compete against other student teams from colleges across the country. Projects are submitted to judges who are able to score them remotely and declare a winner.</p>

		<div class="lister">
			<p>The Avnet Tech Games competitive events provide students with an opportunity to:</p>
			<ul>
				<li>Exercise team-building, decision-making, and creative skills</li>
				<li>Develop skills for future leadership roles</li>
				<li>Demonstrate knowledge and competency in selected fields</li>
				<li>Connect with local employers</li>
				<li>Obtain hands-on experience outside the classroom</li>
			</ul>
		</div>
	</div>

	<div class="tube">
		<iframe class="tuber" width="560" height="315" src="//www.youtube.com/embed/DEy3SZlzvSk" frameborder="0" allowfullscreen></iframe>
	</div>

	<div class="history">
		<h2>History</h2>
		<p>The Avnet Tech Games was started in 2006 as a partnership between Avnet Inc. and the Maricopa County Community College District. The competition was created as an effort to bridge the gap between college curriculum and high tech industry standards. Subsequently, the Avnet Tech Games was opened to all Arizona college students and then to college students nationwide through the virtual game competition.</p>
		<p>Since its inception, more than 1,800 students and 100 faculty members from 76 colleges have participated in the Avnet Tech Games. More than $225,000 has been awarded in student scholarships and faculty honorariums.</p>
	</div>

	<div class="byTheNums">
		<img class="numsPic" width="600" src="http://www.avnettechgames.com/sites/default/files/images/bythenumbers.jpg">
	</div>
</div>



<style type="text/css">

.content {
	width: 780px;
	float: left;
	margin: 10px;
}

/*.content > div {
	background-color: red;
}*/

.tuber, .numsPic {
	display: block;
	margin: auto;
}

.lister {
	text-align: center;
	list-style-position: inside;
}

li {
	text-align: left;
	margin-left: 150px;
}


</style>

<?php $content = ob_get_clean() ?>

<?php include 'layout.php' ?>
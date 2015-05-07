<?php 
	error_reporting(E_ALL);
	ini_set('display_errors', 'on');

	// $string = file_get_contents("student_data.json"); 
	// $users=json_decode($string,true);
	$error_array = array();
	$error_string = "";
  	$reg = '/^[a-zA-Z-_.+]+@[a-zA-Z-_.+]+\.[a-z]{2,6}\.?[a-z]+/';
	$email = "";
	$loggedIn = false;
	$registered = false;

  require 'signin.php';
  require 'register.php';
  // //on loads other than the first
  // if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  // 	//is this an email address
  // 	if (preg_match($reg, $_POST['email']) === 1){
  // 		$email = $_POST['email'];
  // 	  	foreach($users as $user) {
  //     		//match email and then password
  //     		if ($user['Email'] == $_POST['email']){
  //     			$registered = true; // Set flag: yes, user in DB.
  // 				  if ($user['Password'] == $_POST['password']){
  //     				// loggedIn()
  //     				array_push($error_array, "Congratulations you are logged in as $email");
  //     				$loggedIn = true; // says found in DB by email & entered correct pswd.
  // 				  }else {
  //   					// badPw();
  //   					array_push($error_array, "Sorry your password is incorrect");
  // 				  }
  //       	}
  //     	} // end of for

  //   	// check if user was in database (ie: registered)
  //   	if ($registered != true){
  //   		array_push($error_array, "Please click signup button");
  //   		//valid but unregistered email.  FIX: Redirect to Sign-Up?
  // 	  }
  //   }
  // } 

  // if(count($error_array) > 0) {
  // 	foreach($error_array as $e) {
  // 		$error_string = $error_string . $e . "<br>"; 
  // 	} 
  // }
	


 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Register for Avnet Games</title>
	<link rel="stylesheet" href="main.css">
</head>

<body>
	<div class="mainContainer">
	<!-- Start of Header section with User Nav -->
		<header>
			<div class="contactNav">(480) 643-7657</div>
			<div class="userNav">
				<?php require 'loginstate.php';?>
			</div>

			<div class="subContainer">
				<a href="/" title="Return to the homepage" id="logo">
	  				<img src="atg-logo.png" alt="AVNET Tech Games Logo" />
				</a>
				<nav class="subContainerNav">
					<a class="currentGames" href="#">Current games</a>
					<a class="sponsors" href="#">Sponsors</a>
					<a class="faculty" href="#">Faculty</a>
					<a class="students" href="#">Students</a>
				</nav>
			</div>	

		
		<!-- This is hidden until user clicks on Log In/ Sign Up button -->
		<div class="userPopUp">
			<div class="signInTab activeTab">Sign In</div>
			<div class="signUpTab registerButton">Register</div>
		

			<div class="userSignIn">
					<form action="index.php" method="POST">
						<input class="email" type="text" placeholder="Email" name="email" value="<?php echo $email ?>"><br>
						<input class="password" type="password" placeholder="Password" name="password"><br>
						<!-- <div class="error"></div> -->
          				<div class="phperror"><?php print_r($error_string); echo "$loggedIn"; ?></div>
						<a href="#">Forgot password?</a>	
						<!-- <button type="button" class="cancelButton">Cancel</button> -->
						<button class="submitButton signinButton" type="submit">Sign In</button>
					</form>	
			</div>

			<div class="userSignUp">
				<div>
					<form action="" method="#">
						<input class="firstName" type="text" placeholder="First Name"><br>
						<input class="lastName" type="text" placeholder="Last Name"><br>
						<input class="email" type="text" placeholder="Email" value="<?php echo $email ?>"><br>
						<input class="password" type="password" placeholder="Password"><br>
						<!-- <button type="button" class="cancelButton">Cancel</button> -->
						<button class="submitButton" type="submit">Register</button>
					</form>	
				</div>
			</div>
		</div>
	
		
		</header>
	
	<div class="contentContainer">
		<aside>
			<span></span>
			<ul class="asideLinks">
				<li><a href="#">Schools</a></li>
				<li><a href="#">Press</a></li>
				<li><a href="#">Video</a></li>
			</ul>
		</aside>
		<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Voluptatem, incidunt illum earum. Dignissimos voluptatum maiores dicta aliquid. Molestiae, ratione, quas velit illum tempora recusandae quam nesciunt itaque beatae incidunt eum aliquid temporibus ipsam dolore veniam asperiores est impedit quibusdam dicta maiores consequatur magni nostrum delectus facilis similique aperiam omnis facere cum doloribus minus architecto eius necessitatibus assumenda. Asperiores, veritatis, magni obcaecati qui deserunt eos et totam mollitia fugit est nam quae ut eum eius sint dolores eligendi officia incidunt debitis expedita alias nemo culpa cumque minus iusto nobis nulla corrupti tempore quisquam quidem. Quaerat, doloremque excepturi non tempora consequatur atque perferendis natus autem eligendi accusamus saepe voluptatum illo necessitatibus sint quis ex exercitationem quidem quod voluptate quo! Sequi, eius, perferendis, odio placeat velit modi molestiae tenetur sapiente veritatis animi doloremque quia cupiditate voluptatibus delectus provident voluptate quaerat distinctio labore at inventore cum ipsum hic accusantium sunt corporis illum voluptatem dolorum amet magnam veniam ex perspiciatis deleniti saepe. Itaque, aperiam, quam, perferendis, temporibus soluta dolorum reiciendis autem ipsam alias et ipsum facere earum repellat ipsa ea sint rerum placeat asperiores id ratione animi officia quasi vitae totam veniam minima qui molestiae sunt est inventore voluptas facilis minus culpa. Consequatur, consectetur, eum aliquam excepturi ad quibusdam magni praesentium nesciunt earum voluptas nihil repellat saepe numquam voluptatum ex nam repellendus ullam assumenda quos consequuntur fuga expedita ea ducimus.</p>
		<p>Voluptatem, cumque, maxime, accusamus ab ullam maiores quae magnam impedit iste odit numquam reiciendis natus amet mollitia excepturi repellat expedita quos hic non quo neque possimus illum odio rerum repudiandae. Voluptates, nulla, dolor, veritatis ratione quasi labore cupiditate cumque deleniti porro magni eos ipsa vero iste consectetur facilis itaque necessitatibus dolorem blanditiis minus voluptatum quam velit assumenda quo quibusdam recusandae aliquam quas eligendi esse libero similique molestias soluta quos harum deserunt saepe odit hic impedit voluptatem sed praesentium. Facere, ratione, maxime commodi inventore dignissimos distinctio recusandae voluptate cumque vitae ullam praesentium nihil animi accusantium aperiam facilis repellat accusamus at nisi repellendus consequatur beatae tempora omnis. Corporis, totam dolor repudiandae. Cum, iste, amet. Vero, temporibus, obcaecati, earum corporis quos nemo necessitatibus rerum soluta a hic dolorem repellat quam voluptates animi unde et quibusdam fugiat excepturi quaerat assumenda explicabo nisi iure. Fugiat, tempore reprehenderit facilis dolores suscipit unde corporis nesciunt nulla modi iste enim earum alias quas rem pariatur error ad beatae ipsum sunt voluptas aut deserunt sequi Dignissimosissimos tempora veniam id maxime cum. Maiores, fuga, laudantium.</p>
	</div>
</div>

<!-- Footer Section -->
<footer>
	<div>Contact Us<br>480-643-7657</div>
</footer>

<script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
<script type="text/javascript" src="tgregister.js"></script>

</body>
</html>

















































































 .-''''-. _    
 ('    '  '0)-/)
 '..____..:    \._
   \u  u (        '-..------._
   |     /      :   '.        '--.
  .nn_nn/ (      :   '            '\
 ( '' '' /      ;     .             \
  ''----' "\          :            : '.
         .'/                           '.
        / /                             '.
       /_|       )                     .\|
         |      /\                     . '
         '--.__|  '--._  ,            /
                      /'-,          .'
                     /   |        _.' 
                    (____\       /    
                          \      \   
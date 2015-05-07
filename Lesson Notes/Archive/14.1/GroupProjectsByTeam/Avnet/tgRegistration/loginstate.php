<?php 
  if ($loggedIn){
    echo "<div class='welcome'>
          <p>Welcome
            <a href='#'class='userName'>$email</a> Not 
            <a href='#'class='nonUser'>$email</a>?
            <button class='signOut'>Sign Out</button>
          </p>
        </div>";
  }else {
    echo "<div class='userButton'>
          <div>
            <button class='signinButton'>Sign In</button><button class='registerButton'>Register</button>
          </div>
        </div>";
  }
?>
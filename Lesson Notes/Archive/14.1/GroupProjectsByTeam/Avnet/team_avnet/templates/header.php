<header>
    <div class="topHeader">
        <a href="//<?=APP_PATH?>/" title="Return to the homepage" id="logo"><img class="logo" src="//<?=PUBLIC_PATH?>/img/tg.png" alt="Avnet Logo"></a>
        <?php 
        
            if ($user->isAuthenticated){ ?>
                
                <div class='welcome mediaObject'>
                    <a href="//<?=APP_PATH?>/index.php/profile">
                        <img src="<?=$user->getAvatar(40)?>" />
                    </a>
                    <div class='mediaObjectBody'>
                        <a href="//<?=APP_PATH?>/index.php/profile" class='userName'><?=$user->getDisplayName()?></a>
                        <a class="signOut" href='//<?=APP_PATH?>/index.php/signOut'>Sign out</a>
                    </div>

                </div>
            

            <?php } else { ?>
                               
                <div class="loginHeader container">
                    <div class="userSignIn">
                        <button class="loginButton" type="submit" name="logIn">Log In</button>
                        <button class="registerButton" type="submit">Register</button>
                    </div>
                    
                    <form action="//<?=APP_PATH?>/index.php" method="POST">
                        <div class="loginFields">
                            <input class="email" type="text" placeholder="Email" name="email">
                            <input class="password" type="password" placeholder="Password" name="password">
                            <input  type="hidden"  name="signIn" value="signIn">
                            <button type="submit" class="submitButton secondaryButton">Log In</button>
                            <p><a href="#">Forgot password?</a></p>
                            <div class="error"></div>
                        </div>
                    </form>
                </div>

                <div class="modal registerModal container">
                    <form action="index.php" method="POST">
                        <input class="firstName" type="text" placeholder="First Name" name="first_name">
                        <input class="lastName" type="text" placeholder="Last Name" name="last_name">
                        <input class="email" type="text" placeholder="Email" name="email" value="">
                        <input class="password" type="password" placeholder="Password" name="password">
                        <input  type="hidden"  name="register" value="register">
                        <div class="errorMessageSpace"></div>                        
                        <button type="button" class="cancelButton">Cancel</button>
                        <button type="submit" class="registerSubmitButton secondaryButton" name="register" value="Register">Register</button>
                    </form>
                </div>

                <div class="modal forgotPasswordModal container">
                    <form action="index.php" method="POST">
                        <input class="email" type="text" id="add-text" placeholder="Enter Email" class="add-text" name="add-text" value autocomplete="off">
                        <button class="cancelButton" type="submit">Cancel</button>
                        <button class="submitButton secondaryButton" type="submit">Submit</button>
                    </form>
                </div>
        <?php  } ?>
    </div>

<!-- NAV -->
        <nav>
            <a class="menuToggle" href="#">Menu</a>
            <a class="button <?= ($activeTab == 'home' ?  'active' : '' ) ?>"   href="//<?=APP_PATH?>/">Home</a>
            <a class="button <?= ($activeTab == 'about' ?  'active' : '' ) ?>"  href="//<?=APP_PATH?>/index.php/about">About</a>
            <a class="button <?= ($activeTab == 'press' ?  'active' : '' ) ?>"  href="//<?=APP_PATH?>/press.php">Press</a>
        </nav>
</header>

<?php 
// if ($hasErrors) { echo $errorMessage; }
?> 
 



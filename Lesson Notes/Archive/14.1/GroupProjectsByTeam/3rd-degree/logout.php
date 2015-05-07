
    <div class="logOut">
        <form id="logOut" action="index.php" method="POST">
                
            <div class="welcome">
                <?php echo 'Welcome, ' . $userName;?>
            </div>
            <button type='submit' class='logOut'>Log Out</button>


            <input type='hidden' name='action' value='logOut'>


        </form>
    </div>

<?php ob_start() ?>

<div class="body">
    <ul class="leftNav">
        <li class="<?= ($activeTab == 'name' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=name">Name and Details</a></li>
        <li class="<?= ($activeTab == 'account' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=account">Account Settings</a></li>
        <li class="<?= ($activeTab == 'profile' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=profile">Profile Detail</a></li>
        <li class="<?= ($activeTab == 'schedule' ?  'active' : '' ) ?>"><a href="//<?=APP_PATH?>/index.php/profile?t=schedule">Schedule</a></li>
    </ul>

    <h2>Schedule</h2>

    <div>

        <table class="schedule table">
            <tr class="day">
                <td>Monday</td>
                <td>&nbsp;</td>
                <td>January 6, 2014</td>
            </tr>
            <tr class="event last">
                <td>All Day</td>
                <td>Green Video Competition - Registration</td>
                <td>&nbsp;</td>
            </tr>
            <tr class="day">
                <td>Monday</td>
                <td>&nbsp;</td>
                <td>March 10, 2014</td>
            </tr>
            <tr class="event last">
                <td>All Day</td>
                <td>Green Video Competition - Call</td>
                <td>&nbsp;</td>
            </tr>
            <tr class="day">
                <td>Sunday</td>
                <td>&nbsp;</td>
                <td>March 30, 2014</td>
            </tr>
            <tr class="event last">
                <td>All Day</td>
                <td>Green Video Competition - Submit Video</td>
                <td>&nbsp;</td>
            </tr>
            <tr class="day">
                <td>Saturday</td>
                <td>&nbsp;</td>
                <td>April 12, 2014</td>
            </tr>
            <tr class="event">
                <td>All Day</td>
                <td>Green Video Competition - Winner Announced</td>
                <td>&nbsp;</td>
            </tr>
            <tr class="event">
                <td>7:00 - 5:00</td>
                <td>HP Build the Fastest Computer</td>
                <td>&nbsp;</td>
            </tr>
            <tr class="event">
                <td>7:00 - 5:00</td>
                <td>Cisco Networking Expert Battle</td>
                <td>&nbsp;</td>
            </tr>
            <tr class="event last">
                <td>7:00 - 5:00</td>
                <td>Java Blitz</td>
                <td>&nbsp;</td>
            </tr>
        </table>

        <button style="float:right" type="submit" class="btnSaveNameDetail secondaryButton">Add to Calendar</button>
    
    </div>


    

</div>
    
<?php $content = ob_get_clean() ?>

<?php include TEMPLATES_PATH . '/layout.php' ?>
<?php

    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');
    include 'initialize.php';

    $db = new DB();
    session_start();
    $sql = "SELECT * FROM Companies";
    $results = $db->execute($sql);
    if (count($_SESSION['user_id'])== 0){
        header("Location: login.php");
        die("You must be logged in to create reviews.");
    }
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $sql_values = $_POST;
        $table = "Reviews"; 
        $db->insert($table, $sql_values);
    }
?>


<html>


    <head>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" href="style.css">
    </head>

    <body>
        <?php include 'header.php';?>

    <div class="survey">
        <form action="survey.php" method="POST">
        
            <fieldset>
                <legend>Rate Your Employer</legend>
                <select class="employer" name="company_id">
                <?php while($row = $results->fetch_assoc()){
                    echo "<option value=\"" . $row['company_id'] . "\">" . $row['Name'] . "</option>";};
                ?>
                </select>
                
            <div class="sliders">    
                <label for='balance'>Work/Life Balance</label> <br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="WLBalance" class="ranger"><p class="count" style="display: inline"></p>
                <datalist id='balance'>
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
                <option>10</option>
                </datalist>
                <br> <br>        
                <label for='salary'>Salary</label> <br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Salary" class="ranger"><p class="count" style="display: inline"></p>
                <br> <br>        
                <label for='benefits'>Benefits</label><br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Benefits" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <label for='advancement'>Advancement Opportunities</label><br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Opportunity" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <label for='equality'>Fairness/Equality</label><br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Fairness" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <label for='leadership'>Quality of Leadership</label><br>
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Leadership" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <label for='loyalty'>Loyalty</label><br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Loyalty" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <label for='morale'>Morale</label><br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Morale" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <label for='communication'>Communication</label><br> 
                <input type=range min=0 max=10 value=5 step=1 list='balance' name="Communication" class="ranger"><p class="count" style="display: inline"></p>
                <br><br> 
                <textarea cols="50" rows="10" spellcheck='true' name='ReviewText' placeholder='Tell us about your employer'></textarea><br>
            </div>

                <button type="submit">Submit</button>
                
                <input type="hidden" value=<?php echo "$_SESSION[user_id]";?> name="person_id">
            </fieldset>
        </form>
    </div>

    </body>
</html>


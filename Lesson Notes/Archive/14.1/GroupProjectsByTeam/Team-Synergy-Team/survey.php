<?php


    // error_reporting(E_ALL);
    // ini_set('display_errors', 'on');
    include 'initialize.php';

    
    session_start();
    print_r($_POST);
    $sql = "SELECT * FROM Companies";
    $results = db::execute($sql);
    $priority = "";
    if (count($_SESSION['user_id'])== 0){
        header("Location: login.php");
        die("You must be logged in to create reviews.");
    }
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $priority = $_POST['priority'];
        unset($_POST['priority']);
        $_POST['ReviewText'] = "\"" . $_POST['ReviewText'] . "\"";
        
        $sql_values = $_POST;

        // $sql_values = [];
        // $sql_values['Salary'] = $_POST['Salary'];




        // print_r($priority);

        //$sql_values['ReviewText'] = addslashes($_POST['ReviewText']);
        $sql_values = db::array_in_quotes($sql_values);

        // print_r($sql_values);
        $table = "Reviews"; 
        db::insert($table, $sql_values);

    // $sql_peeps = "SELECT * FROM People";
    // $results_peeps = db::execute($sql_peeps);
    //         print_r($_SESSION);
    
        $peeps_values = ['priority'=>"$priority"];
        print_r($peeps_values);
        // Walk over and add quotes to values
        $peeps_values = db::array_in_quotes($peeps_values);

        // Execute SQL Statement
        db::update('People', $peeps_values, "WHERE person_id = {$_SESSION['user_id']}");

    }
?>


<html>


    <head>
        <script src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
        <script src="main.js"></script>
        <link rel="stylesheet" href="survey.css">
    </head>

    <body>
        <?php include 'header.php';?>
        
        <form action="survey.php" method="POST">
        




            <fieldset>
                <h1>Rate Your Employer</h1>
                
                <select class="employer" name="company_id">
                <?php while($row = $results->fetch_assoc()){
                    echo "<option value=\"" . $row['company_id'] . "\">" . $row['Name'] . "</option>";};
                ?>
                </select><br>
                    <table>
                    <thead>
                    <tr>
                      <th><div style='width: 275px'>Rate Your Priorities</div></th>
                      <th><div style='width: 100px'>Top Priority</div></th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                    <td>
    
                    <label for='balance'>Work/Life Balance</label> <br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="WLBalance" class="ranger"><p class="count" style="display: inline"></p>
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
                    <td><input type="radio" name="priority" value="WLBalance"><br></td>
                    </tr> 
                                    
                    <tr>
                    <td>        
                    <label for='salary'>Salary</label><br>
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Salary" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Salary"></td>
                    </tr>

                 
                    <tr>
                    <td>       
                    <label for='benefits'>Benefits</label><br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Benefits" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Benefits"></td>
                    </tr>
                    
                    <tr>
                    <td>
                    <label for='advancement'>Advancement Opportunities</label><br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Opportunity" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Opportunity"></td>
                    </tr>
                    
                    <tr>
                    <td>
                    <label for='equality'>Fairness/Equality</label><br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Fairness" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Fairness"></td>
                    </tr>
                     
                    <tr>
                    <td>
                    <label for='leadership'>Quality of Leadership</label><br>
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Leadership" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Leadership"></td>
                    </tr>
                    
                    <tr>
                    <td>
                    <label for='loyalty'>Loyalty</label><br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Loyalty" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Loyalty"></td>
                    </tr>
                    
                    <tr>
                    <td>
                    <label for='morale'>Morale</label><br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Morale" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Morale"></td>
                    </tr>
                     
                    <tr>
                    <td>
                    <label for='communication'>Communication</label><br> 
                    <input type=range min=0 max=10 value=0 step=1 list='balance' name="Communication" class="ranger"><p class="count" style="display: inline"></p>
                    <td><input type="radio" name="priority" value="Communication"></td>
                    </tr>
                    
                    </tbody>
                </table>

                
               
                
                <textarea cols="50" rows="10" spellcheck='true' name='ReviewText' placeholder='Tell us about your employer'></textarea><br>

                <button type="submit">Submit</button>
                
                <input type="hidden" value=<?php echo "$_SESSION[user_id]";?> name="person_id">
            </form>
            </form>

           
      </fieldset>
        
    </body>
</html>


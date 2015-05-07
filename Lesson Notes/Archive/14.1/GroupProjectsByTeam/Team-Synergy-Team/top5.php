<?php 
    include 'initialize.php';
    
    //Get the five companies that have the highest scores in the users selected priority
    function getTopFive($uid){

       $db = new DB;
       
       //Create an array of all companies in format [companyname => companyid]
       $sql = "SELECT company_id, Name FROM Companies";
       $compresults = $db->execute($sql);
       $allcompanies = [];
       $compavg = [];
       
       while ($row = $compresults->fetch_assoc()){
          $allcompanies[$row['Name']] = $row['company_id'];
        
       }

       //Find the user's priority selection
       $usrsql = "SELECT priority FROM People WHERE person_id = $uid";
       $usrresults = $db->execute($usrsql);
       $usrresults = $usrresults->fetch_assoc();
       $priority = $usrresults['priority'];

       //get the average rating of each company in the prioritized category and store in an array
       foreach ($allcompanies as $key => $value) {
           //if the user has a set priority do work or redirect to survey page
           if($priority){
            //hey guess what SQL can calculate column averages for you
            $avgsql = "SELECT AVG($priority) FROM Reviews WHERE company_id = $value";
            $avgresults = $db->execute($avgsql);
            $avgresults = $avgresults->fetch_assoc();
            $compavg[$key] = implode(".", $avgresults);
           }else{
            header("Location: survey.php");
           }
       }
       
       //sort finished array high to low and grab the top 5
       arsort($compavg);
       $topfive = array_slice($compavg, 0, 5);

       return $topfive;
   };
 ?>
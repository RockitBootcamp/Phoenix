<?php 

include 'initialize.php';


function getAverages($company_id){
    $scores = [];
    $superaverage = 0;
    
    //create keys for scores and zero out any leftover data in the scores array
    $keys = ['company_id', 'WLBalance', 'Salary', 'Benefits', 'Opportunity', 'Fairness', 'Leadership', 'Loyalty', 'Morale', 'Communication'];
    foreach ($keys as $key) {
        $scores[$key] = 0;
    }
    
    //now I know I could replace all of this with a simple SQL query 
    // $db = new DB;

    $sql = "SELECT * FROM Reviews WHERE company_id = $company_id";
    $results = db::execute($sql);
    // $results = $db->execute($sql);
    //grab number of reviews for calculating average
    $count = $results->num_rows;

    //remove non-calculation columns and sum the rest into the scores array
    while ($row = $results->fetch_assoc()) {
        unset($row['review_id']);
        unset($row['person_id']);
        unset($row['ReviewText']);
        
        foreach ($row as $key=>$value) {
            $scores[$key] += $value;
        }
    }

    //calculate average for each column and trim to two decimal places
    foreach ($scores as $key => $value) {
        $scores[$key] = substr($value / $count, 0, 4);
    }

    //sum the averages and get that average and add to the array
    foreach ($scores as $key => $value) {
        $superaverage += $value;
    }
    
    $superaverage /= count($keys);
    $superaverage = substr($superaverage, 0, 4);
    $scores['Average'] = $superaverage;

    return($scores);
}

?>
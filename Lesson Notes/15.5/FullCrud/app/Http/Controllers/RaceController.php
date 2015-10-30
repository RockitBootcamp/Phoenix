<?php

namespace App\Http\Controllers;

use Illuminate\Http\Response;
use PDO;

Class RaceController extends Controller {
    
    public function getRaces(){

        try {
            $db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root', 'apollo');

            $statement = $db->prepare('SELECT * from race');
            $statement->execute();
            $races = $statement->fetchAll();
            
            return view('races', ["races"=>$races]);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
        return View::make('welcome');

    }

    public function getRaceDetails($raceId) {

         try {
            $db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root', 'apollo');

            $statement = $db->prepare("SELECT * from race where raceId = $raceId");
            $statement->execute();
            $race = $statement->fetch();

            
            return view('raceDetail', ["race"=>$race]);

        } catch (PDOException $e) {
            die($e->getMessage());
        }
        
        return view('welcome');
    }

    public function editRaceView(){
        return view('editor');
    }

    public function createNewRace(){
        $raceName = "";
        $distance = 0;
        $location = "";
        $startDate = 0;

        // Validate input
        if(isset($_POST["raceName"])){
            $raceName = $_POST["raceName"];
        }
        if(isset($_POST["distance"])){
            $distance = $_POST["distance"];
        }
        if(isset($_POST["location"])){
            $location = $_POST["location"];
        }
        if(isset($_POST["startDate"])){
            $startDate = $_POST["startDate"];
        }
        
        echo "HI you want to make a new race";
        echo "$raceName $distance $location $startDate";

        $db = new PDO('mysql:host=localhost;dbname=race;charset=utf8', 'root', 'apollo');
        $sql = "INSERT into Race (raceName, distance, location, startDate) values (:raceName, :distance, :location, :startDate)";
        $statement = $db->prepare($sql);
        $statement->execute(["raceName"=>$raceName, "distance"=>$distance, "location"=>$location, "startDate"=>$startDate ]);
        

        echo "Inserted one record";
        return redirect('/races');


    }

    function removeRace(){
        $raceId = 0;

        

        if(isset($_POST["raceId"])){
            $raceId = $_POST["raceId"];
        }
        // echo ("Removed");
        return response()->json(["message"=>"Good job"]);
        

    }

}
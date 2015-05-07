<?php
/**
 * Created by IntelliJ IDEA.
 * User: brlamore
 * Date: 7/16/14
 * Time: 1:56 PM
 */

namespace RockIT\TechgamesBundle\Model;


class EventManager {


    private $_items = array();

    public function __construct()
    {
        $this->_items[1] = new Event(1, 1, "Registration Opens");
        $this->_items[2] = new Event(2, 1, "Complete Registration");
        $this->_items[3] = new Event(3, 1, "Avnet Conference Call");
        $this->_items[4] = new Event(4, 1, "Submit Video");
        $this->_items[5] = new Event(5, 1, "Winner Announced");
        $this->_items[6] = new Event(6, 2, "Registration");
        $this->_items[7] = new Event(7, 2, "Game Kickoff (Commons Area – Confirm your Schedules)");
        $this->_items[8] = new Event(8, 2, "3 events begin at the same time & run all morning");
        $this->_items[9] = new Event(9, 2, "On the Go lunch");
        $this->_items[10] = new Event(10, 2, "Final Showdown (3 Final Teams)");
        $this->_items[11] = new Event(11, 2, "Judges finish calculate final scores");
        $this->_items[12] = new Event(12, 2, "Network Hour (Student/Faculty/Administration/Industry)");
        $this->_items[13] = new Event(13, 2, "Awards Reception");
        $this->_items[14] = new Event(14, 3, "Complete registration");
        $this->_items[15] = new Event(15, 3, "Teams given functional requirements");
        $this->_items[16] = new Event(16, 3, "Completed projects due");
        $this->_items[17] = new Event(17, 3, "Announce winner");

    }

    public function getEvent($eventId)
    {
        return $this->_items[$eventId];
    }

    public function getGameEvents($gameId)
    {
        $results = array();

        // Search array for this game
        foreach($this->_items as $item){
            if($item->getGameId() == $gameId){
                array_push($results,$item);
            }
        }

        return $results;
    }
} 
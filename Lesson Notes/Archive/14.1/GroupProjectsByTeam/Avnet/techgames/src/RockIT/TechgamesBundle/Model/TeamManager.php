<?php
/**
 * Created by IntelliJ IDEA.
 * User: brlamore
 * Date: 7/18/14
 * Time: 4:57 PM
 */

namespace RockIT\TechgamesBundle\Model;


class TeamManager {

    private $_items = array();

    private $_profileManager;


    public function __construct()
    {

        $this->_profileManager = new ProfileManager();

        $this->_items[1] = new Team(1, "3rd-degree");
        $this->_items[2] = new Team(2, "Zoom Zoom");
        $this->_items[3] = new Team(3, "UATSpeedie");
        $this->_items[4] = new Team(4, "Artyletes");
        $this->_items[5] = new Team(5, "MCC TShooters");
        $this->_items[6] = new Team(6, "We Do Windows");
        $this->_items[7] = new Team(7, "ITT West Phoenix 2");


        $members = array();
        array_push($members, $this->_profileManager->getProfile(1));
        array_push($members, $this->_profileManager->getProfile(2));
        array_push($members, $this->_profileManager->getProfile(3));
        $this->_items[1]->setMembers($members);

        $members = array();
        array_push($members, $this->_profileManager->getProfile(4));
        $this->_items[3]->setMembers($members);
    }

    public function getTeam($teamId)
    {
        return $this->_items[$teamId];

    }

} 
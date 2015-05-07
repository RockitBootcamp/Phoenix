<?php

namespace RockIT\TechgamesBundle\Model;

class Game
{

    private $_gameId;
    private $_shortTitle;
    private $_title;
    private $_image;
    private $_icon;
    private $_color;
    private $_description;
    private $_sponsor;
    private $_supportingSponsors;
    private $_gameOwner;
    private $_judge;
    
    private $_location;
    private $_capacity;
    private $_teamSize;
    private $_seatsOpen;
    private $_teams;
    private $_standbyTeams;

    private $_overview;
    private $_skills;
    private $_scoring;
    private $_parameters;
    private $_equipment;
    private $_grading;
    private $_awards;

    private $_schedule;
    private $_dailyEvents;

    public function __construct($gameId, $shortTitle, $title, $image, $icon, $color)
    {        
        $this->_gameId = $gameId;
        $this->_title = $title;
        $this->_shortTitle = $shortTitle;
        $this->_image = $image;
        $this->_icon = $icon;
        $this->_color = $color;

        // Default values
        $this->_description = "Combines video production skills, environmental awareness and marketing skills. Create a short video about environmental initiatives at their college designed to promote environmental awareness.";
        $this->_sponsor = "";
        $this->_supportingSponsors =  array('1' => "Cisco");
        $this->_gameOwner = new Profile(2, "Cat","Silverman", "csilverman@example.com");
        $this->_judge = "";
        $this->_location = "On";
        $this->_capacity = "55";
        $this->_teamSize = "2-3";
        $this->_seatsOpen = "11";
        $this->_teams = array();
        $this->_standbyTeams =  array();
        $this->_overview = "";
        $this->_skills = "<ul><li>Donec ullamcorper</li><li>Somsidkeic</li><li>Fusce dapidbu</li></ul>";
        $this->_scoring = "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.";
        $this->_parameters = "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo. (2) Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.";
        $this->_equipment = "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.";
        $this->_grading = "<ul><li>25 pts - Donec Ullam</li><li>25 pts - Nulla non Metus</li><li>50 pts - Vestibulum id Ligula</li></ul>";
        $this->_awards = "Each team will receive $1000 scholarship";
        $this->_schedule = "SCHEDULE GOES HERE";

    }


    public function getGameId()
    {
        return $this->_gameId;
    }

    public function getTitle()
    {
        return $this->_title;
    }

    public function setTitle($title)
    {
        $this->_title = $title;
    }

    public function getShortTitle()
    {
        return $this->_shortTitle;
    }

    public function setShortTitle($shortTitle)
    {
        $this->_shortTitle = $shortTitle;
    }

    public function getImage()
    {
        return $this->_image;
    }

    public function setImage($image)
    {
        $this->_image = $image;
    }

    public function getIcon()
    {
        return $this->_icon;
    }

    public function setIcon($icon)
    {
        $this->_icon = $icon;
    }

    public function getColor()
    {
        return $this->_color;
    }

    public function setColor($color)
    {
        $this->_color = $color;
    }

    public function getDescription()
    {
        return $this->_description;
    }

    public function setDescription($description)
    {
        $this->_description = $description;
    }

    public function getSponsor()
    {
        return $this->_sponsor;
    }

    public function setSponsor($sponsor)
    {
        $this->_sponsor = $sponsor;
    }

    public function getSupportingSponsors()
    {
        return $this->_supportingSponsors;
    }

    public function setSupportingSponsors($supportingSponsors)
    {
        $this->_supportingSponsors = $supportingSponsors;
    }

    public function getGameOwner()
    {
        return $this->_gameOwner;
    }

    public function setGameOwner($gameOwner)
    {
        $this->_gameOwner = $gameOwner;
    }

    public function getJudge()
    {
        return $this->_judge;
    }

    public function setJudge($judge)
    {
        $this->_judge = $judge;
    }

    public function getLocation()
    {
        return $this->_location;
    }

    public function setLocation($location)
    {
        $this->_location = $location;
    }

    public function getCapacity()
    {
        return $this->_capacity;
    }

    public function setCapacity($capacity)
    {
        $this->_capacity = $capacity;
    }

    public function getTeamSize()
    {
        return $this->_teamSize;
    }

    public function setTeamSize($teamSize)
    {
        $this->_teamSize = $teamSize;
    }

    public function getSeatsOpen()
    {
        return $this->_seatsOpen;
    }

    public function setSeatsOpen($seatsOpen)
    {
        $this->_seatsOpen = $seatsOpen;
    }

    public function getTeams()
    {
        return $this->_teams;
    }

    public function setTeams($teams)
    {
        $this->_teams = $teams;
    }

    public function getStandbyTeams()
    {
        return $this->_standbyTeams;
    }

    public function setStandbyTeams($standbyTeams)
    {
        $this->_standbyTeams = $standbyTeams;
    }

    public function getOverview()
    {
        return $this->_overview;
    }

    public function setOverview($overview)
    {
        $this->_overview = $overview;
    }

    public function getSkills()
    {
        return $this->_skills;
    }

    public function setSkills($skills)
    {
        $this->_skills = $skills;
    }

    public function getScoring()
    {
        return $this->_scoring;
    }

    public function setScoring($scoring)
    {
        $this->_scoring = $scoring;
    }

    public function getParameters()
    {
        return $this->_parameters;
    }

    public function setParameters($parameters)
    {
        $this->_parameters = $parameters;
    }

    public function getEquipment()
    {
        return $this->_equipment;
    }

    public function setEquipment($equipment)
    {
        $this->_equipment = $equipment;
    }

    public function getGrading()
    {
        return $this->_grading;
    }

    public function setGrading($grading)
    {
        $this->_grading = $grading;
    }

    public function getAwards()
    {
        return $this->_awards;
    }

    public function setAwards($awards)
    {
        $this->_awards = $awards;
    }

    public function getSchedule()
    {
        return $this->_schedule;
    }

    public function setSchedule($schedule)
    {

        //
        $this->_dailyEvents =  array();


        $this->_schedule = $schedule;

        // Group by day for events in schedule
        foreach($schedule as $event){

            // Append to existing day
            if (array_key_exists($event->getStartDate(), $this->_dailyEvents)) {

                array_push($this->_dailyEvents[$event->getStartDate()], $event);

            }
            else {

                // Add new day with array of events
                $this->_dailyEvents[$event->getStartDate()] = array($event);

            }

        }
    }

    public function getDailySchedule()
    {
        return $this->_dailyEvents;
    }


   

}

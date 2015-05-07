<?php

namespace RockIT\TechgamesBundle\Model;

class Event
{

    private $_eventId;
    private $_gameId;
    private $_title;
    private $_startDate;
    private $_startDateTime;
    private $_endDate;
    private $_endDateTime;
    private $_endTimeUnspecified;

    public function __construct($eventId, $gameId, $title)
    {        
        $this->_eventId = $eventId;
        $this->_gameId = $gameId;
        $this->_title = $title;
        
        $this->_startDate = "4/12/2014";
        $this->_startDateTime = "4/12/2014 7:00 AM";

        $this->_endDate = "4/12/2014";
        $this->_endDateTime = "4/12/2014 8:00 AM";
        $this->_endTimeUnspecified = false;
        
    }

    /**
     * @return mixed
     */
    public function getGameId()
    {
        return $this->_gameId;
    }

    /**
     * @param mixed $gameId
     */
    public function setGameId($gameId)
    {
        $this->_gameId = $gameId;
    }



    /**
     * @return string
     */
    public function getEndDate()
    {
        return $this->_endDate;
    }

    /**
     * @param string $endDate
     */
    public function setEndDate($endDate)
    {
        $this->_endDate = $endDate;
    }

    /**
     * @return string
     */
    public function getEndDateTime()
    {
        return $this->_endDateTime;
    }

    /**
     * @param string $endDateTime
     */
    public function setEndDateTime($endDateTime)
    {
        $this->_endDateTime = $endDateTime;
    }

    /**
     * @return boolean
     */
    public function getEndTimeUnspecified()
    {
        return $this->_endTimeUnspecified;
    }

    /**
     * @param boolean $endTimeUnspecified
     */
    public function setEndTimeUnspecified($endTimeUnspecified)
    {
        $this->_endTimeUnspecified = $endTimeUnspecified;
    }

    /**
     * @return int
     */
    public function getEventId()
    {
        return $this->_eventId;
    }


    /**
     * @return string
     */
    public function getStartDate()
    {
        return $this->_startDate;
    }

    /**
     * @param string $startDate
     */
    public function setStartDate($startDate)
    {
        $this->_startDate = $startDate;
    }

    /**
     * @return string
     */
    public function getStartDateTime()
    {
        return $this->_startDateTime;
    }

    /**
     * @param string $startDateTime
     */
    public function setStartDateTime($startDateTime)
    {
        $this->_startDateTime = $startDateTime;
    }

    /**
     * @return string
     */
    public function getTitle()
    {
        return $this->_title;
    }

    /**
     * @param string $title
     */
    public function setTitle($title)
    {
        $this->_title = $title;
    }


    /**
     * @param int $maxLen
     * @return string
     */
    public function getPrettyTitle($maxLen=12)
    {
        if(strlen($this->_title) > $maxLen){

            return substr($this->_title,0,$maxLen).'...';

        }
        else{
            return $this->_title;
        }

    }

}
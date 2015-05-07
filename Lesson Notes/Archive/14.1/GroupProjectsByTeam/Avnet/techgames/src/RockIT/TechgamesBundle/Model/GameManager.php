<?php

namespace RockIT\TechgamesBundle\Model;

use RockIT\TechgamesBundle\Model\EventManager;
use RockIT\TechgamesBundle\Model\ProfileManager;
use RockIT\TechgamesBundle\Model\TeamManager;

class GameManager
{
    private $_items = array();
    private $_eventManager;
    private $_profileManager;
    private $_teamManager;

    public function __construct()
    {

        $this->_eventManager = new EventManager();
        $this->_profileManager = new ProfileManager();
        $this->_teamManager = new TeamManager();


        $this->_items[1] = new Game(1, "Green Video", "Green Video Compitition","group.png", "", "");
        $this->_items[2] = new Game(2, "Fastest Computer", "HP Build the Fastest Computer", "build.png", "", "");
        $this->_items[3] = new Game(3, "Virtual Android","Virtual Android™ App Showdown", "", "signal", "#a0c53b");
        $this->_items[4] = new Game(4, "Desktop Domination","Desktop Domination", "", "adjust", "#0e97c0");
        $this->_items[5] = new Game(5, "Robot Race","Robot Race Obstacle Course", "robot.png", "", "");
        $this->_items[6] = new Game(6, "Java Blitz","Java Blitz", "", "fire", "#cf7338");
        $this->_items[7] = new Game(7, "Supply Chain","JDA Supply Chain Challenge", "", "refresh", "#c52f2b");
        $this->_items[8] = new Game(8, "Cisco Networking Battle","Cisco Networking Expert Battle", "", "screenshot", "#3f6470");

        // Populate Event info for game
        foreach($this->_items as $item){
            $events = $this->_eventManager->getGameEvents($item->getGameId());
            $item->setSchedule($events);
        }

        $this->_items[1]->setOverview("<ul>
              <li>The following items are included in the event attachment (see game page).</li>
              <li>Purpose and expectations for the video</li>
              <li>Judging criteria</li>
              <li>Technical specifications for the video</li>
              <li>Rules and expectations for the game</li>
              <li>Contact information for sending questions</li>
            </ul>
            <p>PLEASE NOTE: Students need to abide by all national and international copyright laws (i.e. images, music, etc.)</p>
            <p>A one-hour toll-free conference call will be scheduled on March 10, 2014 and will be open for all teams to attend.  Student teams will have an opportunity to obtain further information on Avnet’s requirements.  Students should be ready to ask questions that will help refine what Avnet expects students to achieve with this video.  Students will also have an email contact at Avnet who will field those questions.</p>
            <p>Student teams will then have until March 30, 2014 to prepare the video.  All video entries must be submitted by 5PM Arizona time on March 30th, 2014.  Not sure how to get started? Looking for some resources? Check out these resources, compliments of SkilledUp!</p>
            <p>All videos will receive a preliminary review to ensure compliance with the published rules of this competition.</p>
            <p>The winning team will be announced on April 12, 2014.</p>");

        $this->_items[1]->setSkills("<ul>
              <li>Multimedia video experience</li>
              <li>Experience uploading video to YouTube</li>
              <li>Video scripting</li>
              <li>Marketing</li>
              <li>Interviewing skills</li>
              <li>Presentation skills</li>
              <li>Awareness of environmental issues &amp;associated technologies</li>
            </ul>") ;
       $this->_items[1]->setParameters("<p>Submitted video must:</p>
            <ul>
              <li>be no longer than 4 minutes (no minimum)</li>
              <li>comply with the published rules of this competition</li>
              <li>reflect the environmental values of the student’s college or university</li>
              <li>convey a compelling message that raises environmental awareness</li>
              <li>demonstrates overall quality of workmanship in editing</li>
              <li>be interesting</li>
              <li>have smooth flowing transitions and audio levels</li>
              <li>use graphic materials</li>
              <li>effectively highlight the use of technology</li>
              <li>addresses the college’s efforts to reduce its carbon footprint</li>
            </ul>");

       $this->_items[1]->setGrading("<ul>
              <li>25 pts - Donec Ullam</li>
              <li>25 pts - Nulla non Metus</li>
              <li>50 pts - Vestibulum id Ligula</li>
            </ul>");

        $this->_items[1]->setSponsor(new Sponsor(1, "RockIT Bootcamp"));
        $this->_items[1]->setGameOwner($this->_profileManager->getProfile(2));
        $this->_items[1]->setJudge($this->_profileManager->getProfile(3));

        $teams = array();
        array_push($teams, $this->_teamManager->getTeam(1));
        $this->_items[1]->setTeams($teams);

        $standbyTeams = array();
        array_push($standbyTeams, $this->_teamManager->getTeam(3));
        $this->_items[1]->setStandbyTeams($standbyTeams);

    }

    public function getGame($gameId)
    {       
        return $this->_items[$gameId];        
    }

    public function getAllGames()
    {       
        return $this->_items;        
    }

}
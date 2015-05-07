<?php

namespace RockIT\TechgamesBundle\Model;

class ProfileManager
{
    private $_items = array();

    public function __construct()
    {        
        $this->_items[1] = new Profile(1, "RockIT","Bootcamp", "rockit@example.com");
        $this->_items[2] = new Profile(2, "Cat","Silverman", "csilverman@example.com");
        $this->_items[3] = new Profile(3, "Alfredo","Valdes", "avaldes@example.com");
        $this->_items[4] = new Profile(4, "Ken","Faulty", "kfault@example.com");
        $this->_items[5] = new Profile(5, "Ken","Faulty", "kfault@example.com");
        $this->_items[6] = new Profile(6, "Jack","Jackson", "jackson25@example.com");

    }

    public function getProfile($profileId)
    {       
        return $this->_items[$profileId];
        
    }

}
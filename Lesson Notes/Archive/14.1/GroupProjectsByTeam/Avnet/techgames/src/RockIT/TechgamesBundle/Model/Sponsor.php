<?php
/**
 * Created by IntelliJ IDEA.
 * User: brlamore
 * Date: 7/18/14
 * Time: 4:13 PM
 */

namespace RockIT\TechgamesBundle\Model;


class Sponsor {


    private $_sponsorId;
    private $_name;
    private $_website;

    public function __construct($sponsorId, $name)
    {
        $this->_sponsorId = $sponsorId;
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->_name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->_name = $name;
    }

    /**
     * @return mixed
     */
    public function getSponsorId()
    {
        return $this->_sponsorId;
    }

    /**
     * @param mixed $sponsorId
     */
    public function setSponsorId($sponsorId)
    {
        $this->_sponsorId = $sponsorId;
    }

    /**
     * @return mixed
     */
    public function getWebsite()
    {
        return $this->_website;
    }

    /**
     * @param mixed $website
     */
    public function setWebsite($website)
    {
        $this->_website = $website;
    }




} 
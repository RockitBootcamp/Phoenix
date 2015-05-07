<?php

namespace RockIT\TechgamesBundle\Model;

class Profile
{

    private $_profileId;
    private $_firstName;
    private $_lastName;
    private $_gender;
    private $_age;
    private $_address;
    private $_website;
    private $_email;
    private $_school;
    private $_bio;
    private $_schedule;

    public function __construct($profileId, $firstName, $lastName, $email)
    {        
        $this->_profileId = $profileId;
        $this->_firstName = $firstName;
        $this->_lastName = $lastName;
        $this->_email = $email;

        // Default values
        $this->_gender = "Male";
        $this->_age = 20;
        $this->_address = "1234 E. Main Street Anywhere USA 12345";
        $this->_website = "example.com";
        $this->_email = strtolower($this->_firstName) . "." . strtolower($this->_lastName) . "@example.com";
        $this->_school = "RockIT Bootcamp";
        $this->_bio = "Donec ullamcorper nulla non metus auctor fringilla. Vestibulum id ligula porta felis euismod semper. Praesent commodo cursus magna, vel scelerisque nisl consectetur. Fusce dapibus, tellus ac cursus commodo.";
        $this->_schedule = "SCHEDULE GOES HERE";

    }


    public function getProfileId()
    {
        return $this->_profileId;
    }

    public function getDisplayName()
    {
        return $this->_firstName . " " . $this->_lastName;
    }

    public function getFirstName()
    {
        return $this->_firstName;
    }

    public function setFirstName($firstName)
    {
        $this->_firstName = $firstName;
    }

    public function getLastName()
    {
        return $this->_lastName;
    }

    public function setLastName($lastName)
    {
        $this->_lastName = $lastName;
    }

    public function getGender()
    {
        return $this->_gender;
    }

    public function setGender($gender)
    {
        $this->_gender = $gender;
    }

    public function getAge()
    {
        return $this->_age;
    }

    public function setAge($age)
    {
        $this->_age = $age;
    }

    public function getAddress()
    {
        return $this->_address;
    }

    public function setAddress($address)
    {
        $this->_address = $address;
    }

    public function getWebsite()
    {
        return $this->_website;
    }

    public function setWebsite($website)
    {
        $this->_website = $website;
    }

    public function getEmail()
    {
        return $this->_email;
    }

    public function setEmail($email)
    {
        $this->_email = $email;
    }

    public function getSchool()
    {
        return $this->_school;
    }

    public function setSchool($school)
    {
        $this->_school = $school;
    }

    public function getBio()
    {
        return $this->_bio;
    }

    public function setBio($bio)
    {
        $this->_bio = $bio;
    }

    public function getSchedule()
    {
        return $this->_schedule;
    }

    public function setSchedule($schedule)
    {
        $this->_school = $schedule;
    }


}

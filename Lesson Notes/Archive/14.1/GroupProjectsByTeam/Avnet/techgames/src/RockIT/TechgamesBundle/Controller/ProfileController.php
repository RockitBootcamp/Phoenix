<?php

namespace RockIT\TechgamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RockIT\TechgamesBundle\Model\ProfileManager;


class ProfileController extends Controller
{
    private $_profileManager;

    public function __construct()
    {
        $this->_profileManager = new ProfileManager();
        
    }
    
    public function detailAction($profileId)
    {
       
        $profile = $this->_profileManager->getProfile($profileId);

        return $this->render('RockITTechgamesBundle:Profile:detail.html.twig', 
            array('profile' => $profile, 'profileId' => $profileId, 'firstName' => $profile->getDisplayName()));
    }
}
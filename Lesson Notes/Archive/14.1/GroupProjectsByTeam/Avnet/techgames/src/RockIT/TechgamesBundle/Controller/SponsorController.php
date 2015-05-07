<?php

namespace RockIT\TechgamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SponsorController extends Controller
{
    
    public function detailAction($sponsorId)
    {

        return $this->render('RockITTechgamesBundle:Sponsor:detail.html.twig', 
            array('sponsorId' => $sponsorId));
    }
}
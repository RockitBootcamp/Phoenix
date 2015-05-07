<?php

namespace RockIT\TechgamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class TeamController extends Controller
{
    
    public function detailAction($teamId)
    {

        return $this->render('RockITTechgamesBundle:Team:detail.html.twig', 
            array('teamId' => $teamId));
    }
}
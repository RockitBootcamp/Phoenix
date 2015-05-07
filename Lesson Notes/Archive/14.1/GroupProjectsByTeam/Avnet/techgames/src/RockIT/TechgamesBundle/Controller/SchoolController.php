<?php

namespace RockIT\TechgamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class SchoolController extends Controller
{
    
    public function detailAction($schoolId)
    {
        return $this->render('RockITTechgamesBundle:School:detail.html.twig', 
            array('schoolId' => $schoolId));
    }
}
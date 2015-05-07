<?php

namespace RockIT\TechgamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RockIT\TechgamesBundle\Model\GameManager;

class DefaultController extends Controller
{

    private $_gameManager;

    public function __construct()
    {
        $this->_gameManager = new GameManager();    
    }

    public function indexAction()
    {
        $games = $this->_gameManager->getAllGames();

        return $this->render('RockITTechgamesBundle:Default:index.html.twig',
            array('games' => $games));
    }

    public function aboutAction()
    {
        return $this->render('RockITTechgamesBundle:Default:about.html.twig');
    }

}

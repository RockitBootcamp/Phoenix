<?php

namespace RockIT\TechgamesBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use RockIT\TechgamesBundle\Model\GameManager;

class GameController extends Controller
{
    private $_gameManager;

    public function __construct()
    {
        $this->_gameManager = new GameManager();    
    }

    public function detailAction($gameId)
    {
        $game = $this->_gameManager->getGame($gameId);

        return $this->render('RockITTechgamesBundle:Game:detail.html.twig', 
            array('game' => $game, 'gameId' => $gameId));
    }

    public function editAction($gameId)
    {
        $game = $this->_gameManager->getGame($gameId);
        
        return $this->render('RockITTechgamesBundle:Game:edit.html.twig', 
            array('game' => $game, 'gameId' => $gameId));
    }

    public function joinAction($gameId)
    {

        return $this->render('RockITTechgamesBundle:Game:join.html.twig', 
            array('gameId' => $gameId));
    }
}

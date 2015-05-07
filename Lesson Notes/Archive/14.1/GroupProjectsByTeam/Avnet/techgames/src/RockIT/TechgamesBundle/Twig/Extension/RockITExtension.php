<?php
/**
 * Created by IntelliJ IDEA.
 * User: brlamore
 * Date: 7/17/14
 * Time: 2:40 PM
 */

namespace RockIT\TechgamesBundle\Twig\Extension;

class RockITExtension extends \Twig_Extension {

    public function getName()
    {
        return "rockit_extension";
    }

    public function truncateFilter($text, $maxLen = 30)
    {

        if(strlen($text) > $maxLen){

            $text = substr($text,0,$maxLen).'...';

        }


        return $text;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('truncate', array($this, 'truncFilter')),
        );
    }
}

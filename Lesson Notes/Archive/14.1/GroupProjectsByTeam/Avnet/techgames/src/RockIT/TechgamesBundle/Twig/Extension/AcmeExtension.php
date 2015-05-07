<?php
/**
 * Created by IntelliJ IDEA.
 * User: brlamore
 * Date: 7/17/14
 * Time: 3:43 PM
 */

namespace RockIT\TechgamesBundle\Twig\Extension;


class AcmeExtension extends \Twig_Extension {

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('price', array($this, 'priceFilter')),
        );
    }

    public function priceFilter($number, $decimals = 0, $decPoint = '.', $thousandsSep = ',')
    {
        $price = number_format($number, $decimals, $decPoint, $thousandsSep);
        $price = '$'.$price;

        return $price;
    }

    public function getName()
    {
        return 'acme_extension';
    }

} 
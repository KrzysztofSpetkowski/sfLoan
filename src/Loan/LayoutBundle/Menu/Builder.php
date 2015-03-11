<?php


/**
 * Description of Builder
 *
 * @author krzysiek
 */


namespace Loan\LayoutBundle\Menu;

use Knp\Menu\FactoryInterface;
use Symfony\Component\DependencyInjection\ContainerAware;

class Builder extends ContainerAware {
  
    public function mainMenu(FactoryInterface $factory, array $options)
    {
    $menu = $factory->createItem('root');
        $menu->setChildrenAttribute('class', 'nav navbar-nav');
        
        $menu->addChild('Strona główna', [
            'route' => 'loan_loan_list'
            ]) ;
         $menu->addChild('Pożyczki bankowe', [
            'uri' => '#'
            ]) ;
          $menu->addChild('Pożyczki pozabankowe', [
            'uri' => '#'
            ]) ;
           $menu->addChild('Lista klientów', [
            'uri' => '#'
            ]) ;
    return $menu;        
    }

}

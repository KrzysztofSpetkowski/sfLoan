<?php

namespace Loan\LayoutBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LoanLayoutBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Loan\AdminBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class DefaultController extends Controller
{
    public function indexAction($name)
    {
        return $this->render('LoanAdminBundle:Default:index.html.twig', array('name' => $name));
    }
}

<?php

namespace Loan\ProductBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;

class LoanController extends Controller
{
    public function listAction()
    {
        return $this->render('LoanProductBundle:Loan:list.html.twig', array());
    }
}

<?php

namespace Loan\UserBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

class LoanUserBundle extends Bundle
{
    public function getParent()
    {
        return 'FOSUserBundle';
    }
}

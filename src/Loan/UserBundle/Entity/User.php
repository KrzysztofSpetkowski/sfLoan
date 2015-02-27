<?php

namespace Loan\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * User
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class User
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="loan", type="string", length=255)
     */
    private $loan;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set loan
     *
     * @param string $loan
     * @return User
     */
    public function setLoan($loan)
    {
        $this->loan = $loan;

        return $this;
    }

    /**
     * Get loan
     *
     * @return string 
     */
    public function getLoan()
    {
        return $this->loan;
    }
}

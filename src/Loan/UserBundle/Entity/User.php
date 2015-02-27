<?php

namespace Loan\UserBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\Common\Collections\ArrayCollection;

    /**
     * @ORM\Entity
     * @ORM\Table(name="fos_user")
     */
class User extends BaseUser
{
    public function __construct()
    {
        parent::__construct();
        // your own logic
    }
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;
   
     /**
      * @ORM\OneToMany(targetEntity="User", mappedBy="loan")
      * @var ArrayCollection
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

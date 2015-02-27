<?php

namespace Loan\ProductBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Loan
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Loan
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
     * @ORM\Column(name="description", type="string", length=255)
     */
    private $description;

    /**
     * @var string
     *
     * @ORM\Column(name="title", type="text")
     */
    private $title;

    /**
     * @var string
     *
     * @ORM\Column(name="bank_loan", type="string", length=255)
     */
    private $bankLoan;

    /**
     * @var string
     *
     * @ORM\Column(name="non_bank_loan", type="string", length=255)
     */
    private $nonBankLoan;


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
     * Set description
     *
     * @param string $description
     * @return Loan
     */
    public function setDescription($description)
    {
        $this->description = $description;

        return $this;
    }

    /**
     * Get description
     *
     * @return string 
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Set title
     *
     * @param string $title
     * @return Loan
     */
    public function setTitle($title)
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get title
     *
     * @return string 
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Set bankLoan
     *
     * @param string $bankLoan
     * @return Loan
     */
    public function setBankLoan($bankLoan)
    {
        $this->bankLoan = $bankLoan;

        return $this;
    }

    /**
     * Get bankLoan
     *
     * @return string 
     */
    public function getBankLoan()
    {
        return $this->bankLoan;
    }

    /**
     * Set nonBankLoan
     *
     * @param string $nonBankLoan
     * @return Loan
     */
    public function setNonBankLoan($nonBankLoan)
    {
        $this->nonBankLoan = $nonBankLoan;

        return $this;
    }

    /**
     * Get nonBankLoan
     *
     * @return string 
     */
    public function getNonBankLoan()
    {
        return $this->nonBankLoan;
    }
}

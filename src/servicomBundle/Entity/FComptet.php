<?php

namespace servicomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FComptet
 *
 * @ORM\Table(name="f_comptet")
 * @ORM\Entity
 */
class FComptet
{
    /**
     * @var string
     *
     * @ORM\Column(name="CT_NUM", type="string", length=16, nullable=true)
     */
    private $ctNum;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Intitule", type="string", length=35, nullable=true)
     */
    private $ctIntitule;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Type", type="string", length=21, nullable=true)
     */
    private $ctType;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Contact", type="string", length=49, nullable=true)
     */
    private $ctContact;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Adresse", type="string", length=58, nullable=true)
     */
    private $ctAdresse;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Complement", type="string", length=42, nullable=true)
     */
    private $ctComplement;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_CodePostal", type="string", length=34, nullable=true)
     */
    private $ctCodepostal;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Ville", type="string", length=35, nullable=true)
     */
    private $ctVille;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_CodeRegion", type="string", length=31, nullable=true)
     */
    private $ctCoderegion;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_DateCreate", type="string", length=19, nullable=true)
     */
    private $ctDatecreate;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telephone", type="string", length=21, nullable=true)
     */
    private $ctTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telephone1", type="string", length=21, nullable=true)
     */
    private $ctTelephone1;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telephone2", type="string", length=35, nullable=true)
     */
    private $ctTelephone2;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Telecopie", type="string", length=28, nullable=true)
     */
    private $ctTelecopie;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_EMail", type="string", length=45, nullable=true)
     */
    private $ctEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="CT_Site", type="string", length=32, nullable=true)
     */
    private $ctSite;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}


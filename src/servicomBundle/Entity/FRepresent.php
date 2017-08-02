<?php

namespace servicomBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * FRepresent
 *
 * @ORM\Table(name="f_represent")
 * @ORM\Entity
 */
class FRepresent
{
    /**
     * @var integer
     *
     * @ORM\Column(name="RE_No", type="integer", nullable=true)
     */
    private $reNo;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Nom", type="string", length=12, nullable=true)
     */
    private $reNom;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Prenom", type="string", length=9, nullable=true)
     */
    private $rePrenom;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Region", type="string", length=9, nullable=true)
     */
    private $reRegion;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_Telephone", type="string", length=5, nullable=true)
     */
    private $reTelephone;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_EMail", type="string", length=10, nullable=true)
     */
    private $reEmail;

    /**
     * @var string
     *
     * @ORM\Column(name="RE_DateCreation", type="string", length=19, nullable=true)
     */
    private $reDatecreation;

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;


}

